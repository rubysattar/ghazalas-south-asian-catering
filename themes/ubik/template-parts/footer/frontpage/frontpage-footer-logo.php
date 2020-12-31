<?php
/**
 * Front page footer logo template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="frontpage-footer-logo <?php echo esc_attr( ubik_frontpage_footer_logo_classes() ); ?>">

  <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

</div>