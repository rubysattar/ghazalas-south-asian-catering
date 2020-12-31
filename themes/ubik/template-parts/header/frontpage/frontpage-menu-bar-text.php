<?php
/**
 * Front page menu bar text template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$frontpage_menu_bar_text = get_theme_mod( 'ubik_frontpage_menubar_text_content', '' );

?>

<?php
// Check if there is content
if ( $frontpage_menu_bar_text  || is_customize_preview() ) : ?>

  <div class="frontpage-menu-bar-text <?php echo esc_attr( ubik_frontpage_menubar_text_classes() ); ?>">

		<?php echo do_shortcode( wp_kses_post( $frontpage_menu_bar_text ) ); ?>

  </div>

<?php endif; ?>