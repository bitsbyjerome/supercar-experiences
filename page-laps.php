<?php
/**
 * Template Name : Laps
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
                                <span class="red">Laps</span>
                            </div>
                            <p>
                                Everyone has a bucket list of things they want to achieve or experience in their lives, and if you’ve always wanted to drive a super car, then here’s your chance to make that dream come true. At Supercar Experiences, we offer the chance to drive your favourite car on a race track so that you can get a taste of the speed and power that it has to offer. Our Tier 1 Lap Package lets you enjoy one full lap under safe conditions for an affordable rate that varies depending on the car you choose.
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
