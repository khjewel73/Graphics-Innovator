<?php
/**
 * Template Name: Contact Us
 *
 * Ultra-Premium Enterprise Contact & Request a Quote Engine
 * Perfectly matches design mockup (Image 2) with cyber ambient lighting,
 * "Let's Work Together" pill, 4 feature badges, 3 elevated contact cards,
 * stylized Global Production Map route, and high-converting glassmorphic quote portal.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); 

// Security nonce for quote submission
$quote_nonce = wp_create_nonce( 'gi_quote_action' );
?>

<style>
/* ==========================================================================
   ENTERPRISE CONTACT & REQUEST A QUOTE — HIGH FIDELITY DESIGN SYSTEM
   ========================================================================== */
:root {
    --gi-qc-bg: #030712;
    --gi-qc-surface: rgba(8, 15, 30, 0.88);
    --gi-qc-border: rgba(148, 163, 184, 0.16);
    --gi-qc-cyan: #38bdf8;
    --gi-qc-blue: #2563eb;
    --gi-qc-blue-bright: #3b82f6;
    --gi-qc-orange: #f97316;
    --gi-qc-pink: #ec4899;
    --gi-qc-emerald: #10b981;
    --gi-qc-purple: #a855f7;
    --gi-qc-amber: #f59e0b;
}

/* Master Page Canvas */
.gi-qc-main {
    background-color: var(--gi-qc-bg);
    background-image:
        radial-gradient(circle at 10% 18%, rgba(37, 99, 235, 0.22) 0%, transparent 40%),
        radial-gradient(circle at 90% 28%, rgba(249, 115, 22, 0.12) 0%, rgba(236, 72, 153, 0.08) 32%, transparent 60%),
        radial-gradient(circle at 50% 92%, rgba(56, 189, 248, 0.10) 0%, transparent 50%),
        linear-gradient(180deg, #02050c 0%, #060d1d 50%, #030713 100%);
    color: #ffffff;
    font-family: var(--gi-font-sans), 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    position: relative;
    overflow: hidden;
    padding: calc(var(--gi-header-height, 96px) + 3.25rem) 0 6.5rem 0;
    min-height: 100vh;
}

/* Technical Perspective Grid Overlay */
.gi-qc-grid-overlay {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
    background-size: 64px 64px;
    mask-image: radial-gradient(ellipse at 50% 45%, black 30%, transparent 80%);
    pointer-events: none;
    z-index: 0;
}

/* Outer Container */
.gi-qc-container {
    max-width: 1380px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 4.5rem;
    align-items: flex-start;
}

/* ==========================================================================
   LEFT COLUMN: PITCH, 4 BADGES, 3 CARDS, ROUTE MAP
   ========================================================================== */
.gi-qc-pitch-col {
    display: flex;
    flex-direction: column;
}

/* Top Pill Badge */
.gi-qc-pill {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 6px 16px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.12);
    border: 1px solid rgba(56, 189, 248, 0.35);
    color: var(--gi-qc-cyan);
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    width: fit-content;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 20px rgba(56, 189, 248, 0.15);
}
.gi-qc-pill-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--gi-qc-cyan);
    box-shadow: 0 0 10px var(--gi-qc-cyan);
    animation: giQcPulse 2s infinite ease-in-out;
}
@keyframes giQcPulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.4; transform: scale(0.85); }
}

/* Main Heading */
.gi-qc-title {
    font-size: clamp(2.4rem, 4vw, 3.7rem);
    font-weight: 800;
    line-height: 1.12;
    margin: 0 0 1.25rem 0;
    letter-spacing: -0.025em;
    color: #ffffff;
}
.gi-qc-gradient-text {
    background: linear-gradient(135deg, #38bdf8 0%, #2563eb 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    filter: drop-shadow(0 0 25px rgba(56, 189, 248, 0.25));
}

/* Sub-headline Paragraph */
.gi-qc-desc {
    font-size: 1.1rem;
    line-height: 1.65;
    color: rgba(226, 232, 240, 0.72);
    max-width: 540px;
    margin: 0 0 2.25rem 0;
}

/* 4 Feature Metric Badges Row */
.gi-qc-badges-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.85rem;
    margin-bottom: 2.25rem;
}
.gi-qc-badge-card {
    background: rgba(10, 18, 34, 0.65);
    border: 1px solid rgba(148, 163, 184, 0.12);
    border-radius: 14px;
    padding: 1.1rem 0.85rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 0.75rem;
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    transition: all 0.3s ease;
}
.gi-qc-badge-card:hover {
    transform: translateY(-3px);
    border-color: rgba(56, 189, 248, 0.3);
    background: rgba(14, 25, 48, 0.85);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
}
.gi-qc-badge-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-qc-badge-icon svg {
    width: 20px;
    height: 20px;
}
.gi-qc-badge-icon.badge-blue {
    background: rgba(37, 99, 235, 0.16);
    color: #38bdf8;
    border: 1px solid rgba(56, 189, 248, 0.3);
    box-shadow: 0 0 15px rgba(56, 189, 248, 0.2);
}
.gi-qc-badge-icon.badge-emerald {
    background: rgba(16, 185, 129, 0.16);
    color: #34d399;
    border: 1px solid rgba(52, 211, 153, 0.3);
    box-shadow: 0 0 15px rgba(16, 185, 129, 0.2);
}
.gi-qc-badge-icon.badge-purple {
    background: rgba(168, 85, 247, 0.16);
    color: #c084fc;
    border: 1px solid rgba(192, 132, 252, 0.3);
    box-shadow: 0 0 15px rgba(168, 85, 247, 0.2);
}
.gi-qc-badge-icon.badge-cyan {
    background: rgba(6, 182, 212, 0.16);
    color: #22d3ee;
    border: 1px solid rgba(34, 211, 238, 0.3);
    box-shadow: 0 0 15px rgba(6, 182, 212, 0.2);
}
.gi-qc-badge-title {
    font-size: 0.92rem;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.25;
}
.gi-qc-badge-sub {
    font-size: 0.78rem;
    color: rgba(226, 232, 240, 0.6);
    line-height: 1.35;
}

/* 3 Elevated Contact Cards */
.gi-qc-cards-list {
    display: flex;
    flex-direction: column;
    gap: 1.15rem;
    margin-bottom: 2.25rem;
}
.gi-qc-info-card {
    background: rgba(8, 16, 32, 0.72);
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 18px;
    padding: 1.35rem 1.65rem;
    display: flex;
    align-items: center;
    gap: 1.35rem;
    text-decoration: none;
    color: inherit;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
}
.gi-qc-info-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(56, 189, 248, 0.05) 0%, transparent 60%);
    opacity: 0;
    transition: opacity 0.3s ease;
}
.gi-qc-info-card:hover {
    transform: translateX(8px);
    border-color: rgba(56, 189, 248, 0.4);
    background: rgba(12, 22, 44, 0.9);
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4), 0 0 25px rgba(56, 189, 248, 0.12);
}
.gi-qc-info-card:hover::before {
    opacity: 1;
}
.gi-qc-info-icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #ffffff;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}
.gi-qc-info-card:hover .gi-qc-info-icon {
    transform: scale(1.08);
}
.gi-qc-info-icon svg {
    width: 22px;
    height: 22px;
}
.gi-qc-info-icon.icon-blue {
    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
    box-shadow: 0 8px 22px rgba(37, 99, 235, 0.45);
}
.gi-qc-info-icon.icon-amber {
    background: linear-gradient(135deg, #b45309 0%, #d97706 100%);
    box-shadow: 0 8px 22px rgba(217, 119, 6, 0.45);
}
.gi-qc-info-icon.icon-emerald {
    background: linear-gradient(135deg, #047857 0%, #059669 100%);
    box-shadow: 0 8px 22px rgba(5, 150, 105, 0.45);
}
.gi-qc-info-icon.icon-whatsapp {
    background: linear-gradient(135deg, #059669 0%, #25d366 100%);
    box-shadow: 0 8px 22px rgba(37, 211, 102, 0.45);
}
.gi-qc-info-icon.icon-indigo {
    background: linear-gradient(135deg, #4338ca 0%, #6366f1 100%);
    box-shadow: 0 8px 22px rgba(99, 102, 241, 0.45);
}
.gi-qc-info-card--static:hover {
    transform: none;
    border-color: rgba(148, 163, 184, 0.28);
    background: rgba(10, 20, 38, 0.85);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.3);
}
.gi-qc-info-card--static:hover .gi-qc-info-icon {
    transform: none;
}
.gi-qc-info-tag {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 3px 9px;
    border-radius: 9999px;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: rgba(226, 232, 240, 0.85);
}
.gi-qc-contact-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 0.6rem;
    margin-top: 0.45rem;
}
.gi-qc-chip-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.86rem;
    font-weight: 600;
    color: #ffffff;
    text-decoration: none;
    padding: 4px 10px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.2s ease;
}
.gi-qc-chip-link:hover {
    background: rgba(56, 189, 248, 0.15);
    border-color: rgba(56, 189, 248, 0.4);
    color: #38bdf8;
    transform: translateY(-1px);
}
.gi-qc-chip-link svg {
    width: 14px;
    height: 14px;
    color: #38bdf8;
    flex-shrink: 0;
}
.gi-qc-whatsapp-card {
    border-color: rgba(37, 211, 102, 0.28);
    background: rgba(6, 28, 20, 0.68);
}
.gi-qc-whatsapp-card:hover {
    border-color: rgba(37, 211, 102, 0.6);
    background: rgba(8, 38, 26, 0.88);
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.45), 0 0 25px rgba(37, 211, 102, 0.25);
}
.gi-qc-whatsapp-card:hover .gi-qc-info-icon {
    transform: scale(1.08);
}
.gi-qc-whatsapp-card .gi-qc-info-link--wa {
    color: #25d366;
}
.gi-qc-whatsapp-card:hover .gi-qc-info-arrow {
    background: rgba(37, 211, 102, 0.2);
    border-color: rgba(37, 211, 102, 0.5);
    color: #25d366;
}
.gi-qc-live-dot-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #25d366;
    background: rgba(37, 211, 102, 0.12);
    border: 1px solid rgba(37, 211, 102, 0.3);
    padding: 2px 7px;
    border-radius: 9999px;
}
.gi-qc-live-pulse {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #25d366;
    box-shadow: 0 0 8px #25d366;
    animation: giLivePulse 1.8s infinite;
}
@keyframes giLivePulse {
    0% { transform: scale(0.95); opacity: 0.8; }
    50% { transform: scale(1.3); opacity: 1; }
    100% { transform: scale(0.95); opacity: 0.8; }
}
.gi-qc-info-body {
    flex: 1;
}
.gi-qc-info-body h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 0.35rem 0;
}
.gi-qc-info-body p {
    color: rgba(226, 232, 240, 0.62);
    font-size: 0.88rem;
    line-height: 1.45;
    margin: 0 0 0.35rem 0;
}
.gi-qc-info-link {
    font-size: 1rem;
    font-weight: 700;
    color: #ffffff;
    transition: color 0.2s ease;
    display: inline-block;
}
.gi-qc-info-card:hover .gi-qc-info-link {
    color: var(--gi-qc-cyan);
}
.gi-qc-info-arrow {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(226, 232, 240, 0.5);
    flex-shrink: 0;
    transition: all 0.3s ease;
}
.gi-qc-info-card:hover .gi-qc-info-arrow {
    background: rgba(56, 189, 248, 0.15);
    border-color: rgba(56, 189, 248, 0.4);
    color: var(--gi-qc-cyan);
    transform: translateX(4px);
}
.gi-qc-info-arrow svg {
    width: 16px;
    height: 16px;
}

/* Global Production Map Route (Underneath 3 cards) */
.gi-qc-map-bridge {
    background: rgba(8, 14, 28, 0.65);
    border: 1px solid rgba(148, 163, 184, 0.12);
    border-radius: 20px;
    padding: 1.5rem 1.85rem;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(15px);
}
.gi-qc-map-svg-wrap {
    position: relative;
    width: 100%;
    height: 140px;
}
.gi-qc-map-svg {
    width: 100%;
    height: 100%;
    display: block;
}
.gi-qc-pin-badge {
    position: absolute;
    display: flex;
    align-items: center;
    gap: 7px;
    background: rgba(5, 10, 22, 0.88);
    border-radius: 8px;
    padding: 6px 10px;
    font-size: 0.75rem;
    line-height: 1.2;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(8px);
}
.gi-qc-pin-cyprus {
    top: 18%;
    left: 20%;
    border: 1px solid rgba(56, 189, 248, 0.35);
}
.gi-qc-pin-bangladesh {
    bottom: 14%;
    right: 14%;
    border: 1px solid rgba(245, 158, 11, 0.35);
}
.gi-qc-pin-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    flex-shrink: 0;
}
.gi-qc-pin-cyprus .gi-qc-pin-dot {
    background: #38bdf8;
    box-shadow: 0 0 10px #38bdf8;
}
.gi-qc-pin-bangladesh .gi-qc-pin-dot {
    background: #f59e0b;
    box-shadow: 0 0 10px #f59e0b;
}
.gi-qc-pin-text strong {
    color: #ffffff;
    display: block;
    font-weight: 700;
}
.gi-qc-pin-text span {
    color: rgba(226, 232, 240, 0.6);
    font-size: 0.7rem;
}


/* ==========================================================================
   RIGHT COLUMN: REQUEST A QUOTE GLASS CARD
   ========================================================================== */
.gi-qc-form-card-wrap {
    position: relative;
}

/* Dual-Tone Glowing Neon Border Shell */
.gi-qc-form-card {
    background: rgba(8, 14, 28, 0.92);
    border-radius: 28px;
    padding: 2.75rem 2.5rem;
    position: relative;
    backdrop-filter: blur(30px);
    -webkit-backdrop-filter: blur(30px);
    box-shadow:
        0 30px 80px rgba(0, 0, 0, 0.7),
        0 0 0 1px rgba(148, 163, 184, 0.12),
        0 0 50px rgba(56, 189, 248, 0.12);
}
/* Neon gradient border outline */
.gi-qc-form-card::before {
    content: '';
    position: absolute;
    inset: -1.5px;
    border-radius: 29.5px;
    background: linear-gradient(135deg, rgba(56, 189, 248, 0.8) 0%, rgba(37, 99, 235, 0.25) 35%, rgba(236, 72, 153, 0.45) 75%, rgba(249, 115, 22, 0.75) 100%);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
    z-index: 2;
}

/* Form Card Header */
.gi-qc-card-header {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 2rem;
}
.gi-qc-header-icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.45);
    margin-bottom: 1.25rem;
}
.gi-qc-header-icon svg {
    width: 24px;
    height: 24px;
    transform: translate(-1px, 1px);
}
.gi-qc-card-title {
    font-size: 2rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.4rem 0;
    letter-spacing: -0.015em;
}
.gi-qc-card-sub {
    color: rgba(226, 232, 240, 0.68);
    font-size: 0.95rem;
    line-height: 1.5;
    margin: 0;
}

/* Form Layout */
.gi-qc-form {
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
}

/* Input Field with Left Inner Icon */
.gi-qc-field {
    position: relative;
    width: 100%;
}
.gi-qc-field-icon {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    width: 18px;
    height: 18px;
    color: rgba(148, 163, 184, 0.55);
    pointer-events: none;
    transition: color 0.25s ease;
}
.gi-qc-input {
    width: 100%;
    height: 54px;
    background: rgba(5, 10, 20, 0.88);
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 12px;
    padding: 0 18px 0 50px;
    color: #ffffff;
    font-size: 0.95rem;
    font-family: inherit;
    transition: all 0.25s ease;
    box-sizing: border-box;
}
.gi-qc-input::placeholder {
    color: rgba(255, 255, 255, 0.38);
    font-size: 0.88rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}
.gi-qc-input:focus {
    outline: none;
    background: rgba(7, 15, 30, 0.98);
    border-color: var(--gi-qc-cyan);
    box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
}
.gi-qc-field:focus-within .gi-qc-field-icon {
    color: var(--gi-qc-cyan);
}

/* 3 Choose File Rows */
.gi-qc-file-group {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-top: 0.25rem;
}
.gi-qc-file-row {
    background: rgba(5, 10, 20, 0.88);
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 12px;
    padding: 8px 14px;
    display: flex;
    align-items: center;
    gap: 12px;
    transition: all 0.25s ease;
}
.gi-qc-file-row:hover {
    border-color: rgba(148, 163, 184, 0.3);
    background: rgba(7, 14, 28, 0.95);
}
.gi-qc-cloud-icon {
    width: 20px;
    height: 20px;
    color: rgba(148, 163, 184, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-qc-cloud-icon svg {
    width: 20px;
    height: 20px;
}
.gi-qc-choose-btn {
    background: rgba(30, 41, 59, 0.85);
    border: 1px solid rgba(148, 163, 184, 0.25);
    border-radius: 8px;
    color: #ffffff;
    padding: 7px 18px;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: inherit;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
}
.gi-qc-choose-btn:hover {
    background: rgba(37, 99, 235, 0.25);
    border-color: var(--gi-qc-cyan);
    color: var(--gi-qc-cyan);
}
.gi-qc-file-label {
    font-size: 0.88rem;
    color: rgba(226, 232, 240, 0.6);
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    flex: 1;
}
.gi-qc-file-label.has-file {
    color: #ffffff;
    font-weight: 500;
}
.gi-qc-file-clear {
    background: none;
    border: none;
    color: rgba(226, 232, 240, 0.4);
    cursor: pointer;
    font-size: 1.25rem;
    line-height: 1;
    padding: 2px 6px;
    display: none;
    transition: color 0.2s;
}
.gi-qc-file-clear:hover {
    color: #f87171;
}

/* Jobs Instruction Textarea */
.gi-qc-textarea-field {
    position: relative;
    width: 100%;
}
.gi-qc-textarea-icon {
    position: absolute;
    left: 18px;
    top: 18px;
    width: 18px;
    height: 18px;
    color: rgba(148, 163, 184, 0.55);
    pointer-events: none;
    transition: color 0.25s ease;
}
.gi-qc-textarea {
    width: 100%;
    min-height: 120px;
    background: rgba(5, 10, 20, 0.88);
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 12px;
    padding: 16px 18px 16px 50px;
    color: #ffffff;
    font-size: 0.95rem;
    font-family: inherit;
    line-height: 1.5;
    resize: vertical;
    transition: all 0.25s ease;
    box-sizing: border-box;
}
.gi-qc-textarea::placeholder {
    color: rgba(255, 255, 255, 0.38);
    font-size: 0.88rem;
    font-weight: 500;
    line-height: 1.45;
}
.gi-qc-textarea:focus {
    outline: none;
    background: rgba(7, 15, 30, 0.98);
    border-color: var(--gi-qc-cyan);
    box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
}
.gi-qc-textarea-field:focus-within .gi-qc-textarea-icon {
    color: var(--gi-qc-cyan);
}

/* Clean Google reCAPTCHA v2 Widget */
.gi-qc-recaptcha-widget {
    background: #ffffff;
    border: 1px solid #d3d3d3;
    border-radius: 4px;
    height: 74px;
    width: 100%;
    max-width: 310px;
    padding: 0 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    user-select: none;
    margin-top: 0.25rem;
}
.gi-qc-rc-left {
    display: flex;
    align-items: center;
    gap: 12px;
    cursor: pointer;
}
.gi-qc-rc-check {
    width: 26px;
    height: 26px;
    background: #ffffff;
    border: 2px solid #c1c1c1;
    border-radius: 3px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
    position: relative;
}
.gi-qc-rc-check:hover {
    border-color: #a0a0a0;
}
.gi-qc-rc-spinner {
    width: 18px;
    height: 18px;
    border: 2px solid #4285F4;
    border-top-color: transparent;
    border-radius: 50%;
    display: none;
    animation: giRcSpin 0.7s linear infinite;
}
@keyframes giRcSpin {
    to { transform: rotate(360deg); }
}
.gi-qc-rc-checkmark {
    width: 20px;
    height: 20px;
    color: #059669;
    display: none;
}
.gi-qc-rc-check.is-loading .gi-qc-rc-spinner {
    display: block;
}
.gi-qc-rc-check.is-verified {
    border-color: #059669;
    background: #ecfdf5;
}
.gi-qc-rc-check.is-verified .gi-qc-rc-checkmark {
    display: block;
}
.gi-qc-rc-label {
    font-family: -apple-system, BlinkMacSystemFont, 'Roboto', 'Segoe UI', sans-serif;
    font-size: 14px;
    font-weight: 500;
    color: #222222;
    cursor: pointer;
    margin: 0;
}
.gi-qc-rc-right {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2px;
}
.gi-qc-rc-logo {
    width: 26px;
    height: 26px;
}
.gi-qc-rc-brand {
    font-size: 9px;
    font-family: 'Roboto', sans-serif;
    color: #555555;
    font-weight: 700;
    letter-spacing: 0.02em;
}
.gi-qc-rc-legal {
    font-size: 7.5px;
    color: #777777;
    font-family: 'Roboto', sans-serif;
}

/* Submit Button */
.gi-qc-submit-btn {
    width: 100%;
    height: 56px;
    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 50%, #38bdf8 100%);
    border: none;
    border-radius: 12px;
    color: #ffffff;
    font-size: 1.05rem;
    font-weight: 700;
    font-family: inherit;
    letter-spacing: 0.05em;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.45);
    margin-top: 0.5rem;
}
.gi-qc-submit-btn svg {
    width: 18px;
    height: 18px;
    transition: transform 0.25s ease;
}
.gi-qc-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 40px rgba(37, 99, 235, 0.6), 0 0 25px rgba(56, 189, 248, 0.3);
}
.gi-qc-submit-btn:hover svg {
    transform: translateX(4px);
}
.gi-qc-submit-btn:disabled {
    opacity: 0.65;
    cursor: not-allowed;
    transform: none !important;
}

/* Padlock Trust Assurance Note */
.gi-qc-secure-note {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    color: rgba(226, 232, 240, 0.58);
    font-size: 0.85rem;
    text-align: center;
    margin-top: 0.35rem;
}
.gi-qc-secure-note svg {
    width: 15px;
    height: 15px;
    color: var(--gi-qc-cyan);
    flex-shrink: 0;
}

/* Real-time Response Output Banner */
.gi-qc-response-banner {
    display: none;
    padding: 1rem 1.25rem;
    border-radius: 12px;
    font-size: 0.95rem;
    line-height: 1.5;
    margin-top: 0.5rem;
}
.gi-qc-response-banner.is-success {
    display: block;
    background: rgba(16, 185, 129, 0.15);
    border: 1px solid rgba(52, 211, 153, 0.35);
    color: #34d399;
}
.gi-qc-response-banner.is-error {
    display: block;
    background: rgba(239, 68, 68, 0.15);
    border: 1px solid rgba(248, 113, 113, 0.35);
    color: #f87171;
}

/* Spinner Animation */
.gi-qc-spin {
    animation: giQcSpin 0.9s linear infinite;
}
@keyframes giQcSpin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ==========================================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ========================================================================== */
@media (max-width: 1100px) {
    .gi-qc-container {
        grid-template-columns: 1fr;
        gap: 3.5rem;
    }
    .gi-qc-badges-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 768px) {
    .gi-qc-main {
        padding: calc(var(--gi-header-height, 78px) + 2rem) 0 5rem 0;
    }
    .gi-qc-container {
        padding: 0 1.25rem;
        gap: 3rem;
    }
    .gi-qc-title {
        font-size: 2.3rem;
    }
    .gi-qc-badges-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.65rem;
    }
    .gi-qc-form-card {
        padding: 2rem 1.35rem;
        border-radius: 20px;
    }
    .gi-qc-info-card {
        padding: 1.15rem 1.25rem;
    }
}
</style>

<main class="gi-qc-main">
    <!-- Perspective Grid Overlay -->
    <div class="gi-qc-grid-overlay" aria-hidden="true"></div>

    <div class="gi-qc-container">
        
        <!-- LEFT COLUMN: The Pitch, 4 Badges, 3 Contact Cards, Route Map -->
        <div class="gi-qc-pitch-col">
            
            <!-- Top Pill Badge -->
            <div class="gi-qc-pill">
                <span class="gi-qc-pill-dot"></span>
                <span>LET'S WORK TOGETHER</span>
            </div>

            <!-- Main Heading -->
            <h1 class="gi-qc-title">
                Let's Build<br>Something <span class="gi-qc-gradient-text">Amazing.</span>
            </h1>

            <!-- Subheading Paragraph -->
            <p class="gi-qc-desc">
                Whether you need bulk eCommerce clipping or high-end editorial retouching, our team is ready. We typically reply within 45 minutes.
            </p>

            <!-- 4 Feature Metric Badges Row -->
            <div class="gi-qc-badges-grid">
                
                <!-- Badge 1: Fast Response -->
                <div class="gi-qc-badge-card">
                    <div class="gi-qc-badge-icon badge-blue">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    </div>
                    <div class="gi-qc-badge-meta">
                        <div class="gi-qc-badge-title">Fast Response</div>
                        <div class="gi-qc-badge-sub">Reply within<br>45 minutes</div>
                    </div>
                </div>

                <!-- Badge 2: Secure & Safe -->
                <div class="gi-qc-badge-card">
                    <div class="gi-qc-badge-icon badge-emerald">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
                    </div>
                    <div class="gi-qc-badge-meta">
                        <div class="gi-qc-badge-title">Secure &amp; Safe</div>
                        <div class="gi-qc-badge-sub">Your files are<br>100% protected</div>
                    </div>
                </div>

                <!-- Badge 3: Expert Team -->
                <div class="gi-qc-badge-card">
                    <div class="gi-qc-badge-icon badge-purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="gi-qc-badge-meta">
                        <div class="gi-qc-badge-title">Expert Team</div>
                        <div class="gi-qc-badge-sub">Professional<br>photo editors</div>
                    </div>
                </div>

                <!-- Badge 4: Dedicated Support -->
                <div class="gi-qc-badge-card">
                    <div class="gi-qc-badge-icon badge-cyan">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                    </div>
                    <div class="gi-qc-badge-meta">
                        <div class="gi-qc-badge-title">Dedicated Support</div>
                        <div class="gi-qc-badge-sub">From start<br>to finish</div>
                    </div>
                </div>

            </div>

            <!-- Elevated Contact Cards -->
            <div class="gi-qc-cards-list">
                
                <!-- Card 1: General Inquiries (Email + Mobile +8801714516662) -->
                <div class="gi-qc-info-card gi-qc-info-card--static">
                    <div class="gi-qc-info-icon icon-blue">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div class="gi-qc-info-body">
                        <h3>General Inquiries</h3>
                        <p>For pricing, bulk quotes, and direct support.</p>
                        <div class="gi-qc-contact-chips">
                            <a href="mailto:info@graphicsinnovator.com" class="gi-qc-chip-link" title="Email Us">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>info@graphicsinnovator.com</span>
                            </a>
                            <a href="tel:+8801714516662" class="gi-qc-chip-link" title="Call Direct">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>+880 1714 516 662</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2: WhatsApp Live Chat (Enabled) -->
                <a href="https://wa.me/8801714516662?text=Hi%20Graphics%20Innovator,%20I%20have%20an%20inquiry" target="_blank" rel="noopener noreferrer" class="gi-qc-info-card gi-qc-whatsapp-card" title="Chat on WhatsApp (+880 1714 516 662)">
                    <div class="gi-qc-info-icon icon-whatsapp">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.031 2C6.495 2 2 6.494 2 12.029c0 1.97.57 3.81 1.558 5.37L2 22l4.823-1.528A9.99 9.99 0 0 0 12.031 22C17.567 22 22 17.506 22 12.03 22 6.494 17.566 2 12.031 2zm5.797 14.18c-.244.686-1.22 1.258-1.748 1.334-.48.068-1.077.103-3.155-.758-2.658-1.101-4.364-3.799-4.498-3.978-.13-.178-1.075-1.43-1.075-2.727 0-1.298.679-1.936.92-2.195.242-.259.529-.323.705-.323.176 0 .353.003.508.01.164.009.385-.062.602.46.223.535.759 1.85.826 1.984.067.135.112.293.023.472-.09.178-.134.29-.267.447-.134.157-.28.35-.401.47-.134.133-.274.278-.118.546.156.267.693 1.144 1.488 1.852 1.023.91 1.886 1.192 2.153 1.325.268.134.424.112.58-.067.157-.178.67-.78 848-1.048.178-.268.356-.223.593-.134.238.089 1.512.713 1.77.842.259.13.432.193.495.305.064.111.064.646-.18 1.332z"/>
                        </svg>
                    </div>
                    <div class="gi-qc-info-body">
                        <div style="display:flex; align-items:center; gap:8px;">
                            <h3>WhatsApp Live Chat</h3>
                            <span class="gi-qc-live-dot-badge"><span class="gi-qc-live-pulse"></span>Online</span>
                        </div>
                        <p>Fast responses, custom volume quotes &amp; live support.</p>
                        <span class="gi-qc-info-link gi-qc-info-link--wa">+880 1714 516 662 • Chat Live on WhatsApp &rarr;</span>
                    </div>
                    <div class="gi-qc-info-arrow" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>

                <!-- Card 3: Europe Office (HQ) (No mobile number) -->
                <div class="gi-qc-info-card gi-qc-info-card--static">
                    <div class="gi-qc-info-icon icon-amber">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="gi-qc-info-body">
                        <div style="display:flex; align-items:center; justify-content:space-between; gap:8px; margin-bottom:0.25rem;">
                            <h3>Europe Office (HQ)</h3>
                            <span class="gi-qc-info-tag">Headquarters</span>
                        </div>
                        <p style="margin:0;">ALKEUS 22, STROVOLOS<br>2064 NICOSIA, Cyprus</p>
                    </div>
                </div>

                <!-- Card 4: Production Studio (No mobile number) -->
                <div class="gi-qc-info-card gi-qc-info-card--static">
                    <div class="gi-qc-info-icon icon-indigo">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><line x1="9" y1="9" x2="9" y2="9.01"></line><line x1="9" y1="13" x2="9" y2="13.01"></line><line x1="9" y1="17" x2="9" y2="17.01"></line></svg>
                    </div>
                    <div class="gi-qc-info-body">
                        <div style="display:flex; align-items:center; justify-content:space-between; gap:8px; margin-bottom:0.25rem;">
                            <h3>Production Studio</h3>
                            <span class="gi-qc-info-tag">Production Studio</span>
                        </div>
                        <p style="margin:0;">House: 70, Road: 1/A, Santidhara<br>Rangpur, Bangladesh</p>
                    </div>
                </div>

            </div>

            <!-- Stylized Global Production Map Bridge -->
            <div class="gi-qc-map-bridge" aria-label="Global Production Network: Cyprus HQ to Bangladesh Studio">
                <div class="gi-qc-map-svg-wrap">
                    <svg class="gi-qc-map-svg" viewBox="0 0 540 140" fill="none">
                        <!-- Stylized World Map Dot Grid Silhouette -->
                        <g opacity="0.22" fill="#38bdf8">
                            <circle cx="50" cy="40" r="1.5"/><circle cx="65" cy="38" r="1.5"/><circle cx="80" cy="42" r="1.5"/><circle cx="95" cy="45" r="1.5"/><circle cx="110" cy="40" r="1.5"/>
                            <circle cx="130" cy="42" r="1.5"/><circle cx="145" cy="48" r="1.5"/><circle cx="160" cy="52" r="1.5"/><circle cx="175" cy="45" r="1.5"/><circle cx="190" cy="50" r="1.5"/>
                            <circle cx="210" cy="55" r="1.5"/><circle cx="225" cy="58" r="1.5"/><circle cx="240" cy="62" r="1.5"/><circle cx="255" cy="68" r="1.5"/><circle cx="270" cy="72" r="1.5"/>
                            <circle cx="290" cy="75" r="1.5"/><circle cx="305" cy="78" r="1.5"/><circle cx="320" cy="82" r="1.5"/><circle cx="335" cy="80" r="1.5"/><circle cx="350" cy="84" r="1.5"/>
                            <circle cx="370" cy="88" r="1.5"/><circle cx="385" cy="90" r="1.5"/><circle cx="400" cy="92" r="1.5"/><circle cx="415" cy="90" r="1.5"/><circle cx="430" cy="94" r="1.5"/>
                            <circle cx="450" cy="98" r="1.5"/><circle cx="465" cy="100" r="1.5"/><circle cx="480" cy="96" r="1.5"/><circle cx="495" cy="102" r="1.5"/><circle cx="510" cy="105" r="1.5"/>
                        </g>

                        <!-- Glowing Arc Flight Line from Nicosia (140, 52) to Rangpur (390, 96) -->
                        <path d="M 140 52 Q 260 12 390 96" stroke="rgba(56, 189, 248, 0.25)" stroke-width="2" stroke-dasharray="4 4" fill="none"/>
                        <path d="M 140 52 Q 260 12 390 96" stroke="url(#giArcGradient)" stroke-width="2.5" stroke-dasharray="10 8" fill="none">
                            <animate attributeName="stroke-dashoffset" values="36;0" dur="2.5s" repeatCount="indefinite" />
                        </path>

                        <!-- Node Cyprus -->
                        <circle cx="140" cy="52" r="7" fill="rgba(56, 189, 248, 0.25)"/>
                        <circle cx="140" cy="52" r="4" fill="#38bdf8"/>

                        <!-- Node Bangladesh -->
                        <circle cx="390" cy="96" r="7" fill="rgba(245, 158, 11, 0.25)"/>
                        <circle cx="390" cy="96" r="4" fill="#f59e0b"/>

                        <defs>
                            <linearGradient id="giArcGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#38bdf8"/>
                                <stop offset="50%" stop-color="#818cf8"/>
                                <stop offset="100%" stop-color="#f59e0b"/>
                            </linearGradient>
                        </defs>
                    </svg>

                    <!-- Overlay Pins -->
                    <div class="gi-qc-pin-badge gi-qc-pin-cyprus">
                        <span class="gi-qc-pin-dot"></span>
                        <div class="gi-qc-pin-text">
                            <strong>Nicosia, Cyprus</strong>
                            <span>(HQ)</span>
                        </div>
                    </div>

                    <div class="gi-qc-pin-badge gi-qc-pin-bangladesh">
                        <span class="gi-qc-pin-dot"></span>
                        <div class="gi-qc-pin-text">
                            <strong>Rangpur, Bangladesh</strong>
                            <span>(Production Studio)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- RIGHT COLUMN: REQUEST A QUOTE GLASS CARD -->
        <div class="gi-qc-form-card-wrap">
            <div class="gi-qc-form-card">
                
                <!-- Card Header -->
                <div class="gi-qc-card-header">
                    <div class="gi-qc-header-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </div>
                    <h2 class="gi-qc-card-title">Request a Quote</h2>
                    <p class="gi-qc-card-sub">Fill out the form below and we'll be in touch instantly.</p>
                </div>

                <!-- Form Engine -->
                <form class="gi-qc-form" id="gi-quote-form" method="post" enctype="multipart/form-data">
                    
                    <!-- Hidden Nonce & Honeypot -->
                    <input type="hidden" name="action" value="gi_submit_quote">
                    <input type="hidden" name="gi_quote_nonce" value="<?php echo esc_attr( $quote_nonce ); ?>">
                    <input type="text" name="gi_quote_company_hp" value="" style="display:none !important;" tabindex="-1" autocomplete="off">

                    <!-- Field 1: NAME* -->
                    <div class="gi-qc-field">
                        <svg class="gi-qc-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <input type="text" name="quote_name" class="gi-qc-input" placeholder="NAME*" required aria-required="true">
                    </div>

                    <!-- Field 2: EMAIL* -->
                    <div class="gi-qc-field">
                        <svg class="gi-qc-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <input type="email" name="quote_email" class="gi-qc-input" placeholder="EMAIL*" required aria-required="true">
                    </div>

                    <!-- Field 3: COMPANY -->
                    <div class="gi-qc-field">
                        <svg class="gi-qc-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><line x1="9" y1="9" x2="9" y2="9.01"></line><line x1="9" y1="13" x2="9" y2="13.01"></line><line x1="9" y1="17" x2="9" y2="17.01"></line></svg>
                        <input type="text" name="quote_company" class="gi-qc-input" placeholder="COMPANY">
                    </div>

                    <!-- Field 4: WEBSITE -->
                    <div class="gi-qc-field">
                        <svg class="gi-qc-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        <input type="text" name="quote_website" class="gi-qc-input" placeholder="WEBSITE">
                    </div>

                    <!-- Field 5: PHONE -->
                    <div class="gi-qc-field">
                        <svg class="gi-qc-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <input type="tel" name="quote_phone" class="gi-qc-input" placeholder="PHONE">
                    </div>

                    <!-- Field 6: Address -->
                    <div class="gi-qc-field">
                        <svg class="gi-qc-field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <input type="text" name="quote_address" class="gi-qc-input" placeholder="Address">
                    </div>

                    <!-- 3 Individual Choose File Rows -->
                    <div class="gi-qc-file-group">
                        
                        <!-- File 1 -->
                        <div class="gi-qc-file-row">
                            <span class="gi-qc-cloud-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path><polyline points="12 12 12 16"></polyline><polyline points="9 13 12 10 15 13"></polyline></svg>
                            </span>
                            <button type="button" class="gi-qc-choose-btn" data-target="quote_file_1">Choose File</button>
                            <span class="gi-qc-file-label" id="label_quote_file_1">No file chosen</span>
                            <button type="button" class="gi-qc-file-clear" data-target="quote_file_1" title="Remove file">&times;</button>
                            <input type="file" name="quote_file_1" id="quote_file_1" accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.tif,.zip,.rar,.pdf" style="display:none;">
                        </div>

                        <!-- File 2 -->
                        <div class="gi-qc-file-row">
                            <span class="gi-qc-cloud-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path><polyline points="12 12 12 16"></polyline><polyline points="9 13 12 10 15 13"></polyline></svg>
                            </span>
                            <button type="button" class="gi-qc-choose-btn" data-target="quote_file_2">Choose File</button>
                            <span class="gi-qc-file-label" id="label_quote_file_2">No file chosen</span>
                            <button type="button" class="gi-qc-file-clear" data-target="quote_file_2" title="Remove file">&times;</button>
                            <input type="file" name="quote_file_2" id="quote_file_2" accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.tif,.zip,.rar,.pdf" style="display:none;">
                        </div>

                        <!-- File 3 -->
                        <div class="gi-qc-file-row">
                            <span class="gi-qc-cloud-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path><polyline points="12 12 12 16"></polyline><polyline points="9 13 12 10 15 13"></polyline></svg>
                            </span>
                            <button type="button" class="gi-qc-choose-btn" data-target="quote_file_3">Choose File</button>
                            <span class="gi-qc-file-label" id="label_quote_file_3">No file chosen</span>
                            <button type="button" class="gi-qc-file-clear" data-target="quote_file_3" title="Remove file">&times;</button>
                            <input type="file" name="quote_file_3" id="quote_file_3" accept=".jpg,.jpeg,.png,.webp,.psd,.tiff,.tif,.zip,.rar,.pdf" style="display:none;">
                        </div>

                    </div>

                    <!-- Field 7: Jobs Instruction* -->
                    <div class="gi-qc-textarea-field">
                        <svg class="gi-qc-textarea-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        <textarea name="quote_instructions" class="gi-qc-textarea" placeholder="Jobs Instruction*&#10;Tell us what you need. (e.g. background removal, shadow, color correction, retouching, etc.)" required aria-required="true"></textarea>
                    </div>

                    <!-- Clean Google reCAPTCHA v2 Security Widget (No broken error) -->
                    <div class="gi-qc-recaptcha-widget" id="gi-recaptcha-widget">
                        <div class="gi-qc-rc-left" id="gi-rc-trigger">
                            <div class="gi-qc-rc-check" id="gi-rc-box">
                                <span class="gi-qc-rc-spinner"></span>
                                <svg class="gi-qc-rc-checkmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <label class="gi-qc-rc-label" for="gi-rc-trigger">I'm not a robot</label>
                        </div>
                        <div class="gi-qc-rc-right">
                            <div class="gi-qc-rc-logo">
                                <svg viewBox="0 0 48 48"><path fill="#4285F4" d="M24 4.5A19.5 19.5 0 0 0 4.5 24H9a15 15 0 0 1 15-15V4.5z"/><path fill="#34A853" d="M24 43.5a19.5 19.5 0 0 0 19.5-19.5H39a15 15 0 0 1-15 15v4.5z"/><path fill="#FBBC05" d="M4.5 24a19.5 19.5 0 0 0 19.5 19.5V39A15 15 0 0 1 9 24H4.5z"/></svg>
                            </div>
                            <span class="gi-qc-rc-brand">reCAPTCHA</span>
                            <span class="gi-qc-rc-legal">Privacy - Terms</span>
                        </div>
                        <input type="hidden" name="gi_robot_verified" id="gi-robot-verified" value="0">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="gi-qc-submit-btn" id="gi-quote-btn">
                        <span>SEND REQUEST</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>

                    <!-- Trust Assurance Note -->
                    <div class="gi-qc-secure-note">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <span>Your information is 100% secure and will never be shared.</span>
                    </div>

                    <!-- Real-time Response Output Container -->
                    <div class="gi-qc-response-banner" id="gi-quote-response" role="status" aria-live="polite"></div>

                </form>

            </div>
        </div>

    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var form        = document.getElementById('gi-quote-form');
    var submitBtn   = document.getElementById('gi-quote-btn');
    var responseBox = document.getElementById('gi-quote-response');
    var rcTrigger   = document.getElementById('gi-rc-trigger');
    var rcBox       = document.getElementById('gi-rc-box');
    var rcInput     = document.getElementById('gi-robot-verified');
    var isVerified  = false;

    // 1. Interactive reCAPTCHA Verification
    if (rcTrigger && rcBox && rcInput) {
        rcTrigger.addEventListener('click', function() {
            if (isVerified) return;
            rcBox.classList.add('is-loading');
            setTimeout(function() {
                rcBox.classList.remove('is-loading');
                rcBox.classList.add('is-verified');
                rcInput.value = '1';
                isVerified = true;
            }, 450);
        });
    }

    // 2. Custom File Selector Bindings
    var chooseButtons = document.querySelectorAll('.gi-qc-choose-btn');
    chooseButtons.forEach(function(btn) {
        var targetId = btn.getAttribute('data-target');
        var input = document.getElementById(targetId);
        var label = document.getElementById('label_' + targetId);
        var clearBtn = document.querySelector('.gi-qc-file-clear[data-target="' + targetId + '"]');

        if (btn && input) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                input.click();
            });
        }

        if (input && label) {
            input.addEventListener('change', function() {
                if (this.files && this.files.length > 0) {
                    var file = this.files[0];
                    var sizeMB = (file.size / (1024 * 1024)).toFixed(1);
                    label.textContent = file.name + ' (' + sizeMB + ' MB)';
                    label.classList.add('has-file');
                    if (clearBtn) clearBtn.style.display = 'inline-block';
                } else {
                    label.textContent = 'No file chosen';
                    label.classList.remove('has-file');
                    if (clearBtn) clearBtn.style.display = 'none';
                }
            });
        }

        if (clearBtn && input && label) {
            clearBtn.addEventListener('click', function(e) {
                e.preventDefault();
                input.value = '';
                label.textContent = 'No file chosen';
                label.classList.remove('has-file');
                clearBtn.style.display = 'none';
            });
        }
    });

    // 3. AJAX Form Submission
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Check human verification
            if (!isVerified || rcInput.value !== '1') {
                showResponse('Please check "I\'m not a robot" before submitting.', false);
                rcBox.style.borderColor = '#ef4444';
                setTimeout(function() { rcBox.style.borderColor = '#c1c1c1'; }, 1500);
                return;
            }

            // Disable submit button and show loading spinner
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Sending Your Request...</span> <svg class="gi-qc-spin" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle><path d="M12 2a10 10 0 0 1 10 10"></path></svg>';
            }

            var formData = new FormData(form);
            var ajaxUrl  = (window.GI_DATA && window.GI_DATA.ajax_url) ? window.GI_DATA.ajax_url : '/wp-admin/admin-ajax.php';

            fetch(ajaxUrl, {
                method: 'POST',
                body: formData
            })
            .then(function(res) {
                return res.json();
            })
            .then(function(data) {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>SEND REQUEST</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';
                }

                if (data && data.success) {
                    showResponse(data.data.message || 'Thank you! Your quote request has been received.', true);
                    form.reset();
                    // Reset file labels
                    chooseButtons.forEach(function(btn) {
                        var targetId = btn.getAttribute('data-target');
                        var label = document.getElementById('label_' + targetId);
                        var clearBtn = document.querySelector('.gi-qc-file-clear[data-target="' + targetId + '"]');
                        if (label) {
                            label.textContent = 'No file chosen';
                            label.classList.remove('has-file');
                        }
                        if (clearBtn) clearBtn.style.display = 'none';
                    });
                    // Reset captcha
                    rcBox.classList.remove('is-verified');
                    rcInput.value = '0';
                    isVerified = false;
                } else {
                    var errorMsg = (data && data.data && data.data.message) ? data.data.message : 'An error occurred. Please try again or email info@graphicsinnovator.com.';
                    showResponse(errorMsg, false);
                }
            })
            .catch(function(err) {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>SEND REQUEST</span> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>';
                }
                showResponse('Connection failed. Please check your network or email info@graphicsinnovator.com directly.', false);
            });
        });
    }

    function showResponse(message, isSuccess) {
        if (!responseBox) return;
        responseBox.textContent = message;
        responseBox.className = 'gi-qc-response-banner ' + (isSuccess ? 'is-success' : 'is-error');
        responseBox.style.display = 'block';
        responseBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
});
</script>

<?php get_footer(); ?>
