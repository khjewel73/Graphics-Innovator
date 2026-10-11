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

        <!-- Desktop Navigation -->
        <nav class="gi-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'graphics-innovator' ); ?>">
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
            
            <!-- Header CTA Button -->
            <div class="gi-header-cta d-none d-lg-block">
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-btn gi-btn-primary gi-btn-sm gi-btn-glow">
                    <?php esc_html_e( 'Get A Quote', 'graphics-innovator' ); ?>
                </a>
            </div>
        </nav>

        <!-- Mobile Toggle -->
        <button class="gi-mobile-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'graphics-innovator' ); ?>" aria-expanded="false">
            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2" fill="none">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>

    </div>
</header>

<main id="main" class="gi-site-main">
