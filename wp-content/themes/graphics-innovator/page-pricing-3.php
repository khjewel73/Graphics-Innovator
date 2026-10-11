<?php
/**
 * Template Name: Enterprise Pricing
 * 
 * Custom ultra-high-converting pricing page.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* Enterprise Pricing CSS Engine */
:root {
    --gi-price-bg: #030811;
    --gi-price-card-bg: rgba(255, 255, 255, 0.02);
    --gi-price-card-border: rgba(255, 255, 255, 0.05);
    --gi-price-accent: #2a6aee;
    --gi-price-accent-glow: rgba(42, 106, 238, 0.4);
    --gi-price-purple: #8b5cf6;
}

.gi-pricing-page {
    background: var(--gi-price-bg);
    color: #fff;
    padding: 8rem 0;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    position: relative;
    overflow: hidden;
}

/* Background Ambient Glows */
.gi-pricing-page::before {
    content: '';
    position: absolute;
    top: -20%;
    left: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, var(--gi-price-accent-glow) 0%, transparent 70%);
    filter: blur(80px);
    opacity: 0.5;
    z-index: 0;
}
.gi-pricing-page::after {
    content: '';
    position: absolute;
    bottom: -20%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(139, 92, 246, 0.15) 0%, transparent 70%);
    filter: blur(80px);
    opacity: 0.5;
    z-index: 0;
}

.gi-pricing-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Hero Section */
.gi-pricing-hero {
    text-align: center;
    margin-bottom: 5rem;
}
.gi-pricing-hero h1 {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    margin-bottom: 1.5rem;
    line-height: 1.1;
    letter-spacing: -0.02em;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.gi-pricing-hero p {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.6);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Grid Layout */
.gi-pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    align-items: center;
    margin-bottom: 6rem;
}

/* Pricing Cards */
.gi-pricing-card {
    background: var(--gi-price-card-bg);
    border: 1px solid var(--gi-price-card-border);
    border-radius: 24px;
    padding: 3rem 2rem;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
    overflow: hidden;
}
.gi-pricing-card:hover {
    transform: translateY(-10px);
    border-color: rgba(255, 255, 255, 0.15);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

/* Popular Badge */
.gi-popular-badge {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, var(--gi-price-accent) 0%, var(--gi-price-purple) 100%);
    color: white;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 0.5rem 1.5rem;
    border-radius: 0 0 12px 12px;
    box-shadow: 0 5px 15px var(--gi-price-accent-glow);
}

/* Card Popular State */
.gi-pricing-card.is-popular {
    background: rgba(255,255,255,0.04);
    border-color: rgba(42, 106, 238, 0.3);
    box-shadow: 0 0 40px rgba(42, 106, 238, 0.1);
    transform: scale(1.05);
}
.gi-pricing-card.is-popular:hover {
    transform: scale(1.05) translateY(-10px);
    border-color: rgba(42, 106, 238, 0.5);
    box-shadow: 0 20px 40px rgba(42, 106, 238, 0.2);
}

/* Card Content */
.gi-tier-name {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: #fff;
}
.gi-tier-desc {
    font-size: 0.95rem;
    color: rgba(255,255,255,0.5);
    margin-bottom: 2rem;
    line-height: 1.5;
}
.gi-price-block {
    display: flex;
    align-items: baseline;
    margin-bottom: 2rem;
}
.gi-currency {
    font-size: 1.5rem;
    font-weight: 600;
    color: rgba(255,255,255,0.8);
}
.gi-price {
    font-size: 3.5rem;
    font-weight: 800;
    line-height: 1;
    color: #fff;
    margin: 0 0.25rem;
}
.gi-period {
    font-size: 1rem;
    color: rgba(255,255,255,0.5);
}

/* Features List */
.gi-features-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2.5rem 0;
}
.gi-features-list li {
    display: flex;
    align-items: flex-start;
    font-size: 1rem;
    color: rgba(255,255,255,0.8);
    margin-bottom: 1rem;
    line-height: 1.4;
}
.gi-features-list li svg {
    flex-shrink: 0;
    width: 20px;
    height: 20px;
    color: var(--gi-price-accent);
    margin-right: 0.75rem;
    margin-top: 2px;
}

/* CTA Buttons */
.gi-pricing-btn {
    display: block;
    width: 100%;
    text-align: center;
    padding: 1.2rem;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s;
}
.gi-btn-outline {
    background: transparent;
    color: #fff;
    border: 1px solid rgba(255,255,255,0.2);
}
.gi-btn-outline:hover {
    background: rgba(255,255,255,0.05);
    border-color: #fff;
}
.gi-btn-solid {
    background: linear-gradient(135deg, var(--gi-price-accent) 0%, #1d4ed8 100%);
    color: #fff;
    border: none;
    box-shadow: 0 10px 20px var(--gi-price-accent-glow);
}
.gi-btn-solid:hover {
    box-shadow: 0 15px 30px rgba(42, 106, 238, 0.6);
    transform: translateY(-2px);
    color: #fff;
}

/* Trust Bar Upgraded (Full Wide Screen) */
.gi-trust-bar {
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    background: linear-gradient(90deg, rgba(3,8,17,1) 0%, rgba(10,20,40,0.5) 50%, rgba(3,8,17,1) 100%);
    border-top: 1px solid rgba(255,255,255,0.05);
    border-bottom: 1px solid rgba(255,255,255,0.05);
    padding: 5rem 5vw;
    margin-bottom: 0;
}
.gi-trust-badges {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    max-width: 1800px;
    margin: 0 auto;
}
.gi-trust-item {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 16px;
    padding: 2rem;
    text-align: left;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
}
.gi-trust-item:hover {
    background: rgba(255,255,255,0.04);
    transform: translateY(-5px);
    border-color: rgba(42, 106, 238, 0.2);
}
.gi-trust-icon {
    width: 70px;
    height: 70px;
    margin-right: 1.5rem;
    flex-shrink: 0;
    background: rgba(42, 106, 238, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gi-price-accent);
    box-shadow: 0 0 20px rgba(42, 106, 238, 0.2);
}
.gi-trust-icon svg {
    width: 36px;
    height: 36px;
}
.gi-trust-content {
    flex: 1;
}
.gi-trust-title {
    color: #fff;
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
}
.gi-trust-desc {
    color: rgba(255,255,255,0.5);
    font-size: 0.95rem;
    line-height: 1.5;
}

/* Professional Reviews */
.gi-reviews-section {
    padding: 6rem 0 2rem 0;
}
.gi-reviews-header {
    text-align: center;
    margin-bottom: 4rem;
}
.gi-reviews-header h2 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    color: #fff;
}
.gi-reviews-header p {
    color: rgba(255,255,255,0.6);
    font-size: 1.1rem;
}
.gi-reviews-marquee {
    display: flex;
    overflow: hidden;
    gap: 2rem;
    position: relative;
    /* Fade the edges for a premium look */
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    padding: 1rem 0;
}
.gi-reviews-track {
    display: flex;
    gap: 2rem;
    width: max-content;
    animation: gi-scroll-marquee 60s linear infinite;
}
.gi-reviews-track:hover {
    animation-play-state: paused;
}
@keyframes gi-scroll-marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 1rem)); }
}
.gi-review-card {
    width: 450px;
    flex-shrink: 0;
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 16px;
    padding: 2.5rem;
    position: relative;
    transition: transform 0.3s;
}
.gi-review-card:hover {
    transform: translateY(-5px);
    background: rgba(255,255,255,0.03);
    border-color: rgba(255,255,255,0.1);
}
.gi-review-stars {
    display: flex;
    gap: 0.25rem;
    margin-bottom: 1.5rem;
    color: #fbbf24;
}
.gi-review-stars svg {
    width: 20px;
    height: 20px;
    fill: currentColor;
}
.gi-review-text {
    font-size: 1rem;
    line-height: 1.7;
    color: rgba(255,255,255,0.8);
    margin-bottom: 2rem;
    font-style: italic;
    position: relative;
}
.gi-review-text::before {
    content: '"';
    font-size: 4rem;
    color: rgba(255,255,255,0.05);
    position: absolute;
    top: -1.5rem;
    left: -1rem;
    font-family: serif;
    line-height: 1;
}
.gi-review-author {
    display: flex;
    align-items: center;
}
.gi-review-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--gi-price-accent) 0%, var(--gi-price-purple) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 700;
    font-size: 1.2rem;
    margin-right: 1rem;
    flex-shrink: 0;
}
.gi-author-meta h4 {
    margin: 0 0 0.25rem 0;
    font-size: 1rem;
    font-weight: 700;
    color: #fff;
}
.gi-author-meta span {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.5);
    display: flex;
    align-items: center;
}
.gi-author-meta span svg {
    width: 14px;
    height: 14px;
    margin-right: 0.25rem;
    color: #34d399;
}

/* Responsive */
@media (max-width: 992px) {
    .gi-pricing-card.is-popular {
        transform: scale(1);
    }
    .gi-pricing-card.is-popular:hover {
        transform: scale(1) translateY(-10px);
    }
}
@media (max-width: 1200px) {
    .gi-trust-badges {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 768px) {
    .gi-trust-badges {
        grid-template-columns: 1fr;
    }
    .gi-trust-item {
        flex-direction: column;
        text-align: center;
    }
    .gi-trust-icon {
        margin: 0 auto 1.5rem auto;
    }
}
</style>

<main class="gi-pricing-page gi-page-rhythm">
    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-pricing-container">
        <div class="gi-pricing-hero">
            <h1>Transparent Pricing. <br>World-Class Quality.</h1>
            <p>Scale your eCommerce imagery without scaling your overhead. No hidden fees, strict NDA protection, and pixel-perfect results delivered in 24 hours.</p>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-pricing-container">
        <div class="gi-pricing-grid">
            
            <!-- Tier 1 -->
            <div class="gi-pricing-card">
                <div class="gi-tier-name">Essential Clipping</div>
                <div class="gi-tier-desc">Perfect for high-volume eCommerce catalogs that need rapid, flawless background removal.</div>
                <div class="gi-price-block">
                    <span class="gi-currency">$</span>
                    <span class="gi-price">0.99</span>
                    <span class="gi-period">/ image</span>
                </div>
                <ul class="gi-features-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced Multi-path Clipping</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Flawless Background Removal</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Basic Image Alignment</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Amazon & eBay Ready</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> 24-Hour Turnaround</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pricing-btn gi-btn-outline">Start Free Trial</a>
            </div>

            <!-- Tier 2 (Popular) -->
            <div class="gi-pricing-card is-popular">
                <div class="gi-popular-badge">Most Popular</div>
                <div class="gi-tier-name">Advanced Retouching</div>
                <div class="gi-tier-desc">The industry standard for premium brands. Includes complex shadows and color correction.</div>
                <div class="gi-price-block">
                    <span class="gi-currency">$</span>
                    <span class="gi-price">2.49</span>
                    <span class="gi-period">/ image</span>
                </div>
                <ul class="gi-features-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Everything in Essential</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Ghost Mannequin Effect</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Drop & Reflection Shadows</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Advanced Color Correction</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Spot & Blemish Removal</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated Account Manager</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-pricing-btn gi-btn-solid">Get Started Now</a>
            </div>

            <!-- Tier 3 -->
            <div class="gi-pricing-card">
                <div class="gi-tier-name">High-End Editorial</div>
                <div class="gi-tier-desc">Magazine-quality retouching for fashion, models, jewelry, and highly complex imagery.</div>
                <div class="gi-price-block">
                    <span class="gi-currency">$</span>
                    <span class="gi-price">5.99</span>
                    <span class="gi-period">/ image</span>
                </div>
                <ul class="gi-features-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Everything in Advanced</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> High-End Skin Retouching</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Stray Hair & Wrinkle Removal</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Non-destructive Dodge & Burn</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Unlimited Free Revisions</li>
                </ul>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-pricing-btn gi-btn-outline">Speak to an Expert</a>
            </div>

        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-blue">
        <div class="gi-pricing-container">
        <div class="gi-trust-bar">
            <div class="gi-trust-badges">
                <div class="gi-trust-item">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="gi-trust-content">
                        <div class="gi-trust-title">Strict NDA Protected</div>
                        <div class="gi-trust-desc">Your files remain 100% confidential and secure.</div>
                    </div>
                </div>
                <div class="gi-trust-item">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <div class="gi-trust-content">
                        <div class="gi-trust-title">SSL Encrypted Data</div>
                        <div class="gi-trust-desc">Bank-level 256-bit encryption for all transfers.</div>
                    </div>
                </div>
                <div class="gi-trust-item">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                    </div>
                    <div class="gi-trust-content">
                        <div class="gi-trust-title">24/7 Priority Support</div>
                        <div class="gi-trust-desc">We are always online to meet your deadlines.</div>
                    </div>
                </div>
                <div class="gi-trust-item">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div class="gi-trust-content">
                        <div class="gi-trust-title">100% Satisfaction</div>
                        <div class="gi-trust-desc">Love the results, or we re-edit for free.</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-pricing-container">
        <!-- Professional Reviews Section -->
        <div class="gi-reviews-section">
            <div class="gi-reviews-header">
                <h2>Trusted by High-Volume Brands</h2>
                <p>Over 500+ eCommerce and photography agencies rely on us daily.</p>
            </div>
            
            <div class="gi-reviews-marquee">
                <div class="gi-reviews-track">
                    
                    <!-- Original 6 Reviews -->
                    <!-- Review 1 -->
                    <div class="gi-review-card">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">We process over 2,000 product images a month. Graphics Innovator handles all our ghost mannequin and clipping path work flawlessly. The 24-hour turnaround has literally saved our launch deadlines multiple times. Absolutely indispensable team.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">SM</div>
                            <div class="gi-author-meta">
                                <h4>Sarah Mitchell</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Art Director, Urban Wear</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="gi-review-card">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">As an Amazon FBA seller, pure white backgrounds and realistic drop shadows are critical for my conversions. The Advanced Retouching tier from these guys is worth every penny. My click-through rates jumped by 14% after uploading their edited photos.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">JP</div>
                            <div class="gi-author-meta">
                                <h4>Jason Patterson</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Top 1% Amazon Seller</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="gi-review-card">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">I shoot dozens of high-end jewelry and cosmetic campaigns. Their High-End Editorial tier is insane. The non-destructive dodge and burn and stray hair removal is flawless. They follow my exact style guides perfectly. Highly recommended!</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">EL</div>
                            <div class="gi-author-meta">
                                <h4>Elena Rostova</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Commercial Photographer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 4 -->
                    <div class="gi-review-card">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">We shifted from an in-house editor to Graphics Innovator to handle our seasonal catalog spikes. They took on 5,000 images in a single week and delivered perfect multi-path clipping without missing a beat. Outstanding scalability.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">MR</div>
                            <div class="gi-author-meta">
                                <h4>Marcus Reed</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Operations Manager, Footwear Brand</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 5 -->
                    <div class="gi-review-card">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">Finding an agency that truly understands color correction for tricky reflective surfaces (like watches and glass) is hard. These guys do it perfectly. The Essential Clipping tier is so cheap considering the unbelievable quality we receive back.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">CD</div>
                            <div class="gi-author-meta">
                                <h4>Chloe Davis</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Creative Director, Ad Agency</span>
                            </div>
                        </div>
                    </div>

                    <!-- Review 6 -->
                    <div class="gi-review-card">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">During the peak wedding season, we shoot 15+ events a month. Their team acts as our dedicated backend studio, handling all the bulk culling and color correction. I finally have my weekends back because of Graphics Innovator!</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">AW</div>
                            <div class="gi-author-meta">
                                <h4>Adam Walker</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Lead Photographer, Studio 52</span>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicated 6 Reviews for Seamless Infinite Loop -->
                    <div class="gi-review-card" aria-hidden="true">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">We process over 2,000 product images a month. Graphics Innovator handles all our ghost mannequin and clipping path work flawlessly. The 24-hour turnaround has literally saved our launch deadlines multiple times. Absolutely indispensable team.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">SM</div>
                            <div class="gi-author-meta">
                                <h4>Sarah Mitchell</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Art Director, Urban Wear</span>
                            </div>
                        </div>
                    </div>
                    <div class="gi-review-card" aria-hidden="true">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">As an Amazon FBA seller, pure white backgrounds and realistic drop shadows are critical for my conversions. The Advanced Retouching tier from these guys is worth every penny. My click-through rates jumped by 14% after uploading their edited photos.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">JP</div>
                            <div class="gi-author-meta">
                                <h4>Jason Patterson</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Top 1% Amazon Seller</span>
                            </div>
                        </div>
                    </div>
                    <div class="gi-review-card" aria-hidden="true">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">I shoot dozens of high-end jewelry and cosmetic campaigns. Their High-End Editorial tier is insane. The non-destructive dodge and burn and stray hair removal is flawless. They follow my exact style guides perfectly. Highly recommended!</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">EL</div>
                            <div class="gi-author-meta">
                                <h4>Elena Rostova</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Commercial Photographer</span>
                            </div>
                        </div>
                    </div>
                    <div class="gi-review-card" aria-hidden="true">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">We shifted from an in-house editor to Graphics Innovator to handle our seasonal catalog spikes. They took on 5,000 images in a single week and delivered perfect multi-path clipping without missing a beat. Outstanding scalability.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">MR</div>
                            <div class="gi-author-meta">
                                <h4>Marcus Reed</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Operations Manager, Footwear Brand</span>
                            </div>
                        </div>
                    </div>
                    <div class="gi-review-card" aria-hidden="true">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">Finding an agency that truly understands color correction for tricky reflective surfaces (like watches and glass) is hard. These guys do it perfectly. The Essential Clipping tier is so cheap considering the unbelievable quality we receive back.</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">CD</div>
                            <div class="gi-author-meta">
                                <h4>Chloe Davis</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Creative Director, Ad Agency</span>
                            </div>
                        </div>
                    </div>
                    <div class="gi-review-card" aria-hidden="true">
                        <div class="gi-review-stars">
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        </div>
                        <div class="gi-review-text">During the peak wedding season, we shoot 15+ events a month. Their team acts as our dedicated backend studio, handling all the bulk culling and color correction. I finally have my weekends back because of Graphics Innovator!</div>
                        <div class="gi-review-author">
                            <div class="gi-review-avatar">AW</div>
                            <div class="gi-author-meta">
                                <h4>Adam Walker</h4>
                                <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Lead Photographer, Studio 52</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
