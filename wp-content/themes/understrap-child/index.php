<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="news">
	<section>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<div class="sliding-bg whats-new-bg-1">
		    	</div>
		    </div>
		    <div class="carousel-item">
		    	<div class="sliding-bg whats-new-bg-2">
		    	</div>
		    </div>
		    <div class="carousel-item">
		    	<div class="sliding-bg whats-new-bg-3">
		    	</div>
		    </div>
		  </div>
		</div>
	</section>
	<section class="wrapper" id="index-wrapper">
		<div class="container-fluid" id="content" tabindex="-1">
			<main class="site-main" id="main">
		        <div class="container">
		        	<div class="row text-center mt-5">
			        	<div class="col">
			        		<h1>新着お知らせ</h1>
			        	</div>
		        	</div>
			        <div class="row my-5">
			        	<div class="col-6 text-primary">
			        		<p>全<?php $posts = get_posts(); 
							$count = count($posts); 
							echo $count; 
							?>件</p>
			        	</div>
			        	<div class="col-6">
				        	<?php understrap_pagination(); ?>
				        </div>
				    </div>
			        <?php while ( have_posts() ) : the_post(); ?>
			        <div class="row articles mt-5">
			         	<div class="col">
			            	<?php get_template_part( 'loop-templates/content', 'post' ); ?>
			         	</div>
			         </div>
			        <?php endwhile; // end of the loop. ?>
			        <?php if($posts) : ?>
			        <div class="row my-5">
						<div class="col-6 text-primary">
			        		<p>全<?php $posts = get_posts(); 
							$count = count($posts); 
							echo $count; 
							?>件</p>
			        	</div>
			        	<div class="col-6">
				        	<?php understrap_pagination(); ?>
				        </div>
					</div>
					<?php endif; ?>
				</div>
			</main><!-- #main -->
		</div><!-- #content -->
	</section>
</div>
<?php get_footer(); ?>