<?php
/**
 * Template Name: Homepage
 * 
 * @package Graphics_Innovator
 */

get_header();

$upload_dir = wp_upload_dir();
$base_url = $upload_dir['baseurl'];
// Fallback image paths if the original aren't found
$before_img_1 = $base_url . '/2022/12/shadow-masking.png';
$after_img_1  = $base_url . '/2022/12/shadow-masking-c.png'; // Example assumed after image
?>

<style>
/* ============================================================
   HOMEPAGE V2 — ENTERPRISE UPGRADE ENGINE
   ============================================================ */

/* ---- Particle Canvas Hero Background ---- */
#gi-particle-canvas {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 0;
    pointer-events: none;
    opacity: 0.55;
}

/* ---- Ambient Color Blobs ---- */
.gi-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(120px);
    pointer-events: none;
    z-index: 0;
    animation: gi-blob-drift 12s ease-in-out infinite alternate;
}
.gi-blob--orange {
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(234,88,12,0.12) 0%, transparent 70%);
    top: -100px; left: -100px;
    animation-delay: 0s;
}
.gi-blob--blue {
    width: 700px; height: 700px;
    background: radial-gradient(circle, rgba(37,99,235,0.10) 0%, transparent 70%);
    top: 20%; right: -150px;
    animation-delay: -4s;
}
.gi-blob--purple {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(139,92,246,0.08) 0%, transparent 70%);
    bottom: 0; left: 30%;
    animation-delay: -8s;
}
@keyframes gi-blob-drift {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(40px, -30px) scale(1.05); }
    100% { transform: translate(-20px, 20px) scale(0.97); }
}

/* ---- Hero Section ---- */
.gi-hero {
    position: relative;
    min-height: auto !important;
    padding-top: calc(var(--gi-header-height) + 10px) !important;
    padding-bottom: 60px !important;
    overflow: hidden;
}
.gi-hero-inner { position: relative; z-index: 1; }

/* ---- Typewriter Effect ---- */
.gi-typewriter {
    display: inline-block;
    border-right: 0;
    animation: none;
    white-space: nowrap;
    overflow: hidden;
}
@keyframes gi-blink {
    0%, 100% { border-color: #ea580c; }
    50%       { border-color: transparent; }
}

/* ---- Logo Marquee: full styles defined in second <style> block below ---- */

/* ---- Homepage block color rhythm ---- */
/* ---- Service Rows ---- */
.gi-home-section-blue,
.gi-home-section-charcoal,
.gi-home-section-light {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    width: 100%;
}

.gi-home-section-blue {
    border-top: 1px solid rgba(255,255,255,0.065);
    border-bottom: 1px solid rgba(255,255,255,0.045);
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.16) 0%, transparent 32%),
        radial-gradient(circle at 88% 82%, rgba(36,197,161,0.09) 0%, transparent 34%),
        linear-gradient(135deg, #030914 0%, #071a33 52%, #0d2748 100%) !important;
}

.gi-home-section-charcoal {
    border-top: 1px solid rgba(255,255,255,0.06);
    border-bottom: 1px solid rgba(255,255,255,0.04);
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, #03070d 0%, #0b111c 52%, #111827 100%) !important;
}

.gi-home-section-light {
    color: var(--gi-text);
    border-top: 1px solid rgba(30,41,59,0.08);
    border-bottom: 1px solid rgba(30,41,59,0.1);
    background:
        radial-gradient(circle at 14% 12%, rgba(255,106,26,0.08) 0%, transparent 34%),
        radial-gradient(circle at 88% 72%, rgba(47,124,255,0.08) 0%, transparent 36%),
        linear-gradient(180deg, #ffffff 0%, #f8fafc 48%, #eef2f7 100%) !important;
}

.gi-home-section-blue::before,
.gi-home-section-charcoal::before {
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

.gi-home-section-light::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    pointer-events: none;
    background-image:
        linear-gradient(rgba(42,106,238,0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(42,106,238,0.035) 1px, transparent 1px);
    background-size: 68px 68px;
    mask-image: linear-gradient(to bottom, transparent 0%, #000 16%, #000 84%, transparent 100%);
}

.gi-home-section-light .gi-section-title,
.gi-home-section-light .gi-pricing-card:not(.gi-pricing-card--featured) .gi-pricing-amount,
.gi-home-section-light .gi-pricing-card:not(.gi-pricing-card--featured) .gi-pricing-currency {
    color: var(--gi-text) !important;
}

.gi-home-section-light .gi-section-subtitle {
    color: var(--gi-text-2) !important;
}

.gi-service-row {
    display: flex;
    align-items: center;
    gap: 80px;
    padding: 100px 24px;
    max-width: 1300px;
    margin: 0 auto;
    position: relative;
}
.gi-service-row.gi-reverse { flex-direction: row-reverse; }

/* Ambient tint per row */
.gi-srow-wrap:nth-child(1)  { background: #030712; }
.gi-srow-wrap:nth-child(2)  { background: linear-gradient(180deg, #050e20 0%, #030712 100%); }
.gi-srow-wrap:nth-child(3)  { background: #030712; }
.gi-srow-wrap:nth-child(4)  { background: linear-gradient(180deg, #080818 0%, #030712 100%); }
.gi-srow-wrap:nth-child(5)  { background: linear-gradient(180deg, #030f0f 0%, #030712 100%); }
.gi-srow-wrap:nth-child(6)  { background: linear-gradient(180deg, #0a0a1a 0%, #030712 100%); }
.gi-srow-wrap { border-top: 1px solid rgba(255,255,255,0.04); position: relative; overflow: hidden; }

/* Hover left-border flash on row content */
.gi-service-content {
    flex: 1;
    position: relative;
    padding-left: 28px;
    border-left: 2px solid transparent;
    transition: border-color 0.4s ease;
}
.gi-service-row:hover .gi-service-content {
    border-color: #ea580c;
}

/* ---- Typography ---- */
.gi-highlight-orange { background: linear-gradient(135deg, #ea580c 0%, #f97316 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.gi-highlight-blue   { background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.gi-highlight-teal   { background: linear-gradient(135deg, #1e50b5 0%, #2a6aee 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

.gi-section-title, .gi-cta-title, .gi-service-content h3 {
    font-size: clamp(2.5rem, 5vw, 4.5rem) !important;
    font-weight: 800 !important;
    line-height: 1.05 !important;
    letter-spacing: -0.03em !important;
    margin-bottom: 16px;
}
.gi-service-content h3, .gi-section--dark .gi-section-title, .gi-cta-title { color: var(--gi-white) !important; }
.gi-section:not(.gi-section--dark) .gi-section-title { color: var(--gi-text) !important; }
.gi-service-content h5 { font-weight: 600; color: var(--gi-white); margin-bottom: 24px; font-size: 18px; line-height: 1.5; }
.gi-service-content p  { color: #e2e8f0; font-size: 16px; line-height: 1.8; margin-bottom: 32px; }

/* ---- Feature List — stagger ---- */
.gi-feature-list { list-style: none; padding: 0; margin: 0 0 40px 0; }
.gi-feature-list li {
    display: flex; align-items: center; gap: 12px;
    color: #e2e8f0; font-size: 15px; margin-bottom: 16px;
    opacity: 0; transform: translateX(-20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}
.gi-feature-list li.gi-visible {
    opacity: 1; transform: translateX(0);
}
.gi-feature-list li svg { color: var(--gi-orange, #ea580c); width: 20px; height: 20px; flex-shrink: 0; }

/* ---- Service visual glass frame ---- */
.gi-service-visual { flex: 1; position: relative; }
.gi-glass-frame {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 24px;
    padding: 16px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
    transform: none !important;
}

/* ---- Stats — Counter ---- */
.gi-stat-item {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 24px;
    padding: 40px 20px !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background 0.3s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    position: relative; overflow: hidden;
}
.gi-stat-item::before {
    content: '';
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, transparent 100%);
    opacity: 0; transition: opacity 0.3s ease;
}
.gi-stat-item:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.4); border-color: rgba(255,255,255,0.1); background: rgba(255,255,255,0.04); }
.gi-stat-item:hover::before { opacity: 1; }

/* Shimmer sweep on stat hover */
.gi-stat-item::after {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 60%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.04), transparent);
    transform: skewX(-20deg);
    transition: 0.6s;
}
.gi-stat-item:hover::after { left: 200%; }

.gi-stat-icon { border-radius: 50% !important; background: rgba(234,88,12,0.1) !important; border: 1px solid rgba(234,88,12,0.3) !important; box-shadow: 0 0 20px rgba(234,88,12,0.2); }
.gi-stats-grid { grid-template-columns: repeat(4, 1fr) !important; gap: 30px !important; }
@media (max-width: 992px) { .gi-stats-grid { grid-template-columns: repeat(2, 1fr) !important; } }
@media (max-width: 576px) { .gi-stats-grid { grid-template-columns: 1fr !important; } }

/* Counter number pop */
.gi-stat-number, [class*="gi-counter"] {
    transition: transform 0.3s ease;
}
.gi-stat-item:hover .gi-stat-number,
.gi-stat-item:hover [class*="gi-counter"] {
    transform: scale(1.08);
    display: inline-block;
}

/* ---- Scroll Reveal ---- */
[data-gi-animate] {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}
[data-gi-animate].gi-animated {
    opacity: 1;
    transform: translateY(0);
}

/* ---- Header spacing ---- */
:root {
    --gi-header-height: 92px;
    --gi-header-height-sm: 68px;
}

@media (max-width: 992px) {
    :root {
        --gi-header-height: 78px;
        --gi-header-height-sm: 68px;
    }
    .gi-service-row, .gi-service-row.gi-reverse { flex-direction: column; gap: 40px; padding: 60px 24px; }
}
@media (max-width: 767px) {
    :root {
        --gi-header-height: 68px;
        --gi-header-height-sm: 68px;
    }
}
/* ---- Hero Banner Image ---- */
.gi-hero-banner-wrap {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    max-width: 550px;
}
.gi-hero-banner-img {
    width: 100%;
    max-width: 520px;
    height: auto;
    object-fit: contain;
    filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.4));
    transition: transform 0.4s ease, filter 0.4s ease;
    animation: gi-hero-float 5s ease-in-out infinite alternate;
}
.gi-hero-banner-img:hover {
    transform: scale(1.03);
    filter: drop-shadow(0 25px 45px rgba(243, 112, 33, 0.25));
}
@keyframes gi-hero-float {
    0%   { transform: translateY(0); }
    100% { transform: translateY(-12px); }
}
</style>

<!-- ==========================================
     HERO SECTION
     ========================================== -->
<section id="hero" class="gi-hero">
    <canvas id="gi-particle-canvas"></canvas>
    <div class="gi-blob gi-blob--orange"></div>
    <div class="gi-blob gi-blob--blue"></div>
    <div class="gi-blob gi-blob--purple"></div>
    <div class="gi-hero-bg"></div>
    <div class="gi-hero-dots"></div>
    
    <div class="gi-container gi-hero-inner">
        
        <div class="gi-hero-content" data-gi-animate="fade-up">
            <div class="gi-hero-badge">
                <span class="gi-hero-badge-dot"></span>
                <?php esc_html_e( '24-Hour Turnaround Available', 'graphics-innovator' ); ?>
            </div>
            
            <h1 class="gi-hero-title">
                Pixel-Perfect <br>
                <span class="gi-highlight gi-typewriter" id="gi-typewriter-text">Photo Editing</span> <br>
                for eCommerce
            </h1>
            
            <p class="gi-hero-subtitle">
                Transform your product images with our 100% handmade manual clipping path and retouching services. Starting at just $0.25/image.
            </p>
            
            <div class="gi-hero-pills">
                <span class="gi-hero-pill"><?php echo gi_icon( 'check', 16 ); ?> NDA Guaranteed</span>
                <span class="gi-hero-pill"><?php echo gi_icon( 'check', 16 ); ?> Pixel-Perfect Quality</span>
                <span class="gi-hero-pill"><?php echo gi_icon( 'check', 16 ); ?> Free Revisions</span>
            </div>
            
            <div class="gi-hero-actions">
                <a href="<?php echo esc_url( home_url( '/free-trial' ) ); ?>" class="gi-btn gi-btn-primary gi-btn-xl gi-btn-glow">
                    Start Free Trial
                </a>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-btn gi-btn-outline gi-btn-xl">
                    Get A Quote
                </a>
            </div>
            <p class="gi-hero-note">No credit card required. Get your trial images back in 45 minutes.</p>
        </div>

        <div class="gi-hero-visual" data-gi-animate="fade-in" data-gi-delay="300">
            <!-- Hero Banner Graphic -->
            <div class="gi-hero-banner-wrap">
                <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/Home-Banner.webp' ); ?>" type="image/webp">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/Home-Banner.png' ); ?>" 
                         alt="<?php esc_attr_e( 'Graphics Innovator Photo Editing Services', 'graphics-innovator' ); ?>" 
                         class="gi-hero-banner-img"
                         width="1040"
                         height="948"
                         fetchpriority="high"
                         loading="eager"
                         decoding="async"
                         onerror="this.onerror=null;this.src='https://graphicsinnovator.com/wp-content/uploads/2025/05/Home-Banner.png';">
                </picture>
            </div>
        </div>

    </div>

    <div class="gi-hero-scroll" onclick="document.getElementById('services').scrollIntoView({behavior:'smooth'})">
        Scroll to explore
        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="7 13 12 18 17 13"></polyline>
            <polyline points="7 6 12 11 17 6"></polyline>
        </svg>
    </div>
</section>

<!-- ==========================================
     TRUST BAR
     ========================================== -->
<div class="gi-trust-bar">
    <div class="gi-container">
        <div class="gi-trust-inner">
            <div class="gi-trust-item" data-gi-animate="fade-up">
                <?php echo gi_icon( 'star', 32 ); ?>
                <div class="gi-trust-text-wrap">
                    <div class="gi-trust-number">5/5</div>
                    <div class="gi-trust-label">TrustPilot Rating</div>
                </div>
            </div>
            <div class="gi-trust-divider"></div>
            <div class="gi-trust-item" data-gi-animate="fade-up" data-gi-delay="100">
                <?php echo gi_icon( 'check', 32 ); ?>
                <div class="gi-trust-text-wrap">
                    <div class="gi-trust-number">10k+</div>
                    <div class="gi-trust-label">Projects Completed</div>
                </div>
            </div>
            <div class="gi-trust-divider"></div>
            <div class="gi-trust-item" data-gi-animate="fade-up" data-gi-delay="200">
                <?php echo gi_icon( 'clock', 32 ); ?>
                <div class="gi-trust-text-wrap">
                    <div class="gi-trust-number">24/7</div>
                    <div class="gi-trust-label">Production House</div>
                </div>
            </div>
            <div class="gi-trust-divider"></div>
            <div class="gi-trust-item" data-gi-animate="fade-up" data-gi-delay="300">
                <?php echo gi_icon( 'shield', 32 ); ?>
                <div class="gi-trust-text-wrap">
                    <div class="gi-trust-number">100%</div>
                    <div class="gi-trust-label">Data Security (NDA)</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ==========================================
     SERVICES GRID
     ========================================== -->
<section id="services" class="gi-section gi-section--dark gi-home-section-charcoal" style="padding-bottom: 40px;">
    <div class="gi-container">
        <style>
            #services .gi-section-title {
                font-size: clamp(1.8rem, 3.5vw, 2.8rem);
                line-height: 1.25;
            }
        </style>
        <?php gi_section_heading( 
            'What We Do', 
            'Our <span class="gi-highlight-blue">Professional</span> <br>Photo <span class="gi-highlight-orange">Editing</span> Services', 
            'We provide high-quality, hand-drawn clipping path and photo retouching services for eCommerce businesses, photographers, and agencies worldwide.',
            true
        ); ?>
    </div>
</section>

<?php
// Dynamic ACF Services Data with 100% exact fallbacks to current hardcoded design
$services_data = [
    1 => [
        'bg_class'  => 'gi-home-section-blue',
        'reverse'   => false,
        'uid'       => 's_clip',
        'title'     => gi_get_field( 's1_title', '<span class="gi-highlight-orange">Clipping</span> Path' ),
        'sub'       => gi_get_field( 's1_sub', 'Increase your sales by obtaining the best precise image cutting' ),
        'desc'      => gi_get_field( 's1_desc', 'To use our clipping path services, remove unwanted parts, separate parts of an image to create a new image and remove the unwanted background. Our team is dedicated to providing handmade clipping path services with maximum accuracy in a relatively minimum cost. We will save your precious time and reduce your cost.' ),
        'features'  => gi_parse_features( gi_get_field( 's1_features' ), [
            'Reasonable Pricing',
            'Quick Turnaround',
            'Pixel Perfect Quality',
            'Customized Image Clipping',
        ] ),
        'before'    => gi_get_image_url( gi_get_field( 's1_before_img' ), 'full', $base_url . '/2023/08/Clipping-Path_A.jpg' ),
        'after'     => gi_get_image_url( gi_get_field( 's1_after_img' ), 'full', $base_url . '/2023/08/Clipping-Path_B.jpg' ),
        'btn_url'   => gi_get_field( 's1_btn_url', home_url( '/clippingpath/' ) ),
    ],
    2 => [
        'bg_class'  => 'gi-home-section-charcoal',
        'reverse'   => true,
        'uid'       => 's_retouch',
        'title'     => gi_get_field( 's2_title', 'Photo <span class="gi-highlight-blue">Retouching</span>' ),
        'sub'       => gi_get_field( 's2_sub', 'Make incredible photos with your photography and increase your sales to the next level' ),
        'desc'      => gi_get_field( 's2_desc', 'Photo retouching services are the ideal kind of digital marketing. If you\'re going after a high-end market, it\'s challenging to make your image flawless right out of the camera, regardless of how talented a photographer you are. Complete product photo editing is available through our expert photo retouching service, and our goal is to provide product photos with gorgeous finishes.' ),
        'features'  => gi_parse_features( gi_get_field( 's2_features' ), [
            'Remove imperfections',
            'Improve image quality',
            'Apply Unique Techniques',
            'High-end Skin Retouching',
            'Fix framing and lighting issues',
        ] ),
        'before'    => gi_get_image_url( gi_get_field( 's2_before_img' ), 'full', $base_url . '/2023/09/Retouching_1_A.jpg' ),
        'after'     => gi_get_image_url( gi_get_field( 's2_after_img' ), 'full', $base_url . '/2023/09/Retouching_1_B.jpg' ),
        'btn_url'   => gi_get_field( 's2_btn_url', home_url( '/photo-retouching-service/' ) ),
    ],
    3 => [
        'bg_class'  => 'gi-home-section-blue',
        'reverse'   => false,
        'uid'       => 's_ecom',
        'title'     => gi_get_field( 's3_title', '<span class="gi-highlight-teal">E-commerce</span> Image <span class="gi-highlight-blue">Editing</span>' ),
        'sub'       => gi_get_field( 's3_sub', 'Make your product photos as a professional look and increase online sales' ),
        'desc'      => gi_get_field( 's3_desc', 'Ecommerce photo retouching services appear to be the vital element in effective eCommerce marketing. You must get your images professionally retouched if you want to increase your product sales. With the help of our eCommerce product photo editing, you can create better product photos to boost sales. Take use of the best product retouching and cutting edge features for your product image and increase your sales to the next level.' ),
        'features'  => gi_parse_features( gi_get_field( 's3_features' ), [
            'Can Handle large-scale projects',
            'Providing accurate quality image',
            'Understanding product specifications',
            'Adhering to online image specifications',
        ] ),
        'before'    => gi_get_image_url( gi_get_field( 's3_before_img' ), 'full', $base_url . '/2023/09/Ecommerce_1_A-1.jpg' ),
        'after'     => gi_get_image_url( gi_get_field( 's3_after_img' ), 'full', $base_url . '/2023/09/Ecommerce_1_B.jpg' ),
        'btn_url'   => gi_get_field( 's3_btn_url', home_url( '/product-photo-editing-service/' ) ),
    ],
    4 => [
        'bg_class'  => 'gi-home-section-charcoal',
        'reverse'   => true,
        'uid'       => 's_ghost',
        'title'     => gi_get_field( 's4_title', '<span class="gi-highlight-teal">Ghost</span> <span class="gi-highlight-orange">Mannequin</span>' ),
        'sub'       => gi_get_field( 's4_sub', '' ),
        'desc'      => gi_get_field( 's4_desc', 'Using the ghost mannequin retouching service, which improves the product images, is the best way to display your clothing items. This will allow the vendors to make more money than they did with the models. An age-old marketing strategy used to make the clothing product images look amazing is using models and having individuals pose in chic ways and it also increases your cost.' ),
        'features'  => gi_parse_features( gi_get_field( 's4_features' ), [
            'Maintain 100% Accuracy',
            'Neck Joint on clothes',
            'Bottom Joint on Ghost Mannequin',
            'Sleeves Joint on Ghost Mannequin',
            '3D or 360° Ghost Mannequin Retouch',
        ] ),
        'before'    => gi_get_image_url( gi_get_field( 's4_before_img' ), 'full', $base_url . '/2023/09/Ghost_A-1.jpg' ),
        'after'     => gi_get_image_url( gi_get_field( 's4_after_img' ), 'full', $base_url . '/2023/09/Ghost_B.jpg' ),
        'btn_url'   => gi_get_field( 's4_btn_url', home_url( '/ghost-mannequin-service/' ) ),
    ],
    5 => [
        'bg_class'  => 'gi-home-section-blue',
        'reverse'   => false,
        'uid'       => 's_mask',
        'title'     => gi_get_field( 's5_title', '<span class="gi-highlight-orange">Image</span> <span class="gi-highlight-blue">Masking</span>' ),
        'sub'       => gi_get_field( 's5_sub', '' ),
        'desc'      => gi_get_field( 's5_desc', 'Masking is necessary to pick and erase the backdrop when the edges are unclear, hairy, furry or fuzzy. By giving professionals a chance to concentrate on the unattainable details, it improves viewers\' watching experiences. We offer different kinds of masking services eg Soft Mask, Layer Mask, Alpha Mask, Channel Mask, Transparency Mask etc.' ),
        'features'  => gi_parse_features( gi_get_field( 's5_features' ), [
            'Fastest Delivery',
            'Competitive Price',
            'Specific Edge Detection',
            'Maintain 100% Accuracy',
        ] ),
        'before'    => gi_get_image_url( gi_get_field( 's5_before_img' ), 'full', $base_url . '/2023/09/Image-Masking_A.jpg' ),
        'after'     => gi_get_image_url( gi_get_field( 's5_after_img' ), 'full', $base_url . '/2023/09/Image-Masking_B.jpg' ),
        'btn_url'   => gi_get_field( 's5_btn_url', home_url( '/image-masking-service/' ) ),
    ],
    6 => [
        'bg_class'  => 'gi-home-section-charcoal',
        'reverse'   => true,
        'uid'       => 's_shadow',
        'title'     => gi_get_field( 's6_title', '<span class="gi-highlight-blue">Shadow</span> <span class="gi-highlight-teal">Creation</span>' ),
        'sub'       => gi_get_field( 's6_sub', '' ),
        'desc'      => gi_get_field( 's6_desc', 'Leaving your customers speechless and convincing them that your products are real based on the images, is the sole option for them. After removing the background from product shots with white backgrounds, the Photoshop shadow creation service makes the images realistic rather than fake.' ),
        'features'  => gi_parse_features( gi_get_field( 's6_features' ), [
            'Drop Shadowing',
            'Natural Shadowing',
            'Reflection Shadowing',
            'Pickup Original Shadow',
        ] ),
        'before'    => gi_get_image_url( gi_get_field( 's6_before_img' ), 'full', $base_url . '/2023/09/Shadowing_A.jpg' ),
        'after'     => gi_get_image_url( gi_get_field( 's6_after_img' ), 'full', $base_url . '/2023/09/Shadowing_B.jpg' ),
        'btn_url'   => gi_get_field( 's6_btn_url', home_url( '/shadow-creation-service/' ) ),
    ],
];
?>

<?php foreach ( $services_data as $s ) : ?>
<div class="<?php echo esc_attr( $s['bg_class'] ); ?>">
    <div class="gi-service-row<?php echo $s['reverse'] ? ' gi-reverse' : ''; ?>">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after( $s['before'], $s['after'], '', '', $s['uid'] ); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3><?php echo wp_kses_post( $s['title'] ); ?></h3>
            <?php if ( ! empty( $s['sub'] ) ) : ?>
                <h5><?php echo esc_html( $s['sub'] ); ?></h5>
            <?php endif; ?>
            <p><?php echo wp_kses_post( $s['desc'] ); ?></p>
            <ul class="gi-feature-list">
                <?php foreach ( $s['features'] as $item ) : ?>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> <?php echo esc_html( $item ); ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo esc_url( $s['btn_url'] ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- ==========================================
     HOW IT WORKS
     ========================================== -->
<section id="how-it-works" class="gi-section gi-hiw-dark-mode gi-home-section-blue">
    <div class="gi-container">
        <?php gi_section_heading( 
            'Simple Process', 
            '<span class="gi-highlight-blue">How It</span> <span class="gi-highlight-teal">Works</span>', 
            'Get your images professionally edited in three simple steps.'
        ); ?>

        <div class="gi-hiw-steps">
            <div class="gi-hiw-step" data-gi-animate="fade-up" data-gi-delay="0">
                <div class="gi-hiw-step-num">1</div>
                <div class="gi-hiw-step-icon"><?php echo gi_icon('upload', 32); ?></div>
                <h3 class="gi-hiw-step-title">Upload Images</h3>
                <p class="gi-hiw-step-desc">Request a quote and upload your raw images securely to our FTP server or cloud drive.</p>
            </div>
            <div class="gi-hiw-step" data-gi-animate="fade-up" data-gi-delay="150">
                <div class="gi-hiw-step-num">2</div>
                <div class="gi-hiw-step-icon"><?php echo gi_icon('masking', 32); ?></div>
                <h3 class="gi-hiw-step-title">We Edit (24h)</h3>
                <p class="gi-hiw-step-desc">Our expert designers process your images strictly following your guidelines and requirements.</p>
            </div>
            <div class="gi-hiw-step" data-gi-animate="fade-up" data-gi-delay="300">
                <div class="gi-hiw-step-num">3</div>
                <div class="gi-hiw-step-icon"><?php echo gi_icon('download', 32); ?></div>
                <h3 class="gi-hiw-step-title">Download</h3>
                <p class="gi-hiw-step-desc">Review the final quality-checked images and download them directly from our secure portal.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     PRICING (CLEAN & MODERN LIGHT SECTION)
     ========================================== -->
<style>
/* ---------------- Clean Modern Pricing Section ---------------- */
.gi-home-pricing-section {
    position: relative;
    background:
        radial-gradient(circle at 15% 10%, rgba(255, 106, 26, 0.04) 0%, transparent 45%),
        radial-gradient(circle at 85% 90%, rgba(42, 106, 238, 0.05) 0%, transparent 45%),
        linear-gradient(180deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
    color: #0f172a;
    padding: 6.5rem 0 6rem 0;
    overflow: hidden;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.gi-home-pricing-section .gi-container {
    position: relative;
    z-index: 1;
}
.gi-home-pricing-section .gi-section-title {
    color: #0f172a !important;
}
.gi-home-pricing-section .gi-section-subtitle {
    color: #64748b !important;
    max-width: 650px;
    margin: 0.8rem auto 3.5rem auto;
    font-size: 1.05rem;
    line-height: 1.6;
}

/* Pricing Grid */
.gi-home-pricing-section .gi-pricing-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    align-items: stretch;
    max-width: 1180px;
    margin: 0 auto 3rem auto;
}

/* Card Styling */
.gi-home-pricing-section .gi-pricing-clean-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 24px;
    padding: 3rem 2.25rem 2.25rem 2.25rem;
    box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.04), 0 2px 6px -1px rgba(15, 23, 42, 0.02);
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    display: flex;
    flex-direction: column;
}
.gi-home-pricing-section .gi-pricing-clean-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 48px -12px rgba(15, 23, 42, 0.09), 0 0 0 1px #cbd5e1;
    border-color: #cbd5e1;
}

/* Featured / Popular Card */
.gi-home-pricing-section .gi-pricing-clean-card.is-popular {
    border: 2px solid #2a6aee;
    box-shadow: 0 14px 40px -6px rgba(42, 106, 238, 0.15), 0 4px 16px -2px rgba(42, 106, 238, 0.06);
}
.gi-home-pricing-section .gi-pricing-clean-card.is-popular:hover {
    box-shadow: 0 26px 52px -10px rgba(42, 106, 238, 0.24), 0 0 0 2px #1d4ed8;
    transform: translateY(-8px);
}
.gi-home-pricing-section .gi-pricing-popular-badge {
    position: absolute;
    top: -1px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #2a6aee 0%, #1d4ed8 100%);
    color: #ffffff;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 6px 18px;
    border-radius: 0 0 12px 12px;
    box-shadow: 0 4px 12px rgba(42, 106, 238, 0.3);
}

/* Card Headers */
.gi-home-pricing-section .gi-plan-title {
    font-size: 1.45rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.45rem 0;
    letter-spacing: -0.3px;
}
.gi-home-pricing-section .gi-plan-tagline {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.5;
    margin: 0 0 1.6rem 0;
    min-height: 44px;
}

/* Price Value Display */
.gi-home-pricing-section .gi-price-figure-wrap {
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #f1f5f9;
    margin-bottom: 1.6rem;
}
.gi-home-pricing-section .gi-price-figure {
    font-size: 2.6rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1;
    display: flex;
    align-items: baseline;
    gap: 4px;
    letter-spacing: -1px;
}
.gi-home-pricing-section .gi-price-figure .gi-price-currency {
    font-size: 1.55rem;
    font-weight: 700;
    color: #2a6aee;
}
.gi-home-pricing-section .gi-price-figure .gi-price-unit {
    font-size: 0.95rem;
    font-weight: 600;
    color: #64748b;
    letter-spacing: 0;
    margin-left: 2px;
}
.gi-home-pricing-section .gi-price-figure-custom {
    font-size: 2.15rem;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.5px;
    line-height: 1.15;
}
.gi-home-pricing-section .gi-price-subtext {
    font-size: 0.82rem;
    color: #16a34a;
    font-weight: 600;
    margin-top: 0.5rem;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Features List */
.gi-home-pricing-section .gi-pricing-feature-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2.2rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
    flex: 1;
}
.gi-home-pricing-section .gi-pricing-feature-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.92rem;
    color: #334155;
    line-height: 1.4;
}
.gi-home-pricing-section .gi-feature-check {
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: rgba(42, 106, 238, 0.09);
    color: #2a6aee;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-home-pricing-section .gi-feature-check svg {
    width: 12px;
    height: 12px;
    stroke-width: 3;
}

/* CTA Buttons */
.gi-home-pricing-section .gi-pricing-cta-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 1rem 1.5rem;
    border-radius: 14px;
    font-size: 0.96rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.28s ease;
    margin-top: auto;
}
.gi-home-pricing-section .gi-cta-outline {
    background: #f8fafc;
    color: #0f172a !important;
    border: 1px solid #cbd5e1;
}
.gi-home-pricing-section .gi-cta-outline:hover {
    background: #0f172a;
    border-color: #0f172a;
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.15);
}
.gi-home-pricing-section .gi-cta-solid {
    background: linear-gradient(135deg, #2a6aee 0%, #1d4ed8 100%);
    color: #ffffff !important;
    border: none;
    box-shadow: 0 6px 20px rgba(42, 106, 238, 0.32);
}
.gi-home-pricing-section .gi-cta-solid:hover {
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(42, 106, 238, 0.45);
}
.gi-home-pricing-section .gi-cta-arrow {
    transition: transform 0.25s ease;
}
.gi-home-pricing-section .gi-pricing-cta-btn:hover .gi-cta-arrow {
    transform: translateX(4px);
}

/* Bottom Footer Bar */
.gi-home-pricing-section .gi-pricing-footer-bar {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.5rem;
    padding: 1.15rem 2.2rem;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    max-width: 860px;
    margin: 0 auto;
    box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
    font-size: 0.92rem;
    color: #475569;
}
.gi-home-pricing-section .gi-pricing-footer-item {
    display: flex;
    align-items: center;
    gap: 8px;
}
.gi-home-pricing-section .gi-pricing-footer-item svg {
    color: #2a6aee;
    flex-shrink: 0;
}
.gi-home-pricing-section .gi-pricing-footer-link {
    color: #2a6aee !important;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.2s ease;
}
.gi-home-pricing-section .gi-pricing-footer-link:hover {
    color: #1e40af !important;
    text-decoration: underline;
}
.gi-home-pricing-section .gi-pricing-footer-sep {
    color: #cbd5e1;
}

@media (max-width: 992px) {
    .gi-home-pricing-section .gi-pricing-cards-grid {
        grid-template-columns: 1fr;
        max-width: 480px;
    }
    .gi-home-pricing-section .gi-plan-tagline {
        min-height: auto;
    }
    .gi-home-pricing-section .gi-pricing-footer-bar {
        flex-direction: column;
        gap: 0.85rem;
        text-align: center;
    }
    .gi-home-pricing-section .gi-pricing-footer-sep {
        display: none;
    }
}
</style>

<section class="gi-section gi-home-pricing-section">
    <div class="gi-container">
        <?php gi_section_heading( 
            'Affordable Rates', 
            '<span class="gi-highlight-orange">Transparent</span> <span class="gi-highlight-blue">Pricing</span>', 
            'Direct human retouching with wholesale bulk rates starting from $0.25/image. No hidden charges or middleman markups.'
        ); ?>

        <!-- Pricing Cards Grid -->
        <div class="gi-pricing-cards-grid">
            
            <!-- Tier 1: Essential Clipping -->
            <div class="gi-pricing-clean-card" data-gi-animate="fade-up">
                <h3 class="gi-plan-title">Essential Clipping</h3>
                <p class="gi-plan-tagline">Fast background removal and hand-drawn cutout paths for eCommerce catalogs.</p>
                
                <div class="gi-price-figure-wrap">
                    <div class="gi-price-figure">
                        <span class="gi-price-currency">$</span>0.25
                        <span class="gi-price-unit">/ image</span>
                    </div>
                    <div class="gi-price-subtext">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <span>Starting bulk volume rate</span>
                    </div>
                </div>

                <ul class="gi-pricing-feature-list">
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Hand-drawn pen clipping paths (100% human)</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Pure white &amp; transparent cutouts</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Amazon, eBay &amp; Shopify ready</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Guaranteed 12-24h turnaround</li>
                </ul>

                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a quote for Essential Clipping.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-pricing-cta-btn gi-cta-outline">
                    <span>Let's Start Chat</span>
                    <svg class="gi-cta-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

            <!-- Tier 2: Commercial Retouching (Most Popular) -->
            <div class="gi-pricing-clean-card is-popular" data-gi-animate="fade-up" data-gi-delay="100">
                <div class="gi-pricing-popular-badge">⭐ Most Popular</div>
                <h3 class="gi-plan-title">Commercial Retouching</h3>
                <p class="gi-plan-tagline">The industry standard for apparel, footwear, and consumer brand catalogs.</p>
                
                <div class="gi-price-figure-wrap">
                    <div class="gi-price-figure-custom">
                        Custom <span class="gi-price-unit" style="font-size: 1rem; color: #64748b; font-weight: 500;">Volume Rate</span>
                    </div>
                    <div class="gi-price-subtext">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <span>Save up to 45% on volume orders</span>
                    </div>
                </div>

                <ul class="gi-pricing-feature-list">
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Everything in Essential Clipping</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Ghost mannequin &amp; neck joint</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Natural &amp; drop reflection shadows</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Dust, scratch &amp; wrinkle removal</li>
                </ul>

                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a volume quote for Commercial Retouching.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-pricing-cta-btn gi-cta-solid">
                    <span>Let's Start Chat</span>
                    <svg class="gi-cta-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

            <!-- Tier 3: High-End Editorial & Jewelry -->
            <div class="gi-pricing-clean-card" data-gi-animate="fade-up" data-gi-delay="200">
                <h3 class="gi-plan-title">Editorial &amp; Jewelry</h3>
                <p class="gi-plan-tagline">Magazine-quality retouching for jewelry, luxury goods, cosmetics, and models.</p>
                
                <div class="gi-price-figure-wrap">
                    <div class="gi-price-figure-custom">
                        Custom <span class="gi-price-unit" style="font-size: 1rem; color: #64748b; font-weight: 500;">Quote</span>
                    </div>
                    <div class="gi-price-subtext">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        <span>Bespoke scope &amp; dedicated lead</span>
                    </div>
                </div>

                <ul class="gi-pricing-feature-list">
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Everything in Commercial Retouching</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Non-destructive Dodge &amp; Burn skin</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Diamond sparkle &amp; metal polish</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Multi-layer PSD delivery with masks</li>
                </ul>

                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a custom quote for High-End Editorial & Jewelry Retouching.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-pricing-cta-btn gi-cta-outline">
                    <span>Let's Start Chat</span>
                    <svg class="gi-cta-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

        </div>

        <!-- Clean Bottom Support Bar -->
        <div class="gi-pricing-footer-bar" data-gi-animate="fade-up">
            <div class="gi-pricing-footer-item">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Want to test our quality first?</span>
                <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pricing-footer-link">Test 2 Images Free &rarr;</a>
            </div>
            <span class="gi-pricing-footer-sep">&bull;</span>
            <div class="gi-pricing-footer-item">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                <span>Need wholesale SLA details?</span>
                <a href="<?php echo esc_url( home_url( '/pricing-3/' ) ); ?>" class="gi-pricing-footer-link">View Full Enterprise Pricing Table &rarr;</a>
            </div>
        </div>
    </div>
</section>


<!-- ==========================================
     ACHIEVEMENTS / STATS
     ========================================== -->
<section class="gi-section gi-section--dark gi-home-section-charcoal">
    <div class="gi-container">
        <div class="gi-stats-grid">
            <?php 
            gi_stat_counter( 500, '+', 'Happy Clients Worldwide', gi_icon('star', 32) );
            
            gi_stat_counter( 5, 'M+', 'Images Edited', gi_icon('clipping-path', 32) );
            
            gi_stat_counter( 150, '+', 'In-House Designers', gi_icon('shield', 32) );
            
            gi_stat_counter( 10, '+', 'Years of Experience', gi_icon('clock', 32) );
            ?>
        </div>
    </div>
</section>

<!-- ==========================================
     CLIENT TRUST MARQUEE — Enterprise
     ========================================== -->
<style>
/* ── Enterprise Brands Section ───────────────────── */
.gi-brands-section {
    position: relative;
    background:
        radial-gradient(circle at 14% 12%, rgba(255,106,26,0.06) 0%, transparent 34%),
        radial-gradient(circle at 88% 72%, rgba(47,124,255,0.07) 0%, transparent 36%),
        linear-gradient(180deg, #ffffff 0%, #f8fafc 48%, #eef2f7 100%);
    overflow: hidden;
    padding: 100px 0 120px;
    border-top: 1px solid rgba(30,41,59,0.08);
    border-bottom: 1px solid rgba(30,41,59,0.1);
}

/* Grid dot background */
.gi-brands-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(42,106,238,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(42,106,238,0.04) 1px, transparent 1px);
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
    background: radial-gradient(circle, rgba(243,112,33,0.07) 0%, transparent 70%);
    top: -100px; left: -150px;
    animation-delay: 0s;
}
.gi-brands-blob--right {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(42,106,238,0.08) 0%, transparent 70%);
    bottom: -80px; right: -100px;
    animation-delay: -6s;
}
@keyframes gi-brands-drift {
    0%   { transform: translate(0,0) scale(1); }
    100% { transform: translate(30px,-30px) scale(1.1); }
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
    background: linear-gradient(to right, #f8fafc 0%, transparent 100%);
}
.gi-brands-marquee-wrap::after {
    right: 0;
    background: linear-gradient(to left, #f8fafc 0%, transparent 100%);
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
    background: rgba(0,0,0,0.02);
    border: 1px solid rgba(0,0,0,0.06);
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
    background: linear-gradient(135deg, rgba(0,0,0,0.04) 0%, transparent 100%);
    opacity: 0;
    transition: opacity 0.3s;
}
.gi-brands-card:hover {
    background: rgba(243,112,33,0.04);
    border-color: rgba(243,112,33,0.25);
    transform: translateY(-6px) scale(1.04);
    box-shadow:
        0 20px 40px rgba(0,0,0,0.06),
        0 0 30px rgba(243,112,33,0.08),
        inset 0 1px 0 rgba(255,255,255,0.5);
}
.gi-brands-card:hover::before { opacity: 1; }
.gi-brands-card img {
    height: 70px;
    width: auto;
    max-width: 220px;
    object-fit: contain;
    display: block;
    transition: transform 0.4s ease;
}
.gi-brands-card:hover img {
    transform: scale(1.05);
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
if (!function_exists('gi_brand_cards')) {
    function gi_brand_cards($logos, $base) {
        $html = '';
        foreach ($logos as $logo) {
            $html .= '<div class="gi-brands-card">';
            $html .= '<img src="' . esc_url($base . $logo[0]) . '" alt="' . esc_attr($logo[1]) . '" loading="lazy">';
            $html .= '</div>';
        }
        return $html;
    }
}

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

$cards = gi_brand_cards($logos, $base);
// Repeat 4× so seamless loop always fills the widest screen
$cards_4x = $cards . $cards . $cards . $cards;
?>

<section class="gi-brands-section" aria-label="Brands We Served">
    <style>
        .gi-brands-section .gi-section-title {
            font-size: clamp(1.8rem, 3.5vw, 2.8rem) !important;
            line-height: 1.25;
        }
    </style>

    <!-- Decorative blobs -->
    <div class="gi-brands-blob gi-brands-blob--left" aria-hidden="true"></div>
    <div class="gi-brands-blob gi-brands-blob--right" aria-hidden="true"></div>

    <!-- Section Heading -->
    <div style="margin-bottom: 70px; position: relative; z-index: 2;">
        <?php gi_section_heading( 
            'Trusted Worldwide', 
            'The <span class="gi-highlight-blue">Trusted</span> Editing <span class="gi-highlight-orange">Partner</span> <br>for Global eCommerce', 
            '',
            true
        ); ?>
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
     CTA BANNER
     ========================================== -->
<section class="gi-cta-section gi-home-section-blue">
    <div class="gi-container">
        <div class="gi-cta-inner" data-gi-animate="fade-up">
            <h2 class="gi-cta-title"><span class="gi-highlight-teal">Ready</span> to Experience <span class="gi-highlight-orange">Pixel-Perfect</span> Quality?</h2>
            <p class="gi-cta-subtitle">Send us up to 3 images for a free trial. We will edit them according to your instructions and send them back within 45 minutes.</p>
            <div class="gi-cta-actions">
                <a href="<?php echo esc_url( home_url('/free-trial') ); ?>" class="gi-btn gi-btn-teal gi-btn-xl gi-btn-glow">
                    Start Your Free Trial
                </a>
                <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="gi-btn gi-btn-outline gi-btn-xl">
                    Contact Sales
                </a>
            </div>
            <div class="gi-cta-note"><?php echo gi_icon('shield', 14); ?> 100% Secure & NDA Compliant</div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
'use strict';

/* ============================================================
   1. PARTICLE CANVAS ENGINE
   ============================================================ */
const canvas = document.getElementById('gi-particle-canvas');
if (canvas) {
    const ctx = canvas.getContext('2d');
    let particles = [];
    let mouse = { x: null, y: null };

    function resizeCanvas() {
        canvas.width  = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    document.querySelector('.gi-hero').addEventListener('mousemove', e => {
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
    });
    document.querySelector('.gi-hero').addEventListener('mouseleave', () => {
        mouse.x = null; mouse.y = null;
    });

    class Particle {
        constructor() { this.reset(); }
        reset() {
            this.x  = Math.random() * canvas.width;
            this.y  = Math.random() * canvas.height;
            this.r  = Math.random() * 1.5 + 0.4;
            this.vx = (Math.random() - 0.5) * 0.4;
            this.vy = (Math.random() - 0.5) * 0.4;
            this.alpha = Math.random() * 0.5 + 0.15;
        }
        update() {
            if (mouse.x !== null) {
                const dx = this.x - mouse.x, dy = this.y - mouse.y;
                const dist = Math.sqrt(dx*dx + dy*dy);
                if (dist < 120) {
                    this.vx += dx / dist * 0.3;
                    this.vy += dy / dist * 0.3;
                }
            }
            this.vx *= 0.98; this.vy *= 0.98;
            this.x += this.vx; this.y += this.vy;
            if (this.x < 0 || this.x > canvas.width || this.y < 0 || this.y > canvas.height) this.reset();
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(255,255,255,${this.alpha})`;
            ctx.fill();
        }
    }

    const COUNT = 90;
    for (let i = 0; i < COUNT; i++) particles.push(new Particle());

    function drawLines() {
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx*dx + dy*dy);
                if (dist < 110) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(255,255,255,${0.06 * (1 - dist/110)})`;
                    ctx.lineWidth = 0.5;
                    ctx.stroke();
                }
            }
        }
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        particles.forEach(p => { p.update(); p.draw(); });
        drawLines();
        requestAnimationFrame(animate);
    }
    animate();
}

/* ============================================================
   2. TYPEWRITER ENGINE
   ============================================================ */
const twEl = document.getElementById('gi-typewriter-text');
if (twEl) {
    twEl.textContent = 'Photo Editing';
}

/* ============================================================
   3. SCROLL REVEAL + STAGGER ENGINE (IntersectionObserver)
   ============================================================ */
const revealEls = document.querySelectorAll('[data-gi-animate]');
const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const delay = entry.target.dataset.giDelay || 0;
            setTimeout(() => {
                entry.target.classList.add('gi-animated');
                // Stagger feature list items in this element's section
                const lists = entry.target.closest('section, div')?.querySelectorAll('.gi-feature-list li');
                if (lists) {
                    lists.forEach((li, i) => {
                        setTimeout(() => li.classList.add('gi-visible'), i * 100);
                    });
                }
            }, parseInt(delay));
            revealObs.unobserve(entry.target);
        }
    });
}, { threshold: 0.15 });

revealEls.forEach(el => revealObs.observe(el));

// Also trigger stagger for feature lists on service rows without data-gi-animate
const listObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const items = entry.target.querySelectorAll('.gi-feature-list li');
            items.forEach((li, i) => {
                setTimeout(() => li.classList.add('gi-visible'), i * 100 + 200);
            });
            listObs.unobserve(entry.target);
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('.gi-service-content').forEach(el => listObs.observe(el));

/* ============================================================
   4. STATS COUNTER ENGINE — uses data-target attribute
   ============================================================ */
function animateCounter(el, target, duration) {
    let start = 0;
    const step = target / (duration / 16);
    const timer = setInterval(() => {
        start = Math.min(start + step, target);
        el.textContent = Math.floor(start);
        if (start >= target) clearInterval(timer);
    }, 16);
}

const statObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.gi-counter[data-target]');
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.target, 10);
                if (!isNaN(target)) animateCounter(counter, target, 1800);
            });
            statObs.unobserve(entry.target);
        }
    });
}, { threshold: 0.4 });

document.querySelectorAll('.gi-stat-item').forEach(el => statObs.observe(el));

}); // end DOMContentLoaded
</script>

<?php get_footer(); ?>
