<?php
/**
 * Template Name: Free Trial
 *
 * Ultra-Premium Enterprise Free Trial Engine
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* Enterprise Free Trial CSS */
:root {
    --gi-trial-bg: #030711;
    --gi-trial-card: rgba(12, 22, 38, 0.72);
    --gi-trial-border: rgba(148, 163, 184, 0.14);
    --gi-trial-accent: #2f7cff;
    --gi-trial-orange: #ff6a1a;
    --gi-trial-glow: rgba(47, 124, 255, 0.18);
}

.gi-trial-wrapper {
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
.gi-trial-wrapper::before {
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
.gi-trial-wrapper::after {
    content: '';
    position: absolute;
    bottom: -10%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 106, 26, 0.12) 0%, transparent 70%);
    filter: blur(80px);
    z-index: 0;
}

.gi-trial-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 6rem;
    align-items: center;
}

/* Left: The Pitch */
.gi-trial-pitch h1 {
    font-size: clamp(2.2rem, 3.5vw, 3.5rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    letter-spacing: -0.02em;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.gi-trial-pitch > p {
    font-size: 1.25rem;
    color: rgba(212, 222, 234, 0.76);
    margin-bottom: 3rem;
    line-height: 1.6;
    max-width: 550px;
}

/* Trust Badges Grid */
.gi-trust-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1.5rem;
    margin-bottom: 4rem;
}
.gi-trust-card {
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.12) 0%, transparent 32%),
        linear-gradient(135deg, rgba(8,20,38,0.82) 0%, rgba(5,11,22,0.78) 100%);
    border: 1px solid var(--gi-trial-border);
    border-radius: 20px;
    padding: 2rem 1.5rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    position: relative;
    overflow: hidden;
}
.gi-trust-card:nth-child(even) {
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, rgba(3,7,13,0.9) 0%, rgba(11,17,28,0.86) 52%, rgba(17,24,39,0.84) 100%);
}
/* Glassmorphic Light Sweep Effect */
.gi-trust-card::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 50%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.08), transparent);
    transform: skewX(-20deg);
    transition: 0.7s;
}
.gi-trust-card:hover {
    transform: translateY(-10px);
    border-color: rgba(47, 124, 255, 0.34);
    box-shadow: 0 16px 34px rgba(47, 124, 255, 0.12);
}
.gi-trust-card:hover::before {
    left: 200%;
}
.gi-trust-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, rgba(47, 124, 255, 0.20) 0%, rgba(255, 106, 26, 0.10) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #69A8FF;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(47, 124, 255, 0.28);
}
.gi-trust-icon svg {
    width: 22px;
    height: 22px;
}
.gi-trust-card h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #fff;
    margin: 0 0 0.5rem 0;
}
.gi-trust-card p {
    color: rgba(212, 222, 234, 0.62);
    margin: 0;
    font-size: 0.85rem;
    line-height: 1.5;
}

/* Transfer Integrations */
.gi-transfer-logos {
    border-top: 1px solid rgba(148,163,184,0.14);
    padding-top: 2.5rem;
}
.gi-transfer-logos p {
    font-size: 0.85rem;
    color: #fff;
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 800;
    display: flex;
    align-items: center;
    gap: 1rem;
}
.gi-transfer-logos p::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, rgba(255,255,255,0.2), transparent);
}
.gi-transfer-icons {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem 2rem;
    align-items: center;
}
.gi-transfer-brand {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    cursor: pointer;
    background: rgba(12,22,38,0.72);
    border: 1px solid rgba(148,163,184,0.14);
    padding: 0.75rem 1.25rem;
    border-radius: 12px;
}
.gi-transfer-brand:hover {
    background: rgba(47, 124, 255, 0.08);
    transform: translateY(-3px);
    border-color: currentColor;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}
.gi-transfer-brand svg {
    height: 20px;
    width: auto;
    fill: currentColor;
}
.gi-transfer-brand span {
    font-size: 0.9rem;
    font-weight: 700;
    letter-spacing: 0.02em;
    color: #fff;
}

/* Right: The Portal (Form) */
.gi-contact-portal {
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, rgba(3,7,13,0.96) 0%, rgba(11,17,28,0.94) 52%, rgba(17,24,39,0.92) 100%);
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 24px;
    padding: 3.5rem;
    backdrop-filter: blur(40px);
    -webkit-backdrop-filter: blur(40px);
    box-shadow: 
        0 36px 90px rgba(0,0,0,0.58),
        0 0 0 1px rgba(47,124,255,0.08),
        inset 0 1px 0 rgba(255,255,255,0.10);
    position: relative;
    z-index: 1;
}
/* Cyberpunk Animated Border Glow */
.gi-contact-portal::after {
    content: '';
    position: absolute;
    top: -2px; left: -2px; right: -2px; bottom: -2px;
    background: linear-gradient(135deg, rgba(47,124,255,0.42), rgba(255,106,26,0.32), rgba(47,124,255,0.18));
    z-index: -1;
    border-radius: 26px;
    animation: none;
    opacity: 0.42;
}
@keyframes borderGlow {
    0% { filter: hue-rotate(0deg); opacity: 0.5; }
    50% { opacity: 1; }
    100% { filter: hue-rotate(360deg); opacity: 0.5; }
}
.gi-portal-title {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    color: #fff;
}
.gi-portal-desc {
    color: rgba(212, 222, 234, 0.68);
    margin-bottom: 2rem;
    font-size: 1rem;
}

/* Overriding Contact Form 7 to look Enterprise */
.gi-contact-portal .wpcf7-form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}
/* Force all elements to span full width by default */
.gi-contact-portal .wpcf7-form > * {
    grid-column: span 2;
}
/* Force short inputs to take half width (2 columns) */
.gi-contact-portal .wpcf7-form > *:has(input[type="text"]),
.gi-contact-portal .wpcf7-form > *:has(input[type="email"]),
.gi-contact-portal .wpcf7-form > *:has(input[type="tel"]),
.gi-contact-portal .wpcf7-form > *:has(input[type="url"]) {
    grid-column: span 1;
}
.gi-contact-portal .wpcf7-form p {
    margin: 0;
}
.gi-contact-portal .wpcf7-form-control-wrap {
    display: block;
}

/* All Text-like Inputs and Selects */
.gi-contact-portal input[type="text"],
.gi-contact-portal input[type="email"],
.gi-contact-portal input[type="tel"],
.gi-contact-portal input[type="url"],
.gi-contact-portal input[type="number"],
.gi-contact-portal select,
.gi-contact-portal textarea,
.gi-contact-portal .wpcf7-text,
.gi-contact-portal .wpcf7-select {
    width: 100%;
    background: rgba(4, 10, 20, 0.78) !important;
    border: 1px solid rgba(148, 163, 184, 0.18) !important;
    border-radius: 12px !important;
    padding: 1.25rem 1.5rem !important;
    color: #fff !important;
    font-size: 1rem !important;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif !important;
    transition: all 0.3s ease !important;
    box-sizing: border-box;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

/* Fix Select Dropdown Arrow */
.gi-contact-portal select {
    background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: right 1rem top 50% !important;
    background-size: 0.65rem auto !important;
}
.gi-contact-portal select option {
    background: #0f172a;
    color: #fff;
}

.gi-contact-portal textarea {
    min-height: 120px;
    resize: vertical;
}

.gi-contact-portal input:focus,
.gi-contact-portal select:focus,
.gi-contact-portal textarea:focus {
    background: rgba(7, 17, 32, 0.94) !important;
    border-color: var(--gi-trial-accent) !important;
    outline: none !important;
    box-shadow: 0 0 0 4px rgba(47, 124, 255, 0.14) !important;
}

.gi-contact-portal input::placeholder,
.gi-contact-portal textarea::placeholder {
    color: rgba(255, 255, 255, 0.3) !important;
}

/* File Upload Styling */
.gi-contact-portal input[type="file"] {
    width: 100%;
    color: rgba(255, 255, 255, 0.6);
    padding: 0.5rem 0 !important;
    font-size: 0.95rem;
    background: transparent !important;
    border: none !important;
}
.gi-contact-portal input[type="file"]::file-selector-button {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(148, 163, 184, 0.18);
    color: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    margin-right: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif;
    font-weight: 600;
}
.gi-contact-portal input[type="file"]::file-selector-button:hover {
    background: rgba(47, 124, 255, 0.14);
    border-color: var(--gi-trial-accent);
}

/* Submit Button Override */
.gi-contact-portal .wpcf7-submit,
.gi-contact-portal button[type="submit"] {
    width: 100%;
    background: linear-gradient(135deg, var(--gi-trial-orange) 0%, #e4510a 100%) !important;
    color: #fff !important;
    border: none !important;
    border-radius: 12px !important;
    padding: 1.25rem !important;
    font-size: 1.1rem !important;
    font-weight: 700 !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 14px 30px rgba(255, 106, 26, 0.28) !important;
    margin-top: 1rem;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif !important;
}
.gi-contact-portal .wpcf7-submit:hover,
.gi-contact-portal button[type="submit"]:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 18px 38px rgba(255, 106, 26, 0.42) !important;
}
.gi-contact-portal .wpcf7-spinner {
    display: none !important;
}

/* Responsive */
@media (max-width: 1024px) {
    .gi-trial-container {
        grid-template-columns: 1fr;
        gap: 4rem;
    }
    .gi-contact-portal {
        padding: 3rem 2rem;
    }
}
@media (max-width: 768px) {
    .gi-trial-wrapper {
        padding: 4rem 0;
    }
    .gi-trial-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .gi-trial-pitch {
        display: contents;
    }
    .gi-trial-pitch h1 {
        order: 1;
        margin-bottom: 0;
    }
    .gi-trial-pitch > p {
        order: 2;
        margin-bottom: 0;
    }
    .gi-contact-portal {
        order: 3;
        width: 100%;
    }
    .gi-trust-grid {
        order: 4;
        width: 100%;
        margin-bottom: 0;
    }
    .gi-transfer-logos {
        order: 5;
        width: 100%;
    }
    .gi-trial-pitch h1 {
        font-size: 2.5rem;
    }
}
</style>

<main class="gi-trial-wrapper gi-page-rhythm">
    <section class="gi-rhythm-block gi-rhythm-blue gi-rhythm-form-pro gi-rhythm-form-pro--orange">
    <div class="gi-trial-container">
        
        <!-- Left Side: Pitch & Info -->
        <div class="gi-trial-pitch">
            <h1>Prove It To Yourself. <br>100% Free.</h1>
            <p>Graphics Innovator is offering you up to 3 FREE trial images. Evaluate our enterprise-level quality and speed with absolutely zero risk or commitment.</p>
            
            <div class="gi-trust-grid">
                
                <!-- Trust 1 -->
                <div class="gi-trust-card">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h4>12-Hour Turnaround</h4>
                    <p>We prioritize trial images to demonstrate our rapid delivery speed.</p>
                </div>

                <!-- Trust 2 -->
                <div class="gi-trust-card">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h4>Strict NDA</h4>
                    <p>Your pre-release product shots are secured under ironclad protection.</p>
                </div>

                <!-- Trust 3 -->
                <div class="gi-trust-card">
                    <div class="gi-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><line x1="10" y1="9" x2="8" y2="9"></line></svg>
                    </div>
                    <h4>Hand-Drawn Paths</h4>
                    <p>No AI shortcuts. Perfect edges drawn by human experts.</p>
                </div>

            </div>

            <!-- Transfer Integrations -->
            <div class="gi-transfer-logos">
                <p>SUPPORTED TRANSFER PROTOCOLS</p>
                <div class="gi-transfer-icons">
                    
                    <!-- Google Drive -->
                    <div class="gi-transfer-brand" style="color: #0087F5;">
                        <svg viewBox="0 0 24 24"><path d="M7.71 3.5L1.15 15l3.43 6 6.55-11.5M9.73 3.5h13.12L16.3 15H3.18M22.85 15l-3.43 6H6.28l3.43-6h13.14z"/></svg>
                        <span>Google Drive</span>
                    </div>

                    <!-- WeTransfer -->
                    <div class="gi-transfer-brand" style="color: #409FFF;">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm0-8h-2V7h2v2zm4 8h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        <span>WeTransfer</span>
                    </div>

                    <!-- FTP -->
                    <div class="gi-transfer-brand" style="color: #34d399;">
                        <svg viewBox="0 0 24 24"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/></svg>
                        <span>Secure FTP</span>
                    </div>

                    <!-- Dropbox -->
                    <div class="gi-transfer-brand" style="color: #0061FE;">
                        <svg viewBox="0 0 24 24"><path d="M7.06 1.334L0 5.86l7.06 4.524 7.06-4.524-7.06-4.526zm9.88 0l-7.06 4.526 7.06 4.524 7.06-4.524-7.06-4.526zM0 14.912l7.06 4.525 7.06-4.525-7.06-4.524-7.06 4.524zm14.12-4.524l-7.06 4.524 7.06 4.525 7.06-4.525-7.06-4.524zM7.06 20.353l7.06-4.23v-2.31l-7.06 4.23-7.06-4.23v2.31l7.06 4.23z"/></svg>
                        <span>Dropbox</span>
                    </div>

                    <!-- PicDrop -->
                    <div class="gi-transfer-brand" style="color: #F59E0B;">
                        <svg viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                        <span>PicDrop</span>
                    </div>

                </div>
            </div>

        </div>

        <!-- Right Side: The Portal (CF7 Form) -->
        <div class="gi-contact-portal">
            <div class="gi-portal-title">Upload Your Images</div>
            <div class="gi-portal-desc">Send up to 3 images (Max 20MB). For larger batches, paste a link in the instructions.</div>
            
            <?php 
                // Render the Contact Form 7 Shortcode
                echo do_shortcode('[contact-form-7 id="910" title="Free Trial"]'); 
            ?>
        </div>

    </div>
    </section>
</main>

<?php get_footer(); ?>
