<?php
/**
 * Template Name: About Us
 *
 * @package Graphics_Innovator
 */

get_header(); 
$upload_dir = wp_upload_dir();
$base_url = $upload_dir['baseurl'];
?>

<!-- Banner -->
<?php gi_page_banner( 'About Us', 'Discover Our Story' ); ?>

<!-- ==========================================
     COMPANY STORY
     ========================================== -->
<section class="gi-section gi-hiw-dark-mode gi-about-section-charcoal">
    <div class="gi-container">
        <div class="gi-grid gi-grid-2" style="align-items: center;">
            <div data-gi-animate="fade-up">
                <?php gi_section_heading( 'Who We Are', 'The Leading eCommerce Photo Editing Agency', '', false ); ?>
                <div class="gi-about-text-content">
                    <p style="color: var(--gi-white); line-height: 1.7; margin-bottom: 1.5rem;">
                        Welcome to Graphics Innovator Ltd. We are a globally recognized agency specializing in premium clipping path and digital image enhancement operations.
                    </p>
                    <p style="color: rgba(255,255,255,0.7); line-height: 1.7; margin-bottom: 1.5rem;">
                        We consistently deliver high-end Photoshop services to clients worldwide—including <strong>Background Removal, Clipping Path, Image Masking, and Retouching</strong>. To date, our dedicated support has empowered e-commerce businesses across more than 25 different nations.
                    </p>
                    <p style="color: rgba(255,255,255,0.7); line-height: 1.7; margin-bottom: 2rem;">
                        Operating <strong>24/7, 365 days a year</strong>, our state-of-the-art studio is driven by a formidable team of over 100 skilled graphic designers. We operate on a simple philosophy: you focus on doing what you do best, and outsource the complex image editing to us.
                    </p>
                    <div class="gi-about-quote" style="background: linear-gradient(90deg, rgba(42, 106, 238, 0.1) 0%, rgba(42, 106, 238, 0) 100%); border-left: 4px solid var(--gi-teal); padding: 1.5rem 2rem; border-radius: 0 12px 12px 0; margin-bottom: 2.5rem;">
                        <p style="color: var(--gi-white); margin: 0; line-height: 1.7;">
                            "Headquartered in Nicosia, Cyprus with our massive production facility in Bangladesh, we are uniquely positioned to be your ultimate partner for high-quality, cost-effective image editing solutions."
                        </p>
                    </div>
                </div>
                <div style="margin-top: var(--gi-space-8);">
                    <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="gi-btn gi-btn-primary gi-btn-lg">Partner With Us</a>
                </div>
            </div>
            <div data-gi-animate="fade-up" data-gi-delay="120">
                <div class="gi-about-image-frame" style="position: relative; border-radius: var(--gi-radius-xl); overflow: hidden; box-shadow: var(--gi-shadow-xl);">
                    <!-- Using a generic placeholder for the about image. Ideally, replace with an actual team/office shot -->
                    <img src="<?php echo esc_url( home_url('/wp-content/uploads/2021/11/about_main_img.png') ); ?>" alt="Graphics Innovator Production House" style="width: 100%; height: auto; object-fit: cover; opacity: 1; display: block; position: relative; z-index: 1;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(42,106,238,0.2) 0%, rgba(10,22,40,0.6) 100%); z-index: 2;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     STATS SECTION (Dark)
     ========================================== -->
<section class="gi-section gi-section--dark gi-about-section-blue" style="padding-block: var(--gi-space-12);">
    <div class="gi-container">
        <div class="gi-about-stats-panel" data-gi-animate="fade-up" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); border-radius: 24px; padding: 40px; box-shadow: 0 20px 60px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.1); position: relative; overflow: hidden;">
            
            <!-- Ambient glows for the block -->
            <div style="position: absolute; top: -50px; left: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(42, 106, 238, 0.15) 0%, transparent 70%); filter: blur(30px); pointer-events: none;"></div>
            <div style="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(243, 112, 33, 0.1) 0%, transparent 70%); filter: blur(30px); pointer-events: none;"></div>

            <style>
                .gi-about-stats-flex { display: flex; align-items: center; justify-content: space-between; gap: var(--gi-space-4); position: relative; z-index: 2; }
                .gi-about-stats-flex .gi-stats-divider { height: 80px; width: 1px; background: var(--gi-border); }
                @media(max-width: 991px) {
                    .gi-about-stats-flex { display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px; }
                    .gi-about-stats-flex .gi-stats-divider { display: none; }
                }
                @media(max-width: 575px) {
                    .gi-about-stats-flex { grid-template-columns: 1fr; }
                }
            </style>

            <div class="gi-about-stats-flex">
                <?php 
                gi_stat_counter( 150, '+', 'In-House Designers', gi_icon('star', 32) );
                ?>
                <div class="gi-stats-divider"></div>
                <?php
                gi_stat_counter( 10, 'K+', 'Completed Projects', gi_icon('clipping-path', 32) );
                ?>
                <div class="gi-stats-divider"></div>
                <?php
                gi_stat_counter( 24, '/7', 'Active Operations', gi_icon('clock', 32) );
                ?>
                <div class="gi-stats-divider"></div>
                <?php
                gi_stat_counter( 100, '%', 'NDA Compliance', gi_icon('shield', 32) );
                ?>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     WHY CHOOSE US SECTION
     ========================================== -->
<section class="gi-section gi-hiw-dark-mode gi-about-section-charcoal">
    <div class="gi-container">
        <div data-gi-animate="fade-up">
            <?php gi_section_heading( 'Why Choose Us', 'Why Choose Graphics Innovator?', 'It goes without saying that a service provider must be cost-effective, efficient, and accurate. All of these requirements are met by our organization, which promises to fulfill your needs to your greatest satisfaction.' ); ?>
        </div>
        
        <div class="gi-grid gi-grid-3">
            <div class="gi-service-card" data-gi-animate="fade-up" data-gi-delay="0" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
                <div class="gi-service-card-inner">
                    <div class="gi-service-icon" style="color: #2a6aee;"><?php echo gi_icon('clipping-path'); ?></div>
                    <h3 class="gi-service-title" style="color: #fff;">100% Handmade</h3>
                    <p class="gi-service-desc" style="color: rgba(255,255,255,0.6);">No magic wands. No cheap AI shortcuts. We use the pen tool for absolute precision.</p>
                </div>
            </div>
            <div class="gi-service-card" data-gi-animate="fade-up" data-gi-delay="100" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
                <div class="gi-service-card-inner">
                    <div class="gi-service-icon" style="color: #2a6aee;"><?php echo gi_icon('shield'); ?></div>
                    <h3 class="gi-service-title" style="color: #fff;">Data Security</h3>
                    <p class="gi-service-desc" style="color: rgba(255,255,255,0.6);">Strict Non-Disclosure Agreements (NDA). Your unreleased product photos are completely safe.</p>
                </div>
            </div>
            <div class="gi-service-card" data-gi-animate="fade-up" data-gi-delay="200" style="background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.05);">
                <div class="gi-service-card-inner">
                    <div class="gi-service-icon" style="color: #2a6aee;"><?php echo gi_icon('clock'); ?></div>
                    <h3 class="gi-service-title" style="color: #fff;">24-Hour Turnaround</h3>
                    <p class="gi-service-desc" style="color: rgba(255,255,255,0.6);">Our 3-shift production facility operates 24/7, 365 days a year to meet your tight deadlines.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     OUR ACHIEVEMENTS SECTION
     ========================================== -->
<section class="gi-section gi-hiw-dark-mode gi-about-section-blue">
    <div class="gi-container">
        <div data-gi-animate="fade-up">
            <?php gi_section_heading( 'Our Achievements', 'We are Very Serious About Our Clients', '', true ); ?>
        </div>
        
        <div class="gi-grid gi-grid-3">
            <?php 
            gi_stat_counter( 600, '+', 'Our Trusted Active Clients', gi_icon('star', 32) );
            gi_stat_counter( 100, '+', 'Our Experienced Members', gi_icon('check', 32) );
            gi_stat_counter( 13, '+', 'Years Providing Services', gi_icon('clock', 32) );
            ?>
        </div>
    </div>
</section>

<!-- ==========================================
     GLOBAL OFFICES
     ========================================== -->
<section class="gi-section gi-hiw-dark-mode gi-about-section-charcoal">
    <div class="gi-container">
        <div data-gi-animate="fade-up">
            <?php gi_section_heading( 'Global Presence', 'Our Offices', 'With European headquarters and Asian production facilities, we bridge the gap between quality and affordability.' ); ?>
        </div>
        
        <div class="gi-grid gi-grid-2">
            <!-- Cyprus HQ -->
            <div class="gi-contact-card" data-gi-animate="fade-up">
                <div class="gi-contact-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <div>
                    <h3 class="gi-contact-card-title">European Headquarters (Cyprus)</h3>
                    <div class="gi-contact-card-value" style="font-weight: 400; color: rgba(255,255,255,0.7); font-size: var(--gi-text-sm); line-height: 1.6;">
                        <strong>Graphics Innovator Ltd.</strong><br>
                        ALKEUS 22, STROVOLOS<br>
                        2064 Nicosia, Cyprus<br><br>
                        <strong style="color: rgba(255,255,255,0.5);">Phone:</strong> <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', get_theme_mod('gi_phone_cy', '+357 96 341 452')) ); ?>" style="color: #2a6aee;"><?php echo esc_html( get_theme_mod('gi_phone_cy', '+357 96 341 452') ); ?></a>
                    </div>
                </div>
            </div>
            
            <!-- Bangladesh Production -->
            <div class="gi-contact-card" data-gi-animate="fade-up" data-gi-delay="100">
                <div class="gi-contact-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <div>
                    <h3 class="gi-contact-card-title">Production House (Bangladesh)</h3>
                    <div class="gi-contact-card-value" style="font-weight: 400; color: rgba(255,255,255,0.7); font-size: var(--gi-text-sm); line-height: 1.6;">
                        <strong>Graphics Innovator Ltd.</strong><br>
                        House 70, Road 1/4, Santidhara<br>
                        Rangpur, Bangladesh<br><br>
                        <strong style="color: rgba(255,255,255,0.5);">Phone:</strong> <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', get_theme_mod('gi_phone_bd', '+88 01714 516 662')) ); ?>" style="color: #2a6aee;"><?php echo esc_html( get_theme_mod('gi_phone_bd', '+88 01714 516 662') ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     BRANDS WE SERVED — ENTERPRISE EDITION
     ========================================== -->

<style>
body.page-template-page-about,
body.page-template-page-about button,
body.page-template-page-about input,
body.page-template-page-about textarea,
body.page-template-page-about select {
    font-family: var(--gi-font-sans);
}

body.page-template-page-about h1,
body.page-template-page-about h2,
body.page-template-page-about h3,
body.page-template-page-about h4,
body.page-template-page-about .gi-page-title,
body.page-template-page-about .gi-section-title,
body.page-template-page-about .gi-service-title,
body.page-template-page-about .gi-contact-card-title,
body.page-template-page-about .gi-brands-title,
body.page-template-page-about .gi-cta-title {
    font-family: var(--gi-font-sans);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: 0;
}

body.page-template-page-about p,
body.page-template-page-about .gi-section-subtitle,
body.page-template-page-about .gi-service-desc,
body.page-template-page-about .gi-contact-card-value,
body.page-template-page-about .gi-brands-subtitle,
body.page-template-page-about .gi-cta-subtitle {
    font-family: var(--gi-font-sans);
    font-weight: 500;
}

@keyframes gi-about-float {
    0%, 100% { transform: translate3d(0, 0, 0); }
    50% { transform: translate3d(0, -10px, 0); }
}

@keyframes gi-about-sheen {
    0% { transform: translateX(-130%) skewX(-18deg); opacity: 0; }
    18% { opacity: 0.48; }
    100% { transform: translateX(130%) skewX(-18deg); opacity: 0; }
}

body.page-template-page-about .gi-page-banner .gi-container {
    animation: gi-about-reveal 900ms cubic-bezier(0.16, 1, 0.3, 1) both;
}

@keyframes gi-about-reveal {
    from { opacity: 0; transform: translateY(22px); }
    to { opacity: 1; transform: translateY(0); }
}

body.page-template-page-about .gi-about-image-frame,
body.page-template-page-about .gi-about-quote,
body.page-template-page-about .gi-about-stats-panel,
body.page-template-page-about .gi-service-card,
body.page-template-page-about .gi-stat-item,
body.page-template-page-about .gi-contact-card,
body.page-template-page-about .gi-brands-card,
body.page-template-page-about .gi-cta-inner,
body.page-template-page-about .gi-btn {
    backface-visibility: hidden;
    transform-style: preserve-3d;
    will-change: transform, box-shadow;
    transition:
        transform 520ms cubic-bezier(0.16, 1, 0.3, 1),
        border-color 520ms cubic-bezier(0.16, 1, 0.3, 1),
        box-shadow 520ms cubic-bezier(0.16, 1, 0.3, 1),
        background 520ms cubic-bezier(0.16, 1, 0.3, 1),
        filter 520ms cubic-bezier(0.16, 1, 0.3, 1);
}

body.page-template-page-about .gi-about-image-frame::before,
body.page-template-page-about .gi-about-stats-panel::before,
body.page-template-page-about .gi-service-card::before,
body.page-template-page-about .gi-contact-card::before,
body.page-template-page-about .gi-cta-inner::before {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    opacity: 0;
    background: linear-gradient(110deg, transparent 0%, rgba(255,255,255,0.16) 45%, transparent 62%);
    transition: opacity 420ms cubic-bezier(0.16, 1, 0.3, 1);
}

body.page-template-page-about .gi-about-stats-panel:hover::before,
body.page-template-page-about .gi-service-card:hover::before,
body.page-template-page-about .gi-contact-card:hover::before,
body.page-template-page-about .gi-cta-inner:hover::before {
    opacity: 1;
}

body.page-template-page-about .gi-about-image-frame::before {
    z-index: 3;
    width: 46%;
    animation: gi-about-sheen 5.5s ease-in-out infinite;
}

body.page-template-page-about .gi-about-image-frame img {
    transition: transform 700ms cubic-bezier(0.16, 1, 0.3, 1), filter 700ms cubic-bezier(0.16, 1, 0.3, 1);
}

body.page-template-page-about .gi-about-image-frame:hover {
    transform: translateY(-7px) scale(1.008);
    box-shadow: 0 28px 80px rgba(0,0,0,0.44), 0 0 42px rgba(42,106,238,0.16) !important;
}

body.page-template-page-about .gi-about-image-frame:hover img {
    transform: scale(1.045);
    filter: saturate(1.08) contrast(1.04);
}

body.page-template-page-about .gi-about-quote:hover,
body.page-template-page-about .gi-about-stats-panel:hover {
    transform: translateY(-6px);
    border-color: rgba(47,124,255,0.28) !important;
    box-shadow: 0 24px 62px rgba(0,0,0,0.38), 0 0 34px rgba(47,124,255,0.14) !important;
}

body.page-template-page-about .gi-service-card:hover,
body.page-template-page-about .gi-stat-item:hover,
body.page-template-page-about .gi-contact-card:hover {
    transform: translateY(-8px) scale(1.008) !important;
    border-color: rgba(255,106,26,0.34) !important;
    box-shadow: 0 22px 56px rgba(0,0,0,0.32), 0 0 30px rgba(255,106,26,0.11) !important;
}

body.page-template-page-about .gi-service-card:hover .gi-service-icon,
body.page-template-page-about .gi-stat-item:hover .gi-stat-icon,
body.page-template-page-about .gi-contact-card:hover .gi-contact-card-icon {
    transform: translateY(-3px) scale(1.08);
    box-shadow: 0 14px 34px rgba(47,124,255,0.24);
}

body.page-template-page-about .gi-brands-card {
    box-shadow: 0 14px 38px rgba(15,23,42,0.08);
}

body.page-template-page-about .gi-brands-card:hover {
    transform: translateY(-8px) scale(1.025) !important;
    box-shadow: 0 24px 50px rgba(15,23,42,0.14), 0 0 30px rgba(243,112,33,0.13) !important;
}

body.page-template-page-about .gi-brands-card:hover img {
    transform: scale(1.08);
}

body.page-template-page-about .gi-cta-inner:hover {
    transform: translateY(-6px);
}

body.page-template-page-about .gi-cta-inner:hover .gi-cta-title {
    text-shadow: 0 0 34px rgba(47,124,255,0.22);
}

body.page-template-page-about .gi-btn:hover {
    transform: translateY(-3px) scale(1.012);
}

body.page-template-page-about .gi-about-quote,
body.page-template-page-about .gi-about-stats-panel,
body.page-template-page-about .gi-service-card,
body.page-template-page-about .gi-stat-item,
body.page-template-page-about .gi-contact-card,
body.page-template-page-about .gi-brands-card,
body.page-template-page-about .gi-cta-inner {
    --gi-hover-x: 50%;
    --gi-hover-y: 50%;
    position: relative;
    overflow: hidden;
}

body.page-template-page-about .gi-about-quote::after,
body.page-template-page-about .gi-about-stats-panel::after,
body.page-template-page-about .gi-service-card::after,
body.page-template-page-about .gi-stat-item::after,
body.page-template-page-about .gi-contact-card::after,
body.page-template-page-about .gi-brands-card::after,
body.page-template-page-about .gi-cta-inner::after {
    content: "";
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
    opacity: 0;
    background:
        radial-gradient(
            360px circle at var(--gi-hover-x) var(--gi-hover-y),
            rgba(47,124,255,0.18),
            rgba(47,124,255,0.07) 26%,
            transparent 58%
        );
    transition: opacity 420ms cubic-bezier(0.16, 1, 0.3, 1);
}

body.page-template-page-about .gi-brands-card::after {
    background:
        radial-gradient(
            320px circle at var(--gi-hover-x) var(--gi-hover-y),
            rgba(243,112,33,0.16),
            rgba(47,124,255,0.08) 34%,
            transparent 60%
        );
}

body.page-template-page-about .gi-about-quote:hover::after,
body.page-template-page-about .gi-about-stats-panel:hover::after,
body.page-template-page-about .gi-service-card:hover::after,
body.page-template-page-about .gi-stat-item:hover::after,
body.page-template-page-about .gi-contact-card:hover::after,
body.page-template-page-about .gi-brands-card:hover::after,
body.page-template-page-about .gi-cta-inner:hover::after {
    opacity: 1;
}

body.page-template-page-about .gi-about-quote > *,
body.page-template-page-about .gi-about-stats-panel > *,
body.page-template-page-about .gi-service-card > *,
body.page-template-page-about .gi-stat-item > *,
body.page-template-page-about .gi-contact-card > *,
body.page-template-page-about .gi-brands-card > *,
body.page-template-page-about .gi-cta-inner > * {
    position: relative;
    z-index: 2;
}

body.page-template-page-about .gi-service-card,
body.page-template-page-about .gi-contact-card,
body.page-template-page-about .gi-brands-card,
body.page-template-page-about .gi-btn {
    cursor: pointer;
}

body.page-template-page-about .gi-btn:focus-visible,
body.page-template-page-about .gi-service-card:focus-within,
body.page-template-page-about .gi-contact-card:focus-within {
    outline: 2px solid rgba(47,124,255,0.75);
    outline-offset: 4px;
}

@media (prefers-reduced-motion: reduce) {
    body.page-template-page-about *,
    body.page-template-page-about *::before,
    body.page-template-page-about *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: 0.01ms !important;
    }
}

.page-template-page-about .gi-page-banner,
body.page-template-page-about .gi-page-banner {
    background:
        radial-gradient(circle at 18% 18%, rgba(42,106,238,0.20) 0%, transparent 34%),
        radial-gradient(circle at 84% 28%, rgba(243,112,33,0.12) 0%, transparent 28%),
        linear-gradient(135deg, #02060b 0%, #071a33 48%, #0d2a4f 100%);
    border-bottom: 1px solid rgba(255,255,255,0.07);
}

.gi-about-section-blue,
.gi-about-section-charcoal,
.page-template-page-about .gi-brands-section,
body.page-template-page-about .gi-brands-section,
.page-template-page-about .gi-cta-section,
body.page-template-page-about .gi-cta-section {
    position: relative;
    isolation: isolate;
    border-top: 1px solid rgba(255,255,255,0.065);
    border-bottom: 1px solid rgba(255,255,255,0.045);
}

.gi-about-section-blue {
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.16) 0%, transparent 32%),
        radial-gradient(circle at 88% 82%, rgba(36,197,161,0.09) 0%, transparent 34%),
        linear-gradient(135deg, #030914 0%, #071a33 52%, #0d2748 100%);
}

.gi-about-section-charcoal {
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, #03070d 0%, #0b111c 52%, #111827 100%);
}

.gi-about-section-blue::before,
.gi-about-section-charcoal::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
    background-size: 72px 72px;
    mask-image: linear-gradient(to bottom, transparent 0%, #000 18%, #000 82%, transparent 100%);
}

/* ── Enterprise Brands Section ───────────────────── */
.gi-brands-section {
    position: relative;
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.10) 0%, transparent 34%),
        radial-gradient(circle at 88% 82%, rgba(243,112,33,0.10) 0%, transparent 34%),
        linear-gradient(135deg, #f8fbff 0%, #eef5ff 48%, #ffffff 100%);
    border-top-color: rgba(15,23,42,0.08);
    border-bottom-color: rgba(15,23,42,0.08);
    overflow: hidden;
    padding: 100px 0 120px;
}

.page-template-page-about .gi-brands-section,
body.page-template-page-about .gi-brands-section {
    border-top-color: rgba(15,23,42,0.08);
    border-bottom-color: rgba(15,23,42,0.08);
}

/* Grid dot background */
.gi-brands-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(15,23,42,0.055) 1px, transparent 1px),
        linear-gradient(90deg, rgba(15,23,42,0.055) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}

/* Ambient blobs */
.gi-brands-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    pointer-events: none;
    animation: gi-brands-drift 14s ease-in-out infinite alternate;
}
.gi-brands-blob--left {
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(243,112,33,0.13) 0%, transparent 70%);
    top: -100px; left: -150px;
    animation-delay: 0s;
}
.gi-brands-blob--right {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(42,106,238,0.13) 0%, transparent 70%);
    bottom: -80px; right: -100px;
    animation-delay: -6s;
}
@keyframes gi-brands-drift {
    0%   { transform: translate(0,0) scale(1); }
    100% { transform: translate(30px,-30px) scale(1.1); }
}

/* ── Section Heading ─────────────────────────────── */
.gi-brands-header {
    text-align: center;
    position: relative;
    z-index: 2;
    margin-bottom: 70px;
}
.gi-brands-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(243,112,33,0.10);
    border: 1px solid rgba(243,112,33,0.26);
    color: #c7500b;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    padding: 6px 18px;
    border-radius: 999px;
    margin-bottom: 22px;
}
.gi-brands-eyebrow-dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: #f37021;
    animation: gi-dot-blink 1.5s ease-in-out infinite;
}
.gi-brands-title {
    font-size: clamp(2.2rem, 4vw, 3.6rem);
    font-weight: 800;
    color: #07111f;
    letter-spacing: -0.03em;
    line-height: 1.1;
    margin-bottom: 18px;
}
.gi-brands-title span {
    background: linear-gradient(135deg, #f37021 0%, #f89040 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.gi-brands-subtitle {
    font-size: 1.05rem;
    color: #4b5b73;
    max-width: 540px;
    margin: 0 auto;
    line-height: 1.7;
}

/* ── Marquee Wrapper ─────────────────────────────── */
.gi-brands-marquee-wrap {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    gap: 24px;
}

/* Fade edges */
.gi-brands-marquee-wrap::before,
.gi-brands-marquee-wrap::after {
    content: '';
    position: absolute;
    top: 0; bottom: 0;
    width: 200px;
    z-index: 3;
    pointer-events: none;
}
.gi-brands-marquee-wrap::before {
    left: 0;
    background: linear-gradient(to right, #f8fbff 0%, transparent 100%);
}
.gi-brands-marquee-wrap::after {
    right: 0;
    background: linear-gradient(to left, #ffffff 0%, transparent 100%);
}

/* Each marquee row */
.gi-brands-row {
    display: flex;
    width: max-content;
    align-items: center;
    gap: 0;
}
.gi-brands-row--fwd  { animation: gi-brands-fwd 60s linear infinite; }
.gi-brands-row:hover { animation-play-state: paused; }

@keyframes gi-brands-fwd {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
}

/* Individual logo card */
.gi-brands-card {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 16px;
    padding: 0 20px;
    height: 120px;
    min-width: 260px;
    background: rgba(255,255,255,0.78);
    border: 1px solid rgba(15,23,42,0.10);
    border-radius: 18px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    cursor: default;
    flex-shrink: 0;
    position: relative;
    overflow: hidden;
}
/* Inner shimmer */
.gi-brands-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(42,106,238,0.08) 0%, transparent 100%);
    opacity: 0;
    transition: opacity 0.3s;
}
.gi-brands-card:hover {
    background: #ffffff;
    border-color: rgba(243,112,33,0.35);
    transform: translateY(-6px) scale(1.04);
    box-shadow:
        0 22px 46px rgba(15,23,42,0.14),
        0 0 30px rgba(243,112,33,0.12),
        inset 0 1px 0 rgba(255,255,255,0.85);
}
.gi-brands-card:hover::before { opacity: 1; }
.gi-brands-card img {
    height: 70px;
    width: auto;
    max-width: 220px;
    object-fit: contain;
    display: block;
    filter: brightness(0.95) saturate(0.86);
    transition: filter 0.4s ease, transform 0.4s ease;
}
.gi-brands-card:hover img {
    filter: brightness(1) saturate(1);
    transform: scale(1.05);
}

/* Name label under logo */
.gi-brands-card-name {
    display: none; /* only show on hover via JS if needed */
}

.page-template-page-about .gi-cta-section,
body.page-template-page-about .gi-cta-section {
    background:
        radial-gradient(circle at 18% 50%, rgba(243,112,33,0.12) 0%, transparent 30%),
        radial-gradient(circle at 86% 44%, rgba(42,106,238,0.10) 0%, transparent 36%),
        linear-gradient(135deg, #03070d 0%, #0b111c 52%, #111827 100%);
}

.page-template-page-about .gi-cta-section::before,
body.page-template-page-about .gi-cta-section::before {
    background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
    background-size: 72px 72px;
    opacity: 0.55;
}



/* Responsive */
@media (max-width: 767px) {
    .gi-brands-section { padding: 60px 0 80px; }
    .gi-brands-card { height: 90px; min-width: 180px; margin: 0 10px; }
    .gi-brands-card img { height: 45px; }
    .gi-brands-marquee-wrap::before,
    .gi-brands-marquee-wrap::after { width: 60px; }
}
</style>

<?php
// Logo data: [filename, alt label]
$logos = [
    [ 'DVN_GI-1.png',    'DEVANT'   ],
    [ 'Google_GI-3.png', 'Google'   ],
    [ 'LIQUIT_GI-1.png', 'LIQUIT'   ],
    [ 'MAS_GI-1.png',    'MAS'      ],
    [ 'SGUY_GI-1.png',   'SmartGuy' ],
    [ 'MP_GI-1.png',     'Quality'  ],
];
$base = home_url('/wp-content/uploads/2023/08/');

// Build card HTML for one set
function gi_brand_cards($logos, $base) {
    $html = '';
    foreach ($logos as $logo) {
        $html .= '<div class="gi-brands-card">';
        $html .= '<img src="' . esc_url($base . $logo[0]) . '" alt="' . esc_attr($logo[1]) . '" loading="lazy">';
        $html .= '</div>';
    }
    return $html;
}
$cards = gi_brand_cards($logos, $base);
// Repeat 4× so seamless loop always fills the widest screen
$cards_4x = $cards . $cards . $cards . $cards;
?>

<section class="gi-brands-section" aria-label="Brands We Served">

    <!-- Decorative blobs -->
    <div class="gi-brands-blob gi-brands-blob--left" aria-hidden="true"></div>
    <div class="gi-brands-blob gi-brands-blob--right" aria-hidden="true"></div>

    <!-- Section Heading -->
    <div class="gi-brands-header" data-gi-animate="fade-up">
        <div class="gi-brands-eyebrow">
            <span class="gi-brands-eyebrow-dot"></span>
            Trusted Worldwide
        </div>
        <h2 class="gi-brands-title">Brands We've <span>Served</span></h2>
        <p class="gi-brands-subtitle">
            From global eCommerce giants to boutique studios — enterprises trust us for pixel-perfect results at scale.
        </p>
    </div>

    <!-- Marquee Wrapper -->
    <div class="gi-brands-marquee-wrap" aria-hidden="true">
        <!-- Row 1: Forward -->
        <div class="gi-brands-row gi-brands-row--fwd">
            <?php echo $cards_4x; ?>
        </div>
    </div>

</section>

<!-- ==========================================
     CTA
     ========================================== -->
<section class="gi-cta-section">
    <div class="gi-container">
        <div class="gi-cta-inner" data-gi-animate="fade-up">
            <h2 class="gi-cta-title">Let's Create Something Perfect Together.</h2>
            <p class="gi-cta-subtitle">Test our quality for yourself. Send us up to 3 images and get them back edited in 45 minutes, absolutely free.</p>
            <div class="gi-cta-actions">
                <a href="<?php echo esc_url( home_url('/free-trial') ); ?>" class="gi-btn gi-btn-teal gi-btn-xl gi-btn-glow">
                    Start Free Trial
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var hoverSurfaces = document.querySelectorAll(
        'body.page-template-page-about .gi-about-quote,' +
        'body.page-template-page-about .gi-about-stats-panel,' +
        'body.page-template-page-about .gi-service-card,' +
        'body.page-template-page-about .gi-stat-item,' +
        'body.page-template-page-about .gi-contact-card,' +
        'body.page-template-page-about .gi-brands-card,' +
        'body.page-template-page-about .gi-cta-inner'
    );

    hoverSurfaces.forEach(function (surface) {
        surface.addEventListener('pointermove', function (event) {
            var rect = surface.getBoundingClientRect();
            var x = ((event.clientX - rect.left) / rect.width) * 100;
            var y = ((event.clientY - rect.top) / rect.height) * 100;
            surface.style.setProperty('--gi-hover-x', x.toFixed(2) + '%');
            surface.style.setProperty('--gi-hover-y', y.toFixed(2) + '%');
        }, { passive: true });

        surface.addEventListener('pointerleave', function () {
            surface.style.setProperty('--gi-hover-x', '50%');
            surface.style.setProperty('--gi-hover-y', '50%');
        }, { passive: true });
    });
});
</script>

<?php get_footer(); ?>
