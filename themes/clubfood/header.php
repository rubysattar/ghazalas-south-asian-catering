<?php
/**
 * The header for our theme including the navigation and the photo header
 *
 * @package ClubFood
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open() ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<?php if ( get_theme_mod( 'clubfood_facebooklink' ) || get_theme_mod( 'clubfood_twitterlink' ) || get_theme_mod( 'clubfood_pinterestlink' ) || get_theme_mod( 'clubfood_instagramlink' ) || get_theme_mod( 'clubfood_linkedinlink' ) || get_theme_mod( 'clubfood_googlepluslink' ) || get_theme_mod( 'clubfood_youtubelink' ) || get_theme_mod( 'clubfood_vimeo' ) || get_theme_mod( 'clubfood_tumblrlink' ) || get_theme_mod( 'clubfood_flickrlink' ) ) : ?>
<section class="header-extra position-relative">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-12">
				<?php get_template_part( 'inc/social' ); ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php if ( get_theme_mod( 'clubfood_facebooklink' ) || get_theme_mod( 'clubfood_twitterlink' ) || get_theme_mod( 'clubfood_pinterestlink' ) || get_theme_mod( 'clubfood_instagramlink' ) || get_theme_mod( 'clubfood_linkedinlink' ) || get_theme_mod( 'clubfood_googlepluslink' ) || get_theme_mod( 'clubfood_youtubelink' ) || get_theme_mod( 'clubfood_vimeo' ) || get_theme_mod( 'clubfood_tumblrlink' ) || get_theme_mod( 'clubfood_flickrlink' ) ) : ?>
<nav class="navbar navbar-expand-xs navbar-extra navbar-dark fixed-top">
<?php else : ?>
<nav class="navbar navbar-expand-xs navbar-dark fixed-top">
<?php endif; ?>
	<a class="navbar-brand position-relative" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	<?php
	$clubfood_custom_logo_id = get_theme_mod( 'custom_logo' );
	$clubfood_logo           = wp_get_attachment_image_src( $clubfood_custom_logo_id, 'full' );
	$clubfood_description    = get_bloginfo( 'description', 'display' );
	?>
	<?php if ( has_custom_logo() ) : ?>
		<img src="<?php echo esc_url( $clubfood_logo[0] ); ?>" class="img-responsive">
	<?php else : ?>
		<span class="site-title"><?php bloginfo( 'name' ); ?></span>
		<?php if ( $clubfood_description || is_customize_preview() ) : ?>
			<span class="site-description d-table"><?php echo esc_html( $clubfood_description ); ?></span>
		<?php endif; ?>
	<?php endif; ?>
	</a>
	<button class="navbar-toggler border-0 rounded-circle collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-line position-relative mb-1 bg-white rounded"></span>
		<span class="navbar-toggler-line position-relative mb-1 bg-white rounded"></span>
		<span class="navbar-toggler-line position-relative bg-white rounded"></span>
	</button>
<?php if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) : ?>
	<?php $clubfood_count = WC()->cart->cart_contents_count; ?>
	<div class="woocommerce-cart-contents position-fixed rounded-circle">
		<a href="<?php echo esc_html( WC()->cart->get_cart_url() ); ?>" title="<?php esc_attr( 'View your shopping cart', 'clubfood' ); ?>" class="w-100 h-100 rounded-circle d-block">
			<i class="fas fa-shopping-bag"></i>
		<?php if ( $clubfood_count > 0 ) : ?>
			<span class="woocommerce-cart-contents-count"><?php echo esc_html( $clubfood_count ); ?></span>
		<?php endif; ?>
		</a>
	</div>
<?php endif; ?>
	<div class="collapse navbar-collapse w-100 h-100 position-fixed" id="navbarSupportedContent">
		<ul class="navbar-nav w-100 position-absolute text-center">
			<?php clubfood_bootstrap_menu(); ?>
		</ul>
	</div>
</nav>

<?php if ( is_front_page() && is_home() && ! is_paged() ) : ?>
<section class="site-header site-header-home position-relative">
<?php elseif ( is_single() ) : ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<?php $backgroundimg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
		<section class="site-header site-header-single position-relative" style="background-image: url('<?php echo esc_url( $backgroundimg[0] ); ?>');">
	<?php else : ?>
		<section class="site-header site-header-single position-relative" style="background-image: url('<?php echo esc_url( header_image() ); ?>');">
	<?php endif; ?>
<?php else : ?>
	<section class="site-header site-header-page position-relative">
<?php endif; ?>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-12 col-sm-5 d-flex align-items-center">
				<div class="site-header-main w-100 position-relative">
			<?php if ( is_front_page() && is_home() && ! is_paged() ) : ?>
				<?php if ( is_active_sidebar( 'header-sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'header-sidebar' ); ?>
				<?php endif; ?>
			<?php elseif ( is_single() || is_page() ) : ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<?php get_template_part( 'inc/post', 'meta' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php elseif ( is_category() ) : ?>
				<h1><?php esc_html_e( 'Latest Posts Under:', 'clubfood' ); ?> <?php single_cat_title(); ?></h1>
			<?php elseif ( is_search() ) : ?>
				<h1><?php esc_html_e( 'Search Results For:', 'clubfood' ); ?> <strong><?php echo get_search_query(); ?></strong></h1>
			<?php elseif ( is_archive() ) : ?>
				<?php if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) : ?>
					<?php if ( is_shop() ) : ?>
						<h1><?php woocommerce_page_title(); ?></h1>
					<?php else : ?>
						<h1><?php the_archive_title(); ?></h1>
					<?php endif; ?>
				<?php else : ?>
					<h1><?php the_archive_title(); ?></h1>
				<?php endif; ?>
			<?php elseif ( is_404() ) : ?>
				<h1><?php esc_html_e( 'The Page You Are Looking For Doesn&rsquo;t Exist.', 'clubfood' ); ?></h1>
			<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if ( is_active_sidebar( 'primary_sidebar' ) ) : ?>
<section class="sidebar position-fixed">
	<div class="sidebar-button">
		<a class="btn btn-sidebar text-uppercase rounded-0"><?php esc_html_e( 'Sidebar', 'clubfood' ); ?></a>
	</div>
	<div class="sidebar-frame position-absolute bg-white border-left">
		<div class="sidebar-main p-3 p-sm-5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php endif; ?>
