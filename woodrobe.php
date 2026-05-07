<?php
/**
 * Plugin Name:       WOOdrobe
 * Plugin URI:        https://github.com/RegionallyFamous/WOOdrobe
 * Description:       A wardrobe of block-style outfits for WooCommerce blocks — pill switches, sidebar tabs, magazine mastheads, bento grids, field notebooks, and more. Multi-block by design.
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
			array( 'slug' => 'marginalia',          'label' => __( 'Marginalia',             'woodrobe' ) ),
			array( 'slug' => 'bento',               'label' => __( 'Bento Grid',             'woodrobe' ) ),
			array( 'slug' => 'newspaper',           'label' => __( 'Newspaper',              'woodrobe' ) ),
			array( 'slug' => 'map-pins',            'label' => __( 'Map Pins',               'woodrobe' ) ),
			array( 'slug' => 'field-notebook',      'label' => __( 'Field Notebook',         'woodrobe' ) ),
			array( 'slug' => 'stat-block',          'label' => __( 'Stat Block',             'woodrobe' ) ),
		),

		// Add more blocks here as styles ship for them. Examples:
		// 'woocommerce/cart'                  => array(),
		// 'woocommerce/checkout'              => array(),
		// 'woocommerce/mini-cart'             => array(),
		// 'woocommerce/product-image-gallery' => array(),
		// 'woocommerce/product-collection'    => array(),
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
		'marginalia',
		'bento',
		'newspaper',
		'map-pins',
		'field-notebook',
		'stat-block',
	);
}

/**
 * Default render arguments for the showcase.
 *
 * @return array{title:string,description:string,wrapper_attributes:string}
 */
function woodrobe_showcase_default_args() {
	return array(
		'title'              => __( 'WOOdrobe Style Showcase', 'woodrobe' ),
		'description'        => __( 'A live sampler of every Product Details outfit included with WOOdrobe.', 'woodrobe' ),
		'wrapper_attributes' => 'class="woodrobe-showcase"',
	);
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

	$styles            = woodrobe_block_styles();
	$product_styles    = isset( $styles['woocommerce/product-details'] ) ? $styles['woocommerce/product-details'] : array();
	$sample_items      = woodrobe_showcase_items();
	$force_open_styles = woodrobe_showcase_force_open_styles();
	$instance_id       = 'woodrobe-showcase-' . $instance;

	if ( empty( $product_styles ) ) {
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
			<?php foreach ( $product_styles as $style ) : ?>
				<?php
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
								$is_open  = $force_open || 0 === $index;
								$item_id  = $card_id . '-panel-' . ( $index + 1 );
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
			<?php endforeach; ?>
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
	$title       = array_key_exists( 'title', $attributes ) ? (string) $attributes['title'] : $defaults['title'];
	$description = array_key_exists( 'description', $attributes ) ? (string) $attributes['description'] : $defaults['description'];

	return woodrobe_render_showcase(
		array(
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
		<p><?php esc_html_e( 'Preview every Product Details style with the same sample content, then insert the WOOdrobe Showcase block on any page when you want a public style gallery.', 'woodrobe' ); ?></p>
		<?php
		if ( ! class_exists( 'WooCommerce' ) ) {
			echo '<div class="notice notice-warning inline"><p>' . esc_html__( 'WooCommerce must be active to preview WOOdrobe styles.', 'woodrobe' ) . '</p></div>';
			return;
		}

		echo woodrobe_render_showcase(
			array(
				'title'       => '',
				'description' => '',
			)
		);
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
