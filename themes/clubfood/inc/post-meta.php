<?php
/**
 * The template for displaying post meta (post date, post author and post comments)
 *
 * @package ClubFood
 */

?>
<?php if ( 'post' === get_post_type() ) : ?>
<div class="post-meta d-table mb-4">
	<div class="post-date float-left">
		<?php echo the_time( get_option( 'date_format' ) ); ?><span class="mx-2">|</span>
	</div>
	<div class="post-author float-left">
		<?php // translators: %s containing the name of the author. ?>
		<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php sprintf( esc_attr__( 'View all posts by %s', 'clubfood' ), get_the_author() ); ?>"><?php echo get_the_author(); ?></a>
	</div>
	<?php if ( post_password_required() !== true ) : ?>
	<div class="post-comments float-left">
		<span class="mx-2">|</span> <?php comments_number( __( '0 Comments', 'clubfood' ), __( '1 Comment', 'clubfood' ), __( '% Comments', 'clubfood' ) ); ?>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>
