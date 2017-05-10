<?php 

/**
 * Load our styles.
 */
function ramsen_load_assets() {
	
	// Styles
	wp_enqueue_style( 'bungee-font', 'https://fonts.googleapis.com/css?family=Bungee' );
	wp_enqueue_style( 'ramsen-css', get_stylesheet_uri() );

	// Scripts
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'countdown-js', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'cheet-js', get_template_directory_uri() . '/assets/js/cheet.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'hangman-js', get_template_directory_uri() . '/assets/js/hangman.js', array('jquery'), null, true );
	wp_enqueue_script( 'ramsen-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'ramsen_load_assets' );

/**
 * Register navigation menus
 */
function ramsen_register_menus() {
  
 	register_nav_menu('header-menu', __( 'Main navigation' ));

}
add_action( 'init', 'ramsen_register_menus' );
