<?php
/**
 * Search entry layout
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;

$excerpt_length = apply_filters( 'ubik_search_results_excerpt_length', '30' );
$readmore_text = esc_html__( 'Read more', 'ubik' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-entry grid-x' ); ?>>

  <?php if ( '' !== get_the_post_thumbnail() ) : ?>

		<div class="search-entry__img cell show-for-medium">

			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
      </a>
      
		</div><!-- .search-entry__img -->

  <?php endif; ?>

  <div class="search-entry__stacked cell auto">

    <div class="search-entry__stacked__title">
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </div>

    <div class="search-entry__stacked__excerpt"<?php ubik_schema_markup( 'entry_content' ); ?>>
      <p>
        <?php echo wp_trim_words( strip_shortcodes( $post->post_content ), $excerpt_length ); ?>
      </p>
    </div>

    <div class="search-entry__stacked__readmore">
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $readmore_text ); ?>"><?php echo esc_html( $readmore_text ); ?></a>
    </div>

  </div>

</article>