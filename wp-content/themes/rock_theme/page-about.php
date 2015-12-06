
<?php
/**
* Template Name: About Us
*/

get_header(); ?>




<!-- ABOUT US SECTION -->
<section id="about">
  <div class="container">



        <div class="page_title">
          <div class="col-xs-12">
            <h1>About Us</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 about_left">
            <h2><strong><?php aboutLeftInfoBoxTitle(); ?></strong></h2>
            <h4><?php aboutLeftInfoBoxSubTitle(); ?></h4>
            <p>
              <?php aboutLeftInfoBoxInfo(); ?>
            </p>
            <a href="http://goo.gl/maps/CDSpK">
              <img src="http://maps.googleapis.com/maps/api/staticmap?size=640x400&zoom=8&maptype=roadmap&markers=color:green|4226+Route+50,+Saratoga+Springs,+NY&sensor=false&apikey=AIzaSyDt4pJnvl-oyZBM35zlrLZOPXq6zUifA9Y" alt="Seasoned Groumet Firewood Location" />
            </a>
          </div>
          <div class="col-sm-6 about_left">
            <h2><strong><?php aboutRightInfoBoxTitle(); ?></strong></h2>
            <p>
              <?php aboutRightInfoBoxInfo(); ?> <strong class="text-warning"><?php aboutRightInfoBoxWarning(); ?></strong>
            </p>


          </div>

        </div>

        <!-- end diver row -->
        <div class="row message-area">
            <div class="col-sm-12">

            </div>
        </div>

  </div>
  <!-- end diveder container -->
</section>







  </div>
<?php get_footer(); ?>
