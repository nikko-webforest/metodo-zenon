<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package metodo_zenon
 */

get_header();
?>

	<!-- #main .mz-main -->
	<main id="primary" class="mz-main">

		<!-- .mz-error-404-not-found-section -->
		<section class="mz-section mz-error-404-not-found-section">
			<div class="mz-container">
				
				<h1 class="page-title">
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'metodo-zenon' ); ?>
				</h1>

			</div>
		</section>

	</main>

<?php
get_footer();
