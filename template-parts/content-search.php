<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

?>

<!-- #post-<?php the_ID(); ?> -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- .entry-header -->
	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<!-- .entry-meta -->
			<div class="entry-meta">
				<?php
					metodo_zenon_posted_on();
					metodo_zenon_posted_by();
				?>
			</div>
		
		<?php endif; ?>
		
	</header>

	<?php metodo_zenon_post_thumbnail(); ?>

	<!-- .entry-summary -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<!-- .entry-footer -->
	<footer class="entry-footer">
		<?php metodo_zenon_entry_footer(); ?>
	</footer>

</article>
