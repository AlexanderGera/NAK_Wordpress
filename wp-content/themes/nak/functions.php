<?php


add_action('wp_enqueue_scripts', 'nak_styles_connection');
add_action('wp_enqueue_scripts', 'nak_scripts_connection');

function nak_styles_connection()
{
    wp_enqueue_style('nak_styles', get_stylesheet_uri());
}

function nak_scripts_connection()
{
    wp_enqueue_script('nak_scripts', get_stylesheet_directory_uri() . '/assets/script/script.js', array(), null, true);
}


// //activate standard Custom Fields
// add_filter('acf/settings/remove_wp_meta_box', '__return_false');

//preview pictures for posts
add_theme_support('post-thumbnails');

//new picture size for posts preview (thumbnails)
//news
add_image_size('news-thumbnails', 415, 277, true);

//annoncements
add_image_size('annoncements-thumbnails', 150, 100, true);

//video-preview
add_image_size('video-thumbnails', 325, 186, true);


?>