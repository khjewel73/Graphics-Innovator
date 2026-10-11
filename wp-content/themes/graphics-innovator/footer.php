<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #main div and all content after.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$about_text = get_theme_mod( 'gi_footer_about', 'Graphics Innovator is a professional eCommerce photo editing agency delivering pixel-perfect results with 24-hour turnaround and NDA-guaranteed data security.' );
$copyright  = get_theme_mod( 'gi_copyright_text', '© ' . date('Y') . ' Graphics Innovator. All Rights Reserved.' );

// Social links
$socials = [
    'facebook'  => get_theme_mod( 'gi_social_facebook', 'https://facebook.com' ),
    'twitter'   => get_theme_mod( 'gi_social_twitter', '' ),
    'linkedin'  => get_theme_mod( 'gi_social_linkedin', '' ),
    'instagram' => get_theme_mod( 'gi_social_instagram', '' ),
];

// Contact Info
$phone_bd = get_theme_mod( 'gi_phone_bd', '+88 01714 516 662' );
$phone_cy = get_theme_mod( 'gi_phone_cy', '+357 96 341 452' );
$email    = get_theme_mod( 'gi_email', 'info@graphicsinnovator.com' );
?>

</main><!-- #main -->

<footer class="gi-footer">
    <div class="gi-footer-top">
        <div class="gi-container gi-footer-grid">
            
            <!-- Column 1: Brand & About -->
            <div class="gi-footer-col gi-footer-brand">
                <?php gi_logo(); ?>
                <p class="gi-footer-about"><?php echo esc_html( $about_text ); ?></p>
                
                <div class="gi-footer-social">
                    <?php if ( $socials['facebook'] ) : ?>
                        <a href="<?php echo esc_url( $socials['facebook'] ); ?>" class="gi-footer-social-link" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                    <?php endif; ?>
                    <?php if ( $socials['twitter'] ) : ?>
                        <a href="<?php echo esc_url( $socials['twitter'] ); ?>" class="gi-footer-social-link" target="_blank" rel="noopener" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                    <?php endif; ?>
                    <?php if ( $socials['linkedin'] ) : ?>
                        <a href="<?php echo esc_url( $socials['linkedin'] ); ?>" class="gi-footer-social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                    <?php endif; ?>
                    <?php if ( $socials['instagram'] ) : ?>
                        <a href="<?php echo esc_url( $socials['instagram'] ); ?>" class="gi-footer-social-link" target="_blank" rel="noopener" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Column 2: Services Menu -->
            <div class="gi-footer-col">
                <h4 class="gi-footer-col-title"><?php esc_html_e( 'Our Services', 'graphics-innovator' ); ?></h4>
                <?php
                if ( has_nav_menu( 'footer_col1' ) ) {
                    wp_nav_menu( [
                        'theme_location' => 'footer_col1',
                        'container'      => false,
                        'menu_class'     => 'gi-footer-nav',
                        'depth'          => 1,
                    ] );
                } else {
                    echo '<ul class="gi-footer-nav"><li><a href="#">Clipping Path</a></li><li><a href="#">Background Removal</a></li><li><a href="#">Shadow Making</a></li><li><a href="#">Image Masking</a></li></ul>';
                }
                ?>
            </div>

            <!-- Column 3: Quick Links Menu -->
            <div class="gi-footer-col">
                <h4 class="gi-footer-col-title"><?php esc_html_e( 'Quick Links', 'graphics-innovator' ); ?></h4>
                <?php
                if ( has_nav_menu( 'footer_col2' ) ) {
                    wp_nav_menu( [
                        'theme_location' => 'footer_col2',
                        'container'      => false,
                        'menu_class'     => 'gi-footer-nav',
                        'depth'          => 1,
                    ] );
                } else {
                    echo '<ul class="gi-footer-nav"><li><a href="' . esc_url( home_url('/about/') ) . '">About Us</a></li><li><a href="' . esc_url( home_url('/pricing/') ) . '">Pricing Plans</a></li><li><a href="' . esc_url( home_url('/portfolio/') ) . '">Portfolio</a></li><li><a href="' . esc_url( home_url('/contact/') ) . '">Contact Us</a></li></ul>';
                }
                ?>
            </div>

            <!-- Column 4: Contact Info -->
            <div class="gi-footer-col">
                <h4 class="gi-footer-col-title"><?php esc_html_e( 'Contact Us', 'graphics-innovator' ); ?></h4>
                <div class="gi-footer-contact-list">
                    <div class="gi-footer-contact-item">
                        <?php echo gi_icon( 'phone', 20 ); ?>
                        <div>
                            <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', $phone_cy) ); ?>"><?php echo esc_html( $phone_cy ); ?></a> (CY)<br>
                            <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', $phone_bd) ); ?>"><?php echo esc_html( $phone_bd ); ?></a> (BD)
                        </div>
                    </div>
                    <div class="gi-footer-contact-item">
                        <?php echo gi_icon( 'mail', 20 ); ?>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                    </div>
                    <div class="gi-footer-contact-item">
                        <?php echo gi_icon( 'location', 20 ); ?>
                        <span>ALKEUS 22, STROVOLOS, 2064 Nicosia, Cyprus</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="gi-footer-divider"></div>

    <div class="gi-container">
        <div class="gi-footer-bottom">
            <div class="gi-footer-copy">
                <?php echo wp_kses_post( $copyright ); ?>
            </div>
            <div class="gi-footer-bottom-links">
                <a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>"><?php esc_html_e( 'Privacy Policy', 'graphics-innovator' ); ?></a>
                <a href="<?php echo esc_url( home_url('/terms-of-service/') ); ?>"><?php esc_html_e( 'Terms of Service', 'graphics-innovator' ); ?></a>
            </div>
        </div>
    </div>
</footer>

<?php
// =========================================================================
// CONDITIONAL WHATSAPP LIVE CONVERSION WIDGET
// Strictly active ONLY on: Pricing, Contact Us, and Free Trial pages.
// Hidden on all other pages.
// =========================================================================
$gi_show_whatsapp = false;
if ( is_page( array( 'pricing', 'pricing-3', 'contact', 'contact-us', 'free-trial', 'trial' ) ) 
     || is_page_template( array( 'page-pricing-3.php', 'page-pricing.php', 'page-contact.php', 'page-free-trial.php' ) ) ) {
    $gi_show_whatsapp = true;
}

if ( $gi_show_whatsapp ) :
    $wa_phone_bd_clean = preg_replace( '/[^0-9]/', '', $phone_bd );
    if ( empty( $wa_phone_bd_clean ) ) {
        $wa_phone_bd_clean = '8801714516662';
    }
    $wa_phone_cy_clean = preg_replace( '/[^0-9]/', '', $phone_cy );
    if ( empty( $wa_phone_cy_clean ) ) {
        $wa_phone_cy_clean = '35796341452';
    }
    
    // Context-targeted pre-filled message
    $wa_msg = "Hello Graphics Innovator! I'm interested in getting a custom bulk quote for photo editing.";
    if ( is_page( array( 'pricing', 'pricing-3' ) ) || is_page_template( array( 'page-pricing-3.php', 'page-pricing.php' ) ) ) {
        $wa_msg = "Hello Graphics Innovator! I'm on your Pricing page and need an instant custom volume rate for my eCommerce images.";
    } elseif ( is_page( array( 'free-trial', 'trial' ) ) || is_page_template( 'page-free-trial.php' ) ) {
        $wa_msg = "Hello Graphics Innovator! I'm on your Free Trial page and want to submit 2 test images for evaluation.";
    } elseif ( is_page( array( 'contact', 'contact-us' ) ) || is_page_template( 'page-contact.php' ) ) {
        $wa_msg = "Hello Graphics Innovator! I'm on your Contact page and would like to speak directly with a production director.";
    }
    $wa_url_bd = 'https://wa.me/' . $wa_phone_bd_clean . '?text=' . rawurlencode( $wa_msg );
    $wa_url_cy = 'https://wa.me/' . $wa_phone_cy_clean . '?text=' . rawurlencode( $wa_msg );
?>
<style>
/* ==========================================================================
   GI FLOATING WHATSAPP HIGH-CONVERTING WIDGET (PAGES SPECIFIC)
   ========================================================================== */
.gi-wa-widget {
    position: fixed;
    bottom: 26px;
    right: 26px;
    z-index: 999999;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
}
.gi-wa-trigger {
    display: flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #ffffff;
    border: none;
    outline: none;
    padding: 10px 18px 10px 10px;
    border-radius: 50px;
    cursor: pointer;
    box-shadow: 0 10px 28px rgba(37, 211, 102, 0.4), 0 4px 10px rgba(0,0,0,0.3);
    position: relative;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}
.gi-wa-trigger:hover {
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 14px 34px rgba(37, 211, 102, 0.55), 0 6px 14px rgba(0,0,0,0.4);
}
.gi-wa-icon-box {
    width: 42px;
    height: 42px;
    background: rgba(255,255,255,0.18);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-wa-trigger-label {
    display: flex;
    flex-direction: column;
    text-align: left;
    line-height: 1.25;
}
.gi-wa-label-top {
    font-size: 0.95rem;
    font-weight: 700;
    letter-spacing: -0.2px;
    color: #ffffff;
}
.gi-wa-label-bot {
    font-size: 0.75rem;
    font-weight: 500;
    color: rgba(255,255,255,0.9);
}
.gi-wa-pulse-ring {
    position: absolute;
    top: -4px;
    left: -4px;
    right: -4px;
    bottom: -4px;
    border-radius: 50px;
    border: 2px solid rgba(37, 211, 102, 0.7);
    animation: giWaPulse 2.2s infinite;
    pointer-events: none;
}
@keyframes giWaPulse {
    0% { transform: scale(1); opacity: 0.9; }
    70% { transform: scale(1.08); opacity: 0; }
    100% { transform: scale(1); opacity: 0; }
}
.gi-wa-badge {
    position: absolute;
    top: -4px;
    right: -4px;
    background: #ff334b;
    color: #fff;
    font-size: 0.7rem;
    font-weight: 800;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #030811;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
}

/* Card Popup */
.gi-wa-card {
    position: absolute;
    bottom: 74px;
    right: 0;
    width: 350px;
    max-width: calc(100vw - 32px);
    background: #08111e;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0,0,0,0.65), 0 0 30px rgba(37, 211, 102, 0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateY(16px) scale(0.96);
    transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    transform-origin: bottom right;
}
.gi-wa-card.is-open {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
}
.gi-wa-card-header {
    background: linear-gradient(135deg, #0f2b24 0%, #061916 100%);
    border-bottom: 1px solid rgba(37, 211, 102, 0.2);
    padding: 18px 18px 16px 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    position: relative;
}
.gi-wa-avatar-wrap {
    position: relative;
    width: 46px;
    height: 46px;
    flex-shrink: 0;
}
.gi-wa-avatar {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}
.gi-wa-status-dot {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 13px;
    height: 13px;
    background: #25D366;
    border: 2px solid #0f2b24;
    border-radius: 50%;
}
.gi-wa-header-info {
    flex-grow: 1;
}
.gi-wa-header-name {
    font-size: 0.98rem;
    font-weight: 700;
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 6px;
}
.gi-wa-header-name svg {
    color: #25D366;
}
.gi-wa-header-status {
    font-size: 0.76rem;
    color: #7ee787;
    font-weight: 500;
    margin-top: 2px;
}
.gi-wa-close-btn {
    background: transparent;
    border: none;
    color: rgba(255,255,255,0.6);
    font-size: 1.5rem;
    line-height: 1;
    cursor: pointer;
    padding: 4px;
    border-radius: 6px;
    transition: color 0.2s;
}
.gi-wa-close-btn:hover {
    color: #ffffff;
}
.gi-wa-card-body {
    padding: 18px;
    background: #08111e;
}
.gi-wa-chat-bubble {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 14px 14px 14px 4px;
    padding: 14px 16px;
    margin-bottom: 16px;
    position: relative;
}
.gi-wa-bubble-from {
    font-size: 0.72rem;
    font-weight: 700;
    color: #25D366;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 6px;
}
.gi-wa-chat-bubble p {
    font-size: 0.88rem;
    line-height: 1.45;
    color: rgba(255,255,255,0.92);
    margin: 0 0 8px 0;
}
.gi-wa-chat-bubble p:last-of-type {
    margin-bottom: 0;
}
.gi-wa-bubble-time {
    display: block;
    font-size: 0.7rem;
    color: rgba(255,255,255,0.4);
    text-align: right;
    margin-top: 6px;
}
.gi-wa-actions {
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.gi-wa-start-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 13px 18px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #ffffff !important;
    font-size: 0.96rem;
    font-weight: 700;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(37, 211, 102, 0.35);
    transition: all 0.25s ease;
}
.gi-wa-start-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(37, 211, 102, 0.5);
    color: #ffffff !important;
}
.gi-wa-quick-desks {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 0.78rem;
    color: rgba(255,255,255,0.55);
    padding: 4px 6px 0 6px;
}
.gi-wa-quick-desks a {
    color: rgba(255,255,255,0.85);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s;
}
.gi-wa-quick-desks a:hover {
    color: #25D366;
}
.gi-wa-card-footer {
    background: rgba(0,0,0,0.3);
    border-top: 1px solid rgba(255,255,255,0.06);
    padding: 10px 16px;
    font-size: 0.72rem;
    color: rgba(255,255,255,0.45);
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

@media (max-width: 600px) {
    .gi-wa-widget {
        bottom: 18px;
        right: 18px;
    }
    .gi-wa-trigger-label {
        display: none;
    }
    .gi-wa-trigger {
        padding: 8px;
        border-radius: 50%;
        width: 54px;
        height: 54px;
        justify-content: center;
    }
    .gi-wa-icon-box {
        width: 38px;
        height: 38px;
        background: transparent;
    }
    .gi-wa-card {
        bottom: 68px;
        right: 0;
        width: calc(100vw - 36px);
    }
}
</style>

<div id="gi-wa-widget" class="gi-wa-widget" role="region" aria-label="<?php esc_attr_e( 'WhatsApp Production Support', 'graphics-innovator' ); ?>">
    <!-- Popup Card -->
    <div id="gi-wa-card" class="gi-wa-card" aria-hidden="true">
        <div class="gi-wa-card-header">
            <div class="gi-wa-avatar-wrap">
                <div class="gi-wa-avatar">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </div>
                <span class="gi-wa-status-dot" title="Active"></span>
            </div>
            <div class="gi-wa-header-info">
                <div class="gi-wa-header-name">
                    Production Director
                    <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <div class="gi-wa-header-status">⚡ Online Now • Avg reply: 2 mins</div>
            </div>
            <button type="button" id="gi-wa-close-btn" class="gi-wa-close-btn" aria-label="Close Chat Window">&times;</button>
        </div>

        <div class="gi-wa-card-body">
            <div class="gi-wa-chat-bubble">
                <div class="gi-wa-bubble-from">Graphics Innovator Production Desk</div>
                <p>👋 <strong>Need a custom volume rate or instant photo sample?</strong></p>
                <p>Skip the email queue! Chat directly with our senior production team on WhatsApp for volume negotiation, custom pricing, or sample tests.</p>
                <span class="gi-wa-bubble-time"><?php echo date('H:i'); ?> • 100% Real Humans, 0 Bots</span>
            </div>

            <div class="gi-wa-actions">
                <a href="<?php echo esc_url( $wa_url_bd ); ?>" target="_blank" rel="noopener noreferrer" class="gi-wa-start-btn">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                    <span>Chat on WhatsApp Now</span>
                </a>

                <div class="gi-wa-quick-desks">
                    <span>Direct Studios:</span>
                    <span>
                        <a href="<?php echo esc_url( $wa_url_bd ); ?>" target="_blank" rel="noopener">🇧🇩 BD Studio (24/7)</a>
                        &nbsp;|&nbsp;
                        <a href="<?php echo esc_url( $wa_url_cy ); ?>" target="_blank" rel="noopener">🇨🇾 CY HQ</a>
                    </span>
                </div>
            </div>
        </div>

        <div class="gi-wa-card-footer">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            Strict NDA Guarantee • Direct Senior Retouchers
        </div>
    </div>

    <!-- Floating Trigger Pill -->
    <button type="button" id="gi-wa-trigger-btn" class="gi-wa-trigger" aria-expanded="false" aria-controls="gi-wa-card">
        <span class="gi-wa-pulse-ring"></span>
        <span class="gi-wa-icon-box">
            <svg viewBox="0 0 24 24" width="26" height="26" fill="#ffffff"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
        </span>
        <span class="gi-wa-trigger-label">
            <span class="gi-wa-label-top">💬 WhatsApp Direct</span>
            <span class="gi-wa-label-bot">Online • 2m Reply</span>
        </span>
        <span class="gi-wa-badge">1</span>
    </button>
</div>

<script>
(function() {
    var triggerBtn = document.getElementById('gi-wa-trigger-btn');
    var card = document.getElementById('gi-wa-card');
    var closeBtn = document.getElementById('gi-wa-close-btn');

    if (!triggerBtn || !card) return;

    function toggleCard() {
        var isOpen = card.classList.contains('is-open');
        if (isOpen) {
            card.classList.remove('is-open');
            card.setAttribute('aria-hidden', 'true');
            triggerBtn.setAttribute('aria-expanded', 'false');
        } else {
            card.classList.add('is-open');
            card.setAttribute('aria-hidden', 'false');
            triggerBtn.setAttribute('aria-expanded', 'true');
        }
    }

    triggerBtn.addEventListener('click', function(e) {
        e.preventDefault();
        toggleCard();
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            card.classList.remove('is-open');
            card.setAttribute('aria-hidden', 'true');
            triggerBtn.setAttribute('aria-expanded', 'false');
        });
    }

    // Auto-open subtle prompt after 5 seconds once per session
    setTimeout(function() {
        try {
            if (!sessionStorage.getItem('gi_wa_prompted')) {
                card.classList.add('is-open');
                card.setAttribute('aria-hidden', 'false');
                triggerBtn.setAttribute('aria-expanded', 'true');
                sessionStorage.setItem('gi_wa_prompted', '1');
            }
        } catch(e) {}
    }, 5000);
})();
</script>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
