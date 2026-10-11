<?php
/**
 * Custom Navigation Menu Walker
 * Adds dropdown support with accessibility attributes.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class GI_Nav_Walker extends Walker_Nav_Menu {

    /** Open a menu branch (ul/div wrapper for submenu) */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"gi-submenu gi-submenu--depth-$depth\">\n";
    }

    /** Open a menu item (li element) */
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent  = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;

        // Add custom classes
        $classes[] = 'gi-menu-item';
        $classes[] = 'gi-menu-item--depth-' . $depth;
        if ( in_array( 'menu-item-has-children', $classes ) ) {
            $classes[] = 'gi-has-submenu';
        }
        if ( in_array( 'current-menu-item', $classes ) || in_array( 'current-page-ancestor', $classes ) ) {
            $classes[] = 'gi-menu-item--active';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'gi-menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        // Build the anchor tag
        $atts = [];
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';
        $atts['class']  = 'gi-menu-link' . ( $depth > 0 ? ' gi-submenu-link' : '' );

        // Add aria-haspopup for dropdown parents
        if ( in_array( 'menu-item-has-children', (array) $item->classes ) ) {
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = isset( $args->before ) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= ( isset( $args->link_before ) ? $args->link_before : '' ) . $title . ( isset( $args->link_after ) ? $args->link_after : '' );

        // Add dropdown chevron for parent items
        if ( in_array( 'menu-item-has-children', (array) $item->classes ) ) {
            $item_output .= '<span class="gi-menu-chevron" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="14" height="14"><polyline points="6 9 12 15 18 9"></polyline></svg></span>';
        }

        $item_output .= '</a>';
        $item_output .= isset( $args->after ) ? $args->after : '';

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    /** Close a menu item (li element) */
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }

    /** Close a menu branch */
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "$indent</ul>\n";
    }
}
