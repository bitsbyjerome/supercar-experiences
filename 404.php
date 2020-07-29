<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SuperCar_Experiences
 */

get_header('general');
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found text-center">
			<div class="container">

                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'supercar-experiences' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'supercar-experiences' ); ?></p>


                </div><!-- .page-content -->

            </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
