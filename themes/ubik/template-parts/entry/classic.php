<?php
/**
 * Default post entry layout
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get post format
$format = get_post_format();

// Get blog entries elements
$elements = ubik_classic_entry_elements();

// Add classes to the blog entry post class
$classes = ubik_blog_entry_classes(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

  <?php
  // Loop through elements
  foreach ( $elements as $element ) {

    if ( 'featured_image' == $element ) {

      get_template_part( 'template-parts/entry/media/format', $format );

    }

    if ( 'title' == $element ) {

      get_template_part( 'template-parts/entry/title' );

    }

    if ( 'meta' == $element ) {

      get_template_part( 'template-parts/entry/meta' );

    }

    if ( 'content' == $element ) {

      get_template_part( 'template-parts/entry/content' );

    }
    
    if ( 'read_more' == $element ) {

      get_template_part( 'template-parts/entry/readmore' );

    }
  
  } ?>

</article>
