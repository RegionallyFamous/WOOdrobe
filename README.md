<div align="center">

<br/>

# `WOOdrobe`

### A wardrobe of block-style outfits for WooCommerce.
### Pick a look. Ship a store.

<br/>

[![License](https://img.shields.io/badge/License-GPL_v2%2B-1a1a1a?style=for-the-badge&labelColor=1a1a1a&color=8a8a86)](https://www.gnu.org/licenses/gpl-2.0.html)
[![WordPress](https://img.shields.io/badge/WordPress-6.4%2B-1a1a1a?style=for-the-badge&labelColor=1a1a1a&color=21759b)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-7.4%2B-1a1a1a?style=for-the-badge&labelColor=1a1a1a&color=777bb4)](https://www.php.net)
[![WooCommerce](https://img.shields.io/badge/WooCommerce-required-1a1a1a?style=for-the-badge&labelColor=1a1a1a&color=96588a)](https://woocommerce.com)
[![Multi-block](https://img.shields.io/badge/Multi--block-by%20design-1a1a1a?style=for-the-badge&labelColor=1a1a1a&color=b35a2c)](#architecture)

<br/>

[![Try it live](https://img.shields.io/badge/▶%20%20Try%20it%20live%20in%20WordPress%20Playground-1a1a1a?style=for-the-badge&logo=wordpress&logoColor=ffffff)](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/RegionallyFamous/WOOdrobe/main/blueprint.json)

**Live demo →** https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/RegionallyFamous/WOOdrobe/main/blueprint.json

</div>

<br/>

> WOOdrobe turns the Site Editor into a fitting room for your WooCommerce store. Edit the **Single Product** template, select **Product Details**, open the **Styles** panel, and try a complete look — pre-designed, pre-animated, ready to ship.

For theme makers and store builders, WOOdrobe means you stop hand-rolling CSS for the parts of a product page customers actually read. Pick the visual language that fits the brand. Push to production. Move on.

<br/>

---

<br/>

## The wardrobe

**25 variants in three families**, all targeting `woocommerce/product-details` today, with more WooCommerce blocks coming.

<details open>
<summary><b>Tab strips</b> — segmented controls and tab bars (7)</summary>

<br/>

| Variant | Look |
| :--- | :--- |
| **Pill Switch** | Soft segmented control with a sliding active pill |
| **Sidebar Tabs** | Vertical rail with mono-numbered tabs and a body panel |
| **Card Tabs** | Folder-tab metaphor — active tab lifts and joins the body card |
| **Underline Slide** | Classic underlined tabs with crisp dividers |
| **Chips** | Compact rounded chips with a pulsing active dot |
| **Bottom Tabs** | Body on top, tabs at bottom in a 3-column strip |
| **Preview Strip** | Tab cards with body sitting beneath the strip |

</details>

<details open>
<summary><b>Stacked & accordion</b> — open/close, scannable rows (6)</summary>

<br/>

| Variant | Look |
| :--- | :--- |
| **Accordion Stack** | Refined card with soft hover and animated chevron |
| **Numbered Index** | Editorial decimal-leading-zero index with serif headlines |
| **Magazine Masthead** | Top/bottom heavy rules; serif italic active heading |
| **Brutalist** | 2px ink border, uppercase mono, inverted active state |
| **Soft Cards** | Gradient outer with soft cards that lift on hover |
| **Progressive Disclosure** | Crisp dividers; hover slides padding |

</details>

<details open>
<summary><b>Editorial & expressive</b> — narrative, technical, playful (12)</summary>

<br/>

| Variant | Look |
| :--- | :--- |
| **Always-on Story** | Force-open editorial stream with mono kickers |
| **Description First** | First item is the hero; rest are boxed glance modules |
| **Q&A Format** | 280px+1fr grid per item, "Q." prefix in warm orange |
| **Reading View** | Centered serif body, mono kickers, clean separators |
| **Filmstrip** | Dark surface, oversized numerals, warm kicker |
| **Spec Sheet** | Mono datasheet on inked rules |
| **Marginalia** | Main column + voiced annotations to the right |
| **Bento Grid** | 4-col grid with a dark hero card and soft cells |
| **Newspaper** | Inked masthead, serif headlines, columnar body |
| **Map Pins** | Grid background with offset cards and pinging dots |
| **Field Notebook** | Cream paper, horizontal rules, warm numbered notes |
| **Stat Block** | RPG character sheet — heavy border, mono labels |

</details>

<br/>

---

<br/>

## Why it's different

> **One stylesheet, 25 looks.** Every variant is pure CSS — no JS dependencies, no build step.

> **Multi-block by design.** Built around a `block_name → variants` map so any WooCommerce block can drop in.

> **Theme-aware tokens.** WOOdrobe reads from your theme's `theme.json` palette and font families first — surface, contrast, accent, body / heading / monospace — and falls back to its own values only when the theme doesn't define a slug. Derived gray tones use `color-mix()`, so the entire tonal ramp follows the theme automatically (including dark themes).

> **Modern motion.** Smooth panel reveals, hover lifts, on-load stagger, pulse and ping accents, all timed off shared motion tokens. `prefers-reduced-motion` honored everywhere.

> **Site Editor friendly.** Loads cleanly in the editor iframe and on the front end through `enqueue_block_assets`. Cache-busts via stylesheet mtime, so iterations show up immediately.

> **Accessible by default.** Visible focus rings on every toggle. Force-open variants stay reachable to assistive tech.

<br/>

## Use it

```
Appearance → Editor → Single Product → Product Details → Styles → pick one
```

That's it. The store-front transforms instantly.

<br/>

## Install

```bash
git clone https://github.com/RegionallyFamous/WOOdrobe.git wp-content/plugins/woodrobe
```

Activate **WOOdrobe** in **Plugins**. WooCommerce must be active first.

<details>
<summary>Local development</summary>

<br/>

```bash
git clone https://github.com/RegionallyFamous/WOOdrobe.git
cd WOOdrobe
./sync-to-studio.sh   # rsyncs into ~/Studio/theme-factory/wp-content/plugins/woodrobe
```

`sync-to-studio.sh` mirrors the working tree into a local Studio site and bumps the stylesheet mtime so the cache-buster updates immediately.

</details>

<br/>

## Architecture

<details>
<summary>Adding support for another WooCommerce block (two steps)</summary>

<br/>

**1.** Add a block-name entry to `woodrobe_block_styles()` in [`woodrobe.php`](woodrobe.php):

```php
'woocommerce/cart' => array(
    array( 'slug' => 'minimal-checkout', 'label' => __( 'Minimal Checkout', 'woodrobe' ) ),
    // …
),
```

**2.** Append a `BLOCK: woocommerce/cart` section to [`assets/styles.css`](assets/styles.css), with selectors scoped to `.is-style-<slug>.wp-block-woocommerce-cart` (and descendants).

The plugin auto-registers every entry through `register_block_style()` and shares the single stylesheet handle so design tokens cascade across blocks and the request count stays at 1.

</details>

<br/>

## Roadmap

| Status | Block | Variants |
| :---: | :--- | :---: |
| ✓ shipped | `woocommerce/product-details` | **25** |
| next | `woocommerce/cart` | — |
| next | `woocommerce/checkout` | — |
| planned | `woocommerce/mini-cart` | — |
| planned | `woocommerce/product-image-gallery` | — |
| planned | `woocommerce/product-collection` | — |
| planned | `woocommerce/product-rating` | — |
| planned | `woocommerce/related-products` | — |
| planned | `woocommerce/product-reviews` | — |
| planned | `woocommerce/customer-account` | — |
| planned | `woocommerce/store-notices` | — |

Vote on the next block by [opening an issue ↗](https://github.com/RegionallyFamous/WOOdrobe/issues).

<br/>

## Compatibility

| | |
| :--- | :--- |
| WordPress | **6.4+** |
| PHP | **7.4+** |
| WooCommerce | any recent version |
| Theme | block themes (FSE) — classic themes don't render the targeted blocks |

<br/>

---

<br/>

<div align="center">

**[`Try it live ↗`](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/RegionallyFamous/WOOdrobe/main/blueprint.json)**  ·  **[`Report an issue ↗`](https://github.com/RegionallyFamous/WOOdrobe/issues)**  ·  **[`License ↗`](LICENSE)**

<br/>

<sub>Made by <a href="https://regionallyfamous.com">Regionally Famous</a> · GPL-2.0-or-later</sub>

</div>
