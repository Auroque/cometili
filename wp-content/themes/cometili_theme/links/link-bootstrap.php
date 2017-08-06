<?php 

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '../bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '../bootstrap/css/owl.carousel.min.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '../bootstrap/js/bootstrap.min.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '../bootstrap/js/bootstrap.js' );
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '../bootstrap/js/animation.js');
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '../bootstrap/js/owl.carousel.min.js');
	wp_enqueue_script( 'my_custom_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');