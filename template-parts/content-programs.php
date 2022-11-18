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

	<?php echo do_shortcode('[mz-sc-hero-section title="We Help You" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Programs_Hero_sect-bg.png"]'); ?>

	<section class="mz-section mz-programs-content">
		<div class="mz-container">
			<p class="p-01">
				Your Goal
			</p>
			<h2>
				DISCOVER THE ZENON METHOD WITH OUR COMPREHENSIVE PROGRAMS
			</h2>
			<div class="carousel-main" data-current-slide='1'>
				<div class="carousel-cell">
					<div class="programs-card">
						<div class="programs-card-number">
							01
						</div>
						<div class="programs-card-title">
							I WANT TO MAXIMIZE MY SPORTS PERFORMANCE
						</div>
						<hr>
						<a class="programs-card-link mz-link">
							LEARN MORE
						</a>
					</div>
				</div>
				<div class="carousel-cell">
					<div class="programs-card">
						<div class="programs-card-number">
							02
						</div>
						<div class="programs-card-title">
							I WANT TO CHANGE MY BODY
						</div>
						<hr>
						<a class="programs-card-link mz-link">
							LEARN MORE
						</a>
					</div>
				</div>
				<div class="carousel-cell">
					<div class="programs-card">
						<div class="programs-card-number">
							03
						</div>
						<div class="programs-card-title">
							I WANT TO STAY HEALTHY
						</div>
						<hr>
						<a class="programs-card-link mz-link">
							LEARN MORE
						</a>
					</div>
				</div>
				<div class="carousel-cell">
					<div class="programs-card">
						<div class="programs-card-number">
							04
						</div>
						<div class="programs-card-title">
							I WANT TO REGAIN MY HEALTH
						</div>
						<hr>
						<a class="programs-card-link mz-link">
							LEARN MORE
						</a>
					</div>
				</div>
				<div class="carousel-cell">
					<div class="programs-card">
						<div class="programs-card-number">
							05
						</div>
						<div class="programs-card-title">
							I WANT TO REGAIN MY HEALTH
						</div>
						<hr>
						<a class="programs-card-link mz-link">
							LEARN MORE
						</a>
					</div>
				</div>
			</div>
			<div class="carousel-content">
				<div class="carousel-cell">
					<div class="mz-row">
						<div class="mz-col">
							<div class="mz-col-wrap">
								<h4>SPORTS 01</h3>
								<h3>I WANT TO MAXIMIZE MY SPORTS PERFORMANCE</h2>
								<p class="p-02">
									Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
								</p>
								<div class="mz-inner-row">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
									
								<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"/>
										<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"/>
										<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"/>
										<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"/>
										<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"/>
										<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"/>
										<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-col">
										<h4>TRAINING</h4>
										<p class="p-03">Lorem ipsum dolor sit amet, consec tetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-col">
							<img class="mz-img"
								alt=""
								title=""
								src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
								width=""
								height=""
								loading=""/>
							<div class="mz-overlap-wrap">
								<h3>ELITE</h3>
								<p class="p-04">PROGRAM FOR YOU</p>
							</div>
						</div>
					</div>
					<div class="mz-row">
						<div class="mz-col">
							
						</div>
					</div>
					<div class="program-features">
						<div class="mz-container-card">
							<div class="mz-card-title">
								<h3>
									ELITE PROGRAM 1
								</h3>
							</div>
							<div class="mz-card-body">
								<p>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. Objective to gain strength and muscle at levels above the population average.
								<br/><br/>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. 	
								</p>
								<ul>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="mz-details">
							<div class="mz-row-01">
								<h6>
									Competitive Advantages
								</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.
								</p>
							</div>
							<div class="mz-row-02">
								<h6>
									Program Features
								</h6>
								<p>
								Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Se d ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
								</p>
							</div>
							<div class="mz-checklist">
								<ul>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Relieve pain
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Improve movement or ability
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent or recover from a sports injury
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent disability or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Rehab after a stroke, accident, injury, or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Work on balance to prevent a slip or fall
									</li>
								</ul>
							</div>
							<div class="mz-buttons">
								<a
									title="Start Now"
									target=""
									class="mz-cta mz-cta-start-now"
									href=""
									rel=""
									>
									Start Now
								</a>
								<a
									title="Free Trial"
									target=""
									class="mz-cta mz-cta-free-trial"
									href=""
									rel=""
									>
									Free Trial
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-cell">
					<div class="mz-row">
						<div class="mz-col">
							<div class="mz-col-wrap">
								<h4>SPORTS 02</h3>
								<h3>I WANT TO MAXIMIZE MY SPORTS PERFORMANCE</h2>
								<p class="p-02">
									Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
								</p>
								<div class="mz-inner-row">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"/>
										<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"/>
										<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"/>
										<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"/>
										<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"/>
										<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"/>
										<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-col">
										<h4>TRAINING</h4>
										<p class="p-03">Lorem ipsum dolor sit amet, consec tetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-col">
							<img class="mz-img"
								alt=""
								title=""
								src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
								width=""
								height=""
								loading=""/>
							<div class="mz-overlap-wrap">
								<h3>ELITE</h3>
								<p class="p-04">PROGRAM FOR YOU</p>
							</div>
						</div>
					</div>
					<div class="mz-row">
						<div class="mz-col">
							
						</div>
					</div>
					<div class="program-features">
						<div class="mz-container-card">
							<div class="mz-card-title">
								<h3>
									ELITE PROGRAM 2
								</h3>
							</div>
							<div class="mz-card-body">
								<p>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. Objective to gain strength and muscle at levels above the population average.
								<br/><br/>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. 	
								</p>
								<ul>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="mz-details">
							<div class="mz-row-01">
								<h6>
									Competitive Advantages
								</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.
								</p>
							</div>
							<div class="mz-row-02">
								<h6>
									Program Features
								</h6>
								<p>
								Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Se d ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
								</p>
							</div>
							<div class="mz-checklist">
								<ul>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Relieve pain
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Improve movement or ability
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent or recover from a sports injury
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent disability or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Rehab after a stroke, accident, injury, or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Work on balance to prevent a slip or fall
									</li>
								</ul>
							</div>
							<div class="mz-buttons">
								<a
									title="Start Now"
									target=""
									class="mz-cta mz-cta-start-now"
									href=""
									rel=""
									>
									Start Now
								</a>
								<a
									title="Free Trial"
									target=""
									class="mz-cta mz-cta-free-trial"
									href=""
									rel=""
									>
									Free Trial
								</a>
							</div>
						</div>
					</div>			
				</div>
				<div class="carousel-cell">
					<div class="mz-row">
						<div class="mz-col">
							<div class="mz-col-wrap">
								<h4>SPORTS 03</h3>
								<h3>I WANT TO MAXIMIZE MY SPORTS PERFORMANCE</h2>
								<p class="p-02">
									Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
								</p>
								<div class="mz-inner-row">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"/>
										<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"/>
										<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"/>
										<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"/>
										<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"/>
										<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"/>
										<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-col">
										<h4>TRAINING</h4>
										<p class="p-03">Lorem ipsum dolor sit amet, consec tetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-col">
							<img class="mz-img"
								alt=""
								title=""
								src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
								width=""
								height=""
								loading=""/>
							<div class="mz-overlap-wrap">
								<h3>ELITE</h3>
								<p class="p-04">PROGRAM FOR YOU</p>
							</div>
						</div>
					</div>
					<div class="mz-row">
						<div class="mz-col">
							
						</div>
					</div>
					<div class="program-features">
						<div class="mz-container-card">
							<div class="mz-card-title">
								<h3>
									ELITE PROGRAM 3
								</h3>
							</div>
							<div class="mz-card-body">
								<p>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. Objective to gain strength and muscle at levels above the population average.
								<br/><br/>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. 	
								</p>
								<ul>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="mz-details">
							<div class="mz-row-01">
								<h6>
									Competitive Advantages
								</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.
								</p>
							</div>
							<div class="mz-row-02">
								<h6>
									Program Features
								</h6>
								<p>
								Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Se d ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
								</p>
							</div>
							<div class="mz-checklist">
								<ul>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Relieve pain
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Improve movement or ability
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent or recover from a sports injury
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent disability or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Rehab after a stroke, accident, injury, or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Work on balance to prevent a slip or fall
									</li>
								</ul>
							</div>
							<div class="mz-buttons">
								<a
									title="Start Now"
									target=""
									class="mz-cta mz-cta-start-now"
									href=""
									rel=""
									>
									Start Now
								</a>
								<a
									title="Free Trial"
									target=""
									class="mz-cta mz-cta-free-trial"
									href=""
									rel=""
									>
									Free Trial
								</a>
							</div>
						</div>
					</div>	
				</div>
				<div class="carousel-cell">
					<div class="mz-row">
						<div class="mz-col">
							<div class="mz-col-wrap">
								<h4>SPORTS 04</h3>
								<h3>I WANT TO MAXIMIZE MY SPORTS PERFORMANCE</h2>
								<p class="p-02">
									Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
								</p>
								<div class="mz-inner-row">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"/>
										<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"/>
										<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"/>
										<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"/>
										<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"/>
										<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"/>
										<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-col">
										<h4>TRAINING</h4>
										<p class="p-03">Lorem ipsum dolor sit amet, consec tetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-col">
							<img class="mz-img"
								alt=""
								title=""
								src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
								width=""
								height=""
								loading=""/>
							<div class="mz-overlap-wrap">
								<h3>ELITE</h3>
								<p class="p-04">PROGRAM FOR YOU</p>
							</div>
						</div>
					</div>
					<div class="mz-row">
						<div class="mz-col">
							
						</div>
					</div>
					<div class="program-features">
						<div class="mz-container-card">
							<div class="mz-card-title">
								<h3>
									ELITE PROGRAM 4
								</h3>
							</div>
							<div class="mz-card-body">
								<p>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. Objective to gain strength and muscle at levels above the population average.
								<br/><br/>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. 	
								</p>
								<ul>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="mz-details">
							<div class="mz-row-01">
								<h6>
									Competitive Advantages
								</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.
								</p>
							</div>
							<div class="mz-row-02">
								<h6>
									Program Features
								</h6>
								<p>
								Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Se d ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
								</p>
							</div>
							<div class="mz-checklist">
								<ul>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Relieve pain
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Improve movement or ability
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent or recover from a sports injury
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent disability or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Rehab after a stroke, accident, injury, or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Work on balance to prevent a slip or fall
									</li>
								</ul>
							</div>
							<div class="mz-buttons">
								<a
									title="Start Now"
									target=""
									class="mz-cta mz-cta-start-now"
									href=""
									rel=""
									>
									Start Now
								</a>
								<a
									title="Free Trial"
									target=""
									class="mz-cta mz-cta-free-trial"
									href=""
									rel=""
									>
									Free Trial
								</a>
							</div>
						</div>
					</div>	
				</div>
				<div class="carousel-cell">
					<div class="mz-row">
						<div class="mz-col">
							<div class="mz-col-wrap">
								<h4>SPORTS 05</h3>
								<h3>I WANT TO MAXIMIZE MY SPORTS PERFORMANCE</h2>
								<p class="p-02">
									Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.
								</p>
								<div class="mz-inner-row">
									<svg class="mz-svg" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194Z" fill="#6F4A37"/>
										<path d="M25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0857 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723Z" fill="#6F4A37"/>
										<path d="M12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185Z" fill="#6F4A37"/>
										<path d="M12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387Z" fill="#6F4A37"/>
										<path d="M1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644Z" fill="#6F4A37"/>
										<path d="M50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677Z" fill="#6F4A37"/>
										<path d="M20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
									</svg>
									<div class="mz-inner-col">
										<h4>TRAINING</h4>
										<p class="p-03">Lorem ipsum dolor sit amet, consec tetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-col">
							<img class="mz-img"
								alt=""
								title=""
								src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png"
								width=""
								height=""
								loading=""/>
							<div class="mz-overlap-wrap">
								<h3>ELITE</h3>
								<p class="p-04">PROGRAM FOR YOU</p>
							</div>
						</div>
					</div>
					<div class="mz-row">
						<div class="mz-col">
							
						</div>
					</div>
					<div class="program-features">
						<div class="mz-container-card">
							<div class="mz-card-title">
								<h3>
									ELITE PROGRAM 5
								</h3>
							</div>
							<div class="mz-card-body">
								<p>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. Objective to gain strength and muscle at levels above the population average.
								<br/><br/>
								Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. 	
								</p>
								<ul>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
									<li> 
										<div class="mz-title">
											PROGRAM
										</div>
										<hr>
										<div class="mz-curriculum">
											PHYSIO CURRICULUM
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="mz-details">
							<div class="mz-row-01">
								<h6>
									Competitive Advantages
								</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.
								</p>
							</div>
							<div class="mz-row-02">
								<h6>
									Program Features
								</h6>
								<p>
								Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Se d ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
								</p>
							</div>
							<div class="mz-checklist">
								<ul>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Relieve pain
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Improve movement or ability
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent or recover from a sports injury
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Prevent disability or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Rehab after a stroke, accident, injury, or surgery
									</li>
									<li>
										<img src="/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png"> Work on balance to prevent a slip or fall
									</li>
								</ul>
							</div>
							<div class="mz-buttons">
								<a
									title="Start Now"
									target=""
									class="mz-cta mz-cta-start-now"
									href=""
									rel=""
									>
									Start Now
								</a>
								<a
									title="Free Trial"
									target=""
									class="mz-cta mz-cta-free-trial"
									href=""
									rel=""
									>
									Free Trial
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php echo do_shortcode('[mz-sc-testimonials-carousel]'); ?>

	<?php echo do_shortcode('[mz-sc-recent-articles]'); ?>

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
