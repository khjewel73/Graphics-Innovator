<?php
/**
 * Template Name: Enterprise Pricing
 * 
 * Custom ultra-high-converting pricing page with alternating visual rhythm:
 * Section 1 (Dark) -> Section 2 (Lighter) -> Section 3 (Darker) -> Section 4 (Lighter) -> Section 5 (Darker) -> Section 6 (CTA).
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* ==========================================================================
   ENTERPRISE PRICING — ALTERNATING RHYTHM ENGINE (DARK -> LIGHT -> DARK)
   ========================================================================== */
:root {
    --gi-pr-dark-bg: #040814;
    --gi-pr-charcoal-bg: #07101f;
    --gi-pr-light-bg: #f8fafc;
    --gi-pr-card-white: #ffffff;
    --gi-pr-cyan: #38bdf8;
    --gi-pr-blue: #2a6aee;
    --gi-pr-orange: #ff6a1a;
    --gi-pr-green: #10b981;
}

.gi-pricing-rhythm-wrapper {
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    position: relative;
    overflow: hidden;
}

.gi-pr-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative;
    z-index: 2;
}

/* ==========================================================================
   SECTION 1: DARK HERO BANNER (DARK)
   ========================================================================== */
.gi-pr-sec-hero-dark {
    background-color: var(--gi-pr-dark-bg);
    background-image:
        radial-gradient(circle at 15% 25%, rgba(56, 189, 248, 0.14) 0%, transparent 45%),
        radial-gradient(circle at 85% 20%, rgba(255, 106, 26, 0.16) 0%, transparent 45%),
        linear-gradient(180deg, #02050c 0%, #060e1d 100%);
    color: #ffffff;
    padding: calc(var(--gi-header-height, 96px) + 3rem) 0 4.5rem 0;
    position: relative;
    text-align: center;
}

/* Subtle Grid Pattern */
.gi-pr-sec-hero-dark::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255, 255, 255, 0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.025) 1px, transparent 1px);
    background-size: 64px 64px;
    mask-image: radial-gradient(ellipse at 50% 50%, black 20%, transparent 75%);
    pointer-events: none;
}

.gi-pr-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 106, 26, 0.08);
    border: 1px solid rgba(255, 106, 26, 0.45);
    color: #ff6a1a;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 6px 18px;
    border-radius: 50px;
    margin-bottom: 1.5rem;
    box-shadow: 0 0 20px rgba(255, 106, 26, 0.15);
}
.gi-pr-hero-badge svg {
    color: #ff6a1a;
}
.gi-pr-sec-hero-dark h1 {
    font-size: clamp(2.5rem, 4.8vw, 4rem);
    font-weight: 850;
    line-height: 1.12;
    margin: 0 0 1.25rem 0;
    letter-spacing: -0.025em;
    color: #ffffff;
}
.gi-pr-sec-hero-dark h1 .gi-cyan-text {
    color: var(--gi-pr-cyan);
    text-shadow: 0 0 30px rgba(56, 189, 248, 0.35);
}
.gi-pr-sec-hero-dark p {
    font-size: 1.15rem;
    color: rgba(226, 232, 240, 0.82);
    max-width: 720px;
    margin: 0 auto 2.5rem auto;
    line-height: 1.6;
}

/* 4 Inline Hero Badges */
.gi-pr-hero-pills-row {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.25rem;
}
.gi-pr-hero-pill-item {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(15, 23, 42, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 8px 18px;
    border-radius: 50px;
    font-size: 0.86rem;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 600;
    backdrop-filter: blur(10px);
}
.gi-pr-hero-pill-item svg {
    color: var(--gi-pr-cyan);
}

/* ==========================================================================
   SECTION 2: LIGHTER PRICING TABLE (LIGHTER)
   ========================================================================== */
.gi-pr-sec-cards-light {
    background:
        radial-gradient(circle at 10% 15%, rgba(255, 106, 26, 0.04) 0%, transparent 40%),
        radial-gradient(circle at 90% 80%, rgba(42, 106, 238, 0.05) 0%, transparent 45%),
        linear-gradient(180deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
    color: #0f172a;
    padding: 6rem 0 6.5rem 0;
    position: relative;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.gi-pr-sec-header-center {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 3.5rem auto;
}
.gi-pr-tag-pill-light {
    display: inline-block;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    color: #2a6aee;
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 5px 16px;
    border-radius: 50px;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
    margin-bottom: 1rem;
}
.gi-pr-sec-header-center h2 {
    font-size: clamp(2rem, 3.6vw, 2.75rem);
    font-weight: 850;
    color: #0f172a;
    margin: 0 0 0.65rem 0;
    letter-spacing: -0.02em;
}
.gi-pr-sec-header-center p {
    font-size: 1.05rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* Pricing Grid */
.gi-pr-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    align-items: stretch;
    margin-bottom: 3.5rem;
}

/* Clean Card */
.gi-pr-clean-card {
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
.gi-pr-clean-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 48px -12px rgba(15, 23, 42, 0.09), 0 0 0 1px #cbd5e1;
    border-color: #cbd5e1;
}

/* Popular Card Highlight */
.gi-pr-clean-card.is-popular {
    border: 2px solid #2a6aee;
    box-shadow: 0 14px 40px -6px rgba(42, 106, 238, 0.16), 0 4px 16px -2px rgba(42, 106, 238, 0.06);
}
.gi-pr-clean-card.is-popular:hover {
    box-shadow: 0 26px 52px -10px rgba(42, 106, 238, 0.24), 0 0 0 2px #1d4ed8;
    transform: translateY(-8px);
}
.gi-pr-popular-badge {
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

.gi-pr-plan-title {
    font-size: 1.45rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.45rem 0;
    letter-spacing: -0.3px;
}
.gi-pr-plan-tagline {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.5;
    margin: 0 0 1.6rem 0;
    min-height: 44px;
}

/* Price Block */
.gi-pr-price-wrap {
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #f1f5f9;
    margin-bottom: 1.6rem;
}
.gi-pr-figure {
    font-size: 2.6rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1;
    display: flex;
    align-items: baseline;
    gap: 4px;
    letter-spacing: -1px;
}
.gi-pr-currency {
    font-size: 1.55rem;
    font-weight: 700;
    color: #2a6aee;
}
.gi-pr-unit {
    font-size: 0.95rem;
    font-weight: 600;
    color: #64748b;
    letter-spacing: 0;
    margin-left: 2px;
}
.gi-pr-figure-custom {
    font-size: 2.15rem;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.5px;
    line-height: 1.15;
}
.gi-pr-subtext {
    font-size: 0.82rem;
    color: #16a34a;
    font-weight: 600;
    margin-top: 0.5rem;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Feature Checklists */
.gi-pr-features-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2.2rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
    flex: 1;
}
.gi-pr-features-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.92rem;
    color: #334155;
    line-height: 1.4;
}
.gi-pr-check-icon {
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
.gi-pr-check-icon svg {
    width: 12px;
    height: 12px;
    stroke-width: 3;
}

/* CTA Buttons */
.gi-pr-btn {
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
.gi-pr-btn-outline {
    background: #f8fafc;
    color: #0f172a !important;
    border: 1px solid #cbd5e1;
}
.gi-pr-btn-outline:hover {
    background: #0f172a;
    border-color: #0f172a;
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.15);
}
.gi-pr-btn-solid {
    background: linear-gradient(135deg, #2a6aee 0%, #1d4ed8 100%);
    color: #ffffff !important;
    border: none;
    box-shadow: 0 6px 20px rgba(42, 106, 238, 0.32);
}
.gi-pr-btn-solid:hover {
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(42, 106, 238, 0.45);
}
.gi-pr-arrow {
    transition: transform 0.25s ease;
}
.gi-pr-btn:hover .gi-pr-arrow {
    transform: translateX(4px);
}

/* Reassurance Support Bar */
.gi-pr-support-bar {
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
.gi-pr-support-item {
    display: flex;
    align-items: center;
    gap: 8px;
}
.gi-pr-support-item svg {
    color: #2a6aee;
    flex-shrink: 0;
}
.gi-pr-support-link {
    color: #2a6aee !important;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.2s ease;
}
.gi-pr-support-link:hover {
    color: #1e40af !important;
    text-decoration: underline;
}
.gi-pr-support-sep {
    color: #cbd5e1;
}

/* ==========================================================================
   SECTION 3: DARKER SECTION — WHY DIRECT HUMAN PRODUCTION (DARKER)
   ========================================================================== */
.gi-pr-sec-why-dark {
    background-color: var(--gi-pr-charcoal-bg);
    background-image:
        radial-gradient(circle at 18% 25%, rgba(42, 106, 238, 0.1) 0%, transparent 40%),
        radial-gradient(circle at 82% 75%, rgba(255, 106, 26, 0.08) 0%, transparent 40%),
        linear-gradient(180deg, #050a16 0%, #081123 100%);
    color: #ffffff;
    padding: 6rem 0;
    position: relative;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}
.gi-pr-why-header-dark {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 3.75rem auto;
}
.gi-pr-why-pill-dark {
    display: inline-block;
    background: rgba(42, 106, 238, 0.12);
    border: 1px solid rgba(42, 106, 238, 0.35);
    color: var(--gi-pr-cyan);
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 5px 16px;
    border-radius: 50px;
    margin-bottom: 1rem;
}
.gi-pr-why-header-dark h2 {
    font-size: clamp(2rem, 3.6vw, 2.75rem);
    font-weight: 850;
    color: #ffffff;
    margin: 0 0 0.75rem 0;
    letter-spacing: -0.02em;
}
.gi-pr-why-header-dark p {
    color: rgba(226, 232, 240, 0.75);
    font-size: 1.05rem;
    line-height: 1.6;
    margin: 0;
}

/* 4 Dark Glass Cards */
.gi-pr-why-grid-dark {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.75rem;
}
.gi-pr-why-card-dark {
    background: rgba(13, 22, 38, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    padding: 2.2rem 1.75rem;
    transition: transform 0.3s ease, border-color 0.3s ease, background 0.3s ease;
    backdrop-filter: blur(16px);
}
.gi-pr-why-card-dark:hover {
    transform: translateY(-6px);
    border-color: rgba(56, 189, 248, 0.35);
    background: rgba(15, 26, 46, 0.85);
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4);
}
.gi-pr-why-icon-wrap {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
}
.gi-pr-icon-blue {
    background: rgba(56, 189, 248, 0.12);
    border: 1px solid rgba(56, 189, 248, 0.3);
    color: #38bdf8;
    box-shadow: 0 0 15px rgba(56, 189, 248, 0.2);
}
.gi-pr-icon-green {
    background: rgba(16, 185, 129, 0.12);
    border: 1px solid rgba(16, 185, 129, 0.3);
    color: #10b981;
    box-shadow: 0 0 15px rgba(16, 185, 129, 0.2);
}
.gi-pr-icon-amber {
    background: rgba(245, 158, 11, 0.12);
    border: 1px solid rgba(245, 158, 11, 0.3);
    color: #f59e0b;
    box-shadow: 0 0 15px rgba(245, 158, 11, 0.2);
}
.gi-pr-icon-purple {
    background: rgba(168, 85, 247, 0.12);
    border: 1px solid rgba(168, 85, 247, 0.3);
    color: #c084fc;
    box-shadow: 0 0 15px rgba(168, 85, 247, 0.2);
}
.gi-pr-why-card-dark h3 {
    font-size: 1.2rem;
    font-weight: 750;
    color: #ffffff;
    margin: 0 0 0.5rem 0;
}
.gi-pr-why-card-dark p {
    font-size: 0.9rem;
    color: rgba(203, 213, 225, 0.7);
    line-height: 1.6;
    margin: 0;
}

/* ==========================================================================
   SECTION 4: LIGHTER SECTION — ENTERPRISE TRUST & DATA SECURITY (LIGHTER)
   ========================================================================== */
.gi-pr-sec-trust-light {
    background: #ffffff;
    color: #0f172a;
    padding: 5.5rem 0;
    border-bottom: 1px solid #e2e8f0;
}
.gi-pr-trust-header-light {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 3.5rem auto;
}
.gi-pr-trust-header-light h2 {
    font-size: clamp(2rem, 3.4vw, 2.5rem);
    font-weight: 850;
    color: #0f172a;
    margin: 0 0 0.6rem 0;
    letter-spacing: -0.02em;
}
.gi-pr-trust-header-light p {
    font-size: 1.05rem;
    color: #64748b;
    margin: 0;
}
.gi-pr-trust-grid-light {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}
.gi-pr-trust-card-light {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 1.75rem 1.5rem;
    display: flex;
    align-items: center;
    gap: 1.25rem;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.03);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.gi-pr-trust-card-light:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06);
    background: #ffffff;
}
.gi-pr-trust-icon-light {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: rgba(42, 106, 238, 0.08);
    color: #2a6aee;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-pr-trust-icon-light svg {
    width: 24px;
    height: 24px;
}
.gi-pr-trust-card-light h4 {
    font-size: 1.05rem;
    font-weight: 750;
    color: #0f172a;
    margin: 0 0 3px 0;
}
.gi-pr-trust-card-light p {
    font-size: 0.85rem;
    color: #64748b;
    line-height: 1.4;
    margin: 0;
}

/* ==========================================================================
   SECTION 5: DARKER SECTION — CLIENT REVIEWS MARQUEE (DARKER)
   ========================================================================== */
.gi-pr-sec-reviews-dark {
    background-color: var(--gi-pr-dark-bg);
    background-image:
        radial-gradient(circle at 50% 10%, rgba(42, 106, 238, 0.12) 0%, transparent 60%),
        linear-gradient(180deg, #030712 0%, #07101f 100%);
    color: #ffffff;
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}
.gi-pr-reviews-header-dark {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 3.5rem auto;
}
.gi-pr-reviews-header-dark h2 {
    font-size: clamp(2rem, 3.4vw, 2.6rem);
    font-weight: 850;
    color: #ffffff;
    margin: 0 0 0.6rem 0;
    letter-spacing: -0.02em;
}
.gi-pr-reviews-header-dark p {
    color: rgba(226, 232, 240, 0.75);
    font-size: 1.05rem;
    margin: 0;
}

.gi-pr-reviews-marquee-dark {
    display: flex;
    overflow: hidden;
    gap: 2rem;
    position: relative;
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    padding: 0.75rem 0;
}
.gi-pr-reviews-track-dark {
    display: flex;
    gap: 2rem;
    width: max-content;
    animation: gi-scroll-dark 65s linear infinite;
}
.gi-pr-reviews-track-dark:hover {
    animation-play-state: paused;
}
@keyframes gi-scroll-dark {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 1rem)); }
}
.gi-pr-review-card-dark {
    width: 420px;
    flex-shrink: 0;
    background: rgba(13, 22, 38, 0.75);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    padding: 2.2rem;
    position: relative;
    transition: transform 0.3s ease, border-color 0.3s ease;
    backdrop-filter: blur(14px);
}
.gi-pr-review-card-dark:hover {
    transform: translateY(-5px);
    border-color: rgba(56, 189, 248, 0.35);
    background: rgba(15, 26, 46, 0.9);
}
.gi-pr-review-stars-dark {
    display: flex;
    gap: 4px;
    margin-bottom: 1.25rem;
    color: #fbbf24;
}
.gi-pr-review-stars-dark svg {
    width: 18px;
    height: 18px;
    fill: currentColor;
}
.gi-pr-review-text-dark {
    font-size: 0.95rem;
    line-height: 1.65;
    color: rgba(226, 232, 240, 0.9);
    margin-bottom: 1.75rem;
    font-style: italic;
}
.gi-pr-review-author-dark {
    display: flex;
    align-items: center;
    gap: 12px;
}
.gi-pr-review-avatar-dark {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: linear-gradient(135deg, #2a6aee 0%, #1d4ed8 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-weight: 700;
    font-size: 1rem;
}
.gi-pr-author-meta-dark h4 {
    margin: 0 0 2px 0;
    font-size: 0.96rem;
    font-weight: 750;
    color: #ffffff;
}
.gi-pr-author-meta-dark span {
    font-size: 0.82rem;
    color: rgba(203, 213, 225, 0.65);
    display: flex;
    align-items: center;
    gap: 4px;
}
.gi-pr-author-meta-dark span svg {
    width: 13px;
    height: 13px;
    color: #10b981;
}

/* ==========================================================================
   SECTION 6: FINAL CONTRAST CALL TO ACTION
   ========================================================================== */
.gi-pr-sec-cta-dark {
    padding: 6rem 0;
    background: #020610;
    position: relative;
    overflow: hidden;
}
.gi-pr-cta-box-dark {
    background: linear-gradient(135deg, #091428 0%, #0d1e3d 100%);
    border: 1px solid rgba(255, 106, 26, 0.35);
    border-radius: 28px;
    padding: 4.5rem 3rem;
    text-align: center;
    color: #ffffff;
    box-shadow: 0 24px 60px rgba(0, 0, 0, 0.6), 0 0 50px rgba(255, 106, 26, 0.12);
    position: relative;
    overflow: hidden;
}
.gi-pr-cta-box-dark::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(42, 106, 238, 0.25) 0%, transparent 70%);
    filter: blur(60px);
}
.gi-pr-cta-box-dark h2 {
    font-size: clamp(2rem, 3.8vw, 2.85rem);
    font-weight: 850;
    margin-bottom: 1rem;
    color: #ffffff;
    position: relative;
    z-index: 1;
}
.gi-pr-cta-box-dark p {
    font-size: 1.15rem;
    color: rgba(226, 232, 240, 0.82);
    max-width: 640px;
    margin: 0 auto 2.5rem auto;
    line-height: 1.6;
    position: relative;
    z-index: 1;
}
.gi-pr-cta-actions-dark {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.25rem;
    position: relative;
    z-index: 1;
}
.gi-pr-btn-trial-orange {
    background: linear-gradient(135deg, #ff6a1a 0%, #ea580c 100%);
    color: #ffffff !important;
    font-weight: 750;
    font-size: 1.05rem;
    padding: 1.15rem 2.5rem;
    border-radius: 100px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 10px 24px rgba(234, 88, 12, 0.35);
}
.gi-pr-btn-trial-orange:hover {
    transform: translateY(-3px);
    box-shadow: 0 16px 36px rgba(234, 88, 12, 0.5);
    color: #ffffff !important;
}
.gi-pr-btn-chat-glass {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff !important;
    font-weight: 700;
    font-size: 1.05rem;
    padding: 1.15rem 2.5rem;
    border-radius: 100px;
    border: 1px solid rgba(255, 255, 255, 0.25);
    text-decoration: none;
    transition: all 0.3s ease;
}
.gi-pr-btn-chat-glass:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #ffffff;
    transform: translateY(-3px);
}

/* ==========================================================================
   RESPONSIVE DESIGN
   ========================================================================== */
@media (max-width: 1024px) {
    .gi-pr-cards-grid {
        grid-template-columns: 1fr;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
    }
    .gi-pr-plan-tagline {
        min-height: auto;
    }
    .gi-pr-why-grid-dark {
        grid-template-columns: repeat(2, 1fr);
    }
    .gi-pr-trust-grid-light {
        grid-template-columns: repeat(2, 1fr);
    }
    .gi-pr-support-bar {
        flex-direction: column;
        gap: 0.85rem;
        text-align: center;
    }
    .gi-pr-support-sep {
        display: none;
    }
}
@media (max-width: 640px) {
    .gi-pr-why-grid-dark {
        grid-template-columns: 1fr;
    }
    .gi-pr-trust-grid-light {
        grid-template-columns: 1fr;
    }
    .gi-pr-cta-box-dark {
        padding: 3rem 1.5rem;
    }
}
</style>

<main class="gi-pricing-rhythm-wrapper">

    <!-- ==============================================================
         SECTION 1: DARK LUXURY HERO BANNER (DARK)
         ============================================================== -->
    <section class="gi-pr-sec-hero-dark" data-gi-animate="fade-up">
        <div class="gi-pr-container">
            <div class="gi-pr-hero-badge">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                <?php echo esc_html( gi_get_field( 'pr_badge', 'Wholesale Volume Rates • 100% Handcrafted' ) ); ?>
            </div>
            <h1><?php echo wp_kses_post( gi_get_field( 'pr_title', "Transparent &amp; Predictable <span class=\"gi-cyan-text\">Pricing</span>" ) ); ?></h1>
            <p><?php echo esc_html( gi_get_field( 'pr_desc', 'Direct human production with wholesale bulk rates starting from $0.25/image. No hidden charges, no AI distortions, and zero middleman markups.' ) ); ?></p>
            
            <div class="gi-pr-hero-pills-row">
                <span class="gi-pr-hero-pill-item">
                    <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    <?php echo esc_html( gi_get_field( 'pr_pill_1', '12-Hour Batch Turnaround' ) ); ?>
                </span>
                <span class="gi-pr-hero-pill-item">
                    <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <?php echo esc_html( gi_get_field( 'pr_pill_2', 'Strict NDA Protected' ) ); ?>
                </span>
                <span class="gi-pr-hero-pill-item">
                    <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                    <?php echo esc_html( gi_get_field( 'pr_pill_3', '500+ Active Brands' ) ); ?>
                </span>
                <span class="gi-pr-hero-pill-item">
                    <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <?php echo esc_html( gi_get_field( 'pr_pill_4', '99% Satisfaction Rate' ) ); ?>
                </span>
            </div>
        </div>
    </section>

    <!-- ==============================================================
         SECTION 2: LIGHTER PRICING TABLE (LIGHTER)
         ============================================================== -->
    <section class="gi-pr-sec-cards-light">
        <div class="gi-pr-container">
            <div class="gi-pr-sec-header-center" data-gi-animate="fade-up">
                <span class="gi-pr-tag-pill-light">Production Tiers</span>
                <h2>Choose Your Catalog Production Tier</h2>
                <p>Transparent volume pricing designed for eCommerce stores, fashion brands, automotive dealerships, and high-volume commercial photo studios.</p>
            </div>

            <!-- 3 Pricing Cards Grid -->
            <div class="gi-pr-cards-grid">
                
                <!-- Tier 1: Essential Clipping -->
                <?php
                $t1_title    = gi_get_field( 'pr_t1_title', 'Essential Clipping' );
                $t1_tagline  = gi_get_field( 'pr_t1_tagline', 'Fast background removal and hand-drawn cutout paths for eCommerce catalogs.' );
                $t1_price    = gi_get_field( 'pr_t1_price', '0.25' );
                $t1_unit     = gi_get_field( 'pr_t1_unit', '/ image' );
                $t1_subtext  = gi_get_field( 'pr_t1_subtext', 'Starting bulk volume rate' );
                $t1_features = gi_parse_features( gi_get_field( 'pr_t1_features' ), [
                    'Hand-drawn pen clipping paths (100% human)',
                    'Pure white & transparent cutouts',
                    'Precision centering & margin alignment',
                    'Amazon, eBay & Shopify ready formats',
                    'Guaranteed 12-24h turnaround'
                ] );
                $t1_btn_text = gi_get_field( 'pr_t1_btn_text', "Let's Start Chat" );
                $t1_btn_url  = gi_get_field( 'pr_t1_btn_url', 'https://wa.me/8801714516662?text=' . rawurlencode('Hello Graphics Innovator! I need a volume rate for Essential Clipping & Background Removal.') );
                ?>
                <div class="gi-pr-clean-card" data-gi-animate="fade-up">
                    <h3 class="gi-pr-plan-title"><?php echo esc_html( $t1_title ); ?></h3>
                    <p class="gi-pr-plan-tagline"><?php echo esc_html( $t1_tagline ); ?></p>
                    
                    <div class="gi-pr-price-wrap">
                        <div class="gi-pr-figure">
                            <span class="gi-pr-currency">$</span><?php echo esc_html( $t1_price ); ?>
                            <span class="gi-pr-unit"><?php echo esc_html( $t1_unit ); ?></span>
                        </div>
                        <div class="gi-pr-subtext">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            <span><?php echo esc_html( $t1_subtext ); ?></span>
                        </div>
                    </div>

                    <ul class="gi-pr-features-list">
                        <?php foreach ( $t1_features as $feat ) : ?>
                            <li><span class="gi-pr-check-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> <?php echo esc_html( $feat ); ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?php echo esc_url( $t1_btn_url ); ?>" target="_blank" rel="noopener noreferrer" class="gi-pr-btn gi-pr-btn-outline">
                        <span><?php echo esc_html( $t1_btn_text ); ?></span>
                        <svg class="gi-pr-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Tier 2: Commercial Retouching (Most Popular) -->
                <?php
                $t2_badge    = gi_get_field( 'pr_t2_badge', '⭐ Most Popular' );
                $t2_title    = gi_get_field( 'pr_t2_title', 'Commercial Retouching' );
                $t2_tagline  = gi_get_field( 'pr_t2_tagline', 'The industry standard for apparel, footwear, and consumer brand catalogs.' );
                $t2_price    = gi_get_field( 'pr_t2_price_text', 'Custom Volume Rate' );
                $t2_subtext  = gi_get_field( 'pr_t2_subtext', 'Save up to 45% on volume orders' );
                $t2_features = gi_parse_features( gi_get_field( 'pr_t2_features' ), [
                    'Everything in Essential Clipping',
                    'Ghost mannequin & 3D neck joint',
                    'Natural & reflection drop shadows',
                    'Precision color matching to swatches',
                    'Dust, scratch & wrinkle removal',
                    'Dedicated production supervisor assigned'
                ] );
                $t2_btn_text = gi_get_field( 'pr_t2_btn_text', "Let's Start Chat" );
                $t2_btn_url  = gi_get_field( 'pr_t2_btn_url', 'https://wa.me/8801714516662?text=' . rawurlencode('Hello Graphics Innovator! I need a custom quote for Commercial Retouching & Ghost Mannequin.') );
                ?>
                <div class="gi-pr-clean-card is-popular" data-gi-animate="fade-up" data-gi-delay="100">
                    <?php if ( ! empty( $t2_badge ) ) : ?><div class="gi-pr-popular-badge"><?php echo esc_html( $t2_badge ); ?></div><?php endif; ?>
                    <h3 class="gi-pr-plan-title"><?php echo esc_html( $t2_title ); ?></h3>
                    <p class="gi-pr-plan-tagline"><?php echo esc_html( $t2_tagline ); ?></p>
                    
                    <div class="gi-pr-price-wrap">
                        <div class="gi-pr-figure-custom">
                            <?php echo esc_html( $t2_price ); ?>
                        </div>
                        <div class="gi-pr-subtext">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            <span><?php echo esc_html( $t2_subtext ); ?></span>
                        </div>
                    </div>

                    <ul class="gi-pr-features-list">
                        <?php foreach ( $t2_features as $feat ) : ?>
                            <li><span class="gi-pr-check-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> <?php echo esc_html( $feat ); ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?php echo esc_url( $t2_btn_url ); ?>" target="_blank" rel="noopener noreferrer" class="gi-pr-btn gi-pr-btn-solid">
                        <span><?php echo esc_html( $t2_btn_text ); ?></span>
                        <svg class="gi-pr-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <!-- Tier 3: High-End Editorial & Jewelry -->
                <?php
                $t3_title    = gi_get_field( 'pr_t3_title', 'Editorial & Jewelry' );
                $t3_tagline  = gi_get_field( 'pr_t3_tagline', 'Magazine-quality retouching for jewelry, luxury goods, cosmetics, and models.' );
                $t3_price    = gi_get_field( 'pr_t3_price_text', 'Custom Quote' );
                $t3_subtext  = gi_get_field( 'pr_t3_subtext', 'Bespoke scope & dedicated lead' );
                $t3_features = gi_parse_features( gi_get_field( 'pr_t3_features' ), [
                    'Everything in Commercial Retouching',
                    'Non-destructive Dodge & Burn skin',
                    'Diamond sparkle & metal polish',
                    'Stray hair & anatomical contouring',
                    'Multi-layer PSD delivery with masks',
                    'Direct senior art director review'
                ] );
                $t3_btn_text = gi_get_field( 'pr_t3_btn_text', "Let's Start Chat" );
                $t3_btn_url  = gi_get_field( 'pr_t3_btn_url', 'https://wa.me/8801714516662?text=' . rawurlencode('Hello Graphics Innovator! I need a consultation for High-End Editorial & Jewelry Retouching.') );
                ?>
                <div class="gi-pr-clean-card" data-gi-animate="fade-up" data-gi-delay="200">
                    <h3 class="gi-pr-plan-title"><?php echo esc_html( $t3_title ); ?></h3>
                    <p class="gi-pr-plan-tagline"><?php echo esc_html( $t3_tagline ); ?></p>
                    
                    <div class="gi-pr-price-wrap">
                        <div class="gi-pr-figure-custom">
                            <?php echo esc_html( $t3_price ); ?>
                        </div>
                        <div class="gi-pr-subtext">
                            <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            <span><?php echo esc_html( $t3_subtext ); ?></span>
                        </div>
                    </div>

                    <ul class="gi-pr-features-list">
                        <?php foreach ( $t3_features as $feat ) : ?>
                            <li><span class="gi-pr-check-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> <?php echo esc_html( $feat ); ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?php echo esc_url( $t3_btn_url ); ?>" target="_blank" rel="noopener noreferrer" class="gi-pr-btn gi-pr-btn-outline">
                        <span><?php echo esc_html( $t3_btn_text ); ?></span>
                        <svg class="gi-pr-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

            </div>

            <!-- Reassurance Support Bar -->
            <div class="gi-pr-support-bar" data-gi-animate="fade-up">
                <div class="gi-pr-support-item">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <span>Want to test our quality first?</span>
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pr-support-link">Test 2 Images Free &rarr;</a>
                </div>
                <span class="gi-pr-support-sep">&bull;</span>
                <div class="gi-pr-support-item">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    <span>Strict Non-Disclosure (NDA) Protected</span>
                </div>
                <span class="gi-pr-support-sep">&bull;</span>
                <div class="gi-pr-support-item">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    <span>Average WhatsApp Reply: &lt; 5 Mins</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ==============================================================
         SECTION 3: DARKER SECTION — WHY DIRECT HUMAN PRODUCTION (DARKER)
         ============================================================== -->
    <section class="gi-pr-sec-why-dark">
        <div class="gi-pr-container">
            <div class="gi-pr-why-header-dark" data-gi-animate="fade-up">
                <span class="gi-pr-why-pill-dark">Direct Human Studio</span>
                <h2>Why Direct Human Production <span class="gi-cyan-text">Crushes</span> Rigid Pricing</h2>
                <p>Every eCommerce catalog has unique cutouts, lighting requirements, and style guides. Here is why high-volume brands partner directly with our senior retouching leads:</p>
            </div>
            
            <div class="gi-pr-why-grid-dark">
                
                <!-- Card 1 -->
                <div class="gi-pr-why-card-dark" data-gi-animate="fade-up">
                    <div class="gi-pr-why-icon-wrap gi-pr-icon-blue">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3>Volume Elasticity</h3>
                    <p>Why pay rigid flat fees? The higher your monthly image volume, the lower we discount your per-image rate down to $0.25. You negotiate directly with our lead production team.</p>
                </div>

                <!-- Card 2 -->
                <div class="gi-pr-why-card-dark" data-gi-animate="fade-up" data-gi-delay="100">
                    <div class="gi-pr-why-icon-wrap gi-pr-icon-green">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3>Real-Time Direct Chat</h3>
                    <p>Skip the 48-hour email ticketing queues. Speak directly with our production leads on WhatsApp for quote confirmations, status checks, and lightning-fast turnaround.</p>
                </div>

                <!-- Card 3 -->
                <div class="gi-pr-why-card-dark" data-gi-animate="fade-up" data-gi-delay="200">
                    <div class="gi-pr-why-icon-wrap gi-pr-icon-amber">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                    </div>
                    <h3>Zero AI Hallucinations</h3>
                    <p>Automated AI tools distort jewelry facets, blur fine fabric textures, and create jagged edges. 100% of our clipping paths are hand-drawn with Photoshop Pen tools.</p>
                </div>

                <!-- Card 4 -->
                <div class="gi-pr-why-card-dark" data-gi-animate="fade-up" data-gi-delay="300">
                    <div class="gi-pr-why-icon-wrap gi-pr-icon-purple">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <h3>Risk-Free 2-Image Test</h3>
                    <p>Never commit before testing. Send us 2 of your most complex product images right now. We will edit them to perfection before you spend a single dollar.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================================
         SECTION 4: LIGHTER SECTION — ENTERPRISE TRUST & DATA SECURITY (LIGHTER)
         ============================================================== -->
    <section class="gi-pr-sec-trust-light">
        <div class="gi-pr-container">
            <div class="gi-pr-trust-header-light" data-gi-animate="fade-up">
                <span class="gi-pr-tag-pill-light">Enterprise Security</span>
                <h2>Bank-Grade Confidentiality &amp; Guarantees</h2>
                <p>We handle mission-critical pre-release product imagery for world-renowned brands under strict enterprise agreements.</p>
            </div>

            <div class="gi-pr-trust-grid-light">
                
                <div class="gi-pr-trust-card-light" data-gi-animate="fade-up">
                    <div class="gi-pr-trust-icon-light">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div>
                        <h4>Strict NDA Protected</h4>
                        <p>Your unreleased product assets remain 100% confidential.</p>
                    </div>
                </div>

                <div class="gi-pr-trust-card-light" data-gi-animate="fade-up" data-gi-delay="100">
                    <div class="gi-pr-trust-icon-light">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <div>
                        <h4>SSL Encrypted Data</h4>
                        <p>Bank-level 256-bit encryption for all file transfers.</p>
                    </div>
                </div>

                <div class="gi-pr-trust-card-light" data-gi-animate="fade-up" data-gi-delay="200">
                    <div class="gi-pr-trust-icon-light">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                    </div>
                    <div>
                        <h4>24/7 Priority Support</h4>
                        <p>Our studio operates 24/7 to meet your tightest deadlines.</p>
                    </div>
                </div>

                <div class="gi-pr-trust-card-light" data-gi-animate="fade-up" data-gi-delay="300">
                    <div class="gi-pr-trust-icon-light">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div>
                        <h4>100% Satisfaction</h4>
                        <p>Love every single image, or we re-edit with zero fees.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================================
         SECTION 5: DARKER SECTION — CLIENT REVIEWS MARQUEE (DARKER)
         ============================================================== -->
    <section class="gi-pr-sec-reviews-dark">
        <div class="gi-pr-container">
            <div class="gi-pr-reviews-header-dark" data-gi-animate="fade-up">
                <h2>Trusted by High-Volume Brands</h2>
                <p>Over 500+ eCommerce brands, retailers, and commercial photographers rely on Graphics Innovator daily.</p>
            </div>
            
            <div class="gi-pr-reviews-marquee-dark">
                <div class="gi-pr-reviews-track-dark">
                    
                    <!-- Review 1 -->
                    <div class="gi-pr-review-card-dark">
                        <div class="gi-pr-review-stars-dark">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-pr-review-text-dark">We process over 2,000 product images a month. Graphics Innovator handles all our ghost mannequin and clipping path work flawlessly. The 24-hour turnaround has saved our launch deadlines multiple times.</div>
                        <div class="gi-pr-review-author-dark">
                            <div class="gi-pr-review-avatar-dark">SM</div>
                            <div class="gi-pr-author-meta-dark">
                                <h4>Sarah Mitchell</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Art Director, Urban Wear</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="gi-pr-review-card-dark">
                        <div class="gi-pr-review-stars-dark">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-pr-review-text-dark">As an Amazon FBA seller, pure white backgrounds and realistic drop shadows are critical for my conversions. The Commercial Retouching tier from these guys is worth every penny. CTR jumped 14%!</div>
                        <div class="gi-pr-review-author-dark">
                            <div class="gi-pr-review-avatar-dark">JP</div>
                            <div class="gi-pr-author-meta-dark">
                                <h4>Jason Patterson</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Top 1% Amazon Seller</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="gi-pr-review-card-dark">
                        <div class="gi-pr-review-stars-dark">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-pr-review-text-dark">I shoot high-end jewelry and cosmetic campaigns. Their Editorial &amp; Jewelry tier is insane. The non-destructive dodge and burn and stray hair removal is flawless. Highly recommended!</div>
                        <div class="gi-pr-review-author-dark">
                            <div class="gi-pr-review-avatar-dark">EL</div>
                            <div class="gi-pr-author-meta-dark">
                                <h4>Elena Rostova</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Commercial Photographer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="gi-pr-review-card-dark">
                        <div class="gi-pr-review-stars-dark">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-pr-review-text-dark">We shifted to Graphics Innovator to handle seasonal spikes. They took on 5,000 images in a single week and delivered perfect clipping without missing a beat. Outstanding scalability.</div>
                        <div class="gi-pr-review-author-dark">
                            <div class="gi-pr-review-avatar-dark">MR</div>
                            <div class="gi-pr-author-meta-dark">
                                <h4>Marcus Reed</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Operations Manager, Footwear Brand</span>
                            </div>
                        </div>
                    </div>

                    <!-- Loop Clones -->
                    <div class="gi-pr-review-card-dark" aria-hidden="true">
                        <div class="gi-pr-review-stars-dark">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-pr-review-text-dark">We process over 2,000 product images a month. Graphics Innovator handles all our ghost mannequin and clipping path work flawlessly. The 24-hour turnaround has saved our launch deadlines multiple times.</div>
                        <div class="gi-pr-review-author-dark">
                            <div class="gi-pr-review-avatar-dark">SM</div>
                            <div class="gi-pr-author-meta-dark">
                                <h4>Sarah Mitchell</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Art Director, Urban Wear</span>
                            </div>
                        </div>
                    </div>

                    <div class="gi-pr-review-card-dark" aria-hidden="true">
                        <div class="gi-pr-review-stars-dark">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-pr-review-text-dark">As an Amazon FBA seller, pure white backgrounds and realistic drop shadows are critical for my conversions. The Commercial Retouching tier from these guys is worth every penny. CTR jumped 14%!</div>
                        <div class="gi-pr-review-author-dark">
                            <div class="gi-pr-review-avatar-dark">JP</div>
                            <div class="gi-pr-author-meta-dark">
                                <h4>Jason Patterson</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Top 1% Amazon Seller</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================================
         SECTION 6: FINAL CONTRAST CALL TO ACTION (CTA)
         ============================================================== -->
    <section class="gi-pr-sec-cta-dark">
        <div class="gi-pr-container">
            <div class="gi-pr-cta-box-dark" data-gi-animate="fade-up">
                <h2><?php echo esc_html( gi_get_field( 'pr_cta_title', 'Ready to Scale Your Visual Catalog?' ) ); ?></h2>
                <p><?php echo esc_html( gi_get_field( 'pr_cta_desc', 'Upload up to 3 test images right now. Our senior editors will process them to pixel perfection and return them in under 12 hours for zero cost.' ) ); ?></p>
                <div class="gi-pr-cta-actions-dark">
                    <a href="<?php echo esc_url( gi_get_field( 'pr_cta_btn1_url', home_url( '/free-trial/' ) ) ); ?>" class="gi-pr-btn-trial-orange"><?php echo esc_html( gi_get_field( 'pr_cta_btn1_text', 'Start Your Free Trial Now →' ) ); ?></a>
                    <a href="<?php echo esc_url( gi_get_field( 'pr_cta_btn2_url', 'https://wa.me/8801714516662?text=' . rawurlencode('Hello Graphics Innovator! I want to start a chat about our image catalog.') ) ); ?>" target="_blank" rel="noopener noreferrer" class="gi-pr-btn-chat-glass"><?php echo esc_html( gi_get_field( 'pr_cta_btn2_text', "Let's Start Chat" ) ); ?></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
