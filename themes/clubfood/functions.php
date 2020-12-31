<?php
/**
 * ClubFood functions and definitions
 *
 * @package ClubFood
 */

/**
 * ClubFood Theme Setup
 */
function clubfood_setup() {
	// Meta Title.
	add_theme_support( 'title-tag' );

	// Automatic Feed Links.
	add_theme_support( 'automatic-feed-links' );

	// Logo Support.
	add_theme_support(
		'custom-logo',
		array(
			'width'       => 215,
			'height'      => 38,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array(
				'site-title',
				'site-description',
			),
		)
	);

	// Featured Image.
	add_theme_support( 'post-thumbnails' );

	// Language Support.
	load_theme_textdomain( 'clubfood', get_template_directory() . '/languages' );

	// Header Image.
	$clubfood_args = array(
		'flex-width'         => true,
		'width'              => 1500,
		'flex-height'        => true,
		'height'             => 900,
		'default-text-color' => '#fff',
	);
	add_theme_support( 'custom-header', $clubfood_args );

	// Content Width.
	if ( ! isset( $content_width ) ) {
		$content_width = 1170;
	}
}
add_action( 'after_setup_theme', 'clubfood_setup' );

/**
 * Color / Social Customizer
 *
 * @param array $clubfood_wp_customize Theme Colors & Social Media.
 */
function clubfood_customize_register( $clubfood_wp_customize ) {
	$clubfood_colors   = array();
	$clubfood_colors[] = array(
		'slug'    => 'default_color',
		'default' => '#7dcdd6',
		'label'   => __( 'Default Color ', 'clubfood' ),
	);

	$clubfood_colors[] = array(
		'slug'    => 'contact_widget_color',
		'default' => '#ffffff',
		'label'   => __( 'Contact Widget Color ', 'clubfood' ),
	);

	foreach ( $clubfood_colors as $clubfood_color ) {
		$clubfood_wp_customize->add_setting(
			$clubfood_color['slug'],
			array(
				'default'           => $clubfood_color['default'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$clubfood_wp_customize->add_control(
			new WP_Customize_Color_Control(
				$clubfood_wp_customize,
				$clubfood_color['slug'],
				array(
					'label'    => $clubfood_color['label'],
					'section'  => 'colors',
					'settings' => $clubfood_color['slug'],
				)
			)
		);
	}

	$clubfood_wp_customize->add_panel(
		'widget_images',
		array(
			'priority'       => 70,
			'theme_supports' => '',
			'title'          => esc_html__( 'Widget Images', 'clubfood' ),
			'description'    => esc_html__( 'Set background images for certain widgets.', 'clubfood' ),
		)
	);

	$clubfood_wp_customize->add_section(
		'contact_background',
		array(
			'title'    => esc_html__( 'Contact Background', 'clubfood' ),
			'panel'    => 'widget_images',
			'priority' => 20,
		)
	);

	$clubfood_wp_customize->add_setting(
		'contact_bg',
		array(
			'flex-width'  => true,
			'width'       => 1500,
			'flex-height' => true,
			'height'      => 900,
		)
	);

	$clubfood_wp_customize->add_control(
		new WP_Customize_Image_Control(
			$clubfood_wp_customize,
			'contact_background_image',
			array(
				'label'    => esc_html__( 'Add Contact Background Here, the width should be approx 1500px', 'clubfood' ),
				'section'  => 'contact_background',
				'settings' => 'contact_bg',
			)
		)
	);

	$clubfood_wp_customize->add_section(
		'sociallinks',
		array(
			'title'       => __( 'Social Links', 'clubfood' ),
			'description' => __( 'Add Your Social Links Here.', 'clubfood' ),
			'priority'    => '900',
		)
	);

	$clubfood_wp_customize->add_setting(
		'clubfood_facebooklink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_facebooklink',
		array(
			'label'   => __( 'Facebook URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_twitterlink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_twitterlink',
		array(
			'label'   => __( 'Twitter URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_pinterestlink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_pinterestlink',
		array(
			'label'   => __( 'Pinterest URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_instagramlink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_instagramlink',
		array(
			'label'   => __( 'Instagram URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_linkedinlink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_linkedinlink',
		array(
			'label'   => __( 'LinkedIn URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_googlepluslink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_googlepluslink',
		array(
			'label'   => __( 'Google+ URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_youtubelink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_youtubelink',
		array(
			'label'   => __( 'YouTube URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_vimeo',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_vimeo',
		array(
			'label'   => __( 'Vimeo URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_tumblrlink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control(
		'clubfood_tumblrlink',
		array(
			'label'   => __( 'Tumblr URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
	$clubfood_wp_customize->add_setting(
		'clubfood_flickrlink',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$clubfood_wp_customize->add_control( 
		'clubfood_flickrlink',
		array(
			'label'   => __( 'Flickr URL', 'clubfood' ),
			'section' => 'sociallinks',
		)
	);
}
add_action( 'customize_register', 'clubfood_customize_register' );

/**
 * Includes Plugin Admin
 */
require_once ABSPATH . 'wp-admin/includes/plugin.php';

/**
 * Bootstrap
 */
function clubfood_bootstrap() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '1.0.12' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fontawesome/css/fontawesome.min.css', array(), '1.0.12' );
	wp_enqueue_style( 'clubfood-googlefonts', clubfood_google_fonts_url(), array(), null );
	wp_enqueue_style( 'clubfood-style', get_stylesheet_uri(), array(), '1.0.12' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '1.0.1', true );
	wp_enqueue_script( 'clubfood-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'clubfood_bootstrap' );

/**
 * Google Font
 */
function clubfood_google_fonts_url() {
	$font_families = array( 'Amatic+SC:wght@400;700', 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' );
	$query_args    = array(
		'family'  => implode( '&family=', $font_families ),
		'display' => 'swap',
	);
	$fonts_url     = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
	return apply_filters( 'clubfood_google_fonts_url', $fonts_url );
}

/**
 * Navigation
 */
function clubfood_register_menu() {
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Top Primary Menu', 'clubfood' ),
		)
	);
}
add_action( 'init', 'clubfood_register_menu' );

/**
 * Bootstrap Navigation
 */
function clubfood_bootstrap_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'depth'          => 2,
			'menu_class'     => 'nav navbar-nav',
			'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
			'walker'         => new WP_Bootstrap_Navwalker(),
		)
	);
}
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * WooCommerce Support
 */
function clubfood_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'clubfood_woocommerce_support' );

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10 );
add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display', 10 );

/**
 * WooCommerce Cart Count
 */
function clubfood_woocommerce_cart_count() {
	if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
		$clubfood_count = WC()->cart->cart_contents_count;
		?>
		<a href="<?php echo esc_html( WC()->cart->get_cart_url() ); ?>" title="<?php esc_attr( 'View your shopping cart', 'clubfood' ); ?>" class="w-100 h-100 rounded-circle d-block">
			<i class="fas fa-shopping-bag"></i>
		<?php if ( $clubfood_count > 0 ) { ?>
			<span class="woocommerce-cart-contents-count"><?php echo esc_html( $clubfood_count ); ?></span>
		<?php } ?>
		</a>
		<?php
	}
}
add_action( 'clubfood_header_top', 'clubfood_woocommerce_cart_count' );

/**
 * WooCommerce Cart Count
 *
 * @param array $clubfood_fragments Cart Count.
 */
function clubfoods_add_to_cart_fragment( $clubfood_fragments ) {
	ob_start();
	$clubfood_count = WC()->cart->cart_contents_count;
	?>
	<a href="<?php echo esc_html( WC()->cart->get_cart_url() ); ?>" title="<?php esc_attr( 'View your shopping cart', 'clubfood' ); ?>" class="w-100 h-100 rounded-circle d-block">
		<i class="fas fa-shopping-bag"></i>
	<?php if ( $clubfood_count > 0 ) { ?>
		<span class="woocommerce-cart-contents-count"><?php echo esc_html( $clubfood_count ); ?></span>
	<?php } ?>
	</a>
	<?php
	$clubfood_fragments['.woocommerce-cart-contents a'] = ob_get_clean();
	return $clubfood_fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'clubfoods_add_to_cart_fragment' );

/**
 * Header Style
 */
function clubfood_header_style() {
	if ( ! display_header_text() ) {
		echo '
		<style type="text/css">
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px 1px 1px 1px);
				clip: rect(1px, 1px, 1px, 1px);
			}
		</style>
		';
	}
}
add_action( 'wp_head', 'clubfood_header_style' );

/**
 * Custom Colors
 */
function clubfood_customizer_css() {
	$clubfood_default_color      = get_theme_mod( 'default_color' );
	$clubfood_header_text_color  = get_header_textcolor();
	$clubfood_contact_background = get_theme_mod( 'contact_bg' );
	$clubfood_contact_color      = get_theme_mod( 'contact_widget_color' );
	?>
	<style type="text/css">
	<?php if ( has_header_image() ) : ?>
		.site-header,
		.site-page {
			background-image: url('<?php header_image(); ?>');
		}
	<?php endif; ?>
	<?php if ( $clubfood_header_text_color ) : ?>
		.site-header,
		.site-header h1,
		.site-header p,
		.site-header li,
		.site-header a {
			color: #<?php echo esc_attr( $clubfood_header_text_color ); ?>;
		}
	<?php endif; ?>
	<?php if ( $clubfood_contact_background || $clubfood_contact_color ) : ?>
		.sidebar-contact {
			background-image: url('<?php echo esc_attr( $clubfood_contact_background ); ?>');
			color: <?php echo esc_attr( $clubfood_contact_color ); ?>;
		}
	<?php endif; ?>
	<?php if ( $clubfood_contact_color ) : ?>
		.sidebar-contact a {
			color: <?php echo esc_attr( $clubfood_contact_color ); ?>;
		}
	<?php endif; ?>
	<?php if ( $clubfood_default_color ) : ?>
		.btn-search,
		.btn-submit,
		.header-extra,
		.navbar-toggler,
		.sidebar-contact:after,
		.button,
		.post-image-empty,
		.nav-links .page-numbers.current,
		.nav-links .page-numbers:hover,
		.nav-links .page-numbers:focus,
		.nav-links .prev.page-numbers,
		.nav-links .next.page-numbers,
		.comment .reply a,
		.woocommerce-cart-contents,
		.woocommerce span.onsale,
		.woocommerce .products .product .button,
		.woocommerce .products .product a.added_to_cart,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce a.button.alt:hover,
		.woocommerce a.button.alt:focus,
		.woocommerce button.button.alt,
		.woocommerce button.button.alt:hover,
		.woocommerce button.button.alt:focus,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.sidebar .sidebar-button .btn-sidebar {
			background-color: <?php echo esc_attr( $clubfood_default_color ); ?>;
		}

		a,
		.post-categories-list {
			color: <?php echo esc_attr( $clubfood_default_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'clubfood_customizer_css' );

/**
 * Widgets
 */
function clubfood_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar', 'clubfood' ),
			'id'            => 'primary_sidebar',
			'before_widget' => '<div class="sidebar-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Header', 'clubfood' ),
			'id'            => 'header-sidebar',
			'before_widget' => '<div class="header">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1>',
			'after_title'   => '</h1>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Front page: Contact', 'clubfood' ),
			'id'            => 'contact_sidebar',
			'before_widget' => '<div class="sidebar-contact-main position-relative py-5">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'clubfood_widgets_init' );

/**
 * Post Read More
 *
 * @param array $link Show more link.
 */
function clubfood_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<p class="link-more mt-4"><a href="%1$s" class="more-link text-dark">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		// translators: %s containing the title of the post or page.
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'clubfood' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'clubfood_excerpt_more' );

/**
 * Bootstrap Images img-responsive
 *
 * @param array $html Html code for image with Bootstrap class.
 */
function clubfood_bootstrap_responsive_images( $html ) {
	$classes = 'img-responsive';
	if ( preg_match( '/<img.*? class="/', $html ) ) {
		$html = preg_replace( '/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html );
	} else {
		$html = preg_replace( '/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html );
	}
	return $html;
}
add_filter( 'the_content', 'clubfood_bootstrap_responsive_images', 10 );
add_filter( 'post_thumbnail_html', 'clubfood_bootstrap_responsive_images', 10 );

/**
 * Comment Reply
 */
function clubfood_comment_reply() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clubfood_comment_reply' );

/**
 * Bootstrap Comment Form
 *
 * @param array $clubfood_fields Comment Form Fields.
 */
function clubfood_comment_form_fields( $clubfood_fields ) {
	$clubfood_commenter = wp_get_current_commenter();
	$clubfood_req       = get_option( 'require_name_email' );
	$clubfood_aria_req  = ( $clubfood_req ? " aria-required='true'" : '' );
	$clubfood_html5     = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
	$clubfood_fields    = array(
		'author' => '<div class="form-group comment-form-author"><input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $clubfood_commenter['comment_author'] ) . '" placeholder="' . ( $clubfood_req ? '* ' : '' ) . __( 'Name', 'clubfood' ) . '..." size="30"' . $clubfood_aria_req . ' /></div>',
		'email'  => '<div class="form-group comment-form-email"><input class="form-control" id="email" name="email" ' . ( $clubfood_html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $clubfood_commenter['comment_author_email'] ) . '" placeholder="' . ( $clubfood_req ? '* ' : '' ) . __( 'Email', 'clubfood' ) . '..." size="30"' . $clubfood_aria_req . ' /></div>',
		'url'    => '<div class="form-group comment-form-url"><input class="form-control" id="url" name="url" ' . ( $clubfood_html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $clubfood_commenter['comment_author_url'] ) . '" placeholder="' . __( 'Website', 'clubfood' ) . '..." size="30" /></div>',
	);
	return $clubfood_fields;
}
add_filter( 'comment_form_default_fields', 'clubfood_comment_form_fields' );

/**
 * Bootstrap Comment Form
 *
 * @param array $clubfood_args Comment Form Fields.
 */
function clubfood_comment_form( $clubfood_args ) {
	$clubfood_args['comment_field'] = '<div class="form-group comment-form-comment"><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" placeholder="' . esc_attr__( 'Comment', 'clubfood' ) . '..." aria-required="true"></textarea></div>';
	$clubfood_args['class_submit']  = 'btn btn-default btn-submit';
	return $clubfood_args;
}
add_filter( 'comment_form_defaults', 'clubfood_comment_form' );

?>
