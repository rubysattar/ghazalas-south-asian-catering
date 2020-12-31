<?php
/**
 * The template for displaying social media icons
 *
 * @package ClubFood
 */

?>
<?php if ( get_theme_mod( 'clubfood_facebooklink' ) || get_theme_mod( 'clubfood_twitterlink' ) || get_theme_mod( 'clubfood_pinterestlink' ) || get_theme_mod( 'clubfood_instagramlink' ) || get_theme_mod( 'clubfood_linkedinlink' ) || get_theme_mod( 'clubfood_youtubelink' ) || get_theme_mod( 'clubfood_vimeo' ) || get_theme_mod( 'clubfood_tumblrlink' ) || get_theme_mod( 'clubfood_flickrlink' ) ) : ?>
<div class="social-icons float-right">
	<ul class="list-unstyled d-table mb-0">
<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_facebooklink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_facebooklink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_twitterlink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_twitterlink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-twitter"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_pinterestlink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_pinterestlink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_instagramlink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_instagramlink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-instagram"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_linkedinlink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_linkedinlink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_youtubelink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_youtubelink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-youtube"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_vimeo' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_vimeo' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_tumblrlink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_tumblrlink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-tumblr"></i></a></li>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'clubfood_flickrlink' ) ) : ?>
		<li class="float-left border-left"><a href="<?php echo esc_url( get_theme_mod( 'clubfood_flickrlink' ) ); ?>" class="text-white py-2 px-2 px-sm-3 d-block" target="_blank"><i class="fab fa-flickr"></i></a></li>
		<?php endif; ?>
<?php if ( get_theme_mod( 'clubfood_facebooklink' ) || get_theme_mod( 'clubfood_twitterlink' ) || get_theme_mod( 'clubfood_pinterestlink' ) || get_theme_mod( 'clubfood_instagramlink' ) || get_theme_mod( 'clubfood_linkedinlink' ) || get_theme_mod( 'clubfood_youtubelink' ) || get_theme_mod( 'clubfood_vimeo' ) || get_theme_mod( 'clubfood_tumblrlink' ) || get_theme_mod( 'clubfood_flickrlink' ) ) : ?>
	</ul>
</div>
<?php endif; ?>
