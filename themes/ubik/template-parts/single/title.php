<?php
/**
 * Displays the post header
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} 

// Title tag
$tag = get_theme_mod( 'ubik_single_title_tag', 'h2' );
$tag = $tag ? $tag : 'h2';
$tag = apply_filters( 'ubik_single_title_tag_filter', $tag );
?>

<div class="single-title">

	<<?php echo esc_attr( $tag ); ?> class="single-title__title" <?php ubik_schema_markup( 'headline' ); ?>><?php the_title(); ?></<?php echo esc_attr( $tag ); ?>>

</div>
