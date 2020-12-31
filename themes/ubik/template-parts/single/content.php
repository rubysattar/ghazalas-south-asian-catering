<?php
/**
 * Post single content
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="single-content"<?php ubik_schema_markup( 'entry_content' ); ?>>

	<?php the_content();

	wp_link_pages( array(
		'before'      => '<div class="page-links">' . __( 'Pages:', 'ubik' ),
		'after'       => '</div>',
		'link_before' => '<span class="page-number">',
		'link_after'  => '</span>',
	) ); ?>

</div><!-- .single-content -->
