<?php if( count($args['posts']->posts) > 0 ) : ?>
  <section class="mz-section mz-sc-section--video-testimonials-carousel">
    <div class="mz-container">
      <h2>
        Video Testimonials
      </h2>
      <div class="testimonial-carousel-main"
        data-flickity='{
          "cellAlign": "center",
          "contain": true,
          "prevNextButtons": false,
          "pageDots": false
        }'>
        <?php $postIndex = 1; ?>
        <?php foreach( $args['posts']->posts as $post) : ?>
          <div class="testimonial-carousel-cell"
            title="<?php echo $post->post_title; ?>"
            data-id="<?php echo $postIndex; ?>"
            data-custom="<?php echo get_post_meta( $post->ID, $key = 'video_testimonial', true ); ?>">
            <div class="video-container">
              <button class="video-button --play-pause control-pause"
                onclick="video_testimonials_toggle_play(<?php echo $postIndex; ?>)">
                <svg class="mz-svg svg-icon-play" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="22.5" cy="22.5947" r="21.375" fill="#202329" fill-opacity="0.4"></circle>
                  <path d="M32.7857 23.2376L15.4286 11.6662V34.809L32.7857 23.2376Z" fill="#FFFFFF"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M45 22.5947C45 35.0211 34.9264 45.0947 22.5 45.0947C10.0736 45.0947 0 35.0211 0 22.5947C0 10.1683 10.0736 0.0947266 22.5 0.0947266C34.9264 0.0947266 45 10.1683 45 22.5947ZM43.7143 22.5947C43.7143 34.3111 34.2163 43.809 22.5 43.809C10.7837 43.809 1.28571 34.3111 1.28571 22.5947C1.28571 10.8784 10.7837 1.38044 22.5 1.38044C34.2163 1.38044 43.7143 10.8784 43.7143 22.5947Z" fill="#FFFFFF"></path>
                </svg>
                <svg class="mz-svg svg-icon-pause" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="22.5" cy="22.5" r="21.375" fill="#202329" fill-opacity="0.4"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M45 22.5C45 34.9264 34.9264 45 22.5 45C10.0736 45 0 34.9264 0 22.5C0 10.0736 10.0736 0 22.5 0C34.9264 0 45 10.0736 45 22.5ZM43.7143 22.5C43.7143 34.2163 34.2163 43.7143 22.5 43.7143C10.7837 43.7143 1.28571 34.2163 1.28571 22.5C1.28571 10.7837 10.7837 1.28571 22.5 1.28571C34.2163 1.28571 43.7143 10.7837 43.7143 22.5Z" fill="#FFFFFF"></path>
                  <path d="M32.0469 13H26.4531C25.9297 13 25.5 13.2812 25.5 13.6302V32.3646C25.5 32.7135 25.9219 33 26.4531 33H32.0469C32.5703 33 33 32.7187 33 32.3646V13.6302C33 13.2812 32.5781 13 32.0469 13Z" fill="#FFFFFF"></path>
                  <path d="M20.5 32.3646V13.6302C20.5 13.2812 20.0781 13 19.5469 13H13.9531C13.4219 13 13 13.2812 13 13.6302V32.3646C13 32.7135 13.4219 33 13.9531 33H19.5469C20.0781 33 20.5 32.7187 20.5 32.3646Z" fill="#FFFFFF"></path>
                </svg>
              </button>
              <button class="video-button --full-screen control-open-fullscreen"
                onclick="video_testimonials_toggle_fullscreen(<?php echo $postIndex; ?>)">
                <svg class="mz-svg svg-icon-open-fullscreen" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M45.0009 1.40621C45.0009 0.621516 44.3794 0 43.5947 0H30.9594C30.1607 0 29.5659 0.630049 29.5645 1.42877C29.5645 2.2261 30.1607 2.81254 30.9594 2.81254H42.1883L42.1658 14.0949C42.1658 14.8936 42.7733 15.5011 43.572 15.5011C44.3707 15.4997 44.9782 14.8936 44.9782 14.0949L45.0008 1.42737C45.0008 1.42316 44.9994 1.42036 44.9994 1.41755C44.9995 1.41323 45.0009 1.41042 45.0009 1.40621Z" fill="white"/>
                  <path d="M14.085 0H1.44981C1.44561 0 1.4428 0.00140271 1.43859 0.00140271C1.43579 0.00140271 1.43158 0 1.42877 0C0.644076 0 0.0224433 0.621516 0.0224433 1.40621L0 14.0737C0 14.8724 0.630049 15.4687 1.42877 15.4687C2.2261 15.4687 2.81254 14.8724 2.81254 14.0737L2.83499 2.81243H14.0849C14.8837 2.81243 15.4911 2.20494 15.4911 1.40621C15.4899 0.607489 14.8824 0 14.085 0Z" fill="white"/>
                  <path d="M14.0414 42.1874H2.81254V30.9375C2.81254 30.1387 2.20505 29.5312 1.40633 29.5312C0.607606 29.5312 0 30.1386 0 30.9375V43.5726C0 43.5768 0.00140271 43.5796 0.00140271 43.5824C0.00140271 43.5866 0 43.5894 0 43.5936C0 44.3783 0.621516 44.9998 1.40621 44.9998H14.0413C14.8401 44.9998 15.4349 44.3698 15.4363 43.5711C15.4364 42.7739 14.8402 42.1874 14.0414 42.1874Z" fill="white"/>
                  <path d="M43.5712 29.5635C42.7725 29.5635 42.186 30.1597 42.1874 30.9585V42.1874H30.9375C30.1387 42.1874 29.5312 42.7949 29.5312 43.5936C29.5312 44.3923 30.1387 44.9998 30.9375 44.9998H43.5726C43.5768 44.9998 43.5796 44.9984 43.5824 44.9984C43.5866 44.997 43.5894 44.9998 43.5936 44.9998C44.3783 44.9998 44.9998 44.3783 44.9998 43.5936V30.9585C44.9999 30.1597 44.3699 29.5635 43.5712 29.5635Z" fill="white"/>
                </svg>
                <svg class="mz-svg svg-icon-exit-fullscreen" width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.4364 32.4062C15.4364 31.6215 14.8149 31 14.0302 31H1.39499C0.596266 31 0.00140271 31.63 0 32.4288C0 33.2261 0.596266 33.8125 1.39499 33.8125H12.6239L12.6013 45.0949C12.6013 45.8936 13.2088 46.5011 14.0075 46.5011C14.8063 46.4997 15.4138 45.8936 15.4138 45.0949L15.4363 32.4274C15.4363 32.4232 15.4349 32.4204 15.4349 32.4176C15.435 32.4132 15.4364 32.4104 15.4364 32.4062Z" fill="white"/>
                  <path d="M44.085 31H31.4498C31.4456 31 31.4428 31.0014 31.4386 31.0014C31.4358 31.0014 31.4316 31 31.4288 31C30.6441 31 30.0224 31.6215 30.0224 32.4062L30 45.0737C30 45.8724 30.63 46.4687 31.4288 46.4687C32.2261 46.4687 32.8125 45.8724 32.8125 45.0737L32.835 33.8124H44.0849C44.8837 33.8124 45.4911 33.2049 45.4911 32.4062C45.4899 31.6075 44.8824 31 44.085 31Z" fill="white"/>
                  <path d="M44.0414 12.6562H32.8125V1.40621C32.8125 0.607489 32.2051 0 31.4063 0C30.6076 0 30 0.607372 30 1.40621V14.0413C30 14.0455 30.0014 14.0483 30.0014 14.0511C30.0014 14.0554 30 14.0582 30 14.0624C30 14.8471 30.6215 15.4686 31.4062 15.4686H44.0413C44.8401 15.4686 45.4349 14.8385 45.4363 14.0398C45.4364 13.2426 44.8402 12.6562 44.0414 12.6562Z" fill="white"/>
                  <path d="M14.0399 0C13.2412 0 12.6548 0.596266 12.6562 1.39499V12.6239H1.40621C0.607489 12.6239 0 13.2314 0 14.0301C0 14.8288 0.607489 15.4363 1.40621 15.4363H14.0413C14.0455 15.4363 14.0483 15.4349 14.0511 15.4349C14.0554 15.4335 14.0582 15.4363 14.0624 15.4363C14.8471 15.4363 15.4686 14.8148 15.4686 14.0301V1.39499C15.4687 0.596266 14.8387 0 14.0399 0Z" fill="white"/>
                </svg>
              </button>
              <video
                class="video"
                src="<?php the_field('video_testimonial_link'); ?>"
                onpause="video_testimonials_onpause(<?php echo $postIndex; ?>)"
                onplay="video_testimonials_onplay(<?php echo $postIndex; ?>)">
              </video>
            </div>
          </div>
          <?php $postIndex++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <script>
    var testimonialLength = $('.testimonial-carousel-cell').length;

    function video_testimonials_toggle_play(videoID) {    
      console.log('videoID           = '+videoID);
      console.log('testimonialLength = '+testimonialLength);

      for( var i = 1; i <= testimonialLength; i++ ){
        console.log('i                = '+i);
        if( i != videoID ){
          $('.testimonial-carousel-cell:nth-child('+i+') .video-container video')[0].pause();
          $('.testimonial-carousel-cell:nth-child('+i+') .video-container video')[0].currentTime = 0;
          $('.testimonial-carousel-cell:nth-child('+i+') .video-container .video-button.--play-pause').removeClass('control-play').addClass('control-pause');
        }
      }

      if( $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video')[0].paused ){
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video')[0].play();
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container .video-button.--play-pause').removeClass('control-pause').addClass('control-play');
      }
      else {
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video')[0].pause();
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container .video-button.--play-pause').removeClass('control-play').addClass('control-pause');
      }
      $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video').on('ended', function(){
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video')[0].pause();
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video')[0].currentTime = 0;
        $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container .video-button.--play-pause').removeClass('control-play').addClass('control-pause');
      });
    }

    function video_testimonials_toggle_fullscreen(videoID) {

      var testimonialVideo = $('.testimonial-carousel-cell:nth-child('+videoID+') .video-container video')[0];
      var isFullscreen = false;
      
      if( document.fullscreenElement === null ){
        isFullscreen = true;
        if( testimonialVideo.webkitRequestFullscreen ){
          testimonialVideo.webkitRequestFullscreen();
        }
        else if( testimonialVideo.msRequestFullscreen ){
          testimonialVideo.msRequestFullscreen();
        }
        else {
          testimonialVideo.requestFullscreen();
        }
      }
      else {
        if( document.exitFullscreen ){
          document.exitFullscreen();
        }
        else if( document.webkitExitFullscreen ){ /* Safari, Chrome */
          document.webkitExitFullscreen();
        }
        else if( document.msExitFullscreen ){ /* IE11 */
          document.msExitFullscreen();
        }
      }
    }

    function video_testimonials_onpause(videoID) {
      console.log('onpause videoID = '+videoID);
      $('.testimonial-carousel-cell:nth-child('+(videoID)+') .video-container .video-button.--play-pause').removeClass('control-play').addClass('control-pause');
    }

    function video_testimonials_onplay(videoID) {
      console.log('onplay videoID = '+videoID);
      $('.testimonial-carousel-cell:nth-child('+(videoID)+') .video-container .video-button.--play-pause').removeClass('control-pause').addClass('control-play');
    }
  </script>
<?php endif; ?>