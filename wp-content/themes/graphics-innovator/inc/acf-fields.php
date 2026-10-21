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

    // =========================================================================
    // 5. HOW IT WORKS / PIPELINE PAGE
    // =========================================================================
    acf_add_local_field_group( [
        'key'                   => 'group_gi_how_it_works',
        'title'                 => __( 'How It Works Page Editor', 'graphics-innovator' ),
        'fields'                => [
            // Tab: Header
            [
                'key'   => 'field_tab_hw_header',
                'label' => __( 'Header Section', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_hw_badge',
                'label'         => __( 'Badge Pill Text', 'graphics-innovator' ),
                'name'          => 'hw_badge',
                'type'          => 'text',
                'default_value' => 'OUR WORKFLOW',
            ],
            [
                'key'           => 'field_hw_title',
                'label'         => __( 'Main Headline', 'graphics-innovator' ),
                'name'          => 'hw_title',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => "The Pipeline for Pixel-Perfect <br><span class=\"gi-hw-text-cyan\">Retouching.</span>",
                'instructions'  => __( 'HTML allowed for highlight span and line break.', 'graphics-innovator' ),
            ],
            [
                'key'           => 'field_hw_desc',
                'label'         => __( 'Intro Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_desc',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'For enterprise clients handling thousands of product images, you need a workflow that guarantees absolute precision, 100% security, and strict deadlines. Here is how our production engine works.',
            ],

            // Tab: Step 01
            [
                'key'   => 'field_tab_hw_step1',
                'label' => __( 'Step 01: Upload', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_hw_step1_kicker',
                'label'         => __( 'Step 1 Kicker', 'graphics-innovator' ),
                'name'          => 'hw_step1_kicker',
                'type'          => 'text',
                'default_value' => 'STEP 01',
            ],
            [
                'key'           => 'field_hw_step1_title',
                'label'         => __( 'Step 1 Title', 'graphics-innovator' ),
                'name'          => 'hw_step1_title',
                'type'          => 'text',
                'default_value' => 'Secure Upload & Briefing',
            ],
            [
                'key'           => 'field_hw_step1_desc',
                'label'         => __( 'Step 1 Description', 'graphics-innovator' ),
                'name'          => 'hw_step1_desc',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'We accept large file batches through our secure portal, Google Drive, Dropbox, or enterprise FTP. Every file you upload is protected under a strict Non-Disclosure Agreement (NDA) ensuring your pre-release products never leak.',
            ],
            [
                'key'           => 'field_hw_step1_b1_title',
                'label'         => __( 'Badge 1 Title', 'graphics-innovator' ),
                'name'          => 'hw_step1_b1_title',
                'type'          => 'text',
                'default_value' => '100% secure',
            ],
            [
                'key'           => 'field_hw_step1_b1_desc',
                'label'         => __( 'Badge 1 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step1_b1_desc',
                'type'          => 'text',
                'default_value' => 'file transfer',
            ],
            [
                'key'           => 'field_hw_step1_b2_title',
                'label'         => __( 'Badge 2 Title', 'graphics-innovator' ),
                'name'          => 'hw_step1_b2_title',
                'type'          => 'text',
                'default_value' => 'Support for RAW,',
            ],
            [
                'key'           => 'field_hw_step1_b2_desc',
                'label'         => __( 'Badge 2 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step1_b2_desc',
                'type'          => 'text',
                'default_value' => 'TIFF, PSD, JPG',
            ],
            [
                'key'           => 'field_hw_step1_b3_title',
                'label'         => __( 'Badge 3 Title', 'graphics-innovator' ),
                'name'          => 'hw_step1_b3_title',
                'type'          => 'text',
                'default_value' => 'Google Drive, Dropbox',
            ],
            [
                'key'           => 'field_hw_step1_b3_desc',
                'label'         => __( 'Badge 3 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step1_b3_desc',
                'type'          => 'text',
                'default_value' => 'or enterprise FTP',
            ],
            [
                'key'           => 'field_hw_step1_before_img',
                'label'         => __( 'Step 1 Slider Before Image', 'graphics-innovator' ),
                'name'          => 'hw_step1_before_img',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => __( 'Leave empty to use default sneaker raw capture.', 'graphics-innovator' ),
            ],
            [
                'key'           => 'field_hw_step1_after_img',
                'label'         => __( 'Step 1 Slider After Image', 'graphics-innovator' ),
                'name'          => 'hw_step1_after_img',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
                'instructions'  => __( 'Leave empty to use default sneaker retouched image.', 'graphics-innovator' ),
            ],

            // Tab: Step 02
            [
                'key'   => 'field_tab_hw_step2',
                'label' => __( 'Step 02: Execution', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_hw_step2_kicker',
                'label'         => __( 'Step 2 Kicker', 'graphics-innovator' ),
                'name'          => 'hw_step2_kicker',
                'type'          => 'text',
                'default_value' => 'STEP 02',
            ],
            [
                'key'           => 'field_hw_step2_title',
                'label'         => __( 'Step 2 Title', 'graphics-innovator' ),
                'name'          => 'hw_step2_title',
                'type'          => 'text',
                'default_value' => 'Manual Execution & 3-Tier QA',
            ],
            [
                'key'           => 'field_hw_step2_desc',
                'label'         => __( 'Step 2 Description', 'graphics-innovator' ),
                'name'          => 'hw_step2_desc',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Our senior editors manually draw clipping paths using the Photoshop Pen Tool and refine every detail. Each image goes through a rigorous 3-Tier Quality Assurance check by a dedicated Art Director.',
            ],
            [
                'key'           => 'field_hw_step2_b1_title',
                'label'         => __( 'Badge 1 Title', 'graphics-innovator' ),
                'name'          => 'hw_step2_b1_title',
                'type'          => 'text',
                'default_value' => 'Skilled professional',
            ],
            [
                'key'           => 'field_hw_step2_b1_desc',
                'label'         => __( 'Badge 1 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step2_b1_desc',
                'type'          => 'text',
                'default_value' => 'photo editors',
            ],
            [
                'key'           => 'field_hw_step2_b2_title',
                'label'         => __( 'Badge 2 Title', 'graphics-innovator' ),
                'name'          => 'hw_step2_b2_title',
                'type'          => 'text',
                'default_value' => 'Zero AI shortcuts',
            ],
            [
                'key'           => 'field_hw_step2_b2_desc',
                'label'         => __( 'Badge 2 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step2_b2_desc',
                'type'          => 'text',
                'default_value' => '100% human-drawn',
            ],
            [
                'key'           => 'field_hw_step2_b3_title',
                'label'         => __( 'Badge 3 Title', 'graphics-innovator' ),
                'name'          => 'hw_step2_b3_title',
                'type'          => 'text',
                'default_value' => '3-Tier QA by',
            ],
            [
                'key'           => 'field_hw_step2_b3_desc',
                'label'         => __( 'Badge 3 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step2_b3_desc',
                'type'          => 'text',
                'default_value' => 'Art Director',
            ],

            // Tab: Step 03
            [
                'key'   => 'field_tab_hw_step3',
                'label' => __( 'Step 03: Delivery', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_hw_step3_kicker',
                'label'         => __( 'Step 3 Kicker', 'graphics-innovator' ),
                'name'          => 'hw_step3_kicker',
                'type'          => 'text',
                'default_value' => 'STEP 03',
            ],
            [
                'key'           => 'field_hw_step3_title',
                'label'         => __( 'Step 3 Title', 'graphics-innovator' ),
                'name'          => 'hw_step3_title',
                'type'          => 'text',
                'default_value' => 'Rapid Review & Delivery',
            ],
            [
                'key'           => 'field_hw_step3_desc',
                'label'         => __( 'Step 3 Description', 'graphics-innovator' ),
                'name'          => 'hw_step3_desc',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Your polished images are delivered back to you perfectly formatted, optimized, and ready for your eCommerce store or print catalog. If you spot any details that need adjustment, we provide immediate priority revisions until you are 100% satisfied.',
            ],
            [
                'key'           => 'field_hw_step3_b1_title',
                'label'         => __( 'Badge 1 Title', 'graphics-innovator' ),
                'name'          => 'hw_step3_b1_title',
                'type'          => 'text',
                'default_value' => 'Extremely fast',
            ],
            [
                'key'           => 'field_hw_step3_b1_desc',
                'label'         => __( 'Badge 1 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step3_b1_desc',
                'type'          => 'text',
                'default_value' => 'delivery turnaround',
            ],
            [
                'key'           => 'field_hw_step3_b2_title',
                'label'         => __( 'Badge 2 Title', 'graphics-innovator' ),
                'name'          => 'hw_step3_b2_title',
                'type'          => 'text',
                'default_value' => 'Unlimited revisions',
            ],
            [
                'key'           => 'field_hw_step3_b2_desc',
                'label'         => __( 'Badge 2 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step3_b2_desc',
                'type'          => 'text',
                'default_value' => 'until satisfaction',
            ],
            [
                'key'           => 'field_hw_step3_b3_title',
                'label'         => __( 'Badge 3 Title', 'graphics-innovator' ),
                'name'          => 'hw_step3_b3_title',
                'type'          => 'text',
                'default_value' => 'Ready for web,',
            ],
            [
                'key'           => 'field_hw_step3_b3_desc',
                'label'         => __( 'Badge 3 Subtitle', 'graphics-innovator' ),
                'name'          => 'hw_step3_b3_desc',
                'type'          => 'text',
                'default_value' => 'print & marketplace',
            ],

            // Tab: CTA
            [
                'key'   => 'field_tab_hw_cta',
                'label' => __( 'Call to Action', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_hw_cta_title',
                'label'         => __( 'CTA Headline', 'graphics-innovator' ),
                'name'          => 'hw_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Test the Engine?',
            ],
            [
                'key'           => 'field_hw_cta_desc',
                'label'         => __( 'CTA Description', 'graphics-innovator' ),
                'name'          => 'hw_cta_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.',
            ],
            [
                'key'           => 'field_hw_cta_btn_text',
                'label'         => __( 'CTA Button Text', 'graphics-innovator' ),
                'name'          => 'hw_cta_btn_text',
                'type'          => 'text',
                'default_value' => 'Start Your Free Trial Now',
            ],
            [
                'key'           => 'field_hw_cta_btn_url',
                'label'         => __( 'CTA Button URL', 'graphics-innovator' ),
                'name'          => 'hw_cta_btn_url',
                'type'          => 'text',
                'default_value' => '/free-trial/',
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-how-it-work.php',
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
    // 6. ENTERPRISE PRICING PAGE
    // =========================================================================
    acf_add_local_field_group( [
        'key'                   => 'group_gi_pricing',
        'title'                 => __( 'Pricing Page Editor', 'graphics-innovator' ),
        'fields'                => [
            // Tab: Hero Banner
            [
                'key'   => 'field_tab_pr_hero',
                'label' => __( 'Hero Banner', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_pr_badge',
                'label'         => __( 'Hero Badge Text', 'graphics-innovator' ),
                'name'          => 'pr_badge',
                'type'          => 'text',
                'default_value' => 'Wholesale Volume Rates • 100% Handcrafted',
            ],
            [
                'key'           => 'field_pr_title',
                'label'         => __( 'Hero Headline', 'graphics-innovator' ),
                'name'          => 'pr_title',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => "Transparent & Predictable <span class=\"gi-cyan-text\">Pricing</span>",
                'instructions'  => __( 'HTML allowed for highlight span.', 'graphics-innovator' ),
            ],
            [
                'key'           => 'field_pr_desc',
                'label'         => __( 'Hero Subtitle', 'graphics-innovator' ),
                'name'          => 'pr_desc',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => 'Direct human production with wholesale bulk rates starting from $0.25/image. No hidden charges, no AI distortions, and zero middleman markups.',
            ],
            [
                'key'           => 'field_pr_pill_1',
                'label'         => __( 'Hero Pill 1', 'graphics-innovator' ),
                'name'          => 'pr_pill_1',
                'type'          => 'text',
                'default_value' => '12-Hour Batch Turnaround',
            ],
            [
                'key'           => 'field_pr_pill_2',
                'label'         => __( 'Hero Pill 2', 'graphics-innovator' ),
                'name'          => 'pr_pill_2',
                'type'          => 'text',
                'default_value' => 'Strict NDA Protected',
            ],
            [
                'key'           => 'field_pr_pill_3',
                'label'         => __( 'Hero Pill 3', 'graphics-innovator' ),
                'name'          => 'pr_pill_3',
                'type'          => 'text',
                'default_value' => '500+ Active Brands',
            ],
            [
                'key'           => 'field_pr_pill_4',
                'label'         => __( 'Hero Pill 4', 'graphics-innovator' ),
                'name'          => 'pr_pill_4',
                'type'          => 'text',
                'default_value' => '99% Satisfaction Rate',
            ],

            // Tab: Tier 1
            [
                'key'   => 'field_tab_pr_t1',
                'label' => __( 'Tier 1: Essential', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_pr_t1_title',
                'label'         => __( 'Tier 1 Title', 'graphics-innovator' ),
                'name'          => 'pr_t1_title',
                'type'          => 'text',
                'default_value' => 'Essential Clipping',
            ],
            [
                'key'           => 'field_pr_t1_tagline',
                'label'         => __( 'Tier 1 Tagline', 'graphics-innovator' ),
                'name'          => 'pr_t1_tagline',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Fast background removal and hand-drawn cutout paths for eCommerce catalogs.',
            ],
            [
                'key'           => 'field_pr_t1_price',
                'label'         => __( 'Tier 1 Price Display', 'graphics-innovator' ),
                'name'          => 'pr_t1_price',
                'type'          => 'text',
                'default_value' => '0.25',
            ],
            [
                'key'           => 'field_pr_t1_unit',
                'label'         => __( 'Tier 1 Unit', 'graphics-innovator' ),
                'name'          => 'pr_t1_unit',
                'type'          => 'text',
                'default_value' => '/ image',
            ],
            [
                'key'           => 'field_pr_t1_subtext',
                'label'         => __( 'Tier 1 Subtext', 'graphics-innovator' ),
                'name'          => 'pr_t1_subtext',
                'type'          => 'text',
                'default_value' => 'Starting bulk volume rate',
            ],
            [
                'key'           => 'field_pr_t1_features',
                'label'         => __( 'Tier 1 Features (1 per line)', 'graphics-innovator' ),
                'name'          => 'pr_t1_features',
                'type'          => 'textarea',
                'rows'          => 5,
                'default_value' => "Hand-drawn pen clipping paths (100% human)\nPure white & transparent cutouts\nPrecision centering & margin alignment\nAmazon, eBay & Shopify ready formats\nGuaranteed 12-24h turnaround",
            ],
            [
                'key'           => 'field_pr_t1_btn_text',
                'label'         => __( 'Tier 1 Button Text', 'graphics-innovator' ),
                'name'          => 'pr_t1_btn_text',
                'type'          => 'text',
                'default_value' => "Let's Start Chat",
            ],
            [
                'key'           => 'field_pr_t1_btn_url',
                'label'         => __( 'Tier 1 Button URL', 'graphics-innovator' ),
                'name'          => 'pr_t1_btn_url',
                'type'          => 'text',
                'default_value' => "https://wa.me/8801714516662?text=Hello%20Graphics%20Innovator!%20I%20need%20a%20volume%20rate%20for%20Essential%20Clipping%20%26%20Background%20Removal.",
            ],

            // Tab: Tier 2
            [
                'key'   => 'field_tab_pr_t2',
                'label' => __( 'Tier 2: Commercial', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_pr_t2_badge',
                'label'         => __( 'Tier 2 Badge', 'graphics-innovator' ),
                'name'          => 'pr_t2_badge',
                'type'          => 'text',
                'default_value' => '⭐ Most Popular',
            ],
            [
                'key'           => 'field_pr_t2_title',
                'label'         => __( 'Tier 2 Title', 'graphics-innovator' ),
                'name'          => 'pr_t2_title',
                'type'          => 'text',
                'default_value' => 'Commercial Retouching',
            ],
            [
                'key'           => 'field_pr_t2_tagline',
                'label'         => __( 'Tier 2 Tagline', 'graphics-innovator' ),
                'name'          => 'pr_t2_tagline',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'The industry standard for apparel, footwear, and consumer brand catalogs.',
            ],
            [
                'key'           => 'field_pr_t2_price_text',
                'label'         => __( 'Tier 2 Price Display', 'graphics-innovator' ),
                'name'          => 'pr_t2_price_text',
                'type'          => 'text',
                'default_value' => 'Custom Volume Rate',
            ],
            [
                'key'           => 'field_pr_t2_subtext',
                'label'         => __( 'Tier 2 Subtext', 'graphics-innovator' ),
                'name'          => 'pr_t2_subtext',
                'type'          => 'text',
                'default_value' => 'Save up to 45% on volume orders',
            ],
            [
                'key'           => 'field_pr_t2_features',
                'label'         => __( 'Tier 2 Features (1 per line)', 'graphics-innovator' ),
                'name'          => 'pr_t2_features',
                'type'          => 'textarea',
                'rows'          => 6,
                'default_value' => "Everything in Essential Clipping\nGhost mannequin & 3D neck joint\nNatural & reflection drop shadows\nPrecision color matching to swatches\nDust, scratch & wrinkle removal\nDedicated production supervisor assigned",
            ],
            [
                'key'           => 'field_pr_t2_btn_text',
                'label'         => __( 'Tier 2 Button Text', 'graphics-innovator' ),
                'name'          => 'pr_t2_btn_text',
                'type'          => 'text',
                'default_value' => "Let's Start Chat",
            ],
            [
                'key'           => 'field_pr_t2_btn_url',
                'label'         => __( 'Tier 2 Button URL', 'graphics-innovator' ),
                'name'          => 'pr_t2_btn_url',
                'type'          => 'text',
                'default_value' => "https://wa.me/8801714516662?text=Hello%20Graphics%20Innovator!%20I%20need%20a%20custom%20quote%20for%20Commercial%20Retouching%20%26%20Ghost%20Mannequin.",
            ],

            // Tab: Tier 3
            [
                'key'   => 'field_tab_pr_t3',
                'label' => __( 'Tier 3: Editorial', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_pr_t3_title',
                'label'         => __( 'Tier 3 Title', 'graphics-innovator' ),
                'name'          => 'pr_t3_title',
                'type'          => 'text',
                'default_value' => 'Editorial & Jewelry',
            ],
            [
                'key'           => 'field_pr_t3_tagline',
                'label'         => __( 'Tier 3 Tagline', 'graphics-innovator' ),
                'name'          => 'pr_t3_tagline',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Magazine-quality retouching for jewelry, luxury goods, cosmetics, and models.',
            ],
            [
                'key'           => 'field_pr_t3_price_text',
                'label'         => __( 'Tier 3 Price Display', 'graphics-innovator' ),
                'name'          => 'pr_t3_price_text',
                'type'          => 'text',
                'default_value' => 'Custom Quote',
            ],
            [
                'key'           => 'field_pr_t3_subtext',
                'label'         => __( 'Tier 3 Subtext', 'graphics-innovator' ),
                'name'          => 'pr_t3_subtext',
                'type'          => 'text',
                'default_value' => 'Bespoke scope & dedicated lead',
            ],
            [
                'key'           => 'field_pr_t3_features',
                'label'         => __( 'Tier 3 Features (1 per line)', 'graphics-innovator' ),
                'name'          => 'pr_t3_features',
                'type'          => 'textarea',
                'rows'          => 6,
                'default_value' => "Everything in Commercial Retouching\nNon-destructive Dodge & Burn skin\nDiamond sparkle & metal polish\nStray hair & anatomical contouring\nMulti-layer PSD delivery with masks\nDirect senior art director review",
            ],
            [
                'key'           => 'field_pr_t3_btn_text',
                'label'         => __( 'Tier 3 Button Text', 'graphics-innovator' ),
                'name'          => 'pr_t3_btn_text',
                'type'          => 'text',
                'default_value' => "Let's Start Chat",
            ],
            [
                'key'           => 'field_pr_t3_btn_url',
                'label'         => __( 'Tier 3 Button URL', 'graphics-innovator' ),
                'name'          => 'pr_t3_btn_url',
                'type'          => 'text',
                'default_value' => "https://wa.me/8801714516662?text=Hello%20Graphics%20Innovator!%20I%20need%20a%20consultation%20for%20High-End%20Editorial%20%26%20Jewelry%20Retouching.",
            ],

            // Tab: CTA
            [
                'key'   => 'field_tab_pr_cta',
                'label' => __( 'Call to Action', 'graphics-innovator' ),
                'type'  => 'tab',
            ],
            [
                'key'           => 'field_pr_cta_title',
                'label'         => __( 'CTA Headline', 'graphics-innovator' ),
                'name'          => 'pr_cta_title',
                'type'          => 'text',
                'default_value' => 'Ready to Scale Your Visual Catalog?',
            ],
            [
                'key'           => 'field_pr_cta_desc',
                'label'         => __( 'CTA Description', 'graphics-innovator' ),
                'name'          => 'pr_cta_desc',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => 'Upload up to 3 test images right now. Our senior editors will process them to pixel perfection and return them in under 12 hours for zero cost.',
            ],
            [
                'key'           => 'field_pr_cta_btn1_text',
                'label'         => __( 'Primary Button Text', 'graphics-innovator' ),
                'name'          => 'pr_cta_btn1_text',
                'type'          => 'text',
                'default_value' => 'Start Your Free Trial Now →',
            ],
            [
                'key'           => 'field_pr_cta_btn1_url',
                'label'         => __( 'Primary Button URL', 'graphics-innovator' ),
                'name'          => 'pr_cta_btn1_url',
                'type'          => 'text',
                'default_value' => '/free-trial/',
            ],
            [
                'key'           => 'field_pr_cta_btn2_text',
                'label'         => __( 'Secondary Button Text', 'graphics-innovator' ),
                'name'          => 'pr_cta_btn2_text',
                'type'          => 'text',
                'default_value' => "Let's Start Chat",
            ],
            [
                'key'           => 'field_pr_cta_btn2_url',
                'label'         => __( 'Secondary Button URL', 'graphics-innovator' ),
                'name'          => 'pr_cta_btn2_url',
                'type'          => 'text',
                'default_value' => "https://wa.me/8801714516662?text=Hello%20Graphics%20Innovator!%20I%20want%20to%20start%20a%20chat%20about%20our%20image%20catalog.",
            ],
        ],
        'location'              => [
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-pricing-3.php',
                ],
            ],
            [
                [
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-pricing.php',
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
