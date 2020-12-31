<?php
/**
 * Horizontal card entry layout
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
$elements = ubik_h_card_entry_elements();

// Add classes to the blog entry post class
$classes = ubik_blog_entry_classes();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

  <?php if ( has_post_thumbnail() ) : ?>

    <div class="h-card-entry__img">

      <?php get_template_part( 'template-parts/entry/media/format', $format ); ?>

    </div>

  <?php
  endif; ?>
  
  <div class="h-card-entry__stacked<?php if ( ! has_post_thumbnail() ) { echo esc_attr( ' no-featured-image' ); } ?>">

    <?php
    // Loop through elements
    foreach ( $elements as $element ) {

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

  </div><!-- .h-card-entry__stacked -->

</article>
