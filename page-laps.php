<?php
/**
 * Template Name : Track Days
 */

?>

<?php
get_header('general');
?>

    <main id="primary" class="site-main">

        <div class="track_days_section">

            <div class="container ">

                <div class="row sub-hero">

                    <div class="col-lg-6">
                        <div class="section-title">
                            <span class="red">Laps</span>
                        </div>
                        <p>
                            lorem ipsum.....
                        </p>

                    </div>

                    <div class="col-lg-6">
                        <img src="<?= get_template_directory_uri().'/assets/images/mercedes_full.png'; ?>">
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
