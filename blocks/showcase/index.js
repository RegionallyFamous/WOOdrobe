( function ( blocks, blockEditor, components, element, i18n, serverSideRender ) {
	'use strict';

	if ( ! blocks || ! blockEditor || ! components || ! element || ! i18n ) {
		return;
	}

	var el = element.createElement;
	var Fragment = element.Fragment;
	var __ = i18n.__;
	var InspectorControls = blockEditor.InspectorControls;
	var useBlockProps = blockEditor.useBlockProps;
	var PanelBody = components.PanelBody;
	var TextControl = components.TextControl;
	var TextareaControl = components.TextareaControl;
	var ToggleControl = components.ToggleControl;
	var SelectControl = components.SelectControl;
	var ServerSideRender = serverSideRender && ( serverSideRender.default || serverSideRender );
	var blockOptions = window.woodrobeShowcaseBlocks || [
		{
			label: __( 'Product Details (23 styles)', 'woodrobe' ),
			value: 'woocommerce/product-details',
		},
		{
			label: __( 'Product Collection (20 styles)', 'woodrobe' ),
			value: 'woocommerce/product-collection',
		},
		{
			label: __( 'Product Gallery (6 styles)', 'woodrobe' ),
			value: 'woocommerce/product-gallery',
		},
		{
			label: __( 'Single Product / Product Page (6 styles)', 'woodrobe' ),
			value: 'woocommerce/single-product',
		},
		{
			label: __( 'Related Products / Recommendations (6 styles)', 'woodrobe' ),
			value: 'woocommerce/related-products',
		},
		{
			label: __( 'Product Reviews / Ratings (6 styles)', 'woodrobe' ),
			value: 'woocommerce/product-reviews',
		},
		{
			label: __( 'Cart (6 styles)', 'woodrobe' ),
			value: 'woocommerce/cart',
		},
		{
			label: __( 'Checkout (6 styles)', 'woodrobe' ),
			value: 'woocommerce/checkout',
		},
		{
			label: __( 'Mini Cart (6 styles)', 'woodrobe' ),
			value: 'woocommerce/mini-cart',
		},
		{
			label: __( 'Product Rating (6 styles)', 'woodrobe' ),
			value: 'woocommerce/product-rating',
		},
		{
			label: __( 'Customer Account (6 styles)', 'woodrobe' ),
			value: 'woocommerce/customer-account',
		},
		{
			label: __( 'Store Notices (6 styles)', 'woodrobe' ),
			value: 'woocommerce/store-notices',
		},
	];

	blocks.registerBlockType( 'woodrobe/showcase', {
		apiVersion: 3,
		title: __( 'WOOdrobe Showcase', 'woodrobe' ),
		description: __( 'Preview a WOOdrobe style family in one live gallery.', 'woodrobe' ),
		category: 'design',
		icon: 'screenoptions',
		keywords: [
			__( 'woocommerce', 'woodrobe' ),
			__( 'styles', 'woodrobe' ),
			__( 'product details', 'woodrobe' ),
			__( 'product collection', 'woodrobe' ),
			__( 'product gallery', 'woodrobe' ),
			__( 'single product', 'woodrobe' ),
			__( 'product page', 'woodrobe' ),
			__( 'related products', 'woodrobe' ),
			__( 'recommendations', 'woodrobe' ),
			__( 'product reviews', 'woodrobe' ),
			__( 'ratings', 'woodrobe' ),
			__( 'cart', 'woodrobe' ),
			__( 'checkout', 'woodrobe' ),
			__( 'mini cart', 'woodrobe' ),
			__( 'customer account', 'woodrobe' ),
			__( 'store notices', 'woodrobe' ),
		],
		attributes: {
			blockName: {
				type: 'string',
				default: 'woocommerce/product-details',
			},
			showHeader: {
				type: 'boolean',
				default: true,
			},
			title: {
				type: 'string',
				default: __( 'WOOdrobe Style Showcase', 'woodrobe' ),
			},
			description: {
				type: 'string',
				default: __( 'A live sampler of the WooCommerce block-style outfits included with WOOdrobe.', 'woodrobe' ),
			},
		},
		supports: {
			align: [ 'wide', 'full' ],
			html: false,
			spacing: {
				margin: true,
			},
		},

		edit: function ( props ) {
			var attributes = props.attributes;
			var selectedBlock = attributes.blockName || 'woocommerce/product-details';
			var showHeader = attributes.showHeader !== false;
			var blockProps = useBlockProps( {
				className: 'woodrobe-showcase-block-editor',
			} );

			return el(
				Fragment,
				null,
				el(
					InspectorControls,
					null,
					el(
						PanelBody,
						{
							title: __( 'Showcase settings', 'woodrobe' ),
							initialOpen: true,
						},
						el( SelectControl, {
							label: __( 'Styles to show', 'woodrobe' ),
							value: selectedBlock,
							options: blockOptions,
							onChange: function ( value ) {
								props.setAttributes( { blockName: value } );
							},
						} ),
						el( ToggleControl, {
							label: __( 'Show title and description', 'woodrobe' ),
							checked: showHeader,
							onChange: function ( value ) {
								props.setAttributes( { showHeader: value } );
							},
						} ),
						showHeader && el( TextControl, {
							label: __( 'Title', 'woodrobe' ),
							value: attributes.title || '',
							onChange: function ( value ) {
								props.setAttributes( { title: value } );
							},
						} ),
						showHeader && el( TextareaControl, {
							label: __( 'Description', 'woodrobe' ),
							value: attributes.description || '',
							onChange: function ( value ) {
								props.setAttributes( { description: value } );
							},
						} )
					)
				),
				el(
					'div',
					blockProps,
					ServerSideRender
						? el( ServerSideRender, {
							block: 'woodrobe/showcase',
							attributes: attributes,
						} )
						: el( 'p', null, __( 'Showcase preview is unavailable in this editor.', 'woodrobe' ) )
				)
			);
		},

		save: function () {
			return null;
		},
	} );
}( window.wp.blocks, window.wp.blockEditor, window.wp.components, window.wp.element, window.wp.i18n, window.wp.serverSideRender ) );
