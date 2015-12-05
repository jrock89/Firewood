
<?php
/**
* Template Name: Contact Us
*/

get_header(); ?>



<!-- contact US SECTION -->
<section id="contact">
  <div class="container">



    <div class="page_title">
      <div class="col-xs-12">
        <h1>Contact Us</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p>
          <?php leftInformationBox(); ?>
        </p>
        <div style="text-align:left !important; margin-bottom:20px;" class="fb-share-button" data-href="https://www.facebook.com/Seasoned-Gourmet-Firewood-Exit15Ncom-244088545674817/" data-layout="button_count"></div>
      </div>
        <div class="col-sm-6 address">
          <strong><?php contactRightInfoBoxTitle(); ?></strong>
          <br>
          <?php contactRightInfoBoxDirections(); ?>
          <br>
          <?php contactRightInfoBoxAddressLine1(); ?>
          <br>
          <?php contactRightInfoBoxAddressLine2(); ?>
          <br>
          <a href="tel:<?php rightInfoBoxPhone(); ?>"><i class="fa fa-phone"></i> <?php rightInfoBoxPhone(); ?></a>
          <br>
          <a href="mailto:<?php rightInfoBoxEmail(); ?>"><i class="fa fa-envelope-o"></i> <?php rightInfoBoxEmail(); ?></a>

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
