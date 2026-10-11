<?php
/**
 * Template Name: FAQ
 *
 * @package Graphics_Innovator
 */

get_header(); 
?>

<!-- Banner -->
<?php gi_page_banner( 'Frequently Asked Questions', 'We Are Here To Help' ); ?>

<section class="gi-section">
    <div class="gi-container gi-container-narrow">
        
        <?php gi_section_heading( 'Knowledge Base', 'Common Questions', '', true ); ?>

        <div class="gi-faq-list" data-gi-animate="fade-up">
            
            <div class="gi-faq-item">
                <button class="gi-faq-question">
                    What is your standard turnaround time?
                    <span class="gi-faq-chevron"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </button>
                <div class="gi-faq-answer">
                    <div class="gi-faq-answer-inner">
                        Our standard turnaround time is 24 hours. However, depending on the complexity and volume of the images, it can range from 12 to 48 hours. If you have an urgent deadline, please let us know when submitting your order.
                    </div>
                </div>
            </div>

            <div class="gi-faq-item">
                <button class="gi-faq-question">
                    How do you guarantee data security?
                    <span class="gi-faq-chevron"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </button>
                <div class="gi-faq-answer">
                    <div class="gi-faq-answer-inner">
                        We take data security very seriously. All our employees sign strict Non-Disclosure Agreements (NDA). We use secure FTP servers for file transfers, and we guarantee that your unreleased product images will never be shared, sold, or published without your explicit consent.
                    </div>
                </div>
            </div>

            <div class="gi-faq-item">
                <button class="gi-faq-question">
                    Are your clipping paths handmade or AI-generated?
                    <span class="gi-faq-chevron"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </button>
                <div class="gi-faq-answer">
                    <div class="gi-faq-answer-inner">
                        100% handmade. We do not use automated tools like Magic Wand or quick AI selections because they often leave jagged edges and artifacts. Every image is manually outlined using the Pen Tool in Adobe Photoshop to ensure pixel-perfect quality.
                    </div>
                </div>
            </div>

            <div class="gi-faq-item">
                <button class="gi-faq-question">
                    What if I am not satisfied with the result?
                    <span class="gi-faq-chevron"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </button>
                <div class="gi-faq-answer">
                    <div class="gi-faq-answer-inner">
                        We offer unlimited free revisions. If you are not completely satisfied with the final output, just let us know what needs to be changed, and our team will re-edit the images until they meet your exact requirements.
                    </div>
                </div>
            </div>

            <div class="gi-faq-item">
                <button class="gi-faq-question">
                    Do you offer discounts for bulk orders?
                    <span class="gi-faq-chevron"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                </button>
                <div class="gi-faq-answer">
                    <div class="gi-faq-answer-inner">
                        Yes, absolutely! We offer highly competitive wholesale pricing for high-volume orders and regular clients. Please contact our sales team with your volume details to get a custom quote.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================
     STILL HAVE QUESTIONS
     ========================================== -->
<section class="gi-section gi-section--gray">
    <div class="gi-container gi-text-center" data-gi-animate="fade-in">
        <h2 class="gi-h2" style="margin-bottom: var(--gi-space-4);">Still Have Questions?</h2>
        <p class="gi-lead" style="max-width: 600px; margin: 0 auto var(--gi-space-8);">Can't find the answer you're looking for? Reach out to our customer support team.</p>
        <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="gi-btn gi-btn-outline-dark gi-btn-xl">Contact Support</a>
    </div>
</section>

<?php get_footer(); ?>
