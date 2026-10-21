<?php
/**
 * Graphics Innovator — Programmatic ACF Field Definitions
 *
 * Code-first registration of all visual client fields.
 * Ensures 100% Git-trackable fields that auto-sync between Localhost,
 * GitHub, and Production without manual database migration.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'acf/init', 'gi_register_local_field_groups' );
function gi_register_local_field_groups() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    // =========================================================================
    // 1. GLOBAL SITE SETTINGS (Theme Options Page)
    // =========================================================================
    acf_add_local_field_group( [
        'key'                   => 'group_gi_site_settings',
        'title'                 => __( 'Global Site Settings', 'graphics-innovator' ),
        'fields'                => [
            // Tab: Contact Info
            [
                'key'   => 'field_tab_contact',
                'label' => __( 'Contact Hotlines', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_gi_phone_cy',
                'label'         => __( 'Cyprus Hotline (Call Only)', 'graphics-innovator' ),
                'name'          => 'gi_phone_cy',
                'type'          => 'text',
                'default_value' => '+357 96 341 452',
                'instructions'  => __( 'Cyprus office contact number (strictly regular telephone call, no WhatsApp).', 'graphics-innovator' ),
            ],
            [
                'key'           => 'field_gi_phone_bd',
                'label'         => __( 'Bangladesh Studio Phone', 'graphics-innovator' ),
                'name'          => 'gi_phone_bd',
                'type'          => 'text',
                'default_value' => '+88 01714 516 662',
            ],
            [
                'key'           => 'field_gi_email',
                'label'         => __( 'Official Inquiries Email', 'graphics-innovator' ),
                'name'          => 'gi_email',
                'type'          => 'text',
                'default_value' => 'info@graphicsinnovator.com',
            ],

            // Tab: Addresses
            [
                'key'   => 'field_tab_addresses',
                'label' => __( 'Office Addresses', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_gi_address_cy',
                'label'         => __( 'Cyprus Office Address', 'graphics-innovator' ),
                'name'          => 'gi_address_cy',
                'type'          => 'text',
                'default_value' => 'ALKEUS 22, STROVOLOS, 2064 Nicosia, Cyprus',
            ],
            [
                'key'           => 'field_gi_address_bd',
                'label'         => __( 'Bangladesh Studio Address', 'graphics-innovator' ),
                'name'          => 'gi_address_bd',
                'type'          => 'text',
                'default_value' => 'House: 70, Road: 1/A, Santidhara, Rangpur 5400, Bangladesh',
            ],

            // Tab: Social Media
            [
                'key'   => 'field_tab_socials',
                'label' => __( 'Social Links', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_gi_social_facebook',
                'label'         => __( 'Facebook Page URL', 'graphics-innovator' ),
                'name'          => 'gi_social_facebook',
                'type'          => 'text',
                'default_value' => 'https://facebook.com',
            ],
            [
                'key'           => 'field_gi_social_linkedin',
                'label'         => __( 'LinkedIn URL', 'graphics-innovator' ),
                'name'          => 'gi_social_linkedin',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'           => 'field_gi_social_twitter',
                'label'         => __( 'X / Twitter URL', 'graphics-innovator' ),
                'name'          => 'gi_social_twitter',
                'type'          => 'text',
                'default_value' => '',
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'gi-theme-settings',
                ],
            ],
        ],
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ] );

    // =========================================================================
    // 2. HOMEPAGE SERVICE SHOWCASES & CONTENT
    // =========================================================================
    $service_defaults = [
        1 => [
            'name'     => 'Clipping Path',
            'title'    => 'Clipping Path',
            'sub'      => 'Increase your sales by obtaining the best precise image cutting',
            'desc'     => 'To use our clipping path services, remove unwanted parts, separate parts of an image to create a new image and remove the unwanted background. Our team is dedicated to providing handmade clipping path services with maximum accuracy in a relatively minimum cost. We will save your precious time and reduce your cost.',
            'features' => "Reasonable Pricing\nQuick Turnaround\nPixel Perfect Quality\nCustomized Image Clipping",
            'url'      => '/clippingpath/',
        ],
        2 => [
            'name'     => 'Photo Retouching',
            'title'    => 'Photo Retouching',
            'sub'      => 'Make incredible photos with your photography and increase your sales to the next level',
            'desc'     => "Photo retouching services are the ideal kind of digital marketing. If you're going after a high-end market, it's challenging to make your image flawless right out of the camera, regardless of how talented a photographer you are. Complete product photo editing is available through our expert photo retouching service, and our goal is to provide product photos with gorgeous finishes.",
            'features' => "Remove imperfections\nImprove image quality\nApply Unique Techniques\nHigh-end Skin Retouching\nFix framing and lighting issues",
            'url'      => '/photo-retouching-service/',
        ],
        3 => [
            'name'     => 'E-commerce Editing',
            'title'    => 'E-commerce Image Editing',
            'sub'      => 'Make your product photos as a professional look and increase online sales',
            'desc'     => 'Ecommerce photo retouching services appear to be the vital element in effective eCommerce marketing. You must get your images professionally retouched if you want to increase your product sales. With the help of our eCommerce product photo editing, you can create better product photos to boost sales. Take use of the best product retouching and cutting edge features for your product image and increase your sales to the next level.',
            'features' => "Can Handle large-scale projects\nProviding accurate quality image\nUnderstanding product specifications\nAdhering to online image specifications",
            'url'      => '/product-photo-editing-service/',
        ],
        4 => [
            'name'     => 'Ghost Mannequin',
            'title'    => 'Ghost Mannequin',
            'sub'      => '',
            'desc'     => 'Using the ghost mannequin retouching service, which improves the product images, is the best way to display your clothing items. This will allow the vendors to make more money than they did with the models. An age-old marketing strategy used to make the clothing product images look amazing is using models and having individuals pose in chic ways and it also increases your cost.',
            'features' => "Maintain 100% Accuracy\nNeck Joint on clothes\nBottom Joint on Ghost Mannequin\nSleeves Joint on Ghost Mannequin\n3D or 360° Ghost Mannequin Retouch",
            'url'      => '/ghost-mannequin-service/',
        ],
        5 => [
            'name'     => 'Image Masking',
            'title'    => 'Image Masking',
            'sub'      => '',
            'desc'     => "Masking is necessary to pick and erase the backdrop when the edges are unclear, hairy, furry or fuzzy. By giving professionals a chance to concentrate on the unattainable details, it improves viewers' watching experiences. We offer different kinds of masking services eg Soft Mask, Layer Mask, Alpha Mask, Channel Mask, Transparency Mask etc.",
            'features' => "Fastest Delivery\nCompetitive Price\nSpecific Edge Detection\nMaintain 100% Accuracy",
            'url'      => '/image-masking-service/',
        ],
        6 => [
            'name'     => 'Shadow Creation',
            'title'    => 'Shadow Creation',
            'sub'      => '',
            'desc'     => 'Leaving your customers speechless and convincing them that your products are real based on the images, is the sole option for them. After removing the background from product shots with white backgrounds, the Photoshop shadow creation service makes the images realistic rather than fake.',
            'features' => "Drop Shadowing\nNatural Shadowing\nReflection Shadowing\nPickup Original Shadow",
            'url'      => '/shadow-creation-service/',
        ],
    ];

    $home_fields = [];

    foreach ( $service_defaults as $num => $s ) {
        // Tab for each service
        $home_fields[] = [
            'key'   => 'field_tab_s' . $num,
            'label' => sprintf( __( 'Service %d: %s', 'graphics-innovator' ), $num, $s['name'] ),
            'type'  => 'tab',
        ];
        $home_fields[] = [
            'key'           => 'field_s' . $num . '_title',
            'label'         => __( 'Headline Title', 'graphics-innovator' ),
            'name'          => 's' . $num . '_title',
            'type'          => 'text',
            'default_value' => $s['title'],
        ];
        if ( ! empty( $s['sub'] ) ) {
            $home_fields[] = [
                'key'           => 'field_s' . $num . '_sub',
                'label'         => __( 'Subtitle / Hook', 'graphics-innovator' ),
                'name'          => 's' . $num . '_sub',
                'type'          => 'text',
                'default_value' => $s['sub'],
            ];
        }
        $home_fields[] = [
            'key'           => 'field_s' . $num . '_desc',
            'label'         => __( 'Description Text', 'graphics-innovator' ),
            'name'          => 's' . $num . '_desc',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => $s['desc'],
        ];
        $home_fields[] = [
            'key'           => 'field_s' . $num . '_features',
            'label'         => __( 'Key Features (One per line)', 'graphics-innovator' ),
            'name'          => 's' . $num . '_features',
            'type'          => 'textarea',
            'rows'          => 5,
            'default_value' => $s['features'],
            'instructions'  => __( 'Enter each feature checklist item on a new line.', 'graphics-innovator' ),
        ];
        $home_fields[] = [
            'key'           => 'field_s' . $num . '_before_img',
            'label'         => __( 'Before Image (Original / Unedited)', 'graphics-innovator' ),
            'name'          => 's' . $num . '_before_img',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => __( 'Select or upload the Before image from WordPress Media Library.', 'graphics-innovator' ),
        ];
        $home_fields[] = [
            'key'           => 'field_s' . $num . '_after_img',
            'label'         => __( 'After Image (Finished / Retouched)', 'graphics-innovator' ),
            'name'          => 's' . $num . '_after_img',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => __( 'Select or upload the After image from WordPress Media Library.', 'graphics-innovator' ),
        ];
        $home_fields[] = [
            'key'           => 'field_s' . $num . '_btn_url',
            'label'         => __( 'Learn More Page Link', 'graphics-innovator' ),
            'name'          => 's' . $num . '_btn_url',
            'type'          => 'text',
            'default_value' => $s['url'],
        ];
    }

    acf_add_local_field_group( [
        'key'                   => 'group_gi_home_content',
        'title'                 => __( 'Homepage Showcase & Services Management', 'graphics-innovator' ),
        'fields'                => $home_fields,
        'location'              => [
            [
                [
                    'param'    => 'page_type',
                    'operator' => '==',
                    'value'    => 'front_page',
                ],
            ],
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'front-page.php',
                ],
            ],
        ],
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ] );
}
