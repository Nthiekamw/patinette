<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>patinette</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
     <header>
     <div class="logo">
    
        <img src="logo.JPG" alt="">
        <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
        
        ?>
        <span>TrottiGo</span>
    </div>
        <nav class="navbar">

            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>


    </header>
</body>
</html>