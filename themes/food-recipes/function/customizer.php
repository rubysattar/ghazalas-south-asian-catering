<?php
/**
*  Customization options
**/

function foodrecipes_customize_register( $wp_customize ) 
{
  $foodrecipes_options = get_option('foodrecipes_theme_options');

    $wp_customize->add_panel(
      'general',
      array(
          'title' => __( 'General', 'food-recipes' ),
          'description' => __('styling options','food-recipes'),
          'priority' => 20, 
      )
    );
  /* ------- Start Basic Setting Section ********/
   $wp_customize->add_section( 'basic_setting', array(
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => esc_html__('Basic Settings', 'food-recipes'),
      'description'    => '',
      'panel'          => 'general'
    ) );
  //All our sections, settings, and controls will be added here
  $wp_customize->add_section(
    'social_setting',
    array(
      'title' => __('Social Settings', 'food-recipes'),
      'priority' => 120,
      'description' => __( 'In first input box, you need to add FONT AWESOME shortcode which you can find ' ,  'food-recipes').'<a target="_blank" href="'.esc_url('https://fontawesome.com/icons?from=io').'">'.__('here' ,  'food-recipes').'</a>'.__(' and in second input box, you need to add your social media profile URL.', 'food-recipes').'<br />'.__(' Enter the URL of your social accounts. Leave it empty to hide the icon.' ,  'food-recipes'),
      'panel'          => 'general'
    )
  );

$SocialIconDefault = array(
  array('url'=>isset($foodrecipes_options['fburl'])?$foodrecipes_options['fburl']:'','icon'=>'fa-facebook'),
  array('url'=>isset($foodrecipes_options['twitter'])?$foodrecipes_options['twitter']:'','icon'=>'fa-twitter'),
  array('url'=>isset($foodrecipes_options['googleplus'])?$foodrecipes_options['googleplus']:'','icon'=>'fa-google-plus'),
  array('url'=>isset($foodrecipes_options['pintrest'])?$foodrecipes_options['pintrest']:'','icon'=>'fa-pinterest'),
  array('url'=>isset($foodrecipes_options['dribbble'])?$foodrecipes_options['dribbble']:'','icon'=>'fa-dribbble')
  );

  $SocialIcon = array();
    for($i=1;$i <= 5;$i++):  
      $SocialIcon[] =  array( 'slug'=>sprintf('SocialIcon%d',$i),   
        'default' => $SocialIconDefault[$i-1]['icon'],   
        'label' => esc_html__( 'Social Account ', 'food-recipes') .$i,   
        'priority' => sprintf('%d',$i) );  
    endfor;
    foreach($SocialIcon as $SocialIcons){
      $wp_customize->add_setting(
        $SocialIcons['slug'],
        array( 
         'default' => $SocialIcons['default'],       
          'capability'     => 'edit_theme_options',
          'type' => 'theme_mod',
          'sanitize_callback' => 'sanitize_text_field',
        )
      );
      $wp_customize->add_control(
        $SocialIcons['slug'],
        array(
          'type'  => 'text',
          'section' => 'social_setting',
          'input_attrs' => array( 'placeholder' => esc_attr__('Enter Icon','food-recipes') ),
          'label'      =>   $SocialIcons['label'],
          'priority' => $SocialIcons['priority']
        )
      );
    }
    $SocialIconLink = array();
    for($i=1;$i <= 5;$i++):  
      $SocialIconLink[] =  array( 'slug'=>sprintf('SocialIconLink%d',$i),   
        'default' => $SocialIconDefault[$i-1]['url'],   
        'label' => esc_html__( 'Social Link ', 'food-recipes' ) .$i,
        'priority' => sprintf('%d',$i) );  
    endfor;
    foreach($SocialIconLink as $SocialIconLinks){
      $wp_customize->add_setting(
        $SocialIconLinks['slug'],
        array(
          'default' => $SocialIconLinks['default'],
          'capability'     => 'edit_theme_options',
          'type' => 'theme_mod',
          'sanitize_callback' => 'esc_url_raw',
        )
      );
      $wp_customize->add_control(
        $SocialIconLinks['slug'],
        array(
          'type'  => 'text',
          'section' => 'social_setting',
          'priority' => $SocialIconLinks['priority'],
          'input_attrs' => array( 'placeholder' => esc_html__('Enter URL','food-recipes')),
        )
      );
    }

      
/* ------------- Start Footer Settings Section ------------- */
   $wp_customize->add_section( 'footer_setting', array(
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => esc_html__('Footer Settings', 'food-recipes'),
      'description' => '',
    ) );
    $wp_customize->add_setting( 'footerCopyright', array(
      'default' => isset($foodrecipes_options['footertext'])?$foodrecipes_options['footertext']:'',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'footerCopyright', array(
        'type' => 'textarea',
        'section' => 'footer_setting',
        'label'   => __('Copyright Text','food-recipes'),
        'description' => esc_html__('Some text regarding copyright of your site, you would like to display in the footer.', 'food-recipes'),
    ) );
  /* ------------- End Footer Section ------------- */

  $wp_customize->get_section('title_tagline')->panel = 'general';
  $wp_customize->get_section('static_front_page')->panel = 'general';
  $wp_customize->get_section('header_image')->panel = 'general';
}
add_action( 'customize_register', 'foodrecipes_customize_register' );