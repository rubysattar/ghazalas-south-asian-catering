<?php
/**
 * Header content text template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

$header_content_text = get_theme_mod( 'ubik_header_content_text_content', '' );
?>

<?php
// Check if there is content
if ( $header_content_text  || is_customize_preview() ) : ?>

	<?php echo do_shortcode( wp_kses_post( $header_content_text ) ); ?>

<?php endif; ?>