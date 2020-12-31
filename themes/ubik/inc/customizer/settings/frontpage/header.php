<?php
/**
 * Frontpage Header Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 *  Section : ubik_frontpage_header_section
 * 
 *    ubik_frontpage_specific_header
 * 
 *    [if : ubik_frontpage_specific_header == 1]
 *    ubik_frontpage_header_format
 *
 *      [if : ubik_frontpage_header_format == image]
 *      Sub-section : ubik_frontpage_image_header_general_options_section
 *    
 *        ubik_frontpage_image_header_height
 * 				ubik_frontpage_image_header_bg_heading
 * 				ubik_frontpage_image_header_bg_color
 * 				ubik_core_header_image_controls
 *        ubik_frontpage_image_header_bg_img_position
 *        ubik_frontpage_image_header_bg_img_repeat
 *        ubik_frontpage_image_header_bg_img_attachment
 *        ubik_frontpage_image_header_bg_img_size
 * 				ubik_frontpage_image_header_border_heading
 * 				ubik_frontpage_image_header_border_style
 * 				ubik_frontpage_image_header_border_width
 * 				ubik_frontpage_image_header_colors_heading
 * 					[if : ubik_frontpage_image_header_colors_heading == true]
 * 					ubik_frontpage_image_header_border_color
 * 				ubik_frontpage_image_header_overlay_heading
 *      	ubik_frontpage_image_header_overlay_style
 *      	ubik_frontpage_image_header_overlay_color
 * 				
 * 
 * 			[if : ubik_frontpage_header_format != no-header]
 *      Sub-section : ubik_frontpage_menubar_section
 *
 * 				Sub-section : ubik_frontpage_menubar_general_section
 * 
 *        	ubik_frontpage_image_header_menubar_deactivate  [& if : ubik_frontpage_header_format != simple]
 * 					ubik_frontpage_menubar_device_visibility
 *        	ubik_frontpage_image_header_menubar_position    [& if : ubik_frontpage_header_format != simple]
 *        	ubik_frontpage_menubar_full_width
 *        	ubik_frontpage_menubar_sticky
 * 					ubik_frontpage_menubar_min_height
 * 					ubik_frontpage_menubar_color_heading
 * 						[if : ubik_frontpage_menubar_color_heading = true]
 * 						ubik_frontpage_menubar_bg_color
 * 						ubik_frontpage_menubar_borders_color
 * 
 * 				Sub-section : ubik_frontpage_menubar_elements_position_section
 * 
 * 					ubik_frontpage_menubar_left_area_heading
 *          ubik_frontpage_menubar_left_area_elements
 *          ubik_frontpage_menubar_left_area_alignment
 *          ubik_frontpage_menubar_left_area_width
 * 
 * 					ubik_frontpage_menubar_center_area_heading
 *          ubik_frontpage_menubar_center_area_elements
 *          ubik_frontpage_menubar_center_area_alignment
 *          ubik_frontpage_menubar_center_area_width
 * 
 * 					ubik_frontpage_menubar_right_area_heading
 *          ubik_frontpage_menubar_right_area_elements
 *          ubik_frontpage_menubar_right_area_alignment
 *          ubik_frontpage_menubar_right_area_width
 * 
 * 				Sub-section : ubik_frontpage_menubar_elements_customization_section
 * 
 * 			    ubik_frontpage_menubar_logo_options_heading
 * 					ubik_frontpage_menubar_logo_device_visibility
 * 			    ubik_frontpage_menubar_logo_max_height
 * 					ubik_frontpage_menubar_logo_hover_effect
 * 					ubik_frontpage_menubar_logo_spacing
 * 					ubik_frontpage_menubar_text_options_heading
 *          ubik_frontpage_menubar_text_device_visibility
 *          ubik_frontpage_menubar_text_content
 * 					ubik_frontpage_menubar_text_spacing
 * 					ubik_frontpage_menubar_text_color_heading
 * 						[if : ubik_frontpage_menubar_text_color_heading = true]
 * 						ubik_frontpage_menubar_text_color
 * 						ubik_frontpage_menubar_text_links_color
 * 						ubik_frontpage_menubar_text_links_hover_color
 * 					ubik_frontpage_menubar_text_typography_heading
 * 						[if : ubik_frontpage_menubar_text_typography_heading = true]
 * 						ubik_frontpage_menubar_text_typography_font_size
 * 						ubik_frontpage_menubar_text_typography_letter_spacing
 * 						ubik_frontpage_menubar_text_typography_text_transform
 *          ubik_frontpage_menubar_search_options_heading
 * 					ubik_frontpage_menubar_search_device_visibility
 *          ubik_frontpage_menubar_search_style
 * 					ubik_frontpage_menubar_search_spacing
 * 					ubik_frontpage_menubar_search_color_heading
 * 					[if : ubik_frontpage_menubar_search_color_heading = true && ubik_frontpage_menubar_search_style != form]
 * 					ubik_frontpage_menubar_search_icon_color
 * 					ubik_frontpage_menubar_search_icon_color_hover
 * 					[if : ubik_frontpage_menubar_search_color_heading = true && ubik_frontpage_menubar_search_style = form]
 * 					ubik_frontpage_menubar_search_form_border_color
 * 					ubik_frontpage_menubar_search_form_border_focus_color
 * 					ubik_frontpage_menubar_search_form_bg_color
 * 					ubik_frontpage_menubar_search_form_text_color
 * 					ubik_frontpage_menubar_search_form_button_bg_color
 * 					ubik_frontpage_menubar_search_form_icon_color
 * 					ubik_frontpage_menubar_search_form_icon_hover_focus_color
 *          ubik_frontpage_menubar_nav_options_heading
 * 					ubik_frontpage_menubar_nav_device_visibility
 * 					ubik_frontpage_menubar_nav_menu_spacing
 * 					ubik_frontpage_menubar_nav_menu_items_spacing
 * 					ubik_frontpage_menubar_nav_menu_items_color_heading
 * 						[if : ubik_frontpage_menubar_nav_menu_items_color_heading = true]
 * 						ubik_frontpage_menubar_nav_menu_items_color
 * 						ubik_frontpage_menubar_nav_menu_items_color_hover
 * 					ubik_frontpage_menubar_nav_typography_heading
 * 						[if : ubik_frontpage_menubar_nav_typography_heading = true]
 * 						ubik_frontpage_menubar_nav_typography_font_size
 * 						ubik_frontpage_menubar_nav_typography_letter_spacing
 * 						ubik_frontpage_menubar_nav_typography_text_transform
 * 
 *      [if : ubik_frontpage_header_format == image]
 *      Sub-section : ubik_frontpage_header_content_section
 * 
 *        ubik_frontpage_header_content_elements
 * 				ubik_frontpage_header_content_elements_direction
 *        ubik_frontpage_header_content_elements_vertical_alignment
 * 
 *        [if : site-tagline in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_site_tagline_options_heading
 *	  		ubik_frontpage_header_content_site_tagline_device_visibility
 *	  		ubik_frontpage_header_content_site_tagline_horizontal_alignment
 *				ubik_frontpage_header_content_site_tagline_spacing
 *				ubik_frontpage_header_content_site_tagline_color_heading
 *					[if : ubik_frontpage_header_content_site_tagline_color_heading = true]
 *					ubik_frontpage_header_content_site_tagline_color
 *				ubik_frontpage_header_content_site_tagline_typography_heading
 *					[if : ubik_frontpage_header_content_site_tagline_typography_heading = true]
 *					ubik_frontpage_header_content_site_tagline_font_size
 *					ubik_frontpage_header_content_site_tagline_letter_spacing
 *					ubik_frontpage_header_content_site_tagline_text_transform
 *        [if : page-title in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_page_title_options_heading
 *	  		ubik_frontpage_header_content_page_title_device_visibility
 *	  		ubik_frontpage_header_content_page_title_horizontal_alignment
 *				ubik_frontpage_header_content_page_title_spacing
 *				ubik_frontpage_header_content_page_title_color_heading
 *					[if : ubik_frontpage_header_content_page_title_color_heading = true]
 *					ubik_frontpage_header_content_page_title_color
 *				ubik_frontpage_header_content_page_title_typography_heading
 *					[if : ubik_frontpage_header_content_page_title_typography_heading = true]
 *					ubik_frontpage_header_content_page_title_font_size
 *					ubik_frontpage_header_content_page_title_letter_spacing
 *					ubik_frontpage_header_content_page_title_text_transform
 *        [if : nav in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_nav_options_heading
 *	  		ubik_frontpage_header_content_nav_device_visibility
 *	  		ubik_frontpage_header_content_nav_horizontal_alignment
 *				ubik_frontpage_header_content_nav_spacing
 *				ubik_frontpage_header_content_nav_items_spacing
 * 				ubik_frontpage_header_content_nav_color_heading
 * 					[if : ubik_frontpage_header_content_nav_color_heading = true]
 * 					ubik_frontpage_header_content_nav_links_color
 * 					ubik_frontpage_header_content_nav_links_hover_color
 *				ubik_frontpage_header_content_nav_typography_heading
 *					[if : ubik_frontpage_header_content_nav_typography_heading = true]
 *					ubik_frontpage_header_content_nav_font_size
 *					ubik_frontpage_header_content_nav_letter_spacing
 *					ubik_frontpage_header_content_nav_text_transform
 *        [if : search-form in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_search_form_options_heading
 *	  		ubik_frontpage_header_content_search_form_device_visibility
 *	  		ubik_frontpage_header_content_search_form_horizontal_alignment
 *				ubik_frontpage_header_content_search_form_spacing
 *				ubik_frontpage_header_content_search_form_width
 *				ubik_frontpage_header_content_search_form_color_heading
 *				[if : ubik_frontpage_header_content_search_form_color_heading = true]
 *				ubik_frontpage_header_content_search_form_border_color
 *				ubik_frontpage_header_content_search_form_border_focus_color
 *				ubik_frontpage_header_content_search_form_background_color
 *				ubik_frontpage_header_content_search_form_text_color
 * 				ubik_frontpage_header_content_search_form_button_bg_color
 * 				ubik_frontpage_header_content_search_form_icon_color
 * 				ubik_frontpage_header_content_search_form_icon_hover_focus_color	
 *        [if : site-logo in ubik_frontpage_header_content_elements]
 *        ubik_frontpage_header_content_site_logo_options_heading
 *        ubik_frontpage_header_content_site_logo_device_visibility
 *        ubik_frontpage_header_content_site_logo_horizontal_alignment
 * 			  ubik_frontpage_header_content_site_logo_max_height
 * 				ubik_frontpage_header_content_site_logo_spacing
 * 				[if : text in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_text_options_heading
 * 				ubik_frontpage_header_content_text_device_visibility
 *	  		ubik_frontpage_header_content_text_horizontal_alignment
 *				ubik_frontpage_header_content_text_content
 *	  		ubik_frontpage_header_content_text_spacing
 * 				ubik_frontpage_header_content_text_color_heading
 * 					[if : ubik_frontpage_header_content_text_color_heading = true]
 * 					ubik_frontpage_header_content_text_color
 * 					ubik_frontpage_header_content_text_links_color
 * 					ubik_frontpage_header_content_text_links_hover_color
 *				ubik_frontpage_header_content_text_typography_heading
 *					[if : ubik_frontpage_header_content_text_typography_heading = true]
 *					ubik_frontpage_header_content_text_font_size
 *					ubik_frontpage_header_content_text_letter_spacing
 *					ubik_frontpage_header_content_text_text_transform
 *
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ Front page header fields ]
/*-------------------------------------------------------------------------------*/

Kirki::add_section( 'ubik_frontpage_header_section', array(
  'title'       => 'Header',
  'panel'       => 'ubik_frontpage_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'switch',
	'settings'    => 'ubik_frontpage_specific_header',
  'description'       => esc_html__( 'Activate a specific header for the front page', 'ubik' ),
	'section'     => 'ubik_frontpage_header_section',
	'default'     => '0',
  'priority'    => 10,
  'choices'     => array(
		'on'  => esc_html__( 'Enable', 'ubik' ),
		'off' => esc_html__( 'Disable', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_format',
	'label'       => esc_html__( 'Header Format', 'ubik' ),
	'section'     => 'ubik_frontpage_header_section',
	'default'     => 'image',
  'priority'    => 10,
  'choices' 		=> array(
    'simple' 		    => esc_html__( 'Simple Bar', 'ubik' ),
		'image' 		    => esc_html__( 'Image', 'ubik' ),
		'no-header' 		=> esc_html__( 'No Header', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_section( 'ubik_frontpage_image_header_general_options_section', array(
  'title'       => 'Image Header General Options',
  'section'     => 'ubik_frontpage_header_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_image_header_height',
	'label'           => esc_html__( 'Min Height (vh)', 'ubik' ),
	'section'         => 'ubik_frontpage_image_header_general_options_section',
	'default'         => 30,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 10,
	'output' => array(
		array(
			'element'  				=> '.frontpage-image-header',
			'property' 				=> 'min-height',
			'units'						=> 'vh',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

function ubik_frontpage_image_header_bg_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_bg_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_bg_heading', array(
    'label'	   		        => esc_html__( 'Background', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 11,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_bg_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_image_header_bg_color',
	'description'       => esc_html__( 'Background Color', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => '#fefefe',
  'priority' 				  => 11,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#header.frontpage-image-header',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
  ),
) );

function ubik_core_header_image_controls( $wp_customize ) {

  $frontpage_header_video = $wp_customize->get_control( 'header_video' );
  $frontpage_ext_header_video = $wp_customize->get_control( 'external_header_video' );
	$frontpage_header_image = $wp_customize->get_control( 'header_image' );
	
	$frontpage_header_video->section = 'ubik_frontpage_image_header_general_options_section';
	$frontpage_ext_header_video->section = 'ubik_frontpage_image_header_general_options_section';
	$frontpage_header_image->section = 'ubik_frontpage_image_header_general_options_section';

	$frontpage_header_video->active_callback = 'ubik_frontpage_header_format_is_image';
  $frontpage_ext_header_video->active_callback = 'ubik_frontpage_header_format_is_image';
	$frontpage_header_image->active_callback = 'ubik_frontpage_header_format_is_image';
	
	$frontpage_header_video->priority = 12;
	$frontpage_ext_header_video->priority = 12;
	$frontpage_header_image->priority = 12;

}
add_action( 'customize_register', 'ubik_core_header_image_controls' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_bg_img_position',
	'label'       => esc_html__( 'Background Image Position', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'center center',
  'priority'    => 12,
  'choices' 		=> array(
    'top left' 				=> esc_html__( 'Top Left', 'ubik' ),
    'top center' 			=> esc_html__( 'Top Center', 'ubik' ),
    'top right'  			=> esc_html__( 'Top Right', 'ubik' ),
    'center left' 		=> esc_html__( 'Center Left', 'ubik' ),
    'center center' 	=> esc_html__( 'Center Center', 'ubik' ),
    'center right' 		=> esc_html__( 'Center Right', 'ubik' ),
    'bottom left' 		=> esc_html__( 'Bottom Left', 'ubik' ),
    'bottom center' 	=> esc_html__( 'Bottom Center', 'ubik' ),
    'bottom right' 		=> esc_html__( 'Bottom Right', 'ubik' ),
  ),
	'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_bg_img_repeat',
	'label'       => esc_html__( 'Background Image Repeat', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'repeat',
  'priority'    => 12,
  'choices' 		=> array(
    'no-repeat' => esc_html__( 'No-repeat', 'ubik' ),
    'repeat' 		=> esc_html__( 'Repeat', 'ubik' ),
    'repeat-x' 	=> esc_html__( 'Repeat-x', 'ubik' ),
    'repeat-y' 	=> esc_html__( 'Repeat-y', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_image_header_bg_img_attachment',
	'label'       => esc_html__( 'Background Image Attachment', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'scroll',
  'priority'    => 12,
  'choices' 		=> array(
    'scroll' 		=> esc_html__( 'Scroll', 'ubik' ),
    'fixed' 		=> esc_html__( 'Fixed', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_image_header_bg_img_size',
	'label'       => esc_html__( 'Background Image Size', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'auto',
  'priority'    => 12,
  'choices' 		=> array(
    'auto' 			=> esc_html__( 'Auto', 'ubik' ),
    'cover' 		=> esc_html__( 'Cover', 'ubik' ),
    'contain' 	=> esc_html__( 'Contain', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

function ubik_frontpage_image_header_border_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_border_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_border_heading', array(
    'label'	   		        => esc_html__( 'Bottom Border', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_border_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'select',
	'settings'          => 'ubik_frontpage_image_header_border_style',
	'description'       => esc_html__( 'Border style', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => 'solid',
  'priority' 				  => 13,
  'choices'     			=> array(
		'none' 		=> esc_html__( 'None', 'ubik' ),
		'solid' 	=> esc_html__( 'Solid', 'ubik' ),
	),
	'output' 						=> array(
		array(
			'element'  => '.frontpage-image-header',
			'property' => 'border-bottom-style',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> 'ubik_frontpage_header_format_is_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimension',
	'settings'          => 'ubik_frontpage_image_header_border_width',
	'description'       => esc_html__( 'Border width', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
	'priority' 				  => 13,
	'default'     			=> '1px',
	'output' 						=> array(
		array(
			'element'  			=> '.frontpage-image-header',
			'property' 			=> 'border-bottom-width',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'ubik_frontpage_image_header_border_style',
      'operator'      => '==',
      'value'         => 'solid',
    ),
  ),
) );

function ubik_frontpage_image_header_colors_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_colors_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_colors_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 14,
		'active_callback'     => 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_colors_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_image_header_border_color',
	'description'       => esc_html__( 'Borders Color', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 14,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#header.frontpage-image-header',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
    array(
      'setting'       => 'ubik_frontpage_image_header_colors_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_image_header_overlay_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_overlay_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_overlay_heading', array(
    'label'	   		        => esc_html__( 'Overlay', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_overlay_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_overlay_style',
  'label'	   		=> esc_html__( 'Overlay Type', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default' 		=> 'none',
	'priority'    => 15,
	'choices'     => array(
		'none' 					=> esc_html__( 'None', 'ubik' ),
    'color' 				=> esc_html__( 'Color', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_image_header_overlay_color',
	'label'       			=> esc_html__( 'Overlay Color', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => 'rgba(0,0,0,0.5)',
  'priority' 				  => 15,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.frontpage-image-header__overlay',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'ubik_frontpage_image_header_overlay_style',
      'operator'      => '==',
      'value'         => 'color',
    ),
  ),
) );


Kirki::add_section( 'ubik_frontpage_menubar_section', array(
  'title'       => 'Menu Bar',
  'section'     => 'ubik_frontpage_header_section',
  'priority'    => 160,
));


Kirki::add_section( 'ubik_frontpage_menubar_general_section', array(
  'title'       => 'General',
  'section'     => 'ubik_frontpage_menubar_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_image_header_menubar_deactivate',
	'label'       => esc_html__( 'Deactivate Menu Bar', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_general_section',
	'default'     => '0',
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'simple',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_general_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 10,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_menubar_position',
  'label'	   		=> esc_html__( 'Bar Position', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_general_section',
	'default'     => 'top',
	'priority'    => 10,
	'choices'     => array(
		'top' 	=> esc_html__( 'Top', 'ubik' ),
    'bottom'=> esc_html__( 'Bottom', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'simple',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_menubar_full_width',
	'label'       => esc_html__( 'Full Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_general_section',
	'default'     => '0',
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_menubar_sticky',
	'label'       => esc_html__( 'Enable Sticky Bar', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_general_section',
	'default'     => '0',
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_min_height',
	'label'           => esc_html__( 'Min Height (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_general_section',
	'default'         => 50,
	'priority'    		=> 10,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
  ),
  'transport'       => 'refresh',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

function ubik_frontpage_menubar_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_general_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_bg_color',
	'description'	   		=> esc_html__( 'Background Color', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_general_section',
  'default'           => '#fefefe',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' => true,
	),
	'transport' => 'postMessage',
	'active_callback' => 'ubik_frontpage_menubar_heading_is_not_no_header_and_colors_on',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_borders_color',
	'description'	   		=> esc_html__( 'Border Top Color', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_general_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 16,
  'choices'     => array(
		'alpha' => true,
	),
	'transport' => 'postMessage',
	'active_callback' => 'ubik_frontpage_menubar_heading_is_not_no_header_and_colors_on',
) );


Kirki::add_section( 'ubik_frontpage_menubar_elements_position_section', array(
  'title'       => 'Elements Position',
  'section'     => 'ubik_frontpage_menubar_section',
  'priority'    => 160,
));

function ubik_frontpage_menubar_left_area_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_left_area_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_left_area_heading', array(
    'label'	   		        => esc_html__( 'Left Area', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_position_section',
		'priority' 				    => 10,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_left_area_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_menubar_left_area_elements',
	'label'       => esc_html__( 'Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	    			=> esc_html__( 'Navigation', 'ubik' ),
		'text' 	    			=> esc_html__( 'Custom Text', 'ubik' ),
		'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_left_area_alignment',
	'label'       => esc_html__( 'Elements Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => 'horizontal',
	'priority'    => 10,
	'choices'     => array(
		'horizontal'	=> esc_html__( 'Horizontal', 'ubik' ),
		'vertical' 		=> esc_html__( 'Vertical', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_left_area_width',
	'label'       => esc_html__( 'Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => 'shrink',
	'priority'    => 10,
	'choices'     => array(
		'auto'		        => esc_html__( 'Auto', 'ubik' ),
		'shrink' 	        => esc_html__( 'Shrink', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

function ubik_frontpage_menubar_center_area_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_center_area_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_center_area_heading', array(
    'label'	   		        => esc_html__( 'Center Area', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_position_section',
		'priority' 				    => 11,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_center_area_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_menubar_center_area_elements',
	'label'       => esc_html__( 'Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	    			=> esc_html__( 'Navigation', 'ubik' ),
		'text' 	    			=> esc_html__( 'Custom Text', 'ubik' ),
		'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 11,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_center_area_alignment',
	'label'       => esc_html__( 'Elements Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => 'horizontal',
	'priority'    => 11,
	'choices'     => array(
		'horizontal'	=> esc_html__( 'Horizontal', 'ubik' ),
		'vertical' 		=> esc_html__( 'Vertical', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_center_area_width',
	'label'       => esc_html__( 'Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => 'shrink',
	'priority'    => 11,
	'choices'     => array(
		'auto'		        => esc_html__( 'Auto', 'ubik' ),
		'shrink' 	        => esc_html__( 'Shrink', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

function ubik_frontpage_menubar_right_area_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_right_area_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_right_area_heading', array(
    'label'	   		        => esc_html__( 'Right Area', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_position_section',
		'priority' 				    => 12,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_right_area_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_menubar_right_area_elements',
	'label'       => esc_html__( 'Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => array(
		'nav',
	),
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	    			=> esc_html__( 'Navigation', 'ubik' ),
		'text' 	    			=> esc_html__( 'Custom Text', 'ubik' ),
		'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 12,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_right_area_alignment',
	'label'       => esc_html__( 'Elements Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => 'horizontal',
	'priority'    => 12,
	'choices'     => array(
		'horizontal'	=> esc_html__( 'Horizontal', 'ubik' ),
		'vertical' 		=> esc_html__( 'Vertical', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_right_area_width',
	'label'       => esc_html__( 'Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_position_section',
	'default'     => 'auto',
	'priority'    => 12,
	'choices'     => array(
		'auto'		        => esc_html__( 'Auto', 'ubik' ),
		'shrink' 	        => esc_html__( 'Shrink', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
  )
) );

Kirki::add_section( 'ubik_frontpage_menubar_elements_customization_section', array(
  'title'       => 'Elements Customization',
  'section'     => 'ubik_frontpage_menubar_section',
  'priority'    => 160,
));

function ubik_frontpage_menubar_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_logo_options_heading', array(
		'label'    				=> esc_html__( 'Logo Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_logo_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_customization_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 11,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_logo_max_height',
	'label'           => esc_html__( 'Logo Max Height (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => 50,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '200',
    'step'  => '1',
	),
	'priority'    		=> 12,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar .custom-logo',
			'property' 				=> 'max-height',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_menubar_logo_hover_effect',
	'label'       		=> esc_html__( 'Hover Effect', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_elements_customization_section',
	'default'     		=> '1',
  'priority'    		=> 12,
  'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_logo_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_elements_customization_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-logo',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

function ubik_frontpage_menubar_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				=> 13,
		'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'select',
	'settings'          => 'ubik_frontpage_menubar_text_device_visibility',
	'label'	   		      => esc_html__( 'Device Visibility', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
	'default'           => 'show-desktop-tablet',
	'priority'          => 13,
	'choices'           => array(
			'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
			'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
			'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
		),
	'active_callback'   => 'ubik_frontpage_header_format_is_not_no_header',
	) );

Kirki::add_field( 'ubik_config', array(
'type'              => 'editor',
'settings'          => 'ubik_frontpage_menubar_text_content',
'label'             => esc_html__( 'Content', 'ubik' ),
'section'           => 'ubik_frontpage_menubar_elements_customization_section',
'priority'          => 13,
'transport'         => 'refresh',
'active_callback'   => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_text_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_elements_customization_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 13,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-text',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

function ubik_frontpage_menubar_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_text_color',
	'description'				=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#929292',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-text',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_text_links_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#333333',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_text_links_hover_color',
	'description'				=> esc_html__( 'Links: hover', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#1779ba',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-text a:hover, .frontpage-menu-bar-text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

function ubik_frontpage_menubar_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_text_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_text_typography_font_size',
	'description'     => esc_html__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-text, .frontpage-menu-bar-text p',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
	'transport'       => 'auto',
	'active_callback' => array(
  	array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_text_typography_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-text, .frontpage-menu-bar-text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_menubar_text_typography_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-text, .frontpage-menu-bar-text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

function ubik_frontpage_menubar_search_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_search_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_search_options_heading', array(
		'label'    				=> esc_html__( 'Search Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				=> 16,
		'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_search_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_search_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_customization_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 16,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_search_style',
  'label'	   		=> esc_html__( 'Search Style', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_customization_section',
	'default'     => 'overlay',
	'priority'    => 16,
	'choices'     => array(
		'form' 		      => esc_html__( 'Form', 'ubik' ),
    'overlay'	      => esc_html__( 'Icon - Overlay', 'ubik' ),
    'replace'	      => esc_html__( 'Icon - Replace', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_search_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_elements_customization_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 16,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-search',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

function ubik_frontpage_menubar_search_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_search_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_search_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_search_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_icon_color',
	'description'				=> esc_html__( 'Icon', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#333333',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-icon a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '!=',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_icon_color_hover',
	'description'				=> esc_html__( 'Icon: hover', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#1779ba',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-icon a:hover, .frontpage-menu-bar-search-icon a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '!=',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_border_color',
	'description'				=> esc_html__( 'Form Border', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_border_focus_color',
	'description'				=> esc_html__( 'Border: Focus', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_bg_color',
	'description'				=> esc_html__( 'Background', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#fefefe',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input, .frontpage-menu-bar-search-form .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_text_color',
	'description'				=> esc_html__( 'Text', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input, .frontpage-menu-bar-search-form .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_button_bg_color',
	'description'				=> esc_html__( 'Search Button Background test', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#fff0',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_icon_color',
	'description'				=> esc_html__( 'Search Icon', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#929292',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_icon_hover_focus_color',
	'description'				=> esc_html__( 'Search Icon: Hover-focus', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#1779ba',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form button:hover, .frontpage-menu-bar-search-form .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

function ubik_frontpage_menubar_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				=> 18,
		'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_nav_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_elements_customization_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 18,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_nav_menu_spacing',
	'label'       		=> esc_html__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_elements_customization_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 18,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-nav',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_format_is_not_no_header',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_nav_menu_items_spacing',
	'label'           => esc_html__( 'Menu Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav .dropdown.menu a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-menu-bar-nav .dropdown.menu a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_header_format_is_not_no_header',
) );

function ubik_frontpage_menubar_nav_menu_items_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_nav_menu_items_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_nav_menu_items_color_heading', array(
    'label'	   		        => esc_html__( 'Menu Items Color', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				    => 19,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_nav_menu_items_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_nav_menu_items_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#333333',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-nav a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-menu-bar-nav .dropdown.menu > li.is-dropdown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent'
		),
		array(
			'element'  			=> '.frontpage-menu-bar-nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent transparent transparent $'
		),
		array(
			'element'  			=> '.frontpage-menu-bar-nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent $ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_menu_items_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_nav_menu_items_color_hover',
	'description'				=> esc_html__( 'Links: hover', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_elements_customization_section',
  'default'           => '#1779ba',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-nav a:hover, .frontpage-menu-bar-nav a:focus, .frontpage-menu-bar-nav .menu .is-active > a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_menu_items_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_menubar_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_elements_customization_section',
		'priority' 				    => 20,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_not_no_header',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_nav_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_nav_typography_font_size',
	'description'     => esc_html__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_nav_typography_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_menubar_nav_typography_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_elements_customization_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );


Kirki::add_section( 'ubik_frontpage_header_content_section', array(
  'title'       => 'Header content',
  'section'     => 'ubik_frontpage_header_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_frontpage_header_content_elements',
	'label'           => __( 'Elements', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => array(
    'site-logo',
	),
	'choices'         => array(
		'site-logo' 	=> esc_html__( 'Site Logo', 'ubik' ),
		'tagline' 		=> esc_html__( 'Site Tagline', 'ubik' ),
    'page-title' 	=> esc_html__( 'Page Title', 'ubik' ),
    'nav' 		    => esc_html__( 'Navigation', 'ubik' ),
		'search-form' => esc_html__( 'Search Form', 'ubik' ),
		'text' 	      => esc_html__( 'Custom Text', 'ubik' ),
	),
  'priority'        => 10,
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_elements_direction',
  'label'	   		    => esc_html__( 'Elements Direction', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'column',
	'priority'        => 10,
	'choices'         => array(
		'column' 		=> esc_html__( 'Column', 'ubik' ),
    'row'				=> esc_html__( 'Row', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_elements_vertical_alignment',
  'label'	   		    => esc_html__( 'Elements Vertical Alignment', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'center',
	'priority'        => 10,
	'choices'         => array(
		'top' 			=> esc_html__( 'Top (Left)', 'ubik' ),
    'center'		=> esc_html__( 'Center', 'ubik' ),
    'bottom'		=> esc_html__( 'Bottom (Right)', 'ubik' ),
    'spaced'		=> esc_html__( 'Spaced', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

function ubik_frontpage_header_content_site_tagline_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_options_heading', array(
		'label'    				=> esc_html__( 'Site Tagline Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 12,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_site_tagline',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_site_tagline_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 12,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_tagline',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_site_tagline_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 12,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_tagline',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_site_tagline_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__tagline',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_site_tagline',
) );

function ubik_frontpage_header_content_site_tagline_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_site_tagline',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_site_tagline_color',
	'description'				=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  						=> '.frontpage-header-content__tagline .site-tagline',
			'property' 						=> 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_header_content_site_tagline_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_site_tagline',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_site_tagline_font_size',
	'label'           => esc_html__( 'Font size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 12,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__tagline .site-tagline',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_site_tagline_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '2',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__tagline .site-tagline',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_site_tagline_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'uppercase',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__tagline .site-tagline',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

function ubik_frontpage_header_content_page_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_options_heading', array(
		'label'    				=> esc_html__( 'Page Title Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 16,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_page_title',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_page_title_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 16,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_page_title',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_page_title_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 16,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_page_title',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_page_title_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 16,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__page-title',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_page_title',
) );

function ubik_frontpage_header_content_page_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_page_title',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_page_title_color',
	'description'				=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  						=> '.frontpage-header-content__page-title .site-page-title',
			'property' 						=> 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_header_content_page_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 18,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_page_title',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_page_title_font_size',
	'label'           => esc_html__( 'Font size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 48,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__page-title .site-page-title',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_page_title_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__page-title .site-page-title',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_page_title_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__page-title .site-page-title',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

function ubik_frontpage_header_content_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 20,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_nav_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 20,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_nav_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 20,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_nav_spacing',
	'label'       		=> esc_html__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 20,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__nav',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_nav',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_nav_items_spacing',
	'label'           => esc_html__( 'Menu Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav .dropdown.menu a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-header-content__nav .dropdown.menu a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
) );

function ubik_frontpage_header_content_nav_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_nav_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_nav_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 21,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_nav_links_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#333333',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__nav a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-header-content__nav .dropdown.menu > li.is-dropdown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent'
		),
		array(
			'element'  			=> '.frontpage-header-content__nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent transparent transparent $'
		),
		array(
			'element'  			=> '.frontpage-header-content__nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent $ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_nav_links_hover_color',
	'description'				=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__nav a:hover, .frontpage-header-content__nav a:focus, .frontpage-header-content__nav .menu .is-active > a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

function ubik_frontpage_header_content_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 22,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_nav_font_size',
	'label'           => esc_html__( 'Font size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 16,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 22,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
	'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_nav_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 22,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_nav_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 22,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

function ubik_frontpage_header_content_search_form_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_search_form_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_search_form_options_heading', array(
		'label'    				=> esc_html__( 'Search Form Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 23,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_search_form',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_search_form_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_search_form_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 23,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_search_form',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_search_form_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 23,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_search_form',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_search_form_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 23,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__search-form',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_search_form',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'slider',
	'settings'    		=> 'ubik_frontpage_header_content_search_form_width',
	'label'       		=> __( 'Form Width (px)', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> 300,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '1000',
    'step'  => '1',
	),
	'priority'    		=> 23,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  	=> '.frontpage-header-content__search-form form',
			'property' 	=> 'width',
			'units'			=> 'px',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_search_form',
) );

function ubik_frontpage_header_content_search_form_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_search_form_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_search_form_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 24,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_search_form',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_search_form_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_border_color',
	'description'				=> esc_html__( 'Form Border', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_border_focus_color',
	'description'				=> esc_html__( 'Form Border: Focus', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
		array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_background_color',
	'description'				=> esc_html__( 'Form Background', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input, .frontpage-header-content__search-form .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_text_color',
	'description'				=> esc_html__( 'Form Text', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input, .frontpage-header-content__search-form .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_button_bg_color',
	'description'				=> esc_html__( 'Search Button Background Color', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_icon_color',
	'description'				=> esc_html__( 'Search Icon Color', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_icon_hover_focus_color',
	'description'				=> esc_html__( 'Search Icon Color: Hover', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form button:hover, .frontpage-header-content__search-form .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

function ubik_frontpage_header_content_site_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_logo_options_heading', array(
		'label'    				=> esc_html__( 'Site Logo Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 25,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_site_logo_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 25,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_site_logo_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 25,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_site_logo_max_height',
	'label'           => esc_html__( 'Logo Max Height (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 50,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
	),
	'priority'    		=> 26,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content .custom-logo',
			'property' 				=> 'max-height',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_site_logo_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 26,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__site-logo',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

function ubik_frontpage_header_content_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 27,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_text',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_text_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 27,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_text',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_text_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 27,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_text',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'editor',
	'settings'    			=> 'ubik_frontpage_header_content_text_content',
	'label'       			=> esc_html__( 'Content', 'ubik' ),
	'section'     			=> 'ubik_frontpage_header_content_section',
	'default'     			=> '',
	'priority'    			=> 27,
	'active_callback'  	=> 'ubik_frontpage_header_content_elements_has_text',
));

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_text_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 27,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__text',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_text',
) );

function ubik_frontpage_header_content_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 28,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_text',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_text_color',
	'description'				=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 28,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' 						=> array(
		array(
			'element'  		=> '.frontpage-header-content__text',
			'property' 		=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_text_links_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#333333',
  'priority' 				  => 28,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_text_links_hover_color',
	'description'				=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 28,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__text a:hover, .frontpage-header-content__text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

function ubik_frontpage_header_content_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 29,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_text',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_text_font_size',
	'label'           => esc_html__( 'Font size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 16,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 29,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__text, .frontpage-header-content__text p',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
	'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_text_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 29,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__text, .frontpage-header-content__text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_text_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 29,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__text, .frontpage-header-content__text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );


/*-------------------------------------------------------------------------------*/
/* [ Active callbacks ]
/*-------------------------------------------------------------------------------*/

/**
 * [ Table of contents ]
 * 
 * ubik_specific_frontpage_header_is_activated()
 * ubik_frontpage_header_format_is_image()
 * ubik_frontpage_header_format_is_not_no_header()
 * ubik_frontpage_menubar_heading_is_not_no_header_and_colors_on()
 * ubik_frontpage_header_content_elements_has_site_tagline()
 * ubik_frontpage_header_content_elements_has_site_tagline_and_typo_on()
 * ubik_frontpage_header_content_elements_has_page_title()
 * ubik_frontpage_header_content_elements_has_page_title_and_typo_on()
 * ubik_frontpage_header_content_elements_has_nav()
 * ubik_frontpage_header_content_elements_has_nav_and_typo_on()
 * ubik_frontpage_header_content_elements_has_search_form()
 * ubik_frontpage_header_content_elements_has_site_logo()
 * ubik_frontpage_header_content_elements_has_text()
 * ubik_frontpage_header_content_elements_has_text_and_typo_on()
 * 
 */

function ubik_specific_frontpage_header_is_activated() {
	return ( '1' == get_theme_mod( 'ubik_frontpage_specific_header', '0' ) && 'no-header' != get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) ? true : false;
}

function ubik_frontpage_header_format_is_image() {
	return ( ubik_specific_frontpage_header_is_activated() && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) ? true : false;
}

function ubik_frontpage_header_format_is_not_no_header() {
	return ( ubik_specific_frontpage_header_is_activated() && 'no-header' != get_theme_mod( 'ubik_header_format', 'image' ) ) ? true : false;
}

function ubik_frontpage_menubar_heading_is_not_no_header_and_colors_on() {
	return ( ubik_specific_frontpage_header_is_activated() && 'no-header' != get_theme_mod( 'ubik_header_format', 'image' ) && '1' == get_theme_mod('ubik_frontpage_menubar_color_heading', '0') ) ? true : false;
}

function ubik_frontpage_header_content_elements_has_site_tagline() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'tagline', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_site_tagline_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'tagline', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_site_tagline_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_page_title() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'page-title', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_page_title_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'page-title', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_page_title_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_nav() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'nav', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_nav_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'nav', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_nav_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_search_form() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'search-form', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_site_logo() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'site-logo', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_text() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'text', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_text_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'text', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_text_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

