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
						<ul class="mz-social-share-list">
							<li class="mz-social-share-item">
								<a
									title="Social Facebook"
									target=""
									class="mz-social-share-link"
									href="#"
									rel="Social Share"
									>
									<img
										alt="Social Facebook"
										title="Social Facebook"
										class="mz-img mz-social-share-img"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_Facebook_icon.png"
										width=""
										height=""
									/>
								</a>
							</li>
							<li class="mz-social-share-item">
								<a
									title="Social Twitter"
									target=""
									class="mz-social-share-link"
									href="#"
									rel="Social Share"
									>
									<img
										alt="Social Twitter"
										title="Social Twitter"
										class="mz-img mz-social-share-img"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_Twitter_icon.png"
										width=""
										height=""
									/>
								</a>
							</li>
							<li class="mz-social-share-item">
								<a
									title="Social LinkedIn"
									target=""
									class="mz-social-share-link"
									href="#"
									rel="Social Share"
									>
									<img
										alt="Social LinkedIn"
										title="Social LinkedIn"
										class="mz-img mz-social-share-img"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_LinkedIn_icon.png"
										width=""
										height=""
									/>
								</a>
							</li>
							<li class="mz-social-share-item">
								<a
									title="Social Youtube"
									target=""
									class="mz-social-share-link"
									href="#"
									rel="Social Share"
									>
									<img
										alt="Social Youtube"
										title="Social Youtube"
										class="mz-img mz-social-share-img"
										src="/wp-content/themes/metodo-zenon/images/mz-social-share-icons/MZ_Youtube_icon.png"
										width=""
										height=""
									/>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

</article>