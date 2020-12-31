<?php
/**
 * Post single meta
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get meta sections
$meta_elements = ubik_single_meta_elements();

// Return if sections are empty
if ( empty( $meta_elements )
	|| 'post' != get_post_type() ) {
	return;
} 

// Meta classes
$meta_classes = ubik_single_meta_classes();
$meta_menu_classes = ubik_single_meta_menu_classes();
?>

<div class="single-meta <?php echo esc_attr( $meta_classes ); ?>">

	<ul class="single-meta__menu menu <?php echo esc_attr( $meta_menu_classes ) ?>">

	<?php
	// Loop through meta sections
	foreach ( $meta_elements as $meta_element ) { ?>

		<?php if ( 'author' == $meta_element ) { ?>

			<li class="single-meta__author"<?php ubik_schema_markup( 'author_name' ); ?>><i class="far fa-user-circle fa-lg"></i><?php echo the_author_posts_link(); ?></li>

		<?php } ?>

		<?php if ( 'date' == $meta_element ) { ?>

			<li class="single-meta__date"<?php ubik_schema_markup( 'publish_date' ); ?>><i class="far fa-calendar-alt fa-lg"></i><?php echo get_the_date(); ?></li>

		<?php } ?>

		<?php if ( 'categories' == $meta_element ) { ?>

			<li class="single-meta__cat"><i class="far fa-folder fa-lg"></i><?php the_category( ' / ', get_the_ID() ); ?></li>

		<?php } ?>

		<?php if ( 'comments' == $meta_element && comments_open() && ! post_password_required() ) { ?>

			<li class="single-meta__comments"><i class="far fa-comment fa-lg"></i><?php comments_popup_link( esc_html__( '0 Comments', 'ubik' ), esc_html__( '1 Comment',  'ubik' ), esc_html__( '% Comments', 'ubik' ), 'comments-link local' ); ?></li>

		<?php } ?>

	<?php } ?>

	</ul>

</div>


