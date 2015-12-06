<?php

  if ( ! isset( $content_width ) ){
    $content_width = 660;
  }

  function firewood_wp_setup() {

    load_theme_textdomain('firewood', get_template_directory() . '/languages');

    add_theme_support('post-thumbnails');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');

    // register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'firewood' ),
        'footer' => __( 'Footer Menu', 'firewood' ),
    ) );


  }

  add_action('after_setup_theme', 'firewood_wp_setup');


  function rock_scripts(){
    // add styles
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

    // add scripts
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), true);

    if( is_singular()) wp_enqueue_script('comment-reply');

  }

  add_action('wp_enqueue_scripts', 'rock_scripts');

  // read more
  function new_excerpt_more( $more ) {
  	return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');




  /**
   * Register our sidebars and widgetized areas.
   *
   */
  function arphabet_widgets_init() {

  	register_sidebar( array(
  		'name'          => 'Sidebar',
  		'id'            => 'sidebar_blog',
  		'before_widget' => '<div class="sidebar-module col-md-3">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h4>',
  		'after_title'   => '</h4>',
  	) );

  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );


  // ADVANCED CUSTOM FIELDS
  //HEADER
  function phoneHeader(){
      the_field('phone_header');
  }
  function emailHeader(){
      the_field('email_header');
  }
  function addressHeader(){
      the_field('address_header');
  }

  //home
  function bannerImageOne(){
    the_field('banner_image_one');
  }
  function bannerOneTitle(){
    the_field('banner_one_title');
  }
  function bannerOneSubInfo(){
    the_field('banner_one_sub_info');
  }
  function bannerOneLink(){
    the_field('banner_one_link');
  }

  function bannerImageTwo(){
    the_field('banner_image_two');
  }
  function bannerTwoTitle(){
    the_field('banner_two_title');
  }
  function bannerTwoSubInfo(){
    the_field('banner_two_sub_info');
  }
  function bannerTwoLink(){
    the_field('banner_two_link');
  }
  function carouselInterval(){
    the_field('carousel_interval');
  }

  function leftInfoBoxTitle(){
    the_field('left_info_box_title');
  }
  function leftInfoBoxInfo(){
    the_field('left_info_box_info');
  }

  function rightInfoBoxTitle(){
    the_field('right_info_box_title');
  }
  function rightInfoBoxInfo(){
    the_field('right_info_box_info');
  }

  //contact
  function leftInformationBox(){
    the_field('left_information_box');
  }
  function contactRightInfoBoxTitle(){
    the_field('contact_right_info_box_title');
  }
  function contactRightInfoBoxDirections(){
    the_field('contact_right_info_box_directions');
  }
  function contactRightInfoBoxAddressLine1(){
    the_field('contact_right_info_box_address_line_1');
  }
  function contactRightInfoBoxAddressLine2(){
    the_field('contact_right_info_box_address_line_2');
  }
  function rightInfoBoxPhone(){
    the_field('right_info_box_phone');
  }
  function rightInfoBoxEmail(){
    the_field('right_info_box_email');
  }

  //about us
  function aboutLeftInfoBoxTitle(){
    the_field('about_left_info_box_title');
  }
  function aboutLeftInfoBoxInfo(){
    the_field('about_left_info_box_info');
  }
  function aboutLeftInfoBoxSubTitle(){
    the_field('about_left_info_box_sub_title');
  }
  function aboutRightInfoBoxTitle(){
    the_field('about_right_info_box_title');
  }
  function aboutRightInfoBoxInfo(){
    the_field('about_right_info_box_info');
  }
  function aboutRightInfoBoxWarning(){
    the_field('about_right_info_box_warning');
  }

  //products
  function productsIntro(){
    the_field('products_info');
  }
  function contentTitle(){
    the_field('content_title');
  }
  function subTitle(){
    the_field('sub_title');
  }
  function subInfo(){
    the_field('sub_info');
  }

  //footer information
  function footerInfo(){
    the_field('footer_info');
  }



  function featureText(){

    if ( is_front_page() ){
      the_field('feature_text');
    } elseif ( is_home() || is_single() ) {
      _e('Rock Theme Official Blog');
    } elseif( is_archive() ){
      _e('Rock Theme Official Blog');
      _e('<br>');
      single_term_title('Browsing: ');
      if( is_month() ){
        $monthNum = get_query_var('monthnum');
        $month = date('F', mktime(0,0,0,$monthNum));
        $year = get_query_var('year');

        echo 'Posts from ' . $month . ' ' . $year;
      }
    } elseif(is_page_template('page-news.php') || is_page_template('page-about.php') || is_page_template('page-contact.php')){
      bloginfo('name');
      _e('<br>');
      the_title();
    } elseif( is_404() ){
      _e('Whoops, were a little lost.');
    } elseif ( is_search() ) {
      _e('Rock Theme Official Blog');
      _e('<br>');
      printf(('Search results for: %s'), get_search_query());
    }
  }



  $args = array(
  	// 'width'         => 980,
  	// 'height'        => 60,
  	'default-image' => get_template_directory_uri() . '/images/lakebg.jpg',
    'uploads' => true,
  );
  add_theme_support( 'custom-header', $args );

?>
