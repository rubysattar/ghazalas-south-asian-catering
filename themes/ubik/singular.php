<?php
/**
* The template for displaying all pages, single posts and attachments
*
* This is a new template file that WordPress introduced in
* version 4.3.
*
* @package Ubik WordPress theme
*/

get_header(); ?>

<div id="content-wrap" class="grid-container grid-x">

  <div id="primary" class="content-area cell auto small-order-2">

    <div class="content">

      <?php
      // Start loop
      while ( have_posts() ) : the_post();

        // Single Page
        if ( is_singular( 'page' ) ) {

          get_template_part( 'template-parts/page/layout' );

        }

        // Other posts
				else {

					get_template_part( 'template-parts/single/layout', get_post_type() );

				}

      endwhile; ?>

    </div><!-- #content -->

  </div><!-- #primary -->

  <?php do_action( 'ubik_sidebar' ); ?>

</div><!-- #content-wrap -->

<?php get_footer(); ?>
