<?php
/**
 * Site-wide Tagline
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<?php
$tagline = get_bloginfo( 'description', 'display' );

if ( $tagline || is_customize_preview() ) : ?>

  <h2 class="site-tagline"><?php echo esc_html( $tagline ); ?></h2>

<?php endif; ?>