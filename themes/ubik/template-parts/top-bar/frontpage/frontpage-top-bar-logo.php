<?php
/**
 * Front page top bar logo template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="frontpage-top-bar-logo <?php echo esc_attr( ubik_frontpage_top_bar_logo_classes() ); ?>">

  <?php get_template_part( 'template-parts/site/site-logo-title' ); ?>

</div>