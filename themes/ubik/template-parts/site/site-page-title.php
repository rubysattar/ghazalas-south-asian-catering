<?php
/**
 * Page Title
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<h1 class="site-page-title"<?php ubik_schema_markup( 'headline' ); ?>><?php echo wp_kses_post( ubik_page_title() ); ?></h1>
