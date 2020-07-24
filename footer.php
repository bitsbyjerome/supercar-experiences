<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SuperCar_Experiences
 */

?>
    <div class="overlap-cars">
        <img src="<?= get_template_directory_uri().'/assets/images/testimonial_urus.png'; ?>">
        <img src="<?= get_template_directory_uri().'/assets/images/testimonial_mercedes.png'; ?>">
    </div>

    <div class="section-map">
        <img src="<?= get_template_directory_uri().'/assets/images/map.png'; ?>">
        <div class="container subscription-wrapper">
            <div class="subscription-card">
                <div class="subscription-text">
                    Subscribe today to receive updates on our latest discounts and special offers!
                </div>
                <div class="subscription-form">
                    <input type="email" placeholder="Enter your email...">
                    <button>Subscribe</button>
                </div>
            </div>

        </div>
    </div>

	<footer id="colophon" class="site-footer">

		<div class="site-info container">
           <div class="row">
               <div class="col-lg-3">

                   <div class="footer-logo">

                       <img src="<?= get_template_directory_uri().'/assets/logos/logo-footer.png'; ?>">

                   </div>
                   <div class="footer-text">
                       <p>
                           We here at Supercar Experiences are ready to bring you the experience of a lifetime.
                           Our customized services can meet any need and budget to get you in the driver seat of
                           the Supercar of your dreams.
                       </p>
                   </div>

                   <div class="footer-contact">
                       <ul>
                           <li> <i><img src="<?= get_template_directory_uri().'/assets/logos/pin-location.png';?>"> </i>
                               1058 South Service Road <br/>
                               East, Oakville Ontario
                           </li>
                           <li> <i><img src="<?= get_template_directory_uri().'/assets/logos/email.png';?>"> </i> info@supercarexperiences.ca</li>
                           <li class="footer-phone"> <i><img src="<?= get_template_directory_uri().'/assets/logos/call.png';?>"> </i> 416-900-1102</li>
                       </ul>
                   </div>

               </div>

               <div class="col-lg-3">
                   <div class="footer-title">
                       Important Links
                   </div>
                   <?php
                   wp_nav_menu(
                       array(
                           'theme_location' => 'menu-footer-1',
                           'container'     => '',
                           //'menu_class'     => 'navbar',
                           'menu_id'        => 'footer_menu'
                       )
                   );
                   ?>

               </div>
               <div class="col-lg-3">
                   <div class="footer-title">
                       Driving Experiences
                   </div>
                   <?php
                   wp_nav_menu(
                       array(
                           'theme_location' => 'menu-footer-2',
                           'container'     => '',
                           //'menu_class'     => 'navbar',
                           'menu_id'        => 'footer_menu'
                       )
                   );
                   ?>

               </div>
               <div class="col-lg-3">
                   <div class="footer-title">
                       Follow us
                   </div>
               </div>

           </div>
		</div><!-- .site-info -->

        <div class="sub-footer">

            <div class="container">
                <?php get_sidebar();?>
            </div>

        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
