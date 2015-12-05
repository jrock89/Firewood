<!-- FOOTER SECTION -->


    <div class="footer-wrapper">


      <div class="container">
        <footer>
          <div class="row">
            <div class="col-md-6 footer_left">
              <p>
                <?php footerInfo(); ?>
              </p>
            </div>

            <div class="col-md-6 footer_right">
              <?php
                  wp_nav_menu( array(
                      'menu'              => 'footer',
                      'container'         => 'ul',
                      'container_class'   => 'footer_menu_ul',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'walker'            => new wp_bootstrap_navwalker())
                  );
              ?>
            </div>
          </div>
        </footer>
      </div>
    </div>


  <?php wp_footer(); ?>

  </div>
</body>
</html>
