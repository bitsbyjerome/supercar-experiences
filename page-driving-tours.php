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
                            Driving <span class="red">Tours</span>
                        </div>
                        <p>
                            Driving Tours are by far the best value for our customers. They differ in the amount of vehicles driven and length of the tour itself. This is not an experience that’s meant for speed. This is the best experience to try different cars and twisty roads while enjoying your day and keeping your driver’s license. If people want to go fast, we always suggest they join us on our track days.
                        </p>

                        <div class="section-title">
                            The way a <span class="red">tour works</span>
                        </div>

                        <p>
                            Everyone will meet in Oakville for a brief orientation on what’s to be expected over the course of the day and the vehicles they’ll be driving. Once everyone is ready we will depart on our tour. There are two drivers per car, as the tour continues we make stops to allow the driver and passenger to switch then another stop again to switch to the next vehicle in front of them and so on and so forth. The scheduled stops are dependent again on the length of the tour. The longer the driving tour, the longer their driving time behind the wheel.
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
