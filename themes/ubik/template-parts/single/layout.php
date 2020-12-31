<?php
/**
 * Single post layout
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

// Get posts format
$format = get_post_format(); 

// Get elements
$elements = ubik_single_elements(); ?>

<article id="post-<?php the_ID(); ?>">

  <?php
  // Loop through elements
	foreach ( $elements as $element ) {

    // Single featured image
		if ( 'featured_image' == $element ) {

      get_template_part( 'template-parts/single/media/format', $format );

    }

    // Single title
		if ( 'title' == $element ) {

      get_template_part( 'template-parts/single/title' );

    }

    // Single meta
    if ( 'meta' == $element ) {

      get_template_part( 'template-parts/single/meta' );

    }
  
    // Single content
    if ( 'content' == $element ) {

      get_template_part( 'template-parts/single/content' );

    }

    // Single tags
    if ( 'tags' == $element ) {

      get_template_part( 'template-parts/single/tags' );

    }

    // Single post navigation
    if ( 'post_nav' == $element ) {
      
      get_template_part( 'template-parts/single/post-nav' );

    }

    // Comments
		if ( 'single_comments' == $element ) {
      
      comments_template();

    }

    // Related posts
		if ( 'related_posts' == $element ) {
      
      get_template_part( 'template-parts/single/related-posts' );

    }
  
  } ?>

</article>
