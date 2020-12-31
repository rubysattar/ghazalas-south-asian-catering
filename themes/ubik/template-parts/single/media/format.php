<?php
/**
 * Displays the post single thumbmnail
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if there isn't a thumbnail defined
if ( ! has_post_thumbnail() ) {
	return;
}

// Add images size
$size = 'full';

// Caption
$caption = get_the_post_thumbnail_caption();

// Image args
$img_args = array(
    'alt' => get_the_title(),
);
if ( ubik_get_schema_markup( 'image' ) ) {
	$img_args['itemprop'] = 'image';
} ?>

<div class="single-img">

	<?php
	// Display post thumbnail
	the_post_thumbnail( $size, $img_args ); ?>

	<?php
	// Caption
	if ( $caption ) { ?>
		<div class="img-caption">
			<?php echo esc_html( $caption ); ?>
		</div>
	<?php
	} ?>

</div><!-- .thumbnail -->
