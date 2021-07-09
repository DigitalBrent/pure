<?php
/**
 * Functions and definitions.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 /**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Register navigation menus.
 */

function set_menu_locations() {

	$locations = array(
		'primary'  => __( 'Primary Navigation', 'pure' ),
		'mobile'   => __( 'Mobile Navigation', 'pure' ),
		'footer'   => __( 'Footer Navigation', 'pure' ),
		'social'   => __( 'Social Menu', 'pure' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'set_menu_locations' );

/**
 * Get rid of WP's superfluous menu item id and classes.
 */

function clear_item_id($id, $item, $args) {
    return "";
}

function clear_item_class($classes, $item, $args) {
    return array();
}

add_filter('nav_menu_item_id', 'clear_item_id', 10, 3);
add_filter('nav_menu_css_class', 'clear_item_class', 10, 3);

/**
 * Gutenberg configuration.
 */

 require get_template_directory() . '/inc/block-editor-config.php';