<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

echo apply_filters(
	'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
	sprintf(
		'<a href="%s" data-quantity="%s" class="%s add-to-cart" %s>%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
        sprintf( '                                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.243 4.657L0 1.415L1.415 0L4.657 3.243H19.899C20.0549 3.24299 20.2086 3.27941 20.3479 3.34937C20.4872 3.41932 20.6082 3.52086 20.7012 3.6459C20.7943 3.77093 20.8569 3.91598 20.8839 4.06949C20.9109 4.22299 20.9017 4.38069 20.857 4.53L18.457 12.53C18.3953 12.7361 18.2687 12.9168 18.0961 13.0452C17.9235 13.1737 17.7141 13.243 17.499 13.243H5.243V15.243H16.243V17.243H4.243C3.97778 17.243 3.72343 17.1376 3.53589 16.9501C3.34836 16.7626 3.243 16.5082 3.243 16.243V4.657ZM5.243 5.243V11.243H16.755L18.555 5.243H5.243ZM4.743 21.243C4.34518 21.243 3.96364 21.085 3.68234 20.8037C3.40104 20.5224 3.243 20.1408 3.243 19.743C3.243 19.3452 3.40104 18.9636 3.68234 18.6823C3.96364 18.401 4.34518 18.243 4.743 18.243C5.14082 18.243 5.52236 18.401 5.80366 18.6823C6.08496 18.9636 6.243 19.3452 6.243 19.743C6.243 20.1408 6.08496 20.5224 5.80366 20.8037C5.52236 21.085 5.14082 21.243 4.743 21.243ZM16.743 21.243C16.3452 21.243 15.9636 21.085 15.6823 20.8037C15.401 20.5224 15.243 20.1408 15.243 19.743C15.243 19.3452 15.401 18.9636 15.6823 18.6823C15.9636 18.401 16.3452 18.243 16.743 18.243C17.1408 18.243 17.5224 18.401 17.8037 18.6823C18.085 18.9636 18.243 19.3452 18.243 19.743C18.243 20.1408 18.085 20.5224 17.8037 20.8037C17.5224 21.085 17.1408 21.243 16.743 21.243Z" fill="white"/>
                                </svg>')
	),
	$product,
	$args
);
