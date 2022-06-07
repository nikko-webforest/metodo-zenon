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
							Social networking is the new norm of the society as many of us remain “online” 24*7. However, excessive use of it would result in social networking addiction
						</div>
						<div class="mz-blog-post-content">
							<?php the_content(); ?>
							Study 1 established the factor structure of the social networking addiction scale as a higher-order construct having six first-level factors.
							<br />
							<br />
							In study 2, we found that social networking is a relatively enduring characteristic as test-retest reliability was found to be.  88 in a time span of 25 days.
							<br />
							<br />
							Study 3 was conducted to establish the convergent and divergent validity of the social networking addiction scale (SNAS). Problematic internet use, Facebook addiction, average time spent on the internet daily and loneliness were chosen to test the  convergent validity of SNAS, while life satisfaction was used to test the divergent validity.
							<br />
							<br />
							The result establishes the convergent and divergent validity of SNAS. The scale situated nicely between problematic internet and Facebook addictions as it shared 53% of the variance with the former and 25% with the later.
							<br />
							<br />
							Study 1 established the factor structure of the social networking addiction scale as a higher-order construct having six first-level factors.
							<br />
							<br />
							In study 2, we found that social networking is a relatively enduring characteristic as test-retest reliability was found to be.  88 in a time span of 25 days.
							<br />
							<br />
							Study 3 was conducted to establish the convergent and divergent validity of the social networking addiction scale (SNAS). Problematic internet use, Facebook addiction, average time spent on the internet daily and loneliness were chosen to test the  convergent validity of SNAS, while life satisfaction was used to test the divergent validity.
							<br />
							<br />
							The result establishes the convergent and divergent validity of SNAS. The scale situated nicely between problematic internet and Facebook addictions as it shared 53% of the variance with the former and 25% with the later.
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