<?php
/**
 * Top bar text template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$top_bar_text = get_theme_mod( 'ubik_top_bar_text_content', '<strong>Top bar custom text</strong>' );
?>

<?php
// Check if there is content for the top bar
if ( $top_bar_text  || is_customize_preview() ) : ?>

  <div class="top-bar-text <?php echo esc_attr( ubik_top_bar_text_classes() ); ?>">

    <?php echo do_shortcode( wp_kses_post( $top_bar_text ) ); ?>

  </div>

<?php endif; ?>