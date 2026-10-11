<?php
/**
 * Template Name: Portfolio
 *
 * @package Graphics_Innovator
 */

get_header(); 
$upload_dir = wp_upload_dir();
$base_url = $upload_dir['baseurl'];
?>

<!-- Banner -->
<?php gi_page_banner( 'Our Portfolio', 'See The Quality of Our Work' ); ?>

<!-- ==========================================
     PORTFOLIO GRID
     ========================================== -->
<section class="gi-section">
    <div class="gi-container">
        
        <!-- Interactive Filters (Mockup for now, easily extendable via JS) -->
        <div class="gi-portfolio-filters" data-gi-animate="fade-up">
            <button class="gi-filter-btn gi-active">All Work</button>
            <button class="gi-filter-btn">Clipping Path</button>
            <button class="gi-filter-btn">Background Removal</button>
            <button class="gi-filter-btn">Shadow Making</button>
            <button class="gi-filter-btn">Retouching</button>
        </div>

        <div class="gi-portfolio-grid">
            <!-- Portfolio Item 1 (Clipping Path) -->
            <div class="gi-portfolio-item" data-gi-animate="fade-up">
                <?php gi_before_after($base_url . '/2023/08/Clipping-Path_A.jpg', $base_url . '/2023/08/Clipping-Path_B.jpg', '', '', 'port1'); ?>
                <div class="gi-portfolio-overlay" style="pointer-events: none;">
                    <div class="gi-portfolio-info">
                        <div class="gi-portfolio-label">Clipping Path</div>
                        <div class="gi-portfolio-name">eCommerce Product Isolation</div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 2 (Background Removal) -->
            <div class="gi-portfolio-item" data-gi-animate="fade-up" data-gi-delay="100">
                <?php gi_before_after($base_url . '/2023/09/Ghost_A-1.jpg', $base_url . '/2023/09/Ghost_B.jpg', '', '', 'port2'); ?>
                <div class="gi-portfolio-overlay" style="pointer-events: none;">
                    <div class="gi-portfolio-info">
                        <div class="gi-portfolio-label">Background Removal</div>
                        <div class="gi-portfolio-name">Amazon Ready Images</div>
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 3 (Shadow Making) -->
            <div class="gi-portfolio-item" data-gi-animate="fade-up" data-gi-delay="200">
                <?php gi_before_after($base_url . '/2023/09/Shadowing_A.jpg', $base_url . '/2023/09/Shadowing_B.jpg', '', '', 'port3'); ?>
                <div class="gi-portfolio-overlay" style="pointer-events: none;">
                    <div class="gi-portfolio-info">
                        <div class="gi-portfolio-label">Shadow Making</div>
                        <div class="gi-portfolio-name">Natural Drop Shadows</div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 4 (Image Masking) -->
            <div class="gi-portfolio-item" data-gi-animate="fade-up">
                <?php gi_before_after($base_url . '/2023/09/Image-Masking_A.jpg', $base_url . '/2023/09/Image-Masking_B.jpg', '', '', 'port4'); ?>
                <div class="gi-portfolio-overlay" style="pointer-events: none;">
                    <div class="gi-portfolio-info">
                        <div class="gi-portfolio-label">Image Masking</div>
                        <div class="gi-portfolio-name">Complex Hair Masking</div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 5 (Color Correction) -->
            <div class="gi-portfolio-item" data-gi-animate="fade-up" data-gi-delay="100">
                <?php gi_before_after($base_url . '/2023/09/Retouching_1_A.jpg', $base_url . '/2023/09/Retouching_1_B.jpg', '', '', 'port5'); ?>
                <div class="gi-portfolio-overlay" style="pointer-events: none;">
                    <div class="gi-portfolio-info">
                        <div class="gi-portfolio-label">Retouching</div>
                        <div class="gi-portfolio-name">Color Correction & Retouch</div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 6 (E-commerce) -->
            <div class="gi-portfolio-item" data-gi-animate="fade-up" data-gi-delay="200">
                <?php gi_before_after($base_url . '/2023/09/Ecommerce_1_A-1.jpg', $base_url . '/2023/09/Ecommerce_1_B.jpg', '', '', 'port6'); ?>
                <div class="gi-portfolio-overlay" style="pointer-events: none;">
                    <div class="gi-portfolio-info">
                        <div class="gi-portfolio-label">E-Commerce</div>
                        <div class="gi-portfolio-name">Bulk Catalog Editing</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================
     CTA
     ========================================== -->
<section class="gi-cta-section">
    <div class="gi-container">
        <div class="gi-cta-inner" data-gi-animate="fade-up">
            <h2 class="gi-cta-title">Want to see what we can do with YOUR photos?</h2>
            <p class="gi-cta-subtitle">Send us up to 3 images for a free trial. We will edit them according to your instructions and send them back within 45 minutes.</p>
            <div class="gi-cta-actions">
                <a href="<?php echo esc_url( home_url('/free-trial') ); ?>" class="gi-btn gi-btn-teal gi-btn-xl gi-btn-glow">
                    Start Free Trial
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
