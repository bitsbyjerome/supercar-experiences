<?php
/**
 * Template Name : Contact Us
 */

?>

<?php
get_header('general');
?>

    <main id="primary" class="site-main">

        <div class="section-contact-form">

            <div class="container">

                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <h1>Contact us for <span class="red">your queries!</span></h1>

                                <p>
                                    Does the idea of driving around in a super car sound incredibly exciting? If so, all you need to do is contact us to get to know more about how you can make this happen. As the leading name in supercar and exotic car rentals, we are the right people to get in touch with, in order to live out your dream of driving some of the most powerful cars known to man! There are three ways for you to get in touch with us and you may use them as per your convenience:
                                </p>
                                <ul>
                                    <li>
                                        <strong>Email​</strong>: Please email us with your queries at ​ info@supercarexperiences.ca​ . We have a great customer care support team set in place and they will get back to you with answers, pricing, and any other information that you desire promptly.
                                    </li>

                                    <li>
                                        <strong>Phone​</strong>: Our telephone’s always ringing off the hook thanks to the high demand for renting supercars! If you have any questions for us, then all you need to do is call us on 416-900-1102 ! We’ve always got staff waiting to answer calls so don’t worry about your calls going unanswered!
                                    </li>
                                    <li>
                                        <strong>Address​</strong>: We’re not a stickler for formalities! If you’ve got a question or want to see our cars firsthand, just pop down to our office and meet our professionals. We are located at 1058 SOUTH SERVICE ROAD EAST, OAKVILLE ONTARIO and are always happy to receive customers.
                                    </li>
                                    <li>
                                        <strong>Contact form</strong>​: Finally, if you’re not too keen about using any of the above methods, just fill the contact form on our website and we will get back to you as soon as possible. All you need to do is leave your phone number, email, name and message!
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-4">
                                <?php echo do_shortcode('[contact-form-7 id="83" title="Contact Us Form"]') ?>
                                <img src="<?= get_template_directory_uri().'/assets/images/contact.png'; ?>">
                            </div>
                        </div>
                    </div>

            </div>

            <div class="contact-form-info">

                <div class="container">
                    <div class="row">

                        <div class="form-info-element">
                            <img src="">
                            <div class="info-content">
                                <div class="info-title">
                                    Our location
                                </div>
                                <div class="info-text">
                                    1058 south service road east,<br/>
                                    Oakville, Ontario
                                </div>
                            </div>
                        </div>

                        <div class="form-info-element">
                            <img src="">
                            <div class="info-content">
                                <div class="info-title">
                                    Email address
                                </div>
                                <div class="info-text">
                                    info@supercarexperiences.ca
                                </div>
                            </div>
                        </div>

                        <div class="form-info-element">
                            <img src="">
                            <div class="info-content">
                                <div class="info-title">
                                    Phone number
                                </div>
                                <div class="info-text">
                                    416-900-1102
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
