
<?php get_header(); ?>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="get_interval" style="visibility:hidden; position:fixed;">
                <?php carouselInterval(); ?>
              </div>
              <div class="carousel-inner" role="listbox">

                <div class="item active">
                  <img src="<?php bannerImageOne(); ?>" alt="Flower">
                  <a href="<?php bannerOneLink(); ?>"><div class="img_slider_info">
                    <h1><?php bannerOneTitle(); ?></h1>
                    <h3><?php bannerOneSubInfo(); ?></h3>
                  </div></a>
                </div>

                <div class="item">
                  <img src="<?php bannerImageTwo(); ?>" alt="Chania">
                  <a href="<?php bannerTwoLink(); ?>"><div class="img_slider_info">
                    <h1><?php bannerTwoTitle(); ?></h1>
                    <h3><?php bannerTwoSubInfo(); ?></h3>
                  </div></a>
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 home_info home_info_box_1">
            <h1><?php leftInfoBoxTitle(); ?></h1>
            <p>
              <?php leftInfoBoxInfo(); ?>
            </p>
          </div>
          <div class="col-md-6 home_info home_info_box_2">
            <h1><?php rightInfoBoxTitle(); ?></h1>
            <p>
              <?php rightInfoBoxInfo(); ?>
            </p>
          </div>
        </div>
      </div>
    </section>


    <!-- WELCOME SECTION -->
    <section id="welcome">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
          </div>
          <!-- end diver col -->
        </div>
        <!-- end diver row -->


      </div>
      <!-- end diveder container -->
    </section>

  </div>
<?php get_footer(); ?>
