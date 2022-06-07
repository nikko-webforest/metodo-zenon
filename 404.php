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

				<!-- .page-header -->
				<header class="page-header">
					<h1 class="page-title">
						<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'metodo-zenon' ); ?>
					</h1>
				</header>

				<!-- .page-content -->
				<div class="page-content">

					<p>
						<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'metodo-zenon' ); ?>
					</p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<!-- .widget -->
					<div class="widget widget_categories">
						<h2 class="widget-title">
							<?php esc_html_e( 'Most Used Categories', 'metodo-zenon' ); ?>
						</h2>
						<ul>
							<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
							?>
						</ul>
					</div>
					

					<?php
						/* translators: %1$s: smiley */
						$metodo_zenon_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'metodo-zenon' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$metodo_zenon_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div>

			</div>
		</section>

	</main>

<?php
get_footer();
