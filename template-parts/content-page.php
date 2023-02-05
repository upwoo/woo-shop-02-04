<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

?>
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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div class="content-in">
            <div class="container">
                <div class="title">
		<?php the_title( '<h1 class="entry-title margin-bottom-lg">', '</h1>' ); ?>
                </div>
            </div>
        </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'estore' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
