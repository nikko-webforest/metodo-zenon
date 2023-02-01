<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

?>

<!-- #post-<?php the_ID(); ?> -->
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php echo do_shortcode('[mz-sc-section--hero title="Donde Estamos" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Contact_Us_Hero_sect-bg-v01-1440x440.png"]'); ?>

	<section class="mz-section mz-section--zenon-method">
		<div class="mz-container">
			<h3>
				Método Zenon
			</h3>
			<p>
				<?php the_field('contact_us_page_description'); ?>
			</p>
		</div>
	</section>
	<section class="mz-section mz-section--talk-to-zenon">
		<div class="mz-container">
			<div class="mz-row">
				<div class="mz-col">
					<h3>
						Escríbenos
					</h3>
					<h2>
						Método Zenon
					</h2>
					<div class="mz-inner-row">
						<svg class="mz-svg" width="50" height="36" viewBox="0 0 50 36" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 0V35.5556H50V0H0ZM44.5 3L25 16.5L5.5 3H44.5ZM3 32.5V4.5L23.9821 19.3214C24.281 19.5288 24.6362 19.6399 25 19.6399C25.3638 19.6399 25.7189 19.5288 26.0178 19.3214L47 4.5V32.5H3Z" fill="#6F4A37"/>
						</svg>
						<div class="mz-inner-col">
							<h4>
								Correo electrónico
							</h4>
							<p class="p-03">
								<?php the_field('contact_us_email'); ?>
							</p>
						</div>
					</div>
					<div class="mz-inner-row">
						<svg class="mz-svg" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.42961 5.19565L1.5122 5.14404L11.9535 0L23.2233 15.0263L18.0383 21.9399C18.1935 24.5472 19.2992 27.0072 21.1461 28.8541C22.993 30.701 25.453 31.8066 28.0603 31.9618L34.9739 26.7768L50 38.0463L44.8988 48.4004L44.8558 48.4878L44.8041 48.5703C44.5319 49.0089 44.1519 49.3706 43.7004 49.6208C43.2489 49.8711 42.7408 50.0016 42.2246 50H39.5303C34.3391 50 29.1987 48.9775 24.4027 46.9909C19.6067 45.0043 15.2489 42.0925 11.5781 38.4218C7.9074 34.751 4.99562 30.3932 3.00905 25.5972C1.02247 20.8011 0 15.6608 1.52588e-05 10.4696V7.77521C-0.00164032 7.25898 0.128868 6.75091 0.379108 6.29938C0.629345 5.84785 0.990986 5.46788 1.42961 5.19565ZM3.85856 10.4696C3.85856 30.1391 19.8609 46.1414 39.5303 46.1414H41.7104L45.1235 39.2126L34.9731 31.5998L29.3219 35.838H28.6789C24.8299 35.8337 21.1397 34.3028 18.418 31.5811C15.6964 28.8594 14.1654 25.1693 14.1611 21.3203V20.6772L18.3994 15.0261L10.7874 4.87636L3.85856 8.29008V10.4696Z" fill="#6F4A37"/>
						</svg>
						<div class="mz-inner-col">
							<h4>
								Teléfono
							</h4>
							<p class="p-03">
								<?php the_field('contact_us_telephone'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="mz-col">
					<h4>
						Déjanos un mensaje
					</h4>
					<?php echo do_shortcode('[fluentform id="4"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="mz-section mz-section--our-location">
		<div class="mz-container">
			<h3>
				Donde encontrarnos
			</h3>
			<h2 class="location-label">
				<?php the_field('contact_us_address'); ?>
			</h2>
			<iframe class="location-maps"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.3702858352435!2d-4.735671884281076!3d41.64774098777694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd476d495ae72729%3A0x511aa189f0fb45e0!2sPlaza%20Tener%C3%ADas%2C%205%2C%2047006%20Valladolid%2C%20Spain!5e0!3m2!1sen!2sph!4v1672935503737!5m2!1sen!2sph" 
				width="100%"
				height="400"
				allowfullscreen=""
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
				style="border:0;">
			</iframe>
		</div>
	</section>

	<!-- .entry-content -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'metodo-zenon' ),
					'after'  => '</div>',
				)
			);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>

		<!-- .entry-footer -->
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'metodo-zenon' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>
		
	<?php endif; ?>
</article>
