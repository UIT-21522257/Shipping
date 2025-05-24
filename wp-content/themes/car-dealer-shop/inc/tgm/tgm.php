<?php
/**
 * Recommended plugins.
 */
	
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function car_dealer_shop_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Contact Form 7', 'car-dealer-shop' ),
			'slug'             => 'contact-form-7',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	car_dealer_shop_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'car_dealer_shop_register_recommended_plugins' );