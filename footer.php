    <?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package metodo_zenon
     */
    ?>

    <!-- #mz-footer -->
    <footer class="mz-footer" id="mz-footer">
      <section class="mz-section mz-section--primary">
        <div class="mz-container">
          <div class="mz-row">
            <div class="mz-col col-01">
              <a class="mz-img-link mz-logo-link"
                title="<?php echo get_bloginfo( 'name' ); ?>"
                href="<?php echo home_url() ?>"
                rel="">
                <?php include('svg/svg-mz-logo-dark.svg'); ?>
              </a>
              <p class="p-01">
                <?php /* Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat sadipscing cu. Legere epicuri insolens eu nec, dicit virtute urbanitas id nam, qui in habeo semper eligendi. */ ?>
                ZENON es un método revolucionario y exclusivo en el sector de la salud, la estética y el rendimiento. Entrenadores personales, Preparadores Físcos, Fiscioterapeutas, Psicólogos y expertos hábitos, Nutricionistas... todo ese equipo, para ti.
              </p>
            </div>
            <div class="mz-col col-02">
              <h5 class="mz-menu-title">
                <?php /* Quick Links */ ?>
                Acceso directo
              </h5>
              <ul class="mz-menu-list">
                <?php
                  $menuFooterPrimaryMenu01 = wp_get_nav_menu_items('Footer - Primary - Menu #01');
                  $menuFooterPrimaryMenuCurrent;
                  
                  foreach( $menuFooterPrimaryMenu01 as $item ){
                    $menuFooterPrimaryMenuCurrent = ( $item->object_id == get_queried_object_id() ) ? 'current-menu' : '';
                    echo
                      '
                        <li class="mz-menu-item '.$menuFooterPrimaryMenuCurrent.'">
                          <a class="mz-menu-links"
                            id="'.$item->ID.'"
                            object-id="'.$item->object_id.'"
                            title="'.$item->title.'"
                            href="'.$item->url.'">
                            '.$item->title.'
                          </a>
                        </li>
                      '
                    ;
                  }
                ?>
              </ul>
            </div>
            <div class="mz-col col-03">
              <h5 class="mz-menu-title">
                <?php /* Services */ ?>
                ¿Cuál es tu objetivo?
              </h5>
              <ul class="mz-menu-list">
                <?php
                  $menuFooterPrimaryMenu02 = wp_get_nav_menu_items('Footer - Primary - Menu #02');
                  
                  foreach( $menuFooterPrimaryMenu02 as $item ){
                    echo
                      '
                        <li class="mz-menu-item">
                          <a class="mz-menu-links"
                            title="'.$item->title.'"
                            href="'.$item->url.'">
                            '.$item->title.'
                          </a>
                        </li>
                      '
                    ;
                  }
                ?>
              </ul>
            </div>
            <div class="mz-col col-04">
              <h5 class="mz-menu-title">
                <?php /* Subscribe to Newsletter */ ?>
                Escribe tu correo para descargarte una guía sobre cómo monitorizar tu carga de entrenamiento
              </h5>
              <?php echo do_shortcode('[fluentform id="3"]'); ?>
            </div>
          </div>
        </div>
      </section>
      <section class="mz-section mz-section--copyright">
        <div class="mz-container">
          <div class="mz-row">
            <div class="mz-col">
              <p class="p-01">
                Copyright &copy; Metodo Zenon. All Right Reserved.
              </p>
            </div>
            <!-- <div class="mz-col">
              <ul class="mz-social-list">
                <li class="mz-social-item">
                  <a class="mz-social-link"
                    title="Social Facebook"
                    href="#"
                    rel="">
                    <?php include('svg/svg-icon-facebook.svg'); ?>
                  </a>
                </li>
                <li class="mz-social-item">
                  <a class="mz-social-link"
                    title="Social Instagram"
                    href="#"
                    rel="">
                    <?php include('svg/svg-icon-instagram.svg'); ?>
                  </a>
                </li>
                <li class="mz-social-item">
                  <a class="mz-social-link"
                    title="Social LinkedIn"
                    href="#"
                    rel="">
                    <?php include('svg/svg-icon-linkedin.svg'); ?>
                  </a>
                </li>
                <li class="mz-social-item">
                  <a class="mz-social-link"
                    title="Social Twitter"
                    href="#"
                    rel="">
                    <?php include('svg/svg-icon-twitter.svg'); ?>
                  </a>
                </li>
                <li class="mz-social-item">
                  <a class="mz-social-link"
                    title="Social Youtube"
                    href="#"
                    rel="">
                    <?php include('svg/svg-icon-youtube.svg'); ?>
                  </a>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </section>
      <?php
        /*
          <button class="mz-back-to-top-btn" style="display: none;">
            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.46985 9.65247L7.40885 4.71247L12.3478 9.65247L14.4698 7.53047L7.40885 0.470466L0.347849 7.53047L2.46985 9.65247Z" fill="white"/>
            </svg>
          </button>
        */
      ?>
    </footer>
  </div>

  <?php wp_footer(); ?>
  <script src="/wp-content/themes/<?php echo get_option('stylesheet'); ?>/src/js/script.js"></script>
  
</body>
</html>
