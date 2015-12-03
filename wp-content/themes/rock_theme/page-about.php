
<?php
/**
* Template Name: About Us
*/

get_header(); ?>




<!-- ABOUT US SECTION -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2>About Us</h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/divider-purple.png" alt="divider" />
      </div>
      <!-- end diver col -->
    </div>

    <div class="row">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt molestie cursus. In non neque ut purus accumsan scelerisque. Morbi eu congue urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu nisl congue, gravida turpis et, accumsan turpis. Nullam tincidunt eleifend finibus. Nullam interdum tempor nibh eu scelerisque. Maecenas nec sagittis tellus. In blandit metus erat, ac elementum velit laoreet eget. Maecenas aliquet eget odio vitae imperdiet.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt molestie cursus. In non neque ut purus accumsan scelerisque. Morbi eu congue urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu nisl congue, gravida turpis et, accumsan turpis. Nullam tincidunt eleifend finibus. Nullam interdum tempor nibh eu scelerisque. Maecenas nec sagittis tellus. In blandit metus erat, ac elementum velit laoreet eget. Maecenas aliquet eget odio vitae imperdiet.
      </p>
    </div>

    <!-- end diver row -->
    <?php get_template_part('content-facilities'); ?>

  </div>
  <!-- end diveder container -->
</section>








<?php get_footer(); ?>
