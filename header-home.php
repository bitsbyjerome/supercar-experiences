<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SuperCar_Experiences
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'supercar-experiences' ); ?></a>
    <div class="hero-section">
        <header id="masthead" class="site-header container">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;
                $supercar_experiences_description = get_bloginfo( 'description', 'display' );
                if ( $supercar_experiences_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $supercar_experiences_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
                <ul class="top-header-info">
                    <li> <img src="<?= get_template_directory_uri().'/assets/logos/call.png';?>"> <a href="tel:416-900-1102">416-900-1102</a></li>
                    <li> <img src="<?= get_template_directory_uri().'/assets/logos/email.png';?>"> <a href="mailto:info@supercarexperiences.ca">info@supercarexperiences.ca</a> </li>
                </ul>
            </div><!-- .site-branding -->



            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'supercar-experiences' ); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div class="container">



            <div class="hero-content-container">

                <div class="hero-content row">
                    <div class="hero-text col-lg-6">
                        <p class="caption-red">Toronto's top exotic</p>
                        <p class="caption-main">car rental company</p>
                        <p class="caption-light">super car experiences</p>
                            <button data-toggle="modal" data-src="https://www.youtube.com/embed/-j7hDyNzKrA"
                                    class="btn hero-btn btn-primary" data-target="#youtube-video-modal">Watch video</button>
                    </div>
                    <div class="hero-img col-lg-6">
                        <img src="<?= get_template_directory_uri().'/assets/images/hero.png'; ?>">
                    </div>
                </div>

                <div class="modal fade" id="youtube-video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">


                            <div class="modal-body">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <!-- 16:9 aspect ratio -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-j7hDyNzKrA" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
