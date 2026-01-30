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

//menu registration
function theme_menu_registration()
{
    register_nav_menus([
        'main_menu' => 'Основное меню',
        'sub_menu' => 'Второстепенное меню',
    ]);
}

add_action('after_setup_theme', 'theme_menu_registration');

// menu rendering
function theme_menu_rendering($location)
{
    wp_nav_menu([
        'theme_location'  => $location,
        'container'       => false,
        'echo'            => true,
        'items_wrap'      => '%3$s',
        'depth'           => 1,
    ]);
}

//add classes to links in Menues
add_filter('nav_menu_link_attributes', 'filter_add_classes_nav_menu_links', 10, 3);

function filter_add_classes_nav_menu_links($atts, $item, $args)
{
    $atts['class'] = 'title-font-style';
    if ($args->theme_location === 'main_menu') {
        $atts['class'] = 'header__menu_link title-font-style';
    } elseif ($args->theme_location === 'sub_menu') {
        $atts['class'] = 'header__submenu_link submenu-font-style';
    }

    return $atts;
}
