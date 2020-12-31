<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ubik wordpress theme
 */

// Return if password is required
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'ubik' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'ubik'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 50,
					'style'       => 'ol',
					'short_ping'  => true,
					'reply_text'  => '<i class="fa fa-reply" aria-hidden="true"></i>' . __( 'Reply', 'ubik' ),
				) );
			?>
		</ol>

		<?php the_comments_pagination( array(
			'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __( 'Previous', 'ubik' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'ubik' ) . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'ubik' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
