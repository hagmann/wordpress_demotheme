<?php

function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', 'register_my_menu');


function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 140,
        'flex-height' => false,
        'flex‐width' => true,
    ));
}

add_action('after_setup_theme', 'theme_setup');


function register_styles()
{
    wp_enqueue_style('style-name', get_stylesheet_uri());
    wp_enqueue_style(' foundation', get_stylesheet_directory_uri() . '/css/foundation.css');

}

add_action('wp_enqueue_scripts', 'register_styles');



function register_scripts() {
    wp_register_script('jquery-js', get_template_directory_uri() . '/js/vendor/jquery.js', null, null, true );
    wp_register_script('foundation-js', get_template_directory_uri() . '/js/vendor/foundation.js', array('jquery'), null, true );
    wp_register_script('app-js', get_template_directory_uri() . '/js/app.js', array('jquery'), null, true );

    wp_enqueue_script('jquery-js');
    wp_enqueue_script('foundation-js');
    wp_enqueue_script('app-js');
}
add_action( 'wp_enqueue_scripts', 'register_scripts');
