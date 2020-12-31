<?php
/**
 * Outputs page article
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="page-content">
	
	<?php the_content();

	wp_link_pages( array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'ubik' ),
		'after'  => '</div>',
	) ); ?>
</div>
