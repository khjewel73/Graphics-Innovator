<?php
/**
 * Graphics Innovator — ACF & Dynamic Content Helpers
 *
 * Provides safe getters with built-in fail-safe fallbacks so the
 * site design, colors, and content NEVER break whether ACF is active or inactive.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Safely get a field value with a fallback default.
 *
 * @param string $field_name ACF Field name.
 * @param mixed  $default    Fallback value if field is empty or ACF is inactive.
 * @param mixed  $post_id    Post ID or null for current post.
 * @return mixed
 */
function gi_get_field( $field_name, $default = '', $post_id = null ) {
    if ( function_exists( 'get_field' ) ) {
        $val = get_field( $field_name, $post_id );
        if ( $val !== null && $val !== '' && $val !== false ) {
            return $val;
        }
    }

    // Native WordPress post_meta fallback (Zero-plugin compatibility)
    if ( $post_id === null ) {
        $post_id = get_the_ID();
    }
    if ( $post_id ) {
        $meta_val = get_post_meta( $post_id, $field_name, true );
        if ( $meta_val !== '' && $meta_val !== false && $meta_val !== null ) {
            return $meta_val;
        }
    }

    return $default;
}

/**
 * Safely get a global option field value (Theme Settings).
 *
 * Checks in order:
 * 1. ACF get_field( $option_name, 'option' )
 * 2. WP Customizer get_theme_mod( $option_name )
 * 3. WP Options get_option( $option_name )
 * 4. Fallback $default
 *
 * @param string $option_name Setting key.
 * @param mixed  $default     Fallback value.
 * @return mixed
 */
function gi_get_option( $option_name, $default = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $val = get_field( $option_name, 'option' );
        if ( $val !== null && $val !== '' && $val !== false ) {
            return $val;
        }
    }

    $mod = get_theme_mod( $option_name );
    if ( ! empty( $mod ) ) {
        return $mod;
    }

    $opt = get_option( $option_name );
    if ( ! empty( $opt ) ) {
        return $opt;
    }

    return $default;
}

/**
 * Safely get an image URL from an ACF image field (which may be an ID, Array, or URL string).
 *
 * @param mixed  $field_val Image field value (Array, ID, or URL string).
 * @param string $size      Image size (default 'full').
 * @param string $default   Fallback URL.
 * @return string
 */
function gi_get_image_url( $field_val, $size = 'full', $default = '' ) {
    if ( empty( $field_val ) ) {
        return $default;
    }
    if ( is_array( $field_val ) && ! empty( $field_val['url'] ) ) {
        return $field_val['url'];
    }
    if ( is_numeric( $field_val ) ) {
        $src = wp_get_attachment_image_url( $field_val, $size );
        return $src ? $src : $default;
    }
    if ( is_string( $field_val ) ) {
        return $field_val;
    }
    return $default;
}

/**
 * Helper to parse newline-separated feature items into an array.
 *
 * @param mixed $features_raw Array or string with lines.
 * @param array $default      Fallback array.
 * @return array
 */
function gi_parse_features( $features_raw, $default = [] ) {
    if ( is_array( $features_raw ) && ! empty( $features_raw ) ) {
        return $features_raw;
    }
    if ( is_string( $features_raw ) && trim( $features_raw ) !== '' ) {
        $lines = preg_split( '/\r\n|\r|\n/', trim( $features_raw ) );
        $clean = array_filter( array_map( 'trim', $lines ) );
        if ( ! empty( $clean ) ) {
            return array_values( $clean );
        }
    }
    return $default;
}
