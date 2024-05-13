<?php
/**
 * Online Marketing Agency: Customizer
 *
 * @subpackage Online Marketing Agency
 * @since 1.0
 */

use WPTRT\Customize\Section\Online_Marketing_Agency_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Online_Marketing_Agency_Button::class );

	$manager->add_section(
		new Online_Marketing_Agency_Button( $manager, 'online_marketing_agency_pro', [
			'title' => __( 'Online Marketing Pro', 'online-marketing-agency' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'online-marketing-agency' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/digital-marketing-agency-wordpress-theme', 'online-marketing-agency')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'online-marketing-agency-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'online-marketing-agency-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function online_marketing_agency_customize_register( $wp_customize ) {

	$wp_customize->add_setting('online_marketing_agency_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('online_marketing_agency_logo_padding',array(
		'label' => __('Logo Margin','online-marketing-agency'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('online_marketing_agency_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_float'
	));
	$wp_customize->add_control('online_marketing_agency_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','online-marketing-agency'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('online_marketing_agency_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_float'
	));
	$wp_customize->add_control('online_marketing_agency_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','online-marketing-agency'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('online_marketing_agency_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_float'
	));
	$wp_customize->add_control('online_marketing_agency_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','online-marketing-agency'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('online_marketing_agency_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_float'
 	));
 	$wp_customize->add_control('online_marketing_agency_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','online-marketing-agency'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('online_marketing_agency_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_checkbox'
	));
	$wp_customize->add_control('online_marketing_agency_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','online-marketing-agency'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'online_marketing_agency_site_title_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_site_title_color', array(
		'label' => 'Title Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('online_marketing_agency_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_checkbox'
	));
	$wp_customize->add_control('online_marketing_agency_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','online-marketing-agency'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting( 'online_marketing_agency_site_tagline_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_site_tagline_color', array(
		'label' => 'Taglne Color',
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'online_marketing_agency_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'online-marketing-agency' ),
		'description' => __( 'Description of what this panel does.', 'online-marketing-agency' ),
	) );

	$wp_customize->add_section( 'online_marketing_agency_theme_options_section', array(
    	'title'      => __( 'General Settings', 'online-marketing-agency' ),
		'priority'   => 30,
		'panel' => 'online_marketing_agency_panel_id'
	) );

	$wp_customize->add_setting('online_marketing_agency_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'online_marketing_agency_sanitize_choices'
	));
	$wp_customize->add_control('online_marketing_agency_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','online-marketing-agency'),
		'section' => 'online_marketing_agency_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','online-marketing-agency'),
		   'Right Sidebar' => __('Right Sidebar','online-marketing-agency'),
		   'One Column' => __('One Column','online-marketing-agency'),
		   'Grid Layout' => __('Grid Layout','online-marketing-agency')
		),
	));

	$wp_customize->add_setting('online_marketing_agency_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'online_marketing_agency_sanitize_choices'
	));
	$wp_customize->add_control('online_marketing_agency_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','online-marketing-agency'),
        'section' => 'online_marketing_agency_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','online-marketing-agency'),
            'Right Sidebar' => __('Right Sidebar','online-marketing-agency'),
            'One Column' => __('One Column','online-marketing-agency')
        ),
	));

	$wp_customize->add_setting('online_marketing_agency_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'online_marketing_agency_sanitize_choices'
	));
	$wp_customize->add_control('online_marketing_agency_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','online-marketing-agency'),
        'section' => 'online_marketing_agency_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','online-marketing-agency'),
            'Right Sidebar' => __('Right Sidebar','online-marketing-agency'),
            'One Column' => __('One Column','online-marketing-agency')
        ),
	));

	$wp_customize->add_setting('online_marketing_agency_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'online_marketing_agency_sanitize_choices'
	));
	$wp_customize->add_control('online_marketing_agency_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','online-marketing-agency'),
        'section' => 'online_marketing_agency_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','online-marketing-agency'),
            'Right Sidebar' => __('Right Sidebar','online-marketing-agency'),
            'One Column' => __('One Column','online-marketing-agency'),
            'Grid Layout' => __('Grid Layout','online-marketing-agency')
        ),
	));

	//Header
	$wp_customize->add_section( 'online_marketing_agency_header' , array(
    	'title'    => __( 'Header Section', 'online-marketing-agency' ),
		'priority' => null,
		'panel' => 'online_marketing_agency_panel_id'
	) );

	$wp_customize->add_setting('online_marketing_agency_phone_number',array(
    	'default' => '',
    	'sanitize_callback'	=> 'online_marketing_agency_sanitize_phone_number'
	));
	$wp_customize->add_control('online_marketing_agency_phone_number',array(
	   	'type' => 'url',
	   	'label' => __('Add Phone Number','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));


	$wp_customize->add_setting('online_marketing_agency_email',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_marketing_agency_email',array(
	   	'type' => 'text',
	   	'label' => __('Add Mail','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting('online_marketing_agency_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_marketing_agency_facebook_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Facebook URL','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting('online_marketing_agency_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_marketing_agency_twitter_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Twitter URL','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting('online_marketing_agency_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_marketing_agency_instagram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Instagram URL','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting('online_marketing_agency_pinterest_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('online_marketing_agency_pinterest_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Pinterest URL','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting('online_marketing_agency_headerbtn_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_marketing_agency_headerbtn_text',array(
	   	'type' => 'text',
	   	'label' => __('Button Text','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting('online_marketing_agency_headerbtnlink',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_marketing_agency_headerbtnlink',array(
	   	'type' => 'url',
	   	'label' => __('Button Link','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_header',
	));

	$wp_customize->add_setting( 'online_marketing_agency_topbar_text_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_topbar_text_color', array(
		'label' => 'Text Color',
		'section' => 'online_marketing_agency_header',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_topbar_notext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_topbar_notext_color', array(
		'label' => 'Number Text Color',
		'section' => 'online_marketing_agency_header',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_topbar_icon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_topbar_icon_color', array(
		'label' => 'Icon Color',
		'section' => 'online_marketing_agency_header',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_topbar_iconbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_topbar_iconbg_color', array(
		'label' => 'Icon Bg Color',
		'section' => 'online_marketing_agency_header',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_Header_menu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_Header_menu_color', array(
		'label' => 'Menu Color',
		'section' => 'online_marketing_agency_header',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_Header_submenu_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_Header_submenu_color', array(
		'label' => 'Submenu Color',
		'section' => 'online_marketing_agency_header',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_Header_submenubg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_Header_submenubg_color', array(
		'label' => 'Submenu Bg Color',
		'section' => 'online_marketing_agency_header',
	)));

	//home page slider
	$wp_customize->add_section( 'online_marketing_agency_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'online-marketing-agency' ),
		'priority' => null,
		'panel' => 'online_marketing_agency_panel_id'
	) );

	$wp_customize->add_setting('online_marketing_agency_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'online_marketing_agency_sanitize_checkbox'
	));
	$wp_customize->add_control('online_marketing_agency_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'online_marketing_agency_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'online_marketing_agency_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'online_marketing_agency_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'online-marketing-agency' ),
			'section' => 'online_marketing_agency_slider_section',
			'type' => 'dropdown-pages'
		));
	}


	$wp_customize->add_setting('online_marketing_agency_slider_excerpt_length',array(
		'default' => '15',
		'sanitize_callback'	=> 'online_marketing_agency_sanitize_float'
	));
	$wp_customize->add_control('online_marketing_agency_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Description Excerpt Length','online-marketing-agency'),
		'section' => 'online_marketing_agency_slider_section',
	));

	$wp_customize->add_setting( 'online_marketing_agency_slidertitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_slidertitle_color', array(
		'label' => 'Title Color',
		'section' => 'online_marketing_agency_slider_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_slidertext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_slidertext_color', array(
		'label' => 'Title Color',
		'section' => 'online_marketing_agency_slider_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_sliderbtn_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_sliderbtn_color', array(
		'label' => 'Button Text Color',
		'section' => 'online_marketing_agency_slider_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_sliderbtnbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_sliderbtnbg_color', array(
		'label' => 'Button Bg Color',
		'section' => 'online_marketing_agency_slider_section',
	)));


	//Features Section
	$wp_customize->add_section('online_marketing_agency_features_section',array(
		'title'	=> __('Features Section','online-marketing-agency'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','online-marketing-agency'),
		'panel' => 'online_marketing_agency_panel_id',
	));

	$wp_customize->add_setting('online_marketing_agency_feature_heading',array(
    	'default' => 'OUR Features',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_marketing_agency_feature_heading',array(
	   	'type' => 'text',
	   	'label' => __('Add Heading','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_features_section',
	));

	$wp_customize->add_setting('online_marketing_agency_feature_subheading',array(
    	'default' => 'WHAT WE DO',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('online_marketing_agency_feature_subheading',array(
	   	'type' => 'text',
	   	'label' => __('Add Subheading','online-marketing-agency'),
	   	'section' => 'online_marketing_agency_features_section',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('online_marketing_agency_features_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'online_marketing_agency_sanitize_choices',
	));
	$wp_customize->add_control('online_marketing_agency_features_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','online-marketing-agency'),
		'section' => 'online_marketing_agency_features_section',
	));

	$wp_customize->add_setting('online_marketing_agency_features_number',array(
		'default'	=> '2',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('online_marketing_agency_features_number',array(
		'label'	=> __('Number Of Posts To Show In A Category','online-marketing-agency'),
		'section' => 'online_marketing_agency_features_section',
		'type'	  => 'number'
	));

	$online_marketing_agency_features_number = get_theme_mod('online_marketing_agency_features_number', 2);
	for ($i=1; $i <= $online_marketing_agency_features_number; $i++) { 
	   	$wp_customize->add_setting('online_marketing_agency_feature_icon' . $i, array(
	      	'default' => 'fas fa-chart-line',
	      	'sanitize_callback' => 'sanitize_text_field'
	   	));
	   	$wp_customize->add_control(new Online_Marketing_Agency_Fontawesome_Icon_Chooser($wp_customize, 'online_marketing_agency_feature_icon' . $i, array(
	      	'section' => 'online_marketing_agency_features_section',
	      	'type' => 'icon',
	      	'label' => esc_html__('Feature Icon ', 'online-marketing-agency') . $i
	  	)));
	}




	$rightcategories = get_categories();
	$rightcats = array();
	$i = 0;
	$rightcat_pst[]= 'select';
	foreach($rightcategories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$rightcat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('online_marketing_agency_features_category_settingright',array(
		'default' => 'select',
		'sanitize_callback' => 'online_marketing_agency_sanitize_choices',
	));
	$wp_customize->add_control('online_marketing_agency_features_category_settingright',array(
		'type' => 'select',
		'choices' => $rightcat_pst,
		'label' => __('Select Category To Display Right Side Posts','online-marketing-agency'),
		'section' => 'online_marketing_agency_features_section',
	));

	$wp_customize->add_setting('online_marketing_agency_features_numberright',array(
		'default'	=> '2',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('online_marketing_agency_features_numberright',array(
		'label'	=> __('Number Of Posts To Show In A Right Side Category','online-marketing-agency'),
		'section' => 'online_marketing_agency_features_section',
		'type'	  => 'number'
	));

	$online_marketing_agency_features_numberright = get_theme_mod('online_marketing_agency_features_numberright', 2);
	for ($i=1; $i <= $online_marketing_agency_features_numberright; $i++) { 
	   	$wp_customize->add_setting('online_marketing_agency_feature_iconright' . $i, array(
	      	'default' => 'fas fa-chart-line',
	      	'sanitize_callback' => 'sanitize_text_field'
	   	));
	   	$wp_customize->add_control(new Online_Marketing_Agency_Fontawesome_Icon_Chooser($wp_customize, 'online_marketing_agency_feature_iconright' . $i, array(
	      	'section' => 'online_marketing_agency_features_section',
	      	'type' => 'icon',
	      	'label' => esc_html__('Feature Icon', 'online-marketing-agency') . $i
	  	)));
	}


	$wp_customize->add_setting( 'online_marketing_agency_featureicon_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_featureicon_color', array(
		'label' => 'Icon Color',
		'section' => 'online_marketing_agency_features_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_featureiconbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_featureiconbg_color', array(
		'label' => 'Icon Bg Color',
		'section' => 'online_marketing_agency_features_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_featuretitle_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_featuretitle_color', array(
		'label' => 'Title Color',
		'section' => 'online_marketing_agency_features_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_featuretext_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_featuretext_color', array(
		'label' => 'Text Color',
		'section' => 'online_marketing_agency_features_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_featurelink_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_featurelink_color', array(
		'label' => 'Button Color',
		'section' => 'online_marketing_agency_features_section',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_featurebg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_featurebg_color', array(
		'label' => ' Box Bg Color',
		'section' => 'online_marketing_agency_features_section',
	)));


	//Footer
    $wp_customize->add_section( 'online_marketing_agency_footer', array(
    	'title'  => __( 'Footer Settings', 'online-marketing-agency' ),
		'priority' => null,
		'panel' => 'online_marketing_agency_panel_id'
	) );

	$wp_customize->add_setting('online_marketing_agency_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'online_marketing_agency_sanitize_checkbox'
    ));
    $wp_customize->add_control('online_marketing_agency_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','online-marketing-agency'),
       'section' => 'online_marketing_agency_footer'
    ));

    $wp_customize->add_setting('online_marketing_agency_footer_copy',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('online_marketing_agency_footer_copy',array(
		'label'	=> __('Copyright Text','online-marketing-agency'),
		'section' => 'online_marketing_agency_footer',
		'setting' => 'online_marketing_agency_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting( 'online_marketing_agency_copyright_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_copyright_color', array(
		'label' => 'Text Color',
		'section' => 'online_marketing_agency_footer',
	)));

	$wp_customize->add_setting( 'online_marketing_agency_copyrightbg_color', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'online_marketing_agency_copyrightbg_color', array(
		'label' => 'Backgrund Color',
		'section' => 'online_marketing_agency_footer',
	)));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'online_marketing_agency_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'online_marketing_agency_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'online_marketing_agency_customize_register' );

function online_marketing_agency_customize_partial_blogname() {
	bloginfo( 'name' );
}

function online_marketing_agency_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class Online_Marketing_Agency_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="online-marketing-agency-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="online-marketing-agency-icon-list clearfix">
	                <?php
	                $online_marketing_agency_font_awesome_icon_array = online_marketing_agency_font_awesome_icon_array();
	                foreach ($online_marketing_agency_font_awesome_icon_array as $online_marketing_agency_font_awesome_icon) {
	                   $icon_class = $this->value() == $online_marketing_agency_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($online_marketing_agency_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function online_marketing_agency_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'online_marketing_agency_customizer_script' );