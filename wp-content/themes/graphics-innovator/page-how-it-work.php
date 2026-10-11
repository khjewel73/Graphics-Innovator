<?php
/**
 * Template Name: How It Works
 *
 * Ultra-Premium Enterprise Pipeline Design
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* Enterprise How It Works CSS */
:root {
    --gi-how-bg: #030811;
    --gi-how-card: rgba(255, 255, 255, 0.02);
    --gi-how-border: rgba(255, 255, 255, 0.05);
    --gi-how-accent: #2a6aee;
    --gi-how-glow: rgba(42, 106, 238, 0.15);
}

.gi-how-wrapper {
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.16) 0%, transparent 32%),
        radial-gradient(circle at 88% 82%, rgba(36,197,161,0.09) 0%, transparent 34%),
        linear-gradient(135deg, #030914 0%, #071a33 52%, #0d2748 100%);
    color: #fff;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    position: relative;
    overflow: hidden;
    padding: 8rem 0;
}

/* Ambient Background Glows */
.gi-how-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
    background-size: 72px 72px;
    mask-image: linear-gradient(to bottom, transparent 0%, #000 12%, #000 88%, transparent 100%);
    pointer-events: none;
    z-index: 0;
}
.gi-how-wrapper::after {
    content: '';
    position: absolute;
    bottom: 10%;
    right: -10%;
    width: 800px;
    height: 800px;
    background: radial-gradient(circle, var(--gi-how-glow) 0%, transparent 70%);
    filter: blur(100px);
    z-index: 0;
}

.gi-how-hero,
.gi-pipeline,
.gi-how-cta {
    position: relative;
}

.gi-step-row:nth-child(even) .gi-step-content,
.gi-how-cta {
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, rgba(3,7,13,0.94) 0%, rgba(11,17,28,0.92) 52%, rgba(17,24,39,0.9) 100%);
}

.gi-step-row:nth-child(odd) .gi-step-content {
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.14) 0%, transparent 32%),
        radial-gradient(circle at 88% 82%, rgba(36,197,161,0.08) 0%, transparent 34%),
        linear-gradient(135deg, rgba(3,9,20,0.94) 0%, rgba(7,26,51,0.9) 52%, rgba(13,39,72,0.88) 100%);
}

.gi-how-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
}

/* Hero Section */
.gi-how-hero {
    text-align: center;
    margin-bottom: 6rem;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}
.gi-how-hero h1 {
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    margin-bottom: 1.5rem;
    letter-spacing: -0.01em;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.gi-how-hero p {
    font-size: 1.25rem;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
}

/* Pipeline Layout */
.gi-pipeline {
    position: relative;
    max-width: 900px;
    margin: 0 auto;
    padding-bottom: 4rem;
}

/* The Glowing Vertical Line */
.gi-pipeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50px; /* Aligned with icons */
    width: 2px;
    background: linear-gradient(to bottom, transparent, rgba(52, 211, 153, 0.5), rgba(42, 106, 238, 0.5), transparent);
    z-index: 0;
}

/* Individual Step Cards */
.gi-step-row {
    display: flex;
    align-items: flex-start;
    gap: 3rem;
    margin-bottom: 4rem;
    position: relative;
    z-index: 1;
}
.gi-step-row:last-child {
    margin-bottom: 0;
}

/* Step Number/Icon */
.gi-step-icon {
    width: 100px;
    height: 100px;
    flex-shrink: 0;
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.8), rgba(0, 0, 0, 0.4));
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5), inset 0 0 20px rgba(255,255,255,0.02);
    position: relative;
    transition: all 0.5s ease;
}
.gi-step-row:hover .gi-step-icon {
    transform: scale(1.05);
    border-color: rgba(52, 211, 153, 0.5);
    box-shadow: 0 0 40px rgba(52, 211, 153, 0.2);
    color: #34d399;
}
.gi-step-icon svg {
    width: 40px;
    height: 40px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}

/* Step Content Card */
.gi-step-content {
    background: var(--gi-how-card);
    border: 1px solid var(--gi-how-border);
    border-radius: 24px;
    padding: 3rem;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    flex-grow: 1;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}
.gi-step-content::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 50%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.03), transparent);
    transform: skewX(-20deg);
    transition: 0.7s;
}
.gi-step-row:hover .gi-step-content {
    transform: translateY(-5px);
    border-color: rgba(255, 255, 255, 0.15);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}
.gi-step-row:hover .gi-step-content::before {
    left: 200%;
}
.gi-step-content h2 {
    font-size: 2rem;
    font-weight: 800;
    margin-top: 0;
    margin-bottom: 1rem;
    color: #fff;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.gi-step-content h2 span {
    font-size: 0.9rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
    background: rgba(255,255,255,0.1);
    padding: 0.25rem 0.75rem;
    border-radius: 100px;
}
.gi-step-content p {
    color: rgba(255,255,255,0.85);
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 0;
}
.gi-step-content ul {
    margin-top: 1.5rem;
    padding-left: 0;
    list-style: none;
}
.gi-step-content ul li {
    color: rgba(255,255,255,0.9);
    font-size: 1rem;
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}
.gi-step-content ul li svg {
    color: #34d399;
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

/* Individual Block Color Themes */
/* Step 1: Blue Upload Phase */
.gi-step-row:nth-child(1) .gi-step-icon {
    border-color: rgba(59, 130, 246, 0.3);
    color: #3b82f6;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5), inset 0 0 20px rgba(59, 130, 246, 0.1);
}
.gi-step-row:nth-child(1):hover .gi-step-icon {
    border-color: rgba(59, 130, 246, 0.6);
    box-shadow: 0 0 40px rgba(59, 130, 246, 0.3);
}
.gi-step-row:nth-child(1) .gi-step-content {
    border-color: rgba(59, 130, 246, 0.15);
}
.gi-step-row:nth-child(1):hover .gi-step-content {
    border-color: rgba(59, 130, 246, 0.3);
}
.gi-step-row:nth-child(1) ul li svg { color: #3b82f6; }

/* Step 2: Purple QA Phase */
.gi-step-row:nth-child(2) .gi-step-icon {
    border-color: rgba(168, 85, 247, 0.3);
    color: #a855f7;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5), inset 0 0 20px rgba(168, 85, 247, 0.1);
}
.gi-step-row:nth-child(2):hover .gi-step-icon {
    border-color: rgba(168, 85, 247, 0.6);
    box-shadow: 0 0 40px rgba(168, 85, 247, 0.3);
}
.gi-step-row:nth-child(2) .gi-step-content {
    border-color: rgba(168, 85, 247, 0.15);
}
.gi-step-row:nth-child(2):hover .gi-step-content {
    border-color: rgba(168, 85, 247, 0.3);
}
.gi-step-row:nth-child(2) ul li svg { color: #a855f7; }

/* Step 3: Green Delivery Phase */
.gi-step-row:nth-child(3) .gi-step-icon {
    border-color: rgba(16, 185, 129, 0.3);
    color: #10b981;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5), inset 0 0 20px rgba(16, 185, 129, 0.1);
}
.gi-step-row:nth-child(3):hover .gi-step-icon {
    border-color: rgba(16, 185, 129, 0.6);
    box-shadow: 0 0 40px rgba(16, 185, 129, 0.3);
}
.gi-step-row:nth-child(3) .gi-step-content {
    border-color: rgba(16, 185, 129, 0.15);
}
.gi-step-row:nth-child(3):hover .gi-step-content {
    border-color: rgba(16, 185, 129, 0.3);
}
.gi-step-row:nth-child(3) ul li svg { color: #10b981; }

/* CTA Section */
.gi-how-cta {
    margin-top: 6rem;
    text-align: center;
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
@media (max-width: 768px) {
    .gi-pipeline::before {
        left: 30px;
    }
    .gi-step-row {
        gap: 1.5rem;
    }
    .gi-step-icon {
        width: 60px;
        height: 60px;
    }
    .gi-step-icon svg {
        width: 24px;
        height: 24px;
    }
    .gi-step-content {
        padding: 2rem;
    }
    .gi-step-content h2 {
        font-size: 1.5rem;
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    .gi-how-hero h1 {
        font-size: 2.5rem;
    }
}
</style>

<main class="gi-how-wrapper">
    <div class="gi-how-container">
        
        <!-- Hero -->
        <div class="gi-how-hero">
            <h1>The Pipeline for Pixel-Perfect Retouching.</h1>
            <p>For enterprise clients handling thousands of product images, you need a workflow that guarantees absolute precision, 100% security, and strict deadlines. Here is how our production engine works.</p>
        </div>

        <!-- Pipeline Engine -->
        <div class="gi-pipeline">
            
            <!-- Step 1 -->
            <div class="gi-step-row">
                <div class="gi-step-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                </div>
                <div class="gi-step-content">
                    <h2><span>Step 01</span> Secure Upload & Briefing</h2>
                    <p>We accept massive raw file batches through our secure portal, Google Drive, Dropbox, or enterprise FTP. Every file you upload is instantly protected under a strict Non-Disclosure Agreement (NDA) ensuring your pre-release products never leak.</p>
                    <ul>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Support for RAW, TIFF, PSD, and massive JPG batches.</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Guaranteed NDA data security.</li>
                    </ul>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="gi-step-row">
                <div class="gi-step-icon">
                    <svg viewBox="0 0 24 24"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><line x1="10" y1="9" x2="8" y2="9"></line></svg>
                </div>
                <div class="gi-step-content">
                    <h2><span>Step 02</span> Manual Execution & 3-Tier QA</h2>
                    <p>Unlike automated agencies, our senior editors manually draw clipping paths using the Photoshop Pen Tool for absolutely flawless, hair-accurate edges. Once edited, your batch goes through our rigorous 3-Tier Quality Assurance check by a dedicated Art Director.</p>
                    <ul>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Zero AI shortcuts. 100% human-drawn vector paths.</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Pixel-perfect color correction and natural shadow rendering.</li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="gi-step-row">
                <div class="gi-step-icon">
                    <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <div class="gi-step-content">
                    <h2><span>Step 03</span> Rapid Review & Delivery</h2>
                    <p>Your polished images are delivered back to you perfectly formatted, optimized, and ready for your eCommerce store or print catalog. If you spot any details that need adjustment, we provide immediate priority revisions until you are 100% satisfied.</p>
                    <ul>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Strict 12 to 24-hour turnaround deadlines.</li>
                        <li><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Priority 1-hour revisions for urgent adjustments.</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="gi-how-cta">
            <h2>Ready to Test the Engine?</h2>
            <p>Upload up to 3 images right now. We will edit them flawlessly and return them in under 12 hours for absolutely no cost.</p>
            <a href="<?php echo site_url('/free-trial/'); ?>" class="gi-cta-button">Start Your Free Trial Now</a>
        </div>

    </div>
</main>

<?php get_footer(); ?>
