<section class="mz-section mz-sc-section--written-testimonials-carousel">
  <div class="mz-container">
    <div class="mz-row">
      <div class="mz-col">
        <h2>
          Opiniones de deportistas que ya están mejorando con el MÉTODO ZENON
        </h2>
      </div>
      <div class="mz-col">
        <?php $postCount = count($args['posts']->posts); ?>
        <?php if( $postCount == 0 ) : ?>
          <h2 class="no-written-testimonial-found">
            NO WRITTEN TESTIMONIAL FOUND
          </h2>
        <?php elseif( $postCount == 1 ) : ?>
          <div class="testimonial-carousel-main">
            <?php $postIndex = 1; ?>
            <?php foreach( $args['posts']->posts as $post) : ?>
              <div class="testimonial-carousel-cell"
                data-id="<?php echo $postIndex; ?>">
                <div class="mz-inner-row">
                  <div class="mz-inner-col">
                    <?php if( get_field('testimonial_profile') ) : ?>
                      <img class="testimony-profile-img"
                        alt=""
                        title=""
                        src="<?php the_field('testimonial_profile'); ?>"
                        width=""
                        height=""/>
                    <?php else : ?>
                      <span class="testimony-profile-initial">
                        <?php echo substr($post->post_title, 0, 1); ?>
                      </span>
                    <?php endif; ?>
                  </div>
                  <div class="mz-inner-col">
                    <p class="testimony-name">
                      <?php echo $post->post_title; ?>
                    </p>
                    <ul class="testimony-star-rating">
                      <?php
                        $ratingMax = 5;
                        for( $i = 0; $i < $ratingMax; $i++ ){
                          if( $i < get_field('testimonial_star_rating') ){
                            echo '<li><i class="fa fa-star active"></i></li>';
                          }
                          else {
                            echo '<li><i class="fa fa-star"></i></li>';
                          }
                        }
                      ?>
                    </ul>
                  </div>
                </div>
                <p class="testimony-quotes">
                  <?php echo strip_tags( $post->post_content ); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        <?php else : ?>
          <div class="testimonial-carousel-main">
            <?php $postIndex = 1; ?>
            <?php foreach( $args['posts']->posts as $post) : ?>
              <div class="testimonial-carousel-cell"
                data-id="<?php echo $postIndex; ?>">
                <div class="mz-inner-row">
                  <div class="mz-inner-col">
                    <?php if( get_field('testimonial_profile') ) : ?>
                      <img class="testimony-profile-img"
                        alt=""
                        title=""
                        src="<?php the_field('testimonial_profile'); ?>"
                        width=""
                        height=""/>
                    <?php else : ?>
                      <span class="testimony-profile-initial">
                        <?php echo substr($post->post_title, 0, 1); ?>
                      </span>
                    <?php endif; ?>
                  </div>
                  <div class="mz-inner-col">
                    <p class="testimony-name">
                      <?php echo $post->post_title; ?>
                    </p>
                    <ul class="testimony-star-rating">
                      <?php
                        $ratingMax = 5;
                        for( $i = 0; $i < $ratingMax; $i++ ){
                          if( $i < get_field('testimonial_star_rating') ){
                            echo '<li><i class="fa fa-star active"></i></li>';
                          }
                          else {
                            echo '<li><i class="fa fa-star"></i></li>';
                          }
                        }
                      ?>
                    </ul>
                  </div>
                </div>
                <p class="testimony-quotes">
                  <?php echo strip_tags( $post->post_content ); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="mz-col">
        <?php if( $postCount != 0 && $postCount > 1 ) : ?>
          <div class="testimonial-carousel-slide-count">
            <span class="testimonial-carousel-counter-slide"></span>/<span class="testimonial-carousel-total-slide"><?php echo ($postCount < 10) ? '0'.$postCount : $postCount ; ?></span>
          </div>
          <div class="testimonial-carousel-btn-wrap">
            <button class="testimonial-carousel-btn testimonial-carousel-prev-btn">
              <svg class="mz-svg" width="35" height="14" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.27094 2L3.00062 7.2703L8.27094 12.5406M3.6339 7.2708H34.9492" stroke="white" stroke-width="3"/>
              </svg>
            </button>
            <button class="testimonial-carousel-btn testimonial-carousel-next-btn">
              <svg class="mz-svg" width="35" height="14" viewBox="0 0 35 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.6783 2L31.9486 7.2703L26.6783 12.5406M31.3153 7.2708H0" stroke="white" stroke-width="3"/>
              </svg>
            </button>
          </div>
        <?php endif; ?>
        <?php if( $postCount == 1 ) : ?>
          <div class="testimonial-carousel-slide-count">
            <span class="testimonial-carousel-counter-slide"></span>/<span class="testimonial-carousel-total-slide">01</span>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>