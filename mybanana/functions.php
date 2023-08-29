<?php

/**
 * myBanana functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myBanana
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mybanana_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on myBanana, use a find and replace
		* to change 'mybanana' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('mybanana', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'mybanana'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mybanana_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'mybanana_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mybanana_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mybanana_content_width', 640);
}
add_action('after_setup_theme', 'mybanana_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mybanana_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mybanana'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mybanana'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mybanana_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mybanana_scripts()
{
	wp_enqueue_style('mybanana-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('mybanana-style', 'rtl', 'replace');

	wp_enqueue_script('mybanana-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'mybanana_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}




//== start disable admin bar ==//
add_filter('show_admin_bar', '__return_false');
//== end disable admin bar ==//

//== start add styles ==//
add_action('wp_enqueue_scripts', 'myBanana_style');
function myBanana_style()
{
	wp_enqueue_style('normalize-style', get_template_directory_uri() . '/app/css/_normalize.css');
	wp_enqueue_style('slick-style', get_template_directory_uri() . '/app/css/_slick.css');
	wp_enqueue_style('my-style', get_template_directory_uri() . '/app/css/style.css');
	wp_enqueue_style('contact-style', get_template_directory_uri() . '/app/css/contact.css');
	wp_enqueue_style('global-style', get_template_directory_uri() . '/app/css/global.css');
	wp_enqueue_style('media-style', get_template_directory_uri() . '/app/css/media.css');
	wp_enqueue_style('blog-style', get_template_directory_uri() . '/app/css/template-blog.css');
	wp_enqueue_style('single-blog-style', get_template_directory_uri() . '/app/css/single.css');
	wp_enqueue_style('single-reviews-style', get_template_directory_uri() . '/app/css/single-reviews.css');
	wp_enqueue_style('main-style', get_stylesheet_uri());
}
//== end add styles ==//


//== start add scripts ==//
add_action('wp_enqueue_scripts', 'myBanana_script');
function myBanana_script()
{
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('slick-script', get_template_directory_uri() . '/app/js/slick.min.js',  array(), '', true);
	wp_enqueue_script('main-script', get_template_directory_uri() . '/app/js/main.js',  array('jquery'), '', true);
}
//== end add scripts ==//

//== start register menu ==//
add_theme_support('menus');
register_nav_menus(array(
	'header_menu'    => 'Header menu',
));
//== end register menu ==//

//== start change image for posts ==//
add_action('after_setup_theme', 'image_for_post');
function image_for_post()
{
	add_image_size('post', 245, 160, false);
};
//== end change image for posts ==//


add_action('wp_ajax_get_calc', 'get_calc');
add_action('wp_ajax_nopriv_get_calc', 'get_calc');


function get_calc()
{
	$firstValue = $_POST['firstValue'];
	$secondValue = $_POST['secondValue'];
	$args = array();
	$category_id = '';
	$summa = $firstValue + $secondValue;

	if (!$firstValue || !$secondValue) {
		echo json_encode(array(
			'code'          => 400,
			'message' => 'Ви ввели некоректні дані!',
		));
		$args = array(
			'post_title' => 'Null',
			'post_content' => 'Упс, помилка!',
			'post_status' => 'publish',

		);
		$category_id = get_category_by_slug('fail')->term_id;
	}

	if ($firstValue && $secondValue) {
		echo json_encode(array(
			'code'          => 200,
			'result'            => $summa,

		));
		$args = array(
			'post_title' => $summa,
			'post_content' => 'Усе вірно!',
			'post_status' => 'publish',

		);
		$category_id = get_category_by_slug('success')->term_id;

	}
	$post_id = wp_insert_post($args);
	if ($category_id) {
		wp_set_post_categories($post_id, array($category_id));
	}

	die;
}

add_action('wp_ajax_get_posts_refresh', 'get_posts_refresh');
add_action('wp_ajax_nopriv_get_posts_refresh', 'get_posts_refresh');
function get_posts_refresh()
{
	$search = $_POST['search'];

	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 10,
	);

	if ($search) {
        $args['s'] = $search;
    }

	$query = new WP_Query($args);
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			get_template_part('/template-parts/content');
		}
		wp_reset_postdata();
	}
	die;
}

add_action('wp_ajax_delete_post', 'delete_post');
add_action('wp_ajax_nopriv_delete_post', 'delete_post');
function delete_post()
{
	$postId = $_POST['id'];
	wp_delete_post($postId);
}



// start load more 
function load_posts()
{
	$search = $_POST['search'];

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;
	if ($search) {
        $args['s'] = $search;
    }

    $mypost_Query = new WP_Query($args);
    if ($mypost_Query->have_posts()) {

        while ($mypost_Query->have_posts()) {
            $mypost_Query->the_post();

            get_template_part('/template-parts/content');
        }
        wp_reset_postdata();
    }
    die;
}
add_action('wp_ajax_loadmore', 'load_posts');
add_action('wp_ajax_nopriv_loadmore', 'load_posts');
// end load more 

