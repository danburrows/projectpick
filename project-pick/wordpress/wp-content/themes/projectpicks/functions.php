<?php

function projectpick_resources() {
    // CSS
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style('uikit', get_stylesheet_directory_uri().'/css/uikit.min.css');
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



function misha_my_load_more_scripts() {
 
    global $wp_query; 
 
    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
 
    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
 
    wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );


// ajax handler //

function misha_loadmore_ajax_handler(){

 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';
 
    // it is always better to use WP_Query but not here
    query_posts( $args );
 
    if( have_posts() ) :
        
 
        // run the loop
        while (have_posts()) : the_post(); ?>
                    <article class="uk-width-1-4@l uk-width-1-2@s post">
                        <a href=""><?php the_post_thumbnail('post-thumbnail', array('class' => 'grid-pic uk-card uk-card-hover uk-card-body')); ?></a>
                    </article>
            <!-- if no posts -->
                <?php endwhile; 
 
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}