<?php
/**
 * Front page classic vertical bar text template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$text = get_theme_mod( 'ubik_frontpage_classic_vertical_bar_text_content', '' );

?>

<?php
// Check if there is content
if ( $text  || is_customize_preview() ) : ?>

  <div class="frontpage-classic-vertical-bar-text <?php echo esc_attr( ubik_frontpage_classic_vertical_bar_text_classes() ); ?>">

    <?php echo do_shortcode( wp_kses_post( $text ) ); ?>

  </div>

<?php endif; ?>