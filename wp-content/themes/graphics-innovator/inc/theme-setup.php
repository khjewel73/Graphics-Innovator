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
