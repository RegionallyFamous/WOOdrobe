<?php
/**
 * Plugin Name: WOOdrobe
 * Description: A wardrobe of block-style outfits for WooCommerce blocks — pill switches, sidebar tabs, magazine mastheads, bento grids, field notebooks, and more. Multi-block by design.
 * Version:     1.0.0
 * Author:      Gumshoe
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: woodrobe
 * Domain Path: /languages
 * Requires at least: 6.4
 * Tested up to: 6.9
 * Requires PHP: 7.4
 * Requires Plugins: woocommerce
 *
 * @package WOOdrobe
 */

defined( 'ABSPATH' ) || exit;

define( 'WOODROBE_PLUGIN_FILE', __FILE__ );
define( 'WOODROBE_PLUGIN_DIR',  plugin_dir_path( __FILE__ ) );
define( 'WOODROBE_PLUGIN_URL',  plugin_dir_url( __FILE__ ) );
define( 'WOODROBE_VERSION',     '1.0.0' );

/**
 * The full block-styles wardrobe, keyed by block name.
 *
 * Each entry is a list of style descriptors that become block styles on the
 * given block. Add new blocks here and ship matching CSS in assets/styles.css
 * under a "BLOCK: <slug>" section header.
 *
 * @return array<string, array<int, array{slug:string,label:string}>>
 */
function woodrobe_block_styles() {
	return array(
		'woocommerce/product-details' => array(
			array( 'slug' => 'pill-switch',         'label' => __( 'Pill Switch',           'woodrobe' ) ),
			array( 'slug' => 'sidebar-tabs',        'label' => __( 'Sidebar Tabs',          'woodrobe' ) ),
			array( 'slug' => 'accordion-stack',     'label' => __( 'Accordion Stack',       'woodrobe' ) ),
			array( 'slug' => 'card-tabs',           'label' => __( 'Card Tabs',             'woodrobe' ) ),
			array( 'slug' => 'numbered-index',      'label' => __( 'Numbered Index',        'woodrobe' ) ),
			array( 'slug' => 'underline-slide',     'label' => __( 'Underline Slide',       'woodrobe' ) ),
			array( 'slug' => 'chips',               'label' => __( 'Chips',                 'woodrobe' ) ),
			array( 'slug' => 'bottom-tabs',         'label' => __( 'Bottom Tabs',           'woodrobe' ) ),
			array( 'slug' => 'magazine-masthead',   'label' => __( 'Magazine Masthead',     'woodrobe' ) ),
			array( 'slug' => 'brutalist',           'label' => __( 'Brutalist',             'woodrobe' ) ),
			array( 'slug' => 'soft-cards',          'label' => __( 'Soft Cards',            'woodrobe' ) ),
			array( 'slug' => 'preview-strip',       'label' => __( 'Preview Strip',         'woodrobe' ) ),
			array( 'slug' => 'always-on-story',     'label' => __( 'Always-on Story',       'woodrobe' ) ),
			array( 'slug' => 'description-first',   'label' => __( 'Description First',     'woodrobe' ) ),
			array( 'slug' => 'qa-format',           'label' => __( 'Q&A Format',            'woodrobe' ) ),
			array( 'slug' => 'reading-view',        'label' => __( 'Reading View',          'woodrobe' ) ),
			array( 'slug' => 'progressive',         'label' => __( 'Progressive Disclosure','woodrobe' ) ),
			array( 'slug' => 'filmstrip',           'label' => __( 'Filmstrip',             'woodrobe' ) ),
			array( 'slug' => 'spec-sheet',          'label' => __( 'Spec Sheet',            'woodrobe' ) ),
			array( 'slug' => 'marginalia',          'label' => __( 'Marginalia',            'woodrobe' ) ),
			array( 'slug' => 'bento',               'label' => __( 'Bento Grid',            'woodrobe' ) ),
			array( 'slug' => 'newspaper',           'label' => __( 'Newspaper',             'woodrobe' ) ),
			array( 'slug' => 'map-pins',            'label' => __( 'Map Pins',              'woodrobe' ) ),
			array( 'slug' => 'field-notebook',      'label' => __( 'Field Notebook',        'woodrobe' ) ),
			array( 'slug' => 'stat-block',          'label' => __( 'Stat Block',            'woodrobe' ) ),
		),

		// Add more blocks here as styles ship for them. Examples:
		// 'woocommerce/cart'                   => array(),
		// 'woocommerce/checkout'               => array(),
		// 'woocommerce/mini-cart'              => array(),
		// 'woocommerce/product-image-gallery'  => array(),
		// 'woocommerce/product-collection'     => array(),
		// 'woocommerce/product-rating'         => array(),
		// 'woocommerce/related-products'       => array(),
		// 'woocommerce/product-reviews'        => array(),
		// 'woocommerce/customer-account'       => array(),
		// 'woocommerce/store-notices'          => array(),
	);
}

/**
 * Register stylesheet handle and every block style in the wardrobe.
 *
 * Styles for every block share one stylesheet so cascading tokens work and
 * the request count stays at 1. CSS loads via enqueue_block_assets so it
 * reaches the Site Editor iframe and the front end consistently.
 */
function woodrobe_register_block_styles() {
	if ( ! class_exists( 'WooCommerce' ) || ! function_exists( 'register_block_style' ) ) {
		return;
	}

	wp_register_style(
		'woodrobe-styles',
		plugins_url( 'assets/styles.css', WOODROBE_PLUGIN_FILE ),
		array(),
		woodrobe_style_version()
	);

	foreach ( woodrobe_block_styles() as $block_name => $styles ) {
		foreach ( $styles as $style ) {
			register_block_style(
				$block_name,
				array(
					'name'         => $style['slug'],
					'label'        => $style['label'],
					'style_handle' => 'woodrobe-styles',
				)
			);
		}
	}
}
add_action( 'init', 'woodrobe_register_block_styles' );

/**
 * Cache-busting version derived from the stylesheet's mtime.
 */
function woodrobe_style_version() {
	$style_path = WOODROBE_PLUGIN_DIR . 'assets/styles.css';
	return file_exists( $style_path ) ? (string) filemtime( $style_path ) : WOODROBE_VERSION;
}

/**
 * Force-enqueue styles in both the front-end and the Site Editor iframe.
 *
 * register_block_style's style_handle loads on render, but doesn't reliably
 * reach the editor iframe. enqueue_block_assets fires for both contexts.
 */
function woodrobe_enqueue_block_assets() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}
	wp_enqueue_style(
		'woodrobe-styles',
		plugins_url( 'assets/styles.css', WOODROBE_PLUGIN_FILE ),
		array(),
		woodrobe_style_version()
	);
}
add_action( 'enqueue_block_assets', 'woodrobe_enqueue_block_assets' );
