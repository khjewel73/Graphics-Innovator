<?php
/**
 * Template Name: Services
 *
 * Ultra-Premium Enterprise Services Directory
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$upload_dir = wp_upload_dir();
$base_url   = $upload_dir['baseurl'];
?>

<style>
/* Enterprise Services CSS */
:root {
    --gi-srv-bg: #030811;
    --gi-srv-card: rgba(255, 255, 255, 0.02);
    --gi-srv-border: rgba(255, 255, 255, 0.05);
    --gi-srv-glow: rgba(255, 152, 0, 0.15); /* Orange brand glow */
}

.gi-srv-wrapper {
    background: var(--gi-srv-bg);
    color: #fff;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    position: relative;
    overflow: hidden;
    padding: 8rem 0;
}

/* Ambient Background Glows */
.gi-srv-wrapper::before {
    content: '';
    position: absolute;
    top: 10%;
    left: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(234, 88, 12, 0.05) 0%, transparent 60%);
    filter: blur(80px);
    z-index: 0;
}
.gi-srv-wrapper::after {
    content: '';
    position: absolute;
    bottom: 20%;
    right: -10%;
    width: 800px;
    height: 800px;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
    filter: blur(100px);
    z-index: 0;
}

.gi-srv-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Hero Section */
.gi-srv-hero {
    text-align: center;
    margin-bottom: 5rem;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}
.gi-srv-hero h1 {
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    margin-bottom: 1.5rem;
    letter-spacing: -0.01em;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.gi-srv-hero p {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
}

/* Services Grid */
.gi-srv-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-bottom: 6rem;
}

/* Service Card */
.gi-srv-card {
    background: var(--gi-srv-card);
    border: 1px solid var(--gi-srv-border);
    border-radius: 24px;
    padding: 3rem 2rem;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    text-decoration: none;
    display: block;
    color: #fff;
}
.gi-srv-media {
    position: relative;
    height: 180px;
    margin: -1.5rem -0.5rem 2rem;
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.08);
    background: rgba(255,255,255,0.03);
}
.gi-srv-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transform: scale(1.01);
    transition: transform 0.45s ease, opacity 0.45s ease;
}
.gi-srv-card:hover .gi-srv-media img {
    transform: scale(1.07);
}
.gi-srv-media span {
    position: absolute;
    left: 14px;
    bottom: 14px;
    padding: 0.35rem 0.7rem;
    border-radius: 999px;
    background: rgba(3, 8, 17, 0.78);
    border: 1px solid rgba(255,255,255,0.14);
    color: rgba(255,255,255,0.9);
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}
.gi-srv-card::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 50%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.03), transparent);
    transform: skewX(-20deg);
    transition: 0.7s;
}
.gi-srv-card:hover {
    transform: translateY(-10px);
    border-color: rgba(255, 152, 0, 0.3);
    box-shadow: 0 20px 40px rgba(0,0,0,0.6), inset 0 0 30px rgba(255, 152, 0, 0.05);
}
.gi-srv-card:hover::before {
    left: 200%;
}

/* Card Icon */
.gi-srv-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(255, 152, 0, 0.1), rgba(234, 88, 12, 0.05));
    border: 1px solid rgba(255, 152, 0, 0.2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    color: #ff9800;
    transition: all 0.4s ease;
}
.gi-srv-card:hover .gi-srv-icon {
    background: linear-gradient(135deg, #ff9800, #ea580c);
    color: #fff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 10px 20px rgba(234, 88, 12, 0.3);
}
.gi-srv-icon svg {
    width: 30px;
    height: 30px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}

/* Card Text */
.gi-srv-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #fff;
    transition: color 0.3s ease;
}
.gi-srv-card:hover h3 {
    color: #ff9800;
}
.gi-srv-card p {
    color: rgba(255,255,255,0.7);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 0;
}

/* CTA Section */
.gi-how-cta {
    margin-top: 2rem;
    text-align: center;
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.6), rgba(0, 0, 0, 0.4));
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 30px;
    padding: 5rem 3rem;
    position: relative;
}
.gi-how-cta h2 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    color: #ffffff;
}
.gi-how-cta p {
    color: rgba(255,255,255,0.85);
    font-size: 1.1rem;
    margin-bottom: 2.5rem;
}
.gi-cta-button {
    display: inline-block;
    background: linear-gradient(135deg, #ff9800 0%, #ea580c 100%);
    color: #fff;
    font-weight: 700;
    font-size: 1.1rem;
    padding: 1.25rem 3rem;
    border-radius: 100px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(234, 88, 12, 0.2);
}
.gi-cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(234, 88, 12, 0.4);
    color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
    .gi-srv-hero h1 {
        font-size: 2.5rem;
    }
    .gi-srv-grid {
        grid-template-columns: 1fr;
    }
    .gi-how-cta {
        padding: 3rem 1.5rem;
    }
}
</style>

<main class="gi-srv-wrapper gi-page-rhythm">
    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-srv-container">
        <!-- Hero -->
        <div class="gi-srv-hero">
            <h1><?php echo esc_html( gi_get_field( 'srv_hero_title', 'Professional eCommerce Photo Editing Solutions.' ) ); ?></h1>
            <p><?php echo esc_html( gi_get_field( 'srv_hero_desc', 'We provide pixel-perfect retouching, hand-drawn vector paths, and true-to-life color correction for high-volume enterprise brands and eCommerce studios worldwide.' ) ); ?></p>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-srv-container">
        <!-- Services Grid -->
        <div class="gi-srv-grid">
            
            <!-- Service 1 -->
            <a href="<?php echo esc_url( home_url('/clippingpath/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( $base_url . '/2023/09/Clipping-Path.jpg' ); ?>" alt="Clipping path example" loading="lazy">
                    <span>Before / After</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><line x1="10" y1="9" x2="8" y2="9"></line></svg>
                </div>
                <h3>Clipping Path</h3>
                <p>100% hand-drawn vector paths using the Photoshop Pen Tool. No automated AI shortcuts, guaranteeing hair-accurate edges for your products.</p>
            </a>

            <!-- Service 2 -->
            <a href="<?php echo esc_url( home_url('/background-removal-service/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( $base_url . '/2023/08/Clipping-Path_Before.jpg' ); ?>" alt="Background removal example" loading="lazy">
                    <span>Clean Cutout</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                </div>
                <h3>Background Removal</h3>
                <p>Flawless background extraction and replacement. We perfectly isolate your subjects and place them on pure white or custom backgrounds for Amazon/eBay compliance.</p>
            </a>

            <!-- Service 3 -->
            <a href="<?php echo esc_url( home_url('/shadow-creation-service/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( $base_url . '/2023/09/Shadowing_B.jpg' ); ?>" alt="Shadow creation example" loading="lazy">
                    <span>Natural Depth</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a10 10 0 0 1 10 10c0 5.5-4.5 10-10 10S2 17.5 2 12 7.5 2 12 2z"></path></svg>
                </div>
                <h3>Shadow Making</h3>
                <p>Add depth and realism to flat images. We expertly craft natural drop shadows, reflection shadows, and custom lighting enhancements for a premium look.</p>
            </a>

            <!-- Service 4 -->
            <a href="<?php echo esc_url( home_url('/image-masking-service/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( $base_url . '/2023/09/Image-Masking_B.jpg' ); ?>" alt="Image masking example" loading="lazy">
                    <span>Fine Detail</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                </div>
                <h3>Image Masking</h3>
                <p>Advanced alpha channel and layer masking techniques designed specifically for complex extractions like flying hair, translucent fabrics, and fine fur.</p>
            </a>

            <!-- Service 5 -->
            <a href="<?php echo esc_url( home_url('/photo-retouching-service/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( $base_url . '/2023/09/Retouching_1_B.jpg' ); ?>" alt="Photo retouching example" loading="lazy">
                    <span>Retouched</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                </div>
                <h3>Photo Retouching</h3>
                <p>High-end cosmetic and product retouching. We remove blemishes, smooth surfaces, fix lighting issues, and prepare your photos for high-resolution print or web.</p>
            </a>

            <!-- Service 6 -->
            <a href="<?php echo esc_url( home_url('/color-correction-service/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( $base_url . '/2023/08/Color-Change_B-2.jpg' ); ?>" alt="Color correction example" loading="lazy">
                    <span>Color Match</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                </div>
                <h3>Color Correction</h3>
                <p>True-to-life color matching. We fix white balance issues, adjust vibrancy, and recolor products to ensure your digital catalog perfectly matches reality.</p>
            </a>

            <!-- Service 7 -->
            <a href="<?php echo esc_url( home_url('/jewelry-retouching/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/jr-after-01.webp' ); ?>" alt="Jewelry retouching example" loading="lazy">
                    <span>Diamond Sparkle</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><polygon points="6 3 18 3 22 9 12 22 2 9"></polygon><line x1="2" y1="9" x2="22" y2="9"></line><polyline points="10 3 8 9 12 22 16 9 14 3"></polyline></svg>
                </div>
                <h3>Jewelry Retouching</h3>
                <p>High-end diamond sparkle, metal smoothing, scratch and putty cleanup, and studio reflection perfection for fine jewelry catalogs.</p>
            </a>

            <!-- Service 8 -->
            <a href="<?php echo esc_url( home_url('/360-product-retouch/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/360-work-01.webp' ); ?>" alt="360 Product Retouch example" loading="lazy">
                    <span>360° Spin</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg>
                </div>
                <h3>360 Product Retouch</h3>
                <p>Enterprise turntable alignment, frame-to-frame stabilization, reflection and rig removal, and color consistency for interactive 360° product spins.</p>
            </a>

            <!-- Service 9 -->
            <a href="<?php echo esc_url( home_url('/wedding-photo-retouch/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/wedding-work-sq-01.webp' ); ?>" alt="Wedding Photo Retouch example" loading="lazy">
                    <span>Timeless Romance</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <h3>Wedding Photo Retouch</h3>
                <p>Natural bridal skin smoothing, flyaway hair cleanup, romantic tone grading, and background stranger eradication for unforgettable wedding albums.</p>
            </a>

            <!-- Service 10 -->
            <a href="<?php echo esc_url( home_url('/car-photo-editing/') ); ?>" class="gi-srv-card">
                <div class="gi-srv-media">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/car-work-sq-01.webp' ); ?>" alt="Car Photo Editing example" loading="lazy">
                    <span>Showroom Gloss</span>
                </div>
                <div class="gi-srv-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                </div>
                <h3>Car Photo Editing</h3>
                <p>Virtual dealership showroom background replacement, glare and reflection control, window tinting, and high-gloss paint polish for auto dealers and marketplaces.</p>
            </a>

        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-srv-container">
        <!-- CTA -->
        <div class="gi-how-cta">
            <h2><?php echo esc_html( gi_get_field( 'srv_cta_title', 'Ready to Test the Engine?' ) ); ?></h2>
            <p><?php echo esc_html( gi_get_field( 'srv_cta_desc', 'Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.' ) ); ?></p>
            <a href="<?php echo esc_url( gi_get_field( 'srv_cta_btn_url', site_url( '/free-trial/' ) ) ); ?>" class="gi-cta-button"><?php echo esc_html( gi_get_field( 'srv_cta_btn_text', 'Start Your Free Trial Now' ) ); ?></a>
        </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
