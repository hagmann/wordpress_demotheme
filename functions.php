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


function theme_name_scripts()
{
    wp_enqueue_style('style-name', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'theme_name_scripts');

