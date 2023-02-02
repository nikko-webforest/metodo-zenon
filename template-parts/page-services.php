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

	<?php echo do_shortcode('[mz-sc-section--hero title="Services" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Services_Hero_sect-bg-v01-1440x440.png"]'); ?>

	<?php if( count($args['posts']->posts) > 0 ) : ?>
		<section class="mz-section mz-section--featured-services">
			<div class="mz-container">
				<h2 class="mz-title">
					Since We Met You, The Change Begins.
				</h2>
				<div class="mz-row">

					<?php $index = 1; ?>
					<?php foreach( array_slice($args['posts']->posts, 0, 4) as $post ) : ?>

						<div class="mz-col<?php echo ' '.str_replace(" ", "-", strtolower( $post->post_title ) ); ?><?php if( $index == 1 ){ echo ' active'; } ?>"
							data-tab="<?php echo str_replace(" ", "-", strtolower( $post->post_title ) ); ?>">
							<div class="services-card">
								<img class="services-card-icon-img mz-img"
									alt="<?php echo $post->post_title; ?>"
									title="<?php echo $post->post_title; ?>"

									<?php if( get_field('services_icon') ) : ?>
										src="<?php the_field('services_icon'); ?>"
									<?php else : ?>
										src=""
									<?php endif; ?>

									width=""
									height=""
									loading="lazy"/>
								<div class="services-card-title"><?php echo $post->post_title; ?></div>
								<div class="services-card-desc">

									<?php if( get_field('services_description') ) : ?>
										<?php the_field('services_description'); ?>
									<?php endif; ?>

								</div>
								<button class="services-card-link mz-cta--primary mz-cta"
									title="Learn More">
									Learn More
								</button>
							</div>
						</div>

						<?php $index++; ?>
					<?php endforeach; ?>

				</div>
			</div>
		</section>
		<section class="mz-section mz-section--other-services"
			id="mz-section--other-services">
			<div class="mz-container">
				<div class="mz-row">
					<div class="mz-col">
						<div class="mz-services-sidetab-list">

							<?php $index = 1; ?>
							<?php foreach( $args['posts']->posts as $post ) : ?>

								<div class="mz-services-sidetab-item<?php if( $index == 1 ){ echo ' active'; } ?>"
									data-tab="<?php echo str_replace(" ", "-", strtolower( $post->post_title ) ); ?>">
									<?php echo $post->post_title; ?>
									<svg class="mz-svg svg-icon-angle-right" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 1L6.33333 6L1 11" stroke="#0A0A0A" stroke-width="2"/>
									</svg>
								</div>

								<?php $index++; ?>

							<?php endforeach; ?>

						</div>
						<a class="mz-cta mz-cta--zenon-form"
							title="Zenon Method Form"
							href="#"
							rel="">
							<svg class="mz-svg" width="16" height="22" viewBox="0 0 16 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.4784 5.73592L9.97845 0.235988C9.90931 0.159218 9.82432 0.0983811 9.72936 0.0576835C9.63439 0.0169858 9.53173 -0.00260112 9.42845 0.000276885H1.57141C1.15503 0.00152044 0.756056 0.167478 0.461629 0.461906C0.167202 0.756333 0.00124356 1.1553 0 1.57169V20.4286C0.00124356 20.845 0.167202 21.2439 0.461629 21.5384C0.756056 21.8328 1.15503 21.9988 1.57141 22H14.1427C14.5591 21.9988 14.958 21.8328 15.2525 21.5384C15.5469 21.2439 15.7128 20.845 15.7141 20.4286V6.28591C15.717 6.18264 15.6974 6.07997 15.6567 5.98501C15.616 5.89005 15.5551 5.80506 15.4784 5.73592ZM9.42845 1.88597L13.8284 6.28591H9.42845V1.88597ZM14.1427 20.4286H1.57141V1.57169H7.85704V6.28591C7.85829 6.70229 8.02424 7.10126 8.31867 7.39569C8.6131 7.69012 9.01207 7.85608 9.42845 7.85732H14.1427V20.4286Z" fill="white"/>
							</svg>
							Zenon Method Form
						</a>
						<div class="mz-contact-details">
							<img class="mz-img"
								alt=""
								title=""
								src="/wp-content/themes/metodo-zenon/images/mz-zenon-services-section/MZ_ServicesPage_ContactDetails.png"
								width=""
								height=""
								loading=""/>
							<div class="contact-content">
								<h3>Need Some Help?</h3>
								<p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod.</p>
								<ul class="contact-info-list">
									<li class="contact-info-item">
										<a class="contact-info-link"
											title="Contact Email"
											href="mailto:metodozenon@gmail.com">
											<span class="contact-info-icon">
												<svg class="mz-svg svg-icon-envelope" width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0 0V18H25.3125V0H0ZM22.5281 1.51875L12.6562 8.35312L2.78437 1.51875H22.5281ZM1.51875 16.4531V2.27812L12.1409 9.78145C12.2923 9.88643 12.4721 9.94269 12.6562 9.94269C12.8404 9.94269 13.0202 9.88643 13.1715 9.78145L23.7937 2.27812V16.4531H1.51875Z" fill="white"/>
												</svg>
											</span>
											<span class="contact-info-label">metodozenon@gmail.com</span>
										</a>
									</li>
									<li class="contact-info-item">
										<a class="contact-info-link"
											title="Contact Number"
											href="tel:613914090">
											<span class="contact-info-icon">
												<svg class="mz-svg svg-icon-phone" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M0.629026 2.28609L0.665369 2.26338L5.25956 0L10.2182 6.61155L7.93687 9.65357C8.00514 10.8008 8.49165 11.8832 9.30429 12.6958C10.1169 13.5084 11.1993 13.9949 12.3465 14.0632L15.3885 11.7818L22 16.7404L19.7555 21.2962L19.7366 21.3346L19.7138 21.3709C19.594 21.5639 19.4268 21.723 19.2282 21.8332C19.0295 21.9433 18.8059 22.0007 18.5788 22H17.3933C15.1092 22 12.8474 21.5501 10.7372 20.676C8.62693 19.8019 6.7095 18.5207 5.09438 16.9056C3.47926 15.2905 2.19807 13.373 1.32398 11.2628C0.449888 9.1525 0 6.89073 5.72205e-06 4.6066V3.42109C-0.000720978 3.19395 0.0567017 2.9704 0.166807 2.77173C0.276911 2.57305 0.436033 2.40587 0.629026 2.28609ZM1.69777 4.6066C1.69777 13.2612 8.7388 20.3022 17.3933 20.3022H18.3526L19.8544 17.2535L15.3882 13.9039L12.9017 15.7687H12.6187C10.9251 15.7668 9.30147 15.0932 8.10393 13.8957C6.90639 12.6982 6.23279 11.0745 6.23089 9.38092V9.09797L8.09572 6.6115L4.74647 2.1456L1.69777 3.64764V4.6066Z" fill="white"></path>
												</svg>
											</span>
											<span class="contact-info-label">613 91 40 90</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<a class="mz-cta--goto-contact mz-cta"
							title="Contact Page"
							href="/contact-us"
							rel="">
							Go to Contact Page
						</a>
					</div>
					<div class="mz-col">

						<?php $index = 1; ?>
						<?php foreach( $args['posts']->posts as $post ) : ?>

							<div class="mz-tabpane-service-content<?php if( $index == 1 ){ echo ' active'; } ?>"
								id="<?php echo str_replace(" ", "-", strtolower( $post->post_title ) ); ?>">

								<?php echo $post->post_content; ?>

							</div>

							<?php $index++; ?>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	
	<?php echo do_shortcode('[mz-sc-section--video-testimonials-carousel]'); ?>

	<?php echo do_shortcode('[mz-sc-section--recent-articles]'); ?>

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

	<?php if( get_edit_post_link() ) : ?>

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

	<script>
		var thisSectionClass = '.mz-section--featured-services';
		
		$(document).ready(function () {
			$(thisSectionClass+' .mz-row .mz-col').click(function () {
				var data_tab = $(this).attr('data-tab');
				console.log(thisSectionClass+' .mz-row .mz-col = '+data_tab);

				$(thisSectionClass+' .mz-row .mz-col').removeClass('active');
				$(this).addClass('active');

				$('.mz-services-sidetab-item').removeClass('active');
				$('.mz-services-sidetab-item[data-tab="'+data_tab+'"]').addClass('active');

				$('.mz-tabpane-service-content').removeClass('active');
				$('.mz-tabpane-service-content#'+data_tab).addClass('active');
			});
			
			$('.mz-services-sidetab-item').click(function () {
				var data_tab = $(this).attr('data-tab');
				console.log('.mz-services-sidetab-item = '+data_tab);

				$(thisSectionClass+' .mz-row .mz-col').removeClass('active');
				$(thisSectionClass+' .mz-row .mz-col.'+data_tab).addClass('active');

				$('.mz-services-sidetab-item').removeClass('active');
				$(this).addClass('active');

				$('.mz-tabpane-service-content').removeClass('active');
				$('.mz-tabpane-service-content#'+data_tab).addClass('active');

				const element = document.querySelector(".mz-section--other-services");
				element.scrollIntoView();
			});

			$('.services-card-link').click(function () {
				const element = document.querySelector(".mz-section--other-services");
				element.scrollIntoView();
			});
		});
	</script>

</article>