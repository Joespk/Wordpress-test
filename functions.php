<?php
/**
 * Apparel Ecommerce Store functions and definitions
 *
 * @package apparel_ecommerce_store
 * @since 1.0
 */

if ( ! function_exists( 'apparel_ecommerce_store_support' ) ) :
	function apparel_ecommerce_store_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'apparel_ecommerce_store_support' );

if ( ! function_exists( 'apparel_ecommerce_store_styles' ) ) :
	function apparel_ecommerce_store_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'apparel-ecommerce-store-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'apparel_ecommerce_store_styles' );

/* Enqueue Js and Css */
function apparel_ecommerce_store_scripts() {
	wp_enqueue_script( 'apparel-ecommerce-store-jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );
	wp_enqueue_style( 'apparel-ecommerce-store-animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );
}
add_action( 'wp_enqueue_scripts', 'apparel_ecommerce_store_scripts' );


/* Theme Credit link */
define('APPAREL_ECOMMERCE_STORE_BUY_NOW',__('https://www.cretathemes.com/gutenberg/apparel-wordpress-theme/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_PRO_DEMO',__('https://www.cretathemes.com/preview/apparel-ecommerce-store/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_THEME_DOC',__('https://www.cretathemes.com/pro-guide/apparel-ecommerce-store-pro/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_SUPPORT',__('https://wordpress.org/support/theme/apparel-ecommerce-store/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_REVIEW',__('https://wordpress.org/support/theme/apparel-ecommerce-store/reviews/#new-post','apparel-ecommerce-store'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';