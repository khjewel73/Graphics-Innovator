<?php
/**
 * Template Name: Free Trial
 *
 * Ultra-Premium High-Converting Enterprise Free Trial Page.
 * Matches design mockup with cyber ambient background, sneaker before/after showcase,
 * 4 feature pills, 3-step How It Works, Trust stats, and an interactive Drag & Drop upload portal.
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
   ENTERPRISE FREE TRIAL — CYBER AMBIENT THEME ENGINE
   ========================================================================== */
:root {
    --gi-ft-bg: #050913;
    --gi-ft-card-bg: rgba(9, 16, 30, 0.88);
    --gi-ft-border-glow: rgba(255, 106, 26, 0.45);
    --gi-ft-cyan: #38bdf8;
    --gi-ft-cyan-glow: rgba(56, 189, 248, 0.35);
    --gi-ft-orange: #ff6a1a;
    --gi-ft-orange-glow: rgba(255, 106, 26, 0.35);
    --gi-ft-blue: #2a6aee;
    --gi-ft-purple: #a855f7;
    --gi-ft-green: #10b981;
}

.gi-ft-wrapper {
    background-color: var(--gi-ft-bg);
    background-image:
        radial-gradient(circle at 92% 12%, rgba(255, 106, 26, 0.18) 0%, transparent 45%),
        radial-gradient(circle at 8% 22%, rgba(56, 189, 248, 0.14) 0%, transparent 45%),
        radial-gradient(circle at 50% 95%, rgba(42, 106, 238, 0.12) 0%, transparent 50%),
        linear-gradient(180deg, #040711 0%, #060c18 50%, #03060d 100%);
    color: #ffffff;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    position: relative;
    overflow: hidden;
    padding: calc(var(--gi-header-height, 96px) + 3.25rem) 0 7rem 0;
}

/* Cyber Perspective Grid Overlay */
.gi-ft-grid-overlay {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
    background-size: 60px 60px;
    mask-image: radial-gradient(ellipse at 50% 40%, black 20%, transparent 75%);
    pointer-events: none;
    z-index: 0;
}

/* Neon Beam Streaks */
.gi-ft-streak-left {
    position: absolute;
    top: 38%;
    left: -120px;
    width: 380px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ff6a1a, transparent);
    transform: rotate(18deg);
    filter: blur(1px);
    box-shadow: 0 0 20px #ff6a1a;
    pointer-events: none;
    opacity: 0.75;
}
.gi-ft-streak-right {
    position: absolute;
    top: 15%;
    right: -100px;
    width: 320px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ff6a1a, transparent);
    transform: rotate(-15deg);
    filter: blur(1px);
    box-shadow: 0 0 20px #ff6a1a;
    pointer-events: none;
    opacity: 0.7;
}

/* Floating Glass Badges */
.gi-floating-badge {
    position: absolute;
    width: 58px;
    height: 58px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    z-index: 1;
    pointer-events: none;
    animation: giFloat 6s ease-in-out infinite;
}
.gi-floating-badge--photo {
    left: 2%;
    top: 24%;
    background: rgba(14, 165, 233, 0.12);
    border: 1px solid rgba(56, 189, 248, 0.35);
    color: #38bdf8;
    box-shadow: 0 0 30px rgba(56, 189, 248, 0.25);
}
.gi-floating-badge--pen {
    right: 2%;
    top: 28%;
    background: rgba(168, 85, 247, 0.12);
    border: 1px solid rgba(168, 85, 247, 0.35);
    color: #c084fc;
    box-shadow: 0 0 30px rgba(168, 85, 247, 0.25);
    animation-delay: -3s;
}
@keyframes giFloat {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-14px) rotate(4deg); }
}

/* Container & 2-Col Grid */
.gi-ft-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1.08fr 0.92fr;
    gap: 4.5rem;
    align-items: start;
}

/* ==========================================================================
   LEFT COLUMN — HERO, FEATURES, BEFORE/AFTER, HOW IT WORKS
   ========================================================================== */
.gi-ft-pitch {
    display: flex;
    flex-direction: column;
}

/* Free Trial Pill Tag */
.gi-ft-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 106, 26, 0.08);
    border: 1px solid rgba(255, 106, 26, 0.5);
    color: #ff6a1a;
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    padding: 5px 15px;
    border-radius: 50px;
    margin-bottom: 1.4rem;
    width: fit-content;
    box-shadow: 0 0 16px rgba(255, 106, 26, 0.15);
}

/* Hero Title */
.gi-ft-pitch h1 {
    font-size: clamp(2.4rem, 4.2vw, 3.8rem);
    font-weight: 850;
    line-height: 1.1;
    margin: 0 0 1.25rem 0;
    letter-spacing: -0.025em;
    color: #ffffff;
}
.gi-ft-pitch h1 .gi-accent-cyan {
    color: var(--gi-ft-cyan);
    text-shadow: 0 0 30px rgba(56, 189, 248, 0.35);
}
.gi-ft-pitch h1 .gi-accent-orange {
    color: var(--gi-ft-orange);
    text-shadow: 0 0 30px rgba(255, 106, 26, 0.35);
}

.gi-ft-lead {
    font-size: 1.08rem;
    color: rgba(226, 232, 240, 0.82);
    line-height: 1.6;
    margin: 0 0 2.2rem 0;
    max-width: 580px;
}

/* 4 Feature Badges (2x2 Grid) */
.gi-ft-features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.15rem;
    margin-bottom: 2.75rem;
}
.gi-ft-feat-card {
    background: rgba(15, 23, 42, 0.55);
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: 18px;
    padding: 1.15rem 1.25rem;
    display: flex;
    align-items: flex-start;
    gap: 0.95rem;
    transition: transform 0.28s ease, border-color 0.28s ease, background 0.28s ease;
    backdrop-filter: blur(12px);
}
.gi-ft-feat-card:hover {
    transform: translateY(-4px);
    border-color: rgba(255, 255, 255, 0.18);
    background: rgba(15, 23, 42, 0.85);
}
.gi-ft-feat-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-ft-feat-icon svg {
    width: 20px;
    height: 20px;
}
.gi-ft-icon-blue {
    background: rgba(56, 189, 248, 0.12);
    border: 1px solid rgba(56, 189, 248, 0.3);
    color: #38bdf8;
    box-shadow: 0 0 14px rgba(56, 189, 248, 0.2);
}
.gi-ft-icon-green {
    background: rgba(16, 185, 129, 0.12);
    border: 1px solid rgba(16, 185, 129, 0.3);
    color: #10b981;
    box-shadow: 0 0 14px rgba(16, 185, 129, 0.2);
}
.gi-ft-icon-orange {
    background: rgba(255, 106, 26, 0.12);
    border: 1px solid rgba(255, 106, 26, 0.3);
    color: #ff6a1a;
    box-shadow: 0 0 14px rgba(255, 106, 26, 0.2);
}
.gi-ft-icon-purple {
    background: rgba(168, 85, 247, 0.12);
    border: 1px solid rgba(168, 85, 247, 0.3);
    color: #c084fc;
    box-shadow: 0 0 14px rgba(168, 85, 247, 0.2);
}
.gi-ft-feat-content h4 {
    font-size: 0.98rem;
    font-weight: 750;
    color: #ffffff;
    margin: 0 0 3px 0;
}
.gi-ft-feat-content p {
    font-size: 0.82rem;
    color: rgba(203, 213, 225, 0.68);
    margin: 0;
    line-height: 1.4;
}

/* ==========================================================================
   BEFORE & AFTER SNEAKER TRANSFORMATION SHOWCASE
   ========================================================================== */
.gi-ft-showcase-wrap {
    position: relative;
    background: linear-gradient(135deg, rgba(13, 23, 42, 0.45) 0%, rgba(9, 16, 30, 0.65) 100%);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 26px;
    padding: 2.25rem 2rem 2.5rem 2rem;
    margin-bottom: 3rem;
    backdrop-filter: blur(20px);
}
.gi-ft-cards-stage {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    position: relative;
}
.gi-ft-compare-card {
    position: relative;
    width: 240px;
    height: 190px;
    border-radius: 18px;
    overflow: hidden;
    background: #0f172a;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.12);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.gi-ft-card-before {
    transform: rotate(-5deg) translateY(6px);
}
.gi-ft-card-after {
    transform: rotate(4deg) translateY(-4px);
    background: #ffffff;
    border-color: rgba(42, 106, 238, 0.4);
    box-shadow: 0 24px 45px rgba(0, 0, 0, 0.7), 0 0 30px rgba(42, 106, 238, 0.25);
}
.gi-ft-compare-card:hover {
    transform: translateY(-8px) scale(1.03);
    z-index: 5;
}
.gi-ft-compare-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.gi-ft-card-pill {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 0.7rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 4px 12px;
    border-radius: 50px;
    z-index: 2;
}
.gi-pill-before {
    background: rgba(15, 23, 42, 0.85);
    color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.2);
}
.gi-pill-after {
    background: #2a6aee;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(42, 106, 238, 0.5);
}

/* Handwritten Connecting Arrow & Note */
.gi-ft-arrow-annotation {
    position: absolute;
    top: -24px;
    right: 18px;
    display: flex;
    flex-direction: column;
    align-items: center;
    pointer-events: none;
    z-index: 10;
}
.gi-ft-handwrite {
    font-family: 'Caveat', 'Patrick Hand', cursive, sans-serif;
    font-size: 1.25rem;
    color: #e2e8f0;
    line-height: 1.15;
    text-align: center;
    transform: rotate(6deg);
    text-shadow: 0 2px 8px rgba(0,0,0,0.8);
}
.gi-ft-curved-arrow {
    width: 60px;
    height: 38px;
    margin-top: 4px;
    color: var(--gi-ft-cyan);
    filter: drop-shadow(0 0 6px rgba(56, 189, 248, 0.5));
}

/* ==========================================================================
   HOW IT WORKS (3-STEP CONNECTED PROGRESSION)
   ========================================================================== */
.gi-ft-hiw {
    margin-bottom: 2.75rem;
}
.gi-ft-hiw-tag {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #ffffff;
    margin-bottom: 1.25rem;
}
.gi-ft-hiw-line {
    width: 22px;
    height: 3px;
    background: var(--gi-ft-orange);
    border-radius: 2px;
}
.gi-ft-hiw-steps {
    display: flex;
    align-items: center;
    gap: 0.85rem;
}
.gi-ft-hiw-step {
    flex: 1;
    background: rgba(13, 22, 38, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    padding: 1.25rem 1.1rem;
    display: flex;
    flex-direction: column;
    gap: 0.65rem;
    transition: transform 0.25s ease, border-color 0.25s ease;
}
.gi-ft-hiw-step:hover {
    transform: translateY(-4px);
    border-color: rgba(56, 189, 248, 0.35);
}
.gi-ft-step-top {
    display: flex;
    align-items: center;
    gap: 8px;
}
.gi-ft-step-num {
    width: 26px;
    height: 26px;
    border-radius: 50%;
    background: var(--gi-ft-blue);
    color: #ffffff;
    font-size: 0.78rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
}
.gi-ft-step-icon {
    color: var(--gi-ft-cyan);
}
.gi-ft-step-icon svg {
    width: 18px;
    height: 18px;
}
.gi-ft-step-title {
    font-size: 0.95rem;
    font-weight: 750;
    color: #ffffff;
    margin: 0;
}
.gi-ft-step-desc {
    font-size: 0.8rem;
    color: rgba(203, 213, 225, 0.65);
    margin: 0;
    line-height: 1.4;
}
.gi-ft-step-arrow {
    color: rgba(255, 255, 255, 0.35);
    font-size: 1.25rem;
    flex-shrink: 0;
}

/* ==========================================================================
   TRUST STATS BAR (4 METRICS)
   ========================================================================== */
.gi-ft-stats-bar {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    padding: 1.25rem 1.5rem;
    background: rgba(13, 22, 38, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 18px;
}
.gi-ft-stat-item {
    display: flex;
    align-items: center;
    gap: 10px;
}
.gi-ft-stat-item svg {
    width: 22px;
    height: 22px;
    flex-shrink: 0;
}
.gi-stat-blue svg { color: #38bdf8; }
.gi-stat-cyan svg { color: #06b6d4; }
.gi-stat-amber svg { color: #f59e0b; }
.gi-stat-green svg { color: #10b981; }
.gi-ft-stat-text h5 {
    font-size: 0.96rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0;
}
.gi-ft-stat-text span {
    font-size: 0.76rem;
    color: rgba(203, 213, 225, 0.65);
}

/* ==========================================================================
   RIGHT COLUMN — THE UPLOAD PORTAL GLASS CARD
   ========================================================================== */
.gi-ft-portal {
    background: linear-gradient(135deg, rgba(8, 16, 32, 0.94) 0%, rgba(12, 22, 40, 0.92) 100%);
    border: 1px solid var(--gi-ft-border-glow);
    border-radius: 30px;
    padding: 3rem 2.5rem;
    box-shadow: 
        0 0 50px rgba(255, 106, 26, 0.16),
        0 30px 80px rgba(0, 0, 0, 0.8),
        inset 0 1px 0 rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(35px);
    -webkit-backdrop-filter: blur(35px);
    position: relative;
    z-index: 10;
}

/* Portal Header */
.gi-ft-portal-header {
    display: flex;
    align-items: center;
    gap: 1.15rem;
    margin-bottom: 1.75rem;
}
.gi-ft-portal-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #2a6aee;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 0 20px rgba(42, 106, 238, 0.6);
}
.gi-ft-portal-icon svg {
    width: 24px;
    height: 24px;
}
.gi-ft-portal-title {
    font-size: 1.75rem;
    font-weight: 850;
    color: #ffffff;
    margin: 0 0 4px 0;
    letter-spacing: -0.02em;
}
.gi-ft-portal-desc {
    font-size: 0.86rem;
    color: rgba(226, 232, 240, 0.72);
    margin: 0;
    line-height: 1.45;
}

/* Drag & Drop Zone */
.gi-ft-dropzone {
    border: 2px dashed rgba(42, 106, 238, 0.45);
    background: rgba(7, 14, 28, 0.6);
    border-radius: 20px;
    padding: 2.2rem 1.5rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-bottom: 1.75rem;
    position: relative;
}
.gi-ft-dropzone:hover,
.gi-ft-dropzone.is-dragover {
    border-color: var(--gi-ft-cyan);
    background: rgba(56, 189, 248, 0.08);
    box-shadow: 0 0 25px rgba(56, 189, 248, 0.2);
}
.gi-ft-dropzone-cloud {
    width: 52px;
    height: 52px;
    color: var(--gi-ft-cyan);
    margin: 0 auto 0.75rem auto;
    filter: drop-shadow(0 0 12px rgba(56, 189, 248, 0.4));
}
.gi-ft-dropzone-cloud svg {
    width: 100%;
    height: 100%;
}
.gi-ft-dropzone h3 {
    font-size: 1.05rem;
    font-weight: 750;
    color: #ffffff;
    margin: 0 0 4px 0;
}
.gi-ft-dropzone p {
    font-size: 0.88rem;
    color: rgba(203, 213, 225, 0.8);
    margin: 0 0 0.65rem 0;
}
.gi-ft-browse-link {
    color: var(--gi-ft-cyan);
    font-weight: 700;
    text-decoration: underline;
}
.gi-ft-dropzone-meta {
    font-size: 0.76rem;
    color: rgba(148, 163, 184, 0.65);
}

/* Selected Files Live Tag List */
.gi-ft-files-preview {
    display: none;
    flex-direction: column;
    gap: 8px;
    margin-top: 1rem;
    text-align: left;
}
.gi-ft-file-chip {
    background: rgba(15, 23, 42, 0.85);
    border: 1px solid rgba(56, 189, 248, 0.35);
    border-radius: 10px;
    padding: 8px 12px;
    font-size: 0.82rem;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.gi-ft-file-chip span {
    display: flex;
    align-items: center;
    gap: 8px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.gi-ft-file-chip svg {
    color: #10b981;
    flex-shrink: 0;
}
.gi-ft-file-remove {
    background: none;
    border: none;
    color: #ef4444;
    cursor: pointer;
    font-size: 1.1rem;
    line-height: 1;
    padding: 0 4px;
}

/* Form Inputs Grid */
.gi-ft-form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.15rem;
    margin-bottom: 1.15rem;
}
.gi-ft-field-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.gi-ft-field-group.gi-full-col {
    grid-column: span 2;
}
.gi-ft-label {
    font-size: 0.74rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: rgba(226, 232, 240, 0.85);
}
.gi-ft-input,
.gi-ft-textarea {
    width: 100%;
    background: rgba(13, 22, 38, 0.75) !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    border-radius: 12px !important;
    padding: 0.95rem 1.15rem !important;
    color: #ffffff !important;
    font-size: 0.92rem !important;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif !important;
    transition: all 0.25s ease !important;
    box-sizing: border-box;
}
.gi-ft-input:focus,
.gi-ft-textarea:focus {
    background: rgba(15, 28, 50, 0.92) !important;
    border-color: var(--gi-ft-cyan) !important;
    outline: none !important;
    box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2) !important;
}
.gi-ft-input::placeholder,
.gi-ft-textarea::placeholder {
    color: rgba(255, 255, 255, 0.3) !important;
    font-size: 0.88rem;
}
.gi-ft-textarea {
    min-height: 110px;
    resize: vertical;
}

/* Phone Field with Flag */
.gi-ft-phone-wrap {
    display: flex;
    align-items: center;
    background: rgba(13, 22, 38, 0.75);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.25s ease;
}
.gi-ft-phone-wrap:focus-within {
    border-color: var(--gi-ft-cyan);
    box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
}
.gi-ft-country-flag {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 0.95rem 0.85rem 0.95rem 1.15rem;
    background: rgba(255, 255, 255, 0.04);
    border-right: 1px solid rgba(255, 255, 255, 0.08);
    font-size: 0.88rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.85);
    user-select: none;
}
.gi-ft-country-flag svg {
    width: 20px;
    height: 14px;
    border-radius: 2px;
}
.gi-ft-phone-wrap input {
    border: none !important;
    background: transparent !important;
    box-shadow: none !important;
    padding-left: 0.85rem !important;
}

/* Individual 3 Choose File Buttons */
.gi-ft-file-selectors {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-bottom: 1.15rem;
}
.gi-ft-file-row {
    display: flex;
    align-items: center;
    gap: 12px;
}
.gi-ft-btn-choose {
    background: rgba(15, 23, 42, 0.9);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 0.65rem 1.25rem;
    border-radius: 10px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 7px;
    transition: all 0.2s ease;
    flex-shrink: 0;
}
.gi-ft-btn-choose:hover {
    background: rgba(42, 106, 238, 0.25);
    border-color: var(--gi-ft-cyan);
}
.gi-ft-btn-choose svg {
    width: 15px;
    height: 15px;
}
.gi-ft-file-label {
    font-size: 0.84rem;
    color: rgba(203, 213, 225, 0.6);
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Submit Button */
.gi-ft-submit-btn {
    width: 100%;
    background: linear-gradient(135deg, var(--gi-ft-orange) 0%, #ea580c 100%);
    color: #ffffff;
    font-size: 1.05rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    padding: 1.15rem;
    border-radius: 14px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 10px 28px rgba(255, 106, 26, 0.45);
    transition: all 0.3s ease;
    margin-top: 1.4rem;
    margin-bottom: 1.1rem;
}
.gi-ft-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 36px rgba(255, 106, 26, 0.6);
}
.gi-ft-submit-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
    transform: none;
}

/* Security Guarantee Text */
.gi-ft-secure-note {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    font-size: 0.82rem;
    color: rgba(203, 213, 225, 0.65);
    text-align: center;
}
.gi-ft-secure-note svg {
    width: 14px;
    height: 14px;
    color: #10b981;
}

/* Response / Status Notifications */
.gi-ft-status-box {
    margin-top: 1rem;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    font-size: 0.9rem;
    display: none;
    line-height: 1.5;
}
.gi-ft-status-box.is-success {
    display: block;
    background: rgba(16, 185, 129, 0.12);
    border: 1px solid rgba(16, 185, 129, 0.4);
    color: #34d399;
}
.gi-ft-status-box.is-error {
    display: block;
    background: rgba(239, 68, 68, 0.12);
    border: 1px solid rgba(239, 68, 68, 0.4);
    color: #f87171;
}

/* WhatsApp Free Trial Enhancements */
.gi-ft-wa-card {
    display: flex;
    align-items: center;
    gap: 1.15rem;
    margin-top: 1.75rem;
    padding: 1.15rem 1.45rem;
    border-radius: 16px;
    background: rgba(6, 28, 20, 0.75);
    border: 1px solid rgba(37, 211, 102, 0.3);
    text-decoration: none;
    color: #ffffff;
    transition: all 0.28s cubic-bezier(0.16, 1, 0.3, 1);
    backdrop-filter: blur(16px);
}
.gi-ft-wa-card:hover {
    transform: translateY(-2px);
    border-color: rgba(37, 211, 102, 0.65);
    background: rgba(8, 38, 26, 0.9);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4), 0 0 24px rgba(37, 211, 102, 0.22);
    color: #ffffff;
}
.gi-ft-wa-icon {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: linear-gradient(135deg, #059669 0%, #25d366 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    flex-shrink: 0;
    box-shadow: 0 6px 18px rgba(37, 211, 102, 0.4);
}
.gi-ft-wa-icon svg {
    width: 24px;
    height: 24px;
}
.gi-ft-wa-content {
    flex: 1;
}
.gi-ft-wa-content h4 {
    font-size: 1rem;
    font-weight: 700;
    margin: 0;
    color: #ffffff;
}
.gi-ft-wa-content p {
    font-size: 0.84rem;
    color: rgba(226, 232, 240, 0.7);
    margin: 3px 0 0 0;
}
.gi-ft-wa-content p strong {
    color: #25d366;
}
.gi-ft-wa-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #25d366;
    background: rgba(37, 211, 102, 0.12);
    border: 1px solid rgba(37, 211, 102, 0.35);
    padding: 1px 7px;
    border-radius: 9999px;
}
.gi-ft-wa-pulse {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #25d366;
    box-shadow: 0 0 8px #25d366;
}
.gi-ft-wa-arrow {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
    font-weight: 700;
    color: #25d366;
    padding: 6px 12px;
    border-radius: 8px;
    background: rgba(37, 211, 102, 0.1);
    border: 1px solid rgba(37, 211, 102, 0.25);
    transition: all 0.2s ease;
}
.gi-ft-wa-card:hover .gi-ft-wa-arrow {
    background: #25d366;
    color: #060c18;
}
.gi-ft-wa-arrow svg {
    width: 14px;
    height: 14px;
}
.gi-ft-or-divider {
    display: flex;
    align-items: center;
    text-align: center;
    margin: 1.25rem 0 0.85rem 0;
    color: rgba(203, 213, 225, 0.45);
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.12em;
}
.gi-ft-or-divider::before,
.gi-ft-or-divider::after {
    content: '';
    flex: 1;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.gi-ft-or-divider span {
    padding: 0 10px;
}
.gi-ft-wa-btn-direct {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    width: 100%;
    padding: 0.85rem 1.25rem;
    border-radius: 12px;
    background: rgba(6, 28, 20, 0.85);
    border: 1px solid rgba(37, 211, 102, 0.4);
    color: #25d366;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 700;
    transition: all 0.25s ease;
}
.gi-ft-wa-btn-direct:hover {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border-color: #34d399;
    color: #ffffff;
    box-shadow: 0 8px 24px rgba(16, 185, 129, 0.35);
    transform: translateY(-1px);
}
.gi-ft-wa-btn-direct svg {
    width: 20px;
    height: 20px;
}

/* ==========================================================================
   RESPONSIVE LAYOUT
   ========================================================================== */
@media (max-width: 1024px) {
    .gi-ft-container {
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }
    .gi-floating-badge {
        display: none;
    }
    .gi-ft-cards-stage {
        gap: 1rem;
    }
    .gi-ft-compare-card {
        width: 190px;
        height: 150px;
    }
}
@media (max-width: 680px) {
    .gi-ft-wrapper {
        padding: calc(var(--gi-header-height, 78px) + 2rem) 0 5rem 0;
    }
    .gi-ft-features-grid {
        grid-template-columns: 1fr;
    }
    .gi-ft-cards-stage {
        flex-direction: column;
        gap: 1.25rem;
    }
    .gi-ft-arrow-annotation {
        display: none;
    }
    .gi-ft-compare-card {
        width: 100%;
        max-width: 260px;
        height: 180px;
        transform: none !important;
    }
    .gi-ft-hiw-steps {
        flex-direction: column;
        align-items: stretch;
    }
    .gi-ft-step-arrow {
        transform: rotate(90deg);
        text-align: center;
    }
    .gi-ft-stats-bar {
        grid-template-columns: repeat(2, 1fr);
    }
    .gi-ft-portal {
        padding: 2.2rem 1.5rem;
    }
    .gi-ft-form-grid {
        grid-template-columns: 1fr;
    }
    .gi-ft-field-group.gi-full-col {
        grid-column: span 1;
    }
}
</style>

<main class="gi-ft-wrapper">
    
    <!-- Background Decor Elements -->
    <div class="gi-ft-grid-overlay" aria-hidden="true"></div>
    <div class="gi-ft-streak-left" aria-hidden="true"></div>
    <div class="gi-ft-streak-right" aria-hidden="true"></div>

    <!-- Floating Cyan Glass Photo Badge -->
    <div class="gi-floating-badge gi-floating-badge--photo" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
    </div>

    <!-- Floating Purple Glass Pen Badge -->
    <div class="gi-floating-badge gi-floating-badge--pen" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26" height="26"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
    </div>

    <div class="gi-ft-container">
        
        <!-- LEFT COLUMN: Pitch, Features, Sneaker Before/After, How It Works, Stats -->
        <div class="gi-ft-pitch" data-gi-animate="fade-up">
            
            <!-- Orange Tag -->
            <div class="gi-ft-pill">FREE TRIAL</div>

            <!-- Main Heading with Cyan & Orange Highlight -->
            <h1>Prove It To Yourself.<br><span class="gi-accent-cyan">100%</span> <span class="gi-accent-orange">Free.</span></h1>
            
            <p class="gi-ft-lead">Graphics Innovator is offering you up to 3 FREE trial images. Evaluate our enterprise-level quality, fast turnaround and reliable delivery — with absolutely zero risk or commitment.</p>

            <!-- 4 Feature Badges (2x2 Grid) -->
            <div class="gi-ft-features-grid">
                
                <!-- Badge 1: 12-Hour Turnaround -->
                <div class="gi-ft-feat-card">
                    <div class="gi-ft-feat-icon gi-ft-icon-blue">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <div class="gi-ft-feat-content">
                        <h4>12-Hour Turnaround</h4>
                        <p>See our real speed and quality.</p>
                    </div>
                </div>

                <!-- Badge 2: Strict NDA -->
                <div class="gi-ft-feat-card">
                    <div class="gi-ft-feat-icon gi-ft-icon-green">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="gi-ft-feat-content">
                        <h4>Strict NDA</h4>
                        <p>Your product images are always protected.</p>
                    </div>
                </div>

                <!-- Badge 3: Hand-Drawn Paths -->
                <div class="gi-ft-feat-card">
                    <div class="gi-ft-feat-icon gi-ft-icon-orange">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div class="gi-ft-feat-content">
                        <h4>Hand-Drawn Paths</h4>
                        <p>Perfect edges, no shortcuts.</p>
                    </div>
                </div>

                <!-- Badge 4: Enterprise Quality -->
                <div class="gi-ft-feat-card">
                    <div class="gi-ft-feat-icon gi-ft-icon-purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="6 3 18 3 22 9 12 22 2 9 6 3"></polygon></svg>
                    </div>
                    <div class="gi-ft-feat-content">
                        <h4>Enterprise Quality</h4>
                        <p>Same standards we use for all clients.</p>
                    </div>
                </div>

            </div>

            <!-- Before & After Sneaker Transformation Card -->
            <div class="gi-ft-showcase-wrap">
                <div class="gi-ft-cards-stage">
                    
                    <!-- Left: Before Card -->
                    <div class="gi-ft-compare-card gi-ft-card-before">
                        <span class="gi-ft-card-pill gi-pill-before">Before</span>
                        <img src="<?php echo esc_url( $shoe_before ); ?>" alt="Unedited raw product image with rough background" loading="lazy">
                    </div>

                    <!-- Handwritten Annotation & Curved Arrow -->
                    <div class="gi-ft-arrow-annotation">
                        <div class="gi-ft-handwrite">Same Product<br>Better Result</div>
                        <svg class="gi-ft-curved-arrow" viewBox="0 0 60 40" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 8 C 30 5, 45 15, 48 30"></path>
                            <polyline points="40 26 48 32 54 24"></polyline>
                        </svg>
                    </div>

                    <!-- Right: After Card -->
                    <div class="gi-ft-compare-card gi-ft-card-after">
                        <span class="gi-ft-card-pill gi-pill-after">After</span>
                        <img src="<?php echo esc_url( $shoe_after ); ?>" alt="Retouched product image with pure white background and natural drop shadow" loading="lazy">
                    </div>

                </div>
            </div>

            <!-- How It Works (3 Steps) -->
            <div class="gi-ft-hiw">
                <div class="gi-ft-hiw-tag">
                    <span class="gi-ft-hiw-line"></span> HOW IT WORKS
                </div>
                <div class="gi-ft-hiw-steps">
                    
                    <!-- Step 1 -->
                    <div class="gi-ft-hiw-step">
                        <div class="gi-ft-step-top">
                            <span class="gi-ft-step-num">1</span>
                            <span class="gi-ft-step-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                            </span>
                        </div>
                        <h4 class="gi-ft-step-title">Upload Images</h4>
                        <p class="gi-ft-step-desc">Send up to 3 images (Max 20MB each).</p>
                    </div>

                    <div class="gi-ft-step-arrow">&rarr;</div>

                    <!-- Step 2 -->
                    <div class="gi-ft-hiw-step">
                        <div class="gi-ft-step-top">
                            <span class="gi-ft-step-num" style="background:#0284c7;">2</span>
                            <span class="gi-ft-step-icon" style="color:#38bdf8;">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            </span>
                        </div>
                        <h4 class="gi-ft-step-title">Our Experts Edit</h4>
                        <p class="gi-ft-step-desc">We manually edit with precision and care.</p>
                    </div>

                    <div class="gi-ft-step-arrow">&rarr;</div>

                    <!-- Step 3 -->
                    <div class="gi-ft-hiw-step">
                        <div class="gi-ft-step-top">
                            <span class="gi-ft-step-num">3</span>
                            <span class="gi-ft-step-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                            </span>
                        </div>
                        <h4 class="gi-ft-step-title">Get Your Results</h4>
                        <p class="gi-ft-step-desc">Receive high-quality edited images, free.</p>
                    </div>

                </div>
            </div>

            <!-- Trust Stats Bar -->
            <div class="gi-ft-stats-bar">
                <div class="gi-ft-stat-item gi-stat-blue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <div class="gi-ft-stat-text">
                        <h5>5,000+</h5>
                        <span>Happy Clients</span>
                    </div>
                </div>

                <div class="gi-ft-stat-item gi-stat-cyan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <div class="gi-ft-stat-text">
                        <h5>12 Hours</h5>
                        <span>Average Delivery</span>
                    </div>
                </div>

                <div class="gi-ft-stat-item gi-stat-amber">
                    <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <div class="gi-ft-stat-text">
                        <h5>99%</h5>
                        <span>Client Satisfaction</span>
                    </div>
                </div>

                <div class="gi-ft-stat-item gi-stat-green">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <div class="gi-ft-stat-text">
                        <h5>100%</h5>
                        <span>Data Privacy</span>
                    </div>
                </div>
            </div>

            <!-- WhatsApp Free Trial Direct Consultation Card -->
            <a href="https://wa.me/8801714516662?text=Hi%20Graphics%20Innovator,%20I%20would%20like%20to%20request%20a%20Free%20Trial" target="_blank" rel="noopener noreferrer" class="gi-ft-wa-card" title="Chat on WhatsApp (+880 1714 516 662)">
                <div class="gi-ft-wa-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.031 2C6.495 2 2 6.494 2 12.029c0 1.97.57 3.81 1.558 5.37L2 22l4.823-1.528A9.99 9.99 0 0 0 12.031 22C17.567 22 22 17.506 22 12.03 22 6.494 17.566 2 12.031 2zm5.797 14.18c-.244.686-1.22 1.258-1.748 1.334-.48.068-1.077.103-3.155-.758-2.658-1.101-4.364-3.799-4.498-3.978-.13-.178-1.075-1.43-1.075-2.727 0-1.298.679-1.936.92-2.195.242-.259.529-.323.705-.323.176 0 .353.003.508.01.164.009.385-.062.602.46.223.535.759 1.85.826 1.984.067.135.112.293.023.472-.09.178-.134.29-.267.447-.134.157-.28.35-.401.47-.134.133-.274.278-.118.546.156.267.693 1.144 1.488 1.852 1.023.91 1.886 1.192 2.153 1.325.268.134.424.112.58-.067.157-.178.67-.78 848-1.048.178-.268.356-.223.593-.134.238.089 1.512.713 1.77.842.259.13.432.193.495.305.064.111.064.646-.18 1.332z"/>
                    </svg>
                </div>
                <div class="gi-ft-wa-content">
                    <div style="display:flex; align-items:center; gap:8px;">
                        <h4>Prefer to Chat on WhatsApp?</h4>
                        <span class="gi-ft-wa-badge"><span class="gi-ft-wa-pulse"></span>Online</span>
                    </div>
                    <p>Send trial images or ask questions directly: <strong>+880 1714 516 662</strong></p>
                </div>
                <div class="gi-ft-wa-arrow" aria-hidden="true">
                    <span>Chat Now</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>

        </div>

        <!-- RIGHT COLUMN: THE UPLOAD PORTAL GLASS CARD -->
        <div class="gi-ft-portal" data-gi-animate="fade-up" data-gi-delay="100">
            
            <!-- Card Header -->
            <div class="gi-ft-portal-header">
                <div class="gi-ft-portal-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                </div>
                <div>
                    <h2 class="gi-ft-portal-title">Upload Your Images</h2>
                    <p class="gi-ft-portal-desc">Send up to 3 images (Max 20MB). For larger batches, paste a link in the instructions.</p>
                </div>
            </div>

            <!-- Native CF7 Integration Container -->
            <div class="wpcf7" id="wpcf7-f910-o1" lang="en-US" dir="ltr">
                <form action="<?php echo esc_url( home_url('/free-trial/#wpcf7-f910-o1') ); ?>" method="post" class="wpcf7-form init" aria-label="Contact form" enctype="multipart/form-data" novalidate="novalidate" data-status="init" id="gi-free-trial-form">
                    
                    <fieldset class="hidden-fields-container" style="display:none;">
                        <input type="hidden" name="_wpcf7" value="910" />
                        <input type="hidden" name="_wpcf7_version" value="6.1.6" />
                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f910-o1" />
                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                    </fieldset>

                    <!-- Interactive Drag & Drop Box -->
                    <div class="gi-ft-dropzone" id="gi-dropzone">
                        <input type="file" id="gi-master-file-picker" multiple accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.zip" style="display:none;">
                        <div class="gi-ft-dropzone-cloud">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path><polyline points="12 12 12 16"></polyline><polyline points="9 13 12 10 15 13"></polyline></svg>
                        </div>
                        <h3>Drag &amp; Drop Your Images Here</h3>
                        <p>or <span class="gi-ft-browse-link">click to browse</span></p>
                        <div class="gi-ft-dropzone-meta">Supported formats: JPG, JPEG, PNG, WebP (Max 20MB each)</div>
                        <div class="gi-ft-dropzone-meta" style="margin-top:2px;">You can upload up to 3 images</div>

                        <!-- Live File Preview Chips -->
                        <div class="gi-ft-files-preview" id="gi-files-preview"></div>
                    </div>

                    <!-- Form Inputs (2-Column Grid) -->
                    <div class="gi-ft-form-grid">
                        
                        <!-- Name Field -->
                        <div class="gi-ft-field-group">
                            <label class="gi-ft-label" for="gi-name">NAME*</label>
                            <span class="wpcf7-form-control-wrap" data-name="text-870">
                                <input type="text" name="text-870" id="gi-name" class="gi-ft-input wpcf7-text wpcf7-validates-as-required" placeholder="Your full name" required aria-required="true">
                            </span>
                        </div>

                        <!-- Email Field -->
                        <div class="gi-ft-field-group">
                            <label class="gi-ft-label" for="gi-email">EMAIL*</label>
                            <span class="wpcf7-form-control-wrap" data-name="email-480">
                                <input type="email" name="email-480" id="gi-email" class="gi-ft-input wpcf7-email wpcf7-validates-as-required" placeholder="you@example.com" required aria-required="true">
                            </span>
                        </div>

                        <!-- Company Field -->
                        <div class="gi-ft-field-group">
                            <label class="gi-ft-label" for="gi-company">COMPANY</label>
                            <span class="wpcf7-form-control-wrap" data-name="text-657">
                                <input type="text" name="text-657" id="gi-company" class="gi-ft-input wpcf7-text" placeholder="Company name (optional)">
                            </span>
                        </div>

                        <!-- Website Field -->
                        <div class="gi-ft-field-group">
                            <label class="gi-ft-label" for="gi-website">WEBSITE</label>
                            <span class="wpcf7-form-control-wrap" data-name="url-409">
                                <input type="text" name="url-409" id="gi-website" class="gi-ft-input wpcf7-url" placeholder="yourwebsite.com (optional)">
                            </span>
                        </div>

                        <!-- Phone Field with BD Flag -->
                        <div class="gi-ft-field-group">
                            <label class="gi-ft-label" for="gi-phone">PHONE</label>
                            <div class="gi-ft-phone-wrap">
                                <div class="gi-ft-country-flag" title="Bangladesh (+880)">
                                    <svg viewBox="0 0 20 14"><rect width="20" height="14" fill="#006a4e"/><circle cx="9" cy="7" r="4.2" fill="#f42a41"/></svg>
                                    <span>+880</span>
                                </div>
                                <span class="wpcf7-form-control-wrap" data-name="tel-391" style="flex:1;">
                                    <input type="tel" name="tel-391" id="gi-phone" class="gi-ft-input wpcf7-tel" placeholder="1714 52545">
                                </span>
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div class="gi-ft-field-group">
                            <label class="gi-ft-label" for="gi-address">Address</label>
                            <span class="wpcf7-form-control-wrap" data-name="text-658">
                                <input type="text" name="text-658" id="gi-address" class="gi-ft-input wpcf7-text" placeholder="Your address (optional)">
                            </span>
                        </div>

                    </div>

                    <!-- 3 Individual Choose File Rows -->
                    <div class="gi-ft-file-selectors">
                        
                        <!-- File 1 (Required) -->
                        <div class="gi-ft-file-row">
                            <button type="button" class="gi-ft-btn-choose" data-target="native-file-1">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                <span>Choose File</span>
                            </button>
                            <span class="gi-ft-file-label" id="file-label-1">No file chosen</span>
                            <span class="wpcf7-form-control-wrap" data-name="file-244" style="display:none;">
                                <input type="file" name="file-244" id="native-file-1" class="wpcf7-file wpcf7-validates-as-required" accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.zip" required aria-required="true">
                            </span>
                        </div>

                        <!-- File 2 (Optional) -->
                        <div class="gi-ft-file-row">
                            <button type="button" class="gi-ft-btn-choose" data-target="native-file-2">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                <span>Choose File</span>
                            </button>
                            <span class="gi-ft-file-label" id="file-label-2">No file chosen</span>
                            <span class="wpcf7-form-control-wrap" data-name="file-245" style="display:none;">
                                <input type="file" name="file-245" id="native-file-2" class="wpcf7-file" accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.zip">
                            </span>
                        </div>

                        <!-- File 3 (Optional) -->
                        <div class="gi-ft-file-row">
                            <button type="button" class="gi-ft-btn-choose" data-target="native-file-3">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                <span>Choose File</span>
                            </button>
                            <span class="gi-ft-file-label" id="file-label-3">No file chosen</span>
                            <span class="wpcf7-form-control-wrap" data-name="file-246" style="display:none;">
                                <input type="file" name="file-246" id="native-file-3" class="wpcf7-file" accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.zip">
                            </span>
                        </div>

                    </div>

                    <!-- Jobs Instruction Field -->
                    <div class="gi-ft-field-group" style="margin-top:0.5rem;">
                        <label class="gi-ft-label" for="gi-instructions">Jobs Instruction*</label>
                        <span class="wpcf7-form-control-wrap" data-name="textarea-431">
                            <textarea name="textarea-431" id="gi-instructions" class="gi-ft-textarea wpcf7-textarea wpcf7-validates-as-required" placeholder="Tell us what you need. (e.g. background removal, shadow, color correction, retouching, etc.)" required aria-required="true"></textarea>
                        </span>
                    </div>

                    <!-- Glowing Submit Button -->
                    <button type="submit" class="gi-ft-submit-btn" id="gi-submit-btn">
                        <span>SUBMIT YOUR FREE TRIAL</span>
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>

                    <!-- Trust Assurance Note -->
                    <div class="gi-ft-secure-note">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <span>Your information is 100% secure and will never be shared.</span>
                    </div>

                    <!-- Direct WhatsApp Alternative Option -->
                    <div class="gi-ft-or-divider">
                        <span>OR SEND VIA WHATSAPP</span>
                    </div>
                    <a href="https://wa.me/8801714516662?text=Hi%20Graphics%20Innovator,%20I%20would%20like%20to%20send%20images%20for%20a%20Free%20Trial" target="_blank" rel="noopener noreferrer" class="gi-ft-wa-btn-direct" title="Chat on WhatsApp (+880 1714 516 662)">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.031 2C6.495 2 2 6.494 2 12.029c0 1.97.57 3.81 1.558 5.37L2 22l4.823-1.528A9.99 9.99 0 0 0 12.031 22C17.567 22 22 17.506 22 12.03 22 6.494 17.566 2 12.031 2zm5.797 14.18c-.244.686-1.22 1.258-1.748 1.334-.48.068-1.077.103-3.155-.758-2.658-1.101-4.364-3.799-4.498-3.978-.13-.178-1.075-1.43-1.075-2.727 0-1.298.679-1.936.92-2.195.242-.259.529-.323.705-.323.176 0 .353.003.508.01.164.009.385-.062.602.46.223.535.759 1.85.826 1.984.067.135.112.293.023.472-.09.178-.134.29-.267.447-.134.157-.28.35-.401.47-.134.133-.274.278-.118.546.156.267.693 1.144 1.488 1.852 1.023.91 1.886 1.192 2.153 1.325.268.134.424.112.58-.067.157-.178.67-.78 848-1.048.178-.268.356-.223.593-.134.238.089 1.512.713 1.77.842.259.13.432.193.495.305.064.111.064.646-.18 1.332z"/>
                        </svg>
                        <span>Chat &amp; Send Images via WhatsApp (+880 1714 516 662)</span>
                    </a>

                    <!-- CF7 Response / Notification Container -->
                    <div class="wpcf7-response-output gi-ft-status-box" aria-hidden="true"></div>

                </form>
            </div>

        </div>

    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var dropzone = document.getElementById('gi-dropzone');
    var masterPicker = document.getElementById('gi-master-file-picker');
    var previewContainer = document.getElementById('gi-files-preview');
    var submitBtn = document.getElementById('gi-submit-btn');
    var form = document.getElementById('gi-free-trial-form');

    var nativeInputs = [
        document.getElementById('native-file-1'),
        document.getElementById('native-file-2'),
        document.getElementById('native-file-3')
    ];
    var labels = [
        document.getElementById('file-label-1'),
        document.getElementById('file-label-2'),
        document.getElementById('file-label-3')
    ];

    var selectedFiles = [];

    // Helper: format bytes
    function formatBytes(bytes) {
        if (!bytes || bytes === 0) return '0 B';
        var k = 1024;
        var sizes = ['B', 'KB', 'MB', 'GB'];
        var i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    }

    // Sync selectedFiles array with CF7 inputs and UI
    function syncFiles() {
        for (var i = 0; i < 3; i++) {
            var dt = new DataTransfer();
            if (selectedFiles[i]) {
                dt.items.add(selectedFiles[i]);
                labels[i].textContent = selectedFiles[i].name + ' (' + formatBytes(selectedFiles[i].size) + ')';
                labels[i].style.color = '#38bdf8';
            } else {
                labels[i].textContent = 'No file chosen';
                labels[i].style.color = 'rgba(203, 213, 225, 0.6)';
            }
            if (nativeInputs[i]) {
                nativeInputs[i].files = dt.files;
            }
        }

        // Render preview chips inside dropzone
        previewContainer.innerHTML = '';
        if (selectedFiles.length > 0) {
            previewContainer.style.display = 'flex';
            selectedFiles.forEach(function(file, idx) {
                var chip = document.createElement('div');
                chip.className = 'gi-ft-file-chip';
                chip.innerHTML = '<span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg> ' +
                    file.name + ' (' + formatBytes(file.size) + ')</span>' +
                    '<button type="button" class="gi-ft-file-remove" data-index="' + idx + '" title="Remove file">&times;</button>';
                previewContainer.appendChild(chip);
            });
        } else {
            previewContainer.style.display = 'none';
        }
    }

    // Handle Dropzone click
    if (dropzone && masterPicker) {
        dropzone.addEventListener('click', function(e) {
            if (e.target.closest('.gi-ft-file-remove')) return;
            masterPicker.click();
        });

        masterPicker.addEventListener('change', function(e) {
            var files = Array.from(e.target.files);
            addFiles(files);
            masterPicker.value = '';
        });

        // Drag & Drop events
        ['dragenter', 'dragover'].forEach(function(eventName) {
            dropzone.addEventListener(eventName, function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropzone.classList.add('is-dragover');
            });
        });
        ['dragleave', 'drop'].forEach(function(eventName) {
            dropzone.addEventListener(eventName, function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropzone.classList.remove('is-dragover');
            });
        });
        dropzone.addEventListener('drop', function(e) {
            if (e.dataTransfer && e.dataTransfer.files) {
                var files = Array.from(e.dataTransfer.files);
                addFiles(files);
            }
        });
    }

    function addFiles(files) {
        files.forEach(function(file) {
            if (selectedFiles.length < 3) {
                // Check max 20MB
                if (file.size > 20 * 1024 * 1024) {
                    alert('File "' + file.name + '" exceeds the 20MB limit.');
                    return;
                }
                selectedFiles.push(file);
            }
        });
        syncFiles();
    }

    // Handle individual Choose File buttons
    document.querySelectorAll('.gi-ft-btn-choose').forEach(function(btn, index) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (nativeInputs[index]) {
                nativeInputs[index].click();
            }
        });
    });

    nativeInputs.forEach(function(input, index) {
        if (input) {
            input.addEventListener('change', function() {
                if (input.files && input.files[0]) {
                    selectedFiles[index] = input.files[0];
                } else {
                    selectedFiles.splice(index, 1);
                }
                syncFiles();
            });
        }
    });

    // Remove single file
    previewContainer.addEventListener('click', function(e) {
        var removeBtn = e.target.closest('.gi-ft-file-remove');
        if (removeBtn) {
            e.stopPropagation();
            var idx = parseInt(removeBtn.getAttribute('data-index'), 10);
            if (!isNaN(idx)) {
                selectedFiles.splice(idx, 1);
                syncFiles();
            }
        }
    });

    // Form submission feedback
    if (form) {
        form.addEventListener('submit', function() {
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Uploading &amp; Submitting...</span> <svg class="gi-spin" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle><path d="M12 2a10 10 0 0 1 10 10"></path></svg>';
            }
        });
    }

    // CF7 events
    document.addEventListener('wpcf7mailsent', function() {
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>SUBMIT YOUR FREE TRIAL</span> &rarr;';
        }
        var status = document.querySelector('.wpcf7-response-output');
        if (status) {
            status.className = 'wpcf7-response-output gi-ft-status-box is-success';
        }
        selectedFiles = [];
        syncFiles();
    });

    document.addEventListener('wpcf7invalid', function() {
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>SUBMIT YOUR FREE TRIAL</span> &rarr;';
        }
        var status = document.querySelector('.wpcf7-response-output');
        if (status) {
            status.className = 'wpcf7-response-output gi-ft-status-box is-error';
        }
    });

    document.addEventListener('wpcf7mailfailed', function() {
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>SUBMIT YOUR FREE TRIAL</span> &rarr;';
        }
        var status = document.querySelector('.wpcf7-response-output');
        if (status) {
            status.className = 'wpcf7-response-output gi-ft-status-box is-error';
        }
    });
});
</script>

<?php get_footer(); ?>
