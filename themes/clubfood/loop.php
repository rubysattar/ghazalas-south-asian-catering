<?php
/**
 * The template for displaying all the posts
 *
 * @package ClubFood
 */

?>
<div class="posts">
	<div class="row">
<?php $i = 1; ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<div class="col-12">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( 0 === $i % 2 ) : ?>
				<div class="post-item post-item-even post-item-<?php echo esc_attr( $i ); ?> mb-5">
			<?php else : ?>
				<div class="post-item post-item-odd post-item-<?php echo esc_attr( $i ); ?> mb-5">
			<?php endif; ?>
					<div class="row">
					<?php $backgroundimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_large' ); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php if ( 0 === $i % 2 ) : ?>
						<div class="col-11 col-md-6 col-lg-7 offset-md-1 order-md-1">
					<?php else : ?>
						<div class="col-11 col-md-6 col-lg-7 order-md-0">
					<?php endif; ?>
							<div class="post-image mb-5 mb-md-0 position-relative">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="position-relative rounded-circle d-block" style="background-image: url('<?php echo esc_url( $backgroundimg[0] ); ?>');">
									<div class="post-image-arrow position-absolute rounded-circle shadow-lg bg-white"></div>
								</a>
							</div>
						</div>
				<?php endif; ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php if ( 0 === $i % 2 ) : ?>
						<div class="col-12 col-md-5 col-lg-4 order-md-0">
					<?php else : ?>
						<div class="col-12 col-md-5 col-lg-4 offset-md-1 order-md-1">
					<?php endif; ?>
				<?php else : ?>
						<div class="col-12">
				<?php endif; ?>
						<?php if ( 1 === $i ) : ?>
							<div class="post-title">
						<?php else : ?>
							<div class="post-title mt-md-5">
						<?php endif; ?>
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="text-dark"><?php the_title(); ?></a></h2>
							</div>
							<?php get_template_part( 'inc/post', 'meta' ); ?>
							<div class="post-categories-list mb-4">
								<?php echo wp_kses_post( get_the_category_list( ', ' ) ); ?>
							</div>
							<div class="post-message">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $i++; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php get_template_part( 'no-results' ); ?>
<?php endif; ?>
	</div>
</div>
<div class="page-nav">
	<?php the_posts_pagination(); ?>
</div>
