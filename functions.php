<?php
/**
 * calloways functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BODYSLUG
 */

if ( ! function_exists( 'BODYSLUG_setup' ) ) :
	function calloways_setup() {
		load_theme_textdomain( 'calloways', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'BODYSLUG_setup' );

/**
 * @global int $content_width
 */
function calloways_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'BODYSLUG_content_width', 640 );
}
add_action( 'after_setup_theme', 'BODYSLUG_content_width', 0 );

/**
 * Register widget area.
 */
//Removed - see Constitutional Functions

/**
 * Enqueue scripts and styles.
 */
//Removed - see Constitutional Functions

/**
 * Implement the Custom Header feature.
 */
//Removed - see Constitutional Functions

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//Removed

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//Removed - see Constitutional Functions

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}