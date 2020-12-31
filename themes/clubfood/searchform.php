<?php
/**
 * Template for displaying search forms
 *
 * @package ClubFood
 */

?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="search-wrap">
		<div class="row">
			<div class="col-7 col-lg-8 pr-0">
				<input type="search" class="form-control" placeholder="<?php echo esc_attr__( 'Search', 'clubfood' ); ?>..." name="s" id="search-input" value="<?php echo get_search_query(); ?>" />
			</div>
			<div class="col-5 col-lg-4 pl-0">
				<input class="btn btn-default btn-block btn-search" type="submit" id="search-submit" value="<?php echo esc_attr__( 'Search', 'clubfood' ); ?>" />
			</div>
		</div>
	</div>
</form>
