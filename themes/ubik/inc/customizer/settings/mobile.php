<?php
/**
 * Top bar Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 * Panel : ubik_mobile_panel
 * 
 *  Section : ubik_mobile_bar_section
 * 
 *    ubik_mobile_bar_general_heading
 *    ubik_mobile_bar_height
 * 		ubik_mobile_bar_color_heading
 * 			[if : ubik_mobile_bar_color_heading = true]
 * 			ubik_mobile_bar_bg_color
 *    ubik_mobile_bar_logo_heading
 * 		ubik_mobile_bar_logo_display
 *    ubik_mobile_bar_logo_max_height
 * 		ubik_mobile_bar_logo_spacing
 *    ubik_mobile_bar_toggle_heading
 *    ubik_mobile_bar_toggle_position
 *    ubik_mobile_bar_toggle_icon
 * 		ubik_mobile_bar_toggle_icon_size
 * 		ubik_mobile_bar_toggle_icon_spacing
 * 		ubik_mobile_bar_toggle_color_heading
 * 			[if : ubik_mobile_bar_toggle_color_heading = true]
 * 			ubik_mobile_bar_toggle_icon_color
 *    ubik_mobile_bar_search_heading
 *    ubik_mobile_bar_search_display
 * 		ubik_mobile_bar_search_icon_size
 * 		ubik_mobile_bar_search_spacing
 * 		ubik_mobile_bar_search_color_heading
 * 			[if : ubik_mobile_bar_search_color_heading = true]
 * 			ubik_mobile_bar_search_icon_color
 * 
 *  Section : ubik_mobile_menu_section
 * 
 *    ubik_mobile_menu_general_heading
 *    ubik_mobile_menu_direction
 * 		[if : ubik_mobile_menu_direction == bottom]
 * 		ubik_mobile_menu_top_space
 * 		[if : ubik_mobile_menu_direction == left or right]
 * 		ubik_mobile_menu_width
 * 		ubik_mobile_menu_overlay
 * 		ubik_mobile_menu_push_content
 * 		ubik_mobile_menu_elements
 * 		ubik_mobile_menu_close_heading
 * 		ubik_mobile_menu_close_button_icon
 * 		ubik_mobile_menu_close_icon_size
 * 		ubik_mobile_menu_close_position
 * 		ubik_mobile_menu_close_spacing
 * 		ubik_mobile_menu_close_color_heading
 * 			[if : ubik_mobile_menu_close_color_heading = true]
 * 			ubik_mobile_menu_close_bg_color
 * 			ubik_mobile_menu_close_icon_color
 * 		ubik_mobile_menu_nav_heading
 * 		ubik_mobile_menu_nav_style
 * 		ubik_mobile_menu_nav_position
 * 		ubik_mobile_menu_nav_spacing
 * 		ubik_mobile_menu_nav_items_spacing
 * 		ubik_mobile_menu_nav_color_heading
 * 			[if : ubik_mobile_menu_nav_color_heading = true]
 * 			ubik_mobile_menu_nav_items_color
 * 			ubik_mobile_menu_nav_bg_color
 * 				[if : ubik_mobile_menu_nav_style = drilldown]
 * 				ubik_mobile_menu_nav_drilldown_submenu_bg_color
 * 		ubik_menubar_nav_typography_heading
 * 			[if : ubik_menubar_nav_typography_heading = true]
 * 			ubik_menubar_nav_typography_font_size
 * 			ubik_menubar_nav_typography_letter_spacing
 * 			ubik_menubar_nav_typography_text_transform
 * 		ubik_mobile_menu_search_heading
 * 		ubik_mobile_menu_search_spacing
 * 		ubik_mobile_menu_search_color_heading
 * 			[if : ubik_mobile_menu_search_color_heading = true]
 * 			ubik_mobile_menu_search_bg_color
 * 			ubik_mobile_menu_search_form_border_color
 * 			ubik_mobile_menu_search_form_border_focus_color
 * 			ubik_mobile_menu_search_form_bg_color
 * 			ubik_mobile_menu_search_form_text_color
 * 			ubik_mobile_menu_search_form_button_bg_color
 * 			ubik_mobile_menu_search_icon_color
 * 			ubik_mobile_menu_search_icon_focus_color
 * 
 * 
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ Mobile fields ]
/*-------------------------------------------------------------------------------*/

Kirki::add_panel( 'ubik_mobile_panel', array(
  'title'       => 'Mobile',
  'priority'    => 151,
));

/** Mobile bar section */

Kirki::add_section( 'ubik_mobile_bar_section', array(
  'title'       => 'Mobile Bar',
  'panel'       => 'ubik_mobile_panel',
  'priority'    => 160,
));

function ubik_mobile_bar_general_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_bar_general_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_bar_general_heading', array(
		'label'    				=> esc_html__( 'General', 'ubik' ),
		'section'  				=> 'ubik_mobile_bar_section',
		'priority' 				=> 10,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_general_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_bar_height',
	'label'           => esc_html__( 'Min Height (px)', 'ubik' ),
	'section'         => 'ubik_mobile_bar_section',
	'default'         => '40',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
  ),
  'priority'        => 10,
	'output' => array(
		array(
			'element'  		=> '.mobile-bar-inner',
			'property' 		=> 'min-height',
			'units'				=> 'px',
		),
	),
  'transport'       => 'refresh',
) );

function ubik_mobile_bar_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_bar_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_bar_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_mobile_bar_section',
		'priority' 				    => 11,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_bar_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_mobile_bar_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-bar',
			'property' => 'background-color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_bar_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

function ubik_mobile_bar_logo_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_bar_logo_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_bar_logo_heading', array(
		'label'    				=> esc_html__( 'Logo', 'ubik' ),
		'section'  				=> 'ubik_mobile_bar_section',
		'priority' 				=> 12,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_logo_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_mobile_bar_logo_display',
	'label'       => esc_html__( 'Display the Logo', 'ubik' ),
	'section'     => 'ubik_mobile_bar_section',
	'default'     => 1,
  'priority'    => 12,
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_bar_logo_max_height',
	'label'           => esc_html__( 'Logo Max Height (px)', 'ubik' ),
	'section'         => 'ubik_mobile_bar_section',
	'priority' 				=> 12,
	'default'         => 30,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '200',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.mobile-bar .custom-logo',
			'property' 		=> 'max-height',
			'units'				=> 'px',
		),
	),
  'transport'       => 'refresh',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_mobile_bar_logo_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_mobile_bar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.mobile-bar .site-logo-title',
      'property' => 'padding',
    ),
	),
) );

function ubik_mobile_bar_toggle_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_bar_toggle_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_bar_toggle_heading', array(
		'label'    				=> esc_html__( 'Menu toggle Icon', 'ubik' ),
		'section'  				=> 'ubik_mobile_bar_section',
		'priority' 				=> 13,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_toggle_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_mobile_bar_toggle_position',
  'label'	   		=> esc_html__( 'Menu Toggle Position', 'ubik' ),
	'section'     => 'ubik_mobile_bar_section',
	'default'     => 'right',
	'priority'    => 13,
	'choices'     => array(
		'left'   => esc_html__( 'Left', 'ubik' ),
    'right'  => esc_html__( 'Right', 'ubik' ),
	),
) );

Kirki::add_field('ubik_config', array(
	'type'            => 'text',
	'settings'        => 'ubik_mobile_bar_toggle_icon',
  'label'           => esc_html__( 'Menu Toggle Icon', 'ubik' ),
  'description'	    => sprintf( esc_html__( 'Enter the full icon class: %1$sfontawsome%2$s', 'ubik' ), '<a href="https://fontawesome.com" target="_blank">', '</a>' ),
  'section'         => 'ubik_mobile_bar_section',
  'default'         => 'fas fa-bars',
	'priority'        => 13,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_bar_toggle_icon_size',
	'label'           => esc_html__( 'Icon Size (px)', 'ubik' ),
	'section'         => 'ubik_mobile_bar_section',
	'priority' 				=> 13,
	'default'         => 15,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '50',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.mobile-bar-menu-toggle',
			'property' 		=> 'font-size',
			'units'				=> 'px',
		),
	),
  'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_mobile_bar_toggle_icon_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_mobile_bar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 13,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.mobile-bar-menu-toggle',
      'property' => 'padding',
    ),
	),
) );

function ubik_mobile_bar_toggle_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_bar_toggle_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_bar_toggle_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_mobile_bar_section',
		'priority' 				    => 14,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_toggle_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_bar_toggle_icon_color',
	'description'	   		=> esc_html__( 'Icon', 'ubik' ),
	'section'           => 'ubik_mobile_bar_section',
  'default'           => '#fefefe',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-bar .mobile-bar-menu-toggle a',
			'property' => 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_bar_toggle_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

function ubik_mobile_bar_search_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_bar_search_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_bar_search_heading', array(
		'label'    				=> esc_html__( 'Search', 'ubik' ),
		'section'  				=> 'ubik_mobile_bar_section',
		'priority' 				=> 15,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_search_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_mobile_bar_search_display',
	'label'       => esc_html__( 'Display Search Icon', 'ubik' ),
	'section'     => 'ubik_mobile_bar_section',
	'default'     => '1',
  'priority'    => 15,
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_bar_search_icon_size',
	'label'           => esc_html__( 'Search Icon Size (px)', 'ubik' ),
	'section'         => 'ubik_mobile_bar_section',
	'priority' 				=> 15,
	'default'         => 15,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '50',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.mobile-bar-search-icon',
			'property' 		=> 'font-size',
			'units'				=> 'px',
		),
	),
  'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_mobile_bar_search_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_mobile_bar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '10px',
	),
	'priority'    		=> 15,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.mobile-bar-search-icon',
      'property' => 'padding',
    ),
	),
) );

function ubik_mobile_bar_search_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_bar_search_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_bar_search_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_mobile_bar_section',
		'priority' 				    => 16,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_bar_search_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_bar_search_icon_color',
	'description'	   		=> esc_html__( 'Icon', 'ubik' ),
	'section'           => 'ubik_mobile_bar_section',
  'default'           => '#fefefe',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-bar .mobile-bar-search-icon a',
			'property' => 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_bar_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );


/** Mobile menu section */

Kirki::add_section( 'ubik_mobile_menu_section', array(
  'title'       => 'Mobile Menu Panel',
  'panel'       => 'ubik_mobile_panel',
  'priority'    => 160,
));

function ubik_mobile_menu_general_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_menu_general_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_menu_general_heading', array(
		'label'    				=> esc_html__( 'General', 'ubik' ),
		'section'  				=> 'ubik_mobile_menu_section',
		'priority' 				=> 11,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_general_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_mobile_menu_direction',
  'label'	   		=> esc_html__( 'Opening Direction', 'ubik' ),
	'section'     => 'ubik_mobile_menu_section',
	'default'     => 'left',
	'priority'    => 11,
	'choices'     => array(
		'left'   => esc_html__( 'Left', 'ubik' ),
    'right'  => esc_html__( 'Right', 'ubik' ),
    'bottom' => esc_html__( 'Bottom', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_menu_top_space',
	'label'           => esc_html__( 'Panel Top Space (px)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => '40',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '200',
    'step'  => '1',
	),
	'priority'    		=> 11,
	'output' => array(
		array(
			'element'  				=> '.mobile-menu.position-bottom',
			'property' 				=> 'height',
			'value_pattern'		=> 'calc(100vh - $px)',
		),
		// array(
		// 	'element'  				=> '.admin-bar .mobile-menu.position-bottom',
		// 	'property' 				=> 'height',
		// 	'value_pattern'		=> 'calc($vh - 46px)',
		// ),
	),
  'transport'       => 'refresh',
  'active_callback' => array(
    array(
      'setting'       => 'ubik_mobile_menu_direction',
      'operator'      => '==',
      'value'         => 'bottom',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_menu_width',
	'label'           => esc_html__( 'Panel Width (%)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => '90',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    => 11,
	'output' => array(
		array(
			'element'  		=> '.mobile-menu.position-left',
			'property' 		=> 'width',
			'units'				=> '%',
		),
		array(
			'element'  		=> '.mobile-menu.position-right',
			'property' 		=> 'width',
			'units'				=> '%',
		),
	),
  'transport'       => 'refresh',
  'active_callback' => array(
    array(
      'setting'       => 'ubik_mobile_menu_direction',
      'operator'      => '!=',
      'value'         => 'bottom',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_mobile_menu_overlay',
	'label'       => esc_html__( 'Overlay', 'ubik' ),
	'section'     => 'ubik_mobile_menu_section',
	'default'     => '1',
  'priority'    => 11,
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_mobile_menu_push_content',
	'label'       => esc_html__( 'Push the content', 'ubik' ),
	'section'     => 'ubik_mobile_menu_section',
	'default'     => '0',
  'priority'    => 11,
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_mobile_menu_elements',
	'label'       => __( 'Elements Positioning', 'ubik' ),
	'section'     => 'ubik_mobile_menu_section',
	'default'     => array(
		'close',
		'nav',
	),
	'choices'     => array(
		'close' 					=> esc_html__( 'Close Button', 'ubik' ),
    'nav' 	          => esc_html__( 'Navigation', 'ubik' ),
    'search' 	        => esc_html__( 'Search Form', 'ubik' ),
	),
  'priority'    => 11,
) );

function ubik_mobile_menu_close_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_menu_close_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_menu_close_heading', array(
		'label'    				=> esc_html__( 'Close Button', 'ubik' ),
		'section'  				=> 'ubik_mobile_menu_section',
		'priority' 				=> 12,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_close_heading' );

Kirki::add_field('ubik_config', array(
	'type'            => 'text',
	'settings'        => 'ubik_mobile_menu_close_button_icon',
  'label'           => esc_html__( 'Close Button Icon', 'ubik' ),
  'description'	    => sprintf( esc_html__( 'Enter the full icon class: %1$sfontawsome%2$s', 'ubik' ), '<a href="https://fontawesome.com" target="_blank">', '</a>' ),
  'section'         => 'ubik_mobile_menu_section',
  'default'         => 'fas fa-times',
	'priority'        => 12,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_menu_close_icon_size',
	'label'           => esc_html__( 'Close Icon Size (px)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'priority' 				=> 12,
	'default'         => 15,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '50',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.mobile-menu-close',
			'property' 		=> 'font-size',
			'units'				=> 'px',
		),
	),
  'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_mobile_menu_close_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => 'center',
	'priority'        => 12,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.mobile-menu-close',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_mobile_menu_close_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_mobile_menu_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.mobile-menu-close',
      'property' => 'padding',
    ),
	),
) );

function ubik_mobile_menu_close_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_menu_close_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_menu_close_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_mobile_menu_section',
		'priority' 				    => 13,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_close_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_close_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#fefefe',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-menu-close, .mobile-menu-close:focus',
			'property' => 'background-color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_menu_close_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_close_icon_color',
	'description'	   		=> esc_html__( 'Close Icon', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-menu-close',
			'property' => 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_menu_close_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

function ubik_mobile_menu_nav_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_menu_nav_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_menu_nav_heading', array(
		'label'    				=> esc_html__( 'Navigation', 'ubik' ),
		'section'  				=> 'ubik_mobile_menu_section',
		'priority' 				=> 14,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_nav_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_mobile_menu_nav_style',
  'label'	   		=> esc_html__( 'Navigation Style', 'ubik' ),
	'section'     => 'ubik_mobile_menu_section',
	'default'     => 'drilldown',
	'priority'    => 14,
	'choices'     => array(
		'accordion'   	=> esc_html__( 'Accordion', 'ubik' ),
    'drilldown'  		=> esc_html__( 'Drilldown', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_mobile_menu_nav_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => 'left',
	'priority'        => 14,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.mobile-menu-nav',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_mobile_menu_nav_spacing',
	'label'       		=> esc_html__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_mobile_menu_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 14,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.mobile-menu-nav',
      'property' => 'padding',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_menu_nav_items_spacing',
	'label'           => esc_html__( 'Menu Items Spacing (Top/Bottom)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.mobile-menu-nav .accordion-menu a, .mobile-menu-nav .drilldown a',
			'property' 				=> 'margin-top',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.mobile-menu-nav .accordion-menu a, .mobile-menu-nav .drilldown a',
			'property' 				=> 'margin-bottom',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
) );

function ubik_mobile_menu_nav_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_menu_nav_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_menu_nav_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_mobile_menu_section',
		'priority' 				    => 15,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_nav_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_nav_items_color',
	'description'				=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#333333',
  'priority' 				  => 15,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-nav .accordion-menu a, .mobile-menu-nav .drilldown a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.mobile-menu-nav .accordion-menu .is-accordion-submenu-parent:not(.has-submenu-toggle) > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent transparent'
		),
		array(
			'element'  			=> '.mobile-menu-nav .drilldown .is-drilldown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent transparent transparent $'
		),
		array(
			'element'  			=> '.mobile-menu-nav .drilldown .js-drilldown-back > a::before',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent $ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_mobile_menu_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	)
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_nav_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#fefefe',
  'priority' 				  => 15,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-menu-nav',
			'property' => 'background-color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_menu_nav_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_nav_drilldown_submenu_bg_color',
	'description'				=> esc_html__( 'Drilldown Sub Menu Background', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#fefefe',
  'priority' 				  => 15,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-nav .drilldown .is-drilldown-submenu',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'  => 'ubik_mobile_menu_nav_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
		array(
			'setting'       => 'ubik_mobile_menu_nav_style',
			'operator'      => '==',
			'value'         => 'drilldown',
		),
	)
) );

function ubik_mobile_menu_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_menu_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_menu_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_mobile_menu_section',
		'priority' 				    => 16,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_nav_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_menu_nav_typography_font_size',
	'description'     => esc_html__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 16,
	'output' => array(
		array(
			'element'  				=> '.mobile-menu-nav',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'  => 'ubik_mobile_menu_nav_typography_heading',
      'operator' => '==',
      'value'    => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_mobile_menu_nav_typography_letter_spacing',
	'description'     => esc_html__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 16,
	'output' => array(
		array(
			'element'  				=> '.mobile-menu-nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'  => 'ubik_mobile_menu_nav_typography_heading',
      'operator' => '==',
      'value'    => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_mobile_menu_nav_typography_text_transform',
	'description'     => esc_html__( 'Text Transform (px)', 'ubik' ),
	'section'         => 'ubik_mobile_menu_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 16,
	'output' => array(
		array(
			'element'  				=> '.mobile-menu-nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'  => 'ubik_mobile_menu_nav_typography_heading',
      'operator' => '==',
      'value'    => '1',
    ),
	),
) );

function ubik_mobile_menu_search_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_mobile_menu_search_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_mobile_menu_search_heading', array(
		'label'    				=> esc_html__( 'Search', 'ubik' ),
		'section'  				=> 'ubik_mobile_menu_section',
		'priority' 				=> 17,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_search_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_mobile_menu_search_spacing',
	'label'       		=> esc_html__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_mobile_menu_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 17,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.mobile-menu-search',
      'property' => 'padding',
    ),
	),
) );

function ubik_mobile_menu_search_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_mobile_menu_search_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_mobile_menu_search_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_mobile_menu_section',
		'priority' 				    => 18,
	) ) );

}
add_action( 'customize_register', 'ubik_mobile_menu_search_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#fefefe',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' 						=> array(
		array(
			'element'  => '.mobile-menu-search',
			'property' => 'background-color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_form_border_color',
	'description'				=> esc_html__( 'Form Border', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_form_border_focus_color',
	'description'				=> esc_html__( 'Form Border: Focus', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_form_bg_color',
	'description'				=> esc_html__( 'Form Background', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#fefefe',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form input, .mobile-menu-search .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_form_text_color',
	'description'				=> esc_html__( 'Form Text', 'ubik'),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form input, .mobile-menu-search .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_form_button_bg_color',
	'description'				=> esc_html__( 'Search Button Background', 'ubik'),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_icon_color',
	'description'				=> esc_html__( 'Search Icon', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#929292',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_mobile_menu_search_icon_focus_color',
	'description'				=> esc_html__( 'Search Icon: Focus', 'ubik' ),
	'section'           => 'ubik_mobile_menu_section',
  'default'           => '#1779ba',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.mobile-menu-search .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'  => 'ubik_mobile_menu_search_color_heading',
      'operator' => '==',
      'value'    => '1',
    ),
  ),
) );

