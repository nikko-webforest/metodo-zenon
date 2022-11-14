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

    <!-- jQuery v3.6.0 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js"></script>

    <!-- Flickity v2.3.0 -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity-fade@2/flickity-fade.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- GSAP v3.10.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/ScrollTrigger.min.js"></script>

    <!-- AOS v2.3.1 -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!-- .mz-toggle-theme-btn -->
  <button
    class="mz-toggle-theme-btn"
    style="position: fixed; left: 25px; bottom: 25px; z-index: 9; display: block; padding: 5px;">
    Toggle Theme
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
      } else if( currentTheme == "theme-light" ){
        document.body.classList.remove('theme-dark');
        document.body.classList.add('theme-light');
      } else {
        document.body.classList.add('theme-light');
      }

      console.log("currentTheme        = "+currentTheme);

      mzToggleThemeBtn.addEventListener("click", function(){

        if( document.body.classList.contains('theme-light') ){
          theme = 'theme-dark';
          document.body.classList.remove('theme-light');
          document.body.classList.add(theme);
          console.log("currentToggledTheme = "+theme);
        } else {
          theme = 'theme-light';
          document.body.classList.remove('theme-dark');
          document.body.classList.add(theme);
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