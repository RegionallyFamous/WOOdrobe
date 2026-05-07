/**
 * WOOdrobe — tab-strip autoclose
 *
 * The 7 tab-strip variants (pill-switch, sidebar-tabs, card-tabs,
 * underline-slide, chips, bottom-tabs, preview-strip) read as tabs to the
 * user, so opening one item should close the others. The underlying core
 * accordion block defaults to multi-open. This tiny script enforces
 * autoclose on those variants only, leaving every other variant
 * (accordion, magazine-masthead, etc.) with the standard accordion
 * behavior.
 *
 * Also powers the static Showcase block and wp-admin sampler, where the
 * core accordion interactivity layer is not present. Pure delegated click
 * handling. No frameworks, no build step.
 */
( function () {
	'use strict';

	var TAB_STRIP_VARIANTS = [
		'is-style-pill-switch',
		'is-style-sidebar-tabs',
		'is-style-card-tabs',
		'is-style-underline-slide',
		'is-style-chips',
		'is-style-bottom-tabs',
		'is-style-preview-strip',
	];
	function setItemOpen( item, open ) {
		var itemToggle = item.querySelector( '.wp-block-accordion-heading__toggle' );
		var panel = item.querySelector( '.wp-block-accordion-panel' );

		item.classList.toggle( 'is-open', open );

		if ( itemToggle ) {
			itemToggle.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
		}

		if ( panel ) {
			if ( open ) {
				panel.removeAttribute( 'hidden' );
			} else {
				panel.setAttribute( 'hidden', 'hidden' );
			}
		}
	}

	// Re-entrancy guard: when we close a sibling we synthesize a click on
	// its toggle, which fires this same listener. Without the flag we'd
	// recurse indefinitely.
	var closing = false;

	document.addEventListener( 'click', function ( event ) {
		if ( closing ) {
			return;
		}

		var target = event.target;
		if ( ! target || typeof target.closest !== 'function' ) {
			return;
		}

		var toggle = target.closest( '.wp-block-accordion-heading__toggle' );
		if ( ! toggle ) {
			return;
		}

		var item = toggle.closest( '.wp-block-accordion-item' );
		if ( ! item ) {
			return;
		}

		// Walk up to the styled WC product-details wrapper.
		var styleHost = item.closest(
			'.wp-block-woocommerce-product-details[class*="is-style-"]'
		);
		if ( ! styleHost ) {
			return;
		}

		var hasTabStrip = TAB_STRIP_VARIANTS.some( function ( cls ) {
			return styleHost.classList.contains( cls );
		} );
		var isShowcaseToggle = toggle.hasAttribute( 'data-woodrobe-showcase-toggle' );

		if ( ! hasTabStrip && ! isShowcaseToggle ) {
			return;
		}

		var accordion = item.closest( '.wp-block-accordion' );
		if ( ! accordion ) {
			return;
		}

		if ( isShowcaseToggle ) {
			event.preventDefault();

			if ( hasTabStrip ) {
				var showcaseItems = accordion.querySelectorAll( '.wp-block-accordion-item' );
				for ( var si = 0; si < showcaseItems.length; si++ ) {
					setItemOpen( showcaseItems[ si ], showcaseItems[ si ] === item );
				}
			} else {
				setItemOpen( item, ! item.classList.contains( 'is-open' ) );
			}

			return;
		}

		// Defer one tick so WP's Interactivity API has applied .is-open to
		// the freshly clicked item before we sweep the rest.
		setTimeout( function () {
			closing = true;
			try {
				var openItems = accordion.querySelectorAll(
					'.wp-block-accordion-item.is-open'
				);
				for ( var i = 0; i < openItems.length; i++ ) {
					var other = openItems[ i ];
					if ( other === item ) {
						continue;
					}
					var otherToggle = other.querySelector(
						'.wp-block-accordion-heading__toggle'
					);
					if ( otherToggle ) {
						otherToggle.click();
					}
				}
			} finally {
				closing = false;
			}
		}, 50 );
	}, false );
}() );
