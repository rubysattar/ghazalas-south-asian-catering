<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Ubik WordPress theme
 */

get_header(); ?>

<div id="content-wrap" class="grid-container grid-x">

  <div id="primary" class="content-area cell auto small-order-2">

    <div class="content">

    <?php	if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/search/layout' ); ?>

      <?php endwhile; ?>

      <?php
			// Display post pagination
			$prev_arrow = is_rtl() ? 'fa fa-angle-right' : 'fa fa-angle-left';
			$next_arrow = is_rtl() ? 'fa fa-angle-left' : 'fa fa-angle-right';
			the_posts_pagination( array(
				'prev_text' => '<i class="' . $prev_arrow . '"></i>',
				'next_text' => '<i class="' . $next_arrow . '"></i>',
			) );
			?>

    <?php else :

    // No post found notice
    get_template_part( 'template-parts/none' );

    endif; ?>

    </div><!-- #content -->

  </div><!-- #primary -->

  <?php do_action( 'ubik_sidebar' ); ?>

</div><!-- #content-wrap -->

<?php get_footer(); ?>

