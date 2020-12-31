<?php
/**
 * The template for displaying Comments.
 *
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return; ?>

<div class="clearfix"></div>
<div id="comments" class="comments-area">
  <?php if ( have_comments() ) : 	?>
  <h2 class="comments-title">
    <?php
    /* translators: 1: comment count number, 2: post title */
    printf(esc_html(_n('One thought on : %1$s', '%1$s thoughts', get_comments_number(), 'food-recipes')), esc_attr(number_format_i18n(get_comments_number())), get_the_title() ); 
        ?>
  </h2>
  <ul class="">
    <?php	wp_list_comments( array( 'callback' => 'foodrecipes_comment', 'short_ping' => true, 'style' => 'ul' ) ); ?>
  </ul>
  <?php paginate_comments_links(); ?>
  <?php endif; ?>
  <?php comment_form(); ?>
</div>
