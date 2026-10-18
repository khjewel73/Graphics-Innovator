<?php
/**
 * Template Name: Enterprise Pricing
 * 
 * Custom ultra-high-converting pricing page — Modern Crisp Light Theme.
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* ==========================================================================
   ENTERPRISE PRICING — MODERN LIGHT THEME ENGINE
   ========================================================================== */
:root {
    --gi-price-light-bg: #f8fafc;
    --gi-price-card-bg: #ffffff;
    --gi-price-card-border: #e2e8f0;
    --gi-price-text-main: #0f172a;
    --gi-price-text-muted: #64748b;
    --gi-price-accent: #2a6aee;
    --gi-price-accent-hover: #1d4ed8;
}

.gi-pricing-page-light {
    background:
        radial-gradient(circle at 15% 8%, rgba(255, 106, 26, 0.04) 0%, transparent 45%),
        radial-gradient(circle at 85% 25%, rgba(42, 106, 238, 0.05) 0%, transparent 45%),
        linear-gradient(180deg, #f8fafc 0%, #ffffff 40%, #f8fafc 100%);
    color: var(--gi-price-text-main);
    padding: 5rem 0 0 0;
    font-family: var(--gi-font-sans), 'Outfit', -apple-system, BlinkMacSystemFont, sans-serif;
    position: relative;
    overflow: hidden;
}

.gi-pricing-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 1.5rem;
    position: relative;
    z-index: 1;
}

/* Hero Section */
.gi-pricing-hero {
    text-align: center;
    max-width: 860px;
    margin: 0 auto 4rem auto;
}
.gi-pricing-pill-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    color: #0f172a;
    font-size: 0.82rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    padding: 6px 18px;
    border-radius: 50px;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
    margin-bottom: 1.5rem;
}
.gi-pricing-pill-badge svg {
    color: #ff6a1a;
}
.gi-pricing-hero h1 {
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 800;
    margin-bottom: 1.25rem;
    line-height: 1.15;
    letter-spacing: -0.025em;
    color: #0f172a;
}
.gi-pricing-hero p {
    font-size: 1.12rem;
    color: #64748b;
    max-width: 680px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Pricing Grid */
.gi-pricing-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    align-items: stretch;
    margin-bottom: 3rem;
}

/* Card Styling */
.gi-pricing-clean-card {
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
.gi-pricing-clean-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 48px -12px rgba(15, 23, 42, 0.09), 0 0 0 1px #cbd5e1;
    border-color: #cbd5e1;
}

/* Featured / Popular Card */
.gi-pricing-clean-card.is-popular {
    border: 2px solid #2a6aee;
    box-shadow: 0 14px 40px -6px rgba(42, 106, 238, 0.15), 0 4px 16px -2px rgba(42, 106, 238, 0.06);
}
.gi-pricing-clean-card.is-popular:hover {
    box-shadow: 0 26px 52px -10px rgba(42, 106, 238, 0.24), 0 0 0 2px #1d4ed8;
    transform: translateY(-8px);
}
.gi-pricing-popular-badge {
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
.gi-plan-title {
    font-size: 1.45rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.45rem 0;
    letter-spacing: -0.3px;
}
.gi-plan-tagline {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.5;
    margin: 0 0 1.6rem 0;
    min-height: 44px;
}

/* Price Value Display */
.gi-price-figure-wrap {
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #f1f5f9;
    margin-bottom: 1.6rem;
}
.gi-price-figure {
    font-size: 2.6rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1;
    display: flex;
    align-items: baseline;
    gap: 4px;
    letter-spacing: -1px;
}
.gi-price-figure .gi-price-currency {
    font-size: 1.55rem;
    font-weight: 700;
    color: #2a6aee;
}
.gi-price-figure .gi-price-unit {
    font-size: 0.95rem;
    font-weight: 600;
    color: #64748b;
    letter-spacing: 0;
    margin-left: 2px;
}
.gi-price-figure-custom {
    font-size: 2.15rem;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.5px;
    line-height: 1.15;
}
.gi-price-subtext {
    font-size: 0.82rem;
    color: #16a34a;
    font-weight: 600;
    margin-top: 0.5rem;
    display: flex;
    align-items: center;
    gap: 5px;
}

/* Features List */
.gi-pricing-feature-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2.2rem 0;
    display: flex;
    flex-direction: column;
    gap: 0.9rem;
    flex: 1;
}
.gi-pricing-feature-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.92rem;
    color: #334155;
    line-height: 1.4;
}
.gi-feature-check {
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
.gi-feature-check svg {
    width: 12px;
    height: 12px;
    stroke-width: 3;
}

/* CTA Buttons */
.gi-pricing-cta-btn {
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
.gi-cta-outline {
    background: #f8fafc;
    color: #0f172a !important;
    border: 1px solid #cbd5e1;
}
.gi-cta-outline:hover {
    background: #0f172a;
    border-color: #0f172a;
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.15);
}
.gi-cta-solid {
    background: linear-gradient(135deg, #2a6aee 0%, #1d4ed8 100%);
    color: #ffffff !important;
    border: none;
    box-shadow: 0 6px 20px rgba(42, 106, 238, 0.32);
}
.gi-cta-solid:hover {
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(42, 106, 238, 0.45);
}
.gi-cta-arrow {
    transition: transform 0.25s ease;
}
.gi-pricing-cta-btn:hover .gi-cta-arrow {
    transform: translateX(4px);
}

/* Support Reassurance Bar */
.gi-pricing-footer-bar {
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
    margin: 0 auto 5rem auto;
    box-shadow: 0 4px 16px rgba(15, 23, 42, 0.04);
    font-size: 0.92rem;
    color: #475569;
}
.gi-pricing-footer-item {
    display: flex;
    align-items: center;
    gap: 8px;
}
.gi-pricing-footer-item svg {
    color: #2a6aee;
    flex-shrink: 0;
}
.gi-pricing-footer-link {
    color: #2a6aee !important;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.2s ease;
}
.gi-pricing-footer-link:hover {
    color: #1e40af !important;
    text-decoration: underline;
}
.gi-pricing-footer-sep {
    color: #cbd5e1;
}

/* ==========================================================================
   WHY HUMAN PRODUCTION SECTION (LIGHT)
   ========================================================================== */
.gi-why-human-section {
    padding: 5rem 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.gi-why-human-title {
    text-align: center;
    max-width: 780px;
    margin: 0 auto 3.5rem auto;
}
.gi-why-human-title h2 {
    font-size: clamp(1.8rem, 3.2vw, 2.5rem);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 0.75rem;
    letter-spacing: -0.02em;
}
.gi-why-human-title p {
    color: #64748b;
    font-size: 1.05rem;
    line-height: 1.6;
}
.gi-why-human-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.75rem;
}
.gi-why-card {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 2.2rem 1.75rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}
.gi-why-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(15, 23, 42, 0.08);
    border-color: #cbd5e1;
    background: #ffffff;
}
.gi-why-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.25rem;
}
.gi-why-icon--blue {
    background: rgba(42, 106, 238, 0.1);
    color: #2a6aee;
}
.gi-why-icon--green {
    background: rgba(22, 163, 74, 0.1);
    color: #16a34a;
}
.gi-why-icon--amber {
    background: rgba(217, 119, 6, 0.1);
    color: #d97706;
}
.gi-why-icon--purple {
    background: rgba(139, 92, 246, 0.1);
    color: #8b5cf6;
}
.gi-why-card h3 {
    font-size: 1.2rem;
    font-weight: 750;
    color: #0f172a;
    margin: 0 0 0.5rem 0;
}
.gi-why-card p {
    font-size: 0.9rem;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* ==========================================================================
   TRUST BADGES SECTION (LIGHT)
   ========================================================================== */
.gi-trust-light-section {
    padding: 4.5rem 0;
    background: #f8fafc;
}
.gi-trust-badges-light {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}
.gi-trust-badge-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    padding: 1.75rem 1.5rem;
    display: flex;
    align-items: center;
    gap: 1.25rem;
    box-shadow: 0 4px 14px rgba(15, 23, 42, 0.03);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.gi-trust-badge-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06);
}
.gi-trust-badge-icon {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    background: rgba(42, 106, 238, 0.08);
    color: #2a6aee;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.gi-trust-badge-icon svg {
    width: 26px;
    height: 26px;
}
.gi-trust-badge-title {
    font-size: 1.05rem;
    font-weight: 750;
    color: #0f172a;
    margin-bottom: 0.2rem;
}
.gi-trust-badge-desc {
    font-size: 0.85rem;
    color: #64748b;
    line-height: 1.4;
}

/* ==========================================================================
   REVIEWS MARQUEE (LIGHT)
   ========================================================================== */
.gi-reviews-light-section {
    padding: 5rem 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    border-bottom: 1px solid #e2e8f0;
}
.gi-reviews-header-light {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 3.5rem auto;
}
.gi-reviews-header-light h2 {
    font-size: clamp(1.8rem, 3.2vw, 2.5rem);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 0.6rem;
    letter-spacing: -0.02em;
}
.gi-reviews-header-light p {
    color: #64748b;
    font-size: 1.05rem;
}
.gi-reviews-marquee-light {
    display: flex;
    overflow: hidden;
    gap: 2rem;
    position: relative;
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    padding: 0.75rem 0;
}
.gi-reviews-track-light {
    display: flex;
    gap: 2rem;
    width: max-content;
    animation: gi-scroll-marquee-light 65s linear infinite;
}
.gi-reviews-track-light:hover {
    animation-play-state: paused;
}
@keyframes gi-scroll-marquee-light {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 1rem)); }
}
.gi-review-card-light {
    width: 420px;
    flex-shrink: 0;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 2.2rem;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gi-review-card-light:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.08);
    background: #ffffff;
}
.gi-review-stars-light {
    display: flex;
    gap: 4px;
    margin-bottom: 1.25rem;
    color: #f59e0b;
}
.gi-review-stars-light svg {
    width: 18px;
    height: 18px;
    fill: currentColor;
}
.gi-review-text-light {
    font-size: 0.95rem;
    line-height: 1.65;
    color: #334155;
    margin-bottom: 1.75rem;
    font-style: italic;
    position: relative;
}
.gi-review-author-light {
    display: flex;
    align-items: center;
    gap: 12px;
}
.gi-review-avatar-light {
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
.gi-author-meta-light h4 {
    margin: 0 0 2px 0;
    font-size: 0.96rem;
    font-weight: 750;
    color: #0f172a;
}
.gi-author-meta-light span {
    font-size: 0.82rem;
    color: #64748b;
    display: flex;
    align-items: center;
    gap: 4px;
}
.gi-author-meta-light span svg {
    width: 13px;
    height: 13px;
    color: #16a34a;
}

/* ==========================================================================
   CALL TO ACTION (RHYTHM BLOCK)
   ========================================================================== */
.gi-pricing-cta-section {
    padding: 6rem 0;
    background: #f8fafc;
}
.gi-pricing-cta-box {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    border-radius: 28px;
    padding: 4.5rem 3rem;
    text-align: center;
    color: #ffffff;
    box-shadow: 0 24px 50px rgba(15, 23, 42, 0.2);
    position: relative;
    overflow: hidden;
}
.gi-pricing-cta-box::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -20%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(42, 106, 238, 0.25) 0%, transparent 70%);
    filter: blur(60px);
}
.gi-pricing-cta-box h2 {
    font-size: clamp(2rem, 3.8vw, 2.8rem);
    font-weight: 800;
    margin-bottom: 1rem;
    color: #ffffff;
    position: relative;
    z-index: 1;
}
.gi-pricing-cta-box p {
    font-size: 1.15rem;
    color: rgba(255, 255, 255, 0.8);
    max-width: 620px;
    margin: 0 auto 2.5rem auto;
    line-height: 1.6;
    position: relative;
    z-index: 1;
}
.gi-pricing-cta-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.25rem;
    position: relative;
    z-index: 1;
}
.gi-btn-trial-cta {
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
.gi-btn-trial-cta:hover {
    transform: translateY(-3px);
    box-shadow: 0 16px 36px rgba(234, 88, 12, 0.5);
    color: #ffffff !important;
}
.gi-btn-chat-cta {
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
.gi-btn-chat-cta:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #ffffff;
    transform: translateY(-3px);
}

/* Responsive */
@media (max-width: 992px) {
    .gi-pricing-cards-grid {
        grid-template-columns: 1fr;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
    }
    .gi-plan-tagline {
        min-height: auto;
    }
    .gi-why-human-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .gi-trust-badges-light {
        grid-template-columns: repeat(2, 1fr);
    }
    .gi-pricing-footer-bar {
        flex-direction: column;
        gap: 0.85rem;
        text-align: center;
    }
    .gi-pricing-footer-sep {
        display: none;
    }
}
@media (max-width: 600px) {
    .gi-why-human-grid {
        grid-template-columns: 1fr;
    }
    .gi-trust-badges-light {
        grid-template-columns: 1fr;
    }
    .gi-pricing-cta-box {
        padding: 3rem 1.5rem;
    }
}
</style>

<main class="gi-pricing-page-light">
    <div class="gi-pricing-container">
        
        <!-- Hero Header -->
        <div class="gi-pricing-hero" data-gi-animate="fade-up">
            <div class="gi-pricing-pill-badge">
                <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                Affordable Rates &bull; 100% Handcrafted
            </div>
            <h1>Transparent &amp; Predictable <span class="gi-highlight-blue">Pricing</span></h1>
            <p>Direct human retouching with wholesale bulk rates starting from $0.25/image. No hidden charges, no AI distortions, and no middleman markups.</p>
        </div>

        <!-- 3-Tier Pricing Cards -->
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
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Precision centering &amp; margin alignment</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Amazon, eBay &amp; Shopify ready formats</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Guaranteed 12-24h turnaround</li>
                </ul>

                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a volume rate for Essential Clipping & Background Removal.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-pricing-cta-btn gi-cta-outline">
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
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Ghost mannequin &amp; 3D neck joint</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Natural &amp; reflection drop shadows</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Precision color matching to swatches</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Dust, scratch &amp; wrinkle removal</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Dedicated production supervisor assigned</li>
                </ul>

                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a custom quote for Commercial Retouching & Ghost Mannequin.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-pricing-cta-btn gi-cta-solid">
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
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Stray hair &amp; anatomical contouring</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Multi-layer PSD delivery with masks</li>
                    <li><span class="gi-feature-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg></span> Direct senior art director review</li>
                </ul>

                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a consultation for High-End Editorial & Jewelry Retouching.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-pricing-cta-btn gi-cta-outline">
                    <span>Let's Start Chat</span>
                    <svg class="gi-cta-arrow" viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

        </div>

        <!-- Clean Reassurance Bar -->
        <div class="gi-pricing-footer-bar" data-gi-animate="fade-up">
            <div class="gi-pricing-footer-item">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Want to test our quality first?</span>
                <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pricing-footer-link">Test 2 Images Free &rarr;</a>
            </div>
            <span class="gi-pricing-footer-sep">&bull;</span>
            <div class="gi-pricing-footer-item">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>Strict Non-Disclosure (NDA) Protected</span>
            </div>
            <span class="gi-pricing-footer-sep">&bull;</span>
            <div class="gi-pricing-footer-item">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                <span>Average WhatsApp Reply: &lt; 5 Mins</span>
            </div>
        </div>

    </div>

    <!-- Why Direct Human Production Section -->
    <section class="gi-why-human-section">
        <div class="gi-pricing-container">
            <div class="gi-why-human-title" data-gi-animate="fade-up">
                <h2>Why Direct Human Production Crushes Rigid Pricing</h2>
                <p>Every eCommerce catalog has unique cutouts, lighting requirements, and style guides. Here is why high-volume brands partner directly with our senior retouching leads:</p>
            </div>
            
            <div class="gi-why-human-grid">
                <div class="gi-why-card" data-gi-animate="fade-up">
                    <div class="gi-why-icon gi-why-icon--blue">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3>Volume Elasticity</h3>
                    <p>Why pay rigid flat fees? The higher your monthly image volume, the lower we discount your per-image rate down to $0.25. You negotiate directly with our lead production team.</p>
                </div>

                <div class="gi-why-card" data-gi-animate="fade-up" data-gi-delay="100">
                    <div class="gi-why-icon gi-why-icon--green">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3>Real-Time Direct Chat</h3>
                    <p>Skip the 48-hour email ticketing queues. Speak directly with our production leads on WhatsApp for quote confirmations, status checks, and lightning-fast turnaround.</p>
                </div>

                <div class="gi-why-card" data-gi-animate="fade-up" data-gi-delay="200">
                    <div class="gi-why-icon gi-why-icon--amber">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                    </div>
                    <h3>Zero AI Hallucinations</h3>
                    <p>Automated AI tools distort jewelry facets, blur fine fabric textures, and create jagged edges. 100% of our clipping paths are hand-drawn with Photoshop Pen tools.</p>
                </div>

                <div class="gi-why-card" data-gi-animate="fade-up" data-gi-delay="300">
                    <div class="gi-why-icon gi-why-icon--purple">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <h3>Risk-Free 2-Image Test</h3>
                    <p>Never commit before testing. Send us 2 of your most complex product images right now. We will edit them to perfection before you spend a single dollar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Badges Section -->
    <section class="gi-trust-light-section">
        <div class="gi-pricing-container">
            <div class="gi-trust-badges-light">
                <div class="gi-trust-badge-item" data-gi-animate="fade-up">
                    <div class="gi-trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div>
                        <div class="gi-trust-badge-title">Strict NDA Protected</div>
                        <div class="gi-trust-badge-desc">Your unreleased product assets remain 100% confidential.</div>
                    </div>
                </div>

                <div class="gi-trust-badge-item" data-gi-animate="fade-up" data-gi-delay="100">
                    <div class="gi-trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <div>
                        <div class="gi-trust-badge-title">SSL Encrypted Data</div>
                        <div class="gi-trust-badge-desc">Bank-level 256-bit encryption for all file transfers.</div>
                    </div>
                </div>

                <div class="gi-trust-badge-item" data-gi-animate="fade-up" data-gi-delay="200">
                    <div class="gi-trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                    </div>
                    <div>
                        <div class="gi-trust-badge-title">24/7 Priority Support</div>
                        <div class="gi-trust-badge-desc">Our studio operates 24/7 to meet your tightest deadlines.</div>
                    </div>
                </div>

                <div class="gi-trust-badge-item" data-gi-animate="fade-up" data-gi-delay="300">
                    <div class="gi-trust-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div>
                        <div class="gi-trust-badge-title">100% Satisfaction</div>
                        <div class="gi-trust-badge-desc">Love every single image, or we re-edit with zero fees.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Reviews Section -->
    <section class="gi-reviews-light-section">
        <div class="gi-pricing-container">
            <div class="gi-reviews-header-light" data-gi-animate="fade-up">
                <h2>Trusted by High-Volume Brands</h2>
                <p>Over 500+ eCommerce brands, retailers, and commercial photographers rely on Graphics Innovator daily.</p>
            </div>
            
            <div class="gi-reviews-marquee-light">
                <div class="gi-reviews-track-light">
                    
                    <!-- Review 1 -->
                    <div class="gi-review-card-light">
                        <div class="gi-review-stars-light">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text-light">We process over 2,000 product images a month. Graphics Innovator handles all our ghost mannequin and clipping path work flawlessly. The 24-hour turnaround has saved our launch deadlines multiple times.</div>
                        <div class="gi-review-author-light">
                            <div class="gi-review-avatar-light">SM</div>
                            <div class="gi-author-meta-light">
                                <h4>Sarah Mitchell</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Art Director, Urban Wear</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="gi-review-card-light">
                        <div class="gi-review-stars-light">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text-light">As an Amazon FBA seller, pure white backgrounds and realistic drop shadows are critical for my conversions. The Commercial Retouching tier from these guys is worth every penny. CTR jumped 14%!</div>
                        <div class="gi-review-author-light">
                            <div class="gi-review-avatar-light">JP</div>
                            <div class="gi-author-meta-light">
                                <h4>Jason Patterson</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Top 1% Amazon Seller</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="gi-review-card-light">
                        <div class="gi-review-stars-light">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text-light">I shoot high-end jewelry and cosmetic campaigns. Their Editorial &amp; Jewelry tier is insane. The non-destructive dodge and burn and stray hair removal is flawless. Highly recommended!</div>
                        <div class="gi-review-author-light">
                            <div class="gi-review-avatar-light">EL</div>
                            <div class="gi-author-meta-light">
                                <h4>Elena Rostova</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Commercial Photographer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="gi-review-card-light">
                        <div class="gi-review-stars-light">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text-light">We shifted to Graphics Innovator to handle seasonal spikes. They took on 5,000 images in a single week and delivered perfect clipping without missing a beat. Outstanding scalability.</div>
                        <div class="gi-review-author-light">
                            <div class="gi-review-avatar-light">MR</div>
                            <div class="gi-author-meta-light">
                                <h4>Marcus Reed</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Operations Manager, Footwear Brand</span>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicates for Smooth Infinite Loop -->
                    <div class="gi-review-card-light" aria-hidden="true">
                        <div class="gi-review-stars-light">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text-light">We process over 2,000 product images a month. Graphics Innovator handles all our ghost mannequin and clipping path work flawlessly. The 24-hour turnaround has saved our launch deadlines multiple times.</div>
                        <div class="gi-review-author-light">
                            <div class="gi-review-avatar-light">SM</div>
                            <div class="gi-author-meta-light">
                                <h4>Sarah Mitchell</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Art Director, Urban Wear</span>
                            </div>
                        </div>
                    </div>

                    <div class="gi-review-card-light" aria-hidden="true">
                        <div class="gi-review-stars-light">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text-light">As an Amazon FBA seller, pure white backgrounds and realistic drop shadows are critical for my conversions. The Commercial Retouching tier from these guys is worth every penny. CTR jumped 14%!</div>
                        <div class="gi-review-author-light">
                            <div class="gi-review-avatar-light">JP</div>
                            <div class="gi-author-meta-light">
                                <h4>Jason Patterson</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Top 1% Amazon Seller</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Section -->
    <section class="gi-pricing-cta-section">
        <div class="gi-pricing-container">
            <div class="gi-pricing-cta-box" data-gi-animate="fade-up">
                <h2>Ready to Scale Your Visual Catalog?</h2>
                <p>Upload up to 3 test images right now. Our senior editors will process them to pixel perfection and return them in under 12 hours for zero cost.</p>
                <div class="gi-pricing-cta-actions">
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-btn-trial-cta">Start Your Free Trial Now &rarr;</a>
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I want to start a chat about our image catalog.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-btn-chat-cta">Let's Start Chat</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
