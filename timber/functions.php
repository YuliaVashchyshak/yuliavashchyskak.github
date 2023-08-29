<?php


add_action('wp_enqueue_scripts', 'timber_style');

function timber_style()
{

	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/_normalize.css');
	wp_enqueue_style('magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'timber_scripts');
function timber_scripts()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.0.min.js');
	wp_enqueue_script('jquery');
	
	wp_enqueue_script('magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',  '', '', true);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js',  '', '', true);
}


add_action('after_setup_theme', 'theme_register_thumbnails');
function theme_register_thumbnails()
{
    add_theme_support('post-thumbnails', array('post'));
}