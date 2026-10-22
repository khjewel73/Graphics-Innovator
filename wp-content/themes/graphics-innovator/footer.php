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
    'facebook'  => gi_get_option( 'gi_social_facebook', 'https://facebook.com' ),
    'twitter'   => gi_get_option( 'gi_social_twitter', '' ),
    'linkedin'  => gi_get_option( 'gi_social_linkedin', '' ),
    'instagram' => gi_get_option( 'gi_social_instagram', '' ),
];

// Contact Info
$phone_bd   = gi_get_option( 'gi_phone_bd', '+88 01714 516 662' );
$phone_cy   = gi_get_option( 'gi_phone_cy', '+357 96 341 452' );
$email      = gi_get_option( 'gi_email', 'info@graphicsinnovator.com' );
$address_cy = gi_get_option( 'gi_address_cy', 'ALKEUS 22, STROVOLOS, 2064 Nicosia, Cyprus' );
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
                    echo '<ul class="gi-footer-nav"><li><a href="' . esc_url( home_url('/clippingpath/') ) . '">Clipping Path</a></li><li><a href="' . esc_url( home_url('/background-removal-service/') ) . '">Background Removal</a></li><li><a href="' . esc_url( home_url('/shadow-creation-service/') ) . '">Shadow Creation</a></li><li><a href="' . esc_url( home_url('/image-masking-service/') ) . '">Image Masking</a></li><li><a href="' . esc_url( home_url('/ghost-mannequin-service/') ) . '">Ghost Mannequin</a></li><li><a href="' . esc_url( home_url('/jewelry-retouching/') ) . '">Jewelry Retouching</a></li><li><a href="' . esc_url( home_url('/360-product-retouch/') ) . '">360 Product Retouch</a></li><li><a href="' . esc_url( home_url('/wedding-photo-retouch/') ) . '">Wedding Photo Retouch</a></li><li><a href="' . esc_url( home_url('/car-photo-editing/') ) . '">Car Photo Editing</a></li></ul>';
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
                    echo '<ul class="gi-footer-nav"><li><a href="' . esc_url( home_url('/about-us/') ) . '">About Us</a></li><li><a href="' . esc_url( home_url('/how-it-work/') ) . '">How It Works</a></li><li><a href="' . esc_url( home_url('/pricing-3/') ) . '">Pricing Plans</a></li><li><a href="' . esc_url( home_url('/portfolio-details/') ) . '">Portfolio</a></li><li><a href="' . esc_url( home_url('/free-trial/') ) . '">Free Trial</a></li><li><a href="' . esc_url( home_url('/contact-us/') ) . '">Contact Us</a></li></ul>';
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
                        <span><?php echo esc_html( $address_cy ); ?></span>
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

<!-- Floating WhatsApp Quick Connect Button -->
<a href="https://wa.me/8801714516662?text=Hi%20Graphics%20Innovator,%20I%20have%20an%20inquiry" target="_blank" rel="noopener noreferrer" class="gi-floating-wa-btn" title="Chat with us on WhatsApp (+880 1714 516 662)" aria-label="WhatsApp Chat">
    <span class="gi-floating-wa-pulse" aria-hidden="true"></span>
    <span class="gi-floating-wa-icon">
        <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.031 2C6.495 2 2 6.494 2 12.029c0 1.97.57 3.81 1.558 5.37L2 22l4.823-1.528A9.99 9.99 0 0 0 12.031 22C17.567 22 22 17.506 22 12.03 22 6.494 17.566 2 12.031 2zm5.797 14.18c-.244.686-1.22 1.258-1.748 1.334-.48.068-1.077.103-3.155-.758-2.658-1.101-4.364-3.799-4.498-3.978-.13-.178-1.075-1.43-1.075-2.727 0-1.298.679-1.936.92-2.195.242-.259.529-.323.705-.323.176 0 .353.003.508.01.164.009.385-.062.602.46.223.535.759 1.85.826 1.984.067.135.112.293.023.472-.09.178-.134.29-.267.447-.134.157-.28.35-.401.47-.134.133-.274.278-.118.546.156.267.693 1.144 1.488 1.852 1.023.91 1.886 1.192 2.153 1.325.268.134.424.112.58-.067.157-.178.67-.78 848-1.048.178-.268.356-.223.593-.134.238.089 1.512.713 1.77.842.259.13.432.193.495.305.064.111.064.646-.18 1.332z"/>
        </svg>
    </span>
    <span class="gi-floating-wa-label">WhatsApp</span>
</a>

<?php wp_footer(); ?>

</body>
</html>
