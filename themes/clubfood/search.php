<?php
/**
 * The template for displaying search results pages
 *
 * @package ClubFood
 */

get_header(); ?>

<section class="content content-search py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p><?php echo category_description(); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php get_template_part( 'loop' ); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
