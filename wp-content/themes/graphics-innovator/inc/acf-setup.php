<?php
/**
 * Graphics Innovator — ACF Engine Setup
 *
 * Registers the Global Site Settings page in the WordPress dashboard,
 * giving clients a dedicated visual panel to manage contact hotlines,
 * addresses, and global brand options.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// 1. Register Global Theme Settings Options Page
add_action( 'acf/init', 'gi_register_acf_options_page' );
function gi_register_acf_options_page() {
    if ( function_exists( 'acf_add_options_page' ) ) {
        acf_add_options_page( [
            'page_title' => __( 'Site Settings', 'graphics-innovator' ),
            'menu_title' => __( 'Site Settings', 'graphics-innovator' ),
            'menu_slug'  => 'gi-theme-settings',
            'capability' => 'edit_posts',
            'redirect'   => false,
            'icon_url'   => 'dashicons-admin-customizer',
            'position'   => 3, // Right near Dashboard for easy client access
            'autoload'   => true,
            'update_button' => __( 'Save Settings', 'graphics-innovator' ),
            'updated_message' => __( 'Site Settings successfully updated.', 'graphics-innovator' ),
        ] );
    }
}

// 2. Helpful Admin Notice if ACF is not active
add_action( 'admin_notices', 'gi_acf_recommendation_notice' );
function gi_acf_recommendation_notice() {
    // Only display to admins who can install plugins
    if ( ! current_user_can( 'activate_plugins' ) ) {
        return;
    }

    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        $install_url = wp_nonce_url(
            self_admin_url( 'update.php?action=install-plugin&plugin=advanced-custom-fields' ),
            'install-plugin_advanced-custom-fields'
        );
        ?>
        <div class="notice notice-info is-dismissible" style="border-left-color: #2563eb;">
            <p>
                <strong><?php esc_html_e( 'Graphics Innovator Dynamic Content Engine:', 'graphics-innovator' ); ?></strong>
                <?php esc_html_e( 'Install or activate the free Advanced Custom Fields plugin to unlock visual text and image editing panels for your client.', 'graphics-innovator' ); ?>
                <a href="<?php echo esc_url( $install_url ); ?>" class="button button-secondary" style="margin-left: 8px;">
                    <?php esc_html_e( 'Install ACF (Free)', 'graphics-innovator' ); ?>
                </a>
            </p>
        </div>
        <?php
    }
}
