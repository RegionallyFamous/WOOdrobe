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
 * Mark the active showcase navigation link, even when Blueprint creates the
 * links as custom URLs.
 *
 * @param string               $block_content Rendered block markup.
 * @param array<string, mixed> $block         Parsed block data.
 * @return string
 */
function woodrobe_showcase_theme_mark_current_nav_link( $block_content, $block ) {
	if ( 'core/navigation-link' !== ( $block['blockName'] ?? '' ) || ! is_singular() ) {
		return $block_content;
	}

	$url = isset( $block['attrs']['url'] ) ? (string) $block['attrs']['url'] : '';
	if ( '' === $url ) {
		return $block_content;
	}

	$current_path = trailingslashit( wp_parse_url( get_permalink(), PHP_URL_PATH ) ?: '/' );
	$link_path    = trailingslashit( wp_parse_url( $url, PHP_URL_PATH ) ?: '/' );

	if ( $current_path !== $link_path || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$tags = new WP_HTML_Tag_Processor( $block_content );
	if ( $tags->next_tag( 'li' ) ) {
		$tags->add_class( 'current-menu-item' );
		$tags->add_class( 'current_page_item' );
	}
	if ( $tags->next_tag( 'a' ) ) {
		$tags->set_attribute( 'aria-current', 'page' );
	}

	return $tags->get_updated_html();
}
add_filter( 'render_block', 'woodrobe_showcase_theme_mark_current_nav_link', 10, 2 );

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
