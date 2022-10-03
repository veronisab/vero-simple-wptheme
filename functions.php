<?php
if ( ! isset( $content_width ) ) $content_width = 900;

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu' )
	)
);

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
});