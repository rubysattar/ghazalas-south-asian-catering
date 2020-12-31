<?php
/**
 * The template for displaying all pages
 *
 * @package ClubFood
 */

get_header(); ?>

<section class="content content-page py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>	
				<div class="page-message">
					<?php the_content(); ?>
					<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-link">' . __( 'Pages:', 'clubfood' ),
							'after'  => '</div>',
						)
					);
					?>
				</div>
				<div class="page-edit mb-4 clearfix">
					<?php edit_post_link( __( 'Edit', 'clubfood' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<?php if ( comments_open() || '0' !== get_comments_number() ) : ?>
					<?php comments_template( '', true ); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
