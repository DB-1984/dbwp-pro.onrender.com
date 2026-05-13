<?php

function theme_files()
{
  wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('blackops', '//fonts.googleapis.com/css2?family=Black+Ops+One&display=swap');
  wp_enqueue_style('manrope', '//fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');
  wp_enqueue_style('main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('extra_styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '5.0.0-beta1', 'all');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0-beta1', true);
  /* FOR LIVE
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery', 'popper-js'), null, true);
  */
}
add_action('wp_enqueue_scripts', 'theme_files');

function features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'features');

include 'inc/wpmail-callback.php';
include 'inc/wpmail-rest-route.php';

function custom_single_template($template)
{
  if (is_singular('post')) {
    $post_id = get_queried_object_id();

    if ($post_id === 48) {
      $alternative_template = locate_template(array('single-api.php'));

      if (!empty($alternative_template)) {
        return $alternative_template;
      }
    }
  }

  return $template;
}
add_filter('template_include', 'custom_single_template');
