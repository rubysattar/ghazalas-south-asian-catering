<?php
/**
 * Links to go to another post.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Only display for standard posts
if ( 'post' != get_post_type() ) {
	return;
}

// Args
$args = array(
	'prev_text'             => '<div class="next-prev"><span class="next-prev-icon"><i class="fas fa-arrow-left fa-lg"></i></span>'. esc_html__( 'Previous', 'ubik' ) .'</div><div class="title">%title</div>',
  'next_text'             => '<div class="next-prev">'. esc_html__( 'Next', 'ubik' ) .'<span class="next-prev-icon"><i class="fas fa-arrow-right fa-lg"></i></span></div><div class="title">%title</div>',
  'in_same_term'          => false,
  'screen_reader_text'    => esc_html__( 'Continue Reading', 'ubik' ),
);

// Args
$args = apply_filters( 'ubik_single_post_nav_args_filter', $args ); ?>

<?php the_post_navigation( $args ); ?>

