<?php
/**
 * Theme Setup — add_theme_support, menus, image sizes
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'gi_theme_setup' ) ) :

    function gi_theme_setup() {

        // ── Translations ─────────────────────────────
        load_theme_textdomain( 'graphics-innovator', GI_ROOT . '/languages' );

        // ── Core WordPress Feature Flags ─────────────
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ] );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );

        // ── Custom Logo ───────────────────────────────
        add_theme_support( 'custom-logo', [
            'height'      => 80,
            'width'       => 200,
            'flex-width'  => true,
            'flex-height' => true,
            'header-text' => [ 'site-title', 'site-description' ],
        ] );

        // ── Custom Background ─────────────────────────
        add_theme_support( 'custom-background', [
            'default-color' => '0A1628',
        ] );

        // ── Navigation Menus ──────────────────────────
        register_nav_menus( [
            'primary'     => esc_html__( 'Primary Navigation', 'graphics-innovator' ),
            'footer_col1' => esc_html__( 'Footer — Services',  'graphics-innovator' ),
            'footer_col2' => esc_html__( 'Footer — Quick Links','graphics-innovator' ),
        ] );

        // ── Custom Image Sizes ────────────────────────
        add_image_size( 'gi-hero',      1920, 900,  true );  // Hero slider
        add_image_size( 'gi-service',   600,  450,  true );  // Service cards
        add_image_size( 'gi-portfolio', 800,  600,  true );  // Portfolio grid
        add_image_size( 'gi-thumb',     400,  300,  true );  // General thumbnails
        add_image_size( 'gi-square',    300,  300,  true );  // Team / avatar

        // Make custom sizes available in Media Library
        add_filter( 'image_size_names_choose', function( $sizes ) {
            return array_merge( $sizes, [
                'gi-hero'      => esc_html__( 'GI Hero',      'graphics-innovator' ),
                'gi-service'   => esc_html__( 'GI Service',   'graphics-innovator' ),
                'gi-portfolio' => esc_html__( 'GI Portfolio', 'graphics-innovator' ),
                'gi-thumb'     => esc_html__( 'GI Thumbnail', 'graphics-innovator' ),
                'gi-square'    => esc_html__( 'GI Square',    'graphics-innovator' ),
            ] );
        } );

        // ── Content Width ─────────────────────────────
        if ( ! isset( $content_width ) ) {
            $content_width = 1280;
        }
    }

endif;

add_action( 'after_setup_theme', 'gi_theme_setup' );

// ─────────────────────────────────────────────
//  DOCUMENT TITLE SEPARATOR
// ─────────────────────────────────────────────
add_filter( 'document_title_separator', function() {
    return '|';
} );

// ─────────────────────────────────────────────
//  CLEAN UP <HEAD>
// ─────────────────────────────────────────────
remove_action( 'wp_head', 'wp_generator' );                // Remove WP version
remove_action( 'wp_head', 'wlwmanifest_link' );            // Windows Live Writer
remove_action( 'wp_head', 'rsd_link' );                    // RSD link
remove_action( 'wp_head', 'wp_shortlink_wp_head' );        // Shortlink
add_filter( 'the_generator', '__return_false' );           // Remove WP generator tag

// ─────────────────────────────────────────────
//  EXCERPT
// ─────────────────────────────────────────────
add_filter( 'excerpt_length', function() { return 25; } );
add_filter( 'excerpt_more',   function() { return '…'; } );

// ─────────────────────────────────────────────
//  BODY CLASS HELPER
// ─────────────────────────────────────────────
add_filter( 'body_class', function( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'gi-homepage';
    }
    if ( is_page() ) {
        global $post;
        if ( $post ) {
            $classes[] = 'gi-page-' . $post->post_name;
        }
    }
    return $classes;
} );

// ─────────────────────────────────────────────
//  AUTO-PROVISION JEWELRY RETOUCHING PAGE & MENU
// ─────────────────────────────────────────────
add_action( 'init', function() {
    if ( get_option( 'gi_jewelry_retouching_setup_v1' ) ) {
        return;
    }

    $page = get_page_by_path( 'jewelry-retouching' );
    if ( ! $page ) {
        $page_id = wp_insert_post( [
            'post_title'     => 'Jewelry Retouching',
            'post_name'      => 'jewelry-retouching',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
        ] );
        if ( ! is_wp_error( $page_id ) && $page_id ) {
            update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
        }
    } else {
        $page_id = $page->ID;
        update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
    }

    $locations = get_nav_menu_locations();
    if ( ! empty( $locations['primary'] ) && $page_id ) {
        $menu_id = $locations['primary'];
        $items = wp_get_nav_menu_items( $menu_id );
        $parent_id = 0;
        $already_in_menu = false;
        $max_order = 0;

        if ( ! empty( $items ) ) {
            foreach ( $items as $item ) {
                if ( $item->title === 'Services' && $item->menu_item_parent == 0 ) {
                    $parent_id = $item->ID;
                }
                if ( $item->object_id == $page_id || $item->title === 'Jewelry Retouching' ) {
                    $already_in_menu = true;
                }
                if ( $item->menu_order > $max_order ) {
                    $max_order = $item->menu_order;
                }
            }
        }

        if ( ! $already_in_menu && $parent_id ) {
            wp_update_nav_menu_item( $menu_id, 0, [
                'menu-item-title'     => 'Jewelry Retouching',
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_id,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-parent-id' => $parent_id,
                'menu-item-position'  => $max_order + 1,
            ] );
        }
    }

    update_option( 'gi_jewelry_retouching_setup_v1', 1 );
} );

// ─────────────────────────────────────────────
//  AUTO-CLEANUP / REMOVE NECK JOINT SERVICE
// ─────────────────────────────────────────────
add_action( 'init', function() {
    if ( get_option( 'gi_neck_joint_cleanup_v1' ) ) {
        return;
    }

    // Force delete the page if it exists
    $page = get_page_by_path( 'neck-joint-service' );
    if ( $page ) {
        wp_delete_post( $page->ID, true );
    }

    // Remove Neck Joint item from all nav menus
    $menus = wp_get_nav_menus();
    if ( ! empty( $menus ) ) {
        foreach ( $menus as $m ) {
            $items = wp_get_nav_menu_items( $m->term_id );
            if ( $items ) {
                foreach ( $items as $item ) {
                    if ( stripos( $item->url, 'neck-joint-service' ) !== false || stripos( $item->title, 'Neck Joint' ) !== false ) {
                        wp_delete_post( $item->ID, true );
                    }
                }
            }
        }
    }

    update_option( 'gi_neck_joint_cleanup_v1', 1 );
} );

// 301 Redirect for legacy neck-joint-service URLs to ghost-mannequin-service
add_action( 'template_redirect', function() {
    $uri = $_SERVER['REQUEST_URI'] ?? '';
    if ( stripos( $uri, 'neck-joint-service' ) !== false ) {
        wp_redirect( home_url( '/ghost-mannequin-service/' ), 301 );
        exit;
    }
} );

// ─────────────────────────────────────────────
//  AUTO-PROVISION 360 PRODUCT RETOUCH PAGE & MENU
// ─────────────────────────────────────────────
add_action( 'init', function() {
    if ( get_option( 'gi_360_product_retouch_setup_v1' ) ) {
        return;
    }

    $page = get_page_by_path( '360-product-retouch' );
    if ( ! $page ) {
        $page_id = wp_insert_post( [
            'post_title'     => '360 Product Retouch',
            'post_name'      => '360-product-retouch',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
        ] );
        if ( ! is_wp_error( $page_id ) && $page_id ) {
            update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
        }
    } else {
        $page_id = $page->ID;
        update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
    }

    $locations = get_nav_menu_locations();
    if ( ! empty( $locations['primary'] ) && $page_id ) {
        $menu_id = $locations['primary'];
        $items = wp_get_nav_menu_items( $menu_id );
        $parent_id = 0;
        $already_in_menu = false;
        $max_order = 0;

        if ( ! empty( $items ) ) {
            foreach ( $items as $item ) {
                if ( $item->title === 'Services' && $item->menu_item_parent == 0 ) {
                    $parent_id = $item->ID;
                }
                if ( $item->object_id == $page_id || $item->title === '360 Product Retouch' ) {
                    $already_in_menu = true;
                }
                if ( $item->menu_order > $max_order ) {
                    $max_order = $item->menu_order;
                }
            }
        }

        if ( ! $already_in_menu && $parent_id ) {
            wp_update_nav_menu_item( $menu_id, 0, [
                'menu-item-title'     => '360 Product Retouch',
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_id,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-parent-id' => $parent_id,
                'menu-item-position'  => $max_order + 1,
            ] );
        }
    }

    update_option( 'gi_360_product_retouch_setup_v1', 1 );
} );

// ─────────────────────────────────────────────
//  AUTO-PROVISION WEDDING PHOTO RETOUCH PAGE & MENU
// ─────────────────────────────────────────────
add_action( 'init', function() {
    if ( get_option( 'gi_wedding_photo_retouch_setup_v1' ) ) {
        return;
    }

    $page = get_page_by_path( 'wedding-photo-retouch' );
    if ( ! $page ) {
        $page_id = wp_insert_post( [
            'post_title'     => 'Wedding Photo Retouch',
            'post_name'      => 'wedding-photo-retouch',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
        ] );
        if ( ! is_wp_error( $page_id ) && $page_id ) {
            update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
        }
    } else {
        $page_id = $page->ID;
        update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
    }

    $locations = get_nav_menu_locations();
    if ( ! empty( $locations['primary'] ) && $page_id ) {
        $menu_id = $locations['primary'];
        $items = wp_get_nav_menu_items( $menu_id );
        $parent_id = 0;
        $already_in_menu = false;
        $max_order = 0;

        if ( ! empty( $items ) ) {
            foreach ( $items as $item ) {
                if ( $item->title === 'Services' && $item->menu_item_parent == 0 ) {
                    $parent_id = $item->ID;
                }
                if ( $item->object_id == $page_id || $item->title === 'Wedding Photo Retouch' || $item->title === 'Weding Photo Retouch' ) {
                    $already_in_menu = true;
                }
                if ( $item->menu_order > $max_order ) {
                    $max_order = $item->menu_order;
                }
            }
        }

        if ( ! $already_in_menu && $parent_id ) {
            wp_update_nav_menu_item( $menu_id, 0, [
                'menu-item-title'     => 'Wedding Photo Retouch',
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_id,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-parent-id' => $parent_id,
                'menu-item-position'  => $max_order + 1,
            ] );
        }
    }

    update_option( 'gi_wedding_photo_retouch_setup_v1', 1 );
} );

// ─────────────────────────────────────────────
//  AUTO-PROVISION CAR PHOTO EDITING PAGE & MENU
// ─────────────────────────────────────────────
add_action( 'init', function() {
    if ( get_option( 'gi_car_photo_editing_setup_v1' ) ) {
        return;
    }

    $page = get_page_by_path( 'car-photo-editing' );
    if ( ! $page ) {
        $page_id = wp_insert_post( [
            'post_title'     => 'Car Photo Editing',
            'post_name'      => 'car-photo-editing',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
        ] );
        if ( ! is_wp_error( $page_id ) && $page_id ) {
            update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
        }
    } else {
        $page_id = $page->ID;
        update_post_meta( $page_id, '_wp_page_template', 'page-service-detail.php' );
    }

    $locations = get_nav_menu_locations();
    if ( ! empty( $locations['primary'] ) && $page_id ) {
        $menu_id = $locations['primary'];
        $items = wp_get_nav_menu_items( $menu_id );
        $parent_id = 0;
        $already_in_menu = false;
        $max_order = 0;

        if ( ! empty( $items ) ) {
            foreach ( $items as $item ) {
                if ( $item->title === 'Services' && $item->menu_item_parent == 0 ) {
                    $parent_id = $item->ID;
                }
                if ( $item->object_id == $page_id || $item->title === 'Car Photo Editing' ) {
                    $already_in_menu = true;
                }
                if ( $item->menu_order > $max_order ) {
                    $max_order = $item->menu_order;
                }
            }
        }

        if ( ! $already_in_menu && $parent_id ) {
            wp_update_nav_menu_item( $menu_id, 0, [
                'menu-item-title'     => 'Car Photo Editing',
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $page_id,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
                'menu-item-parent-id' => $parent_id,
                'menu-item-position'  => $max_order + 1,
            ] );
        }
    }

    update_option( 'gi_car_photo_editing_setup_v1', 1 );
} );

