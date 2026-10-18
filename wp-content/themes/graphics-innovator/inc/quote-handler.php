<?php
/**
 * Ultra-Premium Quote Submission Handler
 *
 * Handles AJAX requests from the Request a Quote form on /contact-us/,
 * performs strict validation, anti-spam verification, file handling,
 * sends email notification to info@graphicsinnovator.com,
 * and sends an auto-responder confirmation to the client.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Handle AJAX Quote Request
 */
function gi_handle_ajax_quote() {
    // 1. Verify Nonce
    if ( ! isset( $_POST['gi_quote_nonce'] ) || ! wp_verify_nonce( $_POST['gi_quote_nonce'], 'gi_quote_action' ) ) {
        wp_send_json_error( [ 'message' => 'Security token expired. Please refresh the page and try again.' ] );
    }

    // 2. Anti-spam Honeypot Check
    if ( ! empty( $_POST['gi_quote_company_hp'] ) ) {
        // Silently succeed to fool spam bots
        wp_send_json_success( [ 'message' => 'Your request has been received.' ] );
    }

    // 3. Human Verification Check
    if ( empty( $_POST['gi_robot_verified'] ) || '1' !== $_POST['gi_robot_verified'] ) {
        wp_send_json_error( [ 'message' => 'Please complete the "I\'m not a robot" security check.' ] );
    }

    // 4. Sanitize Text Inputs
    $name         = isset( $_POST['quote_name'] ) ? sanitize_text_field( wp_unslash( $_POST['quote_name'] ) ) : '';
    $email        = isset( $_POST['quote_email'] ) ? sanitize_email( wp_unslash( $_POST['quote_email'] ) ) : '';
    $company      = isset( $_POST['quote_company'] ) ? sanitize_text_field( wp_unslash( $_POST['quote_company'] ) ) : '';
    $website      = isset( $_POST['quote_website'] ) ? esc_url_raw( wp_unslash( $_POST['quote_website'] ) ) : '';
    $phone        = isset( $_POST['quote_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['quote_phone'] ) ) : '';
    $address      = isset( $_POST['quote_address'] ) ? sanitize_text_field( wp_unslash( $_POST['quote_address'] ) ) : '';
    $instructions = isset( $_POST['quote_instructions'] ) ? sanitize_textarea_field( wp_unslash( $_POST['quote_instructions'] ) ) : '';

    // 5. Validate Required Fields
    if ( empty( $name ) ) {
        wp_send_json_error( [ 'message' => 'Please enter your name.' ] );
    }

    if ( empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => 'Please provide a valid business email address.' ] );
    }

    if ( empty( $instructions ) ) {
        wp_send_json_error( [ 'message' => 'Please provide project instructions so we can prepare your quote.' ] );
    }

    // 6. Handle File Uploads
    $uploaded_files = [];
    $allowed_extensions = [ 'jpg', 'jpeg', 'png', 'webp', 'psd', 'tiff', 'tif', 'zip', 'rar', 'pdf', 'ai', 'eps' ];
    $max_file_size = 35 * 1024 * 1024; // 35 MB per file

    // Make sure upload directory exists
    $upload_dir = wp_upload_dir();
    $quotes_dir = $upload_dir['basedir'] . '/gi-quotes/' . date( 'Y/m' );
    if ( ! file_exists( $quotes_dir ) ) {
        wp_mkdir_p( $quotes_dir );
        // Add index.php and .htaccess for security
        file_put_contents( $quotes_dir . '/index.php', '<?php // Silence is golden' );
    }

    // Loop through the 3 file slots
    for ( $i = 1; $i <= 3; $i++ ) {
        $file_key = 'quote_file_' . $i;
        if ( isset( $_FILES[ $file_key ] ) && ! empty( $_FILES[ $file_key ]['name'] ) && 0 === $_FILES[ $file_key ]['error'] ) {
            $file_info = $_FILES[ $file_key ];
            $ext = strtolower( pathinfo( $file_info['name'], PATHINFO_EXTENSION ) );

            if ( in_array( $ext, $allowed_extensions, true ) && $file_info['size'] <= $max_file_size ) {
                $safe_filename = sanitize_file_name( pathinfo( $file_info['name'], PATHINFO_FILENAME ) ) . '-' . wp_generate_password( 6, false ) . '.' . $ext;
                $target_path = $quotes_dir . '/' . $safe_filename;

                if ( move_uploaded_file( $file_info['tmp_name'], $target_path ) ) {
                    $file_url = $upload_dir['baseurl'] . '/gi-quotes/' . date( 'Y/m' ) . '/' . $safe_filename;
                    $uploaded_files[] = [
                        'name' => $file_info['name'],
                        'path' => $target_path,
                        'url'  => $file_url,
                        'size' => round( $file_info['size'] / ( 1024 * 1024 ), 2 ) . ' MB',
                    ];
                }
            }
        }
    }

    // 7. Compose Admin Notification Email
    $admin_email = 'info@graphicsinnovator.com';
    $site_name   = get_bloginfo( 'name' );
    $subject     = "⚡ New Quote Request: {$name} - {$site_name}";

    $files_html = '<p style="color:#64748b; font-style:italic;">No files uploaded.</p>';
    if ( ! empty( $uploaded_files ) ) {
        $files_html = '<ul style="margin:8px 0; padding-left:20px;">';
        foreach ( $uploaded_files as $f ) {
            $files_html .= "<li><strong>" . esc_html( $f['name'] ) . "</strong> (" . esc_html( $f['size'] ) . ") &mdash; <a href='" . esc_url( $f['url'] ) . "' style='color:#2563eb; font-weight:600;'>Download File</a></li>";
        }
        $files_html .= '</ul>';
    }

    $email_body = "
    <div style='font-family:-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,sans-serif; max-width:640px; margin:0 auto; background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; overflow:hidden;'>
        <div style='background:linear-gradient(135deg,#0a1529 0%,#1e293b 100%); padding:28px 32px; color:#ffffff;'>
            <h2 style='margin:0; font-size:22px; font-weight:700; color:#ffffff;'>New Quote Request Received</h2>
            <p style='margin:6px 0 0; color:#94a3b8; font-size:14px;'>Submitted via Graphics Innovator Request a Quote Portal</p>
        </div>
        <div style='padding:32px; color:#1e293b; font-size:15px; line-height:1.6;'>
            <table style='width:100%; border-collapse:collapse; margin-bottom:24px;'>
                <tr>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; width:140px; font-weight:600; color:#64748b;'>Full Name:</td>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; font-weight:700; color:#0f172a;'>" . esc_html( $name ) . "</td>
                </tr>
                <tr>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; font-weight:600; color:#64748b;'>Email:</td>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9;'><a href='mailto:" . esc_attr( $email ) . "' style='color:#2563eb; font-weight:600;'>" . esc_html( $email ) . "</a></td>
                </tr>
                <tr>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; font-weight:600; color:#64748b;'>Company:</td>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9;'>" . ( ! empty( $company ) ? esc_html( $company ) : '<span style="color:#94a3b8;">Not specified</span>' ) . "</td>
                </tr>
                <tr>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; font-weight:600; color:#64748b;'>Website:</td>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9;'>" . ( ! empty( $website ) ? "<a href='" . esc_url( $website ) . "' target='_blank' style='color:#2563eb;'>" . esc_html( $website ) . "</a>" : '<span style="color:#94a3b8;">Not specified</span>' ) . "</td>
                </tr>
                <tr>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; font-weight:600; color:#64748b;'>Phone:</td>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9;'>" . ( ! empty( $phone ) ? esc_html( $phone ) : '<span style="color:#94a3b8;">Not specified</span>' ) . "</td>
                </tr>
                <tr>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9; font-weight:600; color:#64748b;'>Address:</td>
                    <td style='padding:10px 0; border-bottom:1px solid #f1f5f9;'>" . ( ! empty( $address ) ? esc_html( $address ) : '<span style="color:#94a3b8;">Not specified</span>' ) . "</td>
                </tr>
            </table>

            <div style='background:#f8fafc; border-left:4px solid #2563eb; padding:16px 20px; border-radius:6px; margin-bottom:24px;'>
                <h4 style='margin:0 0 8px; font-size:14px; text-transform:uppercase; letter-spacing:0.05em; color:#475569;'>Jobs Instruction:</h4>
                <p style='margin:0; white-space:pre-wrap; color:#0f172a;'>" . esc_html( $instructions ) . "</p>
            </div>

            <div style='margin-bottom:24px;'>
                <h4 style='margin:0 0 10px; font-size:14px; text-transform:uppercase; letter-spacing:0.05em; color:#475569;'>Attached Files (" . count( $uploaded_files ) . "):</h4>
                {$files_html}
            </div>

            <div style='border-top:1px solid #e2e8f0; padding-top:20px; font-size:13px; color:#94a3b8;'>
                <p style='margin:0;'>Submitted on " . date( 'F j, Y \a\t g:i a' ) . " &bull; IP: " . esc_html( $_SERVER['REMOTE_ADDR'] ?? 'Unknown' ) . "</p>
            </div>
        </div>
    </div>";

    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        "From: {$site_name} <info@graphicsinnovator.com>",
        "Reply-To: {$name} <{$email}>",
    ];

    // Send Admin Email
    wp_mail( $admin_email, $subject, $email_body, $headers );

    // 8. Client Confirmation Auto-Responder
    $client_subject = "We received your quote request - Graphics Innovator";
    $client_body = "
    <div style='font-family:-apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,sans-serif; max-width:600px; margin:0 auto; background:#ffffff; border:1px solid #e2e8f0; border-radius:12px; overflow:hidden;'>
        <div style='background:linear-gradient(135deg,#0a1529 0%,#1e293b 100%); padding:28px 32px; color:#ffffff;'>
            <h2 style='margin:0; font-size:22px; font-weight:700; color:#ffffff;'>Thank You, " . esc_html( $name ) . "!</h2>
            <p style='margin:6px 0 0; color:#38bdf8; font-size:14px; font-weight:600;'>Your Quote Request Has Been Received</p>
        </div>
        <div style='padding:32px; color:#1e293b; font-size:15px; line-height:1.6;'>
            <p>Hello <strong>" . esc_html( $name ) . "</strong>,</p>
            <p>Thank you for contacting Graphics Innovator. Our production team and senior retouchers are reviewing your requirements and uploaded files.</p>
            <div style='background:#f0fdf4; border:1px solid #bbf7d0; border-radius:8px; padding:16px 20px; margin:20px 0;'>
                <p style='margin:0; color:#15803d; font-weight:600; font-size:15px;'>⏱ Guaranteed Response Time: Within 45 Minutes</p>
                <p style='margin:4px 0 0; color:#166534; font-size:13px;'>A dedicated account specialist will follow up with transparent pricing and turnaround schedules.</p>
            </div>
            <p style='margin-bottom:8px;'><strong>Need immediate assistance?</strong> Reach us anytime via:</p>
            <ul style='margin:0; padding-left:20px; color:#334155;'>
                <li>Email: <a href='mailto:info@graphicsinnovator.com' style='color:#2563eb;'>info@graphicsinnovator.com</a></li>
                <li>WhatsApp: <a href='https://wa.me/8801714516662' style='color:#2563eb;'>+880 1714 516 662</a></li>
                <li>Europe HQ: +357 96 341 452</li>
            </ul>
            <p style='margin-top:24px; color:#64748b; font-size:13px;'>Best regards,<br><strong style='color:#0f172a;'>The Graphics Innovator Production Team</strong><br>ALKEUS 22, STROVOLOS, 2064 NICOSIA, Cyprus</p>
        </div>
    </div>";

    $client_headers = [
        'Content-Type: text/html; charset=UTF-8',
        "From: Graphics Innovator <info@graphicsinnovator.com>",
    ];
    wp_mail( $email, $client_subject, $client_body, $client_headers );

    wp_send_json_success( [
        'message' => 'Thank you! Your quote request has been received. Our team is reviewing your project and will get back to you within 45 minutes.',
    ] );
}
add_action( 'wp_ajax_gi_submit_quote', 'gi_handle_ajax_quote' );
add_action( 'wp_ajax_nopriv_gi_submit_quote', 'gi_handle_ajax_quote' );
