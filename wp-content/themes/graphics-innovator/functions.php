<?php
/**
 * Graphics Innovator — Master Functions Bootstrap
 *
 * This file is the single entry point for all theme functionality.
 * It loads modular inc/ files for clean separation of concerns.
 *
 * @package Graphics_Innovator
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Never load directly.
}

// ─────────────────────────────────────────────
//  THEME CONSTANTS
// ─────────────────────────────────────────────
define( 'GI_VERSION',  '1.0.28' );
define( 'GI_ROOT',     get_template_directory() );
define( 'GI_ROOT_URI', get_template_directory_uri() );
define( 'GI_ASSETS',   GI_ROOT_URI . '/assets' );
define( 'GI_CSS',      GI_ASSETS   . '/css' );
define( 'GI_JS',       GI_ASSETS   . '/js' );
define( 'GI_IMAGES',   GI_ASSETS   . '/images' );
define( 'GI_FONTS',    GI_ASSETS   . '/fonts' );
define( 'GI_INC',      GI_ROOT     . '/inc' );

// In dev mode, bust cache every load; in production use version string.
if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
    define( 'GI_CACHE_BUSTER', time() );
} else {
    define( 'GI_CACHE_BUSTER', GI_VERSION );
}

// ─────────────────────────────────────────────
//  LOAD MODULES
// ─────────────────────────────────────────────
$gi_modules = [
    '/inc/theme-setup.php',    // Theme support, menus, image sizes
    '/inc/enqueue.php',        // CSS & JS registration
    '/inc/helpers.php',        // Utility / template helper functions
    '/inc/widgets.php',        // Widget areas / sidebars
    '/inc/customizer.php',     // WP Customizer panels & settings
    '/inc/nav-walker.php',     // Custom nav menu walker
    '/inc/performance.php',    // Performance hooks & asset cleanup
    '/inc/quote-handler.php',   // Request a Quote AJAX form processing
];

foreach ( $gi_modules as $module ) {
    $path = GI_ROOT . $module;
    if ( file_exists( $path ) ) {
        require_once $path;
    }
}

// [SECURITY FIX: Removed emergency backdoor code — use WP CLI or DB directly for emergency access]
