<?php
/**
 * Template Name : Car Rentals
 */

?>

<?php
get_header('general');
?>

    <main id="primary" class="site-main">

        <div class="track_days_section">

            <div class="container">

                <div class="section-wrapper">
                    <div class="section-title red">
                         Your Cart <br/>
                    </div>
                    <div class="section-subtitle">

                    </div>

                </div>

                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>

            </div>

        </div>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();