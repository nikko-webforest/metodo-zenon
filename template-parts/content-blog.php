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

	<?php echo do_shortcode('[mz-sc-section--hero title="Our Blogs" hero-bg="/wp-content/themes/metodo-zenon/images/MZ_Blog_Hero_sect-bg-v01-1440x440.jpg"]'); ?>

	<?php
		$categories = get_categories(
			array(
				'orderby'    => 'count',
				'order'      => 'DESC',
				'show_count' => '1',
				'title_li'   => '',
				'number'     => 4,
			)
		);

		$paged = 1;
		$paged = get_query_var('paged');
		$blogPost = new WP_Query(array(
			'posts_per_page' => 6,
			'paged'          => $paged
		));
	?>
	
	<section class="mz-section mz-section--blog-listing">
		<div class="mz-container">
			<div class="mz-row mz-top-bar-row">
				<ul class="mz-category-tab-filter-list">
					<li class="mz-category-tab-filter-item --active-item"><span>All</span></li>
					<?php foreach( $categories as $cateogry ) : ?>
						<li class="mz-category-tab-filter-item"><span><?php echo $cateogry->name; ?></span></li>
					<?php endforeach; ?>
				</ul>
				<div class="mz-search-bar-filter">
					<input class="mz-search-bar-input"
						id="mzSearchBarInput"
						type="text"
						placeholder="Search">
					<svg class="mz-search-bar-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.26918 0C3.25452 0 0 3.25452 0 7.26918C0 11.2839 3.25452 14.5384 7.26918 14.5384C8.96533 14.5384 10.5251 13.9575 11.7615 12.9848L16.5232 17.7465C16.6036 17.8269 16.699 17.8906 16.804 17.9341C16.909 17.9776 17.0215 18 17.1352 18C17.2489 18 17.3614 17.9776 17.4664 17.9341C17.5714 17.8906 17.6668 17.8269 17.7472 17.7465C17.8276 17.6661 17.8913 17.5707 17.9348 17.4657C17.9783 17.3607 18.0007 17.2482 18.0007 17.1345C18.0007 17.0208 17.9783 16.9083 17.9348 16.8033C17.8913 16.6983 17.8276 16.6029 17.7472 16.5225L12.9848 11.7608C13.9935 10.4812 14.5409 8.89859 14.5384 7.26918C14.5384 3.25452 11.2839 0 7.26918 0ZM1.73076 7.26918C1.73076 5.8003 2.31427 4.39158 3.35293 3.35293C4.39158 2.31427 5.8003 1.73076 7.26918 1.73076C8.73807 1.73076 10.1468 2.31427 11.1854 3.35293C12.2241 4.39158 12.8076 5.8003 12.8076 7.26918C12.8076 8.73807 12.2241 10.1468 11.1854 11.1854C10.1468 12.2241 8.73807 12.8076 7.26918 12.8076C5.8003 12.8076 4.39158 12.2241 3.35293 11.1854C2.31427 10.1468 1.73076 8.73807 1.73076 7.26918Z" fill="#AFACB4"/>
					</svg>
				</div>
			</div>
			<?php if( $blogPost->have_posts() ) : ?>
				<div class="mz-blog-post-list">
					<?php while( $blogPost->have_posts() ) : ?>
						<?php $blogPost->the_post(); ?>
						<?php
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
						?>
						<div class="mz-blog-post-item"
							id="post-<?php echo get_the_ID(); ?>'">
							<div class="mz-blog-post-img-wrap">
								<a class="mz-img-link mz-blog-post-img-link"
									title="'<?php echo the_title(); ?>'"
									href="'<?php echo get_permalink(); ?>"
									rel="">
									<?php if( empty( get_the_post_thumbnail_url() ) ) : ?>
										<img class="mz-img mz-blog-post-img"
											alt="<?php echo the_title(); ?>"
											title="<?php echo the_title(); ?>"
											src="/wp-content/themes/metodo-zenon/images/MZ_Blog_Temp_Article_Featured_img-320x215.png"
											width=""
											height=""/>
									<?php else : ?>
										<img class="mz-img mz-blog-post-img"
											alt="<?php echo the_title(); ?>"
											title="<?php echo the_title(); ?>"
											src="<?php echo get_the_post_thumbnail_url(); ?>"
											width=""
											height=""/>
									<?php endif; ?>
								</a>
							</div>
							<div class="mz-blog-post-details-wrap">
								<h3 class="mz-blog-post-title"><?php echo the_title(); ?></h3>
								<p class="mz-blog-post-excerpt"><?php echo get_the_excerpt(); ?></p>
								<div class="mz-blog-post-categories"><?php echo $postCategorysList; ?></div>
								<div class="mz-blog-post-tags"><?php echo $postTagsList; ?></div>
								<div class="mz-inner-row">
									<div class="mz-blog-post-released-date"><?php get_the_date('M d, Y') ?></div>
									<a class="mz-a-link mz-link-more-info"
										title="<?php echo the_title(); ?>"
										href="<?php echo get_permalink(); ?>"
										rel="">
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
					<?php	endwhile; ?>
				</div>
				<div class="mz-pagination">
					<?php
						echo paginate_links(array(
							'total' => $blogPost->max_num_pages,
							'prev_text' => '<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 12L5.06 7.061L10 2.122L7.878 0L0.818 7.061L7.878 14.122L10 12Z" fill="white"/></svg>',
							'next_text' => '<svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.818359 12L5.75836 7.061L0.818359 2.122L2.94036 0L10.0004 7.061L2.94036 14.122L0.818359 12Z" fill="white"/></svg>'
						));
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>

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
</article>
