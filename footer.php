<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */
?>
</main>
<footer>
    <div class="container">
        <div class="wrapper flex">
            <div class="logo">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                </a>
            </div>
            <div class="menu flex al-center sp-between">
                <div class="item">
                    <div class="title">
                        <span>
                            Каталог
                        </span>
                    </div>
                    <ul class="item-s">
                        <li>
                            <a href="">
                                Плодовые
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Многолетнии
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        <span>
                            Услуги
                        </span>
                    </div>
                    <ul class="item-s">
                        <li>
                            <a href="">
                                Плодовые
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Многолетнии
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <div class="title">
                        <span>
                            Информация
                        </span>
                    </div>
                    <ul class="item-s">
                        <li>
                            <a href="">
                                Доставка и оплата
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Согласие на обработку данных
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Статьи и новости
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>


