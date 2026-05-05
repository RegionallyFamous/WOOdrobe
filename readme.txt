=== WOOdrobe ===
Contributors: gumshoe
Tags: woocommerce, blocks, block-styles, design-system
Requires at least: 6.4
Tested up to: 6.9
Requires PHP: 7.4
Requires Plugins: woocommerce
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A wardrobe of block-style outfits for WooCommerce blocks. Multi-block by design.

== Description ==

WOOdrobe ships an opinionated set of block styles for the modern WooCommerce
Site Editor flow. Pick a style from the Styles panel and the block re-skins
itself — pill switches, sidebar tabs, magazine mastheads, bento grids, field
notebooks, and more.

Styles ship per WooCommerce block. The first release covers
`woocommerce/product-details` with 25 variants for the accordion inside it
(Description / Additional information / Reviews). Additional WC blocks
(Cart, Checkout, Mini Cart, Product Image Gallery, Product Collection,
Product Reviews, etc.) get their own style sets in subsequent updates.

= Highlights =
* Multi-block architecture — one wardrobe, many WooCommerce blocks
* CSS-only — no JavaScript dependencies
* Smooth micro-interactions with `prefers-reduced-motion` respected
* Design tokens shared across blocks for consistent typography, color, motion
* Cache-busting via stylesheet mtime, so iterations show up immediately
* Loads in both the Site Editor iframe and the front end via `enqueue_block_assets`

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/`.
2. Activate it through the Plugins menu (WooCommerce must be installed).
3. Edit a template in the Site Editor, select a supported WooCommerce block,
   and pick a style in the Styles panel.

== Changelog ==

= 1.0.0 =
* First release as WOOdrobe.
* 25 variants for `woocommerce/product-details` (the accordion inside).
* Multi-block scaffolding ready for additional WC blocks.
* Micro-interactions: smooth panel reveal, on-load stagger, hover lifts,
  pulse/ping accents, prefers-reduced-motion override.
