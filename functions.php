<?php 


function css_js() {
    
    // Déclarer le fichier CSS à un autre emplacement
    // wp_enqueue_style( 
    //     'style-custom', 
    //     get_template_directory_uri() . '/css/main.css',
        
    // );

    wp_enqueue_style( 
        'style', 
        get_template_directory_uri(),
        
    );
}
add_action( 'wp_enqueue_scripts', 'css_js' );

add_theme_support( 'custom-logo' );
