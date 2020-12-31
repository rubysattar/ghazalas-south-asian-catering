<?php
/**
 * Single related posts
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

// Text
$text = esc_html__( 'You Might Also Like', 'ubik' );

// Apply filters for child theming
$text = apply_filters( 'ubik_related_posts_title_filter', $text );

// Number of related posts
$ubik_article_number = absint( get_theme_mod( 'ubik_single_related_article_number', '3' ) );
$ubik_article_number = apply_filters( 'ubik_single_related_article_number_filter', $ubik_article_number );

// Taxonomy
$tax = get_theme_mod( 'ubik_single_related_article_taxonomy', 'category' );
$tax = $tax ? $tax : 'category';

// Create an array of current term ID's
$term_list     = wp_get_post_terms( get_the_ID(), $tax );
$term_list_ids = array();
foreach( $term_list as $term ) {
	$term_list_ids[] = $term->term_id;
}

// Query args
$args = array(
	'posts_per_page' => $ubik_article_number,
	'orderby'        => 'rand',
	'post__not_in'   => array( get_the_ID() ),
	'no_found_rows'  => true,
	'tax_query'      => array (
		'relation'  => 'AND',
		array (
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-quote', 'post-format-link' ),
			'operator' => 'NOT IN',
		),
	),
);

// If category
if ( 'category' == $tax ) {
	$args['category__in'] = $term_list_ids;
}

// If tags
if ( 'post_tag' == $tax ) {
	$args['tag__in'] = $term_list_ids;
}

// Args
$args = apply_filters( 'ubik_single_related_query_args_filter', $args );

// The Query
$ubik_related_query = new WP_Query( $args );

// If the custom query returns post display related posts section
if ( $ubik_related_query->have_posts() ) : ?>

	<section class="related-posts">

		<h3 class="related-posts__title"><?php echo esc_html( $text ); ?></h3>

		<div class="<?php echo esc_attr( ubik_single_related_posts_grid_classes() ); ?>">

			<?php foreach( $ubik_related_query->posts as $post ) : setup_postdata( $post ); ?>

				<?php
				// Get post format
				$format = get_post_format(); ?>

				<div class="cell">
			
					<article <?php post_class( 'related-post-entry' ); ?>>

						<?php
						if ( has_post_thumbnail() ) :

							// Add images size
							$size = 'full';

							// Image args
							$img_args = array(
									'alt' => get_the_title(),
							);
							if ( ubik_get_schema_markup( 'image' ) ) {
								$img_args['itemprop'] = 'image';
							}?>

							<div class="related-post-entry__img">

								<a href="<?php the_permalink(); ?>">

									<?php
										// Display post thumbnail
										the_post_thumbnail( $size, $img_args ); ?>
									
								</a>

							</div><!-- .related-post-entry__img -->

						<?php endif; ?>

						<div class="related-post-entry__title">
						
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						
						</div><!-- .related-post-entry__title -->
										
						<time class="related-post-entry__date" datetime="<?php echo esc_html( get_the_date( 'c' ) ); ?>"><i class="far fa-calendar-alt fa-lg"></i><?php echo esc_html( get_the_date() ); ?></time>

					</article>

			
				</div><!-- .cell -->


			<?php endforeach; ?>

		</div>

	</section><!-- .related-posts -->

<?php endif; ?>

<?php wp_reset_postdata(); ?>