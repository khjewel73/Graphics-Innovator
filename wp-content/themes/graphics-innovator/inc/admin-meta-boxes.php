<?php
/**
 * Graphics Innovator — Native WordPress Page Content Meta Boxes
 *
 * Provides a 100% Zero-Plugin, Native WordPress administrative content editing
 * interface directly inside the WordPress Page Editor.
 * Clients can easily edit headings, badges, text, quotes, and upload/swap images
 * without needing ACF or any third-party plugins.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ─────────────────────────────────────────────
// 1. ENQUEUE MEDIA UPLOADER & ADMIN STYLES
// ─────────────────────────────────────────────
add_action( 'admin_enqueue_scripts', 'gi_enqueue_admin_meta_assets' );
function gi_enqueue_admin_meta_assets( $hook ) {
    if ( ! in_array( $hook, [ 'post.php', 'post-new.php' ], true ) ) {
        return;
    }

    $screen = get_current_screen();
    if ( ! $screen || $screen->post_type !== 'page' ) {
        return;
    }

    // Native WP Media Uploader
    wp_enqueue_media();

    // Inline Admin CSS for Modern, Clean Interface
    $admin_css = "
        .gi-meta-box-wrap {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            background: #ffffff;
            border-radius: 8px;
            padding: 10px 4px;
        }
        .gi-meta-section {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            background: #f8fafc;
            margin-bottom: 20px;
            padding: 18px 20px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        .gi-meta-section-title {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #0f172a;
            margin: 0 0 14px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .gi-meta-row {
            margin-bottom: 15px;
        }
        .gi-meta-row:last-child {
            margin-bottom: 0;
        }
        .gi-meta-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }
        .gi-meta-desc {
            font-size: 12px;
            color: #64748b;
            margin-top: 4px;
        }
        .gi-meta-input, .gi-meta-textarea {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 14px;
            color: #0f172a;
            background: #ffffff;
            box-sizing: border-box;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .gi-meta-input:focus, .gi-meta-textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
            outline: none;
        }
        .gi-meta-textarea {
            min-height: 85px;
            line-height: 1.5;
        }
        .gi-meta-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .gi-meta-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }
        @media (max-width: 782px) {
            .gi-meta-grid-2, .gi-meta-grid-4 {
                grid-template-columns: 1fr;
            }
        }
        .gi-media-preview-box {
            margin-top: 10px;
            max-width: 280px;
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }
        .gi-media-preview-box img {
            width: 100%;
            height: auto;
            display: block;
        }
        .gi-meta-badge {
            display: inline-block;
            background: #dbeafe;
            color: #1e40af;
            padding: 2px 8px;
            border-radius: 9999px;
            font-size: 11px;
            font-weight: 700;
        }
        .gi-btn-media {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            border: 1px solid #cbd5e1;
            background: #ffffff;
            color: #0f172a;
            transition: all 0.2s;
        }
        .gi-btn-media:hover {
            background: #f1f5f9;
            border-color: #94a3b8;
        }
        .gi-btn-remove {
            color: #dc2626;
            border-color: #fca5a5;
            background: #fef2f2;
            margin-left: 8px;
        }
        .gi-btn-remove:hover {
            background: #fee2e2;
            border-color: #f87171;
            color: #b91c1c;
        }
    ";
    wp_add_inline_style( 'wp-admin', $admin_css );

    // Inline Admin JS for Media Picker
    $admin_js = "
        jQuery(document).ready(function($) {
            $('.gi-media-upload-btn').on('click', function(e) {
                e.preventDefault();
                var button = $(this);
                var targetId = button.data('target');
                var previewId = button.data('preview');
                var targetInput = $('#' + targetId);
                var preview = $('#' + previewId);

                var frame = wp.media({
                    title: button.data('title') || 'Select or Upload Image',
                    button: { text: 'Use this image' },
                    multiple: false
                });

                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    targetInput.val(attachment.url);
                    preview.html('<div class=\"gi-media-preview-box\"><img src=\"' + attachment.url + '\" alt=\"Preview\"></div>');
                    button.siblings('.gi-media-remove-btn').show();
                });

                frame.open();
            });

            $('.gi-media-remove-btn').on('click', function(e) {
                e.preventDefault();
                var button = $(this);
                var targetId = button.data('target');
                var previewId = button.data('preview');
                $('#' + targetId).val('');
                $('#' + previewId).empty();
                button.hide();
            });
        });
    ";
    wp_add_inline_script( 'common', $admin_js );
}

// ─────────────────────────────────────────────
// 2. REGISTER NATIVE META BOXES
// ─────────────────────────────────────────────
add_action( 'add_meta_boxes', 'gi_register_native_page_meta_boxes' );
function gi_register_native_page_meta_boxes() {
    global $post;
    if ( ! $post || $post->post_type !== 'page' ) {
        return;
    }

    $template = get_post_meta( $post->ID, '_wp_page_template', true );
    $slug     = $post->post_name;

    // ABOUT US META BOX
    if ( $template === 'page-about.php' || $slug === 'about-us' || $post->ID === 1837 ) {
        add_meta_box(
            'gi_about_page_meta_box',
            __( '🌟 About Us — Page Content & Image Controls', 'graphics-innovator' ),
            'gi_render_about_page_meta_box',
            'page',
            'normal',
            'high'
        );
    }

    // CONTACT US META BOX
    if ( $template === 'page-contact.php' || $slug === 'contact-us' || $post->ID === 2676 ) {
        add_meta_box(
            'gi_contact_page_meta_box',
            __( '🌟 Contact Us — Page Content & Support Info Controls', 'graphics-innovator' ),
            'gi_render_contact_page_meta_box',
            'page',
            'normal',
            'high'
        );
    }
}

// ─────────────────────────────────────────────
// 3. RENDER ABOUT US META BOX
// ─────────────────────────────────────────────
function gi_render_about_page_meta_box( $post ) {
    wp_nonce_field( 'gi_save_page_meta_action', 'gi_page_meta_nonce' );

    $badge      = get_post_meta( $post->ID, 'about_story_badge', true );
    $title      = get_post_meta( $post->ID, 'about_story_title', true );
    $story_text = get_post_meta( $post->ID, 'about_story_text', true );
    $quote      = get_post_meta( $post->ID, 'about_story_quote', true );
    $image      = get_post_meta( $post->ID, 'about_story_image', true );
    $btn_text   = get_post_meta( $post->ID, 'about_story_btn_text', true );
    $btn_url    = get_post_meta( $post->ID, 'about_story_btn_url', true );

    // Default fallbacks
    if ( empty( $badge ) )    $badge    = 'Who We Are';
    if ( empty( $title ) )    $title    = 'The Leading eCommerce Photo Editing Agency';
    if ( empty( $quote ) )    $quote    = '"Headquartered in Nicosia, Cyprus with our massive production facility in Bangladesh, we are uniquely positioned to be your ultimate partner for high-quality, cost-effective image editing solutions."';
    if ( empty( $btn_text ) ) $btn_text = 'Partner With Us';
    if ( empty( $btn_url ) )  $btn_url  = home_url( '/contact-us/' );

    // Fallback image preview if custom not chosen
    $display_img = $image ? $image : get_template_directory_uri() . '/about-team.webp?v=' . GI_VERSION;
    ?>
    <div class="gi-meta-box-wrap">
        
        <!-- Section 1: Hero Story Content -->
        <div class="gi-meta-section">
            <div class="gi-meta-section-title">
                <span>📖</span> <?php esc_html_e( 'Company Story Header & Highlight', 'graphics-innovator' ); ?>
            </div>

            <div class="gi-meta-grid-2">
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_about_story_badge"><?php esc_html_e( 'Section Badge Tag', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_about_story_badge" name="about_story_badge" class="gi-meta-input" value="<?php echo esc_attr( $badge ); ?>">
                </div>
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_about_story_title"><?php esc_html_e( 'Main Heading Title', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_about_story_title" name="about_story_title" class="gi-meta-input" value="<?php echo esc_attr( $title ); ?>">
                </div>
            </div>

            <div class="gi-meta-row" style="margin-top: 12px;">
                <label class="gi-meta-label" for="gi_about_story_text"><?php esc_html_e( 'Company Story Paragraphs (Optional Override)', 'graphics-innovator' ); ?></label>
                <textarea id="gi_about_story_text" name="about_story_text" class="gi-meta-textarea" rows="4" placeholder="<?php esc_attr_e( 'Leave empty to use the standard 3 polished paragraphs...', 'graphics-innovator' ); ?>"><?php echo esc_textarea( $story_text ); ?></textarea>
                <div class="gi-meta-desc"><?php esc_html_e( 'If empty, the clean default company story is displayed automatically without any legacy database clutter.', 'graphics-innovator' ); ?></div>
            </div>

            <div class="gi-meta-row" style="margin-top: 12px;">
                <label class="gi-meta-label" for="gi_about_story_quote"><?php esc_html_e( 'Highlight Quote Box', 'graphics-innovator' ); ?></label>
                <textarea id="gi_about_story_quote" name="about_story_quote" class="gi-meta-textarea" rows="3"><?php echo esc_textarea( $quote ); ?></textarea>
                <div class="gi-meta-desc"><?php esc_html_e( 'Displayed in the elegant blue glass highlight card below the story paragraphs.', 'graphics-innovator' ); ?></div>
            </div>

            <div class="gi-meta-grid-2" style="margin-top: 12px;">
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_about_story_btn_text"><?php esc_html_e( 'Call-To-Action Button Text', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_about_story_btn_text" name="about_story_btn_text" class="gi-meta-input" value="<?php echo esc_attr( $btn_text ); ?>">
                </div>
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_about_story_btn_url"><?php esc_html_e( 'Button Target URL', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_about_story_btn_url" name="about_story_btn_url" class="gi-meta-input" value="<?php echo esc_attr( $btn_url ); ?>">
                </div>
            </div>
        </div>

        <!-- Section 2: Team Photo / Office Image Uploader -->
        <div class="gi-meta-section">
            <div class="gi-meta-section-title">
                <span>🖼️</span> <?php esc_html_e( 'Team Showcase Image', 'graphics-innovator' ); ?>
            </div>

            <div class="gi-meta-row">
                <label class="gi-meta-label"><?php esc_html_e( 'Current Team Photo', 'graphics-innovator' ); ?></label>
                <div class="gi-meta-desc"><?php esc_html_e( 'Click the button below to upload or choose a new photo from the Media Library. If left empty, the high-res studio team photo is displayed automatically.', 'graphics-innovator' ); ?></div>
                
                <input type="hidden" id="gi_about_story_image" name="about_story_image" value="<?php echo esc_attr( $image ); ?>">
                
                <div style="margin-top: 10px;">
                    <button type="button" class="gi-btn-media gi-media-upload-btn" data-target="gi_about_story_image" data-preview="gi_about_image_preview" data-title="Choose or Upload Team Photo">
                        <span>📁 Choose / Upload Image</span>
                    </button>
                    <button type="button" class="gi-btn-media gi-btn-remove gi-media-remove-btn" data-target="gi_about_story_image" data-preview="gi_about_image_preview" style="<?php echo empty( $image ) ? 'display:none;' : ''; ?>">
                        <span>✕ Remove Custom Image</span>
                    </button>
                </div>

                <div id="gi_about_image_preview" style="margin-top: 12px;">
                    <?php if ( ! empty( $display_img ) ) : ?>
                        <div class="gi-media-preview-box">
                            <img src="<?php echo esc_url( $display_img ); ?>" alt="Team Photo Preview">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
    <?php
}

// ─────────────────────────────────────────────
// 4. RENDER CONTACT US META BOX
// ─────────────────────────────────────────────
function gi_render_contact_page_meta_box( $post ) {
    wp_nonce_field( 'gi_save_page_meta_action', 'gi_page_meta_nonce' );

    $tag       = get_post_meta( $post->ID, 'contact_pill_tag', true );
    $title     = get_post_meta( $post->ID, 'contact_title', true );
    $desc      = get_post_meta( $post->ID, 'contact_desc', true );
    $email     = get_post_meta( $post->ID, 'contact_general_email', true );
    $phone     = get_post_meta( $post->ID, 'contact_general_phone', true );
    $wa_phone  = get_post_meta( $post->ID, 'contact_whatsapp_num', true );
    $cy_addr   = get_post_meta( $post->ID, 'contact_office_cy_addr', true );
    $bd_addr   = get_post_meta( $post->ID, 'contact_office_bd_addr', true );

    // Default fallbacks
    if ( empty( $tag ) )      $tag      = '24/7 ENTERPRISE DESK';
    if ( empty( $title ) )    $title    = "Let's Build Something Flawless.";
    if ( empty( $desc ) )     $desc     = 'Whether you need bulk eCommerce clipping or high-end editorial retouching, our team is ready. We typically reply within 45 minutes.';
    if ( empty( $email ) )    $email    = 'info@graphicsinnovator.com';
    if ( empty( $phone ) )    $phone    = '+880 1714 516 662';
    if ( empty( $wa_phone ) ) $wa_phone = '+880 1714 516 662';
    if ( empty( $cy_addr ) )  $cy_addr  = "ALKEUS 22, STROVOLOS\n2064 NICOSIA, Cyprus";
    if ( empty( $bd_addr ) )  $bd_addr  = "House: 70, Road: 1/A, Santidhara\nRangpur, Bangladesh";
    ?>
    <div class="gi-meta-box-wrap">
        
        <!-- Section 1: Header -->
        <div class="gi-meta-section">
            <div class="gi-meta-section-title">
                <span>💬</span> <?php esc_html_e( 'Contact Header & Intro', 'graphics-innovator' ); ?>
            </div>

            <div class="gi-meta-grid-2">
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_contact_pill_tag"><?php esc_html_e( 'Badge Tag', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_contact_pill_tag" name="contact_pill_tag" class="gi-meta-input" value="<?php echo esc_attr( $tag ); ?>">
                </div>
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_contact_title"><?php esc_html_e( 'Main Heading', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_contact_title" name="contact_title" class="gi-meta-input" value="<?php echo esc_attr( $title ); ?>">
                </div>
            </div>

            <div class="gi-meta-row" style="margin-top: 12px;">
                <label class="gi-meta-label" for="gi_contact_desc"><?php esc_html_e( 'Subtitle / Lead Description', 'graphics-innovator' ); ?></label>
                <textarea id="gi_contact_desc" name="contact_desc" class="gi-meta-textarea" rows="2"><?php echo esc_textarea( $desc ); ?></textarea>
            </div>
        </div>

        <!-- Section 2: General Inquiries & WhatsApp -->
        <div class="gi-meta-section">
            <div class="gi-meta-section-title">
                <span>📞</span> <?php esc_html_e( 'General Inquiries & WhatsApp Support', 'graphics-innovator' ); ?>
            </div>

            <div class="gi-meta-grid-2">
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_contact_general_email"><?php esc_html_e( 'General Inquiries Email', 'graphics-innovator' ); ?></label>
                    <input type="email" id="gi_contact_general_email" name="contact_general_email" class="gi-meta-input" value="<?php echo esc_attr( $email ); ?>">
                </div>
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_contact_general_phone"><?php esc_html_e( 'General Inquiries Phone', 'graphics-innovator' ); ?></label>
                    <input type="text" id="gi_contact_general_phone" name="contact_general_phone" class="gi-meta-input" value="<?php echo esc_attr( $phone ); ?>">
                </div>
            </div>

            <div class="gi-meta-row" style="margin-top: 12px;">
                <label class="gi-meta-label" for="gi_contact_whatsapp_num"><?php esc_html_e( 'WhatsApp Support Number', 'graphics-innovator' ); ?></label>
                <input type="text" id="gi_contact_whatsapp_num" name="contact_whatsapp_num" class="gi-meta-input" value="<?php echo esc_attr( $wa_phone ); ?>">
                <div class="gi-meta-desc"><?php esc_html_e( 'Direct number used for WhatsApp live chat buttons and links.', 'graphics-innovator' ); ?></div>
            </div>
        </div>

        <!-- Section 3: Office Addresses -->
        <div class="gi-meta-section">
            <div class="gi-meta-section-title">
                <span>📍</span> <?php esc_html_e( 'Office Locations (No Mobile Number as requested)', 'graphics-innovator' ); ?>
            </div>

            <div class="gi-meta-grid-2">
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_contact_office_cy_addr"><?php esc_html_e( 'Europe Office (HQ) Address', 'graphics-innovator' ); ?></label>
                    <textarea id="gi_contact_office_cy_addr" name="contact_office_cy_addr" class="gi-meta-textarea" rows="2"><?php echo esc_textarea( $cy_addr ); ?></textarea>
                </div>
                <div class="gi-meta-row">
                    <label class="gi-meta-label" for="gi_contact_office_bd_addr"><?php esc_html_e( 'Production Studio Address', 'graphics-innovator' ); ?></label>
                    <textarea id="gi_contact_office_bd_addr" name="contact_office_bd_addr" class="gi-meta-textarea" rows="2"><?php echo esc_textarea( $bd_addr ); ?></textarea>
                </div>
            </div>
        </div>

    </div>
    <?php
}

// ─────────────────────────────────────────────
// 5. SAVE META BOX VALUES SAFELY
// ─────────────────────────────────────────────
add_action( 'save_post', 'gi_save_native_page_meta' );
function gi_save_native_page_meta( $post_id ) {
    // Check nonce
    if ( ! isset( $_POST['gi_page_meta_nonce'] ) || ! wp_verify_nonce( $_POST['gi_page_meta_nonce'], 'gi_save_page_meta_action' ) ) {
        return;
    }

    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check user permissions
    if ( ! current_user_can( 'edit_page', $post_id ) ) {
        return;
    }

    // List of all keys to save cleanly
    $keys = [
        'about_story_badge',
        'about_story_title',
        'about_story_text',
        'about_story_quote',
        'about_story_image',
        'about_story_btn_text',
        'about_story_btn_url',
        'contact_pill_tag',
        'contact_title',
        'contact_desc',
        'contact_general_email',
        'contact_general_phone',
        'contact_whatsapp_num',
        'contact_office_cy_addr',
        'contact_office_bd_addr',
    ];

    foreach ( $keys as $key ) {
        if ( isset( $_POST[ $key ] ) ) {
            $value = sanitize_textarea_field( wp_unslash( $_POST[ $key ] ) );
            update_post_meta( $post_id, $key, $value );
        }
    }
}
