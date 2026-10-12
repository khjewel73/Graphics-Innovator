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

/* ---- Parallax glass frame ---- */
.gi-service-visual { flex: 1; position: relative; }
.gi-glass-frame {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 24px;
    padding: 16px;
    box-shadow: 0 40px 80px rgba(0,0,0,0.5);
    transition: transform 0.1s ease, box-shadow 0.3s ease;
    transform-style: preserve-3d;
    will-change: transform;
}
.gi-glass-frame:hover {
    box-shadow: 0 60px 100px rgba(0,0,0,0.7), 0 0 40px rgba(234,88,12,0.1);
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

<div class="gi-home-section-blue">
    <!-- Row 1: Clipping Path -->
    <div class="gi-service-row">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after($base_url . '/2023/08/Clipping-Path_A.jpg', $base_url . '/2023/08/Clipping-Path_B.jpg', '', '', 's_clip'); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3><span class="gi-highlight-orange">Clipping</span> Path</h3>
            <h5>Increase your sales by obtaining the best precise image cutting</h5>
            <p>To use our clipping path services, remove unwanted parts, separate parts of an image to create a new image and remove the unwanted background. Our team is dedicated to providing handmade clipping path services with maximum accuracy in a relatively minimum cost. We will save your precious time and reduce your cost.</p>
            <ul class="gi-feature-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Reasonable Pricing</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Quick Turnaround</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Pixel Perfect Quality</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Customized Image Clipping</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/clippingpath/') ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>

<div class="gi-home-section-charcoal">
    <!-- Row 2: Photo Retouching -->
    <div class="gi-service-row gi-reverse">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after($base_url . '/2023/09/Retouching_1_A.jpg', $base_url . '/2023/09/Retouching_1_B.jpg', '', '', 's_retouch'); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3>Photo <span class="gi-highlight-blue">Retouching</span></h3>
            <h5>Make incredible photos with your photography and increase your sales to the next level</h5>
            <p>Photo retouching services are the ideal kind of digital marketing. If you're going after a high-end market, it's challenging to make your image flawless right out of the camera, regardless of how talented a photographer you are. Complete product photo editing is available through our expert photo retouching service, and our goal is to provide product photos with gorgeous finishes.</p>
            <ul class="gi-feature-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Remove imperfections</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Improve image quality</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Apply Unique Techniques</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> High-end Skin Retouching</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Fix framing and lighting issues</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/photo-retouching-service/') ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>

<div class="gi-home-section-blue">
    <!-- Row 3: E-commerce -->
    <div class="gi-service-row">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after($base_url . '/2023/09/Ecommerce_1_A-1.jpg', $base_url . '/2023/09/Ecommerce_1_B.jpg', '', '', 's_ecom'); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3><span class="gi-highlight-teal">E-commerce</span> Image <span class="gi-highlight-blue">Editing</span></h3>
            <h5>Make your product photos as a professional look and increase online sales</h5>
            <p>Ecommerce photo retouching services appear to be the vital element in effective eCommerce marketing. You must get your images professionally retouched if you want to increase your product sales. With the help of our eCommerce product photo editing, you can create better product photos to boost sales. Take use of the best product retouching and cutting edge features for your product image and increase your sales to the next level.</p>
            <ul class="gi-feature-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Can Handle large-scale projects</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Providing accurate quality image</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Understanding product specifications</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Adhering to online image specifications</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/product-photo-editing-service/') ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>

<div class="gi-home-section-charcoal">
    <!-- Row 4: Ghost Mannequin -->
    <div class="gi-service-row gi-reverse">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after($base_url . '/2023/09/Ghost_A-1.jpg', $base_url . '/2023/09/Ghost_B.jpg', '', '', 's_ghost'); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3><span class="gi-highlight-teal">Ghost</span> <span class="gi-highlight-orange">Mannequin</span></h3>
            <p>Using the ghost mannequin retouching service, which improves the product images, is the best way to display your clothing items. This will allow the vendors to make more money than they did with the models. An age-old marketing strategy used to make the clothing product images look amazing is using models and having individuals pose in chic ways and it also increases your cost.</p>
            <ul class="gi-feature-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Maintain 100% Accuracy</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Neck Joint on clothes</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Bottom Joint on Ghost Mannequin</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sleeves Joint on Ghost Mannequin</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> 3D or 360&deg; Ghost Mannequin Retouch</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/ghost-mannequin-service/') ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>

<div class="gi-home-section-blue">
    <!-- Row 5: Image Masking -->
    <div class="gi-service-row">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after($base_url . '/2023/09/Image-Masking_A.jpg', $base_url . '/2023/09/Image-Masking_B.jpg', '', '', 's_mask'); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3><span class="gi-highlight-orange">Image</span> <span class="gi-highlight-blue">Masking</span></h3>
            <p>Masking is necessary to pick and erase the backdrop when the edges are unclear, hairy, furry or fuzzy. By giving professionals a chance to concentrate on the unattainable details, it improves viewers' watching experiences. We offer different kinds of masking services eg Soft Mask, Layer Mask, Alpha Mask, Channel Mask, Transparency Mask etc.</p>
            <ul class="gi-feature-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Fastest Delivery</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Competitive Price</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Specific Edge Detection</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Maintain 100% Accuracy</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/image-masking-service/') ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>

<div class="gi-home-section-charcoal">
    <!-- Row 6: Shadow Creation -->
    <div class="gi-service-row gi-reverse">
        <div class="gi-service-visual">
            <div class="gi-glass-frame">
                <?php gi_before_after($base_url . '/2023/09/Shadowing_A.jpg', $base_url . '/2023/09/Shadowing_B.jpg', '', '', 's_shadow'); ?>
            </div>
        </div>
        <div class="gi-service-content" data-gi-animate="fade-up">
            <h3><span class="gi-highlight-blue">Shadow</span> <span class="gi-highlight-teal">Creation</span></h3>
            <p>Leaving your customers speechless and convincing them that your products are real based on the images, is the sole option for them. After removing the background from product shots with white backgrounds, the Photoshop shadow creation service makes the images realistic rather than fake.</p>
            <ul class="gi-feature-list">
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Drop Shadowing</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Natural Shadowing</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Reflection Shadowing</li>
                <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Pickup Original Shadow</li>
            </ul>
            <a href="<?php echo esc_url( home_url('/shadow-creation-service/') ); ?>" class="gi-btn gi-btn-primary gi-btn-glow">Learn More &rarr;</a>
        </div>
    </div>
</div>



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
     PRICING PREVIEW (ENTERPRISE DARK MODE)
     ========================================== -->
<style>
/* ── Enterprise Pricing Showcase (Home Page) ────── */
.gi-home-pricing-section {
    position: relative;
    background: #030811;
    color: #ffffff;
    padding: 6.5rem 0 7.5rem 0;
    overflow: hidden;
}
.gi-home-pricing-section::before {
    content: '';
    position: absolute;
    top: -150px;
    left: -100px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(42, 106, 238, 0.22) 0%, transparent 70%);
    filter: blur(80px);
    opacity: 0.6;
    pointer-events: none;
    z-index: 0;
}
.gi-home-pricing-section::after {
    content: '';
    position: absolute;
    bottom: -150px;
    right: -100px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(139, 92, 246, 0.18) 0%, transparent 70%);
    filter: blur(80px);
    opacity: 0.5;
    pointer-events: none;
    z-index: 0;
}
.gi-home-pricing-section .gi-container {
    position: relative;
    z-index: 1;
}

/* Pills */
.gi-home-pricing-section .gi-hero-pills {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0.85rem;
    margin: 1.5rem auto 3.5rem auto;
    max-width: 950px;
}
.gi-home-pricing-section .gi-hero-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 7px 16px;
    border-radius: 50px;
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
}
.gi-home-pricing-section .gi-hero-pill svg {
    color: #25D366;
}

/* Director Hotwire Banner */
.gi-home-pricing-section .gi-director-banner {
    background: linear-gradient(135deg, rgba(15, 43, 36, 0.95) 0%, rgba(8, 17, 30, 0.98) 100%);
    border: 1px solid rgba(37, 211, 102, 0.35);
    border-radius: 20px;
    padding: 2.2rem 2.8rem;
    margin-bottom: 3.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2.5rem;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.5), 0 0 35px rgba(37, 211, 102, 0.12);
}
.gi-home-pricing-section .gi-director-content {
    flex: 1;
}
.gi-home-pricing-section .gi-director-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    color: #25D366;
    background: rgba(37, 211, 102, 0.12);
    border: 1px solid rgba(37, 211, 102, 0.3);
    padding: 5px 12px;
    border-radius: 50px;
    margin-bottom: 0.8rem;
}
.gi-home-pricing-section .gi-pulse-dot {
    width: 8px;
    height: 8px;
    background: #25D366;
    border-radius: 50%;
    box-shadow: 0 0 8px #25D366;
    animation: giPulseHome 1.8s infinite;
}
@keyframes giPulseHome {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.4); opacity: 0.4; }
    100% { transform: scale(1); opacity: 1; }
}
.gi-home-pricing-section .gi-director-title {
    font-size: 1.65rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.5rem 0;
    line-height: 1.25;
}
.gi-home-pricing-section .gi-director-desc {
    font-size: 0.98rem;
    color: rgba(255, 255, 255, 0.78);
    margin: 0;
    line-height: 1.55;
    max-width: 680px;
}
.gi-home-pricing-section .gi-director-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    flex-shrink: 0;
    min-width: 270px;
}
.gi-home-pricing-section .gi-director-btn-wa {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #ffffff !important;
    border: none;
    padding: 1.05rem 1.6rem;
    border-radius: 12px;
    font-size: 1.02rem;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 8px 22px rgba(37, 211, 102, 0.45);
    transition: all 0.3s ease;
}
.gi-home-pricing-section .gi-director-btn-wa:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(37, 211, 102, 0.6);
}
.gi-home-pricing-section .gi-director-btn-trial {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: transparent;
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.25);
    padding: 0.8rem 1.4rem;
    border-radius: 12px;
    font-size: 0.92rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
}
.gi-home-pricing-section .gi-director-btn-trial:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: #ffffff;
}

/* Pricing Cards Grid */
.gi-home-pricing-section .gi-price-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    align-items: stretch;
    margin-bottom: 3.5rem;
}
.gi-home-pricing-section .gi-price-card {
    background: rgba(255, 255, 255, 0.025);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 24px;
    padding: 3rem 2.2rem 2.5rem 2.2rem;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}
.gi-home-pricing-section .gi-price-card:hover {
    transform: translateY(-8px);
    border-color: rgba(42, 106, 238, 0.35);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.45);
}
.gi-home-pricing-section .gi-price-card.is-popular {
    background: rgba(255, 255, 255, 0.045);
    border-color: rgba(42, 106, 238, 0.4);
    box-shadow: 0 0 40px rgba(42, 106, 238, 0.12);
    transform: scale(1.03);
}
.gi-home-pricing-section .gi-price-card.is-popular:hover {
    transform: scale(1.03) translateY(-8px);
    border-color: rgba(42, 106, 238, 0.6);
    box-shadow: 0 20px 45px rgba(42, 106, 238, 0.22);
}
.gi-home-pricing-section .gi-price-popular-pill {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #2a6aee 0%, #8b5cf6 100%);
    color: #ffffff;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 0.5rem 1.5rem;
    border-radius: 0 0 12px 12px;
    box-shadow: 0 5px 15px rgba(42, 106, 238, 0.4);
}
.gi-home-pricing-section .gi-price-plan-name {
    font-size: 1.55rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    color: #ffffff;
}
.gi-home-pricing-section .gi-price-plan-desc {
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.58);
    margin-bottom: 1.8rem;
    line-height: 1.5;
    min-height: 44px;
}
.gi-home-pricing-section .gi-price-rate-box {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 14px;
    padding: 1.25rem 1.4rem;
    margin-bottom: 2rem;
    transition: all 0.3s ease;
}
.gi-home-pricing-section .gi-price-card:hover .gi-price-rate-box {
    border-color: rgba(37, 211, 102, 0.4);
    background: rgba(37, 211, 102, 0.04);
}
.gi-home-pricing-section .gi-price-rate-title {
    font-size: 1.5rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 0.35rem;
    letter-spacing: -0.3px;
}
.gi-home-pricing-section .gi-price-rate-sub {
    font-size: 0.92rem;
    color: #25D366;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 0.5rem;
}
.gi-home-pricing-section .gi-price-rate-badge {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 3px 8px;
    border-radius: 6px;
    background: rgba(42, 106, 238, 0.15);
    color: #60a5fa;
    border: 1px solid rgba(42, 106, 238, 0.3);
}
.gi-home-pricing-section .gi-price-feature-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2.5rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
}
.gi-home-pricing-section .gi-price-feature-list li {
    display: flex;
    align-items: flex-start;
    font-size: 0.95rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.45;
}
.gi-home-pricing-section .gi-price-feature-list li svg {
    flex-shrink: 0;
    width: 19px;
    height: 19px;
    color: #2a6aee;
    margin-right: 0.75rem;
    margin-top: 2px;
}
.gi-home-pricing-section .gi-price-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-top: auto;
}
.gi-home-pricing-section .gi-price-wa-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #ffffff !important;
    border: none;
    padding: 1.1rem 1.4rem;
    border-radius: 12px;
    font-size: 1.02rem;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(37, 211, 102, 0.35);
    transition: all 0.3s ease;
}
.gi-home-pricing-section .gi-price-wa-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(37, 211, 102, 0.55);
    color: #ffffff !important;
}
.gi-home-pricing-section .gi-price-trial-btn {
    display: block;
    width: 100%;
    text-align: center;
    padding: 1rem 1.4rem;
    border-radius: 12px;
    font-size: 0.98rem;
    font-weight: 600;
    text-decoration: none;
    background: transparent;
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.22);
    transition: all 0.25s ease;
}
.gi-home-pricing-section .gi-price-trial-btn:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: #ffffff;
    color: #ffffff !important;
}
.gi-home-pricing-section .gi-price-full-link-wrap {
    text-align: center;
    margin-top: 1rem;
}
.gi-home-pricing-section .gi-price-full-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 1.1rem 2.4rem;
    background: rgba(42, 106, 238, 0.1);
    border: 1px solid rgba(42, 106, 238, 0.3);
    color: #ffffff !important;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
}
.gi-home-pricing-section .gi-price-full-btn:hover {
    background: rgba(42, 106, 238, 0.22);
    border-color: #2a6aee;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(42, 106, 238, 0.25);
    color: #ffffff !important;
}

@media (max-width: 992px) {
    .gi-home-pricing-section .gi-price-card.is-popular {
        transform: scale(1);
    }
    .gi-home-pricing-section .gi-price-card.is-popular:hover {
        transform: scale(1) translateY(-8px);
    }
    .gi-home-pricing-section .gi-director-banner {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1.5rem;
    }
    .gi-home-pricing-section .gi-director-actions {
        width: 100%;
        min-width: unset;
    }
}
@media (max-width: 600px) {
    .gi-home-pricing-section .gi-director-title {
        font-size: 1.35rem;
    }
}
</style>

<section class="gi-section gi-section--dark gi-home-pricing-section">
    <div class="gi-container">
        <?php gi_section_heading( 
            'Affordable Rates', 
            '<span class="gi-highlight-orange">Transparent</span> <span class="gi-highlight-blue">Pricing</span>', 
            'No automated bots, no rigid middleman markups. Direct human production with wholesale bulk rates starting as low as $0.25/image.'
        ); ?>

        <div class="gi-hero-pills">
            <span class="gi-hero-pill">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                Average WhatsApp Reply: &lt; 2 Mins
            </span>
            <span class="gi-hero-pill">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                100% Handcrafted by Senior Retouchers (0 AI Artifacts)
            </span>
            <span class="gi-hero-pill">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                Strict Non-Disclosure (NDA) Protected
            </span>
        </div>

        <!-- Live Production Director Hotwire Banner -->
        <div class="gi-director-banner" data-gi-animate="fade-up">
            <div class="gi-director-content">
                <div class="gi-director-badge">
                    <span class="gi-pulse-dot"></span>
                    Live Production Director On Duty
                </div>
                <h3 class="gi-director-title">Need a Custom Wholesale Rate for 50 to 5,000+ Images?</h3>
                <p class="gi-director-desc">Skip the long email ticketing queue. Send sample photos or catalog guidelines directly to our lead production supervisor on WhatsApp for an instant, locked-in custom quote within 2–5 minutes.</p>
            </div>
            <div class="gi-director-actions">
                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I have a batch of photos and need an instant custom volume rate.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-director-btn-wa">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                    <span>Chat on WhatsApp</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-director-btn-trial">
                    🧪 Test 2 Images For Free First
                </a>
            </div>
        </div>

        <!-- Pricing Cards Grid -->
        <div class="gi-price-cards-grid">
            
            <!-- Tier 1: Essential Bulk Clipping -->
            <div class="gi-price-card" data-gi-animate="fade-up">
                <div class="gi-price-plan-name">Essential Bulk Clipping</div>
                <div class="gi-price-plan-desc">High-speed background removal, multi-path clipping, and cutouts for eCommerce catalogs.</div>
                
                <div class="gi-price-rate-box">
                    <div class="gi-price-rate-title">Custom Volume Rate</div>
                    <div class="gi-price-rate-sub">⚡ Starting from $0.25 / image</div>
                    <span class="gi-price-rate-badge">Volume Tiered Pricing</span>
                </div>

                <ul class="gi-price-feature-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Hand-drawn pen clipping paths (100% human)</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Pure white (RGB 255) &amp; transparent cutouts</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Precision centering &amp; margin alignment</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Amazon, eBay &amp; Shopify ready formats</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Guaranteed 12–24h batch turnaround</li>
                </ul>

                <div class="gi-price-actions">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a bulk volume rate for Essential Clipping & Background Removal.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-price-wa-btn">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                        <span>Get Batch Quote on WhatsApp</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-price-trial-btn">Test 2 Images Free</a>
                </div>
            </div>

            <!-- Tier 2: Commercial Retouching (Most Popular) -->
            <div class="gi-price-card is-popular" data-gi-animate="fade-up" data-gi-delay="100">
                <div class="gi-price-popular-pill">🔥 Most Popular</div>
                <div class="gi-price-plan-name">Commercial Retouching</div>
                <div class="gi-price-plan-desc">The industry standard for apparel, footwear, and consumer brand catalogs.</div>
                
                <div class="gi-price-rate-box">
                    <div class="gi-price-rate-title">Tailored Catalog Rate</div>
                    <div class="gi-price-rate-sub">⚡ Custom Quote • Save up to 45%</div>
                    <span class="gi-price-rate-badge">Direct Supervisor Negotiation</span>
                </div>

                <ul class="gi-price-feature-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Everything in Essential Clipping</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Invisible Ghost Mannequin &amp; Neck Joint 3D</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Natural, drop &amp; realistic reflection shadows</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Precision color matching to physical swatches</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Dust, scratch, wrinkle &amp; blemish removal</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated production supervisor assigned</li>
                </ul>

                <div class="gi-price-actions">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a custom catalog rate for Commercial Retouching & Ghost Mannequin.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-price-wa-btn">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9.12 11.38 9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                        <span>Chat With Retouch Lead</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-price-trial-btn">Start Free Trial Test</a>
                </div>
            </div>

            <!-- Tier 3: High-End Editorial & Jewelry -->
            <div class="gi-price-card" data-gi-animate="fade-up" data-gi-delay="200">
                <div class="gi-price-plan-name">High-End Editorial &amp; Jewelry</div>
                <div class="gi-price-plan-desc">Magazine-quality retouching for jewelry, cosmetics, luxury goods, and fashion models.</div>
                
                <div class="gi-price-rate-box">
                    <div class="gi-price-rate-title">Enterprise Studio Scope</div>
                    <div class="gi-price-rate-sub">⚡ Bespoke Scope • 1-on-1 Direction</div>
                    <span class="gi-price-rate-badge">Senior Art Director Lead</span>
                </div>

                <ul class="gi-price-feature-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Everything in Commercial Retouching</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Non-destructive Dodge &amp; Burn skin treatment</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> High-end jewelry diamond sparkle &amp; metal polish</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Stray hair, texture &amp; anatomical contouring</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Multi-layer PSD delivery with masks intact</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Unlimited revisions until 100% sign-off</li>
                </ul>

                <div class="gi-price-actions">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a consultation with your Senior Art Director for High-End Editorial Retouching.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-price-wa-btn">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                        <span>Consult Senior Art Director</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-price-trial-btn">Book Consultation</a>
                </div>
            </div>

        </div>

        <!-- Link to Full Enterprise Pricing Page -->
        <div class="gi-price-full-link-wrap">
            <a href="<?php echo esc_url( home_url( '/pricing-3/' ) ); ?>" class="gi-price-full-btn">
                <span>View Full Enterprise Pricing Table &amp; SLA Details</span>
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
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

/* ============================================================
   5. PARALLAX TILT ENGINE (Glass Frames)
   ============================================================ */
document.querySelectorAll('.gi-glass-frame').forEach(frame => {
    frame.addEventListener('mousemove', e => {
        const rect = frame.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;
        const dx = (e.clientX - cx) / (rect.width / 2);
        const dy = (e.clientY - cy) / (rect.height / 2);
        frame.style.transform = `perspective(1000px) rotateY(${dx * 6}deg) rotateX(${-dy * 4}deg) scale(1.02)`;
    });
    frame.addEventListener('mouseleave', () => {
        frame.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg) scale(1)';
    });
});

}); // end DOMContentLoaded
</script>

<?php get_footer(); ?>
