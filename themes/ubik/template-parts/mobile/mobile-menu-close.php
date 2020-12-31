<?php
/**
 * Mobile menu close button template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

// Get close icon
$icon = get_theme_mod( 'ubik_mobile_menu_close_button_icon', 'fas fa-times' );
$icon = apply_filters( 'ubik_mobile_menu_close_button_icon_filter', $icon );
?>

<button class="mobile-menu-close" aria-label="Close" data-close><i class="<?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i></button>