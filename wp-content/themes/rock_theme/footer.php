<!-- FOOTER SECTION -->


  <div class="footer-wrapper">


    <div class="container">
      <footer>
        <div class="row">
          <div class="col-md-6">
            <p>
              &copy; Seasoned Gourmet Firewood <?php echo date('Y'); ?> | Designed by Braden Whitten
            </p>
          </div>
          <div class="col-md-1">
            <i class="fa fa-facebook fa-lg"></i>
          </div>
          <div class="col-md-5">
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

</body>
</html>
