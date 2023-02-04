<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'woocommerce_before_main_content', 'estore_archive_wrapper_start', 40 );
function estore_archive_wrapper_start(){
?>
    <section class="content catalog listing-product">
        <div class="container">
            <div class="wrapper">
                <div class="header__title">
<?php
}
add_action( 'woocommerce_after_main_content', 'estore_archive_wrapper_end', 30 );
function estore_archive_wrapper_end(){
?>

	<?php
}

add_action( 'woocommerce_before_main_content', 'estore_archive_content_wrapper_start', 60 );
function estore_archive_content_wrapper_start(){
	?>

	<?php
}
add_action( 'woocommerce_after_main_content', 'estore_archive_content_wrapper_end', 25 );
function estore_archive_content_wrapper_end(){
	?>

	<?php
}
remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories');
add_action( 'woocommerce_before_shop_loop', 'estore_out_subcategories',40 );
function estore_out_subcategories() {
	$cat_out = woocommerce_output_product_categories( array(
		'before'    => '<ul class="w3ls_mobiles_grid_right_grid2">',
		'after'     => '<div class="clearfix"></div></ul>',
		'parent_id' => is_product_category() ? get_queried_object_id() : 0,
	) );
	return $cat_out;
}
add_filter( 'product_cat_class', 'estore_add_classes_product_cat' );
function estore_add_classes_product_cat($classes){
	$classes[] = 'col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
return $classes;
}
add_filter( 'woocommerce_subcategory_count_html', 'estore_remove_count_categories' );
function estore_remove_count_categories($html){
	$html = '';
	return $html;
}

add_filter( 'woocommerce_show_page_title', 'estore_hide_title_shop' );
function estore_hide_title_shop( $hide ) {
	if ( is_shop() ) {
		$hide = false;
	}
	
	return $hide;
}

add_filter( 'post_class', 'estore_add_class_loop_item' );
function estore_add_class_loop_item($clasess){
	if(is_shop() || is_product_taxonomy()){
		$clasess[] = 'col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
	}

	return $clasess;
}

add_filter( 'post_class', 'estore_add_class_loop_item_cross' );
function estore_add_class_loop_item_cross($clasess){
	if(is_cart()){
		if ( in_array( 'product', $clasess ) ) {
			$clasess[] = 'col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles';
		}
	}

	return $clasess;
}

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

add_action( 'woocommerce_before_shop_loop_item', 'estore_loop_product_div_open' , 5);
function estore_loop_product_div_open(){
	?>

	<?php
}

add_action( 'woocommerce_after_shop_loop_item', 'estore_loop_product_div_close' , 20);
function estore_loop_product_div_close(){
	?>

	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_div_image_open', 5 );
function estore_loop_product_div_image_open(){
?>

	<?php
}
add_action( 'woocommerce_before_shop_loop_item_title', 'estore_loop_product_div_image_close', 30);
function estore_loop_product_div_image_close(){
	global $product;
	$attachment_ids = $product->get_gallery_image_ids();
	
	if ( $attachment_ids && has_post_thumbnail() ) {
		foreach ( $attachment_ids as $attachment_id ) {
			echo wp_get_attachment_image( $attachment_id, 'shop_catalog');
		}
	}
	?>

		<?php woocommerce_show_product_loop_sale_flash(); ?>

	<?php
}
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title',10 );
add_action( 'woocommerce_shop_loop_item_title', 'estore_template_loop_product_title' , 10);
function estore_template_loop_product_title(){
	echo '<h5><a href="'. get_permalink() .'">' . get_the_title() . '</a></h5>';
}
add_action( 'woocommerce_after_shop_loop_item_title', 'estore_loop_product_div_price_open', 7 );
function estore_loop_product_div_price_open(){
	?>
	<div class="simpleCart_shelfItem">
	<?php
}
add_action( 'woocommerce_after_shop_loop_item', 'estore_loop_product_div_price_close', 15 );
function estore_loop_product_div_price_close(){
	?>
	</div>
	<?php
}

function filtr_wordpress() {
    ?>
    <div class="item-in">
                        <div class="title">
                            <span>Фильтры</span>
                        </div>
                        <div class="sidebar">
                            <div class="sidebar__wrapper-checkbox">
                                <div class="sidebar__wrapper-title">
                                    <span>Вид</span>
                                </div>
                                <div class="sidebar__wrapper-content">
                                    <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                                    <label for="happy">Барбарис</label>
                                    <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                                    <label for="happy">Дёрен</label>
                                    <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                                    <label for="happy">Спирея</label>
                                    <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                                    <label for="happy">Барбарис</label>
                                    <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                                    <label for="happy">Барбарис</label>
                                </div>
                            </div>
                            <div class="sidevar__wrapper-radio">
                                <div class="sidebar__wrapper-title">
                                    <span>Вариант</span>
                                </div>
                                <div class="sidebar__wrapper-content">
                                    <div class="form_radio_btn">
                                        <input id="radio-1" type="radio" name="radio" value="1" checked>
                                        <label for="radio-1">Р9</label>
                                    </div>

                                    <div class="form_radio_btn">
                                        <input id="radio-2" type="radio" name="radio" value="2">
                                        <label for="radio-2">С1-1,5</label>
                                    </div>

                                    <div class="form_radio_btn">
                                        <input id="radio-3" type="radio" name="radio" value="3">
                                        <label for="radio-3">С2-3</label>
                                    </div>

                                    <div class="form_radio_btn">
                                        <input id="radio-4" type="radio" name="radio" value="4">
                                        <label for="radio-4">С4-6</label>
                                    </div>

                                    <div class="form_radio_btn">
                                        <input id="radio-5" type="radio" name="radio" value="5">
                                        <label for="radio-5">С7-10</label>
                                    </div>


                                    <div class="form_radio_btn">
                                        <input id="radio-6" type="radio" name="radio" value="6">
                                        <label for="radio-6">Луковицы</label>
                                    </div>

                                    <div class="form_radio_btn">
                                        <input id="radio-7" type="radio" name="radio" value="7">
                                        <label for="radio-7">ОКС</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidevar__wrapper-price">
                                <div class="sidebar__wrapper-title">
                                    <span>Цена</span>
                                </div>
                                <div class="sidebar__wrapper-content flex">
                                    <input type="text" placeholder="от">
                                    <input type="text" placeholder="до">
                                </div>
                            </div>
                            <div class="btn__filter">
                                <a href="" class="btn">Сбросить</a>
                            </div>
                        </div>
                    </div>
    <?php
}

add_filter( 'woocommerce_loop_add_to_cart_args', 'estore_add_class_add__to_cart' );
function estore_add_class_add__to_cart($args){
	
	$args['class'] =  $args['class'] . ' w3ls-cart';

	return $args;
}
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_result_count',20  );
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30  );

add_action( 'woocommerce_before_shop_loop', 'estore_wrapper_count_and_ordering_start', 15 );
function estore_wrapper_count_and_ordering_start(){
	?>
    <div class="wrapper-in flex sp-between">
    <?php filtr_wordpress(); ?>
    <div class="item-in-2">
       <div class="catalog-product">
         <div class="wrapper product-listing">


	<?php
}

add_action( 'woocommerce_before_shop_loop', 'estore_wrapper_count_and_ordering_close', 35 );
function estore_wrapper_count_and_ordering_close(){
	?>
        </div>
    </div>
    <div class="wrapper product-listing">
		<?php woocommerce_catalog_ordering();?>

	<?php
}


add_filter('woocommerce_catalog_orderby', 'wc_customize_product_sorting');

function wc_customize_product_sorting($sorting_options){
    $sorting_options = array(
        'price'      => __( 'Дешевле', 'woocommerce' ),
        'price-desc' => __( 'Дороже', 'woocommerce' ),
         'date'       => __( 'Новинки', 'woocommerce' ),
        'popularity' => __( 'Хит', 'woocommerce' ),
        'menu_order' => __( 'По умолчанию', 'woocommerce' ),

    );

    return $sorting_options;
}