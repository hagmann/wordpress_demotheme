<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="off-canvas position-right" id="offCanvas" data-off-canvas>

    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>

    <!-- Menu -->
    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'vertical menu')); ?>

</div>

<div class="off-canvas-content" data-off-canvas-content>

    <div class="title-bar">
        <div class="container" style="width:100%;">
            <div class="title-bar-left">
                <div class="main-logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="title-bar-right">
                <nav class="show-for-large">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'menu' => __('Top Bar Menu', 'textdomain'),
                        'menu_class' => 'dropdown menu',
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                        //Recommend setting this to false, but if you need a fallback...
                        'fallback_cb' => 'f6_topbar_menu_fallback',
                        'walker' => new F6_TOPBAR_MENU_WALKER(),
                    )); ?>
                </nav>
                <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
            </div>
        </div>
    </div>


    <div class="container">
        <main>