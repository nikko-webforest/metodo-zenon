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

	<?php echo do_shortcode('[mz-sc-section--hero title="ZENON FAMILY" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Zenon_Family_Hero_sect-bg-v01-1440x440.png"]'); ?>

	<section class="mz-section mz-section--about-us"
		id="zenon-family-content">
		<div class="mz-container">
			<p class="p-01">
				About Us
			</p>
			<h2>
				We help people achieve the body and health status they desire
			</h2>
			<p>
			Located in the center of Valladolid, we offer our users an elite service completely adapted to their needs. 
			<br><br>
			In Zenon Method you will be able to work with a coordinated team of training, nutrition, physiotherapy and psychology professionals in the same location, who will design a program configured to your needs with clearly established objectives and will guide you throughout the process, saving time, effort and difficulties during the process.
			</p>
		</div>
    </section>

	<section class="mz-section mz-sc-section--mz-coaches-carousel">
		<div class="mz-container">
			<div class="carousel-main" data-current-slide='2'>
				<div class="carousel-cell" data-tab="Coach Anna">
					<div class="coach-img-wrap">
						<img class="coach-img mz-img"
							alt="Coach Anna"
							title="Coach Anna"
							src="/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_ZenonFamilyPage_CoachAnna.png"
							width=""
							height=""/>
					</div>
					<div class="coach-details-wrap">
						<div class="coach-type">Fitness Coach</div>
						<div class="coach-name">Anna</div>
					</div>
				</div>
				<div class="carousel-cell active" data-tab="Coach Juan">
					<div class="coach-img-wrap">
						<img class="coach-img mz-img"
							alt="Coach Juan"
							title="Coach Juan"
							src="/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_ZenonFamilyPage_CoachJuan.png"
							width=""
							height=""/>
					</div>
					<div class="coach-details-wrap">
						<div class="coach-type">Health Coach</div>
						<div class="coach-name">Juan</div>
					</div>
				</div>
				<div class="carousel-cell" data-tab="Coach Alfaro">
					<div class="coach-img-wrap">
						<img class="coach-img mz-img"
							alt="Coach Alvaro"
							title="Coach Alvaro"
							src="/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_ZenonFamilyPage_CoachAlvaro.png"
							width=""
							height=""/>
					</div>
					<div class="coach-details-wrap">
						<div class="coach-type">Nutrition Coach</div>
						<div class="coach-name">Alvaro</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="mz-section mz-sc-section--mz-coaches-details">
		<div class="mz-container">
			<div class="carousel-content">
				<div class="mz-row">
					<div class="mz-col">
						<img class="coach-img mz-img"
							alt="Coach Juan"
							title="Coach Juan"
							src="/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-content/MZ_ZenonFamilyPage_CoachJuan.png"
							width=""
							height=""/>	
						<div class="mz-details">
							<h3>Juan Robles Morala</h3>
							<h6>Health Coach</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="mz-socials">
								<a href="" target="_blank">
									<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="30" height="30" fill="#6F4A37"/>
										<path d="M24 15.5517C24 10.8276 20.1956 7 15.5 7C10.8044 7 7 10.8276 7 15.5517C7 19.82 10.1083 23.3579 14.1719 24V18.0238H12.0126V15.5517H14.1719V13.6676C14.1719 11.5245 15.44 10.3407 17.3823 10.3407C18.3125 10.3407 19.2852 10.5076 19.2852 10.5076V12.611H18.2131C17.1575 12.611 16.8281 13.2703 16.8281 13.9466V15.5517H19.1855L18.8085 18.0238H16.8281V24C20.8917 23.3579 24 19.82 24 15.5517Z" fill="white"/>
									</svg>
								</a>
								<a href="" target="_blank">
									<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="30" height="30" fill="#6F4A37"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0039 11.1414C12.5913 11.1414 10.6453 13.0874 10.6453 15.5C10.6453 17.9126 12.5913 19.8586 15.0039 19.8586C17.4165 19.8586 19.3626 17.9126 19.3626 15.5C19.3626 13.0874 17.4165 11.1414 15.0039 11.1414ZM15.004 18.3336C13.4449 18.3336 12.1704 17.0628 12.1704 15.5C12.1704 13.9371 13.4411 12.6663 15.004 12.6663C16.5669 12.6663 17.8377 13.9371 17.8377 15.5C17.8377 17.0628 16.5631 18.3336 15.004 18.3336H15.004ZM20.5576 10.9632C20.5576 11.5284 20.1023 11.9798 19.5409 11.9798C18.9757 11.9798 18.5243 11.5246 18.5243 10.9632C18.5243 10.4018 18.9795 9.94655 19.5409 9.94655C20.1023 9.94655 20.5576 10.4018 20.5576 10.9632ZM23.4443 11.9949C23.3798 10.6331 23.0688 9.42681 22.0711 8.43295C21.0772 7.43908 19.8709 7.12803 18.5091 7.05975C17.1055 6.98008 12.8986 6.98008 11.495 7.05975C10.137 7.12423 8.93064 7.43529 7.93297 8.42915C6.9353 9.42302 6.62803 10.6293 6.55975 11.9911C6.48008 13.3947 6.48008 17.6015 6.55975 19.0051C6.62424 20.3669 6.9353 21.5732 7.93297 22.5671C8.93064 23.5609 10.1332 23.872 11.495 23.9403C12.8986 24.0199 17.1055 24.0199 18.5091 23.9403C19.8709 23.8758 21.0772 23.5647 22.0711 22.5671C23.065 21.5732 23.3761 20.3669 23.4443 19.0051C23.524 17.6015 23.524 13.3985 23.4443 11.9949H23.4443ZM21.631 20.5109C21.3352 21.2544 20.7623 21.8272 20.015 22.1269C18.896 22.5707 16.2406 22.4683 15.0039 22.4683C13.7673 22.4683 11.1081 22.5669 9.99281 22.1269C9.2493 21.831 8.67649 21.2582 8.37681 20.5109C7.93298 19.3919 8.0354 16.7365 8.0354 15.4999C8.0354 14.2632 7.93677 11.6041 8.37681 10.4888C8.6727 9.74534 9.24551 9.17254 9.99281 8.87286C11.1119 8.42903 13.7673 8.53146 15.0039 8.53146C16.2406 8.53146 18.8998 8.43283 20.015 8.87286C20.7586 9.16874 21.3314 9.74154 21.631 10.4888C22.0749 11.6079 21.9725 14.2632 21.9725 15.4999C21.9725 16.7365 22.0749 19.3957 21.631 20.5109Z" fill="white"/>
									</svg>
								</a>
								<a href="" target="_blank">
									<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="30" height="30" fill="#6F4A37"/>
										<path d="M22.0463 11.7383C22.0576 11.9023 22.0576 12.0664 22.0576 12.2305C22.0576 17.2344 18.3695 23 11.6287 23C9.55196 23 7.62279 22.3789 6 21.3008C6.29506 21.3359 6.57874 21.3477 6.88515 21.3477C8.59869 21.3477 10.1761 20.75 11.4358 19.7305C9.82432 19.6953 8.47389 18.6055 8.0086 17.1055C8.23559 17.1406 8.46253 17.164 8.70087 17.164C9.02995 17.164 9.35907 17.1172 9.66545 17.0352C7.98593 16.6836 6.72625 15.1601 6.72625 13.3203V13.2734C7.2142 13.5547 7.78166 13.7305 8.38306 13.7539C7.39577 13.0742 6.74896 11.914 6.74896 10.6015C6.74896 9.89842 6.93049 9.25389 7.24826 8.69139C9.05262 10.9883 11.7648 12.4882 14.8061 12.6523C14.7494 12.3711 14.7153 12.0781 14.7153 11.7852C14.7153 9.6992 16.3495 8 18.3808 8C19.4361 8 20.3894 8.45703 21.0589 9.19531C21.8873 9.03126 22.6817 8.71484 23.3853 8.28125C23.1129 9.16018 22.5342 9.89846 21.7739 10.3672C22.5115 10.2852 23.2264 10.0742 23.8846 9.78126C23.3854 10.5312 22.7612 11.1992 22.0463 11.7383V11.7383Z" fill="white"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="mz-col">
						<div class="mz-description">
							<h5 class="mz-heading-01">
								Competitive Advantages
							</h5>
							<p class="p-06">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget. Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Sed ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
							</p>
						</div>
						<div class="mz-skillset">
							<div class="mz-skillset-item">
								<div class="mz-skillset-details">
									<h6 class="mz-skillset-name"> Health Coaching </h6>
									<h6 class="mz-skillset-level"> 95% </h6>
								</div>
								<progress value="95" max="100"></progress>
							</div>
							<div class="mz-skillset-item">
								<div class="mz-skillset-details">
									<h6 class="mz-skillset-name"> Corrective Exercise </h6>
									<h6 class="mz-skillset-level"> 97% </h6>
								</div>
								<progress value="97" max="100"></progress>
							</div>
							<div class="mz-skillset-item">
								<div class="mz-skillset-details">
									<h6 class="mz-skillset-name"> Weight Loss Transformation </h6>
									<h6 class="mz-skillset-level"> 90% </h6>
								</div>
								<progress value="90" max="100"></progress>
							</div>
						</div>
						<div class="mz-specialtes">
							<h5 class="mz-heading-02">
								Specialties
							</h5>
							<div class="mz-specialties-list">
								<div class="mz-specialties-item">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-row">
										<h4>
											Psycho Training
										</h4>
										<p class="p-03">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
										</p>
									</div>
								</div>
								<div class="mz-specialties-item">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-row">
										<h4>
											Psycho Training
										</h4>
										<p class="p-03">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
										</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <?php echo do_shortcode('[mz-sc-section--coaches-carousel]'); ?> -->
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
