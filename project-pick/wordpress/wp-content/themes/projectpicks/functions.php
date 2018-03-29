<?php

function projectpick_resources() {
    // CSS
    wp_enqueue_style('style', get_stylesheet_directory_uri().'style.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri().'/css/uikit.min.css');
    wp_enqueue_style('over', get_stylesheet_directory_uri().'/css/over.css');

    // Javascript
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');
    wp_enqueue_script('uikit', get_stylesheet_directory_uri().'/js/uikit.min.js' );
    wp_enqueue_script('uikit-icons', get_stylesheet_directory_uri().'/js/uikit-icons.min.js' );
}

add_action('wp_enqueue_scripts', 'projectpick_resources')

?>

<?php

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

// add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

// function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
//     $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
//     return $html;
// }


add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


?>