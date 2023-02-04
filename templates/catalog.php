<?php
/*
 * Template Name: Каталог
 */
get_header(); ?>
<div class="breadcrumbs">
    <div class="container">
        <div class="wrapper">
            <?php
            /* breadcrumb Yoast */
            if ( function_exists( 'yoast_breadcrumb' ) ) :
                yoast_breadcrumb( '<div id="breadcrumbs" class="crumbs">', '</div>' );
            endif;
            ?>
        </div>
    </div>
</div>
<section id="cotegory" style="padding: 50px 0;">
    <div class="container">
        <div class="wrapper flex sp-between al-center">
            <?php
            $prod_cat_args = array(
                'taxonomy'    => 'product_cat',
                'orderby'     => 'id', // здесь по какому полю сортировать
                'hide_empty'  => false, // скрывать категории без товаров или нет
                'parent'      => 0 // id родительской категории
            );
            $woo_categories = get_categories( $prod_cat_args );
            foreach ( $woo_categories as $woo_cat ) {
                $woo_cat_id = $woo_cat->term_id; //category ID
                $woo_cat_name = $woo_cat->name; //category name
                $woo_cat_slug = $woo_cat->slug; //category slug
                $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
                $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
                ?>
                <a href="<?php echo get_term_link( $woo_cat_id, 'product_cat' ); ?>" class="item">
                    <div class="item-box">
                        <div class="img">
                            <img src="<?= $thumbnail_image_url; ?>" alt="<?= the_title(); ?>">
                        </div>
                        <div class="name">
                            <span><?= $woo_cat_name; ?></span>
                        </div>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>
