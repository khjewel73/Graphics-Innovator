<?php
/**
 * Enqueue CSS & JavaScript
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function gi_enqueue_assets() {
    // Self-hosted Inter font
    wp_enqueue_style( 'gi-inter-font', GI_FONTS . '/inter.css', [], GI_CACHE_BUSTER );

    // Master Stylesheet — split into main, header, responsive
    wp_enqueue_style( 'gi-main', GI_CSS . '/main.css', [ 'gi-inter-font' ], GI_CACHE_BUSTER );
    wp_enqueue_style( 'gi-header', GI_CSS . '/header.css', [ 'gi-main' ], GI_CACHE_BUSTER );
    wp_enqueue_style( 'gi-responsive', GI_CSS . '/responsive.css', [ 'gi-main', 'gi-header' ], GI_CACHE_BUSTER );

    // Master JavaScript — pure vanilla JS, no jQuery
    wp_enqueue_script( 'gi-main', GI_JS . '/main.js', [], GI_CACHE_BUSTER, true );

    // Pass PHP data to JS
    wp_localize_script( 'gi-main', 'GI_DATA', [
        'ajax_url'  => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'gi-nonce' ),
        'site_url'  => esc_url( home_url() ),
        'is_home'   => is_front_page() ? 'true' : 'false',
        'theme_uri' => esc_url( GI_ROOT_URI ),
    ] );

    // Comment reply
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'gi_enqueue_assets' );

// Add defer to our script tag
add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( 'gi-main' === $handle ) {
        return str_replace( ' src=', ' defer src=', $tag );
    }
    return $tag;
}, 10, 2 );

// Preconnect to Google Fonts for faster loading (replaces broken local font preload)
add_action( 'wp_head', function() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}, 1 );

// Output Open Graph + basic meta tags
add_action( 'wp_head', function() {
    $title       = get_bloginfo( 'name' );
    $description = get_bloginfo( 'description' );
    $url         = get_permalink();
    $image       = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'full' ) : '';

    if ( is_front_page() ) {
        $description = $description ?: 'Professional photo editing services — Clipping Path, Background Removal, Ghost Mannequin, Image Masking. Starting at $0.25/image with 24-hour turnaround.';
    } elseif ( is_singular() ) {
        $title       = get_the_title() . ' | ' . get_bloginfo( 'name' );
        $description = wp_strip_all_tags( get_the_excerpt() );
    }

    echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
    if ( $image ) {
        echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
    }
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
}, 5 );

// Remove unnecessary WP default styles/scripts
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
}, 100 );

// Remove emoji scripts (performance)
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
