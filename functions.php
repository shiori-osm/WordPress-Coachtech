<?php
function twpp_enqueue_styles(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
  if (is_single()) {
    wp_enqueue_style('single', get_template_directory_uri() . '/single.css');
  }
  if (is_category()) {
    wp_enqueue_style('single', get_template_directory_uri() . '/category.css');
  }
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');

// ↓画像のwidth100%を指定するためのfunction
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/','',$html);
  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i',' ', $html);
  return $html;
}
