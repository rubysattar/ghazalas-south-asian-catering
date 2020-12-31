<?php
/**
 * Post entry content
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

// Blog style
$blog_style = ubik_blog_style(); 

// Get style vars
if ( 'card' == $blog_style ) {

  $entry_content_classes = ubik_card_entry_content_classes();
  $excerpt_length = get_theme_mod( 'ubik_card_entry_excerpt_length', '30' );

} elseif ( 'h-card' == $blog_style ) {

  $entry_content_classes = ubik_h_card_entry_content_classes();
  $excerpt_length = get_theme_mod( 'ubik_h_card_entry_excerpt_length', '30' );

} else {

  $excerpt_length = get_theme_mod( 'ubik_classic_entry_excerpt_length', '30' );
  $entry_content_classes = 'show-for-mobile';

}
?>

<div class="entry-content <?php echo esc_attr( $entry_content_classes ); ?>">

  <?php if ( 'classic' == $blog_style && true == get_theme_mod( 'ubik_classic_entry_full_content', false ) ) {

    the_content( '', '&hellip;' );

  } else { ?>

    <p>
      <?php
      // Display classic custom excerpt
      ubik_excerpt( absint( $excerpt_length ) );?>
    </p>

  <?php } 
  ?>

</div>