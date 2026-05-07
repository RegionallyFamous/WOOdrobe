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

A wardrobe of 43 block-style outfits for WooCommerce blocks. Pick a look, ship a store. Multi-block by design.

== Description ==

**WOOdrobe** turns the Site Editor into a fitting room for your WooCommerce store.

Pick a Product Details or Product Collection block, open the Styles panel, and try **Pill Switch**, **Sidebar Tabs**, **Magazine Masthead**, **Bento Grid**, **Classic Refined**, **Catalog Dense**, **Showcase Hero**, **Masonry**, and 35 more — each one a complete look you can ship today.

For theme makers and store builders, WOOdrobe means you stop hand-rolling CSS for the parts of a store that customers actually read and browse. Pick the visual language that fits the brand, push to production, move on.

= 43 outfits, across two WooCommerce blocks =

* **Tab strips** — Pill Switch, Sidebar Tabs, Card Tabs, Underline Slide, Chips, Bottom Tabs, Preview Strip
* **Stacked & accordion** — Accordion Stack, Numbered Index, Magazine Masthead, Brutalist, Soft Cards, Progressive Disclosure
* **Editorial & expressive** — Always-on Story, Description First, Q&A Format, Reading View, Filmstrip, Spec Sheet, Bento Grid, Newspaper, Field Notebook, Stat Block
* **Product Collection** — Classic Refined, Editorial Magazine, Catalog Dense, Hover Reveal, Card Stack (Soft), Brutalist Mono, Showcase Hero, Bento Mixed, Polaroid Pinboard, Index Card, Marquee Strip, Swatch-First, Conversational, Minimal Text-Only, Image-Left List, Two-Up Wide, Five Column Dense, Info Beside Image, Info Overlay, Masonry

= Why theme makers love it =

* **One stylesheet, 43 looks.** Every variant is styled in CSS, with one tiny dependency-free script only for tab-style autoclose behavior.
* **Built-in showcase block.** Open **Appearance &rarr; WOOdrobe Showcase** or insert the **WOOdrobe Showcase** block on a page to preview a selected style family with the same sample content.
* **Multi-block by design.** First release covers `woocommerce/product-details` and `woocommerce/product-collection`. The architecture is built for Cart, Checkout, Mini Cart, Product Image Gallery, and the rest of the WooCommerce block catalog as they ship.
* **Modern micro-interactions.** Smooth panel reveals, hover lifts, on-load stagger, and pulse accents — all timed off shared motion tokens. `prefers-reduced-motion` honored everywhere.
* **Site Editor friendly.** Loads cleanly in the editor iframe and on the front end through `enqueue_block_assets`. Cache-busting via stylesheet mtime so your iterations show up immediately.
* **Accessible by default.** Keyboard focus rings on every toggle. Force-open variants stay reachable to screen readers.
* **GPL-2.0-or-later.** Free for personal and commercial work.

= Use it like this =

1. Edit a template in **Appearance &rarr; Editor**.
2. Select the **Product Details** or **Product Collection** block.
3. Open the **Styles** tab and pick an outfit.

That's it. The store-front transforms instantly.

To browse the wardrobe at once, open **Appearance &rarr; WOOdrobe Showcase** in wp-admin or insert the **WOOdrobe Showcase** block on any page. The block includes a **Styles to show** control so each WooCommerce block family can appear in the same gallery.

== Installation ==

1. Upload the `woodrobe` folder to `/wp-content/plugins/`, **or** install through **Plugins &rarr; Add New** and upload the zip.
2. Activate **WOOdrobe** through the **Plugins** menu. WooCommerce must be active.
3. Edit a template in the Site Editor, select a supported WooCommerce block, and pick a style in the **Styles** panel.

== Frequently Asked Questions ==

= Does WOOdrobe require WooCommerce? =

Yes. The plugin only registers styles when WooCommerce is active.

= Will the styles work in the Site Editor preview? =

Yes. WOOdrobe enqueues its stylesheet via `enqueue_block_assets`, which fires for both the editor iframe and the front end.

= Can I preview every style at once? =

Yes. Open **Appearance &rarr; WOOdrobe Showcase** in wp-admin, or insert the **WOOdrobe Showcase** block on any page to render a public style gallery. The block can target different supported WooCommerce block families as they ship.

= Which WooCommerce blocks are styled today? =

The first release ships 23 variants for `woocommerce/product-details` and 20 variants for `woocommerce/product-collection`. The codebase is built around a `woodrobe_block_styles()` map keyed by block name, so additional WooCommerce blocks (Cart, Checkout, Mini Cart, Product Image Gallery, and others) are first-class citizens in upcoming releases.

= Does WOOdrobe ship JavaScript? =

Yes, but only a tiny dependency-free script for the tab-strip variants. It makes tab-like styles close sibling panels when a new tab opens; all visual styling and animation still live in CSS.

= Will my store still be accessible? =

Yes. Every variant keeps a visible focus ring on tab toggles, and force-open variants don't hide content from assistive tech. The plugin honors `prefers-reduced-motion` to disable decorative animation for users who request it.

= Can I add my own variants? =

Absolutely. Add a slug + label to `woodrobe_block_styles()` and a CSS section scoped to the target block wrapper, such as `.wp-block-woocommerce-product-details.is-style-<slug>`, in `assets/styles.css`. The codebase includes an extension recipe at the top of the stylesheet.

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
* 23 block-style variants for `woocommerce/product-details`.
* 20 block-style variants for `woocommerce/product-collection`.
* Built-in style showcase page and dynamic WOOdrobe Showcase block.
* Multi-block architecture ready for additional WooCommerce blocks.
* Micro-interactions: smooth panel reveal, on-load stagger, hover lifts, and pulse accents, all governed by shared motion tokens.
* `prefers-reduced-motion` override.
* Cache-busting via stylesheet mtime.
* Loads in both the Site Editor iframe and the front end.

== Upgrade Notice ==

= 1.0.0 =
First release.
