<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myBlog</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.slides.min.js"></script>
    <script>
    $(function() {
        $("#slideshow").slidesjs({
            height: 300,
            navigation: false
        })
    });
    </script>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div id="logo">
            <p>myBlog</p>
            <span>by David Ocampo</span>
        </div>
        <nav>
            <?php 
                   /**
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                        'theme_location' => 'menu',
                        'container' => false,
                        'items_wrap' => '<ul id="menu-top">%3$s</ul>'
                    );
                
                    wp_nav_menu( $args );
            ?>
        </nav>
    </header>