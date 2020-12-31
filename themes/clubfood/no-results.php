<?php
/**
 * The template for displaying when there is no result
 *
 * @package ClubFood
 */

?>
<div class="col-12">
	<div class="page-title">
		<h1><?php esc_html_e( 'Oops..! No Results Found.', 'clubfood' ); ?></h1>
	</div>
	<p><?php esc_html_e( 'Perhaps, Try searching with different keywords.', 'clubfood' ); ?></p>
	<?php get_search_form(); ?>
</div>
