<?php
/**
 * Post entry meta
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

  $meta_elements = ubik_card_entry_meta_elements();
  $entry_meta_classes = ubik_card_entry_meta_classes();
  $menu_classes = ubik_card_entry_meta_menu_classes();

} elseif ( 'h-card' == $blog_style ) {

  $meta_elements = ubik_h_card_entry_meta_elements();
  $entry_meta_classes = ubik_h_card_entry_meta_classes();
  $menu_classes = ubik_h_card_entry_meta_menu_classes();

} else {

  $meta_elements = ubik_classic_entry_meta_elements();
  $entry_meta_classes = ubik_classic_entry_meta_classes();
  $menu_classes = ubik_classic_entry_meta_menu_classes();

} 

// Return if no meta
if ( empty( $meta_elements ) ) {
	return;
}
?>

<div class="entry-meta <?php echo esc_attr( $entry_meta_classes ); ?>">

  <ul class="entry-meta__menu menu <?php echo esc_attr( $menu_classes ); ?>">

    <?php
    // Loop through elements
    foreach ( $meta_elements as $meta_element ) { 

      if ( 'author' == $meta_element ) { ?>
        
        <li class="meta-author"<?php ubik_schema_markup( 'author_name' ); ?>><i class="far fa-user-circle fa-lg"></i><?php echo the_author_posts_link(); ?></li>

      <?php }

      if ( 'date' == $meta_element ) { ?>
    
        <li class="meta-date"<?php ubik_schema_markup( 'publish_date' ); ?>><i class="far fa-calendar-alt fa-lg"></i><?php echo get_the_date(); ?></li>

      <?php }

      if ( 'categories' == $meta_element ) { ?>
    
        <li class="meta-cat"><i class="far fa-folder fa-lg"></i><?php the_category( ' / ', get_the_ID() ); ?></li>

      <?php }

      if ( 'comments' == $meta_element && comments_open() && ! post_password_required() ) { ?>
    
        <li class="meta-comments"><i class="far fa-comment fa-lg"></i><?php comments_popup_link( esc_html__( '0 Comments', 'ubik' ), esc_html__( '1 Comment',  'ubik' ), esc_html__( '% Comments', 'ubik' ), 'comments-link' ); ?></li>

      <?php }

    } ?>

  </ul>

</div>

