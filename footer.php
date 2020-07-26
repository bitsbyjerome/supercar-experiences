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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5791.246893524564!2d-79.674528!3d43.468458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b5cc846cb6d05%3A0x4d930f8952a0c884!2s1058%20South%20Service%20Rd%20E%2C%20Oakville%2C%20ON%20L6J%202X3%2C%20Canada!5e0!3m2!1sen!2sin!4v1595718068086!5m2!1sen!2sin" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="container">
            <div class="subscription-wrapper">
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
