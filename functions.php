<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

function theme_enqueue_styles() {
	wp_enqueue_style( 'shopkeeper-parent-stylesheet', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );