<?php
/**
 * The template for displaying all single pages
 *
 * @package Graphics_Innovator
 */

get_header();
?>

<?php gi_page_banner(); ?>

<div class="gi-section">
    <div class="gi-container gi-container-narrow">
        <?php
        while ( have_posts() ) :
            the_post();
            
            // Standard WordPress content block
            echo '<div class="gi-content-area">';
            the_content();
            echo '</div>';
            
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>
</div>

<?php get_footer(); ?>
