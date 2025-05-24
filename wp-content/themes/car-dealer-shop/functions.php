<?php
/**
 * Car Dealer Shop functions and definitions
 *
 * @package car_dealer_shop
 * @since 1.0
 */

if ( ! function_exists( 'car_dealer_shop_support' ) ) :
	function car_dealer_shop_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'car_dealer_shop_support' );

if ( ! function_exists( 'car_dealer_shop_styles' ) ) :
	function car_dealer_shop_styles() {
		// Register theme stylesheet.
		$car_dealer_shop_theme_version = wp_get_theme()->get( 'Version' );

		$car_dealer_shop_version_string = is_string( $car_dealer_shop_theme_version ) ? $car_dealer_shop_theme_version : false;
		wp_enqueue_style(
			'car-dealer-shop-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$car_dealer_shop_version_string
		);

		wp_enqueue_style( 'dashicons' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'car_dealer_shop_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';