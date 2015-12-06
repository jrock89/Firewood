
<?php get_header(); ?>



<div class="container">
<div class="row">
  <div class="page_title">
    <div class="col-xs-12">
      <h1>Products</h1>
      <p class="lead">
        Seasoned Gourmet Firewood pride is in our products we provide. Our hardwoods are well-seasoned and offered after a minimum full year of curing.
      </p>
      <h1 style="text-align:left">STORED OFF THE GROUND MINIMUM 1 YEAR AND COVERED</h1>
    </div>
  </div>
</div>


        <!-- blog section -->
      <div class="row">
        <div class="col-sm-12 blog-main">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="blog-post col-md-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="inner_blog_post">

                <?php the_post_thumbnail(); ?>

                <!-- <h2 class="blog-post-title">
                    <?php the_title(); ?>
                </h2> -->

                <?php the_content(); ?>

                <!-- <p class="blog-post-meta"><?php echo get_the_date('F, j, Y'); ?><a href="#"> by <?php the_author(); ?></a>

                  <i class="fa fa-tag"></i>
                  <?php the_tags(); ?><br>

                  <i class="fa fa-folder-open"></i>
                  <?php _e('Category: '); ?>
                  <?php the_category(', '); ?>
                </p> -->




                <!-- <a href="<?php echo get_permalink(); ?>">
                  <?php _e('Read more...'); ?>
                </a> -->
            </div>
          </div><!-- /.blog-post -->

          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

          <nav>
            <ul class="pager">
              <li><?php next_posts_link('Older Posts'); ?></li>
              <li><?php previous_posts_link('Newer Posts'); ?></li>
            </ul>
          </nav>
        </div><!-- /.blog-main -->




      </div><!-- /.row -->


      <div class="row">
        <div class="page_title">
          <div class="col-xs-12">
            <h1>Delivery Information - Local Delivery N/C</h1>
            <p class="lead">
              Seasoned Gourmet Firewood gladly delivers wood across the Tri-County area. Please refer to our delivery area map to see whether or not we offer N\C standard delivery for your location. We do not deliver bundles, kindling, or smoking wood by themselves, however, we will gladly deliver them in accompaniment with one half or more Fireplace Cords.
            </p>
          </div>
        </div>
      </div>



      <div class="row">
        <!-- sidebar section -->
        <div class="col-sm-12 blog-sidebar">
          <?php get_sidebar(); ?>
        </div><!-- /.blog-sidebar -->
      </div>

    </div><!-- /.container -->












<?php get_footer(); ?>
