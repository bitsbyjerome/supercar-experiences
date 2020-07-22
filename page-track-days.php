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
                         Track <span class="red">Days</span>
                     </div>
                     <p>
                         Track Days are the most exhilarating and heart pumping experience we offer. Our customers, (under careful eyes of our driving coaches) are able to push these cars to their limits. This is the ultimate driving experience.
                     </p>
                     <p>
                         Our Track Days are held on the DDT Track at Canadian Tire Motorsport Park in Bowmanville and Grand Bend Raceway in Grand Bend. Both tracks are very different from one another. Canadian Tire Motorsport Parks DDT (Driver Development Track) is very technical with 20+ turns. This track is used by professionals to train and is challenging but very rewarding as well. On the flipside, Grand Bend raceway has far fewer turns but longer straits where you can get the cars up to higher speeds.
                     </p>
                     <h4>
                         GET TO KNOW THE TIERS
                     </h4>
                     <h5>
                         TIER 1 VEHICLES:

                     </h5>
                     <p>
                         LAMBORGHINI HURACAN COUPE, LAMBORGHINI HURACAN SPYDER, MCLAREN MP4-12C, FERRARI 458 SPYDER, PORSCHE GT3
                     </p>

                     <h5>
                         TIER 2 VEHICLES:
                     </h5>

                     <p>
                         NISSAN GTR, MERCEDES AMG GTS, LAMBORGHINI GALLARDO, FERRARI 430, AUDI R8
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
