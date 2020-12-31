<?php
/**
 * Frontpage Top Bar Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 *  Section : ubik_frontpage_top_bar_section
 * 
 *    ubik_frontpage_top_bar_activate
 * 		ubik_frontpage_no_top_bar
 * 
 *      [if : ubik_frontpage_top_bar_activate == 1]
 *      Sub-section : ubik_frontpage_top_bar_general_section
 * 
 * 				ubik_frontpage_top_bar_device_visibility
 *        ubik_frontpage_top_bar_height
 *        ubik_frontpage_top_bar_sticky
 * 				ubik_frontpage_top_bar_full_width
 * 				ubik_frontpage_top_bar_color_heading
 * 				[if : ubik_frontpage_top_bar_color_heading = true]
 * 				ubik_frontpage_top_bar_bg_color
 * 
 *    	[if : ubik_frontpage_top_bar_activate == 1]
 *    	Sub-section : ubik_frontpage_top_bar_content_section
 * 
 *      	ubik_frontpage_top_bar_elements_positioning_heading
 *      	ubik_frontpage_top_bar_elements_subheading_tabs
 * 
 *       		[if : ubik_frontpage_top_bar_elements_subheading_tabs = left]
 *       		ubik_frontpage_top_bar_left_area_elements
 * 
 *       		[if : ubik_frontpage_top_bar_elements_subheading_tabs = right]
 *       		ubik_frontpage_top_bar_right_area_elements
 * 
 * 				ubik_frontpage_top_bar_logo_options_heading
 * 				ubik_frontpage_top_bar_logo_device_visibility
 * 				ubik_frontpage_top_bar_logo_max_height
 * 				ubik_frontpage_top_bar_logo_spacing
 * 				ubik_frontpage_top_bar_text_options_heading
 * 				ubik_frontpage_top_bar_text_device_visibility
 * 				ubik_frontpage_top_bar_text_content
 * 				ubik_frontpage_top_bar_text_spacing
 * 				ubik_frontpage_top_bar_text_color_heading
 * 					[if : ubik_frontpage_top_bar_text_color_heading = true]
 * 					ubik_frontpage_top_bar_text_color
 * 					ubik_frontpage_top_bar_text_links_color
 * 					ubik_frontpage_top_bar_text_links_hover_color
 *				ubik_frontpage_top_bar_text_typography_heading
 *					[if : ubik_frontpage_top_bar_text_typography_heading = true]
 *					ubik_frontpage_top_bar_text_font_size
 *					ubik_frontpage_top_bar_text_letter_spacing
 *					ubik_frontpage_top_bar_text_text_transform
 *      	ubik_frontpage_top_bar_search_options_heading
 * 				ubik_frontpage_top_bar_search_device_visibility
 *      	ubik_frontpage_top_bar_search_style
 * 				ubik_frontpage_top_bar_search_spacing
 * 				ubik_frontpage_top_bar_search_color_heading
 * 					[if : ubik_frontpage_top_bar_search_color_heading = true]
 * 					ubik_frontpage_top_bar_search_icon_color
 * 					ubik_frontpage_top_bar_search_icon_hover_color
 *      	ubik_frontpage_top_bar_nav_options_heading
 * 				ubik_frontpage_top_bar_nav_device_visibility
 * 				ubik_frontpage_top_bar_nav_spacing
 * 				ubik_frontpage_top_bar_nav_items_spacing
 * 				ubik_frontpage_top_bar_nav_color_heading
 * 					[if : ubik_frontpage_top_bar_nav_color_heading = true]
 * 					ubik_frontpage_top_bar_nav_items_color
 * 					ubik_frontpage_top_bar_nav_items_hover_color
 * 				ubik_frontpage_top_bar_nav_typography_heading
 * 					[if : ubik_frontpage_top_bar_nav_typography_heading = true]
 * 					ubik_frontpage_top_bar_nav_typography_font_size
 * 					ubik_frontpage_top_bar_nav_typography_letter_spacing
 * 					ubik_frontpage_top_bar_nav_typography_text_transform
 * 
 *    
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ Front page Top Bar fields ]
/*-------------------------------------------------------------------------------*/

Kirki::add_section( 'ubik_frontpage_top_bar_section', array(
  'title'       => 'Top Bar',
  'panel'       => 'ubik_frontpage_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'switch',
	'settings'    => 'ubik_frontpage_top_bar_activate',
  'description' => esc_html__( 'Activate a specific top bar for the front page', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_section',
	'default'     => '0',
  'priority'    => 10,
  'choices'     => array(
		'on'  => esc_html__( 'Enable', 'ubik' ),
		'off' => esc_html__( 'Disable', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_frontpage_no_top_bar',
	'label'           => esc_html__( 'No Top Bar (Front Page Only)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_section',
	'default'         => '0',
  'priority'        => 10,
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_section( 'ubik_frontpage_top_bar_general_section', array(
  'title'       => 'General Options',
  'section'     => 'ubik_frontpage_top_bar_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_top_bar_device_visibility',
  'label'	   		    => esc_html__( 'Device Visibility', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_general_section',
	'default'         => 'hide-mobile',
	'priority'        => 10,
	'choices'         => array(
		'hide-tablet-mobile' 		=> esc_html__( 'Hide On Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide On Mobile', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_height',
	'label'           => esc_html__( 'Height (em)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_general_section',
	'default'         => 2,
	'choices'         => array(
		'min'  => '0',
		'max'  => '5',
		'step' => '0.1',
  ),
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_frontpage_top_bar_sticky',
	'label'           => esc_html__( 'Enable Sticky Bar', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_general_section',
	'default'         => '0',
  'priority'        => 10,
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_top_bar_full_width',
	'label'       => esc_html__( 'Full Width', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_general_section',
	'default'     => '1',
  'priority'    => 10,
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

function ubik_frontpage_top_bar_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_top_bar_general_section',
		'priority' 				    => 11,
		'active_callback'     => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_bg_color',
	'description'	   		=> esc_html__( 'Background Color', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_general_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 11,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.frontpage-top-bar',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_top_bar_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_section( 'ubik_frontpage_top_bar_content_section', array(
  'title'       => 'Content',
  'section'     => 'ubik_frontpage_top_bar_section',
  'priority'    => 160,
));

function ubik_frontpage_top_bar_elements_positioning_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_top_bar_elements_positioning_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_elements_positioning_heading', array(
		'label'    				=> esc_html__( 'Select elements in each area', 'ubik' ),
		'section'  				=> 'ubik_frontpage_top_bar_content_section',
		'priority' 				=> 10,
		'active_callback' => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_elements_positioning_heading' );

function ubik_frontpage_top_bar_elements_subheading_tabs( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_elements_subheading_tabs', array(
		'default'     			=> 'left',
		'sanitize_callback' => 'ubik_sanitize_select',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Subheading_Tabs_Control( $wp_customize, 'ubik_frontpage_top_bar_elements_subheading_tabs', array(
		'section'  				=> 'ubik_frontpage_top_bar_content_section',
		'priority' 				=> 10,
		'choices' 				=> array(
			'left'   => esc_html__( 'Left area', 'ubik' ),
			'right'  => esc_html__( 'Right area', 'ubik' ),
		),
		'active_callback' => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_elements_subheading_tabs' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_top_bar_left_area_elements',
	'label'       => __( 'Left Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	          => esc_html__( 'Navigation', 'ubik' ),
    'text' 	          => esc_html__( 'Custom Text', 'ubik' ),
    'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_top_bar_activate',
      'operator'      => '==',
      'value'         => '1',
    ),
    array(
      'setting'       => 'ubik_frontpage_top_bar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'left',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_top_bar_right_area_elements',
	'label'       => __( 'Right Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	          => esc_html__( 'Navigation', 'ubik' ),
    'text' 	          => esc_html__( 'Custom Text', 'ubik' ),
    'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_top_bar_activate',
      'operator'      => '==',
      'value'         => '1',
    ),
    array(
      'setting'       => 'ubik_frontpage_top_bar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'right',
    ),
  )
) );

function ubik_frontpage_top_bar_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_top_bar_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_logo_options_heading', array(
		'label'    				=> esc_html__( 'Logo Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_top_bar_content_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_top_bar_logo_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 11,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show On Desktop Only', 'ubik' ),
    'show-desktop-tablet'	  => esc_html__( 'Show On Desktop & Tablet', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_logo_max_height',
	'label'           => esc_html__( 'Max Height (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => 30,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '200',
    'step'  => '1',
	),
	'priority'    		=> 11,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar .custom-logo',
			'property' 				=> 'max-height',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_top_bar_logo_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_top_bar_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-top-bar-logo',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

function ubik_frontpage_top_bar_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_top_bar_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_top_bar_content_section',
		'priority' 				=> 12,
		'active_callback' => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_top_bar_text_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 12,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show On Desktop Only', 'ubik' ),
    'show-desktop-tablet'	  => esc_html__( 'Show On Desktop & Tablet', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'editor',
	'settings'    			=> 'ubik_frontpage_top_bar_text_content',
	'label'       			=> esc_html__( 'Content', 'ubik' ),
	'section'     			=> 'ubik_frontpage_top_bar_content_section',
	'default'     			=> '<strong>Top bar custom text</strong>',
	'priority'    			=> 12,
	'active_callback'  	=> 'ubik_frontpage_top_bar_is_activated',
));

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_top_bar_text_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_top_bar_content_section',
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
      'element'  => '.frontpage-top-bar-text',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

function ubik_frontpage_top_bar_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_top_bar_content_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_text_color',
	'description'				=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#929292',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-text',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_text_links_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_text_links_hover_color',
	'description'				=> esc_html__( 'Links: hover', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-text a:hover, .frontpage-top-bar-text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_frontpage_top_bar_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_top_bar_content_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_text_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_text_font_size',
	'label'           => esc_html__( 'Font size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => 14,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar-text, .frontpage-top-bar-text p',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_text_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar-text, .frontpage-top-bar-text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_top_bar_text_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => 'none',
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
			'element'  				=> '.frontpage-top-bar-text, .frontpage-top-bar-text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_frontpage_top_bar_search_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_top_bar_search_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_search_options_heading', array(
		'label'    				=> esc_html__( 'Search Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_top_bar_content_section',
		'priority' 				=> 15,
		'active_callback' => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_search_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_top_bar_search_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 15,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show On Desktop Only', 'ubik' ),
    'show-desktop-tablet'	  => esc_html__( 'Show On Desktop & Tablet', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_top_bar_search_style',
  'label'	   		=> esc_html__( 'Search Style', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'default'     => 'overlay',
	'priority'    => 15,
	'choices'     => array(
    'overlay'	      => esc_html__( 'Icon - Overlay', 'ubik' ),
    'replace'	      => esc_html__( 'Icon - Replace', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_top_bar_search_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_top_bar_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 15,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-top-bar-search',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

function ubik_frontpage_top_bar_search_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_search_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_search_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_top_bar_content_section',
		'priority' 				    => 16,
		'active_callback' 		=> 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_search_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_search_icon_color',
	'description'				=> esc_html__( 'Icon', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-search a.frontpage-top-bar-search-toggle',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_top_bar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_search_icon_hover_color',
	'description'				=> esc_html__( 'Icon: Hover', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-search a.frontpage-top-bar-search-toggle:hover, .frontpage-top-bar-search a.frontpage-top-bar-search-toggle:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_top_bar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

function ubik_frontpage_top_bar_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_top_bar_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_top_bar_content_section',
		'priority' 				=> 17,
		'active_callback' => 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_top_bar_nav_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_top_bar_content_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 17,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show On Desktop Only', 'ubik' ),
    'show-desktop-tablet'	  => esc_html__( 'Show On Desktop & Tablet', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_top_bar_nav_spacing',
	'label'       		=> esc_html__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_top_bar_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 17,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-top-bar-nav',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_top_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_nav_items_spacing',
	'label'           => esc_html__( 'Menu Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar-nav .dropdown.menu a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-top-bar-nav .dropdown.menu a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_top_bar_is_activated',
) );

function ubik_frontpage_top_bar_nav_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_nav_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_nav_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_top_bar_content_section',
		'priority' 				    => 18,
		'active_callback' 		=> 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_nav_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_nav_items_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-nav .dropdown.menu a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-top-bar-nav .dropdown.menu > li.is-dropdown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_top_bar_nav_items_hover_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_frontpage_top_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-top-bar-nav .dropdown.menu a:hover, .frontpage-top-bar-nav .dropdown.menu a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_frontpage_top_bar_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_top_bar_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_top_bar_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_top_bar_content_section',
		'priority' 				    => 19,
		'active_callback' 		=> 'ubik_frontpage_top_bar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_top_bar_nav_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_nav_typography_font_size',
	'description'     => esc_html__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => '14',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 19,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar-nav',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_top_bar_nav_typography_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 19,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar-nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_top_bar_nav_typography_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_top_bar_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 19,
	'output' => array(
		array(
			'element'  				=> '.frontpage-top-bar-nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_top_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_top_bar_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );


/*-------------------------------------------------------------------------------*/
/* [ Active callbacks ]
/*-------------------------------------------------------------------------------*/

/**
 * [ Table of contents ]
 * 
 * [ Top bar ]
 * ubik_frontpage_top_bar_is_activated()
 * ubik_frontpage_top_bar_is_activated_and_text_typo_on()
 * 
 */

function ubik_frontpage_top_bar_is_activated() {
	return ( '1' == get_theme_mod( 'ubik_frontpage_top_bar_activate', '0' ) ) ? true : false;
}

function ubik_frontpage_top_bar_is_activated_and_text_typo_on() {
	return ( '1' == get_theme_mod( 'ubik_frontpage_top_bar_activate', '0' ) && '1' == get_theme_mod('ubik_frontpage_top_bar_text_typography_heading', '0') ) ? true : false;
}
