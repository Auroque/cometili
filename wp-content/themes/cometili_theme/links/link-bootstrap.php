<?php 

function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '../bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '../bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '../bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '../bootstrap/js/bootstrap.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '../bootstrap/js/animation.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '../js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'my_custom_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js', array ( 'jquery' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'theme_js');