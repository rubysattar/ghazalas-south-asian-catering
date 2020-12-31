<?php
/**
 * Footer Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 * Section : ubik_footer_section
 * 
 *  ubik_footer_activate
 * 
 *    [if : ubik_footer_activate == 1]
 *    Sub-section : ubik_footer_general_section
 * 
 *      ubik_footer_height
 *      ubik_footer_direction
 *      ubik_footer_position
 * 			ubik_footer_full_width
 *      ubik_footer_color_heading
 *        [if : ubik_footer_color_heading == 1]
 *        ubik_footer_bg_color
 * 
 *    [if : ubik_footer_activate == 1]
 *    Sub-section : ubik_footer_elements_section
 * 
 *      ubik_footer_elements
 * 				[if : text in ubik_footer_elements]
 *      	ubik_footer_text_options_heading
 *      	ubik_footer_text_device_visibility
 *      	ubik_footer_text
 *      	ubik_footer_text_spacing
 * 				ubik_footer_text_color_heading
 * 					[if : ubik_footer_text_color_heading = true]
 * 					ubik_footer_text_color
 * 					ubik_footer_text_links_color
 * 					ubik_footer_text_links_hover_color
 * 				ubik_footer_text_typography_heading
 * 					[if : ubik_footer_text_typography_heading = true]
 * 					ubik_footer_text_typography_font_size
 * 					ubik_footer_text_typography_letter_spacing
 * 					ubik_footer_text_typography_text_transform
 * 				[if : logo in ubik_footer_elements]
 *      	ubik_footer_logo_options_heading
 * 				ubik_footer_logo_device_visibility
 *      	ubik_footer_logo_height
 * 				ubik_footer_logo_spacing
 * 				[if : nav in ubik_footer_elements]
 *      	ubik_footer_nav_options_heading
 * 				ubik_footer_nav_device_visibility
 * 				ubik_footer_nav_spacing
 * 				ubik_footer_nav_items_spacing
 * 				ubik_footer_nav_color_heading
 * 					[if : ubik_footer_nav_color_heading = true]
 * 					ubik_footer_nav_items_color
 * 					ubik_footer_nav_items_hover_color
 * 				ubik_footer_nav_typography_heading
 * 					[if : ubik_footer_nav_typography_heading = true]
 * 					ubik_footer_nav_typography_font_size
 * 					ubik_footer_nav_typography_letter_spacing
 * 					ubik_footer_nav_typography_text_transform
 * 
 * 
 * Active callbacks
 */

Kirki::add_section( 'ubik_footer_section', array(
  'title'           => 'Footer',
  'priority'        => 169,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'switch',
	'settings'    => 'ubik_footer_activate',
  'description' => esc_html__( 'Display the footer', 'ubik' ),
	'section'     => 'ubik_footer_section',
	'default'     => 1,
  'priority'    => 10,
  'choices'     => array(
		'on'  => esc_html__( 'Enable', 'ubik' ),
		'off' => esc_html__( 'Disable', 'ubik' ),
	),
) );

Kirki::add_section( 'ubik_footer_general_section', array(
  'title'           => 'Footer: General',
  'section'         => 'ubik_footer_section',
  'priority'        => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_height',
	'label'           => esc_html__( 'Footer Height (px)', 'ubik' ),
	'section'         => 'ubik_footer_general_section',
	'default'         => '40',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
	),
	'priority'    		=> 10,
	'output' => array(
		array(
			'element'  				=> '.site-footer',
			'property' 				=> 'height',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_footer_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_footer_direction',
  'label'	   		    => esc_html__( 'Direction', 'ubik' ),
	'section'         => 'ubik_footer_general_section',
	'default'         => 'row',
	'priority'        => 11,
	'choices'         => array(
    'row'	                => esc_html__( 'Row', 'ubik' ),
    'column'	            => esc_html__( 'Column', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.site-footer-inner',
			'property' 		=> 'flex-direction',
		),
	),
  'transport'       => 'auto',
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_footer_position',
  'label'	   		    => esc_html__( 'Positioning', 'ubik' ),
	'section'         => 'ubik_footer_general_section',
	'default'         => 'space-evenly',
	'priority'        => 11,
	'choices'         => array(
		'center'	            => esc_html__( 'Center', 'ubik' ),
    'start' 	            => esc_html__( 'Start', 'ubik' ),
    'end' 	              => esc_html__( 'End', 'ubik' ),
    'space-between' 	    => esc_html__( 'Space-between', 'ubik' ),
    'space-around' 	      => esc_html__( 'Space-around', 'ubik' ),
    'space-evenly' 	      => esc_html__( 'Space-evenly', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.site-footer-inner',
			'property' 		=> 'justify-content',
		),
	),
  'transport'       => 'auto',
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_footer_full_width',
	'label'       => esc_html__( 'Full Width', 'ubik' ),
	'section'     => 'ubik_footer_general_section',
	'default'     => 0,
  'priority'    => 11,
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
  ),
) );

function ubik_footer_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_footer_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_footer_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_footer_general_section',
		'priority' 				    => 12,
		'active_callback'			=> 'ubik_footer_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_footer_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_footer_general_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 12,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.site-footer',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 		=> array(
		array(
			'setting'       => 'ubik_footer_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_footer_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );


Kirki::add_section( 'ubik_footer_elements_section', array(
  'title'           => 'Footer: Content',
  'section'         => 'ubik_footer_section',
  'priority'        => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_footer_elements',
	'label'       => __( 'Elements', 'ubik' ),
	'section'     => 'ubik_footer_elements_section',
	'default'     => array(
		'text',
	),
	'choices'     => array(
		'logo' 			      => esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	          => esc_html__( 'Navigation', 'ubik' ),
    'text' 	          => esc_html__( 'Custom Text', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_footer_activate',
      'operator'      => '==',
      'value'         => '1',
    ),
  )
) );

function ubik_footer_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_footer_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_footer_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_footer_elements_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_text_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_footer_text_device_visibility',
	'label'       => esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_footer_elements_section',
	'default'     => 'all-devices',
	'priority'    => 11,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'editor',
	'settings'    			=> 'ubik_footer_text',
	'label'       			=> esc_html__( 'Content', 'ubik' ),
	'section'     			=> 'ubik_footer_elements_section',
	'default'     			=> '<span>Ubik Theme</span>',
  'priority'    			=> 11,
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
  ),
));

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_footer_text_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_footer_elements_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.footer-text',
      'property' => 'padding',
    ),
	),
	'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
  ),
) );

function ubik_footer_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_footer_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_footer_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_footer_elements_section',
		'priority' 				    => 12,
		'active_callback' 		=> 'ubik_text_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_footer_text_color',
	'description'				=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_footer_elements_section',
  'default'           => '#929292',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.footer-text',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
    array(
      'setting'       => 'ubik_footer_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_footer_text_links_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_footer_elements_section',
  'default'           => '#333333',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.footer-text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
    array(
      'setting'       => 'ubik_footer_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_footer_text_links_hover_color',
	'description'				=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_footer_elements_section',
  'default'           => '#1779ba',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.footer-text a:hover, .footer-text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
    array(
      'setting'       => 'ubik_footer_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

function ubik_footer_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_footer_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_footer_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_footer_elements_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_text_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_text_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_text_typography_font_size',
	'description'     => esc_html__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.footer-text, .footer-text p',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
    array(
      'setting'       => 'ubik_footer_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_text_typography_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.footer-text, .footer-text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
    array(
      'setting'       => 'ubik_footer_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_footer_text_typography_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.footer-text, .footer-text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'text',
		),
    array(
      'setting'       => 'ubik_footer_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

function ubik_footer_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_footer_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_footer_logo_options_heading', array(
		'label'    				=> esc_html__( 'Logo Options', 'ubik' ),
		'section'  				=> 'ubik_footer_elements_section',
		'priority' 				=> 14,
		'active_callback' => 'ubik_logo_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_footer_logo_device_visibility',
	'label'       => esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_footer_elements_section',
	'default'     => 'all-devices',
	'priority'    => 14,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'logo',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_logo_height',
	'label'           => esc_html__( 'Footer Logo Max Height (px)', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => '30',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '200',
    'step'  => '1',
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.footer-logo .custom-logo',
			'property' 				=> 'max-height',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_logo_in_ubik_footer_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_footer_logo_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_footer_elements_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 15,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.footer-logo',
      'property' => 'padding',
    ),
	),
	'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'logo',
		),
  ),
) );

function ubik_footer_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_footer_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_footer_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_footer_elements_section',
		'priority' 				=> 16,
		'active_callback' => 'ubik_nav_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_footer_nav_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_footer_elements_section',
	'default'     => 'all-devices',
	'priority'    => 16,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_footer_nav_spacing',
	'label'       		=> esc_html__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_footer_elements_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 16,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.footer-nav',
      'property' => 'padding',
    ),
	),
	'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_nav_items_spacing',
	'label'           => esc_html__( 'Menu Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 16,
	'output' => array(
		array(
			'element'  				=> '.footer-nav .menu a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.footer-nav .menu a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback'   => array(
    array(
			'setting'    => 'ubik_footer_activate',
			'operator'   => '==',
			'value'      => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
  ),
) );

function ubik_footer_nav_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_footer_nav_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_footer_nav_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_footer_elements_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_nav_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_nav_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_footer_nav_items_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_footer_elements_section',
  'default'           => '#fefefe',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.footer-nav .menu a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_footer_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
		array(
			'setting'       => 'ubik_footer_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_footer_nav_items_hover_color',
	'description'				=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_footer_elements_section',
  'default'           => '#1779ba',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.footer-nav .menu a:hover, .footer-nav .menu a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_footer_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
		array(
			'setting'       => 'ubik_footer_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_footer_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_footer_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_footer_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_footer_elements_section',
		'priority' 				    => 18,
		'active_callback' 		=> 'ubik_nav_in_ubik_footer_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_footer_nav_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_nav_typography_font_size',
	'description'     => esc_html__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.footer-nav',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_footer_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
		array(
			'setting'       => 'ubik_footer_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_footer_nav_typography_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.footer-nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_footer_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
		array(
			'setting'       => 'ubik_footer_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_footer_nav_typography_text_transform',
	'description'     => esc_html__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_footer_elements_section',
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
			'element'  				=> '.footer-nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_footer_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'    => 'ubik_footer_elements',
			'operator'   => 'in',
			'value'      => 'nav',
		),
		array(
			'setting'       => 'ubik_footer_nav_typography_heading',
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
 * ubik_footer_is_activated()
 * ubik_text_in_ubik_footer_elements()
 * ubik_logo_in_ubik_footer_elements()
 * ubik_nav_in_ubik_footer_elements()
 * 
 */


function ubik_footer_is_activated() {
	return ( '1' == get_theme_mod( 'ubik_footer_activate', '1' ) ) ? true : false;
}

function ubik_text_in_ubik_footer_elements() {
	$array = array( 'logo', 'nav','text' );
	$elements = get_theme_mod( 'ubik_footer_elements', $array );
	if ( ubik_footer_is_activated() && in_array( 'text', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_logo_in_ubik_footer_elements() {
	$array = array( 'logo', 'nav','text' );
	$elements = get_theme_mod( 'ubik_footer_elements', $array );
	if ( ubik_footer_is_activated() && in_array( 'logo', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_nav_in_ubik_footer_elements() {
	$array = array( 'logo', 'nav','text' );
	$elements = get_theme_mod( 'ubik_footer_elements', $array );
	if ( ubik_footer_is_activated() && in_array( 'nav', $elements ) ) {
		return true;
	} else {
		return false;
	}
}
