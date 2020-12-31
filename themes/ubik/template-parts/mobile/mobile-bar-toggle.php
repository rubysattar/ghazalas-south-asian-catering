<?php
/**
 * Mobile bar menu toggle template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

// Get menu toggle icon
$icon = get_theme_mod( 'ubik_mobile_bar_toggle_icon', 'fas fa-bars' );
$icon = apply_filters( 'ubik_mobile_bar_toggle_icon_filter', $icon );
?>

<div class="mobile-bar-menu-toggle">
	<a href="#" data-toggle="mobile-menu-container"><i class="<?php echo esc_attr( $icon ); ?>"></i></a>
</div>