<?php
/**
 * Classic vertical bar footer text template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$footer_text = get_theme_mod( 'ubik_classic_vertical_bar_footer_text_content', '' );
?>

<?php
// Check if there is content
if ( $footer_text  || is_customize_preview() ) : ?>

  <div class="classic-vertical-bar-footer-text <?php echo esc_attr( ubik_classic_vertical_bar_footer_text_classes() ); ?>">

    <?php echo do_shortcode( wp_kses_post( $footer_text ) ); ?>

  </div>

<?php endif; ?>