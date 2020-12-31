<?php
/**
 * Site-wide Title
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
