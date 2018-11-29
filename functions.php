<?php
/**
 * Enqueue scripts and styles.
 */
function hitwp_scripts() {
//	wp_enqueue_style( 'hitwp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Montserrat:500,600,700|Lato:400,600|Raleway:400,500,600' );
	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' );
	wp_enqueue_style( 'hitwp-main', get_template_directory_uri() . '/assets/css/styles.css' );
	wp_enqueue_script( 'hitwp-vendor-js', get_template_directory_uri() . '/assets/js/vendor.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'hitwp-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery', 'hitwp-vendor-js' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'hitwp_scripts' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'hitwp' ),
	'footer' => esc_html__( 'Footer', 'hitwp' ),
) );

// Enable SVG upload
function hitwp_cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'hitwp_cc_mime_types');
