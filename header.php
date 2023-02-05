<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="wrapper">
                <div class="h__top flex sp-between al-center">
                    <div class="h__top-logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="h__top-search">
                        <?php get_search_form(); ?>

                    </div>
                    <div class="h__top-social-block">
                        <ul class="social flex al-center">
                            <li>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt="vkontakte">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.png" alt="telegram">
                                </a>
                            </li>
                        </ul>
                        <div class="h__top-social-block-phone">
                            <a href="tel:89996889779">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.256 6.80148C4.04331 10.6934 7.2238 13.7875 11.1776 15.4641L11.19 15.4694L11.9539 15.8099C12.9265 16.2432 14.0697 15.9354 14.6933 15.0724L15.9677 13.3086C16.0455 13.2009 16.0255 13.0511 15.922 12.9676L13.6973 11.1728C13.5867 11.0836 13.4241 11.1044 13.3395 11.2186L12.4736 12.3869C12.2633 12.6707 11.8836 12.7693 11.5618 12.6237C8.60539 11.2857 6.22968 8.91004 4.89175 5.95363C4.74614 5.63187 4.84474 5.25212 5.12849 5.04184L6.29686 4.17598C6.41103 4.09137 6.43181 3.92875 6.34259 3.81815L4.54755 1.59311C4.46412 1.48969 4.31437 1.46961 4.20664 1.54738L2.43335 2.82754C1.56456 3.45473 1.2586 4.60757 1.70206 5.58302L2.2554 6.80018C2.2556 6.80062 2.2558 6.80105 2.256 6.80148ZM10.5857 16.8424C6.28963 15.0188 2.83427 11.6558 0.892223 7.42607L0.891054 7.42353L0.336551 6.20381C-0.402549 4.57806 0.10738 2.65665 1.55536 1.61134L3.32865 0.33118C4.08277 -0.213227 5.131 -0.0726221 5.715 0.651271L7.51004 2.87632C8.1346 3.65049 7.98913 4.78888 7.18997 5.38112L6.52047 5.87727C7.65138 8.07167 9.44376 9.86405 11.6382 10.995L12.1343 10.3255C12.7266 9.52629 13.865 9.38083 14.6391 10.0054L16.8639 11.8002C17.588 12.3844 17.7284 13.433 17.1835 14.1871L15.9092 15.9509C14.8698 17.3893 12.9644 17.9023 11.3434 17.18L10.5857 16.8424Z" fill="white"/>
                                </svg>
                                + 7 (999) 688-97-79
                            </a>
                        </div>
                        <div class="h__top-social-block-email">
                            <a href="mailto:info@yandex.ru">
                                <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.192702 3.90005C-0.0874415 6.50294 -0.074954 9.50493 0.314869 12.0973C0.530567 13.5316 1.70124 14.6313 3.14631 14.7569L4.65654 14.8882C7.80558 15.1619 10.9724 15.1619 14.1215 14.8882L15.6317 14.7569C17.0768 14.6313 18.2475 13.5316 18.4632 12.0973C18.853 9.50492 18.8655 6.50311 18.5853 3.90021C18.5491 3.59844 18.5084 3.29709 18.4632 2.99624C18.2475 1.56185 17.0768 0.462204 15.6317 0.336587L14.1215 0.205305C10.9724 -0.0684352 7.80558 -0.0684351 4.65654 0.205306L3.14631 0.336587C1.70124 0.462204 0.530567 1.56185 0.314869 2.99624C0.269637 3.29704 0.228914 3.59834 0.192702 3.90005ZM4.78644 1.69967C7.84905 1.43344 10.929 1.43344 13.9916 1.69967L15.5018 1.83095C16.2562 1.89652 16.8672 2.47054 16.9798 3.2193C16.9915 3.29705 17.0029 3.37485 17.014 3.45267L11.453 6.54212C10.1694 7.25523 8.60859 7.25523 7.325 6.54212L1.76406 3.45271C1.77512 3.37487 1.7865 3.29707 1.79819 3.2193C1.91079 2.47054 2.52188 1.89652 3.27621 1.83095L4.78644 1.69967ZM17.1975 5.06664C17.3915 7.33439 17.3189 9.61924 16.9798 11.8742C16.8672 12.623 16.2562 13.197 15.5018 13.2625L13.9916 13.3938C10.929 13.6601 7.84905 13.6601 4.78644 13.3938L3.27621 13.2625C2.52188 13.197 1.91079 12.623 1.79819 11.8742C1.4591 9.61925 1.38654 7.33442 1.58051 5.06668L6.59653 7.85336C8.33316 8.81815 10.4448 8.81815 12.1814 7.85336L17.1975 5.06664Z" fill="white"/>
                                </svg>
                                info@yandex.ru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-footer">
        <div class="container">
            <div class="wrapper">
                <div class="h-footer flex al-center sp-between">
                    <div class="mobile-wrapper" style="display: none">
                        <nav class="mobile-menu">
                            <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
                            <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
                            <div class="mobile-menu__container">
                                <ul class="mobile-menu__list">
                                    <li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Главная</a></li>
                                    <li class="mobile-menu__item"><a href="/catalog-product" class="mobile-menu__link">Каталог</a></li>
                                    <li class="mobile-menu__item"><a href="/uslugi" class="mobile-menu__link">Услуги</a></li>
                                    <li class="mobile-menu__item"><a href="/informaciya" class="mobile-menu__link">Информация</a></li>
                                    <li class="mobile-menu__item"><a href="/zakaz-i-dostavka" class="mobile-menu__link">Заказа и доставка</a></li>
                                    <li class="mobile-menu__item"><a href="/kontakty" class="mobile-menu__link">Контакты</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="item">
                        <div class="i flex">
                            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14.7874L10.85 10.9145C11.6114 10.1485 12.1298 9.17262 12.3399 8.11023C12.5499 7.04785 12.442 5.94667 12.03 4.94595C11.6179 3.94522 10.92 3.08989 10.0247 2.48811C9.12939 1.88634 8.07679 1.56514 7 1.56514C5.92321 1.56514 4.87061 1.88634 3.97529 2.48811C3.07997 3.08989 2.38214 3.94522 1.97004 4.94595C1.55795 5.94667 1.4501 7.04785 1.66013 8.11023C1.87016 9.17262 2.38864 10.1485 3.15 10.9145L7 14.7874ZM7 17L2.05022 12.0208C1.07127 11.036 0.404589 9.78129 0.1345 8.41535C-0.13559 7.04941 0.00303866 5.63358 0.532854 4.3469C1.06267 3.06021 1.95988 1.96046 3.11102 1.18672C4.26216 0.412982 5.61553 0 7 0C8.38447 0 9.73784 0.412982 10.889 1.18672C12.0401 1.96046 12.9373 3.06021 13.4671 4.3469C13.997 5.63358 14.1356 7.04941 13.8655 8.41535C13.5954 9.78129 12.9287 11.036 11.9498 12.0208L7 17ZM7 8.60638C7.41256 8.60638 7.80822 8.44151 8.09994 8.14806C8.39167 7.8546 8.55555 7.45658 8.55555 7.04157C8.55555 6.62656 8.39167 6.22854 8.09994 5.93508C7.80822 5.64163 7.41256 5.47676 7 5.47676C6.58744 5.47676 6.19178 5.64163 5.90006 5.93508C5.60833 6.22854 5.44445 6.62656 5.44445 7.04157C5.44445 7.45658 5.60833 7.8546 5.90006 8.14806C6.19178 8.44151 6.58744 8.60638 7 8.60638ZM7 10.1712C6.17488 10.1712 5.38356 9.84146 4.80011 9.25454C4.21667 8.66762 3.88889 7.87159 3.88889 7.04157C3.88889 6.21154 4.21667 5.41551 4.80011 4.8286C5.38356 4.24168 6.17488 3.91196 7 3.91196C7.82512 3.91196 8.61644 4.24168 9.19989 4.8286C9.78333 5.41551 10.1111 6.21154 10.1111 7.04157C10.1111 7.87159 9.78333 8.66762 9.19989 9.25454C8.61644 9.84146 7.82512 10.1712 7 10.1712Z" fill="#646464"/>
                            </svg>
                            <p>Тамбовский район, с. И.Духовка</p>
                        </div>
                        <div class="i flex">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14C3.1339 14 0 10.8661 0 7C0 3.1339 3.1339 0 7 0C10.8661 0 14 3.1339 14 7C14 10.8661 10.8661 14 7 14ZM7 12.6C8.48521 12.6 9.90959 12.01 10.9598 10.9598C12.01 9.90959 12.6 8.48521 12.6 7C12.6 5.51479 12.01 4.09041 10.9598 3.0402C9.90959 1.99 8.48521 1.4 7 1.4C5.51479 1.4 4.09041 1.99 3.0402 3.0402C1.99 4.09041 1.4 5.51479 1.4 7C1.4 8.48521 1.99 9.90959 3.0402 10.9598C4.09041 12.01 5.51479 12.6 7 12.6ZM7.7 7H10.5V8.4H6.3V3.5H7.7V7Z" fill="#646464"/>
                            </svg>
                            <p>Пн-Сб 8:00 - 18:00</p>
                        </div>
                    </div>
                    <div class="menu">
                        <ul class="nav flex al-center">
                            <li class="item">
                                <a href="/catalog-product/" class="btn-menu">
                                    <svg width="32" height="19" viewBox="0 0 32 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="32" height="3" rx="1.5" fill="#33CC33"/>
                                        <rect y="8" width="32" height="3" rx="1.5" fill="#33CC33"/>
                                        <rect y="16" width="32" height="3" rx="1.5" fill="#33CC33"/>
                                    </svg>
                                    Каталог
                                </a>
                            </li>
                            <li class="item">
                                <a href="/uslugi">
                                    Услуги
                                </a>
                            </li>
                            <li class="item">
                                <a href="/informaciya">
                                    Информация
                                </a>
                            </li>
                            <li class="item">
                                <a href="/zakaz-i-dostavka/">
                                    Заказ и доставка
                                </a>
                            </li>
                            <li class="item">
                                <a href="/kontakty">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-header">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/whish-list.png" alt="">
                            <p>Избранное</p>
                        </a>
                        <a href="/cart">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.243 4.657L0 1.415L1.415 0L4.657 3.243H19.899C20.0549 3.24299 20.2086 3.27941 20.3479 3.34937C20.4872 3.41932 20.6082 3.52086 20.7012 3.6459C20.7943 3.77093 20.8569 3.91598 20.8839 4.06949C20.9109 4.22299 20.9017 4.38069 20.857 4.53L18.457 12.53C18.3953 12.7361 18.2687 12.9168 18.0961 13.0452C17.9235 13.1737 17.7141 13.243 17.499 13.243H5.243V15.243H16.243V17.243H4.243C3.97778 17.243 3.72343 17.1376 3.53589 16.9501C3.34836 16.7626 3.243 16.5082 3.243 16.243V4.657ZM5.243 5.243V11.243H16.755L18.555 5.243H5.243ZM4.743 21.243C4.34518 21.243 3.96364 21.085 3.68234 20.8037C3.40104 20.5224 3.243 20.1408 3.243 19.743C3.243 19.3452 3.40104 18.9636 3.68234 18.6823C3.96364 18.401 4.34518 18.243 4.743 18.243C5.14082 18.243 5.52236 18.401 5.80366 18.6823C6.08496 18.9636 6.243 19.3452 6.243 19.743C6.243 20.1408 6.08496 20.5224 5.80366 20.8037C5.52236 21.085 5.14082 21.243 4.743 21.243ZM16.743 21.243C16.3452 21.243 15.9636 21.085 15.6823 20.8037C15.401 20.5224 15.243 20.1408 15.243 19.743C15.243 19.3452 15.401 18.9636 15.6823 18.6823C15.9636 18.401 16.3452 18.243 16.743 18.243C17.1408 18.243 17.5224 18.401 17.8037 18.6823C18.085 18.9636 18.243 19.3452 18.243 19.743C18.243 20.1408 18.085 20.5224 17.8037 20.8037C17.5224 21.085 17.1408 21.243 16.743 21.243Z" fill="#646464"/>
                            </svg>
                            <p>Корзина</p>
                        </a>
                        <a href="/my-account/">
                            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 6H22V8H17V6ZM15 11H22V13H15V11ZM18 16H22V18H18V16ZM0 21C0 18.8783 0.842855 16.8434 2.34315 15.3431C3.84344 13.8429 5.87827 13 8 13C10.1217 13 12.1566 13.8429 13.6569 15.3431C15.1571 16.8434 16 18.8783 16 21H14C14 19.4087 13.3679 17.8826 12.2426 16.7574C11.1174 15.6321 9.5913 15 8 15C6.4087 15 4.88258 15.6321 3.75736 16.7574C2.63214 17.8826 2 19.4087 2 21H0ZM8 12C4.685 12 2 9.315 2 6C2 2.685 4.685 0 8 0C11.315 0 14 2.685 14 6C14 9.315 11.315 12 8 12ZM8 10C10.21 10 12 8.21 12 6C12 3.79 10.21 2 8 2C5.79 2 4 3.79 4 6C4 8.21 5.79 10 8 10Z" fill="#646464"/>
                            </svg>
                            <p>Профиль</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>

