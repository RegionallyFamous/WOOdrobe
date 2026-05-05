=== WOOdrobe ===
Contributors: regionallyfamous
Donate link: https://regionallyfamous.com
Tags: woocommerce, block styles, design, e-commerce, site editor
Requires at least: 6.4
Tested up to: 6.7
Requires PHP: 7.4
Requires Plugins: woocommerce
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A wardrobe of 25 block-style outfits for WooCommerce blocks. Pick a look, ship a store. Multi-block by design.

== Description ==

**WOOdrobe** turns the Site Editor into a fitting room for your WooCommerce store.

Pick a Product Details block, open the Styles panel, and try **Pill Switch**, **Sidebar Tabs**, **Magazine Masthead**, **Bento Grid**, **Field Notebook**, **Filmstrip**, **Q&A Format**, and 18 more — each one a complete look you can ship today.

For theme makers and store builders, WOOdrobe means you stop hand-rolling CSS for the parts of a product page that customers actually read. Pick the visual language that fits the brand, push to production, move on.

= 25 outfits, in three families =

* **Tab strips** — Pill Switch, Sidebar Tabs, Card Tabs, Underline Slide, Chips, Bottom Tabs, Preview Strip
* **Stacked & accordion** — Accordion Stack, Numbered Index, Magazine Masthead, Brutalist, Soft Cards, Progressive Disclosure
* **Editorial & expressive** — Always-on Story, Description First, Q&A Format, Reading View, Filmstrip, Spec Sheet, Marginalia, Bento Grid, Newspaper, Map Pins, Field Notebook, Stat Block

= Why theme makers love it =

* **One stylesheet, 25 looks.** Every variant is CSS-only — no JS dependencies, no build step.
* **Multi-block by design.** First release covers `woocommerce/product-details`. The architecture is built for Cart, Checkout, Mini Cart, Product Image Gallery, and the rest of the WooCommerce block catalog as they ship.
* **Modern micro-interactions.** Smooth panel reveals, hover lifts, on-load stagger, pulse and ping accents — all timed off shared motion tokens. `prefers-reduced-motion` honored everywhere.
* **Site Editor friendly.** Loads cleanly in the editor iframe and on the front end through `enqueue_block_assets`. Cache-busting via stylesheet mtime so your iterations show up immediately.
* **Accessible by default.** Keyboard focus rings on every toggle. Force-open variants stay reachable to screen readers.
* **GPL-2.0-or-later.** Free for personal and commercial work.

= Use it like this =

1. Edit the **Single Product** template in **Appearance &rarr; Editor**.
2. Select the **Product Details** block.
3. Open the **Styles** tab and pick an outfit.

That's it. The store-front transforms instantly.

== Installation ==

1. Upload the `woodrobe` folder to `/wp-content/plugins/`, **or** install through **Plugins &rarr; Add New** and upload the zip.
2. Activate **WOOdrobe** through the **Plugins** menu. WooCommerce must be active.
3. Edit a template in the Site Editor, select a supported WooCommerce block, and pick a style in the **Styles** panel.

== Frequently Asked Questions ==

= Does WOOdrobe require WooCommerce? =

Yes. The plugin only registers styles when WooCommerce is active.

= Will the styles work in the Site Editor preview? =

Yes. WOOdrobe enqueues its stylesheet via `enqueue_block_assets`, which fires for both the editor iframe and the front end.

= Are these styles only for the Product Details block? =

Today, yes — the first release ships 25 variants for `woocommerce/product-details`. The codebase is built around a `woodrobe_block_styles()` map keyed by block name, so additional WooCommerce blocks (Cart, Checkout, Mini Cart, Product Image Gallery, and others) are first-class citizens in upcoming releases.

= Does WOOdrobe ship JavaScript? =

No. Every style is pure CSS, including the micro-interactions and animations.

= Will my store still be accessible? =

Yes. Every variant keeps a visible focus ring on tab toggles, and force-open variants don't hide content from assistive tech. The plugin honors `prefers-reduced-motion` to disable decorative animation for users who request it.

= Can I add my own variants? =

Absolutely. Add a slug + label to `woodrobe_block_styles()` and a CSS section scoped to `.is-style-<slug>` in `assets/styles.css`. The codebase includes an extension recipe at the top of the stylesheet.

= Where do I file bugs or feature requests? =

Open an issue on the project repository (linked under Plugin URI in the plugin header).

== Screenshots ==

1. Pill Switch — a soft segmented control for product tabs.
2. Sidebar Tabs — vertical rail with mono-numbered tabs and a body panel.
3. Bento Grid — a hero card and tidy data cells, magazine-style.
4. Filmstrip — dark, chaptered narrative with oversized numerals.
5. Field Notebook — cream paper with horizontal rules and warm numbered notes.

== Changelog ==

= 1.0.0 =
* First release.
* 25 block-style variants for `woocommerce/product-details`.
* Multi-block architecture ready for additional WooCommerce blocks.
* Micro-interactions: smooth panel reveal, on-load stagger, hover lifts, pulse and ping accents, all governed by shared motion tokens.
* `prefers-reduced-motion` override.
* Cache-busting via stylesheet mtime.
* Loads in both the Site Editor iframe and the front end.

== Upgrade Notice ==

= 1.0.0 =
First release.
