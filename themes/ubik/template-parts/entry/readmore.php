<?php
/**
 * Post entry read more
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Blog style
$blog_style = ubik_blog_style();

// Text
if ( 'classic' == $blog_style ) {
    $get_text = get_theme_mod( 'ubik_classic_entry_read_more_text', '' );
} elseif ( 'card' == $blog_style ) {
    $get_text = get_theme_mod( 'ubik_card_entry_read_more_text', '' );
} elseif ( 'h-card' == $blog_style ) {
    $get_text = get_theme_mod( 'ubik_h_card_entry_read_more_text', '' );
} 

if ( $get_text ) {
    $text = $get_text;
} else {
    $text = esc_html__( 'Continue Reading', 'ubik' );
}

// Get entry-readmore classes
if ( 'card' == $blog_style ) {

    $entry_read_more_classes = ubik_card_entry_read_more_classes();

  } elseif ( 'h-card' == $blog_style ) {

    $entry_read_more_classes = ubik_h_card_entry_read_more_classes();
  
  } else {
  
    $entry_read_more_classes = 'show-for-mobile';
  
}

// Apply filters for child theming
$text = apply_filters( 'ubik_post_readmore_link_text', $text );

if ( 'post' == get_post_type() ) : ?>

    <div class="entry-readmore <?php echo esc_attr( $entry_read_more_classes ); ?>">

        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $text ); ?>"><?php echo esc_html( $text ); ?></a>

    </div>

<?php endif; ?>