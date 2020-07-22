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

            <div class="container">

                <div class="row sub-hero">

                    <div class="col-lg-6">
                        <div class="section-title">
                            Car <span class="red">Rentals</span>
                        </div>
                        <p>
                            If you are looking for a luxury or exotic car for rental, then Supercar Experiences can be the ideal destination. We make available a range of supercars manufactured by top of the line brands like Ferrari, Lamborghini, and McLaren, Porsche, Audi and more. You can pick any of your favourite supercar from our selection of luxury cars. With us, you get a chance to Vroom past others on race tracks and on scenic roads, with your hands on the steering wheel of luxury supercars from prestigious brands.
                        </p>
                        <p>
                            Driving a supercar can be a dream for many. At our company, we aim to fulfill this dream and ensure that you get to ride these speed demons and attention grabbers. The affordable rental ensures that cost isn’t a barrier to a superlative experience. We provide a zero-hassle experience when you choose us to drive these exotic cars. You can conveniently book your choice of exotic or luxury cars in no time, choose from our vast range of sports cars.
                        </p>

                    </div>

                    <div class="col-lg-6">
                        <img src="<?= get_template_directory_uri().'/assets/images/mercedes_full.png'; ?>">
                    </div>

                </div>

                <div class="auto_section">

                    <div class="container">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section_content">

                                    <div class="section_title">
                                        Reasons that make Supercar Experiences a great option
                                    </div>
                                    <div class="section-text">
                                        <p>
                                            Go ahead, call up our team to get answers to any questions you may have. At Supercar Experiences, we will be happy to respond to them. We help you meet your goal to put the pedal to the metal in your favourite supercar at affordable price points. Why simply aspire to sit in a supercar. Call us, and you can actually sit behind the wheel of one of the luxury supercars.
                                        </p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <img src="<?= get_template_directory_uri().'/assets/images/auto-section-img.png'; ?>">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="auto_section">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-6">
                                <img src="<?= get_template_directory_uri().'/assets/images/auto-section-img.png'; ?>">
                            </div>

                            <div class="col-lg-6">
                                <div class="section_content">

                                    <div class="section_title">
                                        Go ahead, connect with us for affordable rentals
                                    </div>
                                    <div class="section-text">
                                        <p>
                                            So, what are you waiting for? Book your supercar rental today at Supercar Experiences! If you wish to get any doubts resolved or need clarifications then our helpful customer service team is just a phone call away.
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="section-wrapper">
                    <div class="section-title red">
                        Choose Your <br/>
                    </div>
                    <div class="section-subtitle">
                        Supercar driving experience
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
