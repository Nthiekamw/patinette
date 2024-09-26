<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="logo">
            <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            <span><?php bloginfo('name'); ?></span>
        </div>

        <!-- Bouton toggle pour le menu -->
        <button id="menu-toggle">☰</button>

        <nav id="site-navigation" class="navbar">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'nav__links',
            ));
            ?>
        </nav>
    </header>