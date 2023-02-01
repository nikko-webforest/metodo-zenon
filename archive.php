<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

get_header();
?>

	<!-- #main -->
	<main id="primary" class="mz-main">
		
		<?php
			$category = get_category( get_query_var('cat') );

			$categories = get_categories(
				array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => '1',
					'title_li'   => '',
					'number'     => 4,
				)
			);

			$paged = ( $category != '') ? (get_query_var('page_val') ? get_query_var('page_val') : 1) : ( get_query_var('paged') ? get_query_var('paged') : 1 );

			$blogPost = new WP_Query(array(
				'posts_per_page' => 6,
				'category_name'  => $category->name,
				'order'          => 'DESC',
				'paged'          => $paged
			));

			get_template_part( 'template-parts/page', 'blog', array(
				'categories'      => $categories,
				'active-cat-name' => $category->name,
				'active-cat-slug' => $category->slug,
				'posts'           => $blogPost,
				'paged'           => $paged
			));
		?>
		<script>
			/* mz-section--blog-listing | category-tab-filter */
			(function () {

				var thisSectionClass = '.mz-section--blog-listing';

				if( document.querySelectorAll(thisSectionClass).length >= 1 ){

					var clickedCategory = '.mz-category-tab-filter-item';
					var currentCategory = '<?php echo $category->name; ?>'.toLowerCase();
					var lengthCategory = $(clickedCategory).length;
					var thisSectionScrollTopValue = $(thisSectionClass).offset().top;
    			var headerHeight = $('.mz-header').height();

					console.log('currentCategory = ',currentCategory);
					console.log('lengthCategory  = ',lengthCategory);

					if( currentCategory == '' ){
						$(clickedCategory).removeClass('--active-item');
						$(clickedCategory).eq(0).addClass('--active-item');
					}
					else {
						for( var i = 0; i < lengthCategory; i++ ){

							selectedCategory = $(clickedCategory).eq(i).find('.mz-category-tab-filter-link').text().toLowerCase();
							console.log('selectedCategory = ', $.trim(selectedCategory));

							if( currentCategory == $.trim(selectedCategory) ){
								$(window).scrollTop(thisSectionScrollTopValue - headerHeight);
								$(clickedCategory).removeClass('--active-item');
								$(clickedCategory).eq(i).addClass('--active-item');
							}

							// console.log( 'selectedCategory          = '+selectedCategory );
						}
					}
				}

			})();
		</script>

	</main>

<?php
get_sidebar();
get_footer();
