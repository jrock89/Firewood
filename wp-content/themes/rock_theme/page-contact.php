
<?php
/**
* Template Name: Contact Us
*/

get_header(); ?>



<!-- contact US SECTION -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2><?php the_title(); ?></h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" />
      </div>
      <!-- end diver col -->
    </div>

    <div class="row">
        <div class="col-sm-6 address well">
          <address class="">
            <i class="fa fa-map-marker"></i> Rock Theme<br>
            501 Union Ave<br>
            Saratoga Springs, Ny 12866
          </address>

          <i class="fa fa-envelope-o"></i>Email: Email@mail.com<br>
          <i class="fa fa-phone"></i>Telephone: 555.555.5555
        </div>
        <div class="col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.0501744059543!2d-73.72962708452138!3d43.061412279145955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89de3a15acca49a3%3A0x2fd20978c20a035e!2s501+Union+Ave%2C+Saratoga+Springs%2C+NY+12866!5e0!3m2!1sen!2sus!4v1448514033022" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <!-- end diver row -->
    <div class="row message-area">
        <div class="col-sm-12">
          <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]'); ?>
        </div>
    </div>

  </div>
  <!-- end diveder container -->
</section>



<?php get_footer(); ?>
