<?php
/**
 * Footer text template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$text = get_theme_mod( 'ubik_footer_text', '<span>Ubik Theme</span>' );
?>

<?php
// Check if there is content
if ( $text  || is_customize_preview() ) : ?>

  <div class="footer-text <?php echo esc_attr( ubik_footer_text_classes() ); ?>">

    <?php echo do_shortcode( wp_kses_post( $text ) ); ?>

  </div>

<?php endif; ?>