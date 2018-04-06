<?php
  // Regiester Nav Walker class_alias
  require_once 'wp-bootstrap-navwalker.php';

  // Theme Support
  function wpb_theme_setup()
  {
      // Nav Menus
      register_nav_menus(array(
      'primary' => __('Primary Menu'),
    ));
  }

  add_action('after_setup_theme', 'wpb_theme_setup');

    function vp_theme_stylesheets()
    {
        wp_register_style('bootstrap-grid-min', get_template_directory_uri().'/app/css/bootstrap-grid.min.css', array(), null, 'all');
        wp_register_style('normalize', get_template_directory_uri().'/app/css/normalize.css', array(), null, 'all');
        wp_register_style('main', get_template_directory_uri().'/app/css/main.css', array(), null, 'all');
        wp_register_style('styles', get_template_directory_uri().'/app/css/style.css', array(), null, 'all');
        wp_register_style('form', get_template_directory_uri().'/app/css/form.css', array(), null, 'all');
        wp_register_style('vp-style', get_stylesheet_uri(), '', null, 'all');
        wp_enqueue_style('form');
        wp_enqueue_style('bootstrap-grid-min');
        wp_enqueue_style('normalize');
        wp_enqueue_style('main');
        wp_enqueue_style('styles');
    }

    add_action('wp_enqueue_scripts', 'vp_theme_stylesheets');

    function enqueue_theme_js()
    {
        wp_enqueue_script('wufoo', get_template_directory_uri().'/app/js/wufoo.js');
        wp_enqueue_script('app', get_template_directory_uri().'/app/js/app.js');
    }

    add_action('wp_enqueue_scripts', 'enqueue_theme_js');

    function wpb_init_widgets($id)
    {
        register_sidebar(array(
        'name' => 'Box1',
        'id' => 'box1',
        'before_widget' => '<div class="services-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets');

      function wpb_init_widgets2($id)
      {
          register_sidebar(array(
        'name' => 'Box2',
        'id' => 'box2',
        'before_widget' => '<div class="services-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="services-title">',
        'after_title' => '</h3>',
      ));
      }

    add_action('widgets_init', 'wpb_init_widgets2');

      function wpb_init_widgets3($id)
      {
          register_sidebar(array(
        'name' => 'Box3',
        'id' => 'box3',
        'before_widget' => '<div class="masthead-title">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
      ));
      }

    add_action('widgets_init', 'wpb_init_widgets3');

    function wpb_init_widgets4($id)
    {
        register_sidebar(array(
        'name' => 'Box4',
        'id' => 'Box4',
        'before_widget' => '<div class="about-section__content">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
      ));
    }

    add_action('widgets_init', 'wpb_init_widgets4');

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');

    // Custom Image Sizes

    add_action('after_setup_theme', 'vp_theme_setup');

function vp_theme_setup()
{
    add_image_size('content_thumb', 450, 450);
    add_image_size('services_page_image_size', 561);
}

// Our custom post type function
function create_posttype()
{
    register_post_type('gallery',
  // CPT Options
      array(
          'labels' => array(
              'name' => __('Galleries'),
              'singular_name' => __('Gallery'),
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'gallery'),
      )
  );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' => 'Theme Options',
      'menu_title' => 'Theme Options',
      'menu_slug' => 'theme-options',
      'icon_url' => 'dashicons-id', // Add this line and replace the second inverted commas with class of the icon you like
      'capability' => 'edit_posts',
      'redirect' => false,
    ));
}
