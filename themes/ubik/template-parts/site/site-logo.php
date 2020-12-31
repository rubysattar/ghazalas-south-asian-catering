<?php
/**
 * Site-wide Logo
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<?php 
if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) { ?>

  <div class="site-logo"<?php ubik_schema_markup( 'logo' ); ?>>

    <div class="site-logo-inner">

        <?php the_custom_logo(); ?>

    </div><!-- #site-logo-inner -->

  </div><!-- #site-logo -->

<?php 
} ?>
