<?php
/**
 * Template Name: Portfolio Details
 *
 * Ultra-Premium High-Converting Portfolio & Before/After Showcase Engine
 * Perfectly matches design mockup (Image 2) with:
 *  - 3 Upper-right glowing metric badges (6+, 24h, 100%)
 *  - Hero interactive Sneaker comparison slider with "Same Product, Better Result" annotation
 *  - "Real Editing Samples" pill & dual-colored headline ("quality fast.")
 *  - 3 Reassurance badges (No AI Shortcuts, 100% manual editing, Fast turnaround)
 *  - 2-Column Section Header with right-side "Real Projects / Consistent Quality / Ecommerce Ready" card
 *  - 6 Showcase Cards featuring custom category icons, kickers, and interactive Before/After sliders
 *  - Bottom High-Impact CTA banner with dual-tone glowing neon border
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$upload_dir = wp_upload_dir();
$base_url   = $upload_dir['baseurl'];

// Hero Sneaker Before/After Assets
$hero_shoe_before = $base_url . '/2023/08/Clipping-Path_A.jpg';
$hero_shoe_after  = $base_url . '/2023/08/Clipping-Path_B.jpg';

// The 6 Service Showcase Items matching Image 2
$portfolio_items = [
    [
        'title'       => 'Clipping Path',
        'kicker'      => 'HAND-DRAWN VECTOR PATHS',
        'color'       => 'amber',
        'icon_type'   => 'pen',
        'before'      => $base_url . '/2023/08/Clipping-Path_Before.jpg',
        'after'       => $base_url . '/2023/08/Clipping-Path_After.jpg',
        'description' => 'Clean product cutouts with precise edges for catalogs, marketplaces, and print production.',
    ],
    [
        'title'       => 'Photo Retouching',
        'kicker'      => 'HIGH-END POLISH',
        'color'       => 'magenta',
        'icon_type'   => 'diamond',
        'before'      => $base_url . '/2023/09/Retouching_1_A.jpg',
        'after'       => $base_url . '/2023/09/Retouching_1_B.jpg',
        'description' => 'Skin, fabric, light, and surface cleanup while preserving believable texture and shape.',
    ],
    [
        'title'       => 'Ghost Mannequin',
        'kicker'      => 'APPAREL-READY SHAPE',
        'color'       => 'orange',
        'icon_type'   => 'shirt',
        'before'      => $base_url . '/2023/09/Ghost_A-1.jpg',
        'after'       => $base_url . '/2023/09/Ghost_B.jpg',
        'description' => 'Invisible mannequin editing that keeps garments structured, dimensional, and store-ready.',
    ],
    [
        'title'       => 'Image Masking',
        'kicker'      => 'HAIR AND FINE DETAIL',
        'color'       => 'crimson',
        'icon_type'   => 'scissors',
        'before'      => $base_url . '/2023/09/Image-Masking_A.jpg',
        'after'       => $base_url . '/2023/09/Image-Masking_B.jpg',
        'description' => 'Complex masking for hair, fur, transparent edges, and delicate product details.',
    ],
    [
        'title'       => 'Shadow Creation',
        'kicker'      => 'NATURAL DEPTH',
        'color'       => 'sun',
        'icon_type'   => 'sun',
        'before'      => $base_url . '/2023/09/Shadowing_A.jpg',
        'after'       => $base_url . '/2023/09/Shadowing_B.jpg',
        'description' => 'Drop, reflection, and natural shadows that help flat product images feel premium.',
    ],
    [
        'title'       => 'Color Correction',
        'kicker'      => 'CATALOG CONSISTENCY',
        'color'       => 'purple',
        'icon_type'   => 'palette',
        'before'      => $base_url . '/2023/09/Ecommerce_1_A-1.jpg',
        'after'       => $base_url . '/2023/09/Ecommerce_1_B.jpg',
        'description' => 'Color and tone cleanup for consistent product sets across websites and marketplaces.',
    ],
];
?>

<style>
/* ==========================================================================
   PORTFOLIO BEFORE & AFTER SHOWCASE — HIGH FIDELITY DESIGN SYSTEM
   ========================================================================== */
:root {
    --gi-pf-bg: #040814;
    --gi-pf-surface: rgba(8, 15, 30, 0.88);
    --gi-pf-border: rgba(148, 163, 184, 0.14);
    --gi-pf-cyan: #38bdf8;
    --gi-pf-blue: #2563eb;
    --gi-pf-orange: #ff6a1a;
    --gi-pf-amber: #f59e0b;
    --gi-pf-magenta: #ec4899;
    --gi-pf-purple: #a855f7;
    --gi-pf-indigo: #818cf8;
}

/* Master Canvas */
.gi-pf-main {
    background-color: var(--gi-pf-bg);
    background-image:
        radial-gradient(circle at 12% 12%, rgba(56, 189, 248, 0.16) 0%, transparent 40%),
        radial-gradient(circle at 82% 18%, rgba(249, 115, 22, 0.12) 0%, rgba(37, 99, 235, 0.15) 35%, transparent 60%),
        radial-gradient(circle at 50% 55%, rgba(42, 106, 238, 0.08) 0%, transparent 50%),
        linear-gradient(180deg, #030610 0%, #060d1d 50%, #030713 100%);
    color: #ffffff;
    font-family: var(--gi-font-sans), 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    position: relative;
    overflow: hidden;
    padding: 3.5rem 0 6rem 0;
}

/* Perspective Grid Overlay */
.gi-pf-grid-overlay {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
    background-size: 64px 64px;
    mask-image: radial-gradient(ellipse at 50% 40%, black 25%, transparent 80%);
    pointer-events: none;
    z-index: 0;
}

.gi-pf-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* ==========================================================================
   HERO SECTION
   ========================================================================== */
.gi-pf-hero-wrap {
    margin-bottom: 5.5rem;
}

/* Top Metric Cards Row (Upper Right above the Hero Sneaker) */
.gi-pf-top-metrics-row {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 1.5rem;
}
.gi-pf-metrics-grid {
    display: grid;
    grid-template-columns: repeat(3, 140px);
    gap: 1rem;
}
.gi-pf-metric-card {
    background: rgba(10, 18, 36, 0.85);
    border: 1px solid rgba(56, 189, 248, 0.35);
    border-radius: 16px;
    padding: 1rem 0.9rem;
    text-align: center;
    box-shadow: 0 0 25px rgba(56, 189, 248, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    transition: transform 0.3s ease, border-color 0.3s ease;
}
.gi-pf-metric-card:hover {
    transform: translateY(-3px);
    border-color: rgba(56, 189, 248, 0.6);
}
.gi-pf-metric-num {
    font-size: 1.85rem;
    font-weight: 800;
    color: var(--gi-pf-cyan);
    line-height: 1.1;
    margin-bottom: 4px;
    text-shadow: 0 0 15px rgba(56, 189, 248, 0.4);
}
.gi-pf-metric-label {
    font-size: 0.76rem;
    color: rgba(226, 232, 240, 0.68);
    line-height: 1.3;
    font-weight: 500;
}

/* Hero Main Grid */
.gi-pf-hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 4.5rem;
    align-items: center;
}

/* Left Hero Column */
.gi-pf-kicker-pill {
    display: inline-flex;
    align-items: center;
    padding: 6px 14px;
    border-radius: 999px;
    background: rgba(255, 106, 26, 0.12);
    border: 1px solid rgba(255, 106, 26, 0.35);
    color: var(--gi-pf-orange);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 18px rgba(255, 106, 26, 0.18);
}
.gi-pf-hero-title {
    font-size: clamp(2.4rem, 4.2vw, 3.8rem);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -0.025em;
    color: #ffffff;
    margin: 0 0 1.5rem 0;
}
.gi-pf-hero-title .text-cyan {
    color: var(--gi-pf-cyan);
    text-shadow: 0 0 25px rgba(56, 189, 248, 0.35);
}
.gi-pf-hero-title .text-orange {
    color: var(--gi-pf-orange);
    text-shadow: 0 0 25px rgba(255, 106, 26, 0.35);
}
.gi-pf-hero-desc {
    font-size: 1.05rem;
    line-height: 1.65;
    color: rgba(226, 232, 240, 0.72);
    max-width: 530px;
    margin: 0 0 2rem 0;
}

/* Hero Action Buttons */
.gi-pf-hero-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
}
.gi-pf-btn-primary {
    background: linear-gradient(135deg, #ff6a1a 0%, #ea580c 100%);
    color: #ffffff;
    padding: 14px 30px;
    border-radius: 999px;
    font-weight: 700;
    font-size: 1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 10px 25px rgba(255, 106, 26, 0.45);
    transition: all 0.3s ease;
}
.gi-pf-btn-primary svg {
    width: 16px;
    height: 16px;
    transition: transform 0.25s ease;
}
.gi-pf-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 35px rgba(255, 106, 26, 0.65);
    color: #ffffff;
}
.gi-pf-btn-primary:hover svg {
    transform: translateX(4px);
}
.gi-pf-btn-outline {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.16);
    color: #ffffff;
    padding: 14px 30px;
    border-radius: 999px;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}
.gi-pf-btn-outline:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.35);
    color: #ffffff;
    transform: translateY(-2px);
}

/* 3 Reassurance Badges Row */
.gi-pf-reassurance-row {
    display: flex;
    align-items: center;
    gap: 22px;
    flex-wrap: wrap;
    color: rgba(226, 232, 240, 0.65);
    font-size: 0.88rem;
    font-weight: 500;
}
.gi-pf-reassurance-item {
    display: flex;
    align-items: center;
    gap: 8px;
}
.gi-pf-reassurance-item svg {
    width: 17px;
    height: 17px;
    color: var(--gi-pf-cyan);
    flex-shrink: 0;
}

/* Right Hero Column: Sneaker Showcase Card */
.gi-pf-hero-showcase-wrap {
    position: relative;
}
.gi-pf-hero-showcase-card {
    background: rgba(8, 14, 28, 0.88);
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 22px;
    padding: 1rem;
    position: relative;
    box-shadow:
        0 25px 60px rgba(0, 0, 0, 0.6),
        0 0 40px rgba(56, 189, 248, 0.12);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
}
.gi-pf-hero-showcase-media {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    aspect-ratio: 4 / 3;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Top-Right Handwritten Annotation */
.gi-pf-annotation {
    position: absolute;
    top: -46px;
    right: -10px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    pointer-events: none;
    z-index: 10;
}
.gi-pf-annotation-text {
    font-family: 'Caveat', 'Kalam', 'Segoe Print', cursive, sans-serif;
    color: #ffffff;
    font-size: 1.25rem;
    line-height: 1.15;
    text-align: right;
    font-weight: 700;
    text-shadow: 0 0 10px rgba(56, 189, 248, 0.4);
    transform: rotate(4deg);
}
.gi-pf-annotation-arrow {
    width: 50px;
    height: 40px;
    margin-right: 25px;
    margin-top: -4px;
}

/* Floating Before / After Pills inside Media */
.gi-pf-pill-tag {
    position: absolute;
    top: 14px;
    padding: 5px 14px;
    border-radius: 999px;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    z-index: 5;
    pointer-events: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}
.gi-pf-pill-before {
    left: 14px;
    background: rgba(15, 23, 42, 0.75);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(8px);
}
.gi-pf-pill-after {
    right: 14px;
    background: #2563eb;
    color: #ffffff;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.5);
}


/* ==========================================================================
   SECTION 2: PROOF BY SERVICE, NOT JUST PROMISES
   ========================================================================== */
.gi-pf-section-head-wrap {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 3.5rem;
    align-items: center;
    margin-bottom: 3.5rem;
    border-top: 1px solid rgba(148, 163, 184, 0.1);
    padding-top: 4.5rem;
}
.gi-pf-sec-kicker {
    color: var(--gi-pf-amber);
    font-size: 0.8rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 0.75rem;
    display: block;
}
.gi-pf-sec-title {
    font-size: clamp(2rem, 3.2vw, 2.9rem);
    font-weight: 800;
    line-height: 1.2;
    color: #ffffff;
    margin: 0 0 1rem 0;
    letter-spacing: -0.02em;
}
.gi-pf-sec-title .text-indigo {
    color: var(--gi-pf-indigo);
}
.gi-pf-sec-title .text-orange {
    color: var(--gi-pf-orange);
}
.gi-pf-sec-desc {
    font-size: 1.02rem;
    line-height: 1.6;
    color: rgba(226, 232, 240, 0.7);
    max-width: 540px;
    margin: 0;
}

/* Right Header Highlight Card (3 Items) */
.gi-pf-highlights-card {
    background: rgba(10, 18, 36, 0.75);
    border: 1px solid rgba(148, 163, 184, 0.15);
    border-radius: 18px;
    padding: 1.35rem 1.65rem;
    display: flex;
    flex-direction: column;
    gap: 1.15rem;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.35);
}
.gi-pf-hl-row {
    display: flex;
    align-items: center;
    gap: 1rem;
}
.gi-pf-hl-icon {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-pf-hl-icon svg {
    width: 19px;
    height: 19px;
}
.gi-pf-hl-icon.icon-hl-blue {
    background: rgba(37, 99, 235, 0.16);
    color: #38bdf8;
    border: 1px solid rgba(56, 189, 248, 0.3);
}
.gi-pf-hl-icon.icon-hl-cyan {
    background: rgba(6, 182, 212, 0.16);
    color: #22d3ee;
    border: 1px solid rgba(34, 211, 238, 0.3);
}
.gi-pf-hl-icon.icon-hl-purple {
    background: rgba(168, 85, 247, 0.16);
    color: #c084fc;
    border: 1px solid rgba(192, 132, 252, 0.3);
}
.gi-pf-hl-text strong {
    display: block;
    font-size: 0.95rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
}
.gi-pf-hl-text span {
    font-size: 0.8rem;
    color: rgba(226, 232, 240, 0.58);
}


/* ==========================================================================
   THE 6 SHOWCASE CARDS (2-COLUMN GRID)
   ========================================================================== */
.gi-pf-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2.25rem;
    margin-bottom: 5.5rem;
}

.gi-showcase-card {
    background: rgba(8, 15, 30, 0.78);
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 22px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
}
.gi-showcase-card:hover {
    transform: translateY(-5px);
    border-color: rgba(56, 189, 248, 0.35);
    box-shadow: 0 25px 55px rgba(0, 0, 0, 0.55), 0 0 30px rgba(56, 189, 248, 0.1);
}

/* Card Media Container */
.gi-showcase-media {
    position: relative;
    background: #ffffff;
    width: 100%;
    overflow: hidden;
    aspect-ratio: 4 / 3;
}
.gi-showcase-media .gi-before-after {
    width: 100%;
    height: 100%;
}
.gi-showcase-media img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    background: #ffffff;
}

/* Card Body */
.gi-showcase-body {
    padding: 1.65rem 1.85rem;
    display: flex;
    align-items: flex-start;
    gap: 1.25rem;
}

/* Category Rounded Icon */
.gi-showcase-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: transform 0.3s ease;
}
.gi-showcase-card:hover .gi-showcase-icon {
    transform: scale(1.08);
}
.gi-showcase-icon svg {
    width: 22px;
    height: 22px;
}
.gi-showcase-icon.icon-amber {
    background: rgba(245, 158, 11, 0.15);
    color: #f59e0b;
    border: 1px solid rgba(245, 158, 11, 0.3);
    box-shadow: 0 0 15px rgba(245, 158, 11, 0.2);
}
.gi-showcase-icon.icon-magenta {
    background: rgba(236, 72, 153, 0.15);
    color: #ec4899;
    border: 1px solid rgba(236, 72, 153, 0.3);
    box-shadow: 0 0 15px rgba(236, 72, 153, 0.2);
}
.gi-showcase-icon.icon-orange {
    background: rgba(249, 115, 22, 0.15);
    color: #f97316;
    border: 1px solid rgba(249, 115, 22, 0.3);
    box-shadow: 0 0 15px rgba(249, 115, 22, 0.2);
}
.gi-showcase-icon.icon-crimson {
    background: rgba(225, 29, 72, 0.15);
    color: #f43f5e;
    border: 1px solid rgba(225, 29, 72, 0.3);
    box-shadow: 0 0 15px rgba(225, 29, 72, 0.2);
}
.gi-showcase-icon.icon-sun {
    background: rgba(245, 158, 11, 0.15);
    color: #fbbf24;
    border: 1px solid rgba(251, 191, 36, 0.3);
    box-shadow: 0 0 15px rgba(245, 158, 11, 0.2);
}
.gi-showcase-icon.icon-purple {
    background: rgba(217, 70, 239, 0.15);
    color: #e879f9;
    border: 1px solid rgba(217, 70, 239, 0.3);
    box-shadow: 0 0 15px rgba(217, 70, 239, 0.2);
}

.gi-showcase-content {
    flex: 1;
}
.gi-showcase-kicker {
    font-size: 0.76rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    display: block;
    margin-bottom: 0.35rem;
}
.gi-showcase-card:nth-child(1) .gi-showcase-kicker { color: #f59e0b; }
.gi-showcase-card:nth-child(2) .gi-showcase-kicker { color: #ec4899; }
.gi-showcase-card:nth-child(3) .gi-showcase-kicker { color: #f97316; }
.gi-showcase-card:nth-child(4) .gi-showcase-kicker { color: #f43f5e; }
.gi-showcase-card:nth-child(5) .gi-showcase-kicker { color: #fbbf24; }
.gi-showcase-card:nth-child(6) .gi-showcase-kicker { color: #e879f9; }

.gi-showcase-title {
    font-size: 1.35rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 0.45rem 0;
    line-height: 1.25;
}
.gi-showcase-desc {
    font-size: 0.88rem;
    line-height: 1.5;
    color: rgba(226, 232, 240, 0.65);
    margin: 0;
}


/* ==========================================================================
   BOTTOM CTA SECTION ("Want to test your own images?")
   ========================================================================== */
.gi-pf-cta-wrap {
    position: relative;
    border-radius: 24px;
    padding: 2px;
    background: linear-gradient(135deg, rgba(56, 189, 248, 0.7) 0%, rgba(37, 99, 235, 0.25) 40%, rgba(249, 115, 22, 0.65) 100%);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6), 0 0 35px rgba(56, 189, 248, 0.15);
}
.gi-pf-cta-inner {
    background: rgba(8, 14, 28, 0.94);
    border-radius: 22px;
    padding: 2.5rem 3rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2.5rem;
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(25px);
}
.gi-pf-cta-left {
    display: flex;
    align-items: center;
    gap: 1.75rem;
}
.gi-pf-cta-icon {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    background: rgba(37, 99, 235, 0.18);
    border: 1px solid rgba(56, 189, 248, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gi-pf-cyan);
    flex-shrink: 0;
    box-shadow: 0 0 20px rgba(56, 189, 248, 0.2);
}
.gi-pf-cta-icon svg {
    width: 28px;
    height: 28px;
}
.gi-pf-cta-heading {
    font-size: 1.85rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.35rem 0;
    letter-spacing: -0.015em;
}
.gi-pf-cta-sub {
    font-size: 0.98rem;
    color: rgba(226, 232, 240, 0.65);
    margin: 0;
}
.gi-pf-cta-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-shrink: 0;
}
.gi-pf-cta-btn-primary {
    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
    color: #ffffff;
    padding: 14px 28px;
    border-radius: 999px;
    font-weight: 700;
    font-size: 0.98rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    box-shadow: 0 8px 24px rgba(37, 99, 235, 0.45);
    transition: all 0.3s ease;
    white-space: nowrap;
}
.gi-pf-cta-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 32px rgba(37, 99, 235, 0.65);
    color: #ffffff;
}
.gi-pf-cta-btn-outline {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 14px 28px;
    border-radius: 999px;
    font-weight: 600;
    font-size: 0.98rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
    white-space: nowrap;
}
.gi-pf-cta-btn-outline:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.4);
    color: #ffffff;
    transform: translateY(-2px);
}


/* ==========================================================================
   BEFORE/AFTER SLIDER OVERRIDES FOR CRISP INTERACTIVITY
   ========================================================================== */
.gi-before-after {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    user-select: none;
    touch-action: pan-y;
    cursor: ew-resize;
}
.gi-ba-container {
    position: relative;
    width: 100%;
    height: 100%;
}
.gi-ba-after,
.gi-ba-before {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}
.gi-ba-after img,
.gi-ba-before img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    background: #ffffff;
}
.gi-ba-before {
    width: 50%;
    overflow: hidden;
    z-index: 2;
    border-right: 2px solid #ffffff;
}
.gi-ba-handle {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background: #ffffff;
    z-index: 4;
    transform: translateX(-50%);
    pointer-events: none;
}
.gi-ba-handle-circle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0f172a;
    pointer-events: auto;
    cursor: grab;
}
.gi-ba-handle-circle svg {
    width: 14px;
    height: 14px;
}
.gi-ba-label {
    display: none !important; /* Managed via our custom high-fidelity pills */
}


/* ==========================================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ========================================================================== */
@media (max-width: 1100px) {
    .gi-pf-hero-grid {
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }
    .gi-pf-top-metrics-row {
        justify-content: flex-start;
    }
    .gi-pf-section-head-wrap {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }
    .gi-pf-cta-inner {
        flex-direction: column;
        text-align: center;
        padding: 2.25rem 1.75rem;
    }
    .gi-pf-cta-left {
        flex-direction: column;
        text-align: center;
    }
    .gi-pf-cta-actions {
        width: 100%;
        justify-content: center;
    }
}
@media (max-width: 768px) {
    .gi-pf-main {
        padding: 2.5rem 0 4.5rem 0;
    }
    .gi-pf-container {
        padding: 0 1.25rem;
    }
    .gi-pf-hero-title {
        font-size: 2.3rem;
    }
    .gi-pf-metrics-grid {
        grid-template-columns: repeat(3, 1fr);
        width: 100%;
        gap: 0.5rem;
    }
    .gi-pf-metric-card {
        padding: 0.75rem 0.5rem;
    }
    .gi-pf-metric-num {
        font-size: 1.4rem;
    }
    .gi-pf-metric-label {
        font-size: 0.68rem;
    }
    .gi-pf-grid {
        grid-template-columns: 1fr;
        gap: 1.75rem;
    }
    .gi-showcase-body {
        padding: 1.25rem;
    }
    .gi-pf-annotation {
        top: -38px;
        right: 0;
    }
    .gi-pf-annotation-text {
        font-size: 1.05rem;
    }
}
</style>

<main class="gi-pf-main">
    <!-- Perspective Grid Overlay -->
    <div class="gi-pf-grid-overlay" aria-hidden="true"></div>

    <div class="gi-pf-container">
        
        <!-- ================================================================
             1. HERO SECTION
             ================================================================ -->
        <div class="gi-pf-hero-wrap">
            
            <!-- Top Metric Cards Row (Upper Right above the Hero Sneaker) -->
            <div class="gi-pf-top-metrics-row">
                <div class="gi-pf-metrics-grid" aria-label="Key Service Metrics">
                    <!-- Metric 1: 6+ -->
                    <div class="gi-pf-metric-card">
                        <div class="gi-pf-metric-num">6+</div>
                        <div class="gi-pf-metric-label">Core service<br>categories</div>
                    </div>

                    <!-- Metric 2: 24h -->
                    <div class="gi-pf-metric-card">
                        <div class="gi-pf-metric-num">24h</div>
                        <div class="gi-pf-metric-label">Standard<br>turnaround</div>
                    </div>

                    <!-- Metric 3: 100% -->
                    <div class="gi-pf-metric-card">
                        <div class="gi-pf-metric-num">100%</div>
                        <div class="gi-pf-metric-label">Manual editing<br>quality control</div>
                    </div>
                </div>
            </div>

            <!-- Hero Main 2-Column Grid -->
            <div class="gi-pf-hero-grid">
                
                <!-- Left Hero Pitch -->
                <div class="gi-pf-hero-left">
                    <!-- Pill Kicker -->
                    <div class="gi-pf-kicker-pill">REAL EDITING SAMPLES</div>

                    <!-- Main Headline -->
                    <h1 class="gi-pf-hero-title">
                        Before and after<br>work that sells the<br><span class="text-cyan">quality</span> <span class="text-orange">fast.</span>
                    </h1>

                    <!-- Paragraph -->
                    <p class="gi-pf-hero-desc">
                        Browse a focused set of editing examples across clipping path, retouching, masking, ghost mannequin, shadows, and color correction. Every sample is built around the same promise: clean manual work, consistent catalog output, and fast delivery.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="gi-pf-hero-actions">
                        <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pf-btn-primary">
                            <span>Start Free Trial</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-pf-btn-outline">
                            Request a Quote
                        </a>
                    </div>

                    <!-- Reassurance Badges Row -->
                    <div class="gi-pf-reassurance-row">
                        <div class="gi-pf-reassurance-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <span>No AI shortcuts</span>
                        </div>
                        <div class="gi-pf-reassurance-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span>100% manual editing</span>
                        </div>
                        <div class="gi-pf-reassurance-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            <span>Fast turnaround</span>
                        </div>
                    </div>
                </div>

                <!-- Right Hero: Featured Sneaker Comparison Slider -->
                <div class="gi-pf-hero-showcase-wrap">
                    
                    <!-- Handwritten Doodle Annotation -->
                    <div class="gi-pf-annotation" aria-hidden="true">
                        <div class="gi-pf-annotation-text">
                            Same Product<br>Better Result
                        </div>
                        <svg class="gi-pf-annotation-arrow" viewBox="0 0 60 50" fill="none" stroke="#38bdf8" stroke-width="2" stroke-linecap="round">
                            <path d="M 50 5 Q 35 30 15 35" stroke-dasharray="3 3"/>
                            <polyline points="22 28 15 35 22 42"/>
                        </svg>
                    </div>

                    <!-- Sneaker Card Container -->
                    <div class="gi-pf-hero-showcase-card">
                        <div class="gi-pf-hero-showcase-media">
                            <span class="gi-pf-pill-tag gi-pf-pill-before">Before</span>
                            <span class="gi-pf-pill-tag gi-pf-pill-after">After</span>
                            <?php gi_before_after( $hero_shoe_before, $hero_shoe_after, '', '', 'hero_sneaker' ); ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!-- ================================================================
             2. SECTION 2: PROOF BY SERVICE, NOT JUST PROMISES
             ================================================================ -->
        <div class="gi-pf-section-head-wrap">
            
            <!-- Left Header -->
            <div class="gi-pf-sec-head-left">
                <span class="gi-pf-sec-kicker">&#8213; PROOF BY SERVICE</span>
                <h2 class="gi-pf-sec-title">
                    Proof by service, <span class="text-indigo">not just</span> <span class="text-orange">promises.</span>
                </h2>
                <p class="gi-pf-sec-desc">
                    Move the slider on each sample to compare original and edited output. This gives buyers the evidence they need before they upload files or request a quote.
                </p>
            </div>

            <!-- Right Header Feature Highlights Card -->
            <div class="gi-pf-highlights-card">
                <!-- Highlight 1 -->
                <div class="gi-pf-hl-row">
                    <div class="gi-pf-hl-icon icon-hl-blue">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="gi-pf-hl-text">
                        <strong>Real Projects</strong>
                        <span>Actual client work</span>
                    </div>
                </div>

                <!-- Highlight 2 -->
                <div class="gi-pf-hl-row">
                    <div class="gi-pf-hl-icon icon-hl-cyan">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    </div>
                    <div class="gi-pf-hl-text">
                        <strong>Consistent Quality</strong>
                        <span>Same standard for all products</span>
                    </div>
                </div>

                <!-- Highlight 3 -->
                <div class="gi-pf-hl-row">
                    <div class="gi-pf-hl-icon icon-hl-purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </div>
                    <div class="gi-pf-hl-text">
                        <strong>Ecommerce Ready</strong>
                        <span>Clean, market-ready results</span>
                    </div>
                </div>
            </div>

        </div>


        <!-- ================================================================
             3. THE 6 SHOWCASE CARDS (2-COLUMN GRID)
             ================================================================ -->
        <div class="gi-pf-grid">
            <?php foreach ( $portfolio_items as $index => $item ) : ?>
                <article class="gi-showcase-card">
                    <!-- Before / After Slider Media -->
                    <div class="gi-showcase-media">
                        <span class="gi-pf-pill-tag gi-pf-pill-before">Before</span>
                        <span class="gi-pf-pill-tag gi-pf-pill-after">After</span>
                        <?php gi_before_after( $item['before'], $item['after'], '', '', 'gallery_' . $index ); ?>
                    </div>

                    <!-- Card Body -->
                    <div class="gi-showcase-body">
                        <!-- Category Rounded Icon -->
                        <div class="gi-showcase-icon icon-<?php echo esc_attr( $item['color'] ); ?>">
                            <?php if ( 'pen' === $item['icon_type'] ) : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                            <?php elseif ( 'diamond' === $item['icon_type'] ) : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="6 3 18 3 22 9 12 22 2 9 6 3"></polygon></svg>
                            <?php elseif ( 'shirt' === $item['icon_type'] ) : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.38 3.46L16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"></path></svg>
                            <?php elseif ( 'scissors' === $item['icon_type'] ) : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line></svg>
                            <?php elseif ( 'sun' === $item['icon_type'] ) : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                            <?php elseif ( 'palette' === $item['icon_type'] ) : ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"></path></svg>
                            <?php endif; ?>
                        </div>

                        <!-- Content -->
                        <div class="gi-showcase-content">
                            <span class="gi-showcase-kicker"><?php echo esc_html( $item['kicker'] ); ?></span>
                            <h3 class="gi-showcase-title"><?php echo esc_html( $item['title'] ); ?></h3>
                            <p class="gi-showcase-desc"><?php echo esc_html( $item['description'] ); ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>


        <!-- ================================================================
             4. BOTTOM CALL-TO-ACTION BANNER
             ================================================================ -->
        <div class="gi-pf-cta-wrap">
            <div class="gi-pf-cta-inner">
                
                <!-- Left Details -->
                <div class="gi-pf-cta-left">
                    <div class="gi-pf-cta-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    </div>
                    <div>
                        <h2 class="gi-pf-cta-heading">Want to test your own images?</h2>
                        <p class="gi-pf-cta-sub">Send up to 3 files and compare our result against your current workflow.</p>
                    </div>
                </div>

                <!-- Right Action Buttons -->
                <div class="gi-pf-cta-actions">
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pf-cta-btn-primary">
                        Upload Trial Images
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-pf-cta-btn-outline">
                        Talk to Sales
                    </a>
                </div>

            </div>
        </div>

    </div>
</main>

<!-- Interactive Drag / Touch Script for all Before/After Sliders -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var sliders = document.querySelectorAll('.gi-before-after');
    
    sliders.forEach(function(slider) {
        var beforeDiv = slider.querySelector('.gi-ba-before');
        var handle = slider.querySelector('.gi-ba-handle');
        if (!beforeDiv || !handle) return;

        var isDragging = false;

        function setPosition(xPos) {
            var rect = slider.getBoundingClientRect();
            var offsetX = xPos - rect.left;
            var pct = Math.max(0, Math.min(100, (offsetX / rect.width) * 100));
            beforeDiv.style.width = pct + '%';
            handle.style.left = pct + '%';
        }

        // Pointer Events
        slider.addEventListener('pointerdown', function(e) {
            isDragging = true;
            slider.setPointerCapture(e.pointerId);
            setPosition(e.clientX);
        });

        slider.addEventListener('pointermove', function(e) {
            if (!isDragging) return;
            setPosition(e.clientX);
        });

        slider.addEventListener('pointerup', function(e) {
            isDragging = false;
            try { slider.releasePointerCapture(e.pointerId); } catch(err){}
        });

        slider.addEventListener('pointercancel', function() {
            isDragging = false;
        });
    });
});
</script>

<?php get_footer(); ?>
