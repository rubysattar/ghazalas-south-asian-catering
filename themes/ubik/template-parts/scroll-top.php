<?php
/**
 * The template for displaying the scroll to top button
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if scroll to top deactivated
if ( ubik_scroll_top_deactivate() ) {
	return;
}

// Get scroll to top icon
$icon = get_theme_mod( 'ubik_scroll_top_icon', 'fas fa-angle-up' );
$icon = apply_filters( 'ubik_scroll_top_icon_filter', $icon );
?>

<a id="scrollToTop" class="scroll-to-top" href="#outer-wrap" data-smooth-scroll><span class="<?php echo esc_attr( $icon ); ?>"></span></a>