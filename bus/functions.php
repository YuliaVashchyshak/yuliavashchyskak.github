<?php

//== start add styles ==//
add_action('wp_enqueue_scripts', 'bus_style');
function bus_style()
{
    wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/_normalize.css');
    wp_enqueue_style('global-style', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('media-style', get_template_directory_uri() . '/assets/css/media.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
//== end add styles ==//


//== start add scripts ==//
add_action('wp_enqueue_scripts', 'bus_scripts');
function bus_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js',  array(), '', true);
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




if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}