<?php
/**
 * Footer logo template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="footer-logo <?php echo esc_attr( ubik_footer_logo_classes() ); ?>">

  <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

</div>