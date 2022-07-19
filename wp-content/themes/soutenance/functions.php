<?php

add_theme_support('custom-logo');

function registerMenus(){
	register_nav_menus( array(
	    'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
	) );
}

add_action( 'after_setup_theme', 'registerMenus', 0 );

function add_theme_css_and_js(){
	wp_enqueue_style('main-css', get_stylesheet_uri());
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js');
	$variables = [
		'ajaxURL' => admin_url('admin-ajax.php')
	];
	wp_localize_script('main-js', 'esgi', $variables);
}
add_action('wp_enqueue_scripts', 'add_theme_css_and_js');
