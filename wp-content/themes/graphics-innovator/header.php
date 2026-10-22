<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till the main content.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="gi-header" role="banner">
    <div class="gi-container gi-header-inner">
        
        <!-- Logo -->
        <div class="gi-logo-wrap" style="padding: 10px 0;">
            <?php gi_logo(); ?>
        </div>

        <!-- Desktop & Mobile Navigation Drawer -->
        <nav class="gi-nav" id="gi-primary-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'graphics-innovator' ); ?>">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( [
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'gi-menu',
                    'walker'          => new GI_Nav_Walker(),
                    'fallback_cb'     => false,
                ] );
            } else {
                // Fallback if no menu is assigned
                echo '<ul class="gi-menu"><li class="gi-menu-item"><a href="' . admin_url('nav-menus.php') . '" class="gi-menu-link">Assign a Menu</a></li></ul>';
            }
            ?>
            
            <!-- Desktop Header CTA Button -->
            <div class="gi-header-cta d-none d-lg-block">
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-btn gi-btn-primary gi-btn-sm gi-btn-glow">
                    <?php esc_html_e( 'Get A Quote', 'graphics-innovator' ); ?>
                </a>
            </div>

            <!-- Mobile Drawer Conversion Hub -->
            <div class="gi-mobile-drawer-footer">
                <div class="gi-mobile-drawer-actions">
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-btn gi-btn-primary gi-btn-glow gi-btn-mobile-trial">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <span><?php esc_html_e( 'Free Trial (3 Images)', 'graphics-innovator' ); ?></span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-btn gi-btn-outline gi-btn-mobile-quote">
                        <span><?php esc_html_e( 'Get A Quote', 'graphics-innovator' ); ?></span>
                    </a>
                </div>
                <div class="gi-mobile-drawer-contact">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode( 'Hello Graphics Innovator! I would like to inquire about your professional image editing services.' ); ?>" target="_blank" rel="noopener noreferrer" class="gi-mobile-wa-pill">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.541 1.769.818 2.796.818 3.181 0 5.767-2.586 5.767-5.766.001-3.182-2.585-5.805-5.767-5.805zm3.385 8.167c-.145.407-.724.747-1.02.775-.275.027-.611.127-2.029-.462-1.742-.724-2.883-2.493-2.97-2.609-.087-.116-.711-.946-.711-1.805 0-.859.45-1.28.61-1.455.16-.174.348-.218.464-.218.116 0 .232.001.333.006.107.006.251-.041.392.298.145.348.493 1.203.536 1.29.043.087.072.189.014.305-.058.116-.087.189-.174.29-.087.102-.183.228-.261.306-.087.087-.178.182-.077.355.101.174.45 1.742 1.458 1.428.174.072.276.015.378-.102.102-.116.435-.508.551-.682.116-.174.232-.145.392-.087.16.058 1.015.479 1.189.566.174.087.29.131.333.203.043.073.043.421-.102.828z"/></svg>
                        <span><?php esc_html_e( 'WhatsApp Live Chat', 'graphics-innovator' ); ?></span>
                    </a>
                    <a href="tel:+8801714516662" class="gi-mobile-phone-link">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span>+88 01714 516 662</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Mobile Toggle Button (Morphing Hamburger) -->
        <button class="gi-mobile-toggle" id="gi-mobile-toggle" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'graphics-innovator' ); ?>" aria-expanded="false" aria-controls="gi-primary-nav">
            <span class="gi-hamburger-box" aria-hidden="true">
                <span class="gi-hamburger-line line-1"></span>
                <span class="gi-hamburger-line line-2"></span>
                <span class="gi-hamburger-line line-3"></span>
            </span>
        </button>

    </div>

    <!-- Mobile Nav Backdrop Overlay -->
    <div class="gi-nav-backdrop" id="gi-nav-backdrop" aria-hidden="true"></div>
</header>

<main id="main" class="gi-site-main">
