<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>

    <!-- Close button -->
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>

    <!-- Menu -->
    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'vertical menu')); ?>

</div>

<div class="off-canvas-content" data-off-canvas-content>
    <!-- Your page content lives here -->
    <div class="title-bar show-for-small-only">
        <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="offCanvas"></button>
            <?php the_custom_logo(); ?>
        </div>
    </div>

    <header class="show-for-medium">
        <div class="container">
            <div class="main-logo">
                <?php the_custom_logo(); ?>
            </div>

            <nav>
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </nav>
        </div>
    </header>


    <div class="container">

        <main>
