<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row article-summary">
		<div class="d-none d-md-block col-md-2 my-auto">
			<div class="category-name">
				<?php $categories = get_the_category();
				$categories = get_the_category();
				if ( ! empty( $categories ) ) {
					echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
				}; ?>
				<?= $category->cat_name; ?>
			</div>
		</div>
		<div class="col-8 col-md-6 my-auto">
			<header class="entry-header mt-3">
				<a href="<?php the_permalink(); ?>"><?php the_title( '<p class="entry-title">', '</p>' ); ?></a>
			</header><!-- .entry-header -->
		</div>
		<div class="col-4 col-md-4 text-right my-auto">
			<p class="entry-date mt-3"><?php the_time( 'Y/m/j' ) ; ?></p>
		</div>
	</div>
</article><!-- #post-## -->