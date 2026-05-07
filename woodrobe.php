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

		// Add more blocks here as styles ship for them. Examples:
		// 'woocommerce/cart'                  => array(),
		// 'woocommerce/checkout'              => array(),
		// 'woocommerce/mini-cart'             => array(),
		// 'woocommerce/product-image-gallery' => array(),
		// 'woocommerce/product-rating'        => array(),
		// 'woocommerce/related-products'      => array(),
		// 'woocommerce/product-reviews'       => array(),
		// 'woocommerce/customer-account'      => array(),
		// 'woocommerce/store-notices'         => array(),
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
 * Sample accordion rows used by the Showcase block and admin preview.
 *
 * @return array<int, array{title:string,body:string}>
 */
function woodrobe_showcase_items() {
	return array(
		array(
			'title' => __( 'Story', 'woodrobe' ),
			'body'  => __( 'A concise product narrative with enough texture to make layout, rhythm, and hierarchy visible.', 'woodrobe' ),
		),
		array(
			'title' => __( 'Materials', 'woodrobe' ),
			'body'  => __( 'Cotton canvas, brushed hardware, tonal stitching, and the small construction details shoppers look for.', 'woodrobe' ),
		),
		array(
			'title' => __( 'Care', 'woodrobe' ),
			'body'  => __( 'Spot clean, air dry, and keep the finish away from high heat. Built for everyday use.', 'woodrobe' ),
		),
	);
}

/**
 * Styles intentionally shown as open editorial layouts in the showcase.
 *
 * @return string[]
 */
function woodrobe_showcase_force_open_styles() {
	return array(
		'always-on-story',
		'description-first',
		'qa-format',
		'reading-view',
		'filmstrip',
		'spec-sheet',
		'bento',
		'newspaper',
		'field-notebook',
		'stat-block',
	);
}

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
 * Render Product Details showcase cards.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Sample accordion rows.
 * @param string[]                                    $force_open_styles Styles that should render all panels open.
 * @param string                                      $instance_id Unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_details_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	ob_start();

	foreach ( $styles as $style ) :
		$slug       = $style['slug'];
		$label      = $style['label'];
		$force_open = in_array( $slug, $force_open_styles, true );
		$card_id    = $instance_id . '-' . sanitize_html_class( $slug );
		?>
		<article class="woodrobe-showcase__card">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<div class="wp-block-woocommerce-product-details is-style-<?php echo esc_attr( $slug ); ?>">
				<div class="wp-block-accordion">
					<?php foreach ( $sample_items as $index => $item ) : ?>
						<?php
						$is_open   = $force_open || 0 === $index;
						$item_id   = $card_id . '-panel-' . ( $index + 1 );
						$button_id = $card_id . '-toggle-' . ( $index + 1 );
						?>
						<div class="wp-block-accordion-item<?php echo esc_attr( $is_open ? ' is-open' : '' ); ?>">
							<h4 class="wp-block-accordion-heading">
								<button
									id="<?php echo esc_attr( $button_id ); ?>"
									class="wp-block-accordion-heading__toggle"
									type="button"
									aria-expanded="<?php echo esc_attr( $is_open ? 'true' : 'false' ); ?>"
									aria-controls="<?php echo esc_attr( $item_id ); ?>"<?php echo $force_open ? '' : ' data-woodrobe-showcase-toggle'; ?>
								>
									<span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html( $item['title'] ); ?></span>
									<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
								</button>
							</h4>
							<div
								id="<?php echo esc_attr( $item_id ); ?>"
								class="wp-block-accordion-panel"
								role="region"
								aria-labelledby="<?php echo esc_attr( $button_id ); ?>"<?php echo $is_open ? '' : ' hidden'; ?>
							>
								<p><?php echo esc_html( $item['body'] ); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</article>
		<?php
	endforeach;

	return ob_get_clean();
}

/**
 * Sample products used by the Product Collection showcase.
 *
 * @return array<int, array<string, mixed>>
 */
function woodrobe_showcase_products() {
	return array(
		array(
			'name'      => __( 'Linen Tote Bag', 'woodrobe' ),
			'category'  => __( 'Accessories', 'woodrobe' ),
			'price'     => 42,
			'old_price' => null,
			'state'     => 'regular',
			'color'     => '#c9b89e',
			'accent'    => '#8a7355',
			'rating'    => '4.8',
			'reviews'   => 124,
			'swatches'  => array( '#1a1a1a', '#c9b89e', '#8a7355' ),
		),
		array(
			'name'      => __( 'Ceramic Mug Set', 'woodrobe' ),
			'category'  => __( 'Home', 'woodrobe' ),
			'price'     => 28,
			'old_price' => 36,
			'state'     => 'sale',
			'color'     => '#e8d5c4',
			'accent'    => '#a07355',
			'rating'    => '4.6',
			'reviews'   => 89,
			'swatches'  => array( '#e8d5c4', '#a07355', '#5b6f7a' ),
		),
		array(
			'name'      => __( 'Wool Blend Beanie', 'woodrobe' ),
			'category'  => __( 'Apparel', 'woodrobe' ),
			'price'     => 32,
			'old_price' => null,
			'state'     => 'new',
			'color'     => '#5b6f7a',
			'accent'    => '#2c3e50',
			'rating'    => '4.9',
			'reviews'   => 56,
			'swatches'  => array( '#5b6f7a', '#9aa89e', '#2c3e50' ),
		),
		array(
			'name'      => __( 'Leather Notebook', 'woodrobe' ),
			'category'  => __( 'Stationery', 'woodrobe' ),
			'price'     => 24,
			'old_price' => 30,
			'state'     => 'incart',
			'quantity'  => 2,
			'color'     => '#7a4f3a',
			'accent'    => '#3e2820',
			'rating'    => '4.7',
			'reviews'   => 203,
			'swatches'  => array( '#7a4f3a', '#3e2820', '#c9b89e' ),
		),
		array(
			'name'       => __( 'Glass Carafe', 'woodrobe' ),
			'category'   => __( 'Home', 'woodrobe' ),
			'price'      => 48,
			'old_price'  => null,
			'state'      => 'lowstock',
			'stock_left' => 3,
			'color'      => '#a8c4b8',
			'accent'     => '#4a6a5e',
			'rating'     => '4.5',
			'reviews'    => 67,
			'swatches'   => array( '#a8c4b8', '#4a6a5e', '#e8d5c4' ),
		),
		array(
			'name'      => __( 'Cotton Throw Pillow', 'woodrobe' ),
			'category'  => __( 'Home', 'woodrobe' ),
			'price'     => 38,
			'old_price' => 52,
			'state'     => 'sale',
			'color'     => '#d89b7a',
			'accent'    => '#7a4530',
			'rating'    => '4.8',
			'reviews'   => 142,
			'swatches'  => array( '#d89b7a', '#7a4530', '#a8c4b8' ),
		),
		array(
			'name'      => __( 'Brass Candleholder', 'woodrobe' ),
			'category'  => __( 'Decor', 'woodrobe' ),
			'price'     => 56,
			'old_price' => null,
			'state'     => 'regular',
			'color'     => '#c9a876',
			'accent'    => '#7a5a30',
			'rating'    => '4.9',
			'reviews'   => 38,
			'swatches'  => array( '#c9a876', '#7a5a30', '#1a1a1a' ),
		),
		array(
			'name'      => __( 'Knit Sweater', 'woodrobe' ),
			'category'  => __( 'Apparel', 'woodrobe' ),
			'price'     => 78,
			'old_price' => null,
			'state'     => 'outofstock',
			'color'     => '#9aa89e',
			'accent'    => '#4a5a4e',
			'rating'    => '4.7',
			'reviews'   => 91,
			'swatches'  => array( '#9aa89e', '#4a5a4e', '#d89b7a' ),
		),
	);
}

/**
 * Button label for a showcase product state.
 *
 * @param array<string, mixed> $product Product descriptor.
 * @return string
 */
function woodrobe_showcase_product_button_label( $product ) {
	$state = isset( $product['state'] ) ? (string) $product['state'] : 'regular';

	if ( 'outofstock' === $state ) {
		return __( 'Sold out', 'woodrobe' );
	}

	if ( 'incart' === $state ) {
		return sprintf(
			/* translators: %d: quantity currently in cart. */
			__( 'In bag (%d)', 'woodrobe' ),
			isset( $product['quantity'] ) ? (int) $product['quantity'] : 1
		);
	}

	return __( 'Add to cart', 'woodrobe' );
}

/**
 * Render Product Collection showcase cards.
 *
 * @param array<int, array{slug:string,label:string}> $styles Style descriptors.
 * @param array<int, array{title:string,body:string}> $sample_items Unused sample accordion rows.
 * @param string[]                                    $force_open_styles Unused force-open styles.
 * @param string                                      $instance_id Unique showcase instance id.
 * @return string
 */
function woodrobe_render_product_collection_showcase_cards( $styles, $sample_items, $force_open_styles, $instance_id ) {
	unset( $sample_items, $force_open_styles );

	$products = woodrobe_showcase_products();

	ob_start();

	foreach ( $styles as $style ) :
		$slug  = $style['slug'];
		$label = $style['label'];
		?>
		<article class="woodrobe-showcase__card woodrobe-showcase__card--product-collection">
			<h3 class="woodrobe-showcase__card-title"><?php echo esc_html( $label ); ?></h3>
			<div class="wp-block-woocommerce-product-collection is-style-<?php echo esc_attr( $slug ); ?>">
				<div class="woodrobe-product-collection__bar">
					<strong><?php esc_html_e( 'Featured products', 'woodrobe' ); ?></strong>
					<span><?php esc_html_e( '8 of 24', 'woodrobe' ); ?></span>
					<button type="button"><?php esc_html_e( 'Sort: Featured', 'woodrobe' ); ?></button>
				</div>
				<ul class="wc-block-product-template wp-block-post-template woodrobe-product-grid-sample" aria-label="<?php echo esc_attr( $label ); ?>">
					<?php foreach ( $products as $index => $product ) : ?>
						<?php
						$state       = isset( $product['state'] ) ? (string) $product['state'] : 'regular';
						$item_number = $index + 1;
						$has_sale    = ! empty( $product['old_price'] );
						$item_class  = 'wc-block-product woodrobe-product-card is-' . sanitize_html_class( $state );
						$style_attr  = sprintf(
							'--woodrobe-product-color:%1$s;--woodrobe-product-accent:%2$s;',
							esc_attr( (string) $product['color'] ),
							esc_attr( (string) $product['accent'] )
						);
						?>
						<li class="<?php echo esc_attr( $item_class ); ?>">
							<figure class="wp-block-woocommerce-product-image wc-block-components-product-image woodrobe-product-image" style="<?php echo esc_attr( $style_attr ); ?>">
								<span class="woodrobe-product-image__pattern" aria-hidden="true"></span>
								<span class="woodrobe-product-image__label"><?php echo esc_html( $product['category'] ); ?> · <?php echo esc_html( str_pad( (string) $item_number, 2, '0', STR_PAD_LEFT ) ); ?></span>
								<?php if ( $has_sale ) : ?>
									<span class="wc-block-components-product-sale-badge onsale woodrobe-product-badge"><?php esc_html_e( 'Sale', 'woodrobe' ); ?></span>
								<?php elseif ( 'new' === $state ) : ?>
									<span class="woodrobe-product-badge"><?php esc_html_e( 'New', 'woodrobe' ); ?></span>
								<?php elseif ( 'outofstock' === $state ) : ?>
									<span class="woodrobe-product-badge"><?php esc_html_e( 'Sold out', 'woodrobe' ); ?></span>
								<?php elseif ( 'lowstock' === $state ) : ?>
									<span class="woodrobe-product-badge"><?php esc_html_e( 'Low stock', 'woodrobe' ); ?></span>
								<?php endif; ?>
							</figure>
							<div class="woodrobe-product-meta">
								<div class="woodrobe-product-category"><?php echo esc_html( $product['category'] ); ?></div>
								<h4 class="wp-block-post-title woodrobe-product-name"><a href="#<?php echo esc_attr( $instance_id . '-' . sanitize_html_class( $slug ) . '-' . $item_number ); ?>"><?php echo esc_html( $product['name'] ); ?></a></h4>
								<div class="woodrobe-product-rating" aria-label="<?php echo esc_attr( sprintf( __( '%1$s stars from %2$d reviews', 'woodrobe' ), $product['rating'], $product['reviews'] ) ); ?>">
									<span aria-hidden="true">*****</span>
									<small><?php echo esc_html( $product['rating'] ); ?> (<?php echo esc_html( (string) $product['reviews'] ); ?>)</small>
								</div>
								<div class="woodrobe-product-swatches" aria-label="<?php esc_attr_e( 'Available colors', 'woodrobe' ); ?>">
									<?php foreach ( $product['swatches'] as $swatch_index => $swatch ) : ?>
										<span style="<?php echo esc_attr( '--woodrobe-swatch:' . $swatch . ';' ); ?>"<?php echo 0 === $swatch_index ? ' class="is-selected"' : ''; ?>></span>
									<?php endforeach; ?>
								</div>
								<div class="wp-block-woocommerce-product-price wc-block-components-product-price price woodrobe-product-price">
									<?php if ( $has_sale ) : ?>
										<del class="woodrobe-product-old-price">$<?php echo esc_html( (string) $product['old_price'] ); ?></del>
									<?php endif; ?>
									<ins>$<?php echo esc_html( (string) $product['price'] ); ?></ins>
								</div>
								<?php if ( 'lowstock' === $state && ! empty( $product['stock_left'] ) ) : ?>
									<div class="woodrobe-product-stock"><?php echo esc_html( sprintf( __( 'Only %d left', 'woodrobe' ), (int) $product['stock_left'] ) ); ?></div>
								<?php endif; ?>
								<div class="wp-block-woocommerce-product-button wc-block-components-product-button woodrobe-product-action">
									<button class="wp-block-button__link wc-block-components-product-button__button woodrobe-product-button" type="button"><?php echo esc_html( woodrobe_showcase_product_button_label( $product ) ); ?></button>
								</div>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
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
	$sample_items        = woodrobe_showcase_items();
	$force_open_styles   = woodrobe_showcase_force_open_styles();
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
			<?php echo call_user_func( $render_callback, $styles, $sample_items, $force_open_styles, $instance_id ); ?>
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
