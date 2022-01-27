<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<section class="wrapper" id="single-wrapper">
	<div class="container-fluid pb-5 pt-3" id="content" tabindex="-1">
		<div class="container">
		<div class="row">
			<main class="site-main" id="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'single' ); ?>
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- .row -->
	</div><!-- #content -->
</section>

<?php get_footer(); ?>
