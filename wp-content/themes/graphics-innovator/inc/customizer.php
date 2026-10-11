<?php
/**
 * WP Customizer — Theme Options
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'customize_register', function( $wp_customize ) {

    // ── Graphics Innovator Panel ──────────────────
    $wp_customize->add_panel( 'gi_panel', [
        'title'       => __( 'Graphics Innovator', 'graphics-innovator' ),
        'description' => __( 'Theme-specific settings for Graphics Innovator.', 'graphics-innovator' ),
        'priority'    => 10,
    ] );

    // ── Contact Info Section ──────────────────────
    $wp_customize->add_section( 'gi_contact', [
        'title'    => __( 'Contact Information', 'graphics-innovator' ),
        'panel'    => 'gi_panel',
        'priority' => 10,
    ] );

    $contact_fields = [
        'gi_phone_bd'   => [ 'Phone — Bangladesh', '+88 01714 516 662' ],
        'gi_phone_cy'   => [ 'Phone — Cyprus',     '+357 96 341 452'  ],
        'gi_email'      => [ 'Email Address',       'info@graphicsinnovator.com' ],
        'gi_address_hq' => [ 'HQ Address (Cyprus)',    'ALKEUS 22, STROVOLOS, 2064 Nicosia, Cyprus' ],
        'gi_address_bd' => [ 'Production Address (Bangladesh)', 'House 70, Road 1/4, Santidhara, Rangpur, Bangladesh' ],
    ];

    foreach ( $contact_fields as $id => $data ) {
        $wp_customize->add_setting( $id, [
            'default'           => $data[1],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( $id, [
            'label'   => __( $data[0], 'graphics-innovator' ),
            'section' => 'gi_contact',
            'type'    => 'text',
        ] );
    }

    // ── Social Links Section ──────────────────────
    $wp_customize->add_section( 'gi_social', [
        'title'    => __( 'Social Media Links', 'graphics-innovator' ),
        'panel'    => 'gi_panel',
        'priority' => 20,
    ] );

    $social_fields = [
        'gi_social_facebook'  => [ 'Facebook URL',  'https://facebook.com' ],
        'gi_social_twitter'   => [ 'Twitter URL',   '' ],
        'gi_social_linkedin'  => [ 'LinkedIn URL',  '' ],
        'gi_social_instagram' => [ 'Instagram URL', '' ],
        'gi_social_skype'     => [ 'Skype ID',      '' ],
    ];

    foreach ( $social_fields as $id => $data ) {
        $wp_customize->add_setting( $id, [
            'default'           => $data[1],
            'sanitize_callback' => 'esc_url_raw',
        ] );
        $wp_customize->add_control( $id, [
            'label'   => __( $data[0], 'graphics-innovator' ),
            'section' => 'gi_social',
            'type'    => 'url',
        ] );
    }

    // ── Hero Section ──────────────────────────────
    $wp_customize->add_section( 'gi_hero', [
        'title'    => __( 'Hero Section', 'graphics-innovator' ),
        'panel'    => 'gi_panel',
        'priority' => 30,
    ] );

    $hero_fields = [
        'gi_hero_headline'   => [ 'Hero Headline',   'Pixel-Perfect Photo Editing for eCommerce', 'textarea' ],
        'gi_hero_subheading' => [ 'Hero Subheading', 'Starting at $0.25/image — 24-Hour Turnaround — 100% Handmade Quality', 'textarea' ],
        'gi_hero_cta_1'      => [ 'Primary CTA Text',   'Get Free Trial', 'text' ],
        'gi_hero_cta_1_url'  => [ 'Primary CTA Link',   '/free-trial/',   'url'  ],
        'gi_hero_cta_2'      => [ 'Secondary CTA Text', 'Get A Quote',    'text' ],
        'gi_hero_cta_2_url'  => [ 'Secondary CTA Link', '/contact/',      'url'  ],
    ];

    foreach ( $hero_fields as $id => $data ) {
        $wp_customize->add_setting( $id, [
            'default'           => $data[1],
            'sanitize_callback' => $data[2] === 'url' ? 'esc_url_raw' : 'sanitize_text_field',
        ] );
        $wp_customize->add_control( $id, [
            'label'   => __( $data[0], 'graphics-innovator' ),
            'section' => 'gi_hero',
            'type'    => $data[2],
        ] );
    }

    // ── Footer Text ───────────────────────────────
    $wp_customize->add_section( 'gi_footer', [
        'title'    => __( 'Footer Settings', 'graphics-innovator' ),
        'panel'    => 'gi_panel',
        'priority' => 40,
    ] );

    $wp_customize->add_setting( 'gi_footer_about', [
        'default'           => 'Graphics Innovator is a professional eCommerce photo editing agency delivering pixel-perfect results with 24-hour turnaround and NDA-guaranteed data security.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ] );
    $wp_customize->add_control( 'gi_footer_about', [
        'label'   => __( 'Footer About Text', 'graphics-innovator' ),
        'section' => 'gi_footer',
        'type'    => 'textarea',
    ] );

    $wp_customize->add_setting( 'gi_copyright_text', [
        'default'           => '© ' . date( 'Y' ) . ' Graphics Innovator. All Rights Reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'gi_copyright_text', [
        'label'   => __( 'Copyright Text', 'graphics-innovator' ),
        'section' => 'gi_footer',
        'type'    => 'text',
    ] );
} );
