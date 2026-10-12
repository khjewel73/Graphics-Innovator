<?php
/**
 * Template Name: Service Detail
 *
 * Dynamic Enterprise Service Page Engine
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Dynamic Content Router
$slug = $post->post_name;

$service_data = [
    'background-removal-service' => [
        'hero_title' => 'Enterprise Background Removal Services.',
        'hero_desc' => 'Flawless background extraction and replacement for high-volume eCommerce studios. Pure white, transparent, or custom backgrounds perfectly isolated.',
        'split_title' => 'Flawless Extractions.',
        'split_highlight' => 'Zero Distractions.',
        'split_desc1' => 'In the competitive world of online shopping, messy or inconsistent backgrounds destroy trust and lower conversion rates.',
        'split_desc2' => 'At Graphics Innovator, we manually extract your products from their original backgrounds using advanced Pen Tool and masking techniques, ensuring absolutely clean, distraction-free images ready for Amazon, eBay, and your online store.',
        'img' => site_url('/wp-content/uploads/gi-services/bg_removal.png'),
        'f1_title' => '100% Hand-Drawn Paths',
        'f1_desc' => 'We strictly use the Photoshop Pen Tool. No automated background removal AI that leaves jagged, unprofessional edges.',
        'f2_title' => 'Complex Isolation',
        'f2_desc' => 'We easily handle complex shapes like bicycles, jewelry, and furniture with absolute precision and care.',
    ],
    'image-masking-service' => [
        'hero_title' => 'Advanced Image Masking Services.',
        'hero_desc' => 'Expert alpha channel and layer masking designed specifically for complex extractions like flying hair, translucent fabrics, and fine fur.',
        'split_title' => 'Complex Edges.',
        'split_highlight' => 'Perfectly Preserved.',
        'split_desc1' => 'Standard clipping paths are not enough when dealing with hair, fur, smoke, or transparent materials like glass.',
        'split_desc2' => 'We utilize highly advanced Photoshop masking techniques (Alpha Channel, Layer Masking, and Refine Edge) to perfectly preserve every single strand of hair and translucent pixel while completely removing the background.',
        'img' => site_url('/wp-content/uploads/gi-services/image_masking.png'),
        'f1_title' => 'Hair & Fur Masking',
        'f1_desc' => 'Flawlessly extract models with flying hair or animal products without losing a single strand of detail.',
        'f2_title' => 'Translucent Objects',
        'f2_desc' => 'Perfect background removal for glass, water, smoke, and fine mesh fabrics while keeping their transparency intact.',
    ],
    'photo-retouching-service' => [
        'hero_title' => 'High-End Photo Retouching Services.',
        'hero_desc' => 'Premium cosmetic and product retouching. We remove blemishes, smooth surfaces, fix lighting issues, and prepare your photos for high-resolution print.',
        'split_title' => 'Pixel-Perfect Polish.',
        'split_highlight' => 'Magazine Quality.',
        'split_desc1' => 'Raw photographs rarely capture the absolute perfection required for high-end fashion magazines or premium eCommerce stores.',
        'split_desc2' => 'Our senior retouchers use advanced frequency separation and dodge & burn techniques to clean up skin blemishes, smooth product surfaces, remove dust/scratches, and create a flawless, luxurious final image.',
        'img' => site_url('/wp-content/uploads/gi-services/photo_retouching.png'),
        'f1_title' => 'Frequency Separation',
        'f1_desc' => 'We smooth out skin textures and product surfaces while retaining essential details and pores for a natural look.',
        'f2_title' => 'Dust & Scratch Removal',
        'f2_desc' => 'Meticulous cleanup of every speck of dust, reflection glare, and manufacturing scratch on product photography.',
    ],
    'product-photo-editing-service' => [
        'hero_title' => 'eCommerce Product Photo Editing.',
        'hero_desc' => 'Complete end-to-end product photo editing. From background removal to color correction, we make your catalog ready to sell.',
        'split_title' => 'Maximize Sales.',
        'split_highlight' => 'Elevate Your Catalog.',
        'split_desc1' => 'Your product photos are your digital storefront. Poorly edited images instantly kill customer trust and sales.',
        'split_desc2' => 'We provide comprehensive product editing services. We align, crop, retouch, and optimize your entire product catalog to ensure absolute consistency across thousands of SKUs, strictly following Amazon and eBay image guidelines.',
        'img' => site_url('/wp-content/uploads/gi-services/product_editing.png'),
        'f1_title' => 'Amazon/eBay Compliance',
        'f1_desc' => 'We ensure every image strictly meets marketplace guidelines (pure white background, correct margins, proper sizing).',
        'f2_title' => 'Bulk Catalog Processing',
        'f2_desc' => 'Capable of handling thousands of SKUs per week with guaranteed consistency and ultra-fast turnaround times.',
    ],
    'ghost-mannequin-service' => [
        'hero_title' => 'Enterprise Ghost Mannequin Services.',
        'hero_desc' => 'Create a premium 3D hollow-man effect for your apparel. We seamlessly combine multiple photos to showcase the true fit of your garments.',
        'split_title' => 'Showcase the Fit.',
        'split_highlight' => 'Without the Distraction.',
        'split_desc1' => 'Using live models is expensive, and shooting apparel flat looks cheap. Ghost mannequin (neck joint) is the industry standard for apparel eCommerce.',
        'split_desc2' => 'We take your mannequin shots and seamlessly stitch the front and inner neck/back sections together. We then apply realistic interior shadows and warp transformations to create a perfect, hollow 3D representation of your clothing.',
        'img' => site_url('/wp-content/uploads/gi-services/ghost_mannequin.png'),
        'f1_title' => 'Seamless Neck Joints',
        'f1_desc' => 'Flawless stitching of the inner collar and label tags to create a perfectly realistic hollow effect.',
        'f2_title' => 'Warp & Symmetrical Shaping',
        'f2_desc' => 'We adjust the garment shape, fix asymmetrical sleeves, and smooth out wrinkles for a tailored, premium look.',
    ],
    'neck-joint-service' => [
        'hero_title' => 'Professional Neck Joint Services.',
        'hero_desc' => 'The essential ghost mannequin technique. We expertly remove the mannequin and stitch the neck back in for a seamless 3D apparel display.',
        'split_title' => 'Invisible Mannequins.',
        'split_highlight' => 'Visible Quality.',
        'split_desc1' => 'When shooting apparel on a mannequin, the neck and inner collar are always hidden. This breaks the illusion for the customer.',
        'split_desc2' => 'Our neck joint specialists meticulously combine your primary shot with an inside-out collar shot. We reconstruct the missing fabric, align the patterns perfectly, and add depth shadows to make the clothing look like it is being worn by an invisible model.',
        'img' => site_url('/wp-content/uploads/gi-services/neck_joint.png'),
        'f1_title' => 'Pattern Alignment',
        'f1_desc' => 'We perfectly align stripes, plaids, and complex fabric patterns during the stitching process so the joint is completely invisible.',
        'f2_title' => 'Realistic Depth Shadows',
        'f2_desc' => 'We manually paint natural interior shadows inside the neck joint to give the garment true 3D volume.',
    ],
    'shadow-creation-service' => [
        'hero_title' => 'Realistic Shadow Creation Services.',
        'hero_desc' => 'Add stunning depth and realism to flat images. We expertly craft natural drop shadows, reflection shadows, and custom lighting enhancements.',
        'split_title' => 'Add Premium Depth.',
        'split_highlight' => 'Eliminate Flatness.',
        'split_desc1' => 'Products floating on a white background without a shadow look unnatural and completely flat, breaking the realism of the photo.',
        'split_desc2' => 'We utilize advanced Photoshop techniques to create highly realistic drop shadows, cast shadows, and glossy reflection shadows. By matching the original lighting direction, we ground your products and give them a premium, studio-lit appearance.',
        'img' => site_url('/wp-content/uploads/gi-services/shadow_creation.png'),
        'f1_title' => 'Glossy Reflection Shadows',
        'f1_desc' => 'Perfect for jewelry, electronics, and cosmetics. We create a luxurious glass-like reflection underneath your products.',
        'f2_title' => 'Natural Drop Shadows',
        'f2_desc' => 'We manually paint soft, diffused drop shadows that perfectly match the original lighting angle and intensity.',
    ],
    'color-correction-service' => [
        'hero_title' => 'Advanced Color Correction Services.',
        'hero_desc' => 'True-to-life color matching. We fix white balance, adjust vibrancy, and recolor products to ensure your digital catalog perfectly matches reality.',
        'split_title' => 'True-to-Life Colors.',
        'split_highlight' => 'Reduce Return Rates.',
        'split_desc1' => 'One of the biggest causes of eCommerce returns is customers receiving a product that looks completely different in color than the photo online.',
        'split_desc2' => 'Our color specialists fix bad lighting, incorrect white balance, and muddy contrasts. We also offer advanced multi-color pathing, allowing us to take one product photo and recolor it into dozens of different fabric variants with 100% accuracy.',
        'img' => site_url('/wp-content/uploads/gi-services/color_correction.png'),
        'f1_title' => 'Multi-Path Recoloring',
        'f1_desc' => 'Save thousands on photography. Send us one product, and we will accurately recolor it into every variation you sell.',
        'f2_title' => 'White Balance Fixes',
        'f2_desc' => 'We remove ugly yellow/blue lighting tints and restore the crisp, natural, true-to-life colors of your products.',
    ],
    'photo-manipulation-service' => [
        'hero_title' => 'Creative Photo Manipulation Services.',
        'hero_desc' => 'Advanced compositing and creative editing. We blend multiple images, change backgrounds, and create stunning visual composites for advertising.',
        'split_title' => 'Limitless Creativity.',
        'split_highlight' => 'Flawless Execution.',
        'split_desc1' => 'Sometimes you need an image that cannot be captured in camera. You need multiple elements combined into one seamless reality.',
        'split_desc2' => 'Our senior manipulation artists blend, warp, composite, and color-grade multiple photos into a single, cohesive masterpiece. Whether it is adding products into a lifestyle scene or creating surreal advertising graphics, we make the impossible look real.',
        'img' => site_url('/wp-content/uploads/gi-services/photo_manipulation.png'),
        'f1_title' => 'Lifestyle Compositing',
        'f1_desc' => 'We seamlessly insert your studio-shot products into beautiful lifestyle backgrounds, saving you the cost of location shoots.',
        'f2_title' => 'Perspective Matching',
        'f2_desc' => 'We perfectly match the lighting, perspective, and shadows of all combined elements so the final image looks 100% real.',
    ],
];

// Default fallback if not found
$data = isset($service_data[$slug]) ? $service_data[$slug] : [
    'hero_title' => 'Professional Photo Editing Services.',
    'hero_desc' => 'High-quality, enterprise-grade photo editing and retouching tailored for your specific needs.',
    'split_title' => 'Enterprise Quality.',
    'split_highlight' => 'Unmatched Precision.',
    'split_desc1' => 'We deliver top-tier photo editing services for eCommerce brands worldwide.',
    'split_desc2' => 'Our expert team ensures your images are flawless, optimizing them for maximum conversion and visual appeal.',
    'img' => 'https://graphicsinnovator.com/wp-content/uploads/2023/09/Clipping-Path.jpg',
    'f1_title' => 'Premium Quality',
    'f1_desc' => 'We guarantee pixel-perfect output for every single image we process.',
    'f2_title' => 'Expert Team',
    'f2_desc' => 'Our senior editors have years of experience in high-end photo retouching.',
];

get_header(); ?>

<style>
/* Enterprise Dynamic Service CSS */
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
    letter-spacing: -0.01em;
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

/* Before & After Transformation Rhythm Section */
.gi-gm-showcase-section {
    padding-block: var(--gi-space-16, 6rem);
}
.gi-gm-header {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 3.75rem auto;
}
.gi-gm-pill-tag {
    display: inline-block;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #ff9800;
    background: rgba(255, 152, 0, 0.1);
    border: 1px solid rgba(255, 152, 0, 0.25);
    padding: 0.4rem 1.1rem;
    border-radius: 100px;
    margin-bottom: 1.25rem;
}
.gi-gm-title {
    font-size: clamp(2.2rem, 4vw, 3.2rem);
    font-weight: 800;
    margin-bottom: 1.25rem;
    color: #fff;
    letter-spacing: -0.02em;
}
.gi-gm-subtitle {
    color: rgba(255, 255, 255, 0.72);
    font-size: 1.15rem;
    line-height: 1.7;
    margin: 0;
}
.gi-gm-showcase-section .gi-cp-container {
    max-width: 1280px;
}
.gi-gm-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
@media (max-width: 991px) {
    .gi-gm-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}
@media (max-width: 576px) {
    .gi-gm-grid {
        grid-template-columns: 1fr;
        gap: 1.25rem;
    }
}
.gi-gm-grid--2col {
    grid-template-columns: repeat(2, 1fr);
    max-width: 900px;
    margin: 0 auto;
}
@media (max-width: 768px) {
    .gi-gm-grid--2col {
        grid-template-columns: 1fr;
    }
}
.gi-gm-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.08);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
    aspect-ratio: 3/4;
    transition: transform 0.4s ease, box-shadow 0.4s ease, border-color 0.4s ease;
    display: flex;
    flex-direction: column;
}
.gi-gm-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.7), 0 0 30px rgba(42, 106, 238, 0.3);
    border-color: rgba(42, 106, 238, 0.4);
}
.gi-gm-card-media {
    position: relative;
    width: 100%;
    height: 100%;
    background: #ffffff;
    overflow: hidden;
}
.gi-gm-card-media .gi-before-after,
.gi-gm-card-media .gi-ba-container {
    width: 100%;
    height: 100%;
    border-radius: 0;
    margin: 0;
    background: #ffffff;
}
.gi-gm-card-media .gi-ba-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.gi-gm-card-media::after {
    content: 'Hover or drag to compare';
    position: absolute;
    bottom: 52px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(3, 8, 17, 0.85);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    padding: 0.3rem 0.8rem;
    border-radius: 999px;
    border: 1px solid rgba(255, 255, 255, 0.16);
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.3s ease, transform 0.3s ease;
    z-index: 6;
}
.gi-gm-card:hover .gi-gm-card-media::after {
    opacity: 1;
    transform: translateX(-50%) translateY(-2px);
}
.gi-gm-card-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 2.2rem 1.25rem 0.95rem 1.25rem;
    background: linear-gradient(to top, rgba(3, 8, 17, 0.92) 0%, rgba(3, 8, 17, 0.4) 65%, transparent 100%);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.5rem;
    z-index: 5;
    pointer-events: none;
    transition: opacity 0.3s ease;
}
.gi-gm-card-tag {
    background: rgba(234, 88, 12, 0.22);
    color: #ff9800;
    border: 1px solid rgba(234, 88, 12, 0.45);
    padding: 0.22rem 0.65rem;
    border-radius: 50px;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    white-space: nowrap;
}
.gi-gm-card-title {
    color: #ffffff;
    font-size: 0.86rem;
    font-weight: 700;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
}
</style>

<main class="gi-cp-wrapper gi-page-rhythm">
    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-cp-container">
        <!-- Hero -->
        <div class="gi-cp-hero">
            <h1><?php echo esc_html($data['hero_title']); ?></h1>
            <p><?php echo esc_html($data['hero_desc']); ?></p>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-cp-container">
        <!-- Split Showcase -->
        <div class="gi-cp-showcase">
            <div class="gi-cp-showcase-text">
                <h2><?php echo esc_html($data['split_title']); ?> <span><?php echo esc_html($data['split_highlight']); ?></span></h2>
                <p><?php echo esc_html($data['split_desc1']); ?></p>
                <p><?php echo esc_html($data['split_desc2']); ?></p>
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
                <img src="<?php echo esc_url($data['img']); ?>" alt="<?php echo esc_attr($post->post_title); ?>">
            </div>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-cp-container">
        <h2 class="gi-cp-features-title">Why Enterprise Brands Trust Us</h2>

        <!-- Features Grid -->
        <div class="gi-cp-grid">
            
            <!-- Dynamic Feature 1 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 22l10-4 10 4L12 2z"></path></svg>
                </div>
                <h3><?php echo esc_html($data['f1_title']); ?></h3>
                <p><?php echo esc_html($data['f1_desc']); ?></p>
            </div>

            <!-- Dynamic Feature 2 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a10 10 0 0 1 10 10c0 5.5-4.5 10-10 10S2 17.5 2 12 7.5 2 12 2z"></path></svg>
                </div>
                <h3><?php echo esc_html($data['f2_title']); ?></h3>
                <p><?php echo esc_html($data['f2_desc']); ?></p>
            </div>

            <!-- Static Feature 3 -->
            <div class="gi-cp-card">
                <div class="gi-cp-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3>Strict NDA Guarantee</h3>
                <p>Your pre-release product data is 100% safe. We strictly follow non-disclosure agreements for all client assets.</p>
            </div>

            <!-- Static Feature 4 -->
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

    <?php if ( $slug === 'ghost-mannequin-service' || $slug === 'neck-joint-service' ) : ?>
    <!-- ==========================================
         BEFORE / AFTER TRANSFORMATION RHYTHM
         ========================================== -->
    <section class="gi-rhythm-block gi-rhythm-charcoal gi-gm-showcase-section">
        <div class="gi-cp-container">
            <div class="gi-gm-header">
                <span class="gi-gm-pill-tag">Visual Proof &bull; Real Studio Results</span>
                <h2 class="gi-gm-title">Before &amp; After Transformation</h2>
                <p class="gi-gm-subtitle">Compare raw mannequin studio captures against our final 3D ghost mannequin extractions. Simply hover and move your cursor across any photo below (or drag the slider) to instantly reveal the Before and After transformation.</p>
            </div>

            <div class="gi-gm-grid">
                
                <!-- Sample 01: Cycling Jersey -->
                <article class="gi-gm-card" data-gi-animate="fade-up">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/gm-before-01.webp', 
                            get_template_directory_uri() . '/gm-after-01.webp', 
                            'Before 01', 
                            'After 01', 
                            'gm_sample_1' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 01</span>
                        <span class="gi-gm-card-title">Cycling Jersey &bull; Invisible Neck</span>
                    </div>
                </article>

                <!-- Sample 02: Striped Polo Shirt -->
                <article class="gi-gm-card" data-gi-animate="fade-up" data-gi-delay="100">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/gm-before-02.webp', 
                            get_template_directory_uri() . '/gm-after-02.webp', 
                            'Before 02', 
                            'After 02', 
                            'gm_sample_2' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 02</span>
                        <span class="gi-gm-card-title">Striped Polo &bull; Collar Stitching</span>
                    </div>
                </article>

                <!-- Sample 03: Plaid Tailored Jacket -->
                <article class="gi-gm-card" data-gi-animate="fade-up" data-gi-delay="150">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/gm-before-03.webp', 
                            get_template_directory_uri() . '/gm-after-03.webp', 
                            'Before 03', 
                            'After 03', 
                            'gm_sample_3' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 03</span>
                        <span class="gi-gm-card-title">Plaid Jacket &bull; Torso Eradicated</span>
                    </div>
                </article>

                <!-- Sample 04: Corduroy Blazer -->
                <article class="gi-gm-card" data-gi-animate="fade-up" data-gi-delay="200">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/gm-before-04.webp', 
                            get_template_directory_uri() . '/gm-after-04.webp', 
                            'Before 04', 
                            'After 04', 
                            'gm_sample_4' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 04</span>
                        <span class="gi-gm-card-title">Corduroy Blazer &bull; Deep Lapel</span>
                    </div>
                </article>

                <!-- Sample 05: Red Wrap Dress -->
                <article class="gi-gm-card" data-gi-animate="fade-up" data-gi-delay="250">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/gm-before-05.webp', 
                            get_template_directory_uri() . '/gm-after-05.webp', 
                            'Before 05', 
                            'After 05', 
                            'gm_sample_5' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 05</span>
                        <span class="gi-gm-card-title">Red Wrap Dress &bull; 3D Draping</span>
                    </div>
                </article>

                <!-- Sample 06: Sheer Lace Dress -->
                <article class="gi-gm-card" data-gi-animate="fade-up" data-gi-delay="300">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/gm-before-06.webp', 
                            get_template_directory_uri() . '/gm-after-06.webp', 
                            'Before 06', 
                            'After 06', 
                            'gm_sample_6' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 06</span>
                        <span class="gi-gm-card-title">Sheer Lace &bull; Transparent Cutout</span>
                    </div>
                </article>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ( $slug === 'photo-retouching-service' ) : ?>
    <!-- ==========================================
         PHOTO RETOUCHING BEFORE / AFTER TRANSFORMATION
         ========================================== -->
    <section class="gi-rhythm-block gi-rhythm-charcoal gi-gm-showcase-section">
        <div class="gi-cp-container">
            <div class="gi-gm-header">
                <span class="gi-gm-pill-tag">Visual Proof &bull; Real Studio Results</span>
                <h2 class="gi-gm-title">Before &amp; After Transformation</h2>
                <p class="gi-gm-subtitle">Compare raw, unedited captures against our final high-end retouched deliverables. Simply hover and move your cursor across any photo below (or drag the slider) to inspect our frequency separation, blemish cleanup, and tone grading.</p>
            </div>

            <div class="gi-gm-grid gi-gm-grid--2col">
                
                <!-- Sample 01: Beauty & Skin Retouching -->
                <article class="gi-gm-card" data-gi-animate="fade-up">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/pr-before-01.webp', 
                            get_template_directory_uri() . '/pr-after-01.webp', 
                            'Before 01', 
                            'After 01', 
                            'pr_sample_1' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 01</span>
                        <span class="gi-gm-card-title">High-End Skin &bull; Frequency Separation</span>
                    </div>
                </article>

                <!-- Sample 02: Fashion & Eyewear Retouching -->
                <article class="gi-gm-card" data-gi-animate="fade-up" data-gi-delay="100">
                    <div class="gi-gm-card-media">
                        <?php 
                        gi_before_after( 
                            get_template_directory_uri() . '/pr-before-02.webp', 
                            get_template_directory_uri() . '/pr-after-02.webp', 
                            'Before 02', 
                            'After 02', 
                            'pr_sample_2' 
                        ); 
                        ?>
                    </div>
                    <div class="gi-gm-card-caption">
                        <span class="gi-gm-card-tag">Sample 02</span>
                        <span class="gi-gm-card-title">Fashion Retouching &bull; Lens Tint Isolation</span>
                    </div>
                </article>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-cp-container">
        <!-- CTA -->
        <div class="gi-how-cta">
            <h2>Ready to Test the Engine?</h2>
            <p>Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.</p>
            <a href="<?php echo site_url('/free-trial/'); ?>" class="gi-cta-button">Start Your Free Trial Now</a>
        </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
