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

/* WhatsApp & Custom Volume Rate Styling */
.gi-price-custom-block {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 14px;
    padding: 1.25rem 1.4rem;
    margin-bottom: 2rem;
    transition: all 0.3s ease;
}
.gi-pricing-card:hover .gi-price-custom-block {
    border-color: rgba(37, 211, 102, 0.4);
    background: rgba(37, 211, 102, 0.04);
}
.gi-custom-title {
    font-size: 1.55rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 0.35rem;
    letter-spacing: -0.3px;
}
.gi-custom-sub {
    font-size: 0.92rem;
    color: #25D366;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 0.5rem;
}
.gi-custom-badge {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 3px 8px;
    border-radius: 6px;
    background: rgba(42, 106, 238, 0.15);
    color: var(--gi-price-accent);
    border: 1px solid rgba(42, 106, 238, 0.3);
}

.gi-card-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-top: auto;
}
.gi-btn-wa {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #ffffff !important;
    border: none;
    padding: 1.1rem;
    border-radius: 12px;
    font-size: 1.05rem;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(37, 211, 102, 0.35);
    transition: all 0.3s;
}
.gi-btn-wa:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(37, 211, 102, 0.55);
    color: #ffffff !important;
}

/* Director Hotwire Banner */
.gi-director-banner {
    background: linear-gradient(135deg, rgba(15, 43, 36, 0.95) 0%, rgba(8, 17, 30, 0.98) 100%);
    border: 1px solid rgba(37, 211, 102, 0.35);
    border-radius: 20px;
    padding: 2.2rem 2.8rem;
    margin-bottom: 3.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2.5rem;
    box-shadow: 0 20px 45px rgba(0,0,0,0.5), 0 0 35px rgba(37, 211, 102, 0.12);
}
.gi-director-content {
    flex: 1;
}
.gi-director-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.76rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    color: #25D366;
    background: rgba(37, 211, 102, 0.12);
    border: 1px solid rgba(37, 211, 102, 0.3);
    padding: 5px 12px;
    border-radius: 50px;
    margin-bottom: 0.8rem;
}
.gi-pulse-dot {
    width: 8px;
    height: 8px;
    background: #25D366;
    border-radius: 50%;
    box-shadow: 0 0 8px #25D366;
    animation: giPulse 1.8s infinite;
}
@keyframes giPulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.4); opacity: 0.4; }
    100% { transform: scale(1); opacity: 1; }
}
.gi-director-title {
    font-size: 1.8rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 0.5rem 0;
    line-height: 1.25;
}
.gi-director-desc {
    font-size: 1rem;
    color: rgba(255,255,255,0.78);
    margin: 0;
    line-height: 1.55;
    max-width: 680px;
}
.gi-director-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    flex-shrink: 0;
    min-width: 280px;
}
.gi-director-btn-wa {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: #ffffff !important;
    border: none;
    padding: 1.15rem 1.8rem;
    border-radius: 12px;
    font-size: 1.05rem;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 8px 22px rgba(37, 211, 102, 0.45);
    transition: all 0.3s;
}
.gi-director-btn-wa:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(37, 211, 102, 0.6);
}
.gi-director-btn-trial {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: transparent;
    color: #ffffff !important;
    border: 1px solid rgba(255,255,255,0.25);
    padding: 0.85rem 1.5rem;
    border-radius: 12px;
    font-size: 0.92rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s;
}
.gi-director-btn-trial:hover {
    background: rgba(255,255,255,0.08);
    border-color: #ffffff;
}

/* Hero Trust Pills */
.gi-hero-pills {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 1.75rem;
}
.gi-hero-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    padding: 7px 16px;
    border-radius: 50px;
    font-size: 0.85rem;
    color: rgba(255,255,255,0.9);
    font-weight: 500;
}
.gi-hero-pill svg {
    color: #25D366;
}

/* Why Human Section */
.gi-why-human {
    margin-top: 4rem;
    padding-top: 3.5rem;
    border-top: 1px solid rgba(255,255,255,0.08);
}
.gi-why-human-title {
    text-align: center;
    margin-bottom: 2.5rem;
}
.gi-why-human-title h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 0.5rem;
}
.gi-why-human-title p {
    color: rgba(255,255,255,0.65);
    font-size: 1.05rem;
}
.gi-why-human-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}
.gi-why-card {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 16px;
    padding: 1.8rem 1.5rem;
    transition: transform 0.3s, border-color 0.3s;
}
.gi-why-card:hover {
    transform: translateY(-4px);
    border-color: rgba(37, 211, 102, 0.3);
}
.gi-why-icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: rgba(37, 211, 102, 0.12);
    color: #25D366;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.2rem;
}
.gi-why-card h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 0.5rem;
}
.gi-why-card p {
    font-size: 0.88rem;
    color: rgba(255,255,255,0.65);
    line-height: 1.5;
    margin: 0;
}

@media (max-width: 1024px) {
    .gi-why-human-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 900px) {
    .gi-director-banner {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1.5rem;
    }
    .gi-director-actions {
        width: 100%;
        min-width: unset;
    }
}
@media (max-width: 600px) {
    .gi-why-human-grid {
        grid-template-columns: 1fr;
    }
    .gi-director-title {
        font-size: 1.45rem;
    }
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
            <h1>Tailored Bulk Rates. <br><span class="gi-text-gradient">Direct Human Production.</span></h1>
            <p>No automated bots, no rigid middleman markups. Every catalog has unique complexity—talk directly with our senior retouching leads on WhatsApp for customized wholesale volume rates starting as low as $0.25/image.</p>
            
            <div class="gi-hero-pills">
                <span class="gi-hero-pill">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    Average WhatsApp Reply: &lt; 2 Mins
                </span>
                <span class="gi-hero-pill">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    100% Handcrafted by Senior Retouchers (0 AI Artifacts)
                </span>
                <span class="gi-hero-pill">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    Strict Non-Disclosure (NDA) Protected
                </span>
            </div>
        </div>
        </div>
    </section>

    <section class="gi-rhythm-block gi-rhythm-charcoal">
        <div class="gi-pricing-container">

        <!-- Live Production Director Hotwire Banner -->
        <div class="gi-director-banner">
            <div class="gi-director-content">
                <div class="gi-director-badge">
                    <span class="gi-pulse-dot"></span>
                    Live Production Director On Duty
                </div>
                <h2 class="gi-director-title">Need a Custom Wholesale Rate for 50 to 5,000+ Images?</h2>
                <p class="gi-director-desc">Skip the long email ticketing queue. Send sample photos or catalog guidelines directly to our lead production supervisor on WhatsApp for an instant, locked-in custom quote within 2–5 minutes.</p>
            </div>
            <div class="gi-director-actions">
                <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I have a batch of photos and need an instant custom volume rate.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-director-btn-wa">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                    <span>Chat on WhatsApp</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-director-btn-trial">
                    🧪 Test 2 Images For Free First
                </a>
            </div>
        </div>

        <div class="gi-pricing-grid">
            
            <!-- Tier 1: Essential Clipping -->
            <div class="gi-pricing-card">
                <div class="gi-tier-name">Essential Bulk Clipping</div>
                <div class="gi-tier-desc">High-speed background removal, multi-path clipping, and cutouts for eCommerce catalogs.</div>
                
                <div class="gi-price-custom-block">
                    <div class="gi-custom-title">Custom Volume Rate</div>
                    <div class="gi-custom-sub">⚡ Starting from $0.25 / image</div>
                    <span class="gi-custom-badge">Volume Tiered Pricing</span>
                </div>

                <ul class="gi-features-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Hand-drawn pen clipping paths (100% human)</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Pure white (RGB 255) &amp; transparent cutouts</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Precision centering &amp; margin alignment</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Amazon, eBay &amp; Shopify ready formats</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Guaranteed 12–24h batch turnaround</li>
                </ul>

                <div class="gi-card-actions">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a bulk volume rate for Essential Clipping & Background Removal.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-btn-wa">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                        <span>Get Batch Quote on WhatsApp</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pricing-btn gi-btn-outline">Test 2 Images Free</a>
                </div>
            </div>

            <!-- Tier 2: Commercial Retouching (Most Popular) -->
            <div class="gi-pricing-card is-popular">
                <div class="gi-popular-badge">🔥 Most Popular</div>
                <div class="gi-tier-name">Commercial Retouching</div>
                <div class="gi-tier-desc">The industry standard for apparel, footwear, and consumer brand catalogs.</div>
                
                <div class="gi-price-custom-block">
                    <div class="gi-custom-title">Tailored Catalog Rate</div>
                    <div class="gi-custom-sub">⚡ Custom Quote • Save up to 45%</div>
                    <span class="gi-custom-badge">Direct Supervisor Negotiation</span>
                </div>

                <ul class="gi-features-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Everything in Essential Clipping</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Invisible Ghost Mannequin &amp; Neck Joint 3D</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Natural, drop &amp; realistic reflection shadows</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Precision color matching to physical swatches</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Dust, scratch, wrinkle &amp; blemish removal</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Dedicated production supervisor assigned</li>
                </ul>

                <div class="gi-card-actions">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a custom catalog rate for Commercial Retouching & Ghost Mannequin.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-btn-wa">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                        <span>Chat With Retouch Lead</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/free-trial/' ) ); ?>" class="gi-pricing-btn gi-btn-outline">Start Free Trial Test</a>
                </div>
            </div>

            <!-- Tier 3: High-End Editorial -->
            <div class="gi-pricing-card">
                <div class="gi-tier-name">High-End Editorial &amp; Jewelry</div>
                <div class="gi-tier-desc">Magazine-quality retouching for jewelry, cosmetics, luxury goods, and fashion models.</div>
                
                <div class="gi-price-custom-block">
                    <div class="gi-custom-title">Enterprise Studio Scope</div>
                    <div class="gi-custom-sub">⚡ Bespoke Scope • 1-on-1 Direction</div>
                    <span class="gi-custom-badge">Senior Art Director Lead</span>
                </div>

                <ul class="gi-features-list">
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Everything in Commercial Retouching</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Non-destructive Dodge &amp; Burn skin treatment</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> High-end jewelry diamond sparkle &amp; metal polish</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Stray hair, texture &amp; anatomical contouring</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Multi-layer PSD delivery with masks intact</li>
                    <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Unlimited revisions until 100% sign-off</li>
                </ul>

                <div class="gi-card-actions">
                    <a href="https://wa.me/8801714516662?text=<?php echo rawurlencode('Hello Graphics Innovator! I need a consultation with your Senior Art Director for High-End Editorial Retouching.'); ?>" target="_blank" rel="noopener noreferrer" class="gi-btn-wa">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.53 7.08C9.33 7.08 9.14 7.15 8.98 7.39C8.78 7.63 8.24 8.14 8.24 9.18C8.24 10.22 9 11.22 9.12 11.38C9.24 11.54 10.61 13.65 12.7 14.55C14.44 15.3 14.79 15.15 15.17 15.12C15.56 15.08 16.42 14.61 16.6 14.1C16.78 13.59 16.78 13.16 16.72 13.06C16.67 12.96 16.53 12.9 16.33 12.8C16.12 12.7 15.12 12.21 14.93 12.14C14.75 12.07 14.61 12.04 14.47 12.24C14.33 12.45 13.94 12.9 13.82 13.04C13.7 13.18 13.58 13.2 13.38 13.1C13.17 13 12.5 12.78 11.71 12.07C11.09 11.52 10.67 10.84 10.55 10.63C10.43 10.43 10.54 10.31 10.64 10.21C10.74 10.12 10.85 9.98 10.96 9.86C11.06 9.74 11.1 9.65 11.16 9.51C11.23 9.38 11.19 9.25 11.14 9.15C11.09 9.05 10.68 8.04 10.51 7.63C10.35 7.23 10.18 7.28 10.05 7.27C9.93 7.27 9.79 7.27 9.64 7.27L9.53 7.08Z"/></svg>
                        <span>Consult Senior Art Director</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="gi-pricing-btn gi-btn-outline">Book Consultation</a>
                </div>
            </div>

        </div>

        <!-- Why Human Production Wins Section -->
        <div class="gi-why-human">
            <div class="gi-why-human-title">
                <h2>Why Direct Human Production Crushes Rigid Pricing</h2>
                <p>Every photoshoot has unique lighting, cutouts, and catalog guidelines. Here is why clients choose our direct human funnel:</p>
            </div>
            
            <div class="gi-why-human-grid">
                <div class="gi-why-card">
                    <div class="gi-why-icon">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3>Volume Elasticity</h3>
                    <p>Why pay flat fees? The higher your monthly volume, the lower we discount your per-image rate down to $0.25. You negotiate directly with our production leads.</p>
                </div>

                <div class="gi-why-card">
                    <div class="gi-why-icon">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3>2-Minute WhatsApp Speed</h3>
                    <p>No waiting 48 hours for an email ticketing system. Get direct status updates, revision checks, and quote confirmations in real-time on your phone.</p>
                </div>

                <div class="gi-why-card">
                    <div class="gi-why-icon">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                    </div>
                    <h3>Zero AI Hallucinations</h3>
                    <p>Automated AI tools distort jewelry facets, blur fine fabric textures, and create jagged edges. 100% of our work is crafted manually with pen tools and layer masks.</p>
                </div>

                <div class="gi-why-card">
                    <div class="gi-why-icon">
                        <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <h3>Risk-Free 2-Image Test</h3>
                    <p>Never commit before testing. Send us 2 of your most complex product images right now. We will edit them to perfection before you spend a single dollar.</p>
                </div>
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
