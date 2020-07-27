<?php
/**
 * Template Name : Test Drives
 */

?>

<?php
get_header('general');
?>

    <main id="primary" class="site-main">

        <div class="track_days_section">

            <div class="sub-hero">

                <div class="container">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title">
                                Test <span class="red">Drives</span>
                            </div>
                            <p>
                                Test Drives are ​ $159.00 for 20min or ​ $179.00 for 30min ​regardless of vehicle. “people’s dream cars differ from one another”.
                            </p>

                        </div>

                        <div class="col-lg-6">
                            <img src="<?= get_template_directory_uri().'/assets/images/mercedes_full.png'; ?>">
                        </div>
                    </div>

                </div>

            </div>

            <div class="container">

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
