<?php
	// Add menus 
	register_nav_menus(array('menu' => 'Menu superior'));

	// Activate thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'slider-thumbs', 470, 300, true );
	add_image_size( 'list-articles-thumbs', 450, 370, true );

?>