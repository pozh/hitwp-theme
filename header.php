<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HitWP
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="nav nav_dark" id="nav">
    <div class="container">
        <a href="/" class="logo"><span class="d-none">HitWP</span></a>
        <div class="nav__burger">[|]</div>
        <?php
        wp_nav_menu(array(
	        'theme_location' => 'primary',
	        'menu_id' => 'primary-menu',
	        'depth' => 1,
	        'container' => 'div',
	        'container_class' => 'navbar-collapse collapse',
	        'container_id' => 'primary-collapse',
	        'menu_class' => 'nav__main'
        ));
        ?>
    </div>
</nav>
