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

	/**
	 * 
	 * Add Custom Post Type
	 * 
	 **/
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name'          => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
				'menu_name'     => __( 'Testimonials' ),
				'add_new'       => __( 'Add Testimonial' ),
				'add_new_item'  => __( 'Add New Testimonial' ),
				'new_item'      => __( 'New Testimonial' ),
				'edit_item'     => __( 'Edit Testimonail' ),
				'view_item'     => __( 'View Testimonial' ),
				'update_item'   => __( 'Update Testimonial' ),
				'all_items'     => __( 'All Testimonials' ),
				'search_items'  => __( 'Search Testimonials' )
			),
			'public'              => true,
			'has_archive'         => true,
			'rewrite' => array(
				'slug'        => 'testimonials',
				'with_front'  => false
			),
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_menu'        => true,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-video-alt3',
			'menu_position'       => 10,
			'capability_type'     => 'post',
			'can_export'          => true,
			'supports' => array(
				'title',
				'editor',
				// 'excerpt',
				// 'author',
				'category',
				'custom-fields',
				'thumbnail',
				// 'trackbacks',
				'revisions',
				'page-attributes',
				'post-formats',
			),
		)
	);

	register_taxonomy( 'testimonials_tag', 'testimonials',
		array(
			'label'        => 'Testimonial Tag',
			'hierarchical' => false,
			'query_var'    => true,
			'show_in_rest' => true,
			'show_ui'      => true,
			'rewrite' => array(
				'slug'       => 'testimonials',
				'with_front' => false
			),
		)
	);

	register_post_type( 'services',
		array(
			'labels' => array(
				'name'          => __( 'Services' ),
				'singular_name' => __( 'Service' ),
				'menu_name'     => __( 'Services' ),
				'add_new'       => __( 'Add Service' ),
				'add_new_item'  => __( 'Add New Service' ),
				'new_item'      => __( 'New Service' ),
				'edit_item'     => __( 'Edit Service' ),
				'view_item'     => __( 'View Service' ),
				'update_item'   => __( 'Update Service' ),
				'all_items'     => __( 'All Services' ),
				'search_items'  => __( 'Search Services' )
			),
			'public'              => true,
			'has_archive'         => true,
			'rewrite' => array(
				'slug'        => 'service',
				'with_front'  => false
			),
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_menu'        => true,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-admin-generic',
			'menu_position'       => 11,
			'capability_type'     => 'page',
			'can_export'          => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				// 'author',
				// 'category',
				'custom-fields',
				'thumbnail',
				// 'trackbacks',
				'revisions',
				'page-attributes',
				'post-formats',
			),
		)
	);

	register_post_type( 'coaches',
		array(
			'labels' => array(
				'name'          => __( 'Coaches' ),
				'singular_name' => __( 'Coach' ),
				'menu_name'     => __( 'Coaches' ),
				'add_new'       => __( 'Add Coach' ),
				'add_new_item'  => __( 'Add New Coach' ),
				'new_item'      => __( 'New Coach' ),
				'edit_item'     => __( 'Edit Coach' ),
				'view_item'     => __( 'View Coach' ),
				'update_item'   => __( 'Update Coach' ),
				'all_items'     => __( 'All Coaches' ),
				'search_items'  => __( 'Search Coaches' )
			),
			'public'              => true,
			'has_archive'         => true,
			'rewrite' => array(
				'slug'        => 'coach',
				'with_front'  => false
			),
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_menu'        => true,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-groups',
			'menu_position'       => 12,
			'capability_type'     => 'page',
			'can_export'          => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				// 'author',
				// 'category',
				'custom-fields',
				'thumbnail',
				// 'trackbacks',
				'revisions',
				'page-attributes',
				'post-formats',
			),
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

function custom_pre_get_posts($query){
	if( $query->is_main_query() && !$query->is_feed() && !is_admin() && is_category() ){
		$query->set('page_val', get_query_var('paged'));
		$query->set('paged', 0);
	}
}

add_action('pre_get_posts', 'custom_pre_get_posts');

add_shortcode( 'mz-sc-section--hero', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum',
		'hero-bg' => '/wp-content/themes/metodo-zenon/images/MZ_Home_Hero_sect-bg-v01-1440x718.png'
	], $atts);

	$output =
		'
			<section class="mz-section mz-sc-section--hero"
				style="background-image: url('. $attributes['hero-bg'].');">
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

add_shortcode( 'mz-sc-section--zenon-method', function ( $atts, $content = null ){
	
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
		'method-icon_02' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Nutrition_icon.png',
		'method-title_03' => 'Lorem Ipsum',
		'method-desc_03' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'method-icon_03' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Psychological-Health-and-Habits_icon.png',
		'method-title_04' => 'Lorem Ipsum',
		'method-desc_04' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
		'method-icon_04' => '/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Physiotherapy_icon.png',
		'sub-text' => 'These four factors should support in harmony the board on which you will support your life.',
		'method-cta' => 'Metodo Zenon'
	], $atts);
	
	$mzCTAclass = str_replace(' ', '-', strtolower( $attributes['method-cta'] ) );

	$output =
		'
			<section class="mz-section mz-sc-section--zenon-method">
				<div class="mz-ds-view">
					<div class="mz-container">
						<h2 class="mz-title">
							'. $attributes['title'] .'
						</h2>
						<div class="mz-bg-wrap">
							<div class="mz-svg-wrap">
								'. $attributes['zenon-svg'] .'
							</div>
							<div class="mz-img-wrap">
								<img class="mz-img girl-on-table-bg-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Girl-on-Table.png"
									width=""
									height=""/>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_01'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_01'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_01'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_02'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_02'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_02'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_03'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_03'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_03'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_04'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_04'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_04'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<p class="p-02">
									'. $attributes['sub-text'] .'
								</p>
							</div>
						</div>
						<a class="mz-cta mz-cta-'. $mzCTAclass .'"
							title="'. $attributes['method-cta'] .'"
							target=""
							href="/contact-us">
							'. $attributes['method-cta'] .'
						</a>
					</div>
				</div>
				<div class="mz-tb-view">
					<div class="mz-container">
						<h2 class="mz-title">
							'. $attributes['title'] .'
						</h2>
						<div class="mz-bg-wrap">
							<div class="mz-svg-wrap">
								'. $attributes['zenon-svg'] .'
							</div>
							<div class="mz-img-wrap">
								<img class="mz-img girl-on-table-bg-img"
									alt=""
									title=""
									src="/wp-content/themes/metodo-zenon/images/mz-zenon-method-section/MZ_Zenon-Method_Girl-on-Table.png"
									width=""
									height=""/>
							</div>
						</div>
						<div class="mz-row">
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_01'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_01'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_01'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_02'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_02'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_02'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_03'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_03'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_03'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<div class="mz-inner-row">
									<div class="mz-inner-col">
										<img class="mz-img"
											alt=""
											title=""
											src="'. $attributes['method-icon_04'] .'"
											width=""
											height=""/>
									</div>
									<div class="mz-inner-col">
										<h3>
											'. $attributes['method-title_04'] .'
										</h3>
										<p class="p-01">
											'. $attributes['method-desc_04'] .'
										</p>
									</div>
								</div>
							</div>
							<div class="mz-col">
								<p class="p-02">
									'. $attributes['sub-text'] .'
								</p>
							</div>
						</div>
						<a class="mz-cta mz-cta-'. $mzCTAclass .'"
							title="'. $attributes['method-cta'] .'"
							target="_blank"
							href="#">
							'. $attributes['method-cta'] .'
						</a>
					</div>
				</div>
			</section>
		'
	;

	return $output;

});

// add_shortcode( 'mz-sc-section--about-zenon-carousel', function ( $atts, $content = null ){

// 	$attributes = shortcode_atts([
// 		'slideCount' => '5',
// 		'slide-nav_01' => 'Z',
// 		'slide-content_01' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
// 		'slide-nav_02' => 'E',
// 		'slide-content_02' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
// 		'slide-nav_03' => 'N',
// 		'slide-content_03' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
// 		'slide-nav_04' => 'O',
// 		'slide-content_04' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
// 		'slide-nav_05' => 'N',
// 		'slide-content_05' => '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
// 	], $atts);

//   $output =
//     '
//       <section class="mz-section mz-sc-section--about-zenon-carousel">
//         <div class="mz-container">
//           <div class="mz-carousel-navs">
//             <div class="mz-carousel-item mz-carousel-nav-item">
//               '. $attributes['slide-nav_01'] .'
//             </div>
//             <div class="mz-carousel-item mz-carousel-nav-item">
//               '. $attributes['slide-nav_02'] .'
//             </div>
//             <div class="mz-carousel-item mz-carousel-nav-item">
//               '. $attributes['slide-nav_03'] .'
//             </div>
//             <div class="mz-carousel-item mz-carousel-nav-item">
//               '. $attributes['slide-nav_04'] .'
//             </div>
//             <div class="mz-carousel-item mz-carousel-nav-item">
//               '. $attributes['slide-nav_05'] .'
//             </div>
//           </div>
//           <div class="mz-carousel-slides">
//             <div class="mz-row">
//               <div class="mz-carousel-item mz-carousel-slides-item">
//                 <p class="p-01">
//                   '. $attributes['slide-content_01'] .'
//                 </p>
//               </div>
//               <div class="mz-carousel-item mz-carousel-slides-item">
//                 <p class="p-01">
//                   '. $attributes['slide-content_02'] .'
//                 </p>
//               </div>
//               <div class="mz-carousel-item mz-carousel-slides-item">
//                 <p class="p-01">
//                   '. $attributes['slide-content_03'] .'
//                 </p>
//               </div>
//               <div class="mz-carousel-item mz-carousel-slides-item">
//                 <p class="p-01">
//                   '. $attributes['slide-content_04'] .'
//                 </p>
//               </div>
//               <div class="mz-carousel-item mz-carousel-slides-item">
//                 <p class="p-01">
//                   '. $attributes['slide-content_05'] .'
//                 </p>
//               </div>
//             </div>
//           </div>
//         </div>
//       </section>
//     '
//   ;

// 	return $output;

// });

add_shortcode( 'mz-sc-section--about-zenon-carousel', function ( $atts, $content = null ){

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
      <section class="mz-section mz-sc-section--about-zenon-carousel">
        <div class="mz-container">
          	<div class="mz-row">
				<div class="mz-carousel-item mz-carousel-nav-item">
					<h1>
						'. $attributes['slide-nav_01'] .'
					</h1>
				</div>
				<div class="mz-carousel-item mz-carousel-slides-item">
					<p class="p-01">
					'. $attributes['slide-content_01'] .'
					</p>
				</div>
			</div>
            <div class="mz-row">
				<div class="mz-carousel-item mz-carousel-nav-item">
					<h1>
						'. $attributes['slide-nav_02'] .'
					</h1>
				</div>
				<div class="mz-carousel-item mz-carousel-slides-item">
					<p class="p-01">
					'. $attributes['slide-content_02'] .'
					</p>
				</div>
			</div>
			<div class="mz-row">
				<div class="mz-carousel-item mz-carousel-nav-item">
					<h1>
						'. $attributes['slide-nav_03'] .'
					</h1>
				</div>
				<div class="mz-carousel-item mz-carousel-slides-item">
					<p class="p-01">
					'. $attributes['slide-content_03'] .'
					</p>
				</div>
			</div>
			<div class="mz-row">
				<div class="mz-carousel-item mz-carousel-nav-item">
					<h1>
						'. $attributes['slide-nav_04'] .'
					</h1>
				</div>
				<div class="mz-carousel-item mz-carousel-slides-item">
					<p class="p-01">
					'. $attributes['slide-content_04'] .'
					</p>
				</div>
			</div>
			<div class="mz-row">
				<div class="mz-carousel-item mz-carousel-nav-item">
					<h1>
						'. $attributes['slide-nav_05'] .'
					</h1>
				</div>
				<div class="mz-carousel-item mz-carousel-slides-item">
					<p class="p-01">
					'. $attributes['slide-content_05'] .'
					</p>
				</div>
			</div>
        </div>
      </section>
    '
  ;

	return $output;

});

add_shortcode( 'mz-sc-section--written-testimonials-carousel', function ( $atts, $conent = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum'
	], $atts);

	$testimonialsArgs = array(
		'post_type'   => 'testimonials',
		'post_status' => 'publish',
		'tax_query'   => array(
			array(
				'taxonomy' => 'testimonials_tag',
				'field'    => 'slug',
				'terms'    => 'written',
			)
		),
		'orderby'    => 'date',
		'order'      => 'DESC'
	);

	$testimonialsQuery = new WP_Query( $testimonialsArgs );

	ob_start();
	get_template_part( 'template-parts/sections/section', 'written-testimonials-carousel', array(
		'attributes' => $attributes,
		'posts'      => $testimonialsQuery
	));

	$output = ob_get_contents();
	ob_end_clean();

	return $output;

});

add_shortcode( 'mz-sc-section--video-testimonials-carousel', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum'
	], $atts);

	$testimonialsArgs = array(
		'post_type'   => 'testimonials',
		'post_status' => 'publish',
		'tax_query'   => array(
			array(
				'taxonomy' => 'testimonials_tag',
				'field'    => 'slug',
				'terms'    => 'video',
			)
		),
		'orderby'    => 'date',
		'order'      => 'DESC',
	);

	$testimonialsQuery = new WP_Query( $testimonialsArgs );

	ob_start();
	get_template_part( 'template-parts/sections/section', 'video-testimonials-carousel', array(
		'attributes' => $attributes,
		'posts'      => $testimonialsQuery
	));

	$output = ob_get_contents();
	ob_end_clean();

	wp_reset_postdata();

	return $output;

});

add_shortcode( 'mz-sc-section--recent-articles', function ( $atts, $conent = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum'
	], $atts);

	$args = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 3,
		'orderby'        => 'date',
		'order'          => 'DESC'
	);

	$query = new WP_Query( $args );

	ob_start();
	get_template_part( 'template-parts/sections/section', 'recent-articles', array(
		'title' => $attributes['title'],
		'posts' => $query
	));

	$output = ob_get_contents();
	ob_end_clean();

	wp_reset_postdata();
	
	return $output;

});

add_shortcode( 'mz-sc-section--articles-you-might-like', function ( $atts, $conent = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum'
	], $atts);

	$args = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 3,
		'orderby'        => 'date',
		'order'          => 'DESC'
	);

	$query = new WP_Query( $args );

	ob_start();
	get_template_part( 'template-parts/sections/section', 'articles-you-might-like', array(
		'title' => $attributes['title'],
		'posts' => $query
	));

	$output = ob_get_contents();
	ob_end_clean();

	wp_reset_postdata();
	
	return $output;

});

add_shortcode( 'mz-sc-section--coaches-carousel', function ( $atts, $content = null ){

	$attributes = shortcode_atts([
		'title' => 'Lorem Ipsum'
	], $atts);

	ob_start();
	get_template_part( 'template-parts/sections/section', 'coaches-carousel', array(
		'attributes' => $attributes
	));

	$output = ob_get_contents();
	ob_end_clean();

	wp_reset_postdata();

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
      <a class="mz-cta mz-cta_'.$titleToLowerCase.'"
        title="'. $attributes['title'] .'"
        target="'. $attributes['target'] .'"
        href="'. $attributes['href'] .'"
        rel="'. $attributes['rel'] .'"
        style="'. $attributes['style'] .'">
        <span>'. $attributes['title'] .'</span>
        '. $attributes['cta-icon'] .'
      </a>
    '
  ;

  return $output;

});