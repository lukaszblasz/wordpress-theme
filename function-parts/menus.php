<?php

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function menus() {

	$locations = array(
    'primary'  => __( 'Desktop Horizontal Menu'),
    'footer'  => __( 'Footer Links'),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'menus' );