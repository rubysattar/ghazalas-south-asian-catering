<?php
/**
 * Post entry image
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

// Blog style
$blog_style = ubik_blog_style();

// Show title in featured image
$show_title = get_theme_mod( 'ubik_h_card_entry_image_title_display', false );

// Add images size
if ( 'card' == $blog_style || 'h-card' == $blog_style ) {
	$size = 'medium';
} else {
	$size = 'full';
}

// Caption
$caption = get_the_post_thumbnail_caption();

// Image args
$img_args = array(
  'alt' => get_the_title(),
);
if ( ubik_get_schema_markup( 'image' ) ) {
	$img_args['itemprop'] = 'image';
}
?>

<div class="entry-img">

	<a href="<?php the_permalink(); ?>">

		<?php
		// Display post thumbnail
		the_post_thumbnail( $size, $img_args ); ?>

		<span class="overlay"></span>
		
	</a>

	<?php
	if ( 'h-card' == $blog_style && true == $show_title ) : ?>

		<div class="entry-img-inner-content <?php echo esc_attr( ubik_h_card_entry_image_inner_content_classes() ); ?>">

			<?php
			get_template_part( 'template-parts/entry/image-title' ); ?>

		</div>

	<?php endif; ?>

</div>

<?php
// Caption
if ( $caption ) { ?>
	<div class="img-caption">
		<?php echo esc_html( $caption ); ?>
	</div>
<?php
}