<?php
/*
 * Template Name: Шаблон для текстовых страниц
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
    <div class="container">
        <div class="single-content">
            <div class="title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();