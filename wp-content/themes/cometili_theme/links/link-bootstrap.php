<?php 

function theme_styles() {

	wp_enqueue_style( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '../bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '../bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'owl_css', get_template_directory_uri() . '../css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl_theme', get_template_directory_uri() . '../css/owl.theme.default.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'materialize_js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '../bootstrap/js/animation.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '../bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'owl', get_template_directory_uri() . '../js/owl.carousel.min', array ( 'jquery' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'theme_js');