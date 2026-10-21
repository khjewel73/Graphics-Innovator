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
    // 2. HOMEPAGE CONTENT & SERVICE SHOWCASES
    // =========================================================================
    $home_fields = [
        // Tab: Hero Section
        [
            'key'   => 'field_tab_home_hero',
            'label' => __( 'Hero Banner', 'graphics-innovator' ),
            'type'  => 'tab',
        ],
        [
            'key'           => 'field_home_hero_badge',
            'label'         => __( 'Hero Badge Text', 'graphics-innovator' ),
            'name'          => 'hero_badge',
            'type'          => 'text',
            'default_value' => '24-Hour Turnaround Available',
        ],
        [
            'key'           => 'field_home_hero_title',
            'label'         => __( 'Hero Headline', 'graphics-innovator' ),
            'name'          => 'hero_title',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => "Pixel-Perfect <br>\n<span class=\"gi-highlight gi-typewriter\" id=\"gi-typewriter-text\">Photo Editing</span> <br>\nfor eCommerce",
            'instructions'  => __( 'HTML allowed for highlight tags and line breaks.', 'graphics-innovator' ),
        ],
        [
            'key'           => 'field_home_hero_subtitle',
            'label'         => __( 'Hero Subtitle / Description', 'graphics-innovator' ),
            'name'          => 'hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'Transform your product images with our 100% handmade manual clipping path and retouching services. Starting at just $0.25/image.',
        ],
        [
            'key'           => 'field_home_hero_pill_1',
            'label'         => __( 'Feature Pill 1', 'graphics-innovator' ),
            'name'          => 'hero_pill_1',
            'type'          => 'text',
            'default_value' => 'NDA Guaranteed',
        ],
        [
            'key'           => 'field_home_hero_pill_2',
            'label'         => __( 'Feature Pill 2', 'graphics-innovator' ),
            'name'          => 'hero_pill_2',
            'type'          => 'text',
            'default_value' => 'Pixel-Perfect Quality',
        ],
        [
            'key'           => 'field_home_hero_pill_3',
            'label'         => __( 'Feature Pill 3', 'graphics-innovator' ),
            'name'          => 'hero_pill_3',
            'type'          => 'text',
            'default_value' => 'Free Revisions',
        ],
        [
            'key'           => 'field_home_hero_btn1_text',
            'label'         => __( 'Primary Button Text', 'graphics-innovator' ),
            'name'          => 'hero_btn1_text',
            'type'          => 'text',
            'default_value' => 'Start Free Trial',
        ],
        [
            'key'           => 'field_home_hero_btn1_url',
            'label'         => __( 'Primary Button URL', 'graphics-innovator' ),
            'name'          => 'hero_btn1_url',
            'type'          => 'text',
            'default_value' => '/free-trial',
        ],
        [
            'key'           => 'field_home_hero_btn2_text',
            'label'         => __( 'Secondary Button Text', 'graphics-innovator' ),
            'name'          => 'hero_btn2_text',
            'type'          => 'text',
            'default_value' => 'Get A Quote',
        ],
        [
            'key'           => 'field_home_hero_btn2_url',
            'label'         => __( 'Secondary Button URL', 'graphics-innovator' ),
            'name'          => 'hero_btn2_url',
            'type'          => 'text',
            'default_value' => '/contact-us/',
        ],
        [
            'key'           => 'field_home_hero_banner_img',
            'label'         => __( 'Hero Graphic / Banner Image', 'graphics-innovator' ),
            'name'          => 'hero_banner_img',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => __( 'Upload custom hero graphic. Leave blank to use default Home-Banner.webp.', 'graphics-innovator' ),
        ],

        // Tab: Trust Bar Counters
        [
            'key'   => 'field_tab_home_trust',
            'label' => __( 'Trust Counters', 'graphics-innovator' ),
            'type'  => 'tab',
        ],
        [
            'key'           => 'field_home_trust_1_num',
            'label'         => __( 'Item 1 Value', 'graphics-innovator' ),
            'name'          => 'trust_1_num',
            'type'          => 'text',
            'default_value' => '5/5',
        ],
        [
            'key'           => 'field_home_trust_1_lbl',
            'label'         => __( 'Item 1 Label', 'graphics-innovator' ),
            'name'          => 'trust_1_lbl',
            'type'          => 'text',
            'default_value' => 'TrustPilot Rating',
        ],
        [
            'key'           => 'field_home_trust_2_num',
            'label'         => __( 'Item 2 Value', 'graphics-innovator' ),
            'name'          => 'trust_2_num',
            'type'          => 'text',
            'default_value' => '10k+',
        ],
        [
            'key'           => 'field_home_trust_2_lbl',
            'label'         => __( 'Item 2 Label', 'graphics-innovator' ),
            'name'          => 'trust_2_lbl',
            'type'          => 'text',
            'default_value' => 'Projects Completed',
        ],
        [
            'key'           => 'field_home_trust_3_num',
            'label'         => __( 'Item 3 Value', 'graphics-innovator' ),
            'name'          => 'trust_3_num',
            'type'          => 'text',
            'default_value' => '24/7',
        ],
        [
            'key'           => 'field_home_trust_3_lbl',
            'label'         => __( 'Item 3 Label', 'graphics-innovator' ),
            'name'          => 'trust_3_lbl',
            'type'          => 'text',
            'default_value' => 'Production House',
        ],
        [
            'key'           => 'field_home_trust_4_num',
            'label'         => __( 'Item 4 Value', 'graphics-innovator' ),
            'name'          => 'trust_4_num',
            'type'          => 'text',
            'default_value' => '100%',
        ],
        [
            'key'           => 'field_home_trust_4_lbl',
            'label'         => __( 'Item 4 Label', 'graphics-innovator' ),
            'name'          => 'trust_4_lbl',
            'type'          => 'text',
            'default_value' => 'Data Security (NDA)',
        ],
    ];

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

    foreach ( $service_defaults as $num => $s ) {
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

    // =========================================================================
    // 3. SERVICE DETAIL PAGES (Dynamic Content for every service)
    // =========================================================================
    acf_add_local_field_group( [
        'key'                   => 'group_gi_service_detail',
        'title'                 => __( 'Service Detail Page Editor', 'graphics-innovator' ),
        'fields'                => [
            // Tab: Hero
            [
                'key'   => 'field_tab_sd_hero',
                'label' => __( 'Hero Banner', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'          => 'field_sd_hero_title',
                'label'        => __( 'Custom Hero Headline', 'graphics-innovator' ),
                'name'         => 'sd_hero_title',
                'type'         => 'text',
                'instructions' => __( 'Leave empty to use default service headline.', 'graphics-innovator' ),
            ],
            [
                'key'          => 'field_sd_hero_desc',
                'label'        => __( 'Hero Subtitle / Description', 'graphics-innovator' ),
                'name'         => 'sd_hero_desc',
                'type'         => 'textarea',
                'rows'         => 3,
                'instructions' => __( 'Leave empty to use default service description.', 'graphics-innovator' ),
            ],

            // Tab: Split Showcase
            [
                'key'   => 'field_tab_sd_showcase',
                'label' => __( 'Showcase Section', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'   => 'field_sd_split_title',
                'label' => __( 'Split Headline (White Text)', 'graphics-innovator' ),
                'name'  => 'sd_split_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_sd_split_highlight',
                'label' => __( 'Split Highlight (Orange/Blue Glowing Text)', 'graphics-innovator' ),
                'name'  => 'sd_split_highlight',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_sd_split_desc1',
                'label' => __( 'Paragraph 1', 'graphics-innovator' ),
                'name'  => 'sd_split_desc1',
                'type'  => 'textarea',
                'rows'  => 3,
            ],
            [
                'key'   => 'field_sd_split_desc2',
                'label' => __( 'Paragraph 2', 'graphics-innovator' ),
                'name'  => 'sd_split_desc2',
                'type'  => 'textarea',
                'rows'  => 3,
            ],
            [
                'key'           => 'field_sd_showcase_img',
                'label'         => __( 'Showcase Image', 'graphics-innovator' ),
                'name'          => 'sd_showcase_img',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => __( 'Select or upload custom showcase graphic.', 'graphics-innovator' ),
            ],

            // Tab: Feature Pillars
            [
                'key'   => 'field_tab_sd_pillars',
                'label' => __( 'Feature Pillars', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'   => 'field_sd_f1_title',
                'label' => __( 'Feature Pillar 1 Title', 'graphics-innovator' ),
                'name'  => 'sd_f1_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_sd_f1_desc',
                'label' => __( 'Feature Pillar 1 Description', 'graphics-innovator' ),
                'name'  => 'sd_f1_desc',
                'type'  => 'textarea',
                'rows'  => 3,
            ],
            [
                'key'   => 'field_sd_f2_title',
                'label' => __( 'Feature Pillar 2 Title', 'graphics-innovator' ),
                'name'  => 'sd_f2_title',
                'type'  => 'text',
            ],
            [
                'key'   => 'field_sd_f2_desc',
                'label' => __( 'Feature Pillar 2 Description', 'graphics-innovator' ),
                'name'  => 'sd_f2_desc',
                'type'  => 'textarea',
                'rows'  => 3,
            ],

            // Tab: Call to Action
            [
                'key'   => 'field_tab_sd_cta',
                'label' => __( 'Call to Action', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_sd_cta_title',
                'label'         => __( 'CTA Headline', 'graphics-innovator' ),
                'name'          => 'sd_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Test the Engine?',
            ],
            [
                'key'           => 'field_sd_cta_desc',
                'label'         => __( 'CTA Description', 'graphics-innovator' ),
                'name'          => 'sd_cta_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.',
            ],
            [
                'key'           => 'field_sd_cta_btn_text',
                'label'         => __( 'CTA Button Text', 'graphics-innovator' ),
                'name'          => 'sd_cta_btn_text',
                'type'          => 'text',
                'default_value' => 'Start Your Free Trial Now',
            ],
            [
                'key'           => 'field_sd_cta_url',
                'label'         => __( 'CTA Button URL', 'graphics-innovator' ),
                'name'          => 'sd_cta_url',
                'type'          => 'text',
                'default_value' => '/free-trial/',
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-service-detail.php',
                ],
            ],
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-clippingpath.php',
                ],
            ],
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-ghost-mannequin-service.php',
                ],
            ],
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-photo-retouching-service.php',
                ],
            ],
        ],
        'menu_order'            => 1,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
    ] );

    // =========================================================================
    // 4. SERVICES DIRECTORY / ARCHIVE PAGE
    // =========================================================================
    acf_add_local_field_group( [
        'key'                   => 'group_gi_services_archive',
        'title'                 => __( 'Services Directory Page Editor', 'graphics-innovator' ),
        'fields'                => [
            // Tab: Hero
            [
                'key'   => 'field_tab_srv_hero',
                'label' => __( 'Hero Banner', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_srv_hero_title',
                'label'         => __( 'Hero Headline', 'graphics-innovator' ),
                'name'          => 'srv_hero_title',
                'type'          => 'text',
                'default_value' => 'Professional eCommerce Photo Editing Solutions.',
            ],
            [
                'key'           => 'field_srv_hero_desc',
                'label'         => __( 'Hero Subtitle / Description', 'graphics-innovator' ),
                'name'          => 'srv_hero_desc',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'We provide pixel-perfect retouching, hand-drawn vector paths, and true-to-life color correction for high-volume enterprise brands and eCommerce studios worldwide.',
            ],

            // Tab: CTA
            [
                'key'   => 'field_tab_srv_cta',
                'label' => __( 'Call to Action', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_srv_cta_title',
                'label'         => __( 'CTA Headline', 'graphics-innovator' ),
                'name'          => 'srv_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Test the Engine?',
            ],
            [
                'key'           => 'field_srv_cta_desc',
                'label'         => __( 'CTA Description', 'graphics-innovator' ),
                'name'          => 'srv_cta_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.',
            ],
            [
                'key'           => 'field_srv_cta_btn_text',
                'label'         => __( 'CTA Button Text', 'graphics-innovator' ),
                'name'          => 'srv_cta_btn_text',
                'type'          => 'text',
                'default_value' => 'Start Your Free Trial Now',
            ],
            [
                'key'           => 'field_srv_cta_btn_url',
                'label'         => __( 'CTA Button URL', 'graphics-innovator' ),
                'name'          => 'srv_cta_btn_url',
                'type'          => 'text',
                'default_value' => '/free-trial/',
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-services.php',
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
