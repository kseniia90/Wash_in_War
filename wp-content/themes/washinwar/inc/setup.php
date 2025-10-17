<?php
/**
 * Theme basic setup
 */

if ( ! function_exists( 'washinwar_setup' ) ) {
	function washinwar_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
//		add_theme_support( 'post-thumbnails' );
//		set_post_thumbnail_size( 756, 504 );

//		register_nav_menus(
//			array(
//				'top'     => 'Верхнє меню',
//				'primary' => 'Головне меню',
//			)
//		);

//		add_theme_support(
//			'html5',
//			array(
//				'comment-form',
//				'comment-list',
//				'gallery',
//				'caption',
//				'style',
//				'script',
//				'navigation-widgets',
//			)
//		);

//		add_theme_support(
//			'custom-logo',
//			array(
//				'unlink-homepage-logo' => true,
//			)
//		);

		// Add support for Block Styles.
//		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
//		add_theme_support( 'custom-line-height' );

		// Add support for link color control.
//		add_theme_support( 'link-color' );

		// Add support for experimental cover block spacing.
//		add_theme_support( 'custom-spacing' );

		// Remove feed icon link from legacy RSS widget.
//		add_filter( 'rss_widget_feed_link', '__return_empty_string' );

//		load_theme_textdomain( 'washinwar', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'washinwar_setup' );
