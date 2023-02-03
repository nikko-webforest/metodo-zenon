<?php if( count($args['posts']->posts) > 0 ) : ?>
  <section class="mz-section mz-sc-section--articles-you-might-like">
    <div class="mz-container">
      <h2>
        Articles You Might Like
      </h2>
      <div class="mz-row article-row">
        <?php foreach( $args['posts']->posts as $item ): ?>
          <?php
            $recentArticleFeatureImg = '';
            if( has_post_thumbnail() ){
              $recentArticleFeatureImg = wp_get_attachment_url( get_post_thumbnail_id( $recent['ID'] ) );
            }
            else {
              $recentArticleFeatureImg = '/wp-content/themes/metodo-zenon/images/MZ_Blog_Temp_Article_Featured_img-320x215.png';
            }
          ?>
          <div class="mz-col article-col-<?php echo $item->ID; ?>"
            id="article-<?php echo $item->ID; ?>">
            <div class="article-img-wrap">
              <img class="mz-img mz-article-img"
                alt="<?php echo $item->post_title; ?>"
                title="<?php echo $item->post_title; ?>"
                src="<?php echo $recentArticleFeatureImg; ?>'"
                width=""
                height=""
                loading="lazy"/>
            </div>
            <div class="article-details-wrap">
              <h3 class="article-title">
                <?php echo $item->post_title; ?>
              </h3>
              <p class="article-excerpt">
                <?php echo strip_tags( substr( $item->post_content, 0, 250 ) ).' ...'; ?>
              </p>
              <div class="mz-inner-row">
                <div class="article-released-date">
                  <?php echo date_format( date_create( $item->post_date ), 'M j, Y' ); ?>
                </div>
                <a class="mz-link mz-link--more-info"
                  title="<?php echo $item->post_title; ?>"
                  href="<?php echo get_permalink($item->ID); ?>"
                  rel="">
                  <span>Leer</span>
                  <span>
                    <svg class="mz-svg" width="35" height="13" viewBox="0 0 35 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M26.9048 1.3457L32.1752 6.616L26.9048 11.8863M31.5419 6.6165H0.226562" stroke="#6F4A37" stroke-width="3"/>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
