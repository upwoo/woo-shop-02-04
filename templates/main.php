<?php
/*
 * Template Name: Главная страница
 */
get_header(); ?>

<section id="page-1">
    <div class="container">
        <div class="wrapper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-slider.png'); background-repeat: no-repeat; background-size: cover;">
                        <div class="content">
                            <div class="title">
									<span>
										График работы на праздничные дни
									</span>
                            </div>
                            <div class="description">
									<span>
										01.01.2023 выходной день, 02.01.2023 мы работаем в обычном режиме
									</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-slider.png'); background-repeat: no-repeat; background-size: cover;">
                        <div class="content">
                            <div class="title">
									<span>
										График работы на праздничные дни
									</span>
                            </div>
                            <div class="description">
									<span>
										01.01.2023 выходной день, 02.01.2023 мы работаем в обычном режиме
									</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-slider.png'); background-repeat: no-repeat; background-size: cover;">
                        <div class="content">
                            <div class="title">
									<span>
										График работы на праздничные дни
									</span>
                            </div>
                            <div class="description">
									<span>
										01.01.2023 выходной день, 02.01.2023 мы работаем в обычном режиме
									</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-slider.png'); background-repeat: no-repeat; background-size: cover;">
                        <div class="content">
                            <div class="title">
									<span>
										График работы на праздничные дни
									</span>
                            </div>
                            <div class="description">
									<span>
										01.01.2023 выходной день, 02.01.2023 мы работаем в обычном режиме
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="long__grid">

            </div>
        </div>
    </div>
</section>
<section id="cotegory">
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
<section id="new">
    <div class="container">
        <div class="title-section">
            <h2>
                Новинки
            </h2>
        </div>
        <div class="product-listing">
            <?php echo do_shortcode('[products limit="3" columns="3" orderby="popularity" class="quick-sale"]'); ?>
        </div>
        <div class="button-s">
            <a href="" class="viwe">Посмотреть все новики</a>
        </div>
    </div>
</section>
<section id="new">
    <div class="container">
        <div class="title-section">
            <h2>
                Хиты продаж
            </h2>
        </div>
        <div class="product-listing">
            <?php echo do_shortcode('[products limit="3" columns="3" orderby="popularity" class="quick-sale" top_rated="true" ]'); ?>
        </div>
        <div class="button-s">
            <a href="" class="viwe">Посмотреть все товары</a>
        </div>
    </div>
</section>
<section id="new">
    <div class="container">
        <div class="title-section">
            <h2>
                Акции и скидки
            </h2>
        </div>
        <div class="product-listing">
            <?php echo do_shortcode('[products limit="3" columns="3" orderby="popularity" class="quick-sale" on_sale="true" ]'); ?>
        </div>
        <div class="button-s">
            <a href="" class="viwe">Посмотреть все новики</a>
        </div>
    </div>
</section>
<section id="page-news">
    <div class="container">
        <div class="title-section">
            <h2>
                Новости и статьи
            </h2>
        </div>
        <div class="wrapper flex sp-between al-center">
            <?php
            // запрос
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

            <?php if ( $wpb_all_query->have_posts() ) : ?>

                <ul>

                    <!-- the loop -->
                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <div class="content">
                                <div class="title">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="content">
                                    <span><?php the_excerpt(); ?></span>
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                </ul>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
            <?php endif; ?>

        </div>
        <div class="button-s">
            <a href="/blog" class="viwe">Перейти в блог</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>
