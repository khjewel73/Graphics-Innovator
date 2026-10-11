<?php
/**
 * Template Name: Pricing
 *
 * @package Graphics_Innovator
 */

get_header(); 
?>

<!-- Banner -->
<?php gi_page_banner( 'Pricing Plans', 'Affordable Bulk Rates' ); ?>

<!-- ==========================================
     PRICING GRID
     ========================================== -->
<section class="gi-section">
    <div class="gi-container">
        <?php gi_section_heading( 'Transparent Rates', 'Wholesale Pricing for High Volume', 'Our prices start as low as $0.25 for basic bulk orders. Select the plan that fits your needs.' ); ?>

        <div class="gi-pricing-grid">
            <?php 
            gi_pricing_card( 'Basic Clipping', '0.25', '/ image', [
                ['text' => 'Simple solid geometry shapes'],
                ['text' => 'Hand-drawn pen paths'],
                ['text' => '24-hour turnaround'],
                ['text' => 'Quality check included'],
                ['text' => 'Unlimited revisions'],
            ], 'Get Started', '/contact', false );
            
            gi_pricing_card( 'Standard Bulk', '0.49', '/ image', [
                ['text' => 'Medium complexity shapes'],
                ['text' => 'Multiple paths & curves'],
                ['text' => 'Basic shadow creation'],
                ['text' => '24-hour turnaround'],
                ['text' => 'Dedicated account manager'],
            ], 'Get Custom Quote', '/contact', true );
            
            gi_pricing_card( 'Complex Editing', '1.19', '/ image', [
                ['text' => 'Highly complex masking'],
                ['text' => 'Hair & fur masking'],
                ['text' => 'Advanced high-end retouching'],
                ['text' => 'Color correction & matching'],
                ['text' => 'Priority VIP support'],
            ], 'Get Started', '/contact', false );
            ?>
        </div>
    </div>
</section>

<!-- ==========================================
     FEATURES / GUARANTEE
     ========================================== -->
<section class="gi-section gi-section--dark">
    <div class="gi-container">
        <?php gi_section_heading( 'What\'s Included', 'Every Order Includes:', '', true ); ?>
        
        <div class="gi-grid gi-grid-4">
            <div class="gi-text-center" data-gi-animate="fade-up">
                <div style="width: 64px; height: 64px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--gi-accent); margin: 0 auto var(--gi-space-4);">
                    <?php echo gi_icon('check', 32); ?>
                </div>
                <h4 class="gi-h4" style="color: var(--gi-white);">100% Manual Hand-Drawn</h4>
            </div>
            <div class="gi-text-center" data-gi-animate="fade-up" data-gi-delay="100">
                <div style="width: 64px; height: 64px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--gi-accent); margin: 0 auto var(--gi-space-4);">
                    <?php echo gi_icon('shield', 32); ?>
                </div>
                <h4 class="gi-h4" style="color: var(--gi-white);">Strict NDA Compliance</h4>
            </div>
            <div class="gi-text-center" data-gi-animate="fade-up" data-gi-delay="200">
                <div style="width: 64px; height: 64px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--gi-accent); margin: 0 auto var(--gi-space-4);">
                    <?php echo gi_icon('clock', 32); ?>
                </div>
                <h4 class="gi-h4" style="color: var(--gi-white);">24-Hour Delivery</h4>
            </div>
            <div class="gi-text-center" data-gi-animate="fade-up" data-gi-delay="300">
                <div style="width: 64px; height: 64px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--gi-accent); margin: 0 auto var(--gi-space-4);">
                    <?php echo gi_icon('star', 32); ?>
                </div>
                <h4 class="gi-h4" style="color: var(--gi-white);">Unlimited Revisions</h4>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     CUSTOM QUOTE CALLOUT
     ========================================== -->
<section class="gi-section">
    <div class="gi-container gi-text-center" data-gi-animate="fade-in">
        <h2 class="gi-h2" style="margin-bottom: var(--gi-space-4);">Have a Massive Catalog?</h2>
        <p class="gi-lead" style="max-width: 600px; margin: 0 auto var(--gi-space-8);">If you process more than 1,000 images per month, contact our enterprise team for heavily discounted bulk pricing and API integrations.</p>
        <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="gi-btn gi-btn-primary gi-btn-xl">Contact Enterprise Sales</a>
    </div>
</section>

<?php get_footer(); ?>
