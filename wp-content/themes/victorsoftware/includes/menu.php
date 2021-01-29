<?php

function awesome_theme_setup() {
	
	add_theme_support('menus');
	/* Location: It needs to be linked with the dashboard menu*/
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'awesome_theme_setup'); 