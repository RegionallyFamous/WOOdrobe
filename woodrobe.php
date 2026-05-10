<?php
/**
 * Plugin Name:       WOOdrobe
 * Plugin URI:        https://github.com/RegionallyFamous/WOOdrobe
 * Description:       A wardrobe of block-style outfits for WooCommerce blocks — product details, product collections, bento grids, field notebooks, and more. Multi-block by design.
 * Version:           1.0.0
 * Author:            Regionally Famous
 * Author URI:        https://regionallyfamous.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       woodrobe
 * Domain Path:       /languages
 * Requires at least: 6.4
 * Tested up to:      6.7
 * Requires PHP:      7.4
 * Requires Plugins:  woocommerce
 *
 * @package WOOdrobe
 */

defined( 'ABSPATH' ) || exit;

define( 'WOODROBE_VERSION',     '1.0.0' );
define( 'WOODROBE_PLUGIN_FILE', __FILE__ );
define( 'WOODROBE_PLUGIN_DIR',  plugin_dir_path( __FILE__ ) );
define( 'WOODROBE_PLUGIN_URL',  plugin_dir_url( __FILE__ ) );
define( 'WOODROBE_SHOWCASE_PAGE_SLUG', 'woodrobe-showcase' );

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
			array( 'slug' => 'pill-switch',         'label' => __( 'Pill Switch',            'woodrobe' ) ),
			array( 'slug' => 'sidebar-tabs',        'label' => __( 'Sidebar Tabs',           'woodrobe' ) ),
			array( 'slug' => 'accordion-stack',     'label' => __( 'Accordion Stack',        'woodrobe' ) ),
			array( 'slug' => 'card-tabs',           'label' => __( 'Card Tabs',              'woodrobe' ) ),
			array( 'slug' => 'numbered-index',      'label' => __( 'Numbered Index',         'woodrobe' ) ),
			array( 'slug' => 'underline-slide',     'label' => __( 'Underline Slide',        'woodrobe' ) ),
			array( 'slug' => 'chips',               'label' => __( 'Chips',                  'woodrobe' ) ),
			array( 'slug' => 'bottom-tabs',         'label' => __( 'Bottom Tabs',            'woodrobe' ) ),
			array( 'slug' => 'magazine-masthead',   'label' => __( 'Magazine Masthead',      'woodrobe' ) ),
			array( 'slug' => 'brutalist',           'label' => __( 'Brutalist',              'woodrobe' ) ),
			array( 'slug' => 'soft-cards',          'label' => __( 'Soft Cards',             'woodrobe' ) ),
			array( 'slug' => 'preview-strip',       'label' => __( 'Preview Strip',          'woodrobe' ) ),
			array( 'slug' => 'always-on-story',     'label' => __( 'Always-on Story',        'woodrobe' ) ),
			array( 'slug' => 'description-first',   'label' => __( 'Description First',      'woodrobe' ) ),
			array( 'slug' => 'qa-format',           'label' => __( 'Q&A Format',             'woodrobe' ) ),
			array( 'slug' => 'reading-view',        'label' => __( 'Reading View',           'woodrobe' ) ),
			array( 'slug' => 'progressive',         'label' => __( 'Progressive Disclosure', 'woodrobe' ) ),
			array( 'slug' => 'filmstrip',           'label' => __( 'Filmstrip',              'woodrobe' ) ),
			array( 'slug' => 'spec-sheet',          'label' => __( 'Spec Sheet',             'woodrobe' ) ),
			array( 'slug' => 'bento',               'label' => __( 'Bento Grid',             'woodrobe' ) ),
			array( 'slug' => 'newspaper',           'label' => __( 'Newspaper',              'woodrobe' ) ),
			array( 'slug' => 'field-notebook',      'label' => __( 'Field Notebook',         'woodrobe' ) ),
			array( 'slug' => 'stat-block',          'label' => __( 'Stat Block',             'woodrobe' ) ),
		),
		'woocommerce/product-collection' => array(
			array( 'slug' => 'classic-refined',      'label' => __( 'Classic Refined',        'woodrobe' ) ),
			array( 'slug' => 'editorial-magazine',   'label' => __( 'Editorial Magazine',     'woodrobe' ) ),
			array( 'slug' => 'catalog-dense',        'label' => __( 'Catalog Dense',          'woodrobe' ) ),
			array( 'slug' => 'hover-reveal',         'label' => __( 'Hover Reveal',           'woodrobe' ) ),
			array( 'slug' => 'card-stack-soft',      'label' => __( 'Card Stack (Soft)',      'woodrobe' ) ),
			array( 'slug' => 'brutalist-mono',       'label' => __( 'Brutalist Mono',         'woodrobe' ) ),
			array( 'slug' => 'showcase-hero',        'label' => __( 'Showcase Hero',          'woodrobe' ) ),
			array( 'slug' => 'bento-mixed',          'label' => __( 'Bento Mixed',            'woodrobe' ) ),
			array( 'slug' => 'polaroid-pinboard',    'label' => __( 'Polaroid Pinboard',      'woodrobe' ) ),
			array( 'slug' => 'index-card',           'label' => __( 'Index Card',             'woodrobe' ) ),
			array( 'slug' => 'marquee-strip',        'label' => __( 'Marquee Strip',          'woodrobe' ) ),
			array( 'slug' => 'swatch-first',         'label' => __( 'Swatch-First',           'woodrobe' ) ),
			array( 'slug' => 'conversational',       'label' => __( 'Conversational',         'woodrobe' ) ),
			array( 'slug' => 'minimal-text-only',    'label' => __( 'Minimal Text-Only',      'woodrobe' ) ),
			array( 'slug' => 'image-left-list',      'label' => __( 'Image-Left List',        'woodrobe' ) ),
			array( 'slug' => 'two-up-wide',          'label' => __( 'Two-Up Wide',            'woodrobe' ) ),
			array( 'slug' => 'five-column-dense',    'label' => __( 'Five Column Dense',      'woodrobe' ) ),
			array( 'slug' => 'info-beside-image',    'label' => __( 'Info Beside Image',      'woodrobe' ) ),
			array( 'slug' => 'info-overlay',         'label' => __( 'Info Overlay',           'woodrobe' ) ),
			array( 'slug' => 'masonry',              'label' => __( 'Masonry',                'woodrobe' ) ),
		),
		'woocommerce/product-gallery' => array(
			array( 'slug' => 'side-rail-gallery',   'label' => __( 'Side Rail Gallery',       'woodrobe' ) ),
			array( 'slug' => 'bottom-filmstrip',    'label' => __( 'Bottom Filmstrip',        'woodrobe' ) ),
			array( 'slug' => 'gallery-detail-split', 'label' => __( 'Gallery + Details Split',  'woodrobe' ) ),
			array( 'slug' => 'mosaic-gallery',      'label' => __( 'Mosaic Gallery',          'woodrobe' ) ),
			array( 'slug' => 'immersive-viewer',    'label' => __( 'Immersive Viewer',        'woodrobe' ) ),
			array( 'slug' => 'compact-stack',       'label' => __( 'Compact Stack',           'woodrobe' ) ),
		),
		'woocommerce/single-product' => array(
			array( 'slug' => 'classic-product-page',    'label' => __( 'Classic Product Page',    'woodrobe' ) ),
			array( 'slug' => 'editorial-product-story', 'label' => __( 'Editorial Product Story', 'woodrobe' ) ),
			array( 'slug' => 'sticky-purchase-panel',   'label' => __( 'Sticky Purchase Panel',   'woodrobe' ) ),
			array( 'slug' => 'gallery-led-page',        'label' => __( 'Gallery-Led Page',        'woodrobe' ) ),
			array( 'slug' => 'compact-buy-box',         'label' => __( 'Compact Buy Box',         'woodrobe' ) ),
			array( 'slug' => 'details-sidebar',         'label' => __( 'Details Sidebar',         'woodrobe' ) ),
		),
		'woocommerce/related-products' => array(
			array( 'slug' => 'four-up-shelf',             'label' => __( 'Four-Up Shelf',              'woodrobe' ) ),
			array( 'slug' => 'editorial-reel',            'label' => __( 'Editorial Reel',             'woodrobe' ) ),
			array( 'slug' => 'compact-recommendations',  'label' => __( 'Compact Recommendations',  'woodrobe' ) ),
			array( 'slug' => 'feature-and-supporting',   'label' => __( 'Feature + Supporting',      'woodrobe' ) ),
			array( 'slug' => 'horizontal-scroll',         'label' => __( 'Horizontal Scroll',          'woodrobe' ) ),
			array( 'slug' => 'minimal-links',             'label' => __( 'Minimal Links',              'woodrobe' ) ),
		),
		'woocommerce/product-reviews' => array(
			array( 'slug' => 'review-snapshot',       'label' => __( 'Review Snapshot',        'woodrobe' ) ),
			array( 'slug' => 'editorial-quotes',      'label' => __( 'Editorial Quotes',       'woodrobe' ) ),
			array( 'slug' => 'dense-ledger',          'label' => __( 'Dense Ledger',           'woodrobe' ) ),
			array( 'slug' => 'trust-stack',           'label' => __( 'Trust Stack',            'woodrobe' ) ),
			array( 'slug' => 'minimal-proof-strip',   'label' => __( 'Minimal Proof Strip',    'woodrobe' ) ),
			array( 'slug' => 'qa-feel',               'label' => __( 'Q&A Feel',               'woodrobe' ) ),
		),

		'woocommerce/cart' => array(
			array( 'slug' => 'two-column-cart',       'label' => __( 'Two Column Cart',       'woodrobe' ) ),
			array( 'slug' => 'summary-rail',          'label' => __( 'Summary Rail',          'woodrobe' ) ),
			array( 'slug' => 'compact-cart',          'label' => __( 'Compact Cart',          'woodrobe' ) ),
			array( 'slug' => 'checkout-funnel',       'label' => __( 'Checkout Funnel',       'woodrobe' ) ),
			array( 'slug' => 'empty-state-spotlight', 'label' => __( 'Empty State Spotlight', 'woodrobe' ) ),
			array( 'slug' => 'coupon-first',          'label' => __( 'Coupon First',          'woodrobe' ) ),
		),
		'woocommerce/checkout' => array(
			array( 'slug' => 'two-step-checkout',     'label' => __( 'Two Step Checkout',     'woodrobe' ) ),
			array( 'slug' => 'summary-sidebar',       'label' => __( 'Summary Sidebar',       'woodrobe' ) ),
			array( 'slug' => 'compact-checkout',      'label' => __( 'Compact Checkout',      'woodrobe' ) ),
			array( 'slug' => 'express-first',         'label' => __( 'Express First',         'woodrobe' ) ),
			array( 'slug' => 'details-ledger',        'label' => __( 'Details Ledger',        'woodrobe' ) ),
			array( 'slug' => 'minimal-checkout',      'label' => __( 'Minimal Checkout',      'woodrobe' ) ),
		),
		'woocommerce/mini-cart' => array(
			array( 'slug' => 'header-pill',           'label' => __( 'Header Pill',           'woodrobe' ) ),
			array( 'slug' => 'icon-badge',            'label' => __( 'Icon Badge',            'woodrobe' ) ),
			array( 'slug' => 'text-total',            'label' => __( 'Text Total',            'woodrobe' ) ),
			array( 'slug' => 'utility-cluster',       'label' => __( 'Utility Cluster',       'woodrobe' ) ),
			array( 'slug' => 'checkout-button',       'label' => __( 'Checkout Button',       'woodrobe' ) ),
			array( 'slug' => 'drawer-launcher',       'label' => __( 'Drawer Launcher',       'woodrobe' ) ),
		),
		'woocommerce/product-rating' => array(
			array( 'slug' => 'rating-row',            'label' => __( 'Rating Row',            'woodrobe' ) ),
			array( 'slug' => 'stars-first',           'label' => __( 'Stars First',           'woodrobe' ) ),
			array( 'slug' => 'score-pill',            'label' => __( 'Score Pill',            'woodrobe' ) ),
			array( 'slug' => 'review-link-stack',     'label' => __( 'Review Link Stack',     'woodrobe' ) ),
			array( 'slug' => 'trust-inline',          'label' => __( 'Trust Inline',          'woodrobe' ) ),
			array( 'slug' => 'compact-stars',         'label' => __( 'Compact Stars',         'woodrobe' ) ),
		),
		'woocommerce/customer-account' => array(
			array( 'slug' => 'account-pill',          'label' => __( 'Account Pill',          'woodrobe' ) ),
			array( 'slug' => 'icon-only-entry',       'label' => __( 'Icon Only Entry',       'woodrobe' ) ),
			array( 'slug' => 'text-link-entry',       'label' => __( 'Text Link Entry',       'woodrobe' ) ),
			array( 'slug' => 'split-login',           'label' => __( 'Split Login',           'woodrobe' ) ),
			array( 'slug' => 'compact-badge',         'label' => __( 'Compact Badge',         'woodrobe' ) ),
			array( 'slug' => 'nav-utility',           'label' => __( 'Nav Utility',           'woodrobe' ) ),
		),
		'woocommerce/store-notices' => array(
			array( 'slug' => 'notice-stack',          'label' => __( 'Notice Stack',          'woodrobe' ) ),
			array( 'slug' => 'inline-alert',          'label' => __( 'Inline Alert',          'woodrobe' ) ),
			array( 'slug' => 'toast-rail',            'label' => __( 'Toast Rail',            'woodrobe' ) ),
			array( 'slug' => 'banner-notice',         'label' => __( 'Banner Notice',         'woodrobe' ) ),
			array( 'slug' => 'compact-notice',        'label' => __( 'Compact Notice',        'woodrobe' ) ),
			array( 'slug' => 'split-notice',          'label' => __( 'Split Notice',          'woodrobe' ) ),
		),

		// Add more blocks here as styles ship for them.
	);
}

/**
 * Register stylesheet handle and every block style in the wardrobe.
 *
 * Styles for every block share one stylesheet so cascading tokens work and
 * the request count stays at 1. CSS loads via enqueue_block_assets so it
 * reaches the Site Editor iframe and the front end consistently.
 *
 * @return void
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

	$block_styles = woodrobe_block_styles();

	foreach ( $block_styles as $block_name => $styles ) {
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

	// WooCommerce's current Related Products inserter uses the Product
	// Collection block variation, so expose these outfits there too.
	$related_styles = $block_styles['woocommerce/related-products'] ?? array();
	foreach ( $related_styles as $style ) {
		register_block_style(
			'woocommerce/product-collection',
			array(
				'name'         => $style['slug'],
				'label'        => $style['label'],
				'style_handle' => 'woodrobe-styles',
			)
		);
	}
}
add_action( 'init', 'woodrobe_register_block_styles' );

/**
 * Cache-busting version derived from a given asset's mtime, with a fallback
 * to the plugin version constant.
 *
 * @param string $relative_path Path to the asset relative to the plugin root.
 * @return string
 */
function woodrobe_asset_version( $relative_path ) {
	$path = WOODROBE_PLUGIN_DIR . ltrim( $relative_path, '/' );

	return file_exists( $path ) ? (string) filemtime( $path ) : WOODROBE_VERSION;
}

/**
 * Cache-busting version for the stylesheet (kept for back-compat).
 *
 * @return string
 */
function woodrobe_style_version() {
	return woodrobe_asset_version( 'assets/styles.css' );
}

/**
 * Enqueue the shared stylesheet and tiny behavior script.
 *
 * @return void
 */
function woodrobe_enqueue_assets() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	wp_enqueue_style(
		'woodrobe-styles',
		plugins_url( 'assets/styles.css', WOODROBE_PLUGIN_FILE ),
		array(),
		woodrobe_asset_version( 'assets/styles.css' )
	);

	// Tab-strip variants (pill-switch, sidebar-tabs, card-tabs,
	// underline-slide, chips, bottom-tabs, preview-strip) read as tabs:
	// opening one item should close the others. The core accordion block
	// defaults to multi-open, so this small enqueued script enforces
	// autoclose on those variants only.
	wp_enqueue_script(
		'woodrobe-autoclose',
		plugins_url( 'assets/woodrobe.js', WOODROBE_PLUGIN_FILE ),
		array(),
		woodrobe_asset_version( 'assets/woodrobe.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}

/**
 * Force-enqueue styles + autoclose script in both the front-end and the
 * Site Editor iframe. register_block_style's style_handle loads on render,
 * but doesn't reliably reach the editor iframe in every WP version.
 * enqueue_block_assets fires for both contexts.
 *
 * @return void
 */
function woodrobe_enqueue_block_assets() {
	woodrobe_enqueue_assets();
}
add_action( 'enqueue_block_assets', 'woodrobe_enqueue_block_assets' );

/**
 * Showcase targets that can be rendered by the dynamic block.
 *
 * New WooCommerce block families can opt in here once they have matching
 * styles in woodrobe_block_styles() and a renderer that knows their markup.
 *
 * @return array<string, array{label:string,render_callback:callable}>
 */
function woodrobe_showcase_supported_blocks() {
	return apply_filters(
		'woodrobe_showcase_supported_blocks',
		array(
			'woocommerce/product-details' => array(
				'label'           => __( 'Product Details', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_product_details_showcase_cards',
			),
			'woocommerce/product-collection' => array(
				'label'           => __( 'Product Collection', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_product_collection_showcase_cards',
			),
			'woocommerce/product-gallery' => array(
				'label'           => __( 'Product Gallery', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_product_gallery_showcase_cards',
			),
			'woocommerce/single-product' => array(
				'label'           => __( 'Single Product / Product Page', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_single_product_showcase_cards',
			),
			'woocommerce/related-products' => array(
				'label'           => __( 'Related Products / Recommendations', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_related_products_showcase_cards',
			),
			'woocommerce/product-reviews' => array(
				'label'           => __( 'Product Reviews / Ratings', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_product_reviews_showcase_cards',
			),
			'woocommerce/cart' => array(
				'label'           => __( 'Cart', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_cart_showcase_cards',
			),
			'woocommerce/checkout' => array(
				'label'           => __( 'Checkout', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_checkout_showcase_cards',
			),
			'woocommerce/mini-cart' => array(
				'label'           => __( 'Mini Cart', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_mini_cart_showcase_cards',
			),
			'woocommerce/product-rating' => array(
				'label'           => __( 'Product Rating', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_product_rating_showcase_cards',
			),
			'woocommerce/customer-account' => array(
				'label'           => __( 'Customer Account', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_customer_account_showcase_cards',
			),
			'woocommerce/store-notices' => array(
				'label'           => __( 'Store Notices', 'woodrobe' ),
				'render_callback' => 'woodrobe_render_store_notices_showcase_cards',
			),
		)
	);
}

/**
 * Get supported showcase targets that also have registered WOOdrobe styles.
 *
 * @return array<string, array{label:string,render_callback:callable}>
 */
function woodrobe_showcase_available_blocks() {
	$style_map = woodrobe_block_styles();
	$available = array();

	foreach ( woodrobe_showcase_supported_blocks() as $block_name => $definition ) {
		if ( empty( $style_map[ $block_name ] ) || empty( $definition['render_callback'] ) || ! is_callable( $definition['render_callback'] ) ) {
			continue;
		}

		$available[ $block_name ] = $definition;
	}

	return $available;
}

/**
 * Default showcase target.
 *
 * @return string
 */
function woodrobe_showcase_default_block_name() {
	$available = woodrobe_showcase_available_blocks();

	if ( empty( $available ) ) {
		return 'woocommerce/product-details';
	}

	$block_names = array_keys( $available );

	return (string) reset( $block_names );
}

/**
 * Normalize a requested showcase target to one we can render.
 *
 * @param string $block_name Requested block name.
 * @return string
 */
function woodrobe_normalize_showcase_block_name( $block_name ) {
	$available = woodrobe_showcase_available_blocks();

	if ( isset( $available[ $block_name ] ) ) {
		return $block_name;
	}

	return woodrobe_showcase_default_block_name();
}

/**
 * Editor options for the showcase target selector.
 *
 * @return array<int, array{label:string,value:string,count:int}>
 */
function woodrobe_showcase_editor_block_options() {
	$style_map = woodrobe_block_styles();
	$options   = array();

	foreach ( woodrobe_showcase_available_blocks() as $block_name => $definition ) {
		$count     = isset( $style_map[ $block_name ] ) ? count( $style_map[ $block_name ] ) : 0;
		$options[] = array(
			'label' => sprintf(
				/* translators: 1: WooCommerce block label, 2: number of available styles. */
				_n( '%1$s (%2$d style)', '%1$s (%2$d styles)', $count, 'woodrobe' ),
				$definition['label'],
				$count
			),
			'value' => $block_name,
			'count' => $count,
		);
	}

	return $options;
}

/**
 * Build consistent card classes for a showcase style.
 *
 * @param string $block_modifier Block-specific card modifier.
 * @param string $slug           Style slug.
 * @return string
 */
function woodrobe_showcase_card_classes( $block_modifier, $slug ) {
	return sprintf(
		'woodrobe-showcase__card woodrobe-showcase__card--%1$s woodrobe-showcase__card--style-%2$s',
		sanitize_html_class( $block_modifier ),
		sanitize_html_class( $slug )
	);
}

/**
 * Default render arguments for the showcase.
 *
 * @return array{block_name:string,title:string,description:string,wrapper_attributes:string}
 */
function woodrobe_showcase_default_args() {
	return array(
		'block_name'          => woodrobe_showcase_default_block_name(),
		'title'              => __( 'WOOdrobe Style Showcase', 'woodrobe' ),
		'description'        => __( 'A live sampler of the WooCommerce block-style outfits included with WOOdrobe.', 'woodrobe' ),
		'wrapper_attributes' => 'class="woodrobe-showcase"',
	);
}

/**
 * Render block markup through WordPress so showcase output uses live block HTML.
 *
	 * @param string $markup Block markup.
	 * @param int    $product_id Optional product ID to provide as temporary global post context.
	 * @return string
	 */
	function woodrobe_render_showcase_block_markup( $markup, $product_id = 0 ) {
		if ( '' === trim( $markup ) || ! function_exists( 'do_blocks' ) ) {
			return '';
		}

		$product_post  = $product_id ? get_post( $product_id ) : null;
		$restore_post  = false;
		$original_post = null;

		if ( $product_post instanceof WP_Post ) {
			global $post;

			$original_post = $post;
			$post          = $product_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
			setup_postdata( $post );
			$restore_post = true;
		}

		$rendered = trim( do_blocks( $markup ) );

		if ( $restore_post ) {
			global $post;

			$post = $original_post; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
			if ( $post instanceof WP_Post ) {
				setup_postdata( $post );
			} else {
				wp_reset_postdata();
			}
		}

		return $rendered;
	}

/**
 * Find a real product to provide WooCommerce product context in showcase cards.
 *
 * @return int Product ID, or 0 when the store has no products.
 */
function woodrobe_showcase_product_id() {
	static $product_id = null;

	if ( null !== $product_id ) {
		return $product_id;
	}

	$product_id = 0;

	if ( function_exists( 'wc_get_products' ) ) {
		$ids = wc_get_products(
			array(
				'status'  => 'publish',
				'limit'   => 1,
				'orderby' => 'date',
				'order'   => 'DESC',
				'return'  => 'ids',
			)
		);

		if ( ! empty( $ids ) ) {
			$product_id = (int) reset( $ids );
		}
	}

	return $product_id ? $product_id : woodrobe_showcase_product_gallery_product_id();
}

/**
 * Find a real product with gallery images for Product Gallery showcase cards.
 *
 * @return int Product ID, or 0 when the store has no products.
 */
function woodrobe_showcase_product_gallery_product_id() {
	static $product_id = null;

	if ( null !== $product_id ) {
		return $product_id;
	}

	$product_id = 0;

	if ( function_exists( 'wc_get_products' ) ) {
		$ids = wc_get_products(
			array(
				'status'  => 'publish',
				'limit'   => 20,
				'orderby' => 'date',
				'order'   => 'DESC',
				'return'  => 'ids',
			)
		);

		foreach ( $ids as $id ) {
			$product = wc_get_product( $id );
			if ( $product && $product->get_image_id() && count( $product->get_gallery_image_ids() ) > 0 ) {
				$product_id = (int) $id;
				break;
			}
		}
	}

	return $product_id ? $product_id : woodrobe_showcase_product_id();
}

/**
 * Find a product that can drive WooCommerce's Related Products collection.
 *
 * @return int Product ID, or 0 when the store has no products.
 */
function woodrobe_showcase_related_products_product_id() {
	static $product_id = null;

	if ( null !== $product_id ) {
		return $product_id;
	}

	$product_id = 0;

	if ( function_exists( 'wc_get_products' ) && function_exists( 'wc_get_related_products' ) ) {
		$ids = wc_get_products(
			array(
				'status'  => 'publish',
				'limit'   => 30,
				'orderby' => 'date',
				'order'   => 'DESC',
				'return'  => 'ids',
			)
		);

		foreach ( $ids as $id ) {
			if ( ! empty( wc_get_related_products( (int) $id, 4 ) ) ) {
				$product_id = (int) $id;
				break;
			}
		}
	}

	return $product_id;
}

/**
 * Find a product with approved reviews for Product Reviews showcase cards.
 *
 * @return int Product ID, or 0 when the store has no products.
 */
function woodrobe_showcase_product_reviews_product_id() {
	static $product_id = null;

	if ( null !== $product_id ) {
		return $product_id;
	}

	$product_id = 0;

	if ( function_exists( 'wc_get_products' ) ) {
		$ids = wc_get_products(
			array(
				'status'  => 'publish',
				'limit'   => 40,
				'orderby' => 'date',
				'order'   => 'DESC',
				'return'  => 'ids',
			)
		);

		foreach ( $ids as $id ) {
			$product = wc_get_product( $id );
			if ( $product && $product->get_review_count() > 0 && $product->get_reviews_allowed() ) {
				$product_id = (int) $id;
				break;
			}
		}
	}

	return $product_id;
}

/**
 * The actual inner-block template WooCommerce inserts for Product Details.
 *
 * @return string Product Details inner block markup.
 */
function woodrobe_showcase_product_details_inner_blocks() {
	return '<!-- wp:accordion {"metadata":{"isDescendantOfProductDetails":true}} -->'
		. '<div class="wp-block-accordion">'
		. '<!-- wp:accordion-item {"openByDefault":true} -->'
		. '<div class="wp-block-accordion-item">'
		. '<!-- wp:accordion-heading {"title":"Description"} -->'
		. '<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">' . esc_html__( 'Description', 'woocommerce' ) . '</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>'
		. '<!-- /wp:accordion-heading -->'
		. '<!-- wp:accordion-panel -->'
		. '<div class="wp-block-accordion-panel"><!-- wp:woocommerce/product-description /--></div>'
		. '<!-- /wp:accordion-panel -->'
		. '</div>'
		. '<!-- /wp:accordion-item -->'
		. '<!-- wp:accordion-item -->'
		. '<div class="wp-block-accordion-item">'
		. '<!-- wp:accordion-heading {"title":"Additional Information"} -->'
		. '<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">' . esc_html__( 'Additional Information', 'woocommerce' ) . '</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>'
		. '<!-- /wp:accordion-heading -->'
		. '<!-- wp:accordion-panel -->'
		. '<div class="wp-block-accordion-panel"><!-- wp:woocommerce/product-specifications /--></div>'
		. '<!-- /wp:accordion-panel -->'
		. '</div>'
		. '<!-- /wp:accordion-item -->'
		. '<!-- wp:accordion-item -->'
		. '<div class="wp-block-accordion-item">'
		. '<!-- wp:accordion-heading {"title":"Reviews"} -->'
		. '<h3 class="wp-block-accordion-heading"><button class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title">' . esc_html__( 'Reviews', 'woocommerce' ) . '</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>'
		. '<!-- /wp:accordion-heading -->'
		. '<!-- wp:accordion-panel -->'
		. '<div class="wp-block-accordion-panel"><!-- wp:woocommerce/product-reviews /--></div>'
		. '<!-- /wp:accordion-panel -->'
		. '</div>'
		. '<!-- /wp:accordion-item -->'
		. '</div>'
		. '<!-- /wp:accordion -->';
}

/**
 * Build actual Product Details block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @param int    $product_id Product ID used for WooCommerce context.
 * @return string Block markup.
 */
function woodrobe_showcase_product_details_block_markup( $slug, $product_id ) {
	$style_class   = 'is-style-' . sanitize_html_class( $slug );
	$single_attrs  = array( 'productId' => $product_id );
	$details_attrs = array(
		'align'     => 'wide',
		'className' => $style_class,
	);

	return '<!-- wp:woocommerce/single-product ' . wp_json_encode( $single_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-single-product">'
		. '<!-- wp:woocommerce/product-details ' . wp_json_encode( $details_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-product-details alignwide ' . esc_attr( $style_class ) . '">'
		. woodrobe_showcase_product_details_inner_blocks()
		. '</div>'
		. '<!-- /wp:woocommerce/product-details -->'
		. '</div>'
		. '<!-- /wp:woocommerce/single-product -->';
}

/**
 * Render Product Details showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_details_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	$product_id = woodrobe_showcase_product_id();

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = $product_id ? woodrobe_render_showcase_block_markup( woodrobe_showcase_product_details_block_markup( $slug, $product_id ) ) : '';
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'product-details', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add a published WooCommerce product to preview this style with live Product Details blocks.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Product Collection block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @param int    $query_id Query ID.
 * @return string Block markup.
 */
function woodrobe_showcase_product_collection_block_markup( $slug, $query_id ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );
	$attrs       = array(
		'queryId'              => $query_id,
		'query'                => array(
			'perPage'                         => 8,
			'pages'                           => 0,
			'offset'                          => 0,
			'postType'                        => 'product',
			'order'                           => 'asc',
			'orderBy'                         => 'title',
			'search'                          => '',
			'exclude'                         => array(),
			'inherit'                         => false,
			'taxQuery'                        => array(),
			'isProductCollectionBlock'        => true,
			'woocommerceOnSale'               => false,
			'woocommerceStockStatus'          => array( 'instock', 'outofstock', 'onbackorder' ),
			'woocommerceAttributes'           => array(),
			'woocommerceHandPickedProducts'   => array(),
		),
		'tagName'              => 'div',
		'dimensions'           => array(
			'widthType'  => 'fill',
			'fixedWidth' => '',
		),
		'displayLayout'        => array(
			'type'          => 'flex',
			'columns'       => 4,
			'shrinkColumns' => true,
		),
		'queryContextIncludes' => array( 'collection' ),
		'align'                => 'wide',
		'className'            => $style_class,
	);

	return '<!-- wp:woocommerce/product-collection ' . wp_json_encode( $attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-product-collection alignwide ' . esc_attr( $style_class ) . '">'
		. '<!-- wp:woocommerce/product-template -->'
		. '<!-- wp:woocommerce/product-image {"showSaleBadge":true,"isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"woodrobe-product-image"} /-->'
		. '<!-- wp:group {"className":"woodrobe-product-meta","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-product-meta">'
		. '<!-- wp:post-terms {"term":"product_cat","className":"woodrobe-product-category"} /-->'
		. '<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.5rem","top":"0"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title","className":"woodrobe-product-name"} /-->'
		. '<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"woodrobe-product-rating"} /-->'
		. '<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small","className":"woodrobe-product-price"} /-->'
		. '<!-- wp:woocommerce/product-stock-indicator {"className":"woodrobe-product-stock"} /-->'
		. '<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"woodrobe-product-action"} /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- /wp:woocommerce/product-template -->'
		. '<!-- wp:woocommerce/product-collection-no-results -->'
		. '<div class="wp-block-woocommerce-product-collection-no-results">'
		. '<!-- wp:paragraph --><p>' . esc_html__( 'No products were found.', 'woocommerce' ) . '</p><!-- /wp:paragraph -->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-collection-no-results -->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-collection -->';
}

/**
 * Render Product Collection showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_collection_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	ob_start();

	foreach ( $styles as $index => $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = woodrobe_render_showcase_block_markup( woodrobe_showcase_product_collection_block_markup( $slug, 500 + (int) $index ) );
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'product-collection', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add published WooCommerce products to preview this style with a live Product Collection block.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Product Gallery block markup that can live inside a product context.
 *
 * @param string $class_name Optional classes for the Product Gallery wrapper.
 * @return string Block markup.
 */
function woodrobe_showcase_product_gallery_inner_block_markup( $class_name = '' ) {
	$class_name = trim( (string) $class_name );
	$gallery_attrs = array(
		'align'             => 'wide',
		'hoverZoom'         => true,
		'fullScreenOnClick' => true,
	);

	if ( '' !== $class_name ) {
		$gallery_attrs['className'] = $class_name;
	}

	$thumbnail_attrs = array(
		'aspectRatio'   => '1/1',
		'thumbnailSize' => '80px',
	);
	$image_attrs = array(
		'aspectRatio'                       => '1/1',
		'isDescendentOfSingleProductBlock'  => true,
		'showProductLink'                   => false,
		'showSaleBadge'                     => false,
	);
	$sale_badge_attrs = array(
		'isDescendentOfSingleProductBlock' => true,
	);
	$gallery_class = trim( 'wp-block-woocommerce-product-gallery alignwide ' . $class_name );

	return '<!-- wp:woocommerce/product-gallery ' . wp_json_encode( $gallery_attrs ) . ' -->'
		. '<div class="' . esc_attr( $gallery_class ) . '">'
		. '<!-- wp:woocommerce/product-gallery-large-image -->'
		. '<div class="wp-block-woocommerce-product-gallery-large-image">'
		. '<!-- wp:woocommerce/product-image ' . wp_json_encode( $image_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-sale-badge ' . wp_json_encode( $sale_badge_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-gallery-large-image-next-previous /-->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-gallery-large-image -->'
		. '<!-- wp:woocommerce/product-gallery-thumbnails ' . wp_json_encode( $thumbnail_attrs ) . ' /-->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-gallery -->';
}

/**
 * Build actual Product Gallery block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @param int    $product_id Product ID used for WooCommerce context.
 * @return string Block markup.
 */
function woodrobe_showcase_product_gallery_block_markup( $slug, $product_id ) {
	$style_class  = 'is-style-' . sanitize_html_class( $slug );
	$single_attrs = array( 'productId' => $product_id );

	return '<!-- wp:woocommerce/single-product ' . wp_json_encode( $single_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-single-product">'
		. woodrobe_showcase_product_gallery_inner_block_markup( $style_class )
		. '</div>'
		. '<!-- /wp:woocommerce/single-product -->';
}

/**
 * Render Product Gallery showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_gallery_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	$product_id = woodrobe_showcase_product_gallery_product_id();

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = $product_id ? woodrobe_render_showcase_block_markup( woodrobe_showcase_product_gallery_block_markup( $slug, $product_id ) ) : '';
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'product-gallery', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add a published WooCommerce product with images to preview this style with a live Product Gallery block.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Single Product block markup for a specific page-layout style.
 *
 * @param string $slug Style slug.
 * @param int    $product_id Product ID used for WooCommerce context.
 * @return string Block markup.
 */
function woodrobe_showcase_single_product_block_markup( $slug, $product_id ) {
	$style_class   = 'is-style-' . sanitize_html_class( $slug );
	$single_attrs  = array(
		'align'     => 'wide',
		'className' => $style_class,
		'productId' => $product_id,
	);
	$title_attrs   = array(
		'__woocommerceNamespace' => 'woocommerce/single-product/product-title',
		'className'              => 'woodrobe-single-product__title',
		'level'                  => 1,
	);
	$rating_attrs  = array(
		'className'                         => 'woodrobe-single-product__rating',
		'isDescendentOfSingleProductBlock'  => true,
		'productId'                         => $product_id,
	);
	$price_attrs   = array(
		'className'                         => 'woodrobe-single-product__price',
		'fontSize'                          => 'large',
		'isDescendentOfSingleProductBlock'  => true,
		'productId'                         => $product_id,
	);
	$summary_attrs = array(
		'className'                         => 'woodrobe-single-product__summary-text',
		'isDescendentOfSingleProductBlock'  => true,
		'productId'                         => $product_id,
		'showDescriptionIfEmpty'            => true,
		'showLink'                          => false,
		'summaryLength'                     => 34,
	);
	$cart_attrs    = array(
		'className'             => 'woodrobe-single-product__cart',
		'quantitySelectorStyle' => 'input',
	);
	$meta_attrs    = array(
		'className' => 'woodrobe-single-product__meta',
	);
	$details_attrs = array(
		'align'     => 'wide',
		'className' => 'woodrobe-single-product__details-block',
	);

	return '<!-- wp:woocommerce/single-product ' . wp_json_encode( $single_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-single-product alignwide ' . esc_attr( $style_class ) . '">'
		. '<!-- wp:group {"className":"woodrobe-single-product__hero","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-single-product__hero">'
		. '<!-- wp:group {"className":"woodrobe-single-product__media","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-single-product__media">'
		. woodrobe_showcase_product_gallery_inner_block_markup( 'woodrobe-single-product__media-gallery' )
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- wp:group {"className":"woodrobe-single-product__summary","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-single-product__summary">'
		. '<!-- wp:post-title ' . wp_json_encode( $title_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-rating ' . wp_json_encode( $rating_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-price ' . wp_json_encode( $price_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-summary ' . wp_json_encode( $summary_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/add-to-cart-form ' . wp_json_encode( $cart_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-meta ' . wp_json_encode( $meta_attrs ) . ' /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- wp:group {"className":"woodrobe-single-product__details","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-single-product__details">'
		. '<!-- wp:woocommerce/product-details ' . wp_json_encode( $details_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-product-details alignwide woodrobe-single-product__details-block">'
		. woodrobe_showcase_product_details_inner_blocks()
		. '</div>'
		. '<!-- /wp:woocommerce/product-details -->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '</div>'
		. '<!-- /wp:woocommerce/single-product -->';
}

/**
 * Render Single Product showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_single_product_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	$product_id = woodrobe_showcase_product_gallery_product_id();

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = $product_id ? woodrobe_render_showcase_block_markup( woodrobe_showcase_single_product_block_markup( $slug, $product_id ) ) : '';
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'single-product', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add a published WooCommerce product with images to preview this style with a live Single Product block.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Related Products collection block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @param int    $product_id Product ID used for WooCommerce related-product context.
 * @param int    $query_id Query ID.
 * @return string Block markup.
 */
function woodrobe_showcase_related_products_block_markup( $slug, $product_id, $query_id ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );
	$class_name  = trim( 'woodrobe-related-products ' . $style_class );
	$attrs       = array(
		'queryId'              => $query_id,
		'query'                => array(
			'perPage'                         => 6,
			'pages'                           => 1,
			'offset'                          => 0,
			'postType'                        => 'product',
			'order'                           => 'asc',
			'orderBy'                         => 'title',
			'search'                          => '',
			'exclude'                         => array(),
			'inherit'                         => false,
			'taxQuery'                        => array(),
			'isProductCollectionBlock'        => true,
			'woocommerceOnSale'               => false,
			'woocommerceStockStatus'          => array( 'instock', 'outofstock', 'onbackorder' ),
			'woocommerceAttributes'           => array(),
			'woocommerceHandPickedProducts'   => array(),
			'productReference'                => $product_id,
			'relatedBy'                       => array(
				'categories' => true,
				'tags'       => true,
			),
		),
		'tagName'              => 'div',
		'dimensions'           => array(
			'widthType'  => 'fill',
			'fixedWidth' => '',
		),
		'displayLayout'        => array(
			'type'          => 'flex',
			'columns'       => 4,
			'shrinkColumns' => true,
		),
		'queryContextIncludes' => array( 'collection' ),
		'collection'           => 'woocommerce/product-collection/related',
		'align'                => 'wide',
		'className'            => $class_name,
	);

	return '<!-- wp:woocommerce/product-collection ' . wp_json_encode( $attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-product-collection alignwide ' . esc_attr( $class_name ) . '">'
		. '<!-- wp:woocommerce/product-template -->'
		. '<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"aspectRatio":"4/5","className":"woodrobe-product-image"} /-->'
		. '<!-- wp:group {"className":"woodrobe-product-meta","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-product-meta">'
		. '<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.5rem","top":"0"}}},"fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title","className":"woodrobe-product-name"} /-->'
		. '<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"woodrobe-product-rating"} /-->'
		. '<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"fontSize":"small","className":"woodrobe-product-price"} /-->'
		. '<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"woodrobe-product-action"} /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- /wp:woocommerce/product-template -->'
		. '<!-- wp:woocommerce/product-collection-no-results -->'
		. '<div class="wp-block-woocommerce-product-collection-no-results">'
		. '<!-- wp:paragraph --><p>' . esc_html__( 'No related products were found.', 'woocommerce' ) . '</p><!-- /wp:paragraph -->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-collection-no-results -->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-collection -->';
}

/**
 * Render Related Products showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_related_products_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	$product_id = woodrobe_showcase_related_products_product_id();

	ob_start();

	foreach ( $styles as $index => $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = $product_id ? woodrobe_render_showcase_block_markup( woodrobe_showcase_related_products_block_markup( $slug, $product_id, 900 + (int) $index ) ) : '';
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'related-products', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add published WooCommerce products in shared categories to preview this style with a live Related Products block.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Product Reviews block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @param int    $product_id Product ID used for WooCommerce review context.
 * @return string Block markup.
 */
function woodrobe_showcase_product_reviews_block_markup( $slug, $product_id ) {
	$style_class   = 'is-style-' . sanitize_html_class( $slug );
	$single_attrs  = array( 'productId' => $product_id );
	$reviews_attrs = array(
		'align'     => 'wide',
		'className' => $style_class,
	);
	$title_attrs   = array(
		'level'            => 3,
		'showProductTitle' => false,
		'showReviewsCount' => true,
		'className'        => 'woodrobe-reviews__title',
	);
		$rating_attrs     = array(
			'className'                        => 'woodrobe-reviews__rating',
			'isDescendentOfSingleProductBlock' => true,
		);
	$pagination_attrs = array(
		'className' => 'woodrobe-reviews__pagination',
		'layout'    => array(
			'type'           => 'flex',
			'justifyContent' => 'center',
		),
	);
	$previous_attrs   = array( 'label' => __( 'Previous', 'woodrobe' ) );
	$next_attrs       = array( 'label' => __( 'Next', 'woodrobe' ) );

	return '<!-- wp:woocommerce/single-product ' . wp_json_encode( $single_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-single-product">'
		. '<!-- wp:woocommerce/product-reviews ' . wp_json_encode( $reviews_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-product-reviews alignwide ' . esc_attr( $style_class ) . '">'
		. '<!-- wp:woocommerce/product-reviews-title ' . wp_json_encode( $title_attrs ) . ' /-->'
		. '<!-- wp:group {"className":"woodrobe-reviews__summary","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->'
		. '<div class="wp-block-group woodrobe-reviews__summary">'
		. '<!-- wp:woocommerce/product-rating ' . wp_json_encode( $rating_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-average-rating {"className":"woodrobe-reviews__average"} /-->'
		. '<!-- wp:woocommerce/product-rating-counter {"className":"woodrobe-reviews__counter"} /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- wp:woocommerce/product-review-template {"className":"woodrobe-reviews__list"} -->'
		. '<!-- wp:group {"className":"woodrobe-review","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-review">'
		. '<!-- wp:group {"className":"woodrobe-review__header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->'
		. '<div class="wp-block-group woodrobe-review__header">'
		. '<!-- wp:group {"className":"woodrobe-review__person","layout":{"type":"flex","flexWrap":"nowrap"}} -->'
		. '<div class="wp-block-group woodrobe-review__person">'
		. '<!-- wp:avatar {"size":40,"className":"woodrobe-review__avatar"} /-->'
		. '<!-- wp:group {"className":"woodrobe-review__byline","layout":{"type":"default"}} -->'
		. '<div class="wp-block-group woodrobe-review__byline">'
		. '<!-- wp:woocommerce/product-review-author-name {"fontSize":"small","className":"woodrobe-review__author"} /-->'
		. '<!-- wp:woocommerce/product-review-date {"fontSize":"small","className":"woodrobe-review__date"} /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- wp:woocommerce/product-review-rating {"className":"woodrobe-review__score"} /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- wp:woocommerce/product-review-content {"className":"woodrobe-review__content"} /-->'
		. '</div>'
		. '<!-- /wp:group -->'
		. '<!-- /wp:woocommerce/product-review-template -->'
		. '<!-- wp:woocommerce/product-reviews-pagination ' . wp_json_encode( $pagination_attrs ) . ' -->'
		. '<!-- wp:woocommerce/product-reviews-pagination-previous ' . wp_json_encode( $previous_attrs ) . ' /-->'
		. '<!-- wp:woocommerce/product-reviews-pagination-numbers /-->'
		. '<!-- wp:woocommerce/product-reviews-pagination-next ' . wp_json_encode( $next_attrs ) . ' /-->'
		. '<!-- /wp:woocommerce/product-reviews-pagination -->'
		. '<!-- wp:woocommerce/product-review-form {"className":"woodrobe-reviews__form"} /-->'
		. '</div>'
		. '<!-- /wp:woocommerce/product-reviews -->'
		. '</div>'
		. '<!-- /wp:woocommerce/single-product -->';
}

/**
 * Render Product Reviews showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_reviews_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	$product_id = woodrobe_showcase_product_reviews_product_id();

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = $product_id ? woodrobe_render_showcase_block_markup( woodrobe_showcase_product_reviews_block_markup( $slug, $product_id ), $product_id ) : '';
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'product-reviews', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add approved reviews to a published WooCommerce product to preview this style with a live Product Reviews block.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}


/**
 * Build actual Cart block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @return string Block markup.
 */
function woodrobe_showcase_cart_block_markup( $slug ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );

	if ( 'empty-state-spotlight' === $slug ) {
		return '<div class="wp-block-woocommerce-cart ' . esc_attr( $style_class ) . ' woodrobe-cart-preview-shell">'
			. '<div class="wp-block-woocommerce-empty-cart-block">'
			. '<div class="woodrobe-cart-empty-preview"><span aria-hidden="true"></span><strong>' . esc_html__( 'Your cart is ready for a new outfit.', 'woodrobe' ) . '</strong><small>' . esc_html__( 'Use this style when the empty state should feel intentional instead of abandoned.', 'woodrobe' ) . '</small><div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Browse products', 'woodrobe' ) . '</a></div></div>'
			. '</div>'
			. '</div>';
	}

	return '<div class="wp-block-woocommerce-cart ' . esc_attr( $style_class ) . ' woodrobe-cart-preview-shell">'
		. '<div class="wp-block-woocommerce-filled-cart-block">'
		. '<div class="wp-block-woocommerce-cart-items-block">'
		. '<div class="wp-block-woocommerce-cart-line-items-block">'
		. '<div class="woodrobe-cart-preview">'
		. '<div class="woodrobe-cart-preview__row"><span class="woodrobe-cart-preview__media" aria-hidden="true"></span><span class="woodrobe-cart-preview__item"><strong>' . esc_html__( 'Sample product', 'woodrobe' ) . '</strong><small>' . esc_html__( 'Qty 1 · Ready to ship', 'woodrobe' ) . '</small></span><span class="woodrobe-cart-preview__price">' . esc_html__( '$42.00', 'woodrobe' ) . '</span></div>'
		. '<div class="woodrobe-cart-preview__row"><span class="woodrobe-cart-preview__media" aria-hidden="true"></span><span class="woodrobe-cart-preview__item"><strong>' . esc_html__( 'Second cart item', 'woodrobe' ) . '</strong><small>' . esc_html__( 'Qty 1 · Gift wrap', 'woodrobe' ) . '</small></span><span class="woodrobe-cart-preview__price">' . esc_html__( '$18.00', 'woodrobe' ) . '</span></div>'
		. '</div>'
		. '</div>'
		. '</div>'
		. '<div class="wp-block-woocommerce-cart-totals-block">'
		. '<div class="wp-block-woocommerce-cart-order-summary-block">'
		. '<div class="woodrobe-cart-summary"><div class="woodrobe-cart-summary__row"><span>' . esc_html__( 'Subtotal', 'woodrobe' ) . '</span><strong>' . esc_html__( '$60.00', 'woodrobe' ) . '</strong></div><div class="woodrobe-cart-summary__row"><span>' . esc_html__( 'Shipping', 'woodrobe' ) . '</span><span>' . esc_html__( 'Calculated at checkout', 'woodrobe' ) . '</span></div><div class="woodrobe-cart-summary__row woodrobe-cart-summary__row--total"><span>' . esc_html__( 'Estimated total', 'woodrobe' ) . '</span><strong>' . esc_html__( '$60.00', 'woodrobe' ) . '</strong></div></div>'
		. '</div>'
		. '<div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"><span>' . esc_html__( 'Coupon code', 'woodrobe' ) . '</span><span aria-hidden="true"></span></div>'
		. '<div class="wp-block-woocommerce-proceed-to-checkout-block"><div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Proceed to checkout', 'woodrobe' ) . '</a></div></div>'
		. '</div>'
		. '</div>'
		. '<div class="wp-block-woocommerce-empty-cart-block"></div>'
		. '</div>';
}

/**
 * Render Cart showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_cart_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = woodrobe_render_showcase_block_markup( woodrobe_showcase_cart_block_markup( $slug ) );
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'cart', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Activate WooCommerce cart blocks to preview this Cart style.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Checkout block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @return string Block markup.
 */
function woodrobe_showcase_checkout_block_markup( $slug ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );

	return '<div class="wp-block-woocommerce-checkout ' . esc_attr( $style_class ) . ' woodrobe-checkout-preview-shell">'
		. '<div class="wp-block-woocommerce-checkout-fields-block">'
		. '<div class="wp-block-woocommerce-checkout-express-payment-block"><span>' . esc_html__( 'Express payment', 'woodrobe' ) . '</span><span aria-hidden="true"></span></div>'
		. '<div class="woodrobe-checkout-preview">'
		. '<section class="woodrobe-checkout-preview__section"><div class="woodrobe-checkout-preview__heading"><span>1</span><h4>' . esc_html__( 'Contact', 'woodrobe' ) . '</h4></div><span>' . esc_html__( 'email@example.com', 'woodrobe' ) . '</span></section>'
		. '<section class="woodrobe-checkout-preview__section"><div class="woodrobe-checkout-preview__heading"><span>2</span><h4>' . esc_html__( 'Shipping', 'woodrobe' ) . '</h4></div><span>' . esc_html__( '1 Demo Lane, Demoville', 'woodrobe' ) . '</span></section>'
		. '<section class="woodrobe-checkout-preview__section"><div class="woodrobe-checkout-preview__heading"><span>3</span><h4>' . esc_html__( 'Payment', 'woodrobe' ) . '</h4></div><span>' . esc_html__( 'Payment method', 'woodrobe' ) . '</span></section>'
		. '</div>'
		. '<div class="wp-block-woocommerce-checkout-actions-block"><div class="wp-block-button"><a class="wp-block-button__link" href="#">' . esc_html__( 'Place order', 'woodrobe' ) . '</a></div></div>'
		. '</div>'
		. '<div class="wp-block-woocommerce-checkout-totals-block">'
		. '<div class="wp-block-woocommerce-checkout-order-summary-block">'
		. '<div class="woodrobe-checkout-summary"><span class="woodrobe-checkout-summary__title">' . esc_html__( 'Order summary', 'woodrobe' ) . '</span><div class="woodrobe-checkout-summary__row"><span>' . esc_html__( 'Sample product × 1', 'woodrobe' ) . '</span><span>' . esc_html__( '$42.00', 'woodrobe' ) . '</span></div><div class="woodrobe-checkout-summary__row"><span>' . esc_html__( 'Second item × 1', 'woodrobe' ) . '</span><span>' . esc_html__( '$18.00', 'woodrobe' ) . '</span></div><div class="woodrobe-checkout-summary__row woodrobe-checkout-summary__row--total"><span>' . esc_html__( 'Total', 'woodrobe' ) . '</span><strong>' . esc_html__( '$60.00', 'woodrobe' ) . '</strong></div></div>'
		. '</div>'
		. '</div>'
		. '</div>';
}

/**
 * Render Checkout showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_checkout_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = woodrobe_render_showcase_block_markup( woodrobe_showcase_checkout_block_markup( $slug ) );
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'checkout', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Activate WooCommerce checkout blocks to preview this Checkout style.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Mini Cart block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @return string Block markup.
 */
function woodrobe_showcase_mini_cart_block_markup( $slug ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );
	$attrs       = array(
		'className'              => $style_class,
		'miniCartIcon'           => 'bag-alt',
		'productCountVisibility' => 'always',
		'hasHiddenPrice'         => false,
	);

	return '<div class="woodrobe-utility-preview woodrobe-utility-preview--mini-cart woodrobe-utility-preview--' . esc_attr( sanitize_html_class( $slug ) ) . '">'
		. '<span class="woodrobe-utility-preview__brand">' . esc_html__( 'Shop', 'woodrobe' ) . '</span>'
		. '<span class="woodrobe-utility-preview__nav" aria-hidden="true"><span></span><span></span><span></span></span>'
		. '<!-- wp:woocommerce/mini-cart ' . wp_json_encode( $attrs ) . ' /-->'
		. '</div>';
}

/**
 * Render Mini Cart showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_mini_cart_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = woodrobe_render_showcase_block_markup( woodrobe_showcase_mini_cart_block_markup( $slug ) );
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'mini-cart', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Activate WooCommerce mini cart blocks to preview this Mini Cart style.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Product Rating block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @param int    $product_id Product ID used for WooCommerce rating context.
 * @return string Block markup.
 */
function woodrobe_showcase_product_rating_block_markup( $slug, $product_id ) {
	$style_class  = 'is-style-' . sanitize_html_class( $slug );
	$slug_class   = sanitize_html_class( $slug );
	$single_attrs = array( 'productId' => $product_id );
	$rating_attrs = array(
		'className'                        => $style_class,
		'isDescendentOfSingleProductBlock' => true,
		'productId'                        => $product_id,
	);
	$context      = array(
		'rating-row'        => __( 'Verified buyer score', 'woodrobe' ),
		'stars-first'       => __( 'Loved by collectors', 'woodrobe' ),
		'score-pill'        => __( 'Average score', 'woodrobe' ),
		'review-link-stack' => __( 'Read the field notes', 'woodrobe' ),
		'trust-inline'      => __( 'Trusted product signal', 'woodrobe' ),
		'compact-stars'     => __( 'Quick proof', 'woodrobe' ),
	);

	return '<!-- wp:woocommerce/single-product ' . wp_json_encode( $single_attrs ) . ' -->'
		. '<div class="wp-block-woocommerce-single-product">'
		. '<div class="woodrobe-rating-preview woodrobe-rating-preview--' . esc_attr( $slug_class ) . '">'
		. '<div class="woodrobe-rating-preview__context"><strong>' . esc_html__( 'Spare Key to Nowhere', 'woodrobe' ) . '</strong><span>' . esc_html( $context[ $slug ] ?? __( 'Customer sentiment', 'woodrobe' ) ) . '</span></div>'
		. '<span class="woodrobe-rating-preview__score" aria-hidden="true">4.8</span>'
		. '<!-- wp:woocommerce/product-rating ' . wp_json_encode( $rating_attrs ) . ' /-->'
		. '</div>'
		. '</div>'
		. '<!-- /wp:woocommerce/single-product -->';
}

/**
 * Render Product Rating showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_rating_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	$product_id = woodrobe_showcase_product_reviews_product_id();

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = $product_id ? woodrobe_render_showcase_block_markup( woodrobe_showcase_product_rating_block_markup( $slug, $product_id ), $product_id ) : '';
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'product-rating', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add approved reviews to a published WooCommerce product to preview this Product Rating style.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Customer Account block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @return string Block markup.
 */
function woodrobe_showcase_customer_account_block_markup( $slug ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );
	$display     = in_array( $slug, array( 'icon-only-entry', 'compact-badge' ), true ) ? 'icon_only' : 'text_only';
	$attrs       = array(
		'className'             => $style_class,
		'displayStyle'          => $display,
		'iconStyle'             => 'line',
		'iconClass'             => 'wc-block-customer-account__account-icon',
		'hasDropdownNavigation' => false,
	);

	return '<div class="woodrobe-utility-preview woodrobe-utility-preview--customer-account woodrobe-utility-preview--' . esc_attr( sanitize_html_class( $slug ) ) . '">'
		. '<span class="woodrobe-utility-preview__brand">' . esc_html__( 'Member area', 'woodrobe' ) . '</span>'
		. '<span class="woodrobe-utility-preview__nav" aria-hidden="true"><span></span><span></span></span>'
		. '<!-- wp:woocommerce/customer-account ' . wp_json_encode( $attrs ) . ' /-->'
		. '</div>';
}

/**
 * Render Customer Account showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_customer_account_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	ob_start();

	foreach ( $styles as $style ) :
		$slug     = $style['slug'];
		$label    = $style['label'];
		$rendered = woodrobe_render_showcase_block_markup( woodrobe_showcase_customer_account_block_markup( $slug ) );
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'customer-account', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Activate WooCommerce account pages to preview this Customer Account style.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Build actual Store Notices block markup for a specific style.
 *
 * @param string $slug Style slug.
 * @return string Block markup.
 */
function woodrobe_showcase_store_notices_block_markup( $slug ) {
	$style_class = 'is-style-' . sanitize_html_class( $slug );
	$attrs       = array( 'className' => $style_class );

	return '<div class="woodrobe-notice-preview woodrobe-notice-preview--' . esc_attr( sanitize_html_class( $slug ) ) . '">'
		. '<!-- wp:woocommerce/store-notices ' . wp_json_encode( $attrs ) . ' /-->'
		. '</div>';
}

/**
 * Render Store Notices showcase cards using actual WooCommerce blocks.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unused unique showcase instance id.
 * @return string
 */
function woodrobe_render_store_notices_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles, $instance_id );

	ob_start();

	foreach ( $styles as $index => $style ) :
		$slug  = $style['slug'];
		$label = $style['label'];
		$notice_variants = array(
			'notice-stack'   => array(
				array( 'success', __( 'Order sample added to the bag.', 'woodrobe' ) ),
				array( 'notice', __( 'Free shipping unlocks after one more oddity.', 'woodrobe' ) ),
			),
			'inline-alert'   => array(
				array( 'notice', __( 'Inline alert keeps the message in the shopping flow.', 'woodrobe' ) ),
			),
			'toast-rail'     => array(
				array( 'error', __( 'Toast rail pins the alert to the edge of the viewport.', 'woodrobe' ) ),
			),
			'banner-notice'  => array(
				array( 'success', __( 'Banner notice stretches across the whole store surface.', 'woodrobe' ) ),
			),
			'compact-notice' => array(
				array( 'notice', __( 'Compact notice. Small, fast, visible.', 'woodrobe' ) ),
			),
			'split-notice'   => array(
				array( 'error', __( 'Split notice separates message and action areas.', 'woodrobe' ) ),
			),
		);
		$notices = $notice_variants[ $slug ] ?? array(
			array(
				0 === $index % 3 ? 'success' : ( 1 === $index % 3 ? 'notice' : 'error' ),
				sprintf(
					/* translators: %s: store notice style label. */
					__( '%s preview notice. This is live WooCommerce notice markup using the selected WOOdrobe layout.', 'woodrobe' ),
					$label
				),
			),
		);

		if ( function_exists( 'wc_clear_notices' ) ) {
			wc_clear_notices();
		}
		if ( function_exists( 'wc_add_notice' ) ) {
			foreach ( $notices as $notice ) {
				wc_add_notice( $notice[1], $notice[0] );
			}
		}

		$rendered = woodrobe_render_showcase_block_markup( woodrobe_showcase_store_notices_block_markup( $slug ) );

		if ( function_exists( 'wc_clear_notices' ) ) {
			wc_clear_notices();
		}
		?>
		<article class="<?php echo esc_attr( woodrobe_showcase_card_classes( 'store-notices', $slug ) ); ?>">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<?php
			echo '' !== $rendered
				? $rendered
				: '<p class="woodrobe-showcase__notice">' . esc_html__( 'Add a WooCommerce notice to preview this Store Notices style.', 'woodrobe' ) . '</p>';
			?>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Render a live sampler for every registered WOOdrobe style.
 *
 * @param array<string, mixed> $args Render arguments.
 * @return string
 */
function woodrobe_render_showcase( $args = array() ) {
	static $instance = 0;

	++$instance;

	$args = wp_parse_args( $args, woodrobe_showcase_default_args() );

	$block_name          = woodrobe_normalize_showcase_block_name( (string) $args['block_name'] );
	$style_map           = woodrobe_block_styles();
	$supported_blocks    = woodrobe_showcase_available_blocks();
	$styles              = isset( $style_map[ $block_name ] ) ? $style_map[ $block_name ] : array();
	$render_callback     = isset( $supported_blocks[ $block_name ]['render_callback'] ) ? $supported_blocks[ $block_name ]['render_callback'] : '';
	$instance_id         = 'woodrobe-showcase-' . $instance;

	if ( empty( $styles ) || ! is_callable( $render_callback ) ) {
		return '';
	}

	ob_start();
	?>
	<div <?php echo $args['wrapper_attributes']; ?>>
		<?php if ( '' !== $args['title'] || '' !== $args['description'] ) : ?>
			<header class="woodrobe-showcase__header">
				<?php if ( '' !== $args['title'] ) : ?>
					<h2 class="woodrobe-showcase__title"><?php echo esc_html( $args['title'] ); ?></h2>
				<?php endif; ?>
				<?php if ( '' !== $args['description'] ) : ?>
					<p class="woodrobe-showcase__description"><?php echo esc_html( $args['description'] ); ?></p>
				<?php endif; ?>
			</header>
		<?php endif; ?>

		<div class="woodrobe-showcase__grid">
			<?php echo call_user_func( $render_callback, $styles, array(), array(), $instance_id ); ?>
		</div>
	</div>
	<?php
	return ob_get_clean();
}

/**
 * Dynamic render callback for the Showcase block.
 *
 * @param array<string, mixed> $attributes Block attributes.
 * @return string
 */
function woodrobe_render_showcase_block( $attributes ) {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return '';
	}

	$attributes  = (array) $attributes;
	$defaults    = woodrobe_showcase_default_args();
	$show_header = ! array_key_exists( 'showHeader', $attributes ) || (bool) $attributes['showHeader'];
	$block_name  = array_key_exists( 'blockName', $attributes ) ? (string) $attributes['blockName'] : $defaults['block_name'];
	$title       = array_key_exists( 'title', $attributes ) ? (string) $attributes['title'] : $defaults['title'];
	$description = array_key_exists( 'description', $attributes ) ? (string) $attributes['description'] : $defaults['description'];

	return woodrobe_render_showcase(
		array(
			'block_name'          => $block_name,
			'title'              => $show_header ? $title : '',
			'description'        => $show_header ? $description : '',
			'wrapper_attributes' => function_exists( 'get_block_wrapper_attributes' )
				? get_block_wrapper_attributes( array( 'class' => 'woodrobe-showcase' ) )
				: $defaults['wrapper_attributes'],
		)
	);
}

/**
 * Register the Showcase block.
 *
 * @return void
 */
function woodrobe_register_showcase_block() {
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'woodrobe-showcase-editor',
		plugins_url( 'blocks/showcase/index.js', WOODROBE_PLUGIN_FILE ),
		array( 'wp-blocks', 'wp-block-editor', 'wp-components', 'wp-element', 'wp-i18n', 'wp-server-side-render' ),
		woodrobe_asset_version( 'blocks/showcase/index.js' ),
		true
	);
	wp_add_inline_script(
		'woodrobe-showcase-editor',
		'window.woodrobeShowcaseBlocks = ' . wp_json_encode( woodrobe_showcase_editor_block_options() ) . ';',
		'before'
	);

	register_block_type(
		WOODROBE_PLUGIN_DIR . 'blocks/showcase',
		array(
			'editor_script'   => 'woodrobe-showcase-editor',
			'render_callback' => 'woodrobe_render_showcase_block',
		)
	);
}
add_action( 'init', 'woodrobe_register_showcase_block' );

/**
 * Register the wp-admin showcase page.
 *
 * @return void
 */
function woodrobe_register_showcase_page() {
	add_theme_page(
		__( 'WOOdrobe Showcase', 'woodrobe' ),
		__( 'WOOdrobe Showcase', 'woodrobe' ),
		'edit_theme_options',
		WOODROBE_SHOWCASE_PAGE_SLUG,
		'woodrobe_render_showcase_page'
	);
}
add_action( 'admin_menu', 'woodrobe_register_showcase_page' );

/**
 * Add a quick Showcase link on the Plugins screen.
 *
 * @param string[] $links Existing action links.
 * @return string[]
 */
function woodrobe_plugin_action_links( $links ) {
	if ( current_user_can( 'edit_theme_options' ) ) {
		$links[] = sprintf(
			'<a href="%s">%s</a>',
			esc_url( admin_url( 'themes.php?page=' . WOODROBE_SHOWCASE_PAGE_SLUG ) ),
			esc_html__( 'Showcase', 'woodrobe' )
		);
	}

	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( WOODROBE_PLUGIN_FILE ), 'woodrobe_plugin_action_links' );

/**
 * Enqueue showcase assets on the admin showcase page.
 *
 * @param string $hook_suffix Current admin page hook suffix.
 * @return void
 */
function woodrobe_enqueue_showcase_admin_assets( $hook_suffix ) {
	if ( 'appearance_page_' . WOODROBE_SHOWCASE_PAGE_SLUG !== $hook_suffix ) {
		return;
	}

	woodrobe_enqueue_assets();
}
add_action( 'admin_enqueue_scripts', 'woodrobe_enqueue_showcase_admin_assets' );

/**
 * Render the wp-admin showcase page.
 *
 * @return void
 */
function woodrobe_render_showcase_page() {
	?>
	<div class="wrap woodrobe-showcase-admin">
		<h1><?php esc_html_e( 'WOOdrobe Showcase', 'woodrobe' ); ?></h1>
		<p><?php esc_html_e( 'Preview every WOOdrobe style family with sample content, then insert the WOOdrobe Showcase block on any page when you want a public style gallery.', 'woodrobe' ); ?></p>
		<?php
		if ( ! class_exists( 'WooCommerce' ) ) {
			echo '<div class="notice notice-warning inline"><p>' . esc_html__( 'WooCommerce must be active to preview WOOdrobe styles.', 'woodrobe' ) . '</p></div>';
			return;
		}

		$style_map = woodrobe_block_styles();

		foreach ( woodrobe_showcase_available_blocks() as $block_name => $definition ) {
			$count = isset( $style_map[ $block_name ] ) ? count( $style_map[ $block_name ] ) : 0;

			echo woodrobe_render_showcase(
				array(
					'block_name'  => $block_name,
					'title'       => $definition['label'],
					'description' => sprintf(
						/* translators: 1: number of styles, 2: WooCommerce block label. */
						_n( '%1$d WOOdrobe style for the %2$s block.', '%1$d WOOdrobe styles for the %2$s block.', $count, 'woodrobe' ),
						$count,
						$definition['label']
					),
				)
			);
		}
		?>
	</div>
	<?php
}

/**
 * Load translations from the bundled /languages directory. Translations on
 * translate.wordpress.org are loaded automatically by WP for plugins on the
 * directory; this fallback covers off-directory builds.
 *
 * @return void
 */
function woodrobe_load_textdomain() {
	load_plugin_textdomain(
		'woodrobe',
		false,
		dirname( plugin_basename( WOODROBE_PLUGIN_FILE ) ) . '/languages'
	);
}
add_action( 'init', 'woodrobe_load_textdomain', 0 );
