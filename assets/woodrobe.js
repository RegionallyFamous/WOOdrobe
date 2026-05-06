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
 * Pure delegated click handler. No frameworks, no build step.
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

	// Re-entrancy guard: when we close a sibling we synthesize a click on
	// its toggle, which fires this same listener. Without the flag we'd
	// recurse indefinitely.
	var closing = false;

	document.addEventListener( 'click', function ( event ) {
		if ( closing ) {
			return;
		}

		var toggle = event.target.closest( '.wp-block-accordion-heading__toggle' );
		if ( ! toggle ) {
			return;
		}

		var item = toggle.closest( '.wp-block-accordion-item' );
		if ( ! item ) {
			return;
		}

		// Walk up to the nearest element carrying one of our tab-strip
		// is-style classes — that's the WC product-details wrapper.
		var styleHost = item.closest(
			'.is-style-pill-switch, .is-style-sidebar-tabs, .is-style-card-tabs, .is-style-underline-slide, .is-style-chips, .is-style-bottom-tabs, .is-style-preview-strip'
		);
		if ( ! styleHost ) {
			return;
		}

		var hasTabStrip = TAB_STRIP_VARIANTS.some( function ( cls ) {
			return styleHost.classList.contains( cls );
		} );
		if ( ! hasTabStrip ) {
			return;
		}

		var accordion = item.closest( '.wp-block-accordion' );
		if ( ! accordion ) {
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
