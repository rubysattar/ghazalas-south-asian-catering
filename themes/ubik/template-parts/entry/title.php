<?php
/**
 * Post entry title
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Blog style
$blog_style = ubik_blog_style();

// Get entry title classes
if ( 'h-card' == $blog_style ) {

  $entry_title_classes = ubik_h_card_entry_title_classes();

} else {

  $entry_title_classes = 'show-for-mobile';

}
?>

<div class="entry-title <?php echo esc_attr( $entry_title_classes ); ?>">

  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

</div>

