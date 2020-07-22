<?php
/**
 * Template Name : Home Page
 * The Home Page template.
 */

?>

<?php
get_header('general');
?>

<main id="primary" class="site-main">


    <div class="hero-content-container">

        <div class="hero-content_image">
            <img src="<?= get_template_directory_uri().'/assets/images/service-mercedes.png'; ?>">
        </div>

        <div class="hero-content_image">
            <img src="<?= get_template_directory_uri().'/assets/images/hero-lambo.png'; ?>">
        </div>

        <div class="hero-content_image">
            <img src="<?= get_template_directory_uri().'/assets/images/hero-nissan.png'; ?>">
        </div>

    </div>

    <div class="container">

        <div class="supercar_section">

            <div class="row">
                <div class="section-image col-lg-6">
                    <img src="<?= get_template_directory_uri().'/assets/images/lambo-supercar.png'; ?>">
                </div>
                <div class="section-text col-lg-6">
                    <p>
                        Are you keen to explore the Canadian roads on a supercar? Then visit us at Supercar Experiences. We offer a range of luxury & Exotic car experiences like test drives and practice laps. Strap on the seatbelt and get an experience of a lifetime when you drive high-end supercars like Ferrari, McLaren, and Lamborghini.
                    </p>

                    <p>
                        Get hold of the steering wheel of any of these top of the line supercars and realize your dream of driving with tread marks that set pulses racing.
                    </p>

                    <p>
                        Are you interested in spending a few hours soaking in the ambience of a supercar? Then opt for the assisted driving tours offered by us. Race a few laps, test drive an exotic fast car, or set the rubber burning at Canadian Tire Motorsport Park or Grand Bend Raceway on timed sessions – we make it possible for you.
                    </p>

                </div>
            </div>
        </div>

    </div>

    <div class="usp_section">

        <div class="container">
            <div class="section_title">
                Expertise at the <br/>
                heart of our usp
            </div>

            <div class="section-text">
                <p>
                    Our USP is the immense exposure we have in designing tailored automobile experiences for supercar fanatics. When you seek adventure in an exotic luxury car, you may have many queries – where can you get the latest model of a supercar? Can you take the car for a spin on Canada’s picturesque roads? Can you get an assisted tour of supercar? Our team will be happy to answer these queries with our customized experiences and tours that you get in a supercar.
                </p>

                <p>
                    Our team of committed personnel enables you to hop aboard on your choice of high octane supercars and fulfil your dream to ride such exotic cars. With Supercar Experiences, you are sure about riding well-maintained and pristine quality four-wheelers. The Supercars are rightly the thoroughbreds of the automobile industry. The speed, performance, and the sleek look of a mean ride make it costly. Owning a supercar is also a challenge. You may have always dreamt of what it is to enjoy the interiors of a supercar pacing down the racetrack at 200km/h? Why don’t you experience it yourself with Supercar Experiences? Don’t let budget come in the way of a fabulous experience. Connect with us, your preferred auto experiences company, that makes it possible to enjoy test drives, guided tours, and racing laps on actual Motorsport tracks.

                </p>


            </div>
        </div>

    </div>

    <div class="auto_section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="section_content">

                        <div class="section_title">
                            Check out the different auto experiences only at<br/> <span class="red">supercar experiences</span>
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

    <div class="experiences_section">

        <div class="container">
            <div class="row">

                <div class="col-lg-3">

                    <div class="experience_element">
                        <div class="experience_logo">
                            <img src="<?= get_template_directory_uri().'/assets/images/driving-tours.png'; ?>">
                        </div>
                        <div class="experience_title">
                            Driving Tours
                        </div>
                        <div class="experience_text">
                            Driving Tours are by far the best value for our customers. They differ in the amount of vehicles driven and length of the tour...
                        </div>
                        <a href="/">Learn more</a>
                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="experience_element">
                        <div class="experience_logo">
                            <img src="<?= get_template_directory_uri().'/assets/images/driving-tours.png'; ?>">
                        </div>
                        <div class="experience_title">
                            Track Days
                        </div>
                        <div class="experience_text">
                            Driving Tours are by far the best value for our customers. They differ in the amount of vehicles driven and length of the tour...
                        </div>
                        <a href="/track-days">Learn more</a>
                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="experience_element">
                        <div class="experience_logo">
                            <img src="<?= get_template_directory_uri().'/assets/images/driving-tours.png'; ?>">
                        </div>
                        <div class="experience_title">
                            Test Drives
                        </div>
                        <div class="experience_text">
                            Driving Tours are by far the best value for our customers. They differ in the amount of vehicles driven and length of the tour...
                        </div>
                        <a href="/">Learn more</a>
                    </div>

                </div>

                <div class="col-lg-3">

                    <div class="experience_element">
                        <div class="experience_logo">
                            <img src="<?= get_template_directory_uri().'/assets/images/driving-tours.png'; ?>">
                        </div>
                        <div class="experience_title">
                            Laps
                        </div>
                        <div class="experience_text">
                            Driving Tours are by far the best value for our customers. They differ in the amount of vehicles driven and length of the tour...
                        </div>
                        <a href="/">Learn more</a>
                    </div>

                </div>

            </div>
        </div>

    </div>






</main>

<?php
//get_sidebar();
get_footer();
