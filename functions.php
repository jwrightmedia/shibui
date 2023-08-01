<?php
/**
 * bodyslug functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bodyslug
 */

 function bodyslug_setup() {
	load_theme_textdomain( 'empty', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
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
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'bodyslug_setup' );

/**
 * @global int $content_width
 */
function bodyslug_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bodyslug_content_width', 640 );
}
add_action( 'after_setup_theme', 'bodyslug_content_width', 0 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
