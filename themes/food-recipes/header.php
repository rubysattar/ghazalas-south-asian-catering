<?php
/**
 * The Header template for our theme
 */
$foodrecipes_options = get_option( 'foodrecipes_theme_options' );
$SocialIconDefault = array(
  array('url'=>isset($foodrecipes_options['fburl'])?$foodrecipes_options['fburl']:'','icon'=>'fa-facebook'),
  array('url'=>isset($foodrecipes_options['twitter'])?$foodrecipes_options['twitter']:'','icon'=>'fa-twitter'),
  array('url'=>isset($foodrecipes_options['googleplus'])?$foodrecipes_options['googleplus']:'','icon'=>'fa-google-plus'),
  array('url'=>isset($foodrecipes_options['pintrest'])?$foodrecipes_options['pintrest']:'','icon'=>'fa-pinterest'),
  array('url'=>isset($foodrecipes_options['dribbble'])?$foodrecipes_options['dribbble']:'','icon'=>'fa-dribbble')
  );
 ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="foodrecipes-container-recipes container">
    <div class="col-md-12 foodrecipes-heading-title no-padding">
      <?php if(get_header_image()){ ?>
      <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" class="foodrecipes-custom-header" alt="" />
      <?php } ?>
      <div class="col-md-3 foodrecipes-logo"> <a href="<?php echo esc_url(home_url()); ?>">
        <?php if(has_custom_logo() ): the_custom_logo(); endif; ?>
        </a>
        <?php if(display_header_text()) { ?>
       <a href="<?php echo esc_url(home_url()); ?>"> <h1 class="foodrecipes-site-title"><?php 
             echo esc_html(get_bloginfo('name')); ?></h1>
            <?php echo esc_html(get_bloginfo( 'description'));?></a> <?php } ?>
         </div>
      <div class="col-md-3 no-padding-right foodrecipes-social-icon-right ">
        <ul class="foodrecipes-social list-inline pull-right">
          <?php for($i=1; $i<=5; $i++) : 
                if(get_theme_mod('SocialIconLink'.$i,$SocialIconDefault[$i-1]['url'])!='' && get_theme_mod('SocialIcon'.$i,$SocialIconDefault[$i-1]['icon'])!=''): ?>
                <li><a href="<?php echo esc_url(get_theme_mod('SocialIconLink'.$i,$SocialIconDefault[$i-1]['url'])); ?>" class="icon" title="" target="_blank">
                <i class="fa <?php echo esc_attr(get_theme_mod('SocialIcon'.$i,$SocialIconDefault[$i-1]['icon'])); ?>"></i>
                </a></li>
              <?php endif; endfor;?>        
        </ul>
      </div>
      

      <div id="mainmenu" classold=="collapse">
          <?php
              $foodrecipes_defaults = array(
                  'theme_location'  => 'primary',                              
                  'echo' => true, 
                  'container'       => 'ul', 
                  'container_class' => 'col-md-6',
                  'menu_class'      => 'navbar-nav',
                  'depth'           => 0,
              );                               
              wp_nav_menu($foodrecipes_defaults);
           ?>
      </div><!-- /.nav-collapse -->


    </div>
    <div class="clearfix"></div>
  </div>
</header>
