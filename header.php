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

  <!-- FontAwesome v4.7.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Flickity v2.3.0 -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- jQuery v3.6.0 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js"></script>

  <!-- GSAP v3.10.3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/ScrollTrigger.min.js"></script>

  <!-- AOS v2.3.1 -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Masonry -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- .mz-toggle-theme-btn -->
  <button class="mz-toggle-theme-btn"
    title="Toggle Theme">
    <svg class="mz-svg" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
      <ellipse id="eclipse_01" cx="22.2858" cy="22.0613" rx="21.86" ry="21.875" fill="#1A171C"/>
      <path id="path_01" d="M42.3133 22.1226C42.3133 33.1547 33.3761 42.098 22.3516 42.098V2.14706C33.3761 2.14706 42.3133 11.0904 42.3133 22.1226Z" fill="white"/>
      <path id="path_02" d="M22.3466 36.3382C14.5008 36.3382 8.14062 29.9737 8.14062 22.1225C8.14062 14.2714 14.5008 7.90686 22.3466 7.90686V36.3382Z" fill="white"/>
      <path id="path_03" d="M22.3449 36.3382C30.1906 36.3382 36.5508 29.9737 36.5508 22.1225C36.5508 14.2714 30.1906 7.90686 22.3449 7.90686V36.3382Z" fill="#1A171C"/>
    </svg>
    <span>Light Theme</span>
  </button>
  <script>
    /* mz-toggle-theme-btn */
    (function (){

      const mzToggleThemeBtn = document.querySelector('.mz-toggle-theme-btn');
      const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
      const currentTheme = localStorage.getItem("theme");
      var theme;

      if( currentTheme == "theme-dark" ){
        document.body.classList.remove('theme-light');
        document.body.classList.add('theme-dark');
        mzToggleThemeBtn.classList.remove('theme-light');
        mzToggleThemeBtn.classList.add('theme-dark');
        mzToggleThemeBtn.querySelector('span').innerHTML = 'DARK THEME';
      } else if( currentTheme == "theme-light" ){
        document.body.classList.remove('theme-dark');
        document.body.classList.add('theme-light');
        mzToggleThemeBtn.classList.remove('theme-dark');
        mzToggleThemeBtn.classList.add('theme-light');
        mzToggleThemeBtn.querySelector('span').innerHTML = 'LIGHT THEME';
      } else {
        document.body.classList.add('theme-light');
      }

      console.log("currentTheme        = "+currentTheme);

      mzToggleThemeBtn.addEventListener("click", function(){

        if( document.body.classList.contains('theme-light') ){
          theme = 'theme-dark';
          document.body.classList.remove('theme-light');
          document.body.classList.add(theme);
          mzToggleThemeBtn.classList.remove('theme-light');
          mzToggleThemeBtn.classList.add('theme-dark');
          mzToggleThemeBtn.querySelector('span').innerHTML = 'DARK THEME';
          console.log("currentToggledTheme = "+theme);
        } else {
          theme = 'theme-light';
          document.body.classList.remove('theme-dark');
          document.body.classList.add(theme);
          mzToggleThemeBtn.classList.remove('theme-dark');
          mzToggleThemeBtn.classList.add('theme-light');
          mzToggleThemeBtn.querySelector('span').innerHTML = 'LIGHT THEME';
          console.log("currentToggledTheme = "+theme);
        }
        localStorage.setItem("theme", theme);

      });

    })();
  </script>

	<?php wp_body_open(); ?>

	<!-- #page -->
	<div id="page" class="site">

		<!-- .skip-link -->
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'metodo-zenon' ); ?></a>

    <!-- #mz-header - Dynamic -->
		<header class="mz-header">
			<div class="mz-wrap">
				<div class="mz-header-logo">
					<a class="mz-header-logo-link"
						title=""
						target=""
						href="<?php echo home_url(); ?>"
						rel="">
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
					wp_nav_menu(array(
            'theme_location' => 'Primary',
            'menu'           => 'Header - Primary - Mega Menu',
						'container'      => false,
            'menu_class'     => 'mz-header-menu',
						'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
						// 'menu_id'      => '',
						// 'item_spacing' => 'preserve',
						// 'before' => '<span>before1</span>',
						// 'link_before' => '<span>before2</span>'
					));
          
					wp_nav_menu(array(
            // 'theme_location' => 'Primary',
            'menu'           => 'Header - Primary - CTA',
						'container'      => false,
            'menu_class'     => 'mz-header-cta',
						'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
						// 'menu_id'      => '',
						// 'item_spacing' => 'preserve',
						// 'before' => '<span>before1</span>',
						// 'link_before' => '<span>before2</span>'
					));
				?>
			</div>
		</header>