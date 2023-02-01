<?php
	/**
	 * The template for displaying search results pages
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
	 *
	 * @package metodo_zenon
	 */

	get_header();
?>

	<!-- #main -->
	<main id="primary" class="mz-main">

		<section class="mz-section mz-search-result-section">
			<div class="mz-container">

				<?php if ( have_posts() ) : ?>

					<!-- .page-header -->
					<header class="page-header">
						<h1 class="page-title">
							<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'metodo-zenon' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header>

					<?php

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();
					
					?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div>
		</section>

	</main>

<?php
	// get_sidebar();
	get_footer();
