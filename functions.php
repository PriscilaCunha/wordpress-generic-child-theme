<?php
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
function enqueue_scripts() {
	$parent_style = 'parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
	
	// add custom scripts and styles bellow
	// adicionar scripts e estilos personalizados abaixo
	
}
