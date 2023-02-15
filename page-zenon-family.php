<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

get_header();
?>

	<!-- #main -->
	<main id="primary" class="mz-main programs-main">
		
		<?php
			while ( have_posts() ) :
				the_post();

				$coachesArgs = array(
					'post_type'   => 'coaches',
					'post_status' => 'publish',
					'orderby'     => 'date',
					'order'       => 'ASC',
				);

				$coachesQuery = new WP_Query( $coachesArgs );

				get_template_part( 'template-parts/page', 'zenon-family', array(
					'posts' => $coachesQuery
				));

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				//	comments_template();
				// endif;

			endwhile;
			// End of the loop.
		?>

	</main>

<?php
	// get_sidebar();
	get_footer();
