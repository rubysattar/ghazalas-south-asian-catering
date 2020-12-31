<?php
/**
 * Header Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 * Section : ubik_sidebar_section
 * 
 *  ubik_sidebar_activate
 * 
 *    [if : ubik_sidebar_activate == 1]
 *    Sub-section : ubik_sidebar_general_section
 * 
 *      ubik_sidebar_position
 *      ubik_sidebar_device_visibility
 * 			ubik_sidebar_width
 * 			ubik_sidebar_color_heading
 * 				[if : ubik_sidebar_color_heading == 1]
 * 				ubik_sidebar_border_color
 * 
 * 		[if : ubik_sidebar_activate == 1]
 * 		Sub-section : ubik_sidebar_widgets_section
 * 
 * 			ubik_sidebar_widgets_margin
 * 			ubik_sidebar_widgets_padding
 * 			ubik_sidebar_widgets_title_margin_bottom
 * 			ubik_sidebar_widgets_border_heading
 * 				[if : ubik_sidebar_widgets_border_heading == 1]
 * 				ubik_sidebar_widgets_border_width_radius
 * 				ubik_sidebar_widgets_list_items_border_width
 * 			ubik_sidebar_widgets_color_heading
 * 				[if : ubik_sidebar_widgets_color_heading == 1]
 * 				ubik_sidebar_widgets_bg_color
 * 				ubik_sidebar_widgets_border_color
 * 				ubik_sidebar_widgets_list_items_border_color
 * 			ubik_sidebar_widgets_typography_heading
 * 				[if : ubik_sidebar_widgets_typography_heading = true]
 * 				ubik_sidebar_widgets_title_font_size
 * 				ubik_sidebar_widgets_title_letter_spacing
 * 				ubik_sidebar_widgets_title_text_transform
 * 				ubik_sidebar_widgets_title_text_align
 * 				ubik_sidebar_widgets_items_font_size
 * 				ubik_sidebar_widgets_items_text_align
 * 				
 * 
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ Sidebar fields ]
/*-------------------------------------------------------------------------------*/

Kirki::add_section( 'ubik_sidebar_section', array(
  'title'       => 'Sidebar',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'switch',
	'settings'    => 'ubik_sidebar_activate',
  'description' => esc_html__( 'Activate the Sidebar', 'ubik' ),
	'section'     => 'ubik_sidebar_section',
	'default'     => '0',
  'priority'    => 10,
  'choices'     => array(
		'on'  => esc_html__( 'Enable', 'ubik' ),
		'off' => esc_html__( 'Disable', 'ubik' ),
	),
) );

Kirki::add_section( 'ubik_sidebar_general_section', array(
  'title'       => 'General Options',
  'section'     => 'ubik_sidebar_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_sidebar_position',
  'label'	   		    => esc_html__( 'Sidebar Position', 'ubik' ),
	'section'         => 'ubik_sidebar_general_section',
	'default'         => 'right',
	'priority'        => 10,
	'choices'         => array(
		'left' 			=> esc_html__( 'Left', 'ubik' ),
    'right'			=> esc_html__( 'Right', 'ubik' ),
  ),
  'active_callback' => 'ubik_sidebar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_sidebar_device_visibility',
  'label'	   		    => esc_html__( 'Device Visibility', 'ubik' ),
	'section'         => 'ubik_sidebar_general_section',
	'default'         => 'hide-tablet-mobile',
	'priority'        => 10,
	'choices'         => array(
		'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback' => 'ubik_sidebar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_sidebar_width',
	'label'           => esc_html__( 'Sidebar Width (%)', 'ubik' ),
	'section'         => 'ubik_sidebar_general_section',
	'priority' 				=> 10,
	'default'         => 25,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '100',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.has-sidebar .sidebar-area',
			'property' 		=> 'width',
			'units'				=> '%',
		),
	),
	'transport'       => 'auto',
	'active_callback' => 'ubik_sidebar_is_activated',
) );

function ubik_sidebar_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_sidebar_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_sidebar_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_sidebar_general_section',
		'priority' 				    => 11,
		'active_callback' 		=> 'ubik_sidebar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_sidebar_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_sidebar_border_color',
	'description'				=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_sidebar_general_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '#sidebar.sidebar-area',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );


Kirki::add_section( 'ubik_sidebar_widgets_section', array(
  'title'       => 'Widgets',
  'section'     => 'ubik_sidebar_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_sidebar_widgets_margin',
	'label'							=> 'Widgets Margin (Top/Bottom)',
	'section'           => 'ubik_sidebar_widgets_section',
	'priority' 				  => 10,
	'default'     			=> array(
		'top'  		=> '0px',
		'bottom' 	=> '40px',
	),
  'choices'     			=> array(
		'top' 		=> esc_html__( 'Top', 'ubik' ),
    'bottom' 	=> esc_html__( 'Bottom', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'top',
			'element'  			=> '#sidebar .widget',
			'property' 			=> 'margin-top',
		),
		array(
			'choice'      	=> 'bottom',
			'element'  			=> '#sidebar .widget',
			'property' 			=> 'margin-bottom',
		),
	),
	'transport' => 'refresh',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_sidebar_widgets_padding',
	'label'       		=> esc_html__( 'Widgets Padding', 'ubik' ),
	'section'     		=> 'ubik_sidebar_widgets_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 10,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '#sidebar .widget',
      'property' => 'padding',
    ),
	),
	'active_callback' 	=> array(
    array(
			'setting'   => 'ubik_sidebar_activate',
			'operator'  => '==',
			'value'     => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'dimension',
	'settings'    		=> 'ubik_sidebar_widgets_title_margin_bottom',
	'label'       		=> esc_html__( 'Title Margin Bottom', 'ubik' ),
	'section'     		=> 'ubik_sidebar_widgets_section',
	'default'     		=> '10px',
	'priority'    		=> 10,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '#sidebar .widget-title',
      'property' => 'margin-bottom',
    ),
	),
	'active_callback' 	=> array(
    array(
			'setting'   => 'ubik_sidebar_activate',
			'operator'  => '==',
			'value'     => '1',
		),
  ),
) );

function ubik_sidebar_widgets_border_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_sidebar_widgets_border_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_sidebar_widgets_border_heading', array(
    'label'	   		        => esc_html__( 'Borders', 'ubik' ),
    'section'  				    => 'ubik_sidebar_widgets_section',
		'priority' 				    => 11,
		'active_callback' 		=> 'ubik_sidebar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_sidebar_widgets_border_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_sidebar_widgets_border_width_radius',
	'description'				=> esc_html__( 'Widgets Border Width and Border Radius', 'ubik' ),
	'section'           => 'ubik_sidebar_widgets_section',
	'priority' 				  => 11,
	'default'     			=> array(
		'border-width'  				=> '1px',
		'border-radius' 				=> '3px',
	),
  'choices'     			=> array(
		'border-width' 					=> esc_html__( 'Border Width', 'ubik' ),
    'border-radius' 				=> esc_html__( 'Border Radius', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'border-width',
			'element'  			=> '#sidebar .widget',
			'property' 			=> 'border-width',
		),
		array(
			'choice'      	=> 'border-radius',
			'element'  			=> '#sidebar .widget',
			'property' 			=> 'border-radius',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_border_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_sidebar_widgets_list_items_border_width',
	'description'				=> esc_html__( 'List Items Border Width', 'ubik' ),
	'section'           => 'ubik_sidebar_widgets_section',
	'priority' 				  => 11,
	'default'     			=> array(
		'border-width'  				=> '1px',
	),
  'choices'     			=> array(
		'border-width' 					=> esc_html__( 'Border Width', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'border-width',
			'element'  			=> '#sidebar .widget ul li',
			'property' 			=> 'border-width',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_border_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_sidebar_widgets_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_sidebar_widgets_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_sidebar_widgets_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_sidebar_widgets_section',
		'priority' 				    => 12,
		'active_callback' 		=> 'ubik_sidebar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_sidebar_widgets_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_sidebar_widgets_bg_color',
	'description'				=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_sidebar_widgets_section',
  'default'           => '#fefefe',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '#sidebar .widget',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_sidebar_widgets_border_color',
	'description'				=> esc_html__( 'Widgets Border', 'ubik' ),
	'section'           => 'ubik_sidebar_widgets_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '#sidebar .widget',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_sidebar_widgets_list_items_border_color',
	'description'				=> esc_html__( 'List Items Border', 'ubik' ),
	'section'           => 'ubik_sidebar_widgets_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '#sidebar .widget ul li',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_sidebar_widgets_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_sidebar_widgets_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_sidebar_widgets_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_sidebar_widgets_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_sidebar_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_sidebar_widgets_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_sidebar_widgets_title_font_size',
	'description'     => esc_html__( 'Widgets Title: Font Size (px)', 'ubik' ),
	'section'         => 'ubik_sidebar_widgets_section',
	'default'         => '13',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.sidebar-area .widget-title',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_sidebar_widgets_title_letter_spacing',
	'description'     => esc_html__( 'Widgets Title: Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_sidebar_widgets_section',
	'default'         => '1',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.sidebar-area .widget-title',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_sidebar_widgets_title_text_transform',
	'description'     => esc_html__( 'Widgets Title: Text Transform', 'ubik' ),
	'section'         => 'ubik_sidebar_widgets_section',
	'default'         => 'uppercase',
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
			'element'  				=> '.sidebar-area .widget-title',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_sidebar_widgets_title_text_align',
	'description'     => esc_html__( 'Widgets Title: Text Align', 'ubik' ),
	'section'         => 'ubik_sidebar_widgets_section',
	'default'         => 'left',
	'choices'         => array(
		'left'  	 	 => esc_html__( 'Left', 'ubik' ),
		'center'		 => esc_html__( 'Center', 'ubik' ),
		'right'		   => esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.sidebar-area .widget-title',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_sidebar_widgets_items_font_size',
	'description'     => esc_html__( 'Widgets Items: Font Size (px)', 'ubik' ),
	'section'         => 'ubik_sidebar_widgets_section',
	'default'         => '14',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.sidebar-area',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_sidebar_widgets_items_text_align',
	'description'     => esc_html__( 'Widgets Items: Text Align', 'ubik' ),
	'section'         => 'ubik_sidebar_widgets_section',
	'default'         => 'left',
	'choices'         => array(
		'left'  	 	 => esc_html__( 'Left', 'ubik' ),
		'center'		 => esc_html__( 'Center', 'ubik' ),
		'right'		   => esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.sidebar-area .widget ul li',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_sidebar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_sidebar_widgets_typography_heading',
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
 * ubik_sidebar_is_activated()
 * 
 */

function ubik_sidebar_is_activated() {
	return ( '1' == get_theme_mod( 'ubik_sidebar_activate', '0' ) ) ? true : false;
}