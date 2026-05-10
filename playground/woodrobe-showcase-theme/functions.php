<?php
/**
 * WOOdrobe Showcase child theme setup.
 *
 * @package WOOdrobe_Showcase
 */

defined( 'ABSPATH' ) || exit;

/**
 * Add WooCommerce and editor support for the showcase skin.
 *
 * @return void
 */
function woodrobe_showcase_theme_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'woodrobe_showcase_theme_setup' );

/**
 * Enqueue the child skin after plugin block-style CSS so demo framing wins.
 *
 * @return void
 */
function woodrobe_showcase_theme_enqueue_assets() {
	$theme = wp_get_theme();
	$deps  = array();

	if ( wp_style_is( 'woodrobe-styles', 'registered' ) || wp_style_is( 'woodrobe-styles', 'enqueued' ) ) {
		$deps[] = 'woodrobe-styles';
	}

	wp_enqueue_style(
		'woodrobe-showcase-theme',
		get_stylesheet_uri(),
		$deps,
		$theme->get( 'Version' )
	);
}
add_action( 'enqueue_block_assets', 'woodrobe_showcase_theme_enqueue_assets', 100 );
