<?php

//Register Mune 
function Lhander_setup_theme()
{
  register_nav_menu('main-menu', 'Header Main Menu');
  register_nav_menu('socail-menu', 'Socail Menu');
  register_nav_menu('footer-main-menu', 'Footer Main Menu');

  //Theme Supports 
  add_theme_support('title_tag');
  add_theme_support('custom-logo', [
    'height'               => 150,
    'width'                => 200,
    'flex-height'          => true,
    'flex-width'           => true,
  ]);
  add_theme_support('custom-header', []);
  add_theme_support('editor-font-sizes');
  add_theme_support('custom-background');
  add_theme_support('editor-styles');
  add_theme_support('wp-block-styles');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5');
  add_theme_support('custom-logo', [
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
  ]);
  add_theme_support('post-thumbnails');
  set_post_thumbnail(250, 250, true); //modify for defualt thumbnail size



}
add_action('after_setup_theme', 'Lhander_setup_theme');
function Lhander_enqueue_scripts()
{
  //style Enqueue
  //dir = rtl
  if (is_rtl()) {
    wp_enqueue_style(
      'lhander-main-rtl',
      get_theme_file_uri('assets/css/main-rtl.css'),
      [],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-base-rtl',
      get_theme_file_uri('assets/css/base-rtl.css'),
      [],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-vendor-rtl',
      get_theme_file_uri('assets/css/vendor-rtl.css'),
      ['lhander-main'],
      false,
      'All'
    );
    // dir = ltr
  } else {

    wp_enqueue_style(
      'lhander-base',
      get_theme_file_uri('assets/css/base.css'),
      [],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-style',
      get_theme_file_uri('assets/css/style.css'),
      [],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-main',
      get_theme_file_uri('assets/css/main.css'),
      [],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-vendor',
      get_theme_file_uri('assets/css/vendor.css'),
      ['lhander-main'],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-ionicons',
      get_theme_file_uri('assets/css/ionicons/css/ionicons.min.css'),
      ['lhander-main'],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-micons',
      get_theme_file_uri('assets/css/micons/micons.css'),
      ['lhander-main'],
      false,
      'All'
    );
    wp_enqueue_style(
      'lhander-fonts',
      get_theme_file_uri('assets/css/fonts.css'),
      ['lhander-main'],
      false,
      'All'
    );
  }
  //Enqueue Scripts
  wp_register_script(
    'lhander-modernizr',
    get_theme_file_uri('assets/js/modernizr.js'),
    [],
    false,
    false,
  );
  wp_enqueue_script(
    'lhander-plugins',
    get_theme_file_uri('assets/js/plugins.js'),
    ['lhander-modernizr', 'jquery'],
    false,
    true
  );

  wp_enqueue_script(
    'lhander-jquery-migrate',
    get_theme_file_uri('assets/js/jquery-migrate-1.2.1.min.js'),
    ['lhander-modernizr'],
    false,
    true
  );
  wp_enqueue_script(
    'lhander-main',
    get_theme_file_uri('assets/js/main.js'),
    ['lhander-modernizr'],
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'Lhander_enqueue_scripts');

// make widgets in footer

function Lhander_register_sidebars()
{
  register_sidebar([
    'id'            =>  'featured-section-widget',
    'name'          =>  'Featured widget ',
    'description'   =>  'Featured section widget using it to control of widgets number and content ',
    //  'befor_widget'  =>  '<div class="2%s" id ="1%s" ',
    //  'after_widget'  =>  '</div>',
    //  'befor_title'   =>  '<h5 class="lhander_widgets">',
    //  'after_title'   =>  '</h5>',
  ]);

  register_sidebar([
    'id'            =>  'priceing-section-widget',
    'name'          =>  'Priceing Section Widget',
    'description'   =>  'Priceing Section Widget',
    //  'befor_widget'  =>  '<div  id ="1%s"  class=" 2%s bgrid feature" >',
    //  'after_widget'  =>  '</div>',
    //  'befor_title'   =>  '<h3 class="lhander_widgets">',
    //  'after_title'   =>  '</h3>',
  ]);
  register_sidebar([
    'id'            =>  'lhander-footer-3',
    'name'          =>  'footer widget 3',
    'description'   =>  'Footer Col 3',
    'befor_widget'  =>  '<div class="2%s" id ="1%s" ',
    'after_widget'  =>  '</div>',
    'befor_title'   =>  '<h5 class="lhander_widgets">',
    'after_title'   =>  '</h5>',
  ]);
  register_sidebar([
    'id'            =>  'lhander-footer-4',
    'name'          =>  'footer widget 4',
    'description'   =>  'Footer Col 4',
    'befor_widget'  =>  '<div class="2%s" id ="1%s" ',
    'after_widget'  =>  '</div>',
    'befor_title'   =>  '<h5 class="lhander_widgets">',
    'after_title'   =>  '</h5>',
  ]);
  register_sidebar([
    'id'            =>  'copyright-footer',
    'name'          =>  'copyrigth widget',
    'description'   =>  'CopyRight Widget ',
    'befor_widget'  =>  '<div class="2%s" id ="1%s" ',
    'after_widget'  =>  '</div>',
    'befor_title'   =>  '<h5 class="lhander_widgets">',
    'after_title'   =>  '</h5>',
  ]);
}


add_action('widgets_init', 'Lhander_register_sidebars');

//add theme customizer
require_once __DIR__ . '/inc/theme-customizer.php';

//add footer customizer 
require_once __DIR__ . '/inc/footer-customizer.php';

//add widget 

function Lhander_register_widgets()
{
  include __DIR__ . '/inc/widgets/featured-widget.php';

  register_widget('Featured_Widget'); //args name of class

  //priceing widget
  include __DIR__ . '/inc/widgets/priceing-widget.php';
  register_widget('Priceing_Widget');
}
add_action('widgets_init', 'Lhander_register_widgets');

//custom post type 
include __DIR__ . '/inc/custom-post-type.php';
