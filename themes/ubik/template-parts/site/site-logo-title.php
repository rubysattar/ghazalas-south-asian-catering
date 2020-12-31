<?php
/**
 * Site-wide Logo/title
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="site-logo-title" <?php ubik_schema_markup( 'logo' ); ?>>

  <div class="site-logo-title-inner">

    <?php
    if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {

      the_custom_logo();

    } else { ?>

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>

    <?php } ?>

  </div><!-- #site-logo-title-inner -->

</div><!-- #site-logo-title -->
