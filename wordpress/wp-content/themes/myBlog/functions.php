<?php
	// Add menus 
	register_nav_menus(array('menu' => 'Menu superior'));

	// Activate thumbnails
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'slider-thumbs', 470, 300, true );
	add_image_size( 'list-articles-thumbs', 450, 370, true );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$args = array(
		'name'          => 'Sidebar',
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	);

	register_sidebar( $args );

	/**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$args = array(
		'name'          => 'Footer',
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	);

	register_sidebar( $args );


	

?>