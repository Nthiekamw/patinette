<?php 
function css_js() {
    // Enregistrement du style principal
    wp_enqueue_style( 
        'style', 
        get_stylesheet_uri()
    );
    
    // Enregistrement du script pour le menu toggle
    wp_enqueue_script(
        'custom-js', 
        get_template_directory_uri() . '/index.js',
        array('jquery'), // Dépendance de jQuery si nécessaire
        null,
        true // Charger le script dans le footer
    );
}
add_action( 'wp_enqueue_scripts', 'css_js' );

// Support du logo personnalisé
add_theme_support( 'custom-logo' );

// Enregistrement des menus
function trottinette_register_menus() {
    register_nav_menus(array(
        'header' => 'Menu en tête',
    ));
}
add_action('init', 'trottinette_register_menus');
?>