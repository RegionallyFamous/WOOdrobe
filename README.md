# WOOdrobe

> A wardrobe of block-style outfits for WooCommerce blocks. Pick a look, ship a store.

WOOdrobe turns the Site Editor into a fitting room for your WooCommerce store. Edit the **Single Product** template, select **Product Details**, open the Styles panel, and try **Pill Switch**, **Sidebar Tabs**, **Magazine Masthead**, **Bento Grid**, **Field Notebook**, **Filmstrip**, **Q&A Format**, and 18 more — each a complete look you can ship today.

For theme makers and store builders, WOOdrobe means you stop hand-rolling CSS for the parts of a product page that customers actually read. Pick the visual language that fits the brand, push to production, move on.

## ⚡ Try it live

[**Open WOOdrobe in WordPress Playground →**](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/RegionallyFamous/WOOdrobe/main/blueprint.json)

The blueprint spins up a fresh WordPress install with WooCommerce, WOOdrobe, and a sample product, then drops you straight into the Site Editor on the Single Product template. Click into the Product Details block and start swapping styles.

## 25 outfits, in three families

**Tab strips** — Pill Switch · Sidebar Tabs · Card Tabs · Underline Slide · Chips · Bottom Tabs · Preview Strip

**Stacked & accordion** — Accordion Stack · Numbered Index · Magazine Masthead · Brutalist · Soft Cards · Progressive Disclosure

**Editorial & expressive** — Always-on Story · Description First · Q&A Format · Reading View · Filmstrip · Spec Sheet · Marginalia · Bento Grid · Newspaper · Map Pins · Field Notebook · Stat Block

## Why theme makers love it

- **One stylesheet, 25 looks.** Every variant is CSS-only. No JS dependencies, no build step.
- **Multi-block by design.** First release covers `woocommerce/product-details`. The architecture is ready for Cart, Checkout, Mini Cart, Product Image Gallery, and the rest of the WooCommerce block catalog.
- **Modern micro-interactions.** Smooth panel reveals, hover lifts, on-load stagger, pulse and ping accents — timed off shared motion tokens. `prefers-reduced-motion` honored everywhere.
- **Site Editor friendly.** Loads cleanly in the editor iframe and on the front end through `enqueue_block_assets`. Cache-busts via stylesheet mtime, so your iterations show up immediately.
- **Accessible by default.** Visible focus rings on every toggle. Force-open variants stay reachable to assistive tech.
- **GPL-2.0-or-later.** Free for personal and commercial work.

## Use it

1. Edit the **Single Product** template in **Appearance → Editor**.
2. Select the **Product Details** block.
3. Open the **Styles** tab and pick an outfit.

That's it. The store-front transforms instantly.

## Install

### From this repo

```bash
git clone https://github.com/RegionallyFamous/WOOdrobe.git wp-content/plugins/woodrobe
```

Then activate WOOdrobe in **Plugins**. WooCommerce must be active first.

### Local development

```bash
git clone https://github.com/RegionallyFamous/WOOdrobe.git
cd woodrobe
./sync-to-studio.sh   # rsyncs into a local Studio site at ~/Studio/theme-factory
```

`sync-to-studio.sh` mirrors the working tree into `~/Studio/theme-factory/wp-content/plugins/woodrobe` and bumps the stylesheet mtime so the cache-buster updates.

## Architecture

WOOdrobe is built around a single map of block → variants. Adding support for a new WooCommerce block is two steps:

1. Add an entry to `woodrobe_block_styles()` in [`woodrobe.php`](woodrobe.php):

   ```php
   'woocommerce/cart' => array(
       array( 'slug' => 'minimal-checkout', 'label' => __( 'Minimal Checkout', 'woodrobe' ) ),
       // …
   ),
   ```

2. Append a `BLOCK: woocommerce/cart` section to [`assets/styles.css`](assets/styles.css), with selectors scoped to `.is-style-<slug>.wp-block-woocommerce-cart` (and descendants).

The plugin auto-registers every entry through `register_block_style()` and shares the stylesheet handle so design tokens cascade and the request count stays at 1.

## Roadmap

- ✅ `woocommerce/product-details` — 25 variants
- ⬜ `woocommerce/cart`
- ⬜ `woocommerce/checkout`
- ⬜ `woocommerce/mini-cart`
- ⬜ `woocommerce/product-image-gallery`
- ⬜ `woocommerce/product-collection`
- ⬜ `woocommerce/product-rating`
- ⬜ `woocommerce/related-products`
- ⬜ `woocommerce/product-reviews`
- ⬜ `woocommerce/customer-account`
- ⬜ `woocommerce/store-notices`

Vote on the next block by [opening an issue](https://github.com/RegionallyFamous/WOOdrobe/issues).

## Compatibility

- WordPress **6.4+**
- PHP **7.4+**
- WooCommerce (any recent version)
- Block themes (FSE) only — classic themes won't render the targeted blocks.

## License

GPL-2.0-or-later. See [LICENSE](LICENSE).
