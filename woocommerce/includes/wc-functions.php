<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action( 'woocommerce_before_main_content', 'estore_add_sidebar_only_archive', 50 );
function estore_add_sidebar_only_archive() {
	if ( ! is_product() ) {
		woocommerce_get_sidebar();
	}
}

add_action( 'init', 'z_remove_wc_breadcrumbs');
function z_remove_wc_breadcrumbs() {
    remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10);
}



add_action( 'wp_enqueue_scripts', 'estore_woocommerce_scripts' );
function estore_woocommerce_scripts() {
	wp_enqueue_style( 'estore-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
	
	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';
	
	wp_add_inline_style( 'estore-woocommerce-style', $inline_font );
}
add_action( 'wp_footer', 'estore_modal_window' );
function estore_modal_window(){
	?>

	<?php
}

add_action( 'post_class', function ($classes ){
	if ( wc_get_loop_prop( 'is_shortcode' ) ) {
		$classes[] = 'col-md-4';
	}

	return $classes;
} );

add_filter( 'woocommerce_account_menu_item_classes', 'estore_account_menu_item_classes', 10, 2 );
function estore_account_menu_item_classes( $classes, $endpoint ) {

	global $wp;

	$current = isset( $wp->query_vars[ $endpoint ] );
	if ( 'dashboard' === $endpoint && ( isset( $wp->query_vars['page'] ) || empty( $wp->query_vars ) ) ) {
		$current = true; // Dashboard is not an endpoint, so needs a custom check.
	}

	if ( $current ) {
		$classes[] = 'active';
	}

	return $classes;
}

add_filter( 'woocommerce_account_menu_items', 'estore_account_menu_items', 10, 1 );
function estore_account_menu_items( $items ) {

	unset( $items['downloads'] );

	return $items;
}

add_action( 'woocommerce_before_quantity_input_field', 'truemisha_quantity_plus', 25 );
add_action( 'woocommerce_after_quantity_input_field', 'truemisha_quantity_minus', 25 );

function truemisha_quantity_plus() {
	echo '<button type="button" class="plus">+</button>';
}

function truemisha_quantity_minus() {
	echo '<button type="button" class="minus">-</button>';
}