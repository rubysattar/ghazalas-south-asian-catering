<?php
/**
 * Outputs correct page layout
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<article>

  <?php
	get_template_part( 'template-parts/page/content' );

	comments_template();
	?>

</article>
