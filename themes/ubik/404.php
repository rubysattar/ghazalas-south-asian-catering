<?php
/**
 * The template for displaying 404 pages
 *
 * @package Ubik WordPress theme
 */

get_header(); ?>

<div id="content-wrap">

  <div id="primary" class="content-area">

    <div class="content">

      <section class="error-404">

				<header class="error-404-header">
					<h1 class="page-title"><?php _e( 'That page can&rsquo;t be found.', 'ubik' ); ?></h1>
        </header>
        
				<div class="error-404-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ubik' ); ?></p>
					<?php get_search_form(); ?>
        </div>
        
			</section><!-- .error-404 -->

    </div><!-- #content -->

  </div><!-- #primary -->

</div><!-- #content-wrap -->

<?php get_footer(); ?>
