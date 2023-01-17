<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metodo_zenon
 */

?>

<!-- #post-<?php the_ID(); ?> -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="mz-section mz-blog-post-header-section">
		<div class="mz-container">
			<div class="mz-wrap">
				<p class="mz-blog-post-date-published">
					<?php the_date('F j, Y'); ?>
				</p>
				<h1 class="mz-blog-post-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</section>

	<section class="mz-section mz-blog-post-content-section">
		<div class="mz-container">
			<div class="mz-row">
				<div class="mz-col">
					<h1 class="mz-blog-post-title">
						<?php the_title(); ?>
					</h1>
					<div class="mz-blog-post-description">
						
					</div>
					<div class="mz-blog-post-content">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="mz-col">
					<?php
						/*
						<ul class="mz-social-share-list">
							<li class="mz-social-share-item">
								<a class="mz-social-share-link"
									title="Social Facebook"
									href="#"
									rel="Social Share">
									<img class="mz-img mz-social-share-img"
										alt="Social Facebook"
										title="Social Facebook"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_Facebook_icon.png"
										width=""
										height=""/>
								</a>
							</li>
							<li class="mz-social-share-item">
								<a class="mz-social-share-link"
									title="Social Twitter"
									href="#"
									rel="Social Share">
									<img class="mz-img mz-social-share-img"
										alt="Social Twitter"
										title="Social Twitter"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_Twitter_icon.png"
										width=""
										height=""/>
								</a>
							</li>
							<li class="mz-social-share-item">
								<a class="mz-social-share-link"
									title="Social LinkedIn"
									href="#"
									rel="Social Share">
									<img class="mz-img mz-social-share-img"
										alt="Social LinkedIn"
										title="Social LinkedIn"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_LinkedIn_icon.png"
										width=""
										height=""/>
								</a>
							</li>
							<li class="mz-social-share-item">
								<a class="mz-social-share-link"
									title="Social Youtube"
									href="#"
									rel="Social Share">
									<img class="mz-img mz-social-share-img"
										alt="Social Youtube"
										title="Social Youtube"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_Youtube_icon.png"
										width=""
										height=""/>
								</a>
							</li>
						</ul>
						*/
					?>
				</div>
			</div>
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