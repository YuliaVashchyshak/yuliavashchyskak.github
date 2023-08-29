<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myBanana
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<div class="header__wrapper">
			<div class="header__left">
				<h2><?php bloginfo('name') ?></h2>
				<h3><?php bloginfo('description') ?></h3>
			</div>
			<div class="header__right">
				<?php wp_nav_menu(array('menu_class' => '', 'theme_location'  => 'header_menu',));  ?>

			</div>
		</div>
	</header>