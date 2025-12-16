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


?>