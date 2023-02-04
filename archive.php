<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */
get_header(); ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="wrapper">
                <ul class="crumbs">
                    <li><a href="index.html">Главная</a></li>
                    <li> / </li>
                    <li><a href="" class="active">Блог</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-in">
        <div class="container">
            <div class="title">
                <h2>Блог</h2>
            </div>
            <div class="wrapper flex sp-between al-center wrap">
                <?php
                if ( have_posts() ) : ?>

                    <header class="page-header">
                        <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="pagi">
            <ul class="pagi">
                <li class="current"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
            </ul>
        </div>
    </div>



<?php
get_footer();
