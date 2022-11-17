<?php
/**
 * metodo zenon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package metodo_zenon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function metodo_zenon_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on metodo zenon, use a find and replace
		* to change 'metodo-zenon' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'metodo-zenon', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'metodo-zenon' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'metodo_zenon_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'metodo_zenon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function metodo_zenon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'metodo_zenon_content_width', 640 );
}
add_action( 'after_setup_theme', 'metodo_zenon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function metodo_zenon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'metodo-zenon' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'metodo-zenon' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'metodo_zenon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function metodo_zenon_scripts() {
	wp_enqueue_style( 'metodo-zenon-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'metodo-zenon-style', 'rtl', 'replace' );

	wp_enqueue_script( 'metodo-zenon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'metodo_zenon_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_shortcode( 'mz-sc-hero-section', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum',
		'hero-bg' => '/wp-content/themes/metodo-zenon/images/MZ_Home_Hero_sect-bg.png'
	], $atts);

	$output =
		'
			<section class="mz-section mz-hero-section" style="background-image: url('. $attributes['hero-bg'].');">
				<div class="mz-container">
					<div class="mz-wrap">
						<h1>
							'. $attributes['title'] .'
						</h1>
					</div>
				</div>
			</section>
		'
	;

	return $output;

});

add_shortcode( 'mz-sc-zenon-method', function ( $atts, $content = null ){
	
	$attributes = shortcode_atts([
		'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
    'zenon-svg' => 
      '
        <svg viewBox="0 0 605 320" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.15">
            <path d="M208.534 0L0 319.061H90.1383L208.534 134.492L260.757 209.965L301.892 147.727L208.534 0Z" fill="url(#paint0_linear_723_166)"/>
            <path d="M417.784 149.873L468.576 70.1075L604.499 318.345H519.726L417.784 149.873Z" fill="url(#paint1_linear_723_166)"/>
            <path d="M511.142 0H211.754L254.677 66.8883H357.335L193.154 319.061H516.15L465 232.499H361.627L511.142 0Z" fill="url(#paint2_linear_723_166)"/>
          </g>
          <defs>
            <linearGradient id="paint0_linear_723_166" x1="302.249" y1="0" x2="302.249" y2="319.061" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2A2A2A"/>
              <stop offset="0.1875" stop-color="#BBBBBA"/>
              <stop offset="0.348958" stop-color="#EAE9EA"/>
              <stop offset="0.505208" stop-color="#DAD9DA"/>
              <stop offset="0.703125" stop-color="#A2A1A2"/>
              <stop offset="1" stop-color="#444343"/>
            </linearGradient>
            <linearGradient id="paint1_linear_723_166" x1="302.249" y1="0" x2="302.249" y2="319.061" gradientUnits="userSpaceOnUse">
              <stop stop-color="#2A2A2A"/>
              <stop offset="0.1875" stop-color="#BBBBBA"/>
              <stop offset="0.348958" stop-color="#EAE9EA"/>
              <stop offset="0.505208" stop-color="#DAD9DA"/>
              <stop offset="0.703125" stop-color="#A2A1A2"/>
              <stop offset="1" stop-color="#444343"/>
            </linearGradient>
            <linearGradient id="paint2_linear_723_166" x1="354.652" y1="0" x2="354.652" y2="319.061" gradientUnits="userSpaceOnUse">
              <stop stop-color="#825036"/>
              <stop offset="1" stop-color="#49230C"/>
            </linearGradient>
          </defs>
        </svg>
        <svg viewBox="0 0 605 320" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g opacity="0.1">
            <path d="M208.534 0L0 319.061H90.1383L208.534 134.492L260.757 209.965L301.892 147.727L208.534 0Z" fill="url(#paint0_linear_1221_3894)"/>
            <path d="M417.784 149.873L468.576 70.1075L604.499 318.345H519.726L417.784 149.873Z" fill="url(#paint1_linear_1221_3894)"/>
            <path d="M511.141 0H211.753L254.676 66.8883H357.334L193.153 319.061H516.149L464.999 232.499H361.626L511.141 0Z" fill="white"/>
          </g>
          <defs>
          <linearGradient id="paint0_linear_1221_3894" x1="302.249" y1="0" x2="302.249" y2="319.061" gradientUnits="userSpaceOnUse">
            <stop stop-color="#2A2A2A"/>
            <stop offset="0.1875" stop-color="#BBBBBA"/>
            <stop offset="0.348958" stop-color="#EAE9EA"/>
            <stop offset="0.505208" stop-color="#DAD9DA"/>
            <stop offset="0.703125" stop-color="#A2A1A2"/>
            <stop offset="1" stop-color="#444343"/>
          </linearGradient>
          <linearGradient id="paint1_linear_1221_3894" x1="302.249" y1="0" x2="302.249" y2="319.061" gradientUnits="userSpaceOnUse">
            <stop stop-color="#2A2A2A"/>
            <stop offset="0.1875" stop-color="#BBBBBA"/>
            <stop offset="0.348958" stop-color="#EAE9EA"/>
            <stop offset="0.505208" stop-color="#DAD9DA"/>
            <stop offset="0.703125" stop-color="#A2A1A2"/>
            <stop offset="1" stop-color="#444343"/>
          </linearGradient>
          </defs>
        </svg>
      ',
		'method-title_01' => 'Lorem Ipsum',
		'method-desc_01' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'method-icon_01' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Training_icon.png',
		'method-title_02' => 'Lorem Ipsum',
		'method-desc_02' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'method-icon_02' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Training_icon.png',
		'method-title_03' => 'Lorem Ipsum',
		'method-desc_03' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'method-icon_03' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Training_icon.png',
		'method-title_04' => 'Lorem Ipsum',
		'method-desc_04' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'method-icon_04' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Training_icon.png',
		'sub-text' => 'These four factors should support in harmony the board on which you will support your life.',
		'method-cta' => 'Metodo Zenon'
	], $atts);

	$mzCTAclass = $attributes['method-cta'];
	$mzCTAclass = strtolower($mzCTAclass);
	$mzCTAclass = str_replace(' ', '-', $mzCTAclass);

	$output =
		'
			<section class="mz-section mz-sc-zenon-method">
				<div class="mz-container">
					<h2 class="mz-title">
						'. $attributes['title'] .'
					</h2>
          <div class="mz-bg-wrap">
            <div class="mz-svg-wrap">
              '. $attributes['zenon-svg'] .'
            </div>
            <div class="mz-img-wrap">
              <img
                alt=""
                title=""
                class="mz-img girl-on-table-bg-img"
                src="/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Girl-on-Table.png"
                data-aos-delay="200" data-aos-easing="ease-out-cubic" data-aos-anchor-placement="top-bottom"
                width=""
                height=""
              />
            </div>
          </div>
					<div class="mz-row">
						<div class="mz-col --col-01">
							<div class="mz-inner-row">
								<div class="mz-inner-col --inner-col-01">
									<img
										alt=""
										title=""
										class="mz-img"
										src="'. $attributes['method-icon_01'] .'"
										width=""
										height=""
									/>
								</div>
								<div class="mz-inner-col --inner-col-02">
									<h3>
										'. $attributes['method-title_01'] .'
									</h3>
									<p class="p-01">
										'. $attributes['method-desc_01'] .'
									</p>
								</div>
							</div>
						</div>
						<div class="mz-col --col-02">
							<div class="mz-inner-row">
								<div class="mz-inner-col --inner-col-01">
									<img
										alt=""
										title=""
										class="mz-img"
										src="'. $attributes['method-icon_02'] .'"
										width=""
										height=""
									/>
								</div>
								<div class="mz-inner-col --inner-col-02">
									<h3>
										'. $attributes['method-title_02'] .'
									</h3>
									<p class="p-01">
										'. $attributes['method-desc_02'] .'
									</p>
								</div>
							</div>
						</div>
						<div class="mz-col --col-03">
							<div class="mz-inner-row">
								<div class="mz-inner-col --inner-col-01">
									<img
										alt=""
										title=""
										class="mz-img"
										src="'. $attributes['method-icon_03'] .'"
										width=""
										height=""
									/>
								</div>
								<div class="mz-inner-col --inner-col-02">
									<h3>
										'. $attributes['method-title_03'] .'
									</h3>
									<p class="p-01">
										'. $attributes['method-desc_03'] .'
									</p>
								</div>
							</div>
						</div>
						<div class="mz-col --col-04">
							<div class="mz-inner-row">
								<div class="mz-inner-col --inner-col-01">
									<img
										alt=""
										title=""
										class="mz-img"
										src="'. $attributes['method-icon_04'] .'"
										width=""
										height=""
									/>
								</div>
								<div class="mz-inner-col --inner-col-02">
									<h3>
										'. $attributes['method-title_04'] .'
									</h3>
									<p class="p-01">
										'. $attributes['method-desc_04'] .'
									</p>
								</div>
							</div>
						</div>
						<div class="mz-col --col-05">
							<p class="p-02">
								'. $attributes['sub-text'] .'
							</p>
						</div>
					</div>
					<a
						title="'. $attributes['method-cta'] .'"
						target="_blank"
						class="mz-cta mz-cta-'. $mzCTAclass .'"
						href="#"
						>
						'. $attributes['method-cta'] .'
					</a>
				</div>
			</section>
		'
	;

	return $output;

});

add_shortcode( 'mz-sc-about-zenon-carousel', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'slideCount' => '5',
		'slide-nav_01' => 'Z',
		'slide-content_01' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
		'slide-nav_02' => 'E',
		'slide-content_02' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
		'slide-nav_03' => 'N',
		'slide-content_03' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
		'slide-nav_04' => 'O',
		'slide-content_04' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
		'slide-nav_05' => 'N',
		'slide-content_05' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
	], $atts);

  $output =
    '
      <section class="mz-section mz-sc-about-zenon-carousel">
        <div class="mz-container">
          <div class="mz-carousel-navs">
            <div class="mz-carousel-item mz-carousel-nav-item">
              '. $attributes['slide-nav_01'] .'
            </div>
            <div class="mz-carousel-item mz-carousel-nav-item">
              '. $attributes['slide-nav_02'] .'
            </div>
            <div class="mz-carousel-item mz-carousel-nav-item">
              '. $attributes['slide-nav_03'] .'
            </div>
            <div class="mz-carousel-item mz-carousel-nav-item">
              '. $attributes['slide-nav_04'] .'
            </div>
            <div class="mz-carousel-item mz-carousel-nav-item">
              '. $attributes['slide-nav_05'] .'
            </div>
          </div>
          <div class="mz-carousel-slides">
            <div class="mz-row">
              <div class="mz-carousel-item mz-carousel-slides-item">
                <p class="p-01">
                  '. $attributes['slide-content_01'] .'
                </p>
              </div>
              <div class="mz-carousel-item mz-carousel-slides-item">
                <p class="p-01">
                  '. $attributes['slide-content_02'] .'
                </p>
              </div>
              <div class="mz-carousel-item mz-carousel-slides-item">
                <p class="p-01">
                  '. $attributes['slide-content_03'] .'
                </p>
              </div>
              <div class="mz-carousel-item mz-carousel-slides-item">
                <p class="p-01">
                  '. $attributes['slide-content_04'] .'
                </p>
              </div>
              <div class="mz-carousel-item mz-carousel-slides-item">
                <p class="p-01">
                  '. $attributes['slide-content_05'] .'
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    '
  ;

	return $output;

});

add_shortcode( 'mz-sc-carousel', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum',
		'subtitle' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
		'carousel-autoplay' => 'false',
		'carousel-current-slide' => '',
    'carousel-total-slide'   => '5',
		'carousel-cell-img_01'   => '/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_Coach-Anna.png',
		'carousel-cell-title_01' => 'Coach Anna',
		'carousel-cell-desc_01'  => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam.',
		'carousel-cell-img_02'   => '/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_Coach-Anna.png',
		'carousel-cell-title_02' => 'Coach Anna',
		'carousel-cell-desc_02'  => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam.',
		'carousel-cell-img_03'   => '/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_Coach-Anna.png',
		'carousel-cell-title_03' => 'Coach Anna',
		'carousel-cell-desc_03'  => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam.',
		'carousel-cell-img_04'   => '/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_Coach-Anna.png',
		'carousel-cell-title_04' => 'Coach Anna',
		'carousel-cell-desc_04'  => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam.',
		'carousel-cell-img_05'   => '/wp-content/themes/metodo-zenon/images/mz-zenon-family-section/carousel-cell/MZ_Coach-Anna.png',
		'carousel-cell-title_05' => 'Coach Anna',
		'carousel-cell-desc_05'  => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam.'
	], $atts);

	$output =
		'
			<section class="mz-section mz-sc-carousel">
				<div class="mz-container">
					<h3>
						'. $attributes['title'] .'
					</h3>
					<h2>
						'. $attributes['subtitle'] .'
					</h2>
				  <div class="mz-carousel-main" data-carousel-autoplay="'. $attributes['carousel-autoplay'] .'">
		'
  ;

	for( $i = 1; $i <= $attributes['carousel-total-slide']; $i++ ){
		$carouselCellImg = 'carousel-cell-img_0'.$i;
		$carouselCellTitle = 'carousel-cell-title_0'.$i;
		$carouselCellDesc = 'carousel-cell-desc_0'.$i;
		$output .=
			'
				<div class="mz-carousel-cell">
					<div class="mz-carousel-cell-img">
						<img
							alt=""
							title=""
							class="mz-img"
							src="'. $attributes[$carouselCellImg] .'"
							width=""
							height=""
						/>
					</div>
					<div class="mz-carousel-cell-title">
						'. $attributes[$carouselCellTitle] .'
					</div>
					<div class="mz-carousel-cell-desc">
						'. $attributes[$carouselCellDesc] .'
					</div>
				</div>
			'
    ;
	}

	$output .=
		'
          </div>
				</div>
			</section>
		'
  ;

	return $output;

});

function getTestimonialRating ($testimonialRating){

	$testimonialRatingStar = '';

	for( $a = 1; $a <= 5; $a++ ){
		if( $a <= $testimonialRating ){
			$testimonialRatingStar .= '<li><i class="fa fa-star active"></i></li>';
		} else {
			$testimonialRatingStar .= '<li><i class="fa fa-star"></i></li>';
		}
	}

	return $testimonialRatingStar;

}

add_shortcode( 'mz-sc-programs-carousel', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'carousel-autoplay' => 'false',
		'carousel-current-slide' => '1',
		'carousel-total-slide' => '5',
		'program-title_01' => 'I want to maximize my sports performance',
		'program-title_02' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit',
		'program-title_03' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit',
		'program-title_04' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit',
		'program-title_05' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit',
	], $atts);

	for( $i = 1; $i <= $attributes['carousel-total-slide']; $i++ ){
		$programTitle = $attributes['program-title_0'.$i];
		$testimonialImg = 'testimonial-img_0'.$i;
		$output =
			'
			<section class="mz-section mz-sc-programs-carousel">
				<div class="mz-carousel" id="featured-programs">
					<div class="program-item slide">
						<div class="program-summary card">
							<div class="program-info">
								<h6 class="program-topic webdesign"> 01 </h6>
								<h5 class="program-title"> 
								'. $attributes['program-title_0'.$i] .'
								</h5>
								<hr>
								<div class="program-meta">
									LEARN MORE
								</div>
							</div>
						</div> 
					</div>
				</div>
			</section>
			'
		;
	}


	return $output;

});

add_shortcode( 'mz-sc-programs-features', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'title' => 'Sports',
		'subtitle' => 'I want to maximize my sports performance',
		'description' => 'Eos tota dicunt democritum no. Has natum gubergren ne. soleat sadipscing cu.',
		'icon' => '/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Trainings_icon.png',
		'subsubTitle' => 'Training',
		'subDescription' => 'Lorem ipsum dolor sit amet, consec tetur adipiscing elit',
		'photo' => '/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_For_You.png',
		'overlapTitle' => 'Elite',
		'overlapSubTitle' => 'Program For You',
		'cardTitle' => 'Elite Program',
		'cardDescription' => 'Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way. Objective to gain strength and muscle at levels above the population average.
		<br/><br/> Focused on people with experience in training, with an acceptable-good physical condition who want to increase their performance in a more specific way.',
		'total-programs' => '3',
		'program-title_01' => 'Program 1',
		'program-curriculum_01' => 'Physio Curriculum 1',
		'program-title_02' => 'Program 2',
		'program-curriculum_02' => 'Physio Curriculum 2',
		'program-title_03' => 'Program 3',
		'program-curriculum_03' => 'Physio Curriculum 3',
		'program-detail-title_01' => 'Competitive Advantages',
		'program-detail-description_01' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget.',
		'program-detail-title_02' => 'Program Features',
		'program-detail-description_02' => 'Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Sed ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.',
		'total-checklist' => '6',
		'check_icon' => '/wp-content/themes/metodo-zenon/images/mz-zenon-programs-section/MZ_Zenon-Programs_Check_icon.png',
		'checklist_01' => 'Relieve pain',
		'checklist_02' => 'Improve movement or ability',
		'checklist_03' => 'Prevent or recover from a sports injury',
		'checklist_04' => 'Prevent disability or surgery',
		'checklist_05' => 'Rehab after a stroke, accident, injury, or surgery',
		'checklist_06' => 'Work on balance to prevent a slip or fall'
	], $atts);

	$output =
		'
		<section class="mz-section mz-sc-programs-features">
				<div class="mz-flex-section-01">
					<div class="mz-container">
						<div class="mz-row">
							<div class="mz-col col-01">
								<h3>
									'. $attributes['title'] .'
								</h3>
								<h2>
									'. $attributes['subtitle'] .'
								</h2>
								<p>
									'. $attributes['description'] .'
								</p>
								<div class="mz-flex">
									<img src="'. $attributes['icon'] .'">
									<div class="mz-flex-row">
										<h6>
										'. $attributes['subsubTitle'] .'
										</h6>
										<p>
										'. $attributes['subDescription'] .'
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mz-section">
						<img src="'. $attributes['photo'] .'">
					</div>
					<div class="mz-overlap">
						<div class="mz-row">
							<div class="mz-col col-01">
								<h1>
									'. $attributes['overlapTitle'] .'
								</h1>
								<h3>
									'. $attributes['overlapSubTitle'] .'
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="mz-flex-section-02">
					<div class="mz-container-card">
						<div class="mz-card-title">
							<h3>
								'. $attributes['cardTitle'] .'
							</h3>
						</div>
						<div class="mz-card-body">
							<p>
								'. $attributes['cardDescription'] .'
							</p>
							<div class="mz-program-curriculum">
								<ul>
		'
	;

	for( $i = 1; $i <= $attributes['total-programs']; $i++ ){
		$programTitle = $attributes['program-title_0'.$i];
		$programCurriculum = $attributes['program-curriculum_0'.$i];
		$output .=
			'
									<li> 
										<div class="mz-title">
											'. $programTitle .'
										</div>
										<div class="line"></div>
										<div class="mz-curriculum">
										'. $programCurriculum .'
										</div>
									</li>
			'
		;
	}

	$output .=
		'
								</ul>
							</div>
						</div>
					</div>
					<div class="mz-details">
						<div class="mz-row-01">
							<h6>
								'. $attributes['program-detail-title_01'] .'
							</h6>
							<p>
								'. $attributes['program-detail-description_01'] .'
							</p>
						</div>
						<div class="mz-row-02">
							<h6>
								'. $attributes['program-detail-title_02'] .'
							</h6>
							<p>
								'. $attributes['program-detail-description_02'] .'
							</p>
						</div>
						<div class="mz-checklist">
							<ul>
		'
		;

	for( $i = 1; $i <= $attributes['total-checklist']; $i++ ){
		$programChecklist = $attributes['checklist_0'.$i];
		$output .=
			'	
								<li>
								<img src="'. $attributes['check_icon'] .'">
								'. $programChecklist .'
								</li>
			'
		;
	}

	$output .=
		'	
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
			</section>
		'
	;

	return $output;

});

add_shortcode( 'mz-sc-testimonials-carousel', function ( $atts, $conent = null ){

	$attributes = shortcode_atts([
		'background' => '#FFFFFF',
		'title' => 'Testimonials',
		'subtitle' => 'People who have already got their change',
		'carousel-autoplay' => 'false',
		'carousel-total-slide' => '5',
		'carousel-current-slide' => '1',
		'testimonial-rating_01' => '5',
		'testimonial-img_01' => '',
		'testimonial-name_01' => 'John Doe',
		'testimonial-quote_01' => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi.',
		'testimonial-rating_02' => '4',
		'testimonial-img_02' => '',
		'testimonial-name_02' => 'John Doe',
		'testimonial-quote_02' => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi.',
		'testimonial-rating_03' => '3',
		'testimonial-img_03' => '',
		'testimonial-name_03' => 'John Doe',
		'testimonial-quote_03' => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi.',
		'testimonial-rating_04' => '2',
		'testimonial-img_04' => '',
		'testimonial-name_04' => 'John Doe',
		'testimonial-quote_04' => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi.',	
		'testimonial-rating_05' => '1',
		'testimonial-img_05' => '',
		'testimonial-name_05' => 'John Doe',
		'testimonial-quote_05' => 'Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi.'
	], $atts);

	$output =
		'
			<section class="mz-section mz-sc-testimonials-carousel" style="background: '.$attributes['background'].';">
				<div class="mz-container">
					<div class="mz-row">
						<div class="mz-col col-01">
							<h3>
								'. $attributes['title'] .'
							</h3>
							<h2>
								'. $attributes['subtitle'] .'
							</h2>
						</div>
						<div class="mz-col col-02">
							<div class="mz-carousel-main" data-current-slide="'. $attributes['carousel-current-slide'] .'" data-carousel-autoplay="'. $attributes['carousel-autoplay'] .'">
		'
	;

	for( $i = 1; $i <= $attributes['carousel-total-slide']; $i++ ){
		$testimonialRating = $attributes['testimonial-rating_0'.$i];
		$testimonialRatingStar = getTestimonialRating($testimonialRating);
		$testimonialImg = 'testimonial-img_0'.$i;
		$testimonialName = 'testimonial-name_0'.$i;
		$testimonialQuote = 'testimonial-quote_0'.$i;
		$output .=
			'
				<div class="mz-carousel-cell">
					<div class="mz-inner-row">
						<div class="mz-inner-col col-01">
							<img
								alt=""
								title=""
								class="mz-img testimony-profile-img"
								src="'. $attributes[$testimonialImg] .'"
								width=""
								height=""
							/>
						</div>
						<div class="mz-inner-col col-02">
							<p class="testimony-name">
								'. $attributes[$testimonialName] .'
							</p>
							<ul>
								'. $testimonialRatingStar .'
							</ul>
						</div>
					</div>
					<p class="testimony-quotes">
						'. $attributes[$testimonialQuote] .' 
					</p>
				</div>
			'
		;
	}

	$output .=
		'
							</div>
						</div>
						<div class="mz-col col-03">
							<div class="mz-carousel-slide-count">
								<span class="mz-carousel-counter-slide"></span>/<span class="mz-carousel-total-slide">0'. $attributes['carousel-total-slide'] .'</span>
							</div>
							<div class="mz-carousel-btn-wrap">
								<button class="mz-carousel-btn mz-carousel-prev-btn">
									<svg width="35" height="14" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.27094 2L3.00062 7.2703L8.27094 12.5406M3.6339 7.2708H34.9492" stroke="white" stroke-width="3"/>
									</svg>
								</button>
								<button class="mz-carousel-btn mz-carousel-next-btn">
									<svg width="35" height="14" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M26.6783 2L31.9486 7.2703L26.6783 12.5406M31.3153 7.2708H0" stroke="white" stroke-width="3"/>
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		'
	;

	return $output;

});

add_shortcode( 'mz-sc-recent-articles', function ( $atts, $conent = null ){

	$attributes = shortcode_atts([
    
	], $atts);

	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );

	$output =
		'
			<section class="mz-section mz-sc-recent-articles">
				<div class="mz-container">
					<div class="mz-row mz-title-row">
						<h2>
							Últimos artículos
						</h2>
						<a
							title="Más contenido"
							target=""
							class="mz-cta mz-cta-more-articles"
							href=""
							rel=""
							>
							Más contenido
						</a>
					</div>
					<div class="mz-row mz-recent-articles-row">
		'
  ;

	foreach( $recent_posts as $recent ){

    $recentArticleFeatureImg = '';
    if( has_post_thumbnail( $recent['ID'] )){
      $recentArticleFeatureImg = wp_get_attachment_url( get_post_thumbnail_id( $recent['ID'] ) );
    } else {
      $recentArticleFeatureImg = '/wp-content/themes/metodo-zenon/images/MZ_Blog_Temp_Article_Featured_img-320x215.png';
    }

		$output .=
			'
				<div class="mz-col mz-recent-articles-col-'. $recent['ID'] .'" id="article-'. $recent['ID'] .'">
					<div class="mz-recent-article-img-wrap">
						<img
							alt=""
							title=""
							class="mz-img mz-recent-article-img"
							src="'. $recentArticleFeatureImg .'"
							width=""
							height=""
						/>
					</div>
					<div class="mz-recent-article-details-wrap">
						<h3 class="mz-recent-article-title">
							'. $recent["post_title"] .'
						</h3>
						<p class="mz-recent-article-excerpt">
							'. get_the_excerpt($recent["ID"]) .'
						</p>
						<div class="mz-inner-row">
							<div class="mz-recent-article-released-date">
								'. date('M j, Y', strtotime($recent['post_date'])) .'
							</div>
							<a
								title=""
								target=""
								class="mz-a-link mz-link-more-info"
								href="'. get_permalink($recent['ID']) .'"
								rel=""
								>
								<span>Leer</span>
                <span>
                  <svg width="35" height="13" viewBox="0 0 35 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.9048 1.3457L32.1752 6.616L26.9048 11.8863M31.5419 6.6165H0.226562" stroke="#6F4A37" stroke-width="3"/>
                  </svg>
                </span>
							</a>
						</div>
					</div>
				</div>
			'
    ;
	}

	$output .=
		'
					</div>
				</div>
			</section>
		'
  ;

	return $output;

});

add_shortcode( 'mz-sc-blog-post-listing', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
    
	], $atts);

	$output;

	$categories = get_categories(
		array(
			'orderby'    => 'count',
			'order'      => 'DESC',
			'show_count' => '1',
			'title_li'   => '',
			'number'     => 4,
		)
	);

	$output .=
		'
			<section class="mz-section mz-sc-blog-post-listing">
				<div class="mz-container">
					<div class="mz-row mz-top-bar-row">
						<ul class="mz-category-tab-filter-list">
							<li class="mz-category-tab-filter-item --active-item"><span>All</span></li>
		'
	;

	foreach( $categories as $category ){
		$output .=
			'<li class="mz-category-tab-filter-item"><span>'. $category->name .'</span></li>'
		;
	}

	$output .=
		'
				</ul>
				<div class="mz-search-bar-filter">
					<input type="text" class="mz-search-bar-input" id="mzSearchBarInput" placeholder="Search">
					<svg class="mz-search-bar-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.26918 0C3.25452 0 0 3.25452 0 7.26918C0 11.2839 3.25452 14.5384 7.26918 14.5384C8.96533 14.5384 10.5251 13.9575 11.7615 12.9848L16.5232 17.7465C16.6036 17.8269 16.699 17.8906 16.804 17.9341C16.909 17.9776 17.0215 18 17.1352 18C17.2489 18 17.3614 17.9776 17.4664 17.9341C17.5714 17.8906 17.6668 17.8269 17.7472 17.7465C17.8276 17.6661 17.8913 17.5707 17.9348 17.4657C17.9783 17.3607 18.0007 17.2482 18.0007 17.1345C18.0007 17.0208 17.9783 16.9083 17.9348 16.8033C17.8913 16.6983 17.8276 16.6029 17.7472 16.5225L12.9848 11.7608C13.9935 10.4812 14.5409 8.89859 14.5384 7.26918C14.5384 3.25452 11.2839 0 7.26918 0ZM1.73076 7.26918C1.73076 5.8003 2.31427 4.39158 3.35293 3.35293C4.39158 2.31427 5.8003 1.73076 7.26918 1.73076C8.73807 1.73076 10.1468 2.31427 11.1854 3.35293C12.2241 4.39158 12.8076 5.8003 12.8076 7.26918C12.8076 8.73807 12.2241 10.1468 11.1854 11.1854C10.1468 12.2241 8.73807 12.8076 7.26918 12.8076C5.8003 12.8076 4.39158 12.2241 3.35293 11.1854C2.31427 10.1468 1.73076 8.73807 1.73076 7.26918Z" fill="#AFACB4"/>
					</svg>
				</div>
			</div>
		'
	;

	$ourCurrentPage = get_query_var('paged');
	$allPosts = new WP_Query(array(
		'posts_per_page' => 6,
		'paged'          => $ourCurrentPage
	));

	if( $allPosts->have_posts() ) :

		$output .= '<div class="mz-blog-post-list">';

		while( $allPosts->have_posts() ) :
      
			$allPosts->the_post();

			$output .=
				'
					<div
						class="mz-blog-post-item"
						id="post-'. get_the_ID() .'"
            >
				'
			;

			$categorys = get_the_category();
      $postCategorysList = '';
			$i = 1;

			foreach( $categorys as $category ){
				if( $i == count($categorys) ){
          $postCategorysList .= $category->cat_name;
				} else {
          $postCategorysList .= $category->cat_name.', ';
				}
				$i++;
			}

			$tags = get_the_tags();
      $postTagsList = '';
			$j = 1;

      if( is_array($tags) || is_object($tags) ){
        foreach( $tags as $tag ){
          if( $j == count($tags) ){
            $postTagsList .= $tag->name;
          } else {
            $postTagsList .= $tag->name.', ';
          }
          $j++;
        }
      }

      $postImgSrc = '';
      if( has_post_thumbnail() ){
        $postImgSrc = get_the_post_thumbnail_url();
      } else {
        $postImgSrc = '/wp-content/themes/metodo-zenon/images/MZ_Blog_Temp_Article_Featured_img-320x215.png';
      }

      $postTitle = get_the_title();
      $postLink = get_the_permalink();
      $postExcerpt = get_the_excerpt();
      $postDate = get_the_date('M d, Y');

			$output .=
				'
						<div class="mz-blog-post-img-wrap">
							<a
								title="'. $postTitle .'"
								target=""
								class="mz-img-link mz-blog-post-img-link"
								href="'. $postLink .'"
								rel=""
								>
								<img
									alt="'. $postTitle .'"
									title="'. $postTitle .'"
									class="mz-img mz-blog-post-img"
									src="'. $postImgSrc .'"
									width=""
									height=""
								/>
							</a>
						</div>
						<div class="mz-blog-post-details-wrap">
							<h3 class="mz-blog-post-title">
								'. $postTitle .'
							</h3>
							<p class="mz-blog-post-excerpt">
								'. 
                  // get_the_content()
                  // get_the_excerpt()
                  $postExcerpt
                .'
							</p>
              <div class="mz-blog-post-categories">
                '. $postCategorysList .'
              </div>
              <div class="mz-blog-post-tags">
                '. $postTagsList .'
              </div>
							<div class="mz-inner-row">
								<div class="mz-blog-post-released-date">
									'. $postDate .'
								</div>
								<a
									title="'. $postTitle .'"
									target="_blank"
									class="mz-a-link mz-link-more-info"
									href="'. $postLink .'"
									rel=""
									>
									<span>More Info</span>
                  <span>
                    <svg width="35" height="13" viewBox="0 0 35 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M26.9048 1.3457L32.1752 6.616L26.9048 11.8863M31.5419 6.6165H0.226562" stroke="#6F4A37" stroke-width="3"></path>
                    </svg>
                  </span>
								</a>
							</div>
						</div>
					</div>
				'
			;

		endwhile;

		$output .=
			'
						</div>
						<div class="mz-pagination">
							'.
								paginate_links(array(
									'total' => $allPosts->max_num_pages,
									'prev_text' => '<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L5.06 7.061L10 2.122L7.878 0L0.818 7.061L7.878 14.122L10 12Z" fill="white"/></svg>',
									'next_text' => '<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.818359 12L5.75836 7.061L0.818359 2.122L2.94036 0L10.0004 7.061L2.94036 14.122L0.818359 12Z" fill="white"/></svg>'
								))
							.'
						</div>
					</div>
				</section>
			'
		;

	endif;

	return $output;

});

add_shortcode( 'mz-sc-coach-tab', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
    
	], $atts);

	$output =
		'
			<section class="mz-section mz-sc-coach-tab" data-active-tab="1">
				<div class="mz-container">
					<div class="mz-tab-btn-wrap">
						<button class="mz-tab-btn" data-tab-index="1">
							<img
								alt=""
								title=""
								class="mz-img"
								src=""
								width=""
								height=""
							/>
							<div class="coach-details">
								<span class="coach-role">
									Lorem Ipsum
								</span>
								<br />
								<span class="coach-name">
									Juan
								</span>
							</div>
						</button>
						<button class="mz-tab-btn" data-tab-index="2">
							<img
								alt=""
								title=""
								class="mz-img"
								src=""
								width=""
								height=""
							/>
							<div class="coach-details">
								<span class="coach-role">
									Lorem Ipsum
								</span>
								<br />
								<span class="coach-name">
									Juan
								</span>
							</div>
						</button>
						<button class="mz-tab-btn" data-tab-index="3">
							<img
								alt=""
								title=""
								class="mz-img"
								src=""
								width=""
								height=""
							/>
							<div class="coach-details">
								<span class="coach-role">
									Lorem Ipsum
								</span>
								<br />
								<span class="coach-name">
									Juan
								</span>
							</div>
						</button>
					</div>
					<div class="mz-tab-pane-wrap">
						<div class="mz-tab-pane pane-01">
							<div class="mz-row">
								<div class="mz-col">
									<img
										alt=""
										title=""
										class="mz-img coach-profile"
										src=""
										width=""
										height=""
									/>
									<div class="coach-details">
										<div class="coach-name">
											Pane 1
										</div>
										<div class="coach-role">
											Lorem Ipsum
										</div>
										<div class="coach-description">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</div>
										<ul class="coach-social-list">
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path d="M24 15.5517C24 10.8276 20.1956 7 15.5 7C10.8044 7 7 10.8276 7 15.5517C7 19.82 10.1083 23.3579 14.1719 24V18.0238H12.0126V15.5517H14.1719V13.6676C14.1719 11.5245 15.44 10.3407 17.3823 10.3407C18.3125 10.3407 19.2852 10.5076 19.2852 10.5076V12.611H18.2131C17.1575 12.611 16.8281 13.2703 16.8281 13.9466V15.5517H19.1855L18.8085 18.0238H16.8281V24C20.8917 23.3579 24 19.82 24 15.5517Z" fill="white"/>
													</svg>
												</a>
											</li>
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0039 11.1414C12.5913 11.1414 10.6453 13.0874 10.6453 15.5C10.6453 17.9126 12.5913 19.8586 15.0039 19.8586C17.4165 19.8586 19.3626 17.9126 19.3626 15.5C19.3626 13.0874 17.4165 11.1414 15.0039 11.1414ZM15.004 18.3336C13.4449 18.3336 12.1704 17.0628 12.1704 15.5C12.1704 13.9371 13.4411 12.6663 15.004 12.6663C16.5669 12.6663 17.8377 13.9371 17.8377 15.5C17.8377 17.0628 16.5631 18.3336 15.004 18.3336H15.004ZM20.5576 10.9632C20.5576 11.5284 20.1023 11.9798 19.5409 11.9798C18.9757 11.9798 18.5243 11.5246 18.5243 10.9632C18.5243 10.4018 18.9795 9.94655 19.5409 9.94655C20.1023 9.94655 20.5576 10.4018 20.5576 10.9632ZM23.4443 11.9949C23.3798 10.6331 23.0688 9.42681 22.0711 8.43295C21.0772 7.43908 19.8709 7.12803 18.5091 7.05975C17.1055 6.98008 12.8986 6.98008 11.495 7.05975C10.137 7.12423 8.93064 7.43529 7.93297 8.42915C6.9353 9.42302 6.62803 10.6293 6.55975 11.9911C6.48008 13.3947 6.48008 17.6015 6.55975 19.0051C6.62424 20.3669 6.9353 21.5732 7.93297 22.5671C8.93064 23.5609 10.1332 23.872 11.495 23.9403C12.8986 24.0199 17.1055 24.0199 18.5091 23.9403C19.8709 23.8758 21.0772 23.5647 22.0711 22.5671C23.065 21.5732 23.3761 20.3669 23.4443 19.0051C23.524 17.6015 23.524 13.3985 23.4443 11.9949H23.4443ZM21.631 20.5109C21.3352 21.2544 20.7623 21.8272 20.015 22.1269C18.896 22.5707 16.2406 22.4683 15.0039 22.4683C13.7673 22.4683 11.1081 22.5669 9.99281 22.1269C9.2493 21.831 8.67649 21.2582 8.37681 20.5109C7.93298 19.3919 8.0354 16.7365 8.0354 15.4999C8.0354 14.2632 7.93677 11.6041 8.37681 10.4888C8.6727 9.74534 9.24551 9.17254 9.99281 8.87286C11.1119 8.42903 13.7673 8.53146 15.0039 8.53146C16.2406 8.53146 18.8998 8.43283 20.015 8.87286C20.7586 9.16874 21.3314 9.74154 21.631 10.4888C22.0749 11.6079 21.9725 14.2632 21.9725 15.4999C21.9725 16.7365 22.0749 19.3957 21.631 20.5109Z" fill="white"/>
													</svg>
												</a>
											</li>
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path d="M22.0463 11.7383C22.0576 11.9023 22.0576 12.0664 22.0576 12.2305C22.0576 17.2344 18.3695 23 11.6287 23C9.55196 23 7.62279 22.3789 6 21.3008C6.29506 21.3359 6.57874 21.3477 6.88515 21.3477C8.59869 21.3477 10.1761 20.75 11.4358 19.7305C9.82432 19.6953 8.47389 18.6055 8.0086 17.1055C8.23559 17.1406 8.46253 17.164 8.70087 17.164C9.02995 17.164 9.35907 17.1172 9.66545 17.0352C7.98593 16.6836 6.72625 15.1601 6.72625 13.3203V13.2734C7.2142 13.5547 7.78166 13.7305 8.38306 13.7539C7.39577 13.0742 6.74896 11.914 6.74896 10.6015C6.74896 9.89842 6.93049 9.25389 7.24826 8.69139C9.05262 10.9883 11.7648 12.4882 14.8061 12.6523C14.7494 12.3711 14.7153 12.0781 14.7153 11.7852C14.7153 9.6992 16.3495 8 18.3808 8C19.4361 8 20.3894 8.45703 21.0589 9.19531C21.8873 9.03126 22.6817 8.71484 23.3853 8.28125C23.1129 9.16018 22.5342 9.89846 21.7739 10.3672C22.5115 10.2852 23.2264 10.0742 23.8846 9.78126C23.3854 10.5312 22.7612 11.1992 22.0463 11.7383V11.7383Z" fill="white"/>
													</svg>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mz-col">
									<h4 class="h4-01">
										Competitive Advantages
									</h4>
									<p class="p-01">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget. Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Sed ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
									</p>
									<ul class="coach-expertise-list">
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Health Coaching
												</h3>
												<span>
													95%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 95%;"></div>
											</div>
										</li>
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Corrective Exercise
												</h3>
												<span>
													97%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 97%;"></div>
											</div>
										</li>
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Weight Loss Transformation
												</h3>
												<span>
													90%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 90%;"></div>
											</div>
										</li>
									</ul>
									<h4 class="h4-02">
										Specialties
									</h4>
									<div class="coach-specialties-wrap">
										<div class="coach-specialites-item">
											<div class="mz-inner-row">
												<svg class="coach-specialties-icon" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0856 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
												</svg>
												<div class="coach-specialties-details">
													<span>
														Psycho Training
													</span>
													<span>
														Lorem ipsum dolor sit amet, consec tetur adipiscing elit
													</span>
												</div>
											</div>
										</div>
										<div class="coach-specialites-item">
											<div class="mz-inner-row">
												<svg class="coach-specialties-icon" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0856 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
												</svg>
												<div class="coach-specialties-details">
													<span>
														Psycho Training
													</span>
													<span>
														Lorem ipsum dolor sit amet, consec tetur adipiscing elit
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-tab-pane pane-02">
							<div class="mz-row">
								<div class="mz-col">
									<img
										alt=""
										title=""
										class="mz-img coach-profile"
										src=""
										width=""
										height=""
									/>
									<div class="coach-details">
										<div class="coach-name">
											Pane 2
										</div>
										<div class="coach-role">
											Lorem Ipsum
										</div>
										<div class="coach-description">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</div>
										<ul class="coach-social-list">
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path d="M24 15.5517C24 10.8276 20.1956 7 15.5 7C10.8044 7 7 10.8276 7 15.5517C7 19.82 10.1083 23.3579 14.1719 24V18.0238H12.0126V15.5517H14.1719V13.6676C14.1719 11.5245 15.44 10.3407 17.3823 10.3407C18.3125 10.3407 19.2852 10.5076 19.2852 10.5076V12.611H18.2131C17.1575 12.611 16.8281 13.2703 16.8281 13.9466V15.5517H19.1855L18.8085 18.0238H16.8281V24C20.8917 23.3579 24 19.82 24 15.5517Z" fill="white"/>
													</svg>
												</a>
											</li>
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0039 11.1414C12.5913 11.1414 10.6453 13.0874 10.6453 15.5C10.6453 17.9126 12.5913 19.8586 15.0039 19.8586C17.4165 19.8586 19.3626 17.9126 19.3626 15.5C19.3626 13.0874 17.4165 11.1414 15.0039 11.1414ZM15.004 18.3336C13.4449 18.3336 12.1704 17.0628 12.1704 15.5C12.1704 13.9371 13.4411 12.6663 15.004 12.6663C16.5669 12.6663 17.8377 13.9371 17.8377 15.5C17.8377 17.0628 16.5631 18.3336 15.004 18.3336H15.004ZM20.5576 10.9632C20.5576 11.5284 20.1023 11.9798 19.5409 11.9798C18.9757 11.9798 18.5243 11.5246 18.5243 10.9632C18.5243 10.4018 18.9795 9.94655 19.5409 9.94655C20.1023 9.94655 20.5576 10.4018 20.5576 10.9632ZM23.4443 11.9949C23.3798 10.6331 23.0688 9.42681 22.0711 8.43295C21.0772 7.43908 19.8709 7.12803 18.5091 7.05975C17.1055 6.98008 12.8986 6.98008 11.495 7.05975C10.137 7.12423 8.93064 7.43529 7.93297 8.42915C6.9353 9.42302 6.62803 10.6293 6.55975 11.9911C6.48008 13.3947 6.48008 17.6015 6.55975 19.0051C6.62424 20.3669 6.9353 21.5732 7.93297 22.5671C8.93064 23.5609 10.1332 23.872 11.495 23.9403C12.8986 24.0199 17.1055 24.0199 18.5091 23.9403C19.8709 23.8758 21.0772 23.5647 22.0711 22.5671C23.065 21.5732 23.3761 20.3669 23.4443 19.0051C23.524 17.6015 23.524 13.3985 23.4443 11.9949H23.4443ZM21.631 20.5109C21.3352 21.2544 20.7623 21.8272 20.015 22.1269C18.896 22.5707 16.2406 22.4683 15.0039 22.4683C13.7673 22.4683 11.1081 22.5669 9.99281 22.1269C9.2493 21.831 8.67649 21.2582 8.37681 20.5109C7.93298 19.3919 8.0354 16.7365 8.0354 15.4999C8.0354 14.2632 7.93677 11.6041 8.37681 10.4888C8.6727 9.74534 9.24551 9.17254 9.99281 8.87286C11.1119 8.42903 13.7673 8.53146 15.0039 8.53146C16.2406 8.53146 18.8998 8.43283 20.015 8.87286C20.7586 9.16874 21.3314 9.74154 21.631 10.4888C22.0749 11.6079 21.9725 14.2632 21.9725 15.4999C21.9725 16.7365 22.0749 19.3957 21.631 20.5109Z" fill="white"/>
													</svg>
												</a>
											</li>
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path d="M22.0463 11.7383C22.0576 11.9023 22.0576 12.0664 22.0576 12.2305C22.0576 17.2344 18.3695 23 11.6287 23C9.55196 23 7.62279 22.3789 6 21.3008C6.29506 21.3359 6.57874 21.3477 6.88515 21.3477C8.59869 21.3477 10.1761 20.75 11.4358 19.7305C9.82432 19.6953 8.47389 18.6055 8.0086 17.1055C8.23559 17.1406 8.46253 17.164 8.70087 17.164C9.02995 17.164 9.35907 17.1172 9.66545 17.0352C7.98593 16.6836 6.72625 15.1601 6.72625 13.3203V13.2734C7.2142 13.5547 7.78166 13.7305 8.38306 13.7539C7.39577 13.0742 6.74896 11.914 6.74896 10.6015C6.74896 9.89842 6.93049 9.25389 7.24826 8.69139C9.05262 10.9883 11.7648 12.4882 14.8061 12.6523C14.7494 12.3711 14.7153 12.0781 14.7153 11.7852C14.7153 9.6992 16.3495 8 18.3808 8C19.4361 8 20.3894 8.45703 21.0589 9.19531C21.8873 9.03126 22.6817 8.71484 23.3853 8.28125C23.1129 9.16018 22.5342 9.89846 21.7739 10.3672C22.5115 10.2852 23.2264 10.0742 23.8846 9.78126C23.3854 10.5312 22.7612 11.1992 22.0463 11.7383V11.7383Z" fill="white"/>
													</svg>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mz-col">
									<h4 class="h4-01">
										Competitive Advantages
									</h4>
									<p class="p-01">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget. Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Sed ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
									</p>
									<ul class="coach-expertise-list">
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Health Coaching
												</h3>
												<span>
													95%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 95%;"></div>
											</div>
										</li>
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Corrective Exercise
												</h3>
												<span>
													97%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 97%;"></div>
											</div>
										</li>
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Weight Loss Transformation
												</h3>
												<span>
													90%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 90%;"></div>
											</div>
										</li>
									</ul>
									<h4 class="h4-02">
										Specialties
									</h4>
									<div class="coach-specialties-wrap">
										<div class="coach-specialites-item">
											<div class="mz-inner-row">
												<svg class="coach-specialties-icon" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0856 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
												</svg>
												<div class="coach-specialties-details">
													<span>
														Psycho Training
													</span>
													<span>
														Lorem ipsum dolor sit amet, consec tetur adipiscing elit
													</span>
												</div>
											</div>
										</div>
										<div class="coach-specialites-item">
											<div class="mz-inner-row">
												<svg class="coach-specialties-icon" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0856 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
												</svg>
												<div class="coach-specialties-details">
													<span>
														Psycho Training
													</span>
													<span>
														Lorem ipsum dolor sit amet, consec tetur adipiscing elit
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mz-tab-pane pane-03">
							<div class="mz-row">
								<div class="mz-col">
									<img
										alt=""
										title=""
										class="mz-img coach-profile"
										src=""
										width=""
										height=""
									/>
									<div class="coach-details">
										<div class="coach-name">
											Pane 3
										</div>
										<div class="coach-role">
											Lorem Ipsum
										</div>
										<div class="coach-description">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</div>
										<ul class="coach-social-list">
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path d="M24 15.5517C24 10.8276 20.1956 7 15.5 7C10.8044 7 7 10.8276 7 15.5517C7 19.82 10.1083 23.3579 14.1719 24V18.0238H12.0126V15.5517H14.1719V13.6676C14.1719 11.5245 15.44 10.3407 17.3823 10.3407C18.3125 10.3407 19.2852 10.5076 19.2852 10.5076V12.611H18.2131C17.1575 12.611 16.8281 13.2703 16.8281 13.9466V15.5517H19.1855L18.8085 18.0238H16.8281V24C20.8917 23.3579 24 19.82 24 15.5517Z" fill="white"/>
													</svg>
												</a>
											</li>
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0039 11.1414C12.5913 11.1414 10.6453 13.0874 10.6453 15.5C10.6453 17.9126 12.5913 19.8586 15.0039 19.8586C17.4165 19.8586 19.3626 17.9126 19.3626 15.5C19.3626 13.0874 17.4165 11.1414 15.0039 11.1414ZM15.004 18.3336C13.4449 18.3336 12.1704 17.0628 12.1704 15.5C12.1704 13.9371 13.4411 12.6663 15.004 12.6663C16.5669 12.6663 17.8377 13.9371 17.8377 15.5C17.8377 17.0628 16.5631 18.3336 15.004 18.3336H15.004ZM20.5576 10.9632C20.5576 11.5284 20.1023 11.9798 19.5409 11.9798C18.9757 11.9798 18.5243 11.5246 18.5243 10.9632C18.5243 10.4018 18.9795 9.94655 19.5409 9.94655C20.1023 9.94655 20.5576 10.4018 20.5576 10.9632ZM23.4443 11.9949C23.3798 10.6331 23.0688 9.42681 22.0711 8.43295C21.0772 7.43908 19.8709 7.12803 18.5091 7.05975C17.1055 6.98008 12.8986 6.98008 11.495 7.05975C10.137 7.12423 8.93064 7.43529 7.93297 8.42915C6.9353 9.42302 6.62803 10.6293 6.55975 11.9911C6.48008 13.3947 6.48008 17.6015 6.55975 19.0051C6.62424 20.3669 6.9353 21.5732 7.93297 22.5671C8.93064 23.5609 10.1332 23.872 11.495 23.9403C12.8986 24.0199 17.1055 24.0199 18.5091 23.9403C19.8709 23.8758 21.0772 23.5647 22.0711 22.5671C23.065 21.5732 23.3761 20.3669 23.4443 19.0051C23.524 17.6015 23.524 13.3985 23.4443 11.9949H23.4443ZM21.631 20.5109C21.3352 21.2544 20.7623 21.8272 20.015 22.1269C18.896 22.5707 16.2406 22.4683 15.0039 22.4683C13.7673 22.4683 11.1081 22.5669 9.99281 22.1269C9.2493 21.831 8.67649 21.2582 8.37681 20.5109C7.93298 19.3919 8.0354 16.7365 8.0354 15.4999C8.0354 14.2632 7.93677 11.6041 8.37681 10.4888C8.6727 9.74534 9.24551 9.17254 9.99281 8.87286C11.1119 8.42903 13.7673 8.53146 15.0039 8.53146C16.2406 8.53146 18.8998 8.43283 20.015 8.87286C20.7586 9.16874 21.3314 9.74154 21.631 10.4888C22.0749 11.6079 21.9725 14.2632 21.9725 15.4999C21.9725 16.7365 22.0749 19.3957 21.631 20.5109Z" fill="white"/>
													</svg>
												</a>
											</li>
											<li class="coach-social-item">
												<a
													title=""
													target=""
													class="mz-a-link coach-social-link"
													href=""
													rel=""
													>
													<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect width="30" height="30" fill="#6F4A37"/>
														<path d="M22.0463 11.7383C22.0576 11.9023 22.0576 12.0664 22.0576 12.2305C22.0576 17.2344 18.3695 23 11.6287 23C9.55196 23 7.62279 22.3789 6 21.3008C6.29506 21.3359 6.57874 21.3477 6.88515 21.3477C8.59869 21.3477 10.1761 20.75 11.4358 19.7305C9.82432 19.6953 8.47389 18.6055 8.0086 17.1055C8.23559 17.1406 8.46253 17.164 8.70087 17.164C9.02995 17.164 9.35907 17.1172 9.66545 17.0352C7.98593 16.6836 6.72625 15.1601 6.72625 13.3203V13.2734C7.2142 13.5547 7.78166 13.7305 8.38306 13.7539C7.39577 13.0742 6.74896 11.914 6.74896 10.6015C6.74896 9.89842 6.93049 9.25389 7.24826 8.69139C9.05262 10.9883 11.7648 12.4882 14.8061 12.6523C14.7494 12.3711 14.7153 12.0781 14.7153 11.7852C14.7153 9.6992 16.3495 8 18.3808 8C19.4361 8 20.3894 8.45703 21.0589 9.19531C21.8873 9.03126 22.6817 8.71484 23.3853 8.28125C23.1129 9.16018 22.5342 9.89846 21.7739 10.3672C22.5115 10.2852 23.2264 10.0742 23.8846 9.78126C23.3854 10.5312 22.7612 11.1992 22.0463 11.7383V11.7383Z" fill="white"/>
													</svg>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="mz-col">
									<h4 class="h4-01">
										Competitive Advantages
									</h4>
									<p class="p-01">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu ac tortor dignissim convallis aenean. Mattis nunc sed blandit libero. Feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed id semper risus in. Varius vel pharetra vel turpis nunc eget. Ut etiam sit amet nisl purus. Imperdiet proin fermentum leo vel orci porta non. Integer feugiat scelerisque varius morbi enim. Sed ullamcorper morbi tincidunt ornare. Habitant morbi tristique senectus et netus et malesuada fames ac.
									</p>
									<ul class="coach-expertise-list">
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Health Coaching
												</h3>
												<span>
													95%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 95%;"></div>
											</div>
										</li>
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Corrective Exercise
												</h3>
												<span>
													97%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 97%;"></div>
											</div>
										</li>
										<li class="coach-expertise-item">
											<div class="coach-experise-name">
												<h3>
													Weight Loss Transformation
												</h3>
												<span>
													90%
												</span>
											</div>
											<div class="progress-bar">
												<div class="progress-level" style="width: 90%;"></div>
											</div>
										</li>
									</ul>
									<h4 class="h4-02">
										Specialties
									</h4>
									<div class="coach-specialties-wrap">
										<div class="coach-specialites-item">
											<div class="mz-inner-row">
												<svg class="coach-specialties-icon" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0856 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
												</svg>
												<div class="coach-specialties-details">
													<span>
														Psycho Training
													</span>
													<span>
														Lorem ipsum dolor sit amet, consec tetur adipiscing elit
													</span>
												</div>
											</div>
										</div>
										<div class="coach-specialites-item">
											<div class="mz-inner-row">
												<svg class="coach-specialties-icon" width="54" height="49" viewBox="0 0 54 49" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M47.5246 4.74194C47.5246 7.36084 45.4016 9.48387 42.7827 9.48387C40.1638 9.48387 38.0407 7.36084 38.0407 4.74194C38.0407 2.12304 40.1638 0 42.7827 0C45.4016 0 47.5246 2.12304 47.5246 4.74194ZM25.5315 3.29723C26.5967 2.23219 28.2637 2.06696 29.5202 2.90207L35.3612 6.94589C34.6949 7.25896 34.0856 7.65992 33.5691 8.17647L30.4809 11.2646L28.1696 9.59969L21.3083 16.461C20.0734 17.6959 18.0729 17.696 16.838 16.4611C15.6031 15.2262 15.6031 13.2257 16.838 11.9908L25.5315 3.29723ZM12.7506 4.74185H4.74196C3.86828 4.74185 3.16131 5.44882 3.16131 6.3225C3.16131 7.19617 3.86828 7.90314 4.74196 7.90314H12.7506C13.6242 7.90314 14.3312 7.19617 14.3312 6.3225C14.3312 5.44882 13.6242 4.74185 12.7506 4.74185ZM12.7506 17.387H4.74196C3.86828 17.387 3.16131 18.094 3.16131 18.9676C3.16131 19.8413 3.86828 20.5483 4.74196 20.5483H12.7506C13.6242 20.5483 14.3312 19.8413 14.3312 18.9676C14.3312 18.094 13.6242 17.387 12.7506 17.387ZM1.58065 11.0644H9.58925C10.4629 11.0644 11.1699 11.7713 11.1699 12.645C11.1699 13.5187 10.4629 14.2256 9.58925 14.2256H1.58065C0.70697 14.2256 0 13.5187 0 12.645C0 11.7713 0.70697 11.0644 1.58065 11.0644ZM50.7914 18.9677H41.2022V12.6452C41.2022 9.86892 37.806 8.40714 35.8048 10.411L23.1606 23.0552C21.9257 24.2901 21.9257 26.2906 23.1606 27.5255L30.4093 34.7742L21.5799 43.6036C20.345 44.8385 20.345 46.839 21.5799 48.0739C22.8147 49.3087 24.8153 49.3088 26.0502 48.0739L37.1147 37.0093C38.3496 35.7744 38.3496 33.774 37.1147 32.5391L29.866 25.2903L34.8796 20.2767V22.129C34.8796 23.8748 36.2951 25.2903 38.0409 25.2903H50.7914C52.5372 25.2903 53.9527 23.8748 53.9527 22.129C53.9527 20.3833 52.5372 18.9677 50.7914 18.9677ZM20.9254 29.7603C20.1244 28.9593 19.5897 27.9735 19.3078 26.9075L2.61211 43.6033C1.3772 44.8382 1.3772 46.8386 2.61211 48.0735C3.84691 49.3083 5.84748 49.3084 7.08238 48.0735L23.1605 31.9954L20.9254 29.7603Z" fill="#6F4A37"/>
												</svg>
												<div class="coach-specialties-details">
													<span>
														Psycho Training
													</span>
													<span>
														Lorem ipsum dolor sit amet, consec tetur adipiscing elit
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		'
	;

	return $output;

});

add_shortcode( 'mz-sc-cta', function ( $atts, $content = null ){

  $attributes = shortcode_atts([
    'title'     => 'Metodo Zenon',
    'target'    => '_blank',
    'class'     => '',
    'href'      => '/',
    'rel'       => 'noopener',
    'cta-icon'  => '<svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.92308 8L0 0H9.84615L4.92308 8Z" fill="#B0B0B0"></path></svg>',
    'style'     => 'background-color: transparent;'
  ], $atts);

  $titleToLowerCase = strtolower($attributes['title']);
  $titleToLowerCase = str_replace(" ", "-", $titleToLowerCase);

  $output =
    '
      <a
        title="'. $attributes['title'] .'"
        target="'. $attributes['target'] .'"
        class="mz-cta mz-cta_'.$titleToLowerCase.'"
        href="'. $attributes['href'] .'"
        rel="'. $attributes['rel'] .'"
        style="'. $attributes['style'] .'"
        >
        <span>'. $attributes['title'] .'</span>
        '. $attributes['cta-icon'] .'
      </a>
    '
  ;

  return $output;

});