<?php 
global $food_base;
/* get local fonts. */
$local_fonts = is_admin() ? $food_base->getListLocalFontsName() : array() ;
/**
 * Home Options
 *
 * @author StormTheme
 */
$this->sections[] = array(
    'title' => esc_html__('Main Options', 'food-lounge'),
    'icon' => 'el-icon-dashboard',
    'fields' => array(
        array(
            'id' => 'intro_product',
            'type' => 'intro_product',
        )
    )
);
/**
 * Color Schemes
 *
 * @author StormTheme
 */
$this->sections[] = array(
    'title'     => __('Color Schemes', 'food-lounge'),
    'desc'      => __('Color Scheme layout', 'food-lounge'),
    'icon'      => 'el-icon-magic',

    'fields'    => array(
        array(
            'id'            => 'opt-color-scheme',
            'type'          => 'color_scheme',
            'title'         => 'Color Schemes',
            'subtitle'      => 'Save and load color schemes',
            'desc'          => '',
            'output'        => true,
            //'compiler'      => true,
            'simple'        => false,
            'options'       => array(
                'show_input'                => true,
                'show_initial'              => true,
                'show_alpha'                => true,
                'show_palette'              => true,
                'show_palette_only'         => false,
                'show_selection_palette'    => true,
                'max_palette_size'          => 10,
                'allow_empty'               => true,
                'clickout_fires_change'     => false,
                'choose_text'               => 'Choose',
                'cancel_text'               => 'Cancel',
                'show_buttons'              => true,
                'use_extended_classes'      => true,
                'palette'                   => null,  // show default
            ),
            'groups'        => array(
                'Header'    => 'Set header and nav colors here.',
                'Body'      => 'Set body and content colors here.',
                'Widget'    => '',
                '' => 'These colors are not asigned to any group.'
            ),

            'default'       => array(
                array(
                    'id'        => 'site-header',
                    'title'     => 'Site Header',
                    'color'     => '#686868', 
                    'alpha'     => 1,
                    'selector'  => '.site-header',
                    'mode'      => 'color',
                    'group'     => 'Header'
                ),                            
                array(
                    'id'        => 'food-header-top',
                    'title'     => 'Top Bar Background Color',
                    'color'     => '#000000', 
                    'alpha'     => 1,
                    'selector'  => '#food-header-top',
                    'mode'      => 'background-color',
                    'important' => false,
                    'group'     => 'Header'
                ),
				array(
                    'id'        => 'food-header-top-links',
                    'title'     => 'Top Bar Links Color',
                    'color'     => '#686868',
                    'selector'  => '#food-header-top a',
                    'mode'      => 'color',
                    'important' => false,
                    'group'     => 'Header'
                ),				
				array(
                    'id'        => 'food-header-icon',
                    'title'     => 'Top Bar Icon Color',
                    'color'     => '#c6a254',
                    'selector'  => '#food-header-top .fa',
                    'mode'      => 'color',
                    'important' => false,
                    'group'     => 'Header'
                ),
                array(
                    'id'        => 'home-link', // ID
                    'title'     => 'home link', // Display text
                    'color'     => '#fdfdfd',   // Default colour
                    'alpha'     => 1,           // Default alpha
                    'selector'  => '.home-link',      // CSS selector
                    'mode'      => 'color',     // CSS mode
                    'important' => true,         // CSS important
                    'group'     => 'Header'
                ),
                array(
                    'id'        => 'site-description',
                    'title'     => 'site description',
                    'color'     => '#ededed', 
                    'alpha'     => 1,
                    'selector'  => 'h2.site-description',
                    'mode'      => 'color',
                    'important' => true,
                    'group'     => 'Header'
                ),
                array(
                    'id'        => 'navbar',
                    'title'     => 'navbar',
                    'color'     => '#e06666', 
                    'alpha'     => 1,
                    'selector'  => '',
                    'mode'      => 'background-color',
                    'group'     => 'Header'

                ),   

                array(
                    'id'        => 'body-text',
                    'title'     => 'body text',
                    'color'     => '#000000', 
                    'alpha'     => 1,
                    'selector'  => 'body',
                    'mode'      => 'color',
                    'group'     => 'Body'
                ),                             
                array(
                    'id'        => 'site-content',
                    'title'     => 'site content',
                    'color'     => '#a4c2f4', 
                    'alpha'     => 1,
                    'selector'  => '.site-content',
                    'mode'      => 'background-color',
                    'group'     => 'Body'
                ),
                array(
                    'id'        => 'entry-content',
                    'title'     => 'entry content',
                    'color'     => '#93c47d', 
                    'alpha'     => 1,
                    'selector'  => '.entry-content',
                    'mode'      => 'background-color',
                    'group'     => 'Body'
                ), 
                array(
                    'id'        => 'entry-title',
                    'title'     => 'entry title',
                    'color'     => '#000000', 
                    'alpha'     => 1,
                    'selector'  => '.entry-title a',
                    'mode'      => 'color',
                    'group'     => 'Body'
                ),   
                array(
                    'id'        => 'entry-title-hover',
                    'title'     => 'entry title hover',
                    'color'     => '#ffffff', 
                    'alpha'     => 1,
                    'selector'  => '.entry-title a:hover',
                    'mode'      => 'color',
                    'group'     => 'Body'
                ),                            
                array(
                    'id'        => 'entry-meta',
                    'title'     => 'entry meta',
                    'color'     => '#0b5394', 
                    'alpha'     => 1,
                    'selector'  => '.entry-meta a',
                    'mode'      => 'color',
                    'group'     => 'Body'
                ),                            

                array(
                    'id'        => 'widget-container',
                    'title'     => 'widget container',
                    'color'     => '#f1c232', 
                    'alpha'     => .5,
                    'selector'  => '.widget',
                    'mode'      => 'background-color',
                    'group'     => 'Widget'
                ),
                array(
                    'id'        => 'widget-title',
                    'title'     => 'widget title',
                    'color'     => '#741b47', 
                    'alpha'     => 1,
                    'selector'  => '.widget-title',
                    'mode'      => 'color',
                    'important' => true,
                    'group'     => 'Widget'
                ),
                array(
                    'id'        => 'widget-text',
                    'title'     => 'widget text',
                    'color'     => '#fdfdfd', 
                    'alpha'     => 1,
                    'selector'  => '.widget a',
                    'mode'      => 'color',
                    'important' => true,
                    'group'     => 'Widget'
                ),

                array(
                    'id'        => 'sidebar-container',
                    'title'     => 'sidebar container',
                    'color'     => '#d5a6bd', 
                    'alpha'     => 1,
                    'selector'  => '.sidebar-container',
                    'mode'      => 'background-color',
                    'important' => true,
                    'group'     => ''
                ),
                array(
                    'id'        => 'site-footer',
                    'title'     => 'site footer',
                    'color'     => '#ededed', 
                    'alpha'     => 1,
                    'selector'  => '.site-footer',
                    'mode'      => 'background-color'
                ),
                array(
                    'id'        => 'site-footer-text',
                    'title'     => 'site footer text',
                    'color'     => '#000000', 
                    'alpha'     => 1,
                    'selector'  => '.site-footer a'
                ),  
            )
        ),
    ),
);
/**
 * CSS Layout
 *
 * @author StormTheme
 */
$this->sections[] =array(
    'title'     => __('CSS Layout', 'food-lounge'),
    'desc'      => __('Set CSS layout', 'food-lounge'),
    'icon'      => 'el-icon-css',	
    'fields'    => array(
		array(
			'id'        => 'opt-css-layout',
			'type'      => 'css_layout',
			'title'     => 'CSS Layout',
			// Any CSS selector set here will have all values indicated
			// in the CSS layout field applied to it.
			'output'    => array('.navbar'),
		 
			// Default unit values.
			'margin-unit'  => 'px',
			'border-unit'  => 'px',
			'padding-unit' => 'px',
			'radius-unit'  => 'px',
		 
			// Default values
			'default'   => array(
		 
				// Shorthand method to assign values to the margin level.
				// Unit values are not required, however, when unit values
				// are set here, they will override the default values
				// indicated above.
				'margin'        => '0 0 0 0',
		 
				// Alternative method to set layout values for the margin level.
				// Again, unit values are not required, and will be assigned the
				// default values indicated above.
				// 'margin-top' => 5,
				// 'margin-top' => 10,
				// 'margin-top' => 20,
				// 'margin-top' => 3,
		 
				// Because we indicated a single value, all border inputs will
				// be set to 2.
				'border'        => '0',
				'border-color'  => 'transparent',
				'border-style'  => 'solid',
				'border-radius' => '0'
			),
		 
			// CSS Layout options
			// For this example, we are disabling the padding field.
			'options'        => array(
				'margin_enabled'    => true,
				'border_enabled'    => true,
				'radius_enabled'    => true,
				'padding_enabled'   => true,
				'radius_enabled'    => true,
				'color_enabled'     => true,
				'style_enabled'     => true,
			)
		),
	),
);
/**
 * Header Options
 *
 * @author StormTheme
 */
$this->sections[] = array(
    'title' => esc_html__('Header', 'food-lounge'),
    'icon' => 'el-icon-credit-card',
    'id' => 'header_layout'
);

/* Header Top */

$this->sections[] = array(
    'title' => esc_html__('Header Layout & Content', 'food-lounge'),
	'subtitle' => esc_html__('Customize your header layout', 'food-lounge'),
	'id'	   => 'header_layout_head',	
	'desc'      => __('<p class="new_txt">Customize your header layout</p></div><div><h3 class="new_h3">Select your header layout</h3><p class="new_p">Controls the general layout of the header and enable to choose a predefined header layout which can be customized. The layout selected and customized will be auto adjust for mobile devices.</p>', 'food-lounge'),
    'subsection' => true,
    'fields' => array(
		array(
            'id' => 'header_layout',
            'title' => esc_html__('Header Layouts', 'food-lounge'),
            'default' => '1',
            'type' => 'image_select',
            'options' => array(
                '1' => array(
					
					'title'	=>	esc_html__('Header Layout # 1', 'food-lounge'),
					'img'	=>	get_template_directory_uri().'/inc/integration/options/images/header/header-1.png',
					'alt'	=>	'layout 1'
				
				),
				
				'2' => array(
					'title'	=>	esc_html__('Header Layout # 2', 'food-lounge'),
					'img'	=>	get_template_directory_uri().'/inc/integration/options/images/header/header-2.png',
					'alt'	=>	'layout 2'
					
				
				)
				
            )
        ),
		array(
            'subtitle' => esc_html__('Controls if the slider displays below or above the header.', 'food-lounge'),
            'id' => 'slider_position',
            'type' => 'button_set',
            'title' => esc_html__('Slider Position', 'food-lounge'),
            'options' => array(
				'1' => 'Above', 
				'2' => 'Below'),
    		'default' => '1'
        	),
			array(
			'id' => 'header_content',
            'title' => esc_html__('Header Content', 'food-lounge'),
			'subtitle' => esc_html__('Customize your header content', 'food-lounge'),
			'type' => 'section',
			'indent' => false
			),
			array(
			'id' => 'top_header_content1',
			'title' => esc_html__('Top Header Content 1', 'food-lounge'),
            'subtitle' => esc_html__('Controls the content that displays in the top left section', 'food-lounge'),
            'type' => 'select',
            'options' => array(
				'1' => 'Contact Info', 
				'2' => 'Social Links ',
				'3' => 'Navigation', 
				'4' => 'Leave Empty'), 
    		'default' => '1'
        	),/* Top Header Content 1 */
			array(
			'id' => 'top_header_content2',
			'title' => esc_html__('Top Header Content 2', 'food-lounge'),
            'subtitle' => esc_html__('Controls the content that displays in the top right section', 'food-lounge'),
            'type' => 'select',
            'options' => array(
				'1' => 'Contact Info', 
				'2' => 'Social Links ',
				'3' => 'Navigation', 
				'4' => 'Leave Empty'), 
    		'default' => '2'
        	),/* Top Header Content 2 */
		array(
			'id' => 'contact_info',
			'title' => esc_html__('Text for Contact Info', 'food-lounge'),
            'subtitle' => esc_html__('This content will display if you have selected "Contact Info" for Header Content 1 or 2 options and enable to customize text (e.g. Call us today!)', 'food-lounge'),
            'type' => 'text',
			'placeholder' => 'Call us today!'
        ),
		array(
            'subtitle' => esc_html__('This content will display if you have selected "Contact Info" for Header Content 1 or 2 options', 'food-lounge'),
            'id' => 'phone_numb',
            'type' => 'text',
			'placeholder' => '1.555.555.555',
            'title' => esc_html__('Phone Number for Contact Info', 'food-lounge')
        ),
		array(
            'subtitle' => esc_html__('This content will display if you have selected "Contact Info" for Header Content 1 or 2 options', 'food-lounge'),
            'id' => 'email',
            'type' => 'text',
            'title' => esc_html__('Email Address for Contact Info', 'food-lounge')
        ),
		array(
            'subtitle' => esc_html__('This content is managed under the Tab Social Media which controls the social networks that display in the Header and Footer: Appearnce -> Theme Options -> Social Media', 'food-lounge'),
            'id' => 'so_links',
			'type'=> 'section',
            'title' => esc_html__('Social Links', 'food-lounge')
        ),
		array(
            'subtitle' => esc_html__('This content displays if you have selected "Navigation" for Header Content 1 or 2 options and it is managed under the Tab Menu 
which controls the menu structure: Appearance -> Menu', 'food-lounge'),
            'id' => 'secondary_top_nav',
			'type'=> 'section',
            'title' => esc_html__('Secondary Top Navigation Menu Items', 'food-lounge')
        ),
		array(
            'subtitle' => esc_html__('This content is managed under the Tab Menu which controls the Menu Structure: Appearance -> Menu', 'food-lounge'),
            'id' => 'main_nav_text',
			'type'=> 'section',
            'title' => esc_html__('Main Navigation Menu Items', 'food-lounge')
        ),
		array(
            'subtitle' => esc_html__('This content is managed under the Tab Logo: Appearance -> Theme Options -> Logo', 'food-lounge'),
            'id' => 'logo_fav_text',
			'type'=> 'section',
            'title' => esc_html__('Logo & Favicon', 'food-lounge')
        ),
		array(
			'id'     => 'section-end',
			'type'   => 'section',
			'indent' => false,
		)
    )
);

/* Start Header Styling & Behavior */
$this->sections[] = array(
    'title' => esc_html__('Header Styling & Behavior', 'food-lounge'),
	'desc' => esc_html__('Customize your header style', 'food-lounge'),
    'subsection' => true,
    'fields' => array(
			array(
			'title' => esc_html__('Full Width or Boxed', 'food-lounge'),
            'subtitle' => esc_html__('Controls the header area to expand at 100% width according to the window size or to be boxed', 'food-lounge'),
            'id' => 'fullwidth_boxed',
            'type' => 'button_set',
            'options' => array(
				'1' => 'Full Width', 
				'2' => 'Boxed'), 
    		'default' => '1'
        	),
			array(
			'id'       => 'header_main_menu_height',
			'type'     => 'dimensions',
			'units'    => 'px',
			'title'    => __('Header Main Menu Height', 'food-lounge'),
			'subtitle' => __('Controls the header main menu height in pixels', 'food-lounge'),
			'width' => false,
            'default'  => array(
                'height'  => '60px'
            )
			),
			array(
			'id'       => 'header_main_menu_border',
			'title'    => __('Header Main Menu Border', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left setup of header main menu border in pixels. Enter values including any valid CSS unit ex:0px, 0px, 0px, 0px ', 'food-lounge'),
			'type'     => 'border',
			'default'  => array(
			'border-top'    => '0px', 
			'border-right'  => '0px', 
			'border-bottom' => '0px', 
			'border-left'   => '0px'
			)
			),
			array(
            'id' => 'header_main_menu_margin',
            'title' => esc_html__('Header Main Menu Margins', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left setup of header main menu margins in pixels. Enter values including any valid CSS unit, ex:0px,0px,0px,0px', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
			'selector'  => '.menu-main-menu-container #menu-main-menu.navbar-right',
            'output' => array('#storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'default' => array(
                'margin-top'     => '0',
                'margin-right'   => '0',
                'margin-bottom'  => '0',
                'margin-left'    => '0',
                'units'          => 'px',
            )
			),
			array(
            'id' => 'header_main_menu_padding',
            'title' => esc_html__('Header Main Menu Padding', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left setup of header main menu padding in pixels. Enter values including any valid CSS unit, ex:0px,0px,0px,0px', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'padding',
            'output' => array('#storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'default' => array(
                'padding-top'     => '0',
                'padding-right'   => '0',
                'padding-bottom'  => '0',
                'padding-left'    => '0',
                'units'          => 'px',
            )
       		),
			array(
			'id'       => 'header_secondary_top_menu_height',
			'type'     => 'dimensions',
			'units'    => 'px',
			'title'    => __('Header Secondary Top Menu Height', 'food-lounge'),
			'subtitle' => __('Controls the header secondary top menu height in pixels', 'food-lounge'),
			'width' => false,
            'default'  => array(
                'height'  => '0px'
            )
			),
			array(
			'id'       => 'header_secondary_top_menu_border',
			'title'    => __('Header Secondary Top Menu Border', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left setup of header secondary top menu border in pixels. Enter values including any valid CSS unit ex:0px, 0px, 0px, 0px ', 'food-lounge'),
			'type'     => 'border',
			'default'  => array(
			'border-top'    => '0px', 
			'border-right'  => '0px', 
			'border-bottom' => '0px', 
			'border-left'   => '0px'
			)
			),
			array(
            'id' => 'header_secondary_top_menu_margin',
            'title' => esc_html__('Header Secondary Top Menu Margins', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left setup of header secondary top menu margins in pixels. Enter values including any valid CSS unit, ex:0px,0px,0px,0px', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'output' => array('#storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'default' => array(
                'margin-top'     => '0',
                'margin-right'   => '0',
                'margin-bottom'  => '0',
                'margin-left'    => '0',
                'units'          => 'px',
            )
			),
			array(
            'id' => 'header_secondary_top_menu_padding',
            'title' => esc_html__('Header Secondary Top Menu Padding', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left setup of header secondary top menu padding in pixels. Enter values including any valid CSS unit, ex:0px,0px,0px,0px', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'padding',
            'output' => array('#food-header-top',
                '#food-header'),
            'default' => array(
                'padding-top'     => '10px',
                'padding-right'   => '0',
                'padding-bottom'  => '10px',
                'padding-left'    => '0',
                'units'          => 'px',
            )
       		),
			array(
			'title' => esc_html__('Header Background Type: Main Menu', 'food-lounge'),
            'subtitle' => esc_html__('Controls the background type for header main menu You can have solid color, semi-transparent color, full transparent header or you can use an image or pattern.Select any one of the given options. Both effects cannot be applied together', 'food-lounge'),
            'id' => 'header_bg_main_menu',
            'type' => 'button_set',
            'options' => array(
				'1' => 'Color', 
				'2' => 'Image'), 
    		'default' => '1'
        	),
			array(
            'id' => 'header_background_main_color',
            'title' => esc_html__('Header Background Color: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the background color for the header main menu', 'food-lounge'),
			'type' => 'background',
			'background-attachment'=> false,
			'background-image'=> false,
			'background-repeat'=> false,
			'background-size'=> false,
			'background-position'=> false,
			'preview'=>false,
			'output' => array('.site-header'),
			'default' => array(
				'background-color' => 'transparent'
			),
			'required' => array('header_bg_main_menu','equals','1')
        ),
		array(
        'id'       => 'header_bg_image_pattern',
        'type'     => 'background',
        'title'    => esc_html__( 'Header Background Image or Pattern: Main Menu', 'food-lounge' ),
        'subtitle' => esc_html__( 'Select an image or pattern for the header background. The image displays on top of the header background color and will only display', 'food-lounge' ),
		'background-color' => false,		
        'output' => array('.site-header'),
        'default'   => array(
            'background-repeat'=>'',
            'background-size'=>'cover',
            'background-attachment'=>'',
            'background-position'=>'center center'
        ),
		'required' => array('header_bg_main_menu','equals','2')
   		),
		array(
            'id' => 'header_background_secondary_top_color',
            'title' => esc_html__('Header Background Color: Secondary Top Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the background color for the header secondary top menu', 'food-lounge'),
			'output' => array('#food-header-top'),
            'type' => 'background',
			'background-attachment'=> false,
			'background-image'=> false,
			'background-repeat'=> false,
			'background-size'=> false,
			'background-position'=> false,
			'preview'=>false,
			'default' => array(
				'background-color' => 'transparent'
			)
        ),
		array(
            'id' => 'parallax header_bg',
            'title' => esc_html__('Parallax Background Image', 'food-lounge'),
			'subtitle' => esc_html__('Controls the parallax scrolling effect on the background image', 'food-lounge'),
			'type' => 'switch',
			'required' => array('header_bg_main_menu','equals','2')
        ),
		array(
            'id' => 'header_background_secondary_top_menu_color',
            'title' => esc_html__('Header Background Color: Secondary Top Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the background color for the header secondary top menu', 'food-lounge'),
			'type' => 'color',
            'default' => '#000000',
			'required' => array('header_bg_main_menu','equals','2')
        ),
		array(
            'id' => 'opacity_after_scroll',
            'title' => esc_html__('Opacity After Scroll', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON if you want header to change opacity after scroll'),
			'type' => 'switch',
			'default' => false
        ),
		array(
            'id'       => 'opacity_height',
            'type'     => 'dimensions',
            'units'    => array('px'),
            'title'    => esc_html__('Change Opacity After Scroll', 'food-lounge'),
			'subtitle'    => esc_html__('Controls the amount of scrolling in pixels necessary to chnage opacity. Insert 1 for window screen light', 'food-lounge'),
            'width' => false,
            'default'  => array(
                'height'  => '60px'
            ),
			'required' => array( 0 => 'opacity_after_scroll', 1 => '=', 2 => 1 )
        ),
		array(
            'id'       => 'opacity_value',
            'type'     => 'text',
            'title'    => esc_html__('Header Background Opacity After Scroll', 'food-lounge'),
			'subtitle'    => esc_html__('0=Transparent 1=Opaque', 'food-lounge'),
			'required' => array( 0 => 'opacity_after_scroll', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'header_border_main_menu_color',
            'title' => esc_html__('Header Border Color: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the border color of the header main menu', 'food-lounge'),
			'type' => 'color',
            'default' => '#000000'
        ),
		array(
            'id' => 'header_border_secondary_top_menu_color',
            'title' => esc_html__('Header Border Color: Secondary Top Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the border color of the header secondary top menu', 'food-lounge'),
			'type' => 'color',
            'default' => '#000000'
        ),
		array(
            'id' => 'font_top_header_content1',
            'type' => 'typography',
            'title' => esc_html__('Top Header Content 1 Styling', 'food-lounge'),
			'subtitle' => esc_html__('Controls font and color if you have selected Content 1 option that displays in the top left section', 'food-lounge'),
            'google' => true,
            'all_styles' => true,
            'units' => 'px',
            'default' => array(
                'color' => '#000000',
                'font-style' => 'normal',
                'font-weight' => '300',
                'font-family' => 'Open Sans',
                'google' => true,
                'font-size' => '',
                'line-height' => '',
				'letter-spacing' => '',
                'text-align' => ''
            )
        ),
		array(
            'id' => 'font_top_header_content2',
            'type' => 'typography',
            'title' => esc_html__('Top Header Content 2 Styling', 'food-lounge'),
			'subtitle' => esc_html__('Controls font and color if you have selected Content 2 option that displays in the top right section', 'food-lounge'),
            'google' => true,
            'all_styles' => true,
            'units' => 'px',
            'default' => array(
                'color' => '#000000',
                'font-style' => 'normal',
                'font-weight' => '300',
                'font-family' => 'Open Sans',
                'google' => true,
                'font-size' => '',
                'line-height' => '',
				'letter-spacing' => '',
                'text-align' => ''
            )
        ),
		array(
			'title' => esc_html__('Main Navigation Menu', 'food-lounge'),
            'subtitle' => esc_html__('Controls setting & styling of items that displays in the main navigation menu on all pages and it is managed under the Tab Menu. Appearance -> Theme Options -> Menu', 'food-lounge'),
            'id' => 'main_nav_text',
			'type'=> 'section',
            
        ),
		array(
			'title' => esc_html__('Secondary Top Navigation Menu', 'food-lounge'),
            'subtitle' => esc_html__('Controls font and colors of items on all pages if you have selected "Navigation" for header content 1 and 2 options and it is managed under the Tab Menu Appearance -> Theme Options -> Menu
', 'food-lounge'),
            'id' => 'secondary_nav_text',
			'type'=> 'section',
            
        ),
		array(
			'title' => esc_html__('Header Behavior', 'food-lounge'),
            'subtitle' => esc_html__('Customize your header behavior', 'food-lounge'),
            'id' => 'header_behave_text',
			'type'=> 'section',
        ),
		array(
			'id' => 'header_type_display',
			'title' => esc_html__('Header Bar Display', 'food-lounge'),
            'subtitle' => esc_html__('Select header bar display', 'food-lounge'),
            'type' => 'select',
            'options' => array(
				'1' => 'Fixed Header', 
				'2' => 'Sticky Header'), 
    		'default' => '1'
        	)
			
	
	)
	);

/* End Header Styling & Behavior */
/* Stick Menu */
$this->sections[] = array(
    'title' => esc_html__('Sticky Header', 'food-lounge'),
	'desc' => esc_html__('Controls header bar display on different devices', 'food-lounge'),
    'subsection' => true,
    'fields' => array(
		array(
            'id' => 'menu_main_header',
            'title' => esc_html__('Sticky Header: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to enable a sticky header of Main Menu', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
        ),
		array(
            'id' => 'sticky_header_top',
            'title' => esc_html__('Sticky Header: Top Header Content 1 and 2', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to enable a sticky header of Secondary Top Header Content 1 and 2', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
        ),

		array(
            'id' => 'sticky_header_animation',
            'title' => esc_html__('Sticky Header Animation: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to allow the sticky header to animate to a smaller height when activated', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
			'required' => array( 0 => 'menu_main_header', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_tablet',
            'title' => esc_html__('Sticky Header On Tablets: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to enable a sticky header of Main Menu when scrolling on tablets', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
			'required' => array( 0 => 'menu_main_header', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_mob',
            'title' => esc_html__('Sticky Header On Mobiles: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to enable a sticky header of Main Menu when scrolling on mobiles', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
			'required' => array( 0 => 'menu_main_header', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_background_color',
            'title' => esc_html__('Sticky Header Background Color: Main', 'food-lounge'),
			'subtitle' => esc_html__('Controls the background color for the sticky  header of Main Menu', 'food-lounge'),
			'type' => 'color',
            'default' => '#000000',
			'required' => array( 0 => 'menu_main_header', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_padding',
            'title' => esc_html__('Sticky Header Item Padding:Main Menu', 'food-lounge'),
			'subtitle' => __('Controls the space in pixels between each menu item in the sticky header of Main Menu', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'padding',
            'output' => array('#storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'default' => array(
                'padding-top'     => '0',
                'padding-right'   => '0',
                'padding-bottom'  => '0',
                'padding-left'    => '0',
                'units'          => 'px',
            ),
			'required' => array( 0 => 'menu_main_header', 1 => '=', 2 => 1 )
       		),
        array(
            'id' => 'stick_header_fontsize',
            'title' => esc_html__('Sticky Header Font Size: Main Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the font size of each menu item in the sticky header of Main Menu. Enter value including CSS unit  (px, em, rm) e.g. 10px', 'food-lounge'),
			'type' => 'typography',
            'google' => false,
            'font-backup' => false,
            'all_styles' => false,
            'color' => false,
            'font-style' => false,
            'font-weight' => false,
            'font-family' => false,
            'line-height' => false,
            'text-align' => false,
            'output'  => array('#storm-header.header-fixed #storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header.header-fixed #storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'units' => 'px',
            'default' => array(
                'font-size' => '14px',
            ),
			'required' => array( 0 => 'menu_main_header', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_tablet_top_header_content',
            'title' => esc_html__('Sticky Header On Tablets: Top Header Content 1 and 2', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to enable a sticky header of Secondary Top Header Content 1 and 2 when scrolling on Tablets', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
			'required' => array( 0 => 'sticky_header_top', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_mobiles_top_header_content',
            'title' => esc_html__('Sticky Header On Mobiles: Top Header Content 1 and 2', 'food-lounge'),
			'subtitle' => esc_html__('Turn ON to enable a sticky header of Secondary Top Header Content 1 and 2 when scrolling on Mobiles', 'food-lounge'),
			'type' => 'switch',
            'default' => true,
			'required' => array( 0 => 'sticky_header_top', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_top_header_background_color',
            'title' => esc_html__('Sticky Header Background Color: Top Header Content 1 and 2', 'food-lounge'),
			'subtitle' => esc_html__('Controls the background color for the sticky header of Secondary Top Header Content 1 and 2', 'food-lounge'),
			'type' => 'color',
            'default' => '#000000',
			'required' => array( 0 => 'sticky_header_top', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'sticky_header_padding_top_menu',
            'title' => esc_html__('Sticky Header Padding: Secondary Top Menu', 'food-lounge'),
			'subtitle' => __('Controls the space in pixels between each menu item in the sticky header of Secondary Top Menu', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'padding',
            'output' => array('#storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'default' => array(
                'padding-top'     => '0',
                'padding-right'   => '0',
                'padding-bottom'  => '0',
                'padding-left'    => '0',
                'units'          => 'px',
            ),
			'required' => array( 0 => 'sticky_header_top', 1 => '=', 2 => 1 )
       		),
        array(
            'id' => 'sticky_header_font_size_secondary',
            'type' => 'typography',
            'title' => esc_html__('Sticky Header Font Size: Secondary Top Menu', 'food-lounge'),
			'subtitle' => esc_html__('Controls the font size of each menu item in the sticky header of Secondary  Top Menu. Enter value including CSS unit (px, em, rm) e.g. 10px', 'food-lounge'),
            'google' => false,
            'font-backup' => false,
            'all_styles' => false,
            'color' => false,
            'font-style' => false,
            'font-weight' => false,
            'font-family' => false,
            'line-height' => false,
            'text-align' => false,
            'output'  => array('#storm-header.storm-main-header.header-fixed .menu-main-menu > li > a i'),
            'units' => 'px',
            'default' => array(
                'font-size' => '13px'
            ),
			'required' => array( 0 => 'sticky_header_top', 1 => '=', 2 => 1 )
        )

    )
);
/* start logo */
$this->sections[] = array(
    'title' => esc_html__('Logo', 'food-lounge'),
	'desc' => esc_html__('Controls settings of logo', 'food-lounge'),
    'fields' => array(
		array(
			'title' => esc_html__('Logo Position', 'food-lounge'),
            'subtitle' => esc_html__('Controls the position of the logo in the header', 'food-lounge'),
            'id' => 'logo_position',
            'type' => 'button_set',
            'options' => array(
				'1' => 'Left', 
				'2' => 'Center'), 
    		'default' => '1'
        	),
			array(
            'id' => 'logo_margin',
            'title' => esc_html__('Logo Margins ', 'food-lounge'),
			'subtitle' => __('Controls the top/right/bottom/left margins of the logo. Enter values including any valid CSS unit, ex: 0px, 0px, 0px, 0px', 'food-lounge'),
            'type' => 'spacing',
            'units' => 'px',
            'mode' => 'margin',
            'output' => array('#storm-header-navigation .main-navigation .menu-main-menu > li > a',
                '#storm-header-navigation .main-navigation .menu-main-menu > ul > li > a'),
            'default' => array(
                'padding-top'     => '0',
                'padding-right'   => '0',
                'padding-bottom'  => '0',
                'padding-left'    => '0',
                'units'          => 'px',
            )
       		),
			array(
			'title' => esc_html__('Logo Type', 'food-lounge'),
            'subtitle' => esc_html__('Controls if you want the logo to be an image or a text', 'food-lounge'),
            'id' => 'logo_type',
            'type' => 'button_set',
            'options' => array(
				'1' => 'Image', 
				'2' => 'Text'), 
    		'default' => '1'
        	),
			array(
            'title' => esc_html__('Sticky Header Logo', 'food-lounge'),
            'subtitle' => esc_html__('Select an image file for your sticky header logo', 'food-lounge'),
            'id' => 'stiky_header_logo',
            'type' => 'media',
            'url' => true
        ),
        array(
            'title' => esc_html__('Default Logo', 'food-lounge'),
            'subtitle' => esc_html__('Select an image file for logo.', 'food-lounge'),
            'id' => 'default_logo',
            'type' => 'media',
            'url' => true
        ),
		 array(
            'title' => esc_html__('Retina Logo', 'food-lounge'),
            'subtitle' => esc_html__('Select an image file for the retina version of the logo. It should be exactly 2x the size of the main logo', 'food-lounge'),
            'id' => 'retina_logo',
            'type' => 'media',
            'url' => true
        ),
		 array(
            'title' => esc_html__('Mobile Logo', 'food-lounge'),
            'subtitle' => esc_html__('Select an image file for the mobile logo', 'food-lounge'),
            'id' => 'mobile_logo',
            'type' => 'media',
            'url' => true
        ),
		 array(
            'title' => esc_html__('Logo Text', 'food-lounge'),
            'subtitle' => esc_html__('Type the text which you want to display as logo', 'food-lounge'),
            'id' => 'logo_text',
            'type' => 'text'
        ),
		array(
		    'id' => 'logo_tagline',
		    'type' => 'switch',
		    'title' => esc_html__('Display Logo Tagline', 'food-lounge'),
			'subtitle' => esc_html__('Select ON if you want to display a tagline with the logo', 'food-lounge'),
		    'default' => true,
	    ),
		 array(
            'title' => esc_html__('Logo Tagline Text', 'food-lounge'),
            'subtitle' => esc_html__('Type the text which you want as the tagline of the logo', 'food-lounge'),
            'id' => 'logo_tagline_text',
            'type' => 'text',
			'required' => array( 0 => 'logo_tagline', 1 => '=', 2 => 1 )
        ),
		array(
            'id' => 'logo_tagline_text_color',
            'title' => esc_html__('Logo Tagline Text Color', 'food-lounge'),
			'subtitle' => esc_html__('Select the color of the tagline text which displays with the logo', 'food-lounge'),
			'type' => 'color',
            'default' => '#000000',
			'required' => array( 0 => 'logo_tagline', 1 => '=', 2 => 1 )
        )

    )
);
/**
 * Favicon
 *
 * @author StormTheme
 */
$this->sections[] = array(
    'title' => esc_html__('Favicon', 'food-lounge'),
	'desc' => esc_html__('Controls settings of favicon', 'food-lounge'),
	'subsection' => true,
    'fields' => array(
	    array(
		    'title' => esc_html__('Default Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the favicon for your website at 16px x 16px', 'food-lounge'),
		    'id' => 'default_favicon',
		    'type' => 'media',
		    'url' => true
	    ),
		array(
		    'title' => esc_html__('Retina Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the retina favicon for your website at 32px x 32px', 'food-lounge'),
		    'id' => 'retina_favicon',
		    'type' => 'media',
		    'url' => true
	    ),
		array(
		    'title' => esc_html__('Mobile Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the favicon for your mobile devices ', 'food-lounge'),
		    'id' => 'mobile_favicon',
		    'type' => 'media',
		    'url' => true
	    ),
		array(
		    'title' => esc_html__('Apple iPad Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the favicon for Apple iPad at 72px x 72px', 'food-lounge'),
		    'id' => 'apple_ipad_favicon',
		    'type' => 'media',
		    'url' => true
	    ),
		array(
		    'title' => esc_html__('Apple iPad Retina Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the favicon for Apple iPad at 144px x 144px', 'food-lounge'),
		    'id' => 'apple_ipad_retina_fav',
		    'type' => 'media',
		    'url' => true
	    ),
		array(
		    'title' => esc_html__('Apple iPhone Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the favicon for Apple iPad at 57px x 57px', 'food-lounge'),
		    'id' => 'apple_iphone_fav',
		    'type' => 'media',
		    'url' => true
	    ),
		array(
		    'title' => esc_html__('Apple iPhone Retina Favicon', 'food-lounge'),
		    'subtitle' => esc_html__('Select the favicon for Apple iPad at 114px x 114px', 'food-lounge'),
		    'id' => 'apple_iphone_retina_fav',
		    'type' => 'media',
		    'url' => true
	    )
    )
);