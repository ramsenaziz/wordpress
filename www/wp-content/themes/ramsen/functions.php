<?php
/**
 * Theme support
 */
add_theme_support( 'post-thumbnails' ); 

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
	wp_register_script( 'portfolio-js', get_template_directory_uri() . '/assets/js/portfolio.js', array('jquery'), null, true );
	wp_localize_script( 'portfolio-js', 'wpApiSettings', array(
	    'root' => esc_url_raw( rest_url() ),
	    'nonce' => wp_create_nonce( 'wp_rest' )
	) );
	wp_enqueue_script( 'portfolio-js' );
}
add_action( 'wp_enqueue_scripts', 'ramsen_load_assets' );

/**
 * Register navigation menus
 */
function ramsen_register_menus() {
  
 	register_nav_menu('header-menu', __( 'Main navigation' ));

}
add_action( 'init', 'ramsen_register_menus' );

/**
 * Add settings to the Customizer API.
 */
function ramsen_customize_register($wp_customize) {

	$wp_customize->add_section('ramsen_misc_settings', array(
        'title'    => __('Misc settings', 'ramsen'),
        'priority' => 120,
	));

    $wp_customize->add_setting('contact_page', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	 
    $wp_customize->add_control('ramsen_page_contact', array(
        'label'      => 'Contact page',
        'section'    => 'ramsen_misc_settings',
        'type'    => 'dropdown-pages',
        'settings'   => 'contact_page',
    ));

}
add_action( 'customize_register', 'ramsen_customize_register' );

/**
 * Portfolio posttype
 */
require __DIR__ . '/portfolio-posttype.php';

