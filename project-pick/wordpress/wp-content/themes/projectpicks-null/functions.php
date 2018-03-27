<?php 

function projectpick_resources() {

	wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/css/style.css' );

}

add_action('wp_enqueue_scripts', 'projectpick_resources')


?>

<?php

	if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(150,150);
  
} ?>
