<?php
/**
 * Template Name: How It Works
 *
 * Ultra-Premium Enterprise Pipeline Engine (L6 Quality)
 * Perfectly matches design mockup (Image 2) with:
 *  - "OUR WORKFLOW" glowing pill badge
 *  - Dual-tone headline: "The Pipeline for Pixel-Perfect Retouching."
 *  - Vertical dashed timeline with numbered neon nodes (01, 02, 03)
 *  - Step 01: Dual-column card with 3 feature badges & interactive Before/After Sneaker Slider
 *  - Step 02: Dual-column card with 3 feature badges & Desktop Studio Photoshop workspace monitor
 *  - Step 03: Dual-column card with 3 feature badges & Fanned finished product cards with emerald check badge
 *  - Bottom High-Impact CTA banner with dual-tone glowing neon border
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$upload_dir = wp_upload_dir();
$base_url   = $upload_dir['baseurl'];

$shoe_before = $base_url . '/2023/08/Clipping-Path_A.jpg';
$shoe_after  = $base_url . '/2023/08/Clipping-Path_B.jpg';
?>

<style>
/* ==========================================================================
   ENTERPRISE HOW IT WORKS — L6 PRODUCTION PIPELINE ENGINE
   ========================================================================== */
:root {
    --gi-hw-bg: #030712;
    --gi-hw-surface: rgba(8, 15, 30, 0.88);
    --gi-hw-border: rgba(148, 163, 184, 0.14);
    --gi-hw-cyan: #38bdf8;
    --gi-hw-blue: #2563eb;
    --gi-hw-orange: #ff6a1a;
    --gi-hw-amber: #f97316;
    --gi-hw-emerald: #10b981;
    --gi-hw-purple: #a855f7;
}

/* Master Canvas */
.gi-hw-main {
    background-color: var(--gi-hw-bg);
    background-image:
        radial-gradient(circle at 10% 15%, rgba(37, 99, 235, 0.18) 0%, transparent 40%),
        radial-gradient(circle at 88% 22%, rgba(249, 115, 22, 0.12) 0%, rgba(37, 99, 235, 0.12) 35%, transparent 60%),
        radial-gradient(circle at 50% 85%, rgba(56, 189, 248, 0.08) 0%, transparent 50%),
        linear-gradient(180deg, #02050c 0%, #060d1d 50%, #030713 100%);
    color: #ffffff;
    font-family: var(--gi-font-sans), 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    position: relative;
    overflow: hidden;
    padding: 4.5rem 0 6.5rem 0;
}

/* Technical Perspective Grid Overlay */
.gi-hw-grid-overlay {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
    background-size: 64px 64px;
    mask-image: radial-gradient(ellipse at 50% 35%, black 25%, transparent 80%);
    pointer-events: none;
    z-index: 0;
}

.gi-hw-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* ==========================================================================
   HEADER SECTION
   ========================================================================== */
.gi-hw-header {
    text-align: center;
    max-width: 860px;
    margin: 0 auto 5rem auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.gi-hw-pill {
    display: inline-flex;
    align-items: center;
    padding: 6px 18px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.12);
    border: 1px solid rgba(56, 189, 248, 0.3);
    color: var(--gi-hw-cyan);
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 20px rgba(56, 189, 248, 0.15);
}
.gi-hw-title {
    font-size: clamp(2.4rem, 4.2vw, 3.8rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.025em;
    color: #ffffff;
    margin: 0 0 1.5rem 0;
}
.gi-hw-text-cyan {
    background: linear-gradient(135deg, #38bdf8 0%, #2563eb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    filter: drop-shadow(0 0 25px rgba(56, 189, 248, 0.25));
}
.gi-hw-desc {
    font-size: 1.1rem;
    line-height: 1.7;
    color: rgba(226, 232, 240, 0.72);
    margin: 0;
    max-width: 740px;
}


/* ==========================================================================
   TIMELINE & 3 STEP CARDS
   ========================================================================== */
.gi-hw-timeline {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 3.5rem;
    margin-bottom: 5.5rem;
    padding-left: 80px;
}

/* Vertical Connecting Dashed Line */
.gi-hw-timeline::before {
    content: '';
    position: absolute;
    top: 36px;
    bottom: 36px;
    left: 28px;
    width: 2px;
    background-image: linear-gradient(to bottom, #2563eb 0%, #f97316 50%, #10b981 100%);
    background-size: 2px 100%;
    opacity: 0.7;
    z-index: 1;
}

/* Individual Timeline Step Row */
.gi-hw-step-row {
    position: relative;
    display: flex;
    align-items: stretch;
}

/* Numbered Step Node on Left */
.gi-hw-node {
    position: absolute;
    left: -80px;
    top: 32px;
    width: 58px;
    height: 58px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    font-weight: 800;
    color: #ffffff;
    z-index: 2;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gi-hw-step-row:hover .gi-hw-node {
    transform: scale(1.08);
}
.gi-hw-node.node-blue {
    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
    border: 2px solid #38bdf8;
    box-shadow: 0 0 25px rgba(37, 99, 235, 0.6);
}
.gi-hw-node.node-orange {
    background: linear-gradient(135deg, #ea580c 0%, #f97316 100%);
    border: 2px solid #fb923c;
    box-shadow: 0 0 25px rgba(249, 115, 22, 0.6);
}
.gi-hw-node.node-emerald {
    background: linear-gradient(135deg, #059669 0%, #10b981 100%);
    border: 2px solid #34d399;
    box-shadow: 0 0 25px rgba(16, 185, 129, 0.6);
}

/* Step Card Container */
.gi-hw-card {
    background: rgba(8, 15, 30, 0.85);
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 24px;
    padding: 2.75rem 3rem;
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 3.5rem;
    align-items: center;
    width: 100%;
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(25px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease, box-shadow 0.35s ease;
    overflow: hidden;
    position: relative;
}
.gi-hw-step-row:hover .gi-hw-card {
    transform: translateY(-4px);
    border-color: rgba(56, 189, 248, 0.35);
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.65), 0 0 30px rgba(56, 189, 248, 0.1);
}

/* Step Left Sub-Column */
.gi-hw-card-info {
    display: flex;
    flex-direction: column;
}
.gi-hw-card-kicker {
    font-size: 0.8rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    color: rgba(148, 163, 184, 0.75);
    text-transform: uppercase;
    margin-bottom: 0.5rem;
}
.gi-hw-card-title {
    font-size: clamp(1.6rem, 2.2vw, 2.1rem);
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 1rem 0;
    letter-spacing: -0.015em;
    line-height: 1.2;
}
.gi-hw-card-desc {
    font-size: 0.98rem;
    line-height: 1.65;
    color: rgba(226, 232, 240, 0.7);
    margin: 0 0 2.25rem 0;
}

/* 3 Feature Badges in Horizontal Row */
.gi-hw-badges-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.25rem;
}
.gi-hw-badge-item {
    display: flex;
    align-items: center;
    gap: 12px;
}
.gi-hw-badge-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #ffffff;
}
.gi-hw-badge-icon svg {
    width: 20px;
    height: 20px;
}

/* Badge Icon Colors */
.badge-blue {
    background: rgba(37, 99, 235, 0.18);
    color: #38bdf8;
    border: 1px solid rgba(56, 189, 248, 0.35);
    box-shadow: 0 0 15px rgba(56, 189, 248, 0.15);
}
.badge-orange {
    background: rgba(249, 115, 22, 0.18);
    color: #fb923c;
    border: 1px solid rgba(249, 115, 22, 0.35);
    box-shadow: 0 0 15px rgba(249, 115, 22, 0.15);
}
.badge-purple {
    background: rgba(168, 85, 247, 0.18);
    color: #c084fc;
    border: 1px solid rgba(168, 85, 247, 0.35);
    box-shadow: 0 0 15px rgba(168, 85, 247, 0.15);
}
.badge-emerald {
    background: rgba(16, 185, 129, 0.18);
    color: #34d399;
    border: 1px solid rgba(16, 185, 129, 0.35);
    box-shadow: 0 0 15px rgba(16, 185, 129, 0.15);
}

.gi-hw-badge-text strong {
    display: block;
    font-size: 0.88rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
}
.gi-hw-badge-text span {
    font-size: 0.76rem;
    color: rgba(226, 232, 240, 0.58);
    line-height: 1.3;
}

/* Step Right Sub-Column: Media Visuals */
.gi-hw-media-col {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}


/* ==========================================================================
   MEDIA ASSET 1: BEFORE / AFTER SNEAKER SLIDER (STEP 01)
   ========================================================================== */
.gi-hw-slider-box {
    width: 100%;
    max-width: 440px;
    aspect-ratio: 4 / 3;
    border-radius: 18px;
    overflow: hidden;
    background: #ffffff;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.1);
    position: relative;
}
.gi-hw-slider-box .gi-before-after {
    width: 100%;
    height: 100%;
}
.gi-hw-slider-box img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    background: #ffffff;
}


/* ==========================================================================
   MEDIA ASSET 2: DESKTOP PHOTOSHOP WORKSPACE MONITOR (STEP 02)
   ========================================================================== */
.gi-hw-monitor-wrap {
    width: 100%;
    max-width: 460px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.gi-hw-monitor-frame {
    width: 100%;
    background: #090e17;
    border: 2px solid #1e293b;
    border-radius: 14px;
    padding: 8px 8px 12px 8px;
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.65), 0 0 25px rgba(249, 115, 22, 0.12);
    position: relative;
}
.gi-hw-monitor-screen {
    width: 100%;
    aspect-ratio: 16 / 10;
    background: #1e1e1e;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    display: flex;
}
/* Photoshop Left Toolbar */
.gi-ps-toolbar {
    width: 26px;
    background: #252526;
    border-right: 1px solid #333333;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 6px;
    gap: 6px;
    flex-shrink: 0;
}
.gi-ps-tool-dot {
    width: 12px;
    height: 12px;
    border-radius: 2px;
    background: #3c3c3c;
}
.gi-ps-tool-active {
    background: #3b82f6;
    box-shadow: 0 0 6px #3b82f6;
}
/* Photoshop Canvas Area */
.gi-ps-canvas {
    flex: 1;
    background: #ffffff;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.gi-ps-shoe-img {
    width: 90%;
    height: 90%;
    object-fit: contain;
    display: block;
}
/* Vector Clipping Path Anchor Overlay */
.gi-ps-path-overlay {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}
/* Photoshop Right Panel */
.gi-ps-layers-panel {
    width: 60px;
    background: #252526;
    border-left: 1px solid #333333;
    display: flex;
    flex-direction: column;
    padding: 6px 4px;
    gap: 5px;
    flex-shrink: 0;
}
.gi-ps-layer-row {
    height: 10px;
    background: #333333;
    border-radius: 2px;
}
.gi-ps-layer-active {
    background: #2563eb;
}
/* Monitor Stand */
.gi-hw-monitor-stand {
    width: 44px;
    height: 28px;
    background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
    border: 1px solid #334155;
    border-top: none;
}
.gi-hw-monitor-base {
    width: 130px;
    height: 8px;
    background: #1e293b;
    border-radius: 6px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
}


/* ==========================================================================
   MEDIA ASSET 3: FANNED FINISHED CARDS WITH VERIFIED BADGE (STEP 03)
   ========================================================================== */
.gi-hw-fanned-wrap {
    position: relative;
    width: 100%;
    max-width: 420px;
    height: 260px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.gi-hw-fan-card {
    position: absolute;
    width: 82%;
    aspect-ratio: 4 / 3;
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.45);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    transition: transform 0.3s ease;
}
.gi-hw-fan-card img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
.gi-hw-fan-card.card-back-2 {
    transform: rotate(-10deg) translate(-25px, -10px);
    opacity: 0.35;
    background: #f1f5f9;
}
.gi-hw-fan-card.card-back-1 {
    transform: rotate(-5deg) translate(-12px, -5px);
    opacity: 0.65;
    background: #f8fafc;
}
.gi-hw-fan-card.card-front {
    transform: rotate(0deg);
    z-index: 3;
}
/* Floating Verified Emerald Check Badge */
.gi-hw-verified-badge {
    position: absolute;
    top: 15px;
    right: 25px;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #10b981;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.6);
    border: 3px solid #030712;
    z-index: 5;
    animation: giHwFloat 3s infinite ease-in-out;
}
.gi-hw-verified-badge svg {
    width: 22px;
    height: 22px;
}
@keyframes giHwFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}


/* ==========================================================================
   BOTTOM HIGH-IMPACT CALL-TO-ACTION BANNER
   ========================================================================== */
.gi-hw-cta-wrap {
    position: relative;
    border-radius: 24px;
    padding: 2px;
    background: linear-gradient(135deg, rgba(56, 189, 248, 0.7) 0%, rgba(37, 99, 235, 0.25) 40%, rgba(249, 115, 22, 0.65) 100%);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6), 0 0 35px rgba(56, 189, 248, 0.15);
}
.gi-hw-cta-inner {
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
.gi-hw-cta-left {
    display: flex;
    align-items: center;
    gap: 1.75rem;
}
.gi-hw-cta-icon {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    background: rgba(37, 99, 235, 0.18);
    border: 1px solid rgba(56, 189, 248, 0.35);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gi-hw-cyan);
    flex-shrink: 0;
    box-shadow: 0 0 20px rgba(56, 189, 248, 0.2);
}
.gi-hw-cta-icon svg {
    width: 28px;
    height: 28px;
}
.gi-hw-cta-heading {
    font-size: 1.85rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.35rem 0;
    letter-spacing: -0.015em;
}
.gi-hw-cta-sub {
    font-size: 0.98rem;
    color: rgba(226, 232, 240, 0.65);
    margin: 0;
}
.gi-hw-cta-btn {
    background: linear-gradient(135deg, #ff6a1a 0%, #ea580c 100%);
    color: #ffffff;
    padding: 16px 34px;
    border-radius: 999px;
    font-weight: 700;
    font-size: 1.05rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 10px 25px rgba(255, 106, 26, 0.45);
    transition: all 0.3s ease;
    white-space: nowrap;
    flex-shrink: 0;
}
.gi-hw-cta-btn svg {
    width: 18px;
    height: 18px;
    transition: transform 0.25s ease;
}
.gi-hw-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 35px rgba(255, 106, 26, 0.65);
    color: #ffffff;
}
.gi-hw-cta-btn:hover svg {
    transform: translateX(4px);
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
    width: 36px;
    height: 36px;
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
    display: none !important;
}


/* ==========================================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ========================================================================== */
@media (max-width: 1024px) {
    .gi-hw-timeline {
        padding-left: 60px;
    }
    .gi-hw-timeline::before {
        left: 24px;
    }
    .gi-hw-node {
        left: -60px;
        width: 48px;
        height: 48px;
        font-size: 1.05rem;
    }
    .gi-hw-card {
        grid-template-columns: 1fr;
        gap: 2.5rem;
        padding: 2.25rem 2rem;
    }
    .gi-hw-badges-row {
        grid-template-columns: repeat(3, 1fr);
    }
    .gi-hw-cta-inner {
        flex-direction: column;
        text-align: center;
        padding: 2.25rem 1.75rem;
    }
    .gi-hw-cta-left {
        flex-direction: column;
        text-align: center;
    }
}
@media (max-width: 768px) {
    .gi-hw-main {
        padding: 3rem 0 5rem 0;
    }
    .gi-hw-container {
        padding: 0 1.25rem;
    }
    .gi-hw-timeline {
        padding-left: 0;
    }
    .gi-hw-timeline::before {
        display: none;
    }
    .gi-hw-node {
        position: relative;
        left: 0;
        top: 0;
        margin-bottom: 1rem;
    }
    .gi-hw-step-row {
        flex-direction: column;
    }
    .gi-hw-badges-row {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    .gi-hw-card {
        padding: 1.75rem 1.25rem;
        border-radius: 20px;
    }
    .gi-hw-cta-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<main class="gi-hw-main">
    <!-- Perspective Grid Overlay -->
    <div class="gi-hw-grid-overlay" aria-hidden="true"></div>

    <div class="gi-hw-container">
        
        <!-- Header Section -->
        <div class="gi-hw-header">
            <div class="gi-hw-pill">
                <span>OUR WORKFLOW</span>
            </div>
            <h1 class="gi-hw-title">
                The Pipeline for Pixel-Perfect <br><span class="gi-hw-text-cyan">Retouching.</span>
            </h1>
            <p class="gi-hw-desc">
                For enterprise clients handling thousands of product images, you need a workflow that guarantees absolute precision, 100% security, and strict deadlines. Here is how our production engine works.
            </p>
        </div>

        <!-- Timeline Engine -->
        <div class="gi-hw-timeline">
            
            <!-- STEP 01: Secure Upload & Briefing -->
            <div class="gi-hw-step-row">
                <!-- Glowing Node 01 -->
                <div class="gi-hw-node node-blue" aria-label="Step 1">01</div>

                <!-- Step Card -->
                <article class="gi-hw-card">
                    <!-- Left Sub-Column -->
                    <div class="gi-hw-card-info">
                        <span class="gi-hw-card-kicker">STEP 01</span>
                        <h2 class="gi-hw-card-title">Secure Upload &amp; Briefing</h2>
                        <p class="gi-hw-card-desc">
                            We accept large file batches through our secure portal, Google Drive, Dropbox, or enterprise FTP. Every file you upload is protected under a strict Non-Disclosure Agreement (NDA) ensuring your pre-release products never leak.
                        </p>

                        <!-- 3 Feature Badges Row -->
                        <div class="gi-hw-badges-row">
                            <!-- Badge 1 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-blue">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>100% secure</strong>
                                    <span>file transfer</span>
                                </div>
                            </div>

                            <!-- Badge 2 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-blue">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Support for RAW,</strong>
                                    <span>TIFF, PSD, JPG</span>
                                </div>
                            </div>

                            <!-- Badge 3 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-blue">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Google Drive, Dropbox</strong>
                                    <span>or enterprise FTP</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sub-Column: Sneaker Before/After Slider Media -->
                    <div class="gi-hw-media-col">
                        <div class="gi-hw-slider-box" aria-label="Interactive Before/After Slider">
                            <?php gi_before_after( $shoe_before, $shoe_after, '', '', 'step_slider_1' ); ?>
                        </div>
                    </div>
                </article>
            </div>

            <!-- STEP 02: Manual Execution & 3-Tier QA -->
            <div class="gi-hw-step-row">
                <!-- Glowing Node 02 -->
                <div class="gi-hw-node node-orange" aria-label="Step 2">02</div>

                <!-- Step Card -->
                <article class="gi-hw-card">
                    <!-- Left Sub-Column -->
                    <div class="gi-hw-card-info">
                        <span class="gi-hw-card-kicker">STEP 02</span>
                        <h2 class="gi-hw-card-title">Manual Execution &amp; 3-Tier QA</h2>
                        <p class="gi-hw-card-desc">
                            Our senior editors manually draw clipping paths using the Photoshop Pen Tool and refine every detail. Each image goes through a rigorous 3-Tier Quality Assurance check by a dedicated Art Director.
                        </p>

                        <!-- 3 Feature Badges Row -->
                        <div class="gi-hw-badges-row">
                            <!-- Badge 1 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-orange">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Skilled professional</strong>
                                    <span>photo editors</span>
                                </div>
                            </div>

                            <!-- Badge 2 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-orange">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Zero AI shortcuts</strong>
                                    <span>100% human-drawn</span>
                                </div>
                            </div>

                            <!-- Badge 3 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-purple">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>3-Tier QA by</strong>
                                    <span>Art Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sub-Column: Photoshop Monitor Graphic -->
                    <div class="gi-hw-media-col">
                        <div class="gi-hw-monitor-wrap">
                            <div class="gi-hw-monitor-frame">
                                <div class="gi-hw-monitor-screen">
                                    <!-- Left PS Toolbar -->
                                    <div class="gi-ps-toolbar">
                                        <div class="gi-ps-tool-dot"></div>
                                        <div class="gi-ps-tool-dot"></div>
                                        <div class="gi-ps-tool-dot gi-ps-tool-active"></div>
                                        <div class="gi-ps-tool-dot"></div>
                                        <div class="gi-ps-tool-dot"></div>
                                    </div>

                                    <!-- Canvas -->
                                    <div class="gi-ps-canvas">
                                        <img src="<?php echo esc_url( $shoe_after ); ?>" alt="Clipping Path Pen Tool Execution" class="gi-ps-shoe-img">
                                        
                                        <!-- Realistic Pen Tool Vector Node Path Overlay -->
                                        <svg class="gi-ps-path-overlay" viewBox="0 0 300 200" fill="none">
                                            <!-- Path line around shoe -->
                                            <path d="M 50 145 C 50 110, 80 85, 115 75 C 145 68, 175 60, 205 80 C 235 100, 260 120, 255 145 C 240 152, 100 155, 50 145 Z" stroke="#3b82f6" stroke-width="1.8" stroke-dasharray="3 3"/>
                                            
                                            <!-- Bezier Nodes -->
                                            <rect x="47" y="142" width="6" height="6" fill="#3b82f6" stroke="#ffffff" stroke-width="1"/>
                                            <rect x="112" y="72" width="6" height="6" fill="#3b82f6" stroke="#ffffff" stroke-width="1"/>
                                            <rect x="202" y="77" width="6" height="6" fill="#ff6a1a" stroke="#ffffff" stroke-width="1"/>
                                            <rect x="252" y="142" width="6" height="6" fill="#3b82f6" stroke="#ffffff" stroke-width="1"/>
                                            <rect x="150" y="152" width="6" height="6" fill="#3b82f6" stroke="#ffffff" stroke-width="1"/>
                                            
                                            <!-- Handle Tangent Line -->
                                            <line x1="185" y1="65" x2="225" y2="92" stroke="#ff6a1a" stroke-width="1"/>
                                            <circle cx="185" cy="65" r="2.5" fill="#ff6a1a"/>
                                            <circle cx="225" cy="92" r="2.5" fill="#ff6a1a"/>
                                        </svg>
                                    </div>

                                    <!-- Right PS Layers -->
                                    <div class="gi-ps-layers-panel">
                                        <div class="gi-ps-layer-row gi-ps-layer-active"></div>
                                        <div class="gi-ps-layer-row"></div>
                                        <div class="gi-ps-layer-row"></div>
                                        <div class="gi-ps-layer-row"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="gi-hw-monitor-stand"></div>
                            <div class="gi-hw-monitor-base"></div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- STEP 03: Rapid Review & Delivery -->
            <div class="gi-hw-step-row">
                <!-- Glowing Node 03 -->
                <div class="gi-hw-node node-emerald" aria-label="Step 3">03</div>

                <!-- Step Card -->
                <article class="gi-hw-card">
                    <!-- Left Sub-Column -->
                    <div class="gi-hw-card-info">
                        <span class="gi-hw-card-kicker">STEP 03</span>
                        <h2 class="gi-hw-card-title">Rapid Review &amp; Delivery</h2>
                        <p class="gi-hw-card-desc">
                            Your polished images are delivered back to you perfectly formatted, optimized, and ready for your eCommerce store or print catalog. If you spot any details that need adjustment, we provide immediate priority revisions until you are 100% satisfied.
                        </p>

                        <!-- 3 Feature Badges Row -->
                        <div class="gi-hw-badges-row">
                            <!-- Badge 1 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-emerald">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Extremely fast</strong>
                                    <span>delivery turnaround</span>
                                </div>
                            </div>

                            <!-- Badge 2 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-blue">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18.178 8c5.096 0 5.096 8 0 8-2.695 0-4.758-2.613-6.178-4-1.42 1.387-3.483 4-6.178 4-5.096 0-5.096-8 0-8 2.695 0 4.758 2.613 6.178 4 1.42-1.387 3.483-4 6.178-4z"></path></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Unlimited revisions</strong>
                                    <span>until satisfaction</span>
                                </div>
                            </div>

                            <!-- Badge 3 -->
                            <div class="gi-hw-badge-item">
                                <div class="gi-hw-badge-icon badge-purple">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                </div>
                                <div class="gi-hw-badge-text">
                                    <strong>Ready for web,</strong>
                                    <span>print &amp; marketplace</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sub-Column: Fanned Cards with Emerald Verified Badge -->
                    <div class="gi-hw-media-col">
                        <div class="gi-hw-fanned-wrap">
                            <!-- Fanned Card 3 (Back) -->
                            <div class="gi-hw-fan-card card-back-2">
                                <img src="<?php echo esc_url( $shoe_after ); ?>" alt="Delivered Output Preview" loading="lazy">
                            </div>
                            <!-- Fanned Card 2 (Middle) -->
                            <div class="gi-hw-fan-card card-back-1">
                                <img src="<?php echo esc_url( $shoe_after ); ?>" alt="Delivered Output Preview" loading="lazy">
                            </div>
                            <!-- Fanned Card 1 (Front) -->
                            <div class="gi-hw-fan-card card-front">
                                <img src="<?php echo esc_url( $shoe_after ); ?>" alt="Delivered Output Preview">
                            </div>

                            <!-- Floating Verified Emerald Badge -->
                            <div class="gi-hw-verified-badge" title="100% Quality Verified">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div>

        <!-- ================================================================
             BOTTOM CALL-TO-ACTION BANNER
             ================================================================ -->
        <div class="gi-hw-cta-wrap">
            <div class="gi-hw-cta-inner">
                <!-- Left Details -->
                <div class="gi-hw-cta-left">
                    <div class="gi-hw-cta-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                    </div>
                    <div>
                        <h2 class="gi-hw-cta-heading">Ready to Test the Engine?</h2>
                        <p class="gi-hw-cta-sub">Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.</p>
                    </div>
                </div>

                <!-- Right Action Button -->
                <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-hw-cta-btn">
                    <span>Start Your Free Trial Now</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>

    </div>
</main>

<!-- Interactive Drag / Touch Script for Step 1 Before/After Slider -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var slider = document.querySelector('.gi-hw-slider-box .gi-before-after');
    if (!slider) return;

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
</script>

<?php get_footer(); ?>
