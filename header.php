<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metodo_zenon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<!-- #page -->
	<div id="page" class="site">

		<!-- .skip-link -->
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'metodo-zenon' ); ?></a>
		
		<!-- #mz-header -->
		<header class="mz-header" style="display: none;">
			<div class="mz-wrap">
				<div class="mz-header-logo">
					<a
						title=""
						target=""
						class="mz-header-logo-link"
						href="/"
						rel=""
						>
						<img
							alt=""
							title=""
							class="mz-img mz-header-logo-img"
							src="/wp-content/themes/metodo-zenon/images/MZ_Logo_01.png"
							width=""
							height=""
						/>
					</a>
				</div>
				<button class="mz-header-hamburger-btn">
					<div class="mz-header-hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<div class="mz-header-menu">
					<div class="mz-header-menu-item --has-mega-menu">
						<a
							title=""
							target=""
							class="mz-header-menu-item-link"
							href="javascript:void(0)"
							rel=""
							>
							<span>
								Programs
							</span>
							<svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.92308 8L0 0H9.84615L4.92308 8Z" fill="#B0B0B0"></path>
							</svg>
						</a>
						<div class="mz-mega-menu">
							<div class="mz-mega-menu-container">
								<h2 class="mz-mega-menu-title">
									We Help You!
								</h2>
								<h3 class="mz-mega-menu-subtitle">
									Choose a Program That Suits Your Needs
								</h3>
								<ul class="mz-mega-menu-list">
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to maximize my sports performance
											</span>
											<span class="mz-mega-menu-fore-text">
												Elite
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to change in my body
											</span>
											<span class="mz-mega-menu-fore-text">
												Metamorphosis
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to stay healthy
											</span>
											<span class="mz-mega-menu-fore-text">
												Complete Health
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want a Functional Body
											</span>
											<span class="mz-mega-menu-fore-text">
												Metamorphosis
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to regain my health
											</span>
											<span class="mz-mega-menu-fore-text">
												Recovery
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I am the Protagonist
											</span>
											<span class="mz-mega-menu-fore-text">
												Zenon
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mz-header-menu-item --has-mega-menu">
						<a
							title=""
							target=""
							class="mz-header-menu-item-link"
							href="javascript:void(0)"
							rel=""
							>
							<span>
								Services
							</span>
							<svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.92308 8L0 0H9.84615L4.92308 8Z" fill="#B0B0B0"></path>
							</svg>
						</a>
						<div class="mz-mega-menu">
							<div class="mz-mega-menu-container">
								<h2 class="mz-mega-menu-title">
									We Help You 2!
								</h2>
								<h3 class="mz-mega-menu-subtitle">
									Choose a Program That Suits Your Needs
								</h3>
								<ul class="mz-mega-menu-list">
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to maximize my sports performance
											</span>
											<span class="mz-mega-menu-fore-text">
												Elite
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to change in my body
											</span>
											<span class="mz-mega-menu-fore-text">
												Metamorphosis
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to stay healthy
											</span>
											<span class="mz-mega-menu-fore-text">
												Complete Health
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want a Functional Body
											</span>
											<span class="mz-mega-menu-fore-text">
												Metamorphosis
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I Want to regain my health
											</span>
											<span class="mz-mega-menu-fore-text">
												Recovery
											</span>
										</a>
									</li>
									<li class="mz-mega-menu-item">
										<a
											title=""
											target=""
											class="mz-mega-menu-link"
											href="#"
											rel=""
											>
											<span class="mz-mega-menu-img" style="background-image: url(/wp-content/themes/metodo-zenon/images/3.jpg);"></span>
											<span class="mz-mega-menu-back-text">
												I am the Protagonist
											</span>
											<span class="mz-mega-menu-fore-text">
												Zenon
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="mz-header-menu-item">
						<a
							title=""
							target=""
							class="mz-header-menu-item-link"
							href="#"
							rel=""
							>
							<span>
								Zenon Family
							</span>
						</a>
					</div>
					<div class="mz-header-menu-item">
						<a
							title=""
							target=""
							class="mz-header-menu-item-link"
							href="#"
							rel=""
							>
							<span>
								Contact
							</span>
						</a>
					</div>
					<div class="mz-header-menu-item">
						<a
							title=""
							target=""
							class="mz-header-menu-item-link"
							href="#"
							rel=""
							>
							<span>
								Blogs
							</span>
						</a>
					</div>
					<?php
						wp_nav_menu(array(
							'container'       => 'div',
							'container_class' => 'mz-header-cta',
							'menu'            => 'Header - CTA Menu',
							'menu_class'      => 'mz-header-cta-list',
							'menu_id'         => false,
							'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						));
					?>
				</div>
				<?php
					wp_nav_menu(array(
						'container'       => 'div',
						'container_class' => 'mz-header-cta',
						'menu'            => 'Header - CTA Menu',
						'menu_class'      => 'mz-header-cta-list',
						'menu_id'         => false,
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					));
				?>
			</div>
		</header>

		<!-- #mz-header -->
		<header class="mz-header">
			<div class="mz-wrap">
				<div class="mz-header-logo">
					<a
						title=""
						target=""
						class="mz-header-logo-link"
						href="/"
						rel=""
						>
						<img
							alt=""
							title=""
							class="mz-img mz-header-logo-img"
							src="/wp-content/themes/metodo-zenon/images/MZ_Logo_01.png"
							width=""
							height=""
						/>
					</a>
				</div>
				<button class="mz-header-hamburger-btn">
					<div class="mz-header-hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<?php
					$navList = wp_nav_menu(array(
						'container'    => false,
						'menu'         => 'Header - Main Navigation Menu',
						'menu_class'   => 'mz-header-menu',
						'menu_id'      => '',
						'items_wrap'   => '<ul class="%2$s">%3$s</ul>',
						// 'item_spacing' => 'preserve',
						// 'before' => '<span>before1</span>',
						// 'link_before' => '<span>before2</span>'
					));
				?>
				<?php
					wp_nav_menu(array(
						'container'       => 'div',
						'container_class' => 'mz-header-cta',
						'menu'            => 'Header - CTA Menu',
						'menu_class'      => 'mz-header-cta-list',
						'menu_id'         => false,
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					));
				?>
			</div>
		</header>