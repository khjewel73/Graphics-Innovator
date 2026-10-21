<?php
/**
 * Template Name: Clipping Path
 *
 * Ultra-Premium Enterprise Clipping Path Landing Page
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* Enterprise Clipping Path CSS */
:root {
    --gi-cp-bg: #030811;
    --gi-cp-card: rgba(255, 255, 255, 0.02);
    --gi-cp-border: rgba(255, 255, 255, 0.05);
}

.gi-cp-wrapper {
    background: var(--gi-cp-bg);
    color: #fff;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    position: relative;
    overflow: hidden;
    padding: 8rem 0;
}

/* Ambient Background Glows */
.gi-cp-wrapper::before {
    content: '';
    position: absolute;
    top: 0;
    left: 20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(234, 88, 12, 0.08) 0%, transparent 60%);
    filter: blur(80px);
    z-index: 0;
}
.gi-cp-wrapper::after {
    content: '';
    position: absolute;
    top: 40%;
    right: -10%;
    width: 800px;
    height: 800px;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.05) 0%, transparent 70%);
    filter: blur(100px);
    z-index: 0;
}

.gi-cp-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Hero Section */
.gi-cp-hero {
    text-align: center;
    margin-bottom: 6rem;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}
.gi-cp-hero h1 {
    font-size: clamp(2rem, 3.5vw, 3.2rem);
    font-weight: 800;
    line-height: 1.15;
    margin-bottom: 1.5rem;
    letter-spacing: -0.02em;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.gi-cp-hero p {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
}

/* Split Showcase Section */
.gi-cp-showcase {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    margin-bottom: 8rem;
    background: linear-gradient(145deg, rgba(255,255,255,0.03), rgba(0,0,0,0.2));
    border: 1px solid var(--gi-cp-border);
    border-radius: 30px;
    padding: 4rem;
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
}
.gi-cp-showcase-text h2 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    color: #fff;
    line-height: 1.2;
}
.gi-cp-showcase-text h2 span {
    color: #ff9800; /* Signature orange */
}
.gi-cp-showcase-text p {
    color: rgba(255,255,255,0.85);
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 2rem;
}
.gi-cp-showcase-list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.gi-cp-showcase-list li {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1rem;
    color: rgba(255,255,255,0.9);
    font-size: 1.05rem;
}
.gi-cp-showcase-list li svg {
    width: 24px;
    height: 24px;
    color: #10b981;
    flex-shrink: 0;
    margin-top: 2px;
}
.gi-cp-showcase-img {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.6);
    border: 1px solid rgba(255,255,255,0.1);
}
.gi-cp-showcase-img img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
}
.gi-cp-showcase-img:hover img {
    transform: scale(1.05);
}

/* Features Grid */
.gi-cp-features-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 4rem;
    color: #fff;
}
.gi-cp-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 6rem;
}

/* Feature Card */
.gi-cp-card {
    background: var(--gi-cp-card);
    border: 1px solid var(--gi-cp-border);
    border-radius: 20px;
    padding: 2.5rem 2rem;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    text-align: center;
}
.gi-cp-card::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 50%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.03), transparent);
    transform: skewX(-20deg);
    transition: 0.7s;
}
.gi-cp-card:hover {
    transform: translateY(-10px);
    border-color: rgba(255, 255, 255, 0.15);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}
.gi-cp-card:hover::before {
    left: 200%;
}
.gi-cp-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.05), rgba(0, 0, 0, 0.2));
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: #fff;
    transition: all 0.4s ease;
}
/* Individual Feature Color Themes */

/* Feature 1: Blue (Precision) */
.gi-cp-card:nth-child(1) .gi-cp-icon {
    border-color: rgba(59, 130, 246, 0.3);
    color: #3b82f6;
    box-shadow: inset 0 0 20px rgba(59, 130, 246, 0.1);
}
.gi-cp-card:nth-child(1):hover .gi-cp-icon {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    border-color: #3b82f6;
    color: #fff;
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
}
.gi-cp-card:nth-child(1) { 
    background: linear-gradient(180deg, rgba(59, 130, 246, 0.1) 0%, rgba(255, 255, 255, 0.02) 100%);
    border-top: 2px solid #3b82f6; 
}
.gi-cp-card:nth-child(1):hover { border-color: #3b82f6; }

/* Feature 2: Green (Speed) */
.gi-cp-card:nth-child(2) .gi-cp-icon {
    border-color: rgba(16, 185, 129, 0.3);
    color: #10b981;
    box-shadow: inset 0 0 20px rgba(16, 185, 129, 0.1);
}
.gi-cp-card:nth-child(2):hover .gi-cp-icon {
    background: linear-gradient(135deg, #059669, #047857);
    border-color: #10b981;
    color: #fff;
    box-shadow: 0 10px 20px rgba(5, 150, 105, 0.3);
}
.gi-cp-card:nth-child(2) { 
    background: linear-gradient(180deg, rgba(16, 185, 129, 0.1) 0%, rgba(255, 255, 255, 0.02) 100%);
    border-top: 2px solid #10b981; 
}
.gi-cp-card:nth-child(2):hover { border-color: #10b981; }

/* Feature 3: Purple (Security/Premium) */
.gi-cp-card:nth-child(3) .gi-cp-icon {
    border-color: rgba(168, 85, 247, 0.3);
    color: #a855f7;
    box-shadow: inset 0 0 20px rgba(168, 85, 247, 0.1);
}
.gi-cp-card:nth-child(3):hover .gi-cp-icon {
    background: linear-gradient(135deg, #9333ea, #7e22ce);
    border-color: #a855f7;
    color: #fff;
    box-shadow: 0 10px 20px rgba(147, 51, 234, 0.3);
}
.gi-cp-card:nth-child(3) { 
    background: linear-gradient(180deg, rgba(168, 85, 247, 0.1) 0%, rgba(255, 255, 255, 0.02) 100%);
    border-top: 2px solid #a855f7; 
}
.gi-cp-card:nth-child(3):hover { border-color: #a855f7; }

/* Feature 4: Orange (Support) */
.gi-cp-card:nth-child(4) .gi-cp-icon {
    border-color: rgba(249, 115, 22, 0.3);
    color: #f97316;
    box-shadow: inset 0 0 20px rgba(249, 115, 22, 0.1);
}
.gi-cp-card:nth-child(4):hover .gi-cp-icon {
    background: linear-gradient(135deg, #ea580c, #c2410c);
    border-color: #f97316;
    color: #fff;
    box-shadow: 0 10px 20px rgba(234, 88, 12, 0.3);
}
.gi-cp-card:nth-child(4) { 
    background: linear-gradient(180deg, rgba(249, 115, 22, 0.1) 0%, rgba(255, 255, 255, 0.02) 100%);
    border-top: 2px solid #f97316; 
}
.gi-cp-card:nth-child(4):hover { border-color: #f97316; }

.gi-cp-icon svg {
    width: 28px;
    height: 28px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.gi-cp-card h3 {
    font-size: 1.35rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #fff;
}
.gi-cp-card p {
    color: rgba(255,255,255,0.75);
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 0;
}

/* Gallery Section */
.gi-cp-gallery {
    margin-bottom: 6rem;
}
.gi-cp-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
@media (max-width: 991px) {
    .gi-cp-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}
@media (max-width: 576px) {
    .gi-cp-gallery-grid {
        grid-template-columns: 1fr;
        gap: 1.25rem;
    }
}
.gi-cp-gallery-item {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid rgba(255,255,255,0.08);
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
    aspect-ratio: 3/4;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.gi-cp-gallery-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.6), 0 0 25px rgba(42, 106, 238, 0.25);
}
.gi-cp-gallery-item picture,
.gi-cp-gallery-item img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.gi-cp-gallery-item:hover img {
    transform: scale(1.06);
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
@media (max-width: 992px) {
    .gi-cp-showcase {
        grid-template-columns: 1fr;
        padding: 3rem;
    }
}
@media (max-width: 768px) {
    .gi-cp-hero h1 {
        font-size: 2.5rem;
    }
    .gi-cp-grid {
        grid-template-columns: 1fr;
    }
    .gi-cp-showcase {
        padding: 2rem;
    }
    .gi-how-cta {
        padding: 3rem 1.5rem;
    }
}
</style>

<main class="gi-cp-wrapper gi-page-rhythm">
    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-cp-container">
        <!-- Hero -->
        <div class="gi-cp-hero">
            <h1><?php echo esc_html( gi_get_field( 'sd_hero_title', 'Enterprise-Grade Clipping Path Services.' ) ); ?></h1>
            <p><?php echo esc_html( gi_get_field( 'sd_hero_desc', 'Perfectly isolated images for your eCommerce store, digital catalog, or print materials. We guarantee pixel-perfect edges using 100% manual vector paths.' ) ); ?></p>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-cp-container">
        <!-- Split Showcase -->
        <div class="gi-cp-showcase">
            <div class="gi-cp-showcase-text">
                <h2><?php echo esc_html( gi_get_field( 'sd_split_title', 'Flawless Extractions.' ) ); ?> <span><?php echo esc_html( gi_get_field( 'sd_split_highlight', 'Zero AI.' ) ); ?></span></h2>
                <p><?php echo esc_html( gi_get_field( 'sd_split_desc1', 'In the competitive world of online shopping, automated AI background removal leaves jagged edges and destroys fine details like hair or translucent fabrics.' ) ); ?></p>
                <p><?php echo esc_html( gi_get_field( 'sd_split_desc2', 'At Graphics Innovator, our senior editors manually draw every single clipping path using the Photoshop Pen Tool. This ensures absolute precision and a distraction-free product display that builds trust and drives conversions.' ) ); ?></p>
                <ul class="gi-cp-showcase-list">
                    <li>
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Distraction-Free:</strong> Isolating the product removes visual clutter.</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Uniform Presentation:</strong> Ensures a consistent look across your store.</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        <span><strong>Multi-Path Capabilities:</strong> Color correction isolation included.</span>
                    </li>
                </ul>
            </div>
            <div class="gi-cp-showcase-img">
                <img src="<?php echo esc_url( gi_get_image_url( gi_get_field( 'sd_showcase_img' ), 'full', 'https://graphicsinnovator.com/wp-content/uploads/2023/09/Clipping-Path.jpg' ) ); ?>" alt="Clipping Path Example">
            </div>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-cp-container">
        <h2 class="gi-cp-features-title">Why Enterprise Brands Trust Us</h2>

        <!-- Features Grid -->
        <div class="gi-cp-grid">
            
            <!-- Feature 1 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 22l10-4 10 4L12 2z"></path></svg>
                </div>
                <h3><?php echo esc_html( gi_get_field( 'sd_f1_title', '100% Hand-Drawn' ) ); ?></h3>
                <p><?php echo esc_html( gi_get_field( 'sd_f1_desc', 'We strictly use the Photoshop Pen Tool. No magic wands, no quick selections, and absolutely zero AI shortcuts.' ) ); ?></p>
            </div>

            <!-- Feature 2 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <h3><?php echo esc_html( gi_get_field( 'sd_f2_title', 'Quick Turnaround' ) ); ?></h3>
                <p><?php echo esc_html( gi_get_field( 'sd_f2_desc', 'We offer secure next-day service, and for urgent projects, we provide express delivery options to hit your deadlines.' ) ); ?></p>
            </div>

            <!-- Feature 3 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3>Strict NDA Guarantee</h3>
                <p>Your pre-release product data is 100% safe. We strictly follow non-disclosure agreements for all client assets.</p>
            </div>

            <!-- Feature 4 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
                </div>
                <h3>Fast Corrections</h3>
                <p>Even after delivery, you receive immediate priority revisions. We never leave our client's side until perfection is achieved.</p>
            </div>

        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-cp-container">
        <!-- Gallery Showcase -->
        <h2 class="gi-cp-features-title">Our Recent Work</h2>
        <div class="gi-cp-gallery">
            <div class="gi-cp-gallery-grid">
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-1.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-1.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Fashion & Apparel Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-2.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-2.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Model & Portrait Editing', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-3.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-3.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Complex Product & Metal Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-4.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-4.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Healthcare & Bottle Product Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-5.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-5.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Toy & Fabric Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-6.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-6.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Multi-Part Precision Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-7.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-7.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Figure & Accessories Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-8.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-8.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Eyewear & Tabletop Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-9.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-9.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Sports Equipment & Bicycle Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-10.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-10.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Handcrafted Ornament & Birds Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
                <div class="gi-cp-gallery-item">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-11.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/cp-sample-11.jpg' ); ?>" 
                             alt="<?php esc_attr_e( 'Clipping Path Sample - Plush Toy & Apparel Cutout', 'graphics-innovator' ); ?>" 
                             width="575" 
                             height="800" 
                             loading="lazy" 
                             decoding="async">
                    </picture>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-cp-container">
        <!-- CTA -->
        <div class="gi-how-cta">
            <h2><?php echo esc_html( gi_get_field( 'sd_cta_title', 'Ready to Test the Engine?' ) ); ?></h2>
            <p><?php echo esc_html( gi_get_field( 'sd_cta_desc', 'Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.' ) ); ?></p>
            <a href="<?php echo esc_url( gi_get_field( 'sd_cta_url', site_url( '/free-trial/' ) ) ); ?>" class="gi-cta-button"><?php echo esc_html( gi_get_field( 'sd_cta_btn_text', 'Start Your Free Trial Now' ) ); ?></a>
        </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
