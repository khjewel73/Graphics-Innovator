<?php
/**
 * Widget Areas (Sidebars)
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function gi_register_widgets() {
    $footer_cols = [
        [ 'footer-1', __( 'Footer Column 1 — About',        'graphics-innovator' ) ],
        [ 'footer-2', __( 'Footer Column 2 — Services',     'graphics-innovator' ) ],
        [ 'footer-3', __( 'Footer Column 3 — Quick Links',  'graphics-innovator' ) ],
        [ 'footer-4', __( 'Footer Column 4 — Contact Info', 'graphics-innovator' ) ],
    ];

    foreach ( $footer_cols as $col ) {
        register_sidebar( [
            'name'          => $col[1],
            'id'            => $col[0],
            'description'   => __( 'Add widgets here for the footer column.', 'graphics-innovator' ),
            'before_widget' => '<div class="gi-footer-widget gi-widget-%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="gi-footer-widget-title">',
            'after_title'   => '</h4>',
        ] );
    }

    // Primary blog sidebar (if needed)
    register_sidebar( [
        'name'          => __( 'Blog Sidebar', 'graphics-innovator' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Add widgets for the blog sidebar.', 'graphics-innovator' ),
        'before_widget' => '<div class="gi-sidebar-widget gi-widget-%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="gi-sidebar-widget-title">',
        'after_title'   => '</h4>',
    ] );
}

add_action( 'widgets_init', 'gi_register_widgets' );
