<?php

//== start add styles ==//
add_action('wp_enqueue_scripts', 'umbrella_style');
function umbrella_style()
{
	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/_normalize.css');
	wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/css/_slick.css');
	wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css');
	wp_enqueue_style('global-style', get_template_directory_uri() . '/assets/css/global.css');
	wp_enqueue_style('media-style', get_template_directory_uri() . '/assets/css/media.css');
	wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/css/template-blog.css');
	wp_enqueue_style('single-blog-style', get_template_directory_uri() . '/assets/css/single-blog.css');
	wp_enqueue_style('single-reviews-style', get_template_directory_uri() . '/assets/css/single-reviews.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
}
//== end add styles ==//


//== start add scripts ==//
add_action('wp_enqueue_scripts', 'umbrella_scripts');
function umbrella_scripts()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('slick-script', get_template_directory_uri() . '/assets/js/slick.min.js',  array(), '', true);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js',  array(), '', true);
}
//== end add scripts ==//


//== start disable admin bar ==//
add_filter('show_admin_bar', '__return_false');
//== end disable admin bar ==//


//== start register menu ==//
add_theme_support('menus');
register_nav_menus(array(
	'header_menu'    => 'Header menu',
));
//== end register menu ==//


// start add logo
add_theme_support('custom-logo');
// end add logo

//== start add image for posts ==//
add_action('after_setup_theme', 'theme_register_thumbnails');
function theme_register_thumbnails()
{ add_theme_support('post-thumbnails', array('post', 'reviews'));}
//== end add image for posts ==//

//== start add custom post type ==//
add_action('init', 'reviews_posttype');
function reviews_posttype()
{
    register_post_type(
        'reviews',
        array(
            'labels' => array(
                'name' => __('Reviews', 'textdomain'),
                'singular_name' => __('Reviews', 'textdomain'),
                'add_new_item'  => __('New Review', 'textdomain'),
                'view_item'     => __('View Review', 'textdomain')
            ),
            'public'        => true,
            'has_archive'  => true,
            'hierarchical' => true,
            'supports' => array('title', 'author', 'page-attributes', 'thumbnail', 'editor'),
            'rewrite'  => array('slug' => 'reviews'),
        )
    );
}
//== end add custom post type ==//