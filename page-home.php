<?php
/**
 * Template Name : Home Page
 * The Home Page template.
 */

?>



<?php

get_header('home');
?>
    <main id="primary" class="site-main">

        <div class="container">



                <div class="hero-content-container">

                    <div class="hero-content row">
                        <div class="hero-text col-lg-6">
                            <p class="caption-red">Toronto's top exotic</p>
                            <p class="caption-main">car rental company</p>
                            <p class="caption-light">super car experiences</p>

                            <button class="btn hero-btn btn-primary">
                                Read more
                            </button>

                        </div>
                        <div class="hero-img col-lg-6">
                            <img src="<?= get_template_directory_uri().'/assets/images/hero.png'; ?>">
                        </div>


                    </div>

        </div>

            <div class="client-section">
                <div class="section-wrapper">
                    <div class="section-content_wrapper">
                        <div class="section-title red">
                            Clients
                        </div>

                        <div class="section-subtitle">
                            Supercar driving experience
                        </div>
                    </div>
                    <div class="section-logos">
                        <img src="<?= get_template_directory_uri().'/assets/logos/lamborghini-logo-black-and-white.png'; ?>">
                        <img src="<?= get_template_directory_uri().'/assets/logos/mercedes-logo-black-and-white.png'; ?>">
                        <img src="<?= get_template_directory_uri().'/assets/logos/porsche-logo-black-and-white.png'; ?>">
                        <img src="<?= get_template_directory_uri().'/assets/logos/audi-black-and-white.png'; ?>">
                        <img src="<?= get_template_directory_uri().'/assets/logos/nissan-black-and-white.png'; ?>">
                    </div>
                </div>
            </div>

            </div>

            <div class="services-section">
                <div class="container">

                    <div class="section-wrapper">
                        <div class="row">
                            <div class="section-title col-6">
                                Making your <br> dream a reality
                            </div>

                            <div class="col-lg-6">
                                <p>Welcome to SuperCar Experiences, Ontario's Newest automotive experiences company. We offer our
                                    customers a unique shopping experience with a wide selection of quality rental products in our
                                    locally owned and operated store. Come visit us to browse our merchandise, chat with our team
                                    and just to have fun. If you have fun any questions, we are more than happy to help.
                                </p>
                            </div>
                        </div>
                        <div class="service-container">
                            <div class="row">

                                <div class="col-lg-3">
                                    <div class="service-logo">
                                        <img src="<?= get_template_directory_uri().'/assets/logos/service-car.png'; ?>">
                                        <div class="service-title">Car Rentals</div>
                                        <div class="separator"></div>
                                        <div class="service-description">
                                            If you are looking for a luxury or exotic car for rental, then Supercar Experiences can be the ideal destination
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-logo">
                                        <img src="<?= get_template_directory_uri().'/assets/logos/service-car.png'; ?>">
                                        <div class="service-title">Track Days</div>
                                        <div class="separator"></div>
                                        <div class="service-description">
                                            If you are looking for a luxury or exotic car for rental, then Supercar Experiences can be the ideal destination
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="service-logo">
                                        <img src="<?= get_template_directory_uri().'/assets/logos/service-car.png'; ?>">
                                        <div class="service-title">Driving Tours</div>
                                        <div class="separator"></div>
                                        <div class="service-description">
                                            If you are looking for a luxury or exotic car for rental, then Supercar Experiences can be the ideal destination
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <div class="service-logo">
                                        <img src="<?= get_template_directory_uri().'/assets/logos/service-car.png'; ?>">
                                        <div class="service-title">Test Drives</div>
                                        <div class="separator"></div>
                                        <div class="service-description">
                                            If you are looking for a luxury or exotic car for rental, then Supercar Experiences can be the ideal destination
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="service-cars">
                                    <img src="<?= get_template_directory_uri().'/assets/images/service-lamborghini.png'; ?>">
                                    <img src="<?= get_template_directory_uri().'/assets/images/service-mercedes.png'; ?>">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        <div class="car-section">
            <div class="car-section-wrapper">
                <div class="container">

                    <div class="section-wrapper">

                        <div class="section-title red">
                            Choose Your <br/>
                        </div>
                        <div class="section-subtitle">
                            Supercar driving experience
                        </div>
                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                        endwhile; // End of the loop.
                        ?>

<!--                        <div class="row">-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div><div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div><div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="car-card">-->
<!--                                    <div class="car-image">-->
<!--                                        <img src="--><?//= get_template_directory_uri().'/assets/images/lamborghini-huracan.png'; ?><!--">-->
<!--                                    </div>-->
<!--                                    <div class="car-make"> Lamborghini Huracan</div>-->
<!--                                    <div class="car-details red">View details</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->

                    </div>

                </div>
            </div>
        </div>
        <!-- #about us -->
        <div class="section-about-us">
            <div class="about-us_content_wrapper">
                <div><span class="thick">Want to know</span> <span class="bold">more about us?</span> </div>
                <div><span class="bold">Play our video</span> <span class="thick">Now!</span></div>
                <div class="btn-play"> <img src="<?= get_template_directory_uri().'/assets/logos/btn-play.png'; ?>"> </div>
                <div class="contact-info">
                    <div class="contact-info_title">Have any questions</div>
                    <div class="contact-info_number red"> 416-900-1102</div>
                    <div class="contact-info_image">
                        <img src="<?= get_template_directory_uri().'/assets/images/contact-image.png'; ?>">
                    </div>
                </div>

            </div>

        </div>

        <!-- #testimonials -->
        <div class="section-testimonials">
            <div class="container">
                <div class="testimonial_caption">What our client say</div>
                <div class="testimonial_header red">Testimonials</div>
                <div class="testimonial_text">
                    My boss booked a team-building event with Supercar Experiences. I was not at all interested in this Supercar tour,
                    even on the day of, I was sure I wasn’t going to go, as exotic cars were not my thing.
                    I am so thankful my co-workers talked me into going as boy oh boy was I wrong.
                    I was absolutely blown away at how much fun I had. I have not stopped bragging about the Ferrari,
                    Porsche and Audi that I was so lucky to be cruising in from Oshawa to Haliburton and back again.
                    The entire Supercar team was fun and extremely professional, they made the whole experience truly unforgettable.
                    (Now it’s my turn to talk my boss into doing another Supercar Experience team building event! I want that McLaren).
                </div>
                <div class="testimonial_author-image">
                    <img src="<?= get_template_directory_uri().'/assets/images/testimonial_author.png'; ?>">
                </div>
                <div class="testimonial_author-name">Ailsa</div>
            </div>

        </div>
        



    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();