<?php
/**
 * Frontend Performance Hooks
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// 1. Remove Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// 2. Clean WP Head Bloat
remove_action('wp_head', 'wp_generator'); // Security fix: hides WP version
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// 3. Remove Gutenberg Block Library CSS (We are using custom templates/Elementor)
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // If WooCommerce is present
}, 100);

// 4. Remove Dashicons on frontend for logged out users
add_action('wp_enqueue_scripts', function() {
    if (!is_admin() && !is_user_logged_in()) {
        wp_deregister_style('dashicons');
    }
}, 100);

// 5. Optimize Contact Form 7 Assets
// Only load CF7 JS/CSS on pages where it is actually used
add_action('wp_enqueue_scripts', function() {
    // Match the actual page slugs used on this site
    if ( ! is_page( [ 'contact', 'free-trial', 'contact-us' ] ) ) {
        wp_dequeue_script('contact-form-7');
        wp_dequeue_style('contact-form-7');

        // Google ReCaptcha
        wp_dequeue_script('google-recaptcha');
        wp_dequeue_script('wpcf7-recaptcha');
        wp_dequeue_style('wpcf7-recaptcha');
    }
}, 100);

// 6. Disable Frontend Heartbeat API (Saves Server CPU)
add_action('init', function() {
    if (!is_admin()) {
        wp_deregister_script('heartbeat');
    }
}, 1);

// 7. Remove Query Strings from Static Resources
// NOTE: Only removes ver= from OUR theme assets, not core WP/plugin assets.
// Stripping ver= from all assets breaks CDN cache-busting for plugin updates.
add_filter( 'gi_theme_asset_src', function( $src ) {
    if ( strpos( $src, '?ver=' ) && strpos( $src, GI_ROOT_URI ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
} );

// 8. Disable XML-RPC (Prevents DDoS Bot Attacks & Saves Server Resources)
add_filter('xmlrpc_enabled', '__return_false');
