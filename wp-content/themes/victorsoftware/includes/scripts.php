<?php

function victorsoftware_script_enqueue() {
	// css
	wp_enqueue_style('customsytle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
	// js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('particlesjs', get_template_directory_uri() . '/js/particles.min.js', array(), '2.0.0', true);
	wp_enqueue_script('tagcanvasjs', get_template_directory_uri() . '/js/jquery.tagcanvas.min.js', array(), '2.9.0', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);		
}

add_action( 'wp_enqueue_scripts', 'victorsoftware_script_enqueue');