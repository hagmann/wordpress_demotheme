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





class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu
{
    /*
     * Add vertical menu class and submenu data attribute to sub menus
     */

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
    }
}

//Optional fallback
function f6_topbar_menu_fallback($args)
{
    /*
     * Instantiate new Page Walker class instead of applying a filter to the
     * "wp_page_menu" function in the event there are multiple active menus in theme.
     */

    $walker_page = new Walker_Page();
    $fallback = $walker_page->walk(get_pages(), 0);
    $fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

    echo '<ul class="dropdown menu" data-dropdown-menu>'.$fallback.'</ul>';
}