<?php
/**
 * Template Name: Portfolio Details
 *
 * @package Graphics_Innovator
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$upload_dir = wp_upload_dir();
$base_url   = $upload_dir['baseurl'];

$portfolio_items = [
    [
        'title'  => 'Clipping Path',
        'tag'    => 'Hand-drawn vector paths',
        'before' => $base_url . '/2023/08/Clipping-Path_A.jpg',
        'after'  => $base_url . '/2023/08/Clipping-Path_B.jpg',
        'copy'   => 'Clean product cutouts with precise edges for catalogs, marketplaces, and print production.',
    ],
    [
        'title'  => 'Photo Retouching',
        'tag'    => 'High-end polish',
        'before' => $base_url . '/2023/09/Retouching_1_A.jpg',
        'after'  => $base_url . '/2023/09/Retouching_1_B.jpg',
        'copy'   => 'Skin, fabric, light, and surface cleanup while preserving believable texture and shape.',
    ],
    [
        'title'  => 'Ghost Mannequin',
        'tag'    => 'Apparel-ready shape',
        'before' => $base_url . '/2023/09/Ghost_A-1.jpg',
        'after'  => $base_url . '/2023/09/Ghost_B.jpg',
        'copy'   => 'Invisible mannequin editing that keeps garments structured, dimensional, and store-ready.',
    ],
    [
        'title'  => 'Image Masking',
        'tag'    => 'Hair and fine detail',
        'before' => $base_url . '/2023/09/Image-Masking_A.jpg',
        'after'  => $base_url . '/2023/09/Image-Masking_B.jpg',
        'copy'   => 'Complex masking for hair, fur, transparent edges, and delicate product details.',
    ],
    [
        'title'  => 'Shadow Creation',
        'tag'    => 'Natural depth',
        'before' => $base_url . '/2023/09/Shadowing_A.jpg',
        'after'  => $base_url . '/2023/09/Shadowing_B.jpg',
        'copy'   => 'Drop, reflection, and natural shadows that help flat product images feel premium.',
    ],
    [
        'title'  => 'Color Correction',
        'tag'    => 'Catalog consistency',
        'before' => $base_url . '/2023/09/Ecommerce_1_A-1.jpg',
        'after'  => $base_url . '/2023/09/Ecommerce_1_B.jpg',
        'copy'   => 'Color and tone cleanup for consistent product sets across websites and marketplaces.',
    ],
];
?>

<style>
.gi-proof-page {
    background: #02060b;
    color: var(--gi-white);
    overflow: hidden;
}
.gi-proof-hero {
    position: relative;
    padding: calc(var(--gi-header-height) + 70px) 0 72px;
    background:
        radial-gradient(circle at 20% 20%, rgba(234,88,12,0.12), transparent 34%),
        radial-gradient(circle at 82% 18%, rgba(42,106,238,0.16), transparent 34%),
        linear-gradient(180deg, #071123 0%, #02060b 100%);
    border-bottom: 1px solid rgba(255,255,255,0.06);
}
.gi-proof-hero-inner {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 56px;
    align-items: center;
}
.gi-proof-kicker {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 0.55rem 0.9rem;
    margin-bottom: 22px;
    border-radius: 999px;
    border: 1px solid rgba(234,88,12,0.24);
    background: rgba(234,88,12,0.08);
    color: #fb923c;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}
.gi-proof-hero h1 {
    max-width: 760px;
    margin: 0 0 22px;
    color: #fff;
    font-size: clamp(2.25rem, 3.6vw, 3.9rem);
    font-weight: 900;
    line-height: 1.08;
}
.gi-proof-hero p {
    max-width: 640px;
    margin: 0 0 32px;
    color: rgba(255,255,255,0.72);
    font-size: clamp(1rem, 2vw, 1.2rem);
    line-height: 1.75;
}
.gi-proof-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
}
.gi-proof-metrics {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
}
.gi-proof-metric {
    min-height: 138px;
    padding: 24px;
    border-radius: 18px;
    background: rgba(255,255,255,0.035);
    border: 1px solid rgba(255,255,255,0.08);
}
.gi-proof-metric strong {
    display: block;
    margin-bottom: 8px;
    color: #fff;
    font-size: 2rem;
    line-height: 1;
}
.gi-proof-metric span {
    color: rgba(255,255,255,0.62);
    font-size: 0.9rem;
    line-height: 1.45;
}
.gi-proof-gallery {
    padding: 88px 0;
}
.gi-proof-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
}
.gi-proof-section-head {
    max-width: 760px;
    margin-bottom: 40px;
}
.gi-proof-section-head h2 {
    margin: 0 0 14px;
    color: #fff;
    font-size: clamp(2rem, 4vw, 3.4rem);
    line-height: 1.08;
}
.gi-proof-section-head p {
    margin: 0;
    color: rgba(255,255,255,0.66);
    font-size: 1.05rem;
    line-height: 1.7;
}
.gi-proof-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 28px;
}
.gi-proof-card {
    background: linear-gradient(145deg, rgba(255,255,255,0.045), rgba(255,255,255,0.015));
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 24px 70px rgba(0,0,0,0.35);
}
.gi-proof-card-media {
    background: #070d18;
}
.gi-proof-card .gi-ba-wrapper,
.gi-proof-card .gi-ba-container {
    border-radius: 0 !important;
}
.gi-proof-card-body {
    padding: 26px;
}
.gi-proof-card-tag {
    display: inline-flex;
    margin-bottom: 12px;
    color: #fb923c;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}
.gi-proof-card h3 {
    margin: 0 0 10px;
    color: #fff;
    font-size: 1.55rem;
}
.gi-proof-card p {
    margin: 0;
    color: rgba(255,255,255,0.65);
    line-height: 1.7;
}
.gi-proof-cta {
    margin-top: 64px;
    padding: 44px;
    border-radius: 28px;
    background: linear-gradient(135deg, rgba(42,106,238,0.22), rgba(234,88,12,0.14));
    border: 1px solid rgba(255,255,255,0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 28px;
}
.gi-proof-cta h2 {
    margin: 0 0 10px;
    color: #fff;
    font-size: clamp(1.7rem, 3vw, 2.5rem);
}
.gi-proof-cta p {
    margin: 0;
    color: rgba(255,255,255,0.72);
    line-height: 1.65;
}
.gi-proof-cta-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    flex-shrink: 0;
}
@media (max-width: 980px) {
    .gi-proof-hero-inner,
    .gi-proof-grid {
        grid-template-columns: 1fr;
    }
    .gi-proof-metrics {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
    .gi-proof-cta {
        align-items: flex-start;
        flex-direction: column;
    }
}
@media (max-width: 640px) {
    .gi-proof-hero {
        padding: calc(var(--gi-header-height-sm) + 44px) 0 52px;
    }
    .gi-proof-metrics {
        grid-template-columns: 1fr;
    }
    .gi-proof-gallery {
        padding: 56px 0;
    }
    .gi-proof-card-body,
    .gi-proof-cta {
        padding: 22px;
    }
    .gi-proof-actions .gi-btn,
    .gi-proof-cta-actions .gi-btn {
        width: 100%;
    }
}
</style>

<main class="gi-proof-page gi-page-rhythm">
    <section class="gi-proof-hero gi-rhythm-block gi-rhythm-blue gi-rhythm-hero-pro">
        <div class="gi-proof-hero-inner">
            <div>
                <div class="gi-proof-kicker">Real Editing Samples</div>
                <h1>Before and after work that sells the quality fast.</h1>
                <p>Browse a focused set of editing examples across clipping path, retouching, masking, ghost mannequin, shadows, and color correction. Every sample is built around the same promise: clean manual work, consistent catalog output, and fast delivery.</p>
                <div class="gi-proof-actions">
                    <a href="<?php echo esc_url( home_url('/free-trial/') ); ?>" class="gi-btn gi-btn-primary gi-btn-xl gi-btn-glow">Start Free Trial</a>
                    <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="gi-btn gi-btn-outline gi-btn-xl">Request Quote</a>
                </div>
            </div>
            <div class="gi-proof-metrics" aria-label="Portfolio highlights">
                <div class="gi-proof-metric">
                    <strong>6</strong>
                    <span>Core service categories shown with visual proof.</span>
                </div>
                <div class="gi-proof-metric">
                    <strong>24h</strong>
                    <span>Standard turnaround available for most production work.</span>
                </div>
                <div class="gi-proof-metric">
                    <strong>100%</strong>
                    <span>Manual editing with human quality control.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="gi-proof-gallery gi-rhythm-block gi-rhythm-charcoal gi-rhythm-depth-pro">
        <div class="gi-proof-container">
            <div class="gi-proof-section-head">
                <h2>Proof by service, not just promises.</h2>
                <p>Move the slider on each sample to compare original and edited output. This gives buyers the evidence they need before they upload files or request a quote.</p>
            </div>

            <div class="gi-proof-grid">
                <?php foreach ( $portfolio_items as $index => $item ) : ?>
                    <article class="gi-proof-card">
                        <div class="gi-proof-card-media">
                            <?php gi_before_after( $item['before'], $item['after'], 'Original', 'Edited', 'portfolio_gallery_' . $index ); ?>
                        </div>
                        <div class="gi-proof-card-body">
                            <span class="gi-proof-card-tag"><?php echo esc_html( $item['tag'] ); ?></span>
                            <h3><?php echo esc_html( $item['title'] ); ?></h3>
                            <p><?php echo esc_html( $item['copy'] ); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="gi-proof-cta">
                <div>
                    <h2>Want to test your own images?</h2>
                    <p>Send up to 3 files and compare our result against your current workflow.</p>
                </div>
                <div class="gi-proof-cta-actions">
                    <a href="<?php echo esc_url( home_url('/free-trial/') ); ?>" class="gi-btn gi-btn-teal gi-btn-xl gi-btn-glow">Upload Trial Images</a>
                    <a href="<?php echo esc_url( home_url('/contact-us/') ); ?>" class="gi-btn gi-btn-outline gi-btn-xl">Talk to Sales</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
