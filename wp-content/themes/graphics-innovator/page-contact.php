<?php
/**
 * Template Name: Contact Us
 *
 * Ultra-Premium Enterprise Contact Engine
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<style>
/* Enterprise Contact Engine CSS */
:root {
    --gi-contact-bg: #030711;
    --gi-contact-card: rgba(12, 22, 38, 0.72);
    --gi-contact-border: rgba(148, 163, 184, 0.14);
    --gi-contact-accent: #2f7cff;
    --gi-contact-glow: rgba(47, 124, 255, 0.18);
}

.gi-contact-wrapper {
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
.gi-contact-wrapper::before {
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
.gi-contact-wrapper::after {
    content: '';
    position: absolute;
    bottom: -10%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255, 106, 26, 0.10) 0%, transparent 70%);
    filter: blur(80px);
    z-index: 0;
}

.gi-contact-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6rem;
    align-items: center;
}

/* Left: The Pitch */
.gi-contact-pitch h1 {
    font-size: clamp(2rem, 3.5vw, 3.2rem);
    font-weight: 800;
    line-height: 1.15;
    margin-bottom: 1.5rem;
    letter-spacing: -0.02em;
    background: linear-gradient(135deg, #ffffff 0%, #a1a1aa 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.gi-contact-pitch > p {
    font-size: 1.25rem;
    color: rgba(212, 222, 234, 0.76);
    margin-bottom: 4rem;
    line-height: 1.6;
    max-width: 500px;
}

/* Glassmorphic Contact Cards */
.gi-office-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}
.gi-office-card {
    background:
        radial-gradient(circle at 12% 18%, rgba(42,106,238,0.12) 0%, transparent 32%),
        linear-gradient(135deg, rgba(8,20,38,0.82) 0%, rgba(5,11,22,0.78) 100%);
    border: 1px solid var(--gi-contact-border);
    border-radius: 16px;
    padding: 2rem;
    display: flex;
    align-items: flex-start;
    transition: all 0.3s ease;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
}
.gi-office-card:nth-child(even) {
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, rgba(3,7,13,0.9) 0%, rgba(11,17,28,0.86) 52%, rgba(17,24,39,0.84) 100%);
}
.gi-office-card:hover {
    background: rgba(47, 124, 255, 0.07);
    transform: translateX(10px);
    border-color: rgba(47, 124, 255, 0.34);
}
.gi-office-icon {
    width: 50px;
    height: 50px;
    background: rgba(47, 124, 255, 0.12);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--gi-contact-accent);
    margin-right: 1.5rem;
    flex-shrink: 0;
    box-shadow: 0 0 18px rgba(47, 124, 255, 0.22);
}
.gi-office-icon svg {
    width: 24px;
    height: 24px;
}
.gi-office-content h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: #fff;
    margin: 0 0 0.5rem 0;
}
.gi-office-content p {
    color: rgba(255, 255, 255, 0.5);
    margin: 0 0 0.5rem 0;
    font-size: 0.95rem;
    line-height: 1.5;
}
.gi-office-content a {
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s;
    font-size: 1.1rem;
}
.gi-office-content a:hover {
    color: var(--gi-contact-accent);
}

/* Right: The Portal (Form) */
.gi-contact-portal {
    background:
        radial-gradient(circle at 78% 16%, rgba(255,255,255,0.035) 0%, transparent 30%),
        radial-gradient(circle at 18% 82%, rgba(42,106,238,0.07) 0%, transparent 34%),
        linear-gradient(135deg, rgba(3,7,13,0.96) 0%, rgba(11,17,28,0.94) 52%, rgba(17,24,39,0.92) 100%);
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 24px;
    padding: 4rem;
    backdrop-filter: blur(30px);
    -webkit-backdrop-filter: blur(30px);
    box-shadow: 0 36px 90px rgba(0,0,0,0.58), 0 0 0 1px rgba(47,124,255,0.08), inset 0 1px 0 rgba(255,255,255,0.1);
    position: relative;
}
.gi-contact-portal::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(47, 124, 255, 0.58), rgba(255,106,26,0.34), transparent);
}
.gi-portal-title {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    color: #fff;
}
.gi-portal-desc {
    color: rgba(212, 222, 234, 0.68);
    margin-bottom: 3rem;
    font-size: 1rem;
}

/* Overriding Contact Form 7 to look Enterprise */
.gi-contact-portal .wpcf7-form {
    display: grid;
    gap: 1.5rem;
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
    min-height: 150px;
    resize: vertical;
}

.gi-contact-portal input:focus,
.gi-contact-portal select:focus,
.gi-contact-portal textarea:focus {
    background: rgba(7, 17, 32, 0.94) !important;
    border-color: var(--gi-contact-accent) !important;
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
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
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
    background: rgba(42, 106, 238, 0.1);
    border-color: var(--gi-contact-accent);
}

/* Submit Button Override */
.gi-contact-portal .wpcf7-submit,
.gi-contact-portal button[type="submit"] {
    width: 100%;
    background: linear-gradient(135deg, var(--gi-contact-accent) 0%, #1d4ed8 100%) !important;
    color: #fff !important;
    border: none !important;
    border-radius: 12px !important;
    padding: 1.25rem !important;
    font-size: 1.1rem !important;
    font-weight: 700 !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 14px 30px rgba(47, 124, 255, 0.24) !important;
    margin-top: 1rem;
    font-family: var(--gi-font-sans), 'Outfit', sans-serif !important;
}
.gi-contact-portal .wpcf7-submit:hover,
.gi-contact-portal button[type="submit"]:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 18px 38px rgba(47, 124, 255, 0.38) !important;
}
.gi-contact-portal .wpcf7-spinner {
    display: none !important; /* Hide ugly default CF7 spinner */
}

/* Responsive */
@media (max-width: 1024px) {
    .gi-contact-container {
        grid-template-columns: 1fr;
        gap: 4rem;
    }
    .gi-contact-portal {
        padding: 3rem 2rem;
    }
}
@media (max-width: 768px) {
    .gi-contact-wrapper {
        padding: 4rem 0;
    }
    .gi-contact-container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .gi-contact-pitch {
        display: contents;
    }
    .gi-contact-pitch h1 {
        order: 1;
        margin-bottom: 0;
    }
    .gi-contact-pitch > p {
        order: 2;
        margin-bottom: 0;
    }
    .gi-contact-portal {
        order: 3;
        width: 100%;
    }
    .gi-office-grid {
        order: 4;
        width: 100%;
    }
    .gi-contact-pitch h1 {
        font-size: 2.5rem;
    }
}
</style>

<main class="gi-contact-wrapper gi-page-rhythm">
    <section class="gi-rhythm-block gi-rhythm-blue gi-rhythm-form-pro">
    <div class="gi-contact-container">
        
        <!-- Left Side: Pitch & Info -->
        <div class="gi-contact-pitch">
            <h1>Let's Build <br>Something Amazing.</h1>
            <p>Whether you need bulk eCommerce clipping or high-end editorial retouching, our team is ready. We typically reply within 45 minutes.</p>
            
            <div class="gi-office-grid">
                
                <!-- Email -->
                <div class="gi-office-card">
                    <div class="gi-office-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div class="gi-office-content">
                        <h3>General Inquiries</h3>
                        <p>For pricing, bulk quotes, and support.</p>
                        <a href="mailto:info@graphicsinnovator.com">info@graphicsinnovator.com</a>
                    </div>
                </div>

                <!-- Cyprus HQ -->
                <div class="gi-office-card">
                    <div class="gi-office-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="gi-office-content">
                        <h3>Europe Office (HQ)</h3>
                        <p>ALKEUS 22, STROVOLOS<br>2064 NICOSIA, Cyprus</p>
                        <a href="tel:+35796341452">+357 96 341 452</a>
                    </div>
                </div>

                <!-- Bangladesh Office -->
                <div class="gi-office-card">
                    <div class="gi-office-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="gi-office-content">
                        <h3>Production Studio</h3>
                        <p>House: 70, Road: 1/4, Santidhara<br>Rangpur, Bangladesh</p>
                        <a href="tel:+8801714516662">+88 01714 516 662</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right Side: The Portal (CF7 Form) -->
        <div class="gi-contact-portal">
            <div class="gi-portal-title">Request a Quote</div>
            <div class="gi-portal-desc">Fill out the form below and we'll be in touch instantly.</div>
            
            <?php 
                // Render the Contact Form 7 Shortcode
                echo do_shortcode('[contact-form-7 title="Contact form 1"]'); 
            ?>
        </div>

    </div>
    </section>
</main>

<?php get_footer(); ?>
