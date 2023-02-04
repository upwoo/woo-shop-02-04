<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {
	wp_enqueue_style( 'estore-style', get_stylesheet_uri(), array('bootstrap-style') , THEME_VER, 'all');
	wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array() , THEME_VER, 'all');


}

add_action( 'wp_enqueue_scripts', 'estore_styles' );
function estore_styles() {

    wp_enqueue_script('swiper' , 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), THEME_VER, true);
	wp_enqueue_script('ajax-search' , get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), THEME_VER, true);
	wp_localize_script('ajax-search', 'search_form' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('search-nonce')
	));
	wp_enqueue_script('ajax-quick' , get_template_directory_uri() . '/assets/js/ajax-quick-veiw.js', array('jquery'), THEME_VER, true);
	wp_localize_script('ajax-quick', 'ajax_quick' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('quick-nonce')
	));
	wp_enqueue_script('script' , get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), THEME_VER);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_dequeue_style( 'wcqi-css' );
}
