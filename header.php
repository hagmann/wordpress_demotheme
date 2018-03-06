<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>

<header>
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