<?php 

	$online_marketing_agency_custom_style = '';

	// Logo Size
	$online_marketing_agency_logo_top_padding = get_theme_mod('online_marketing_agency_logo_top_padding');
	$online_marketing_agency_logo_bottom_padding = get_theme_mod('online_marketing_agency_logo_bottom_padding');
	$online_marketing_agency_logo_left_padding = get_theme_mod('online_marketing_agency_logo_left_padding');
	$online_marketing_agency_logo_right_padding = get_theme_mod('online_marketing_agency_logo_right_padding');

	if( $online_marketing_agency_logo_top_padding != '' || $online_marketing_agency_logo_bottom_padding != '' || $online_marketing_agency_logo_left_padding != '' || $online_marketing_agency_logo_right_padding != ''){
		$online_marketing_agency_custom_style .=' .logo {';
			$online_marketing_agency_custom_style .=' padding-top: '.esc_attr($online_marketing_agency_logo_top_padding).'px; padding-bottom: '.esc_attr($online_marketing_agency_logo_bottom_padding).'px; padding-left: '.esc_attr($online_marketing_agency_logo_left_padding).'px; padding-right: '.esc_attr($online_marketing_agency_logo_right_padding).'px;';
		$online_marketing_agency_custom_style .=' }';
	}

	// Header Image
	$header_image_url = online_marketing_agency_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$online_marketing_agency_custom_style .=' #inner-pages-header {';
			$online_marketing_agency_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$online_marketing_agency_custom_style .=' }';
	} else {
		$online_marketing_agency_custom_style .=' #inner-pages-header {';
			$online_marketing_agency_custom_style .=' background: radial-gradient(circle at center, rgba(0,0,0,0) 0%, #000000 100%); ';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_slider_hide_show = get_theme_mod('online_marketing_agency_slider_hide_show',false);
	if( $online_marketing_agency_slider_hide_show == true){
		$online_marketing_agency_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$online_marketing_agency_custom_style .=' display:none;';
		$online_marketing_agency_custom_style .=' }';
	}

	//site title tagline
	$online_marketing_agency_site_title_color = get_theme_mod('online_marketing_agency_site_title_color');
	if ( $online_marketing_agency_site_title_color != '') {
		$online_marketing_agency_custom_style .=' h1.site-title a, p.site-title a{';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_site_title_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_site_tagline_color = get_theme_mod('online_marketing_agency_site_tagline_color');
	if ( $online_marketing_agency_site_tagline_color != '') {
		$online_marketing_agency_custom_style .=' p.site-description{';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_site_tagline_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	//Topbar color
	$online_marketing_agency_topbar_text_color = get_theme_mod('online_marketing_agency_topbar_text_color');
	if ( $online_marketing_agency_topbar_text_color != '') {
		$online_marketing_agency_custom_style .=' p.topbar-text {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_topbar_text_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_topbar_notext_color = get_theme_mod('online_marketing_agency_topbar_notext_color');
	if ( $online_marketing_agency_topbar_notext_color != '') {
		$online_marketing_agency_custom_style .=' .phone span ,phone a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_topbar_notext_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_topbar_icon_color = get_theme_mod('online_marketing_agency_topbar_icon_color');
	$online_marketing_agency_topbar_iconbg_color = get_theme_mod('online_marketing_agency_topbar_iconbg_color');

	if ( $online_marketing_agency_topbar_icon_color != '') {
		$online_marketing_agency_custom_style .=' .phone i {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_topbar_icon_color).'; background-color:'.esc_attr($online_marketing_agency_topbar_iconbg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_Header_menu_color = get_theme_mod('online_marketing_agency_Header_menu_color');
	if ( $online_marketing_agency_Header_menu_color != '') {
		$online_marketing_agency_custom_style .=' .nav-menu ul li a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_Header_menu_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_Header_submenu_color = get_theme_mod('online_marketing_agency_Header_submenu_color');
	$online_marketing_agency_Header_submenubg_color = get_theme_mod('online_marketing_agency_Header_submenubg_color');
	if ( $online_marketing_agency_Header_submenu_color != '') {
		$online_marketing_agency_custom_style .=' .nav-menu ul ul a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_Header_submenu_color).'; background-color:'.esc_attr($online_marketing_agency_Header_submenubg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	//Slider color
	$online_marketing_agency_slidertitle_color = get_theme_mod('online_marketing_agency_slidertitle_color');
	if ( $online_marketing_agency_slidertitle_color != '') {
		$online_marketing_agency_custom_style .=' #slider h2 a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_slidertitle_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_slidertext_color = get_theme_mod('online_marketing_agency_slidertext_color');
	if ( $online_marketing_agency_slidertext_color != '') {
		$online_marketing_agency_custom_style .=' #slider p {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_slidertext_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_sliderbtn_color = get_theme_mod('online_marketing_agency_sliderbtn_color');
	$online_marketing_agency_sliderbtnbg_color = get_theme_mod('online_marketing_agency_sliderbtnbg_color');

	if ( $online_marketing_agency_sliderbtn_color != '') {
		$online_marketing_agency_custom_style .=' #slider a.read-btn, #service-section .service-content a.service-btn {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_sliderbtn_color).'; background-color:'.esc_attr($online_marketing_agency_sliderbtnbg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	//Feature color
	$online_marketing_agency_featureicon_color = get_theme_mod('online_marketing_agency_featureicon_color');
	if ( $online_marketing_agency_featureicon_color != '') {
		$online_marketing_agency_custom_style .=' .feature-icon i {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_featureicon_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_featureiconbg_color = get_theme_mod('online_marketing_agency_featureiconbg_color');
	if ( $online_marketing_agency_featureiconbg_color != '') {
		$online_marketing_agency_custom_style .=' .feature-icon {';
			$online_marketing_agency_custom_style .=' background-color:'.esc_attr($online_marketing_agency_featureiconbg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_featuretitle_color = get_theme_mod('online_marketing_agency_featuretitle_color');
	if ( $online_marketing_agency_featuretitle_color != '') {
		$online_marketing_agency_custom_style .=' .feature-box h3 a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_featuretitle_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_featuretext_color = get_theme_mod('online_marketing_agency_featuretext_color');
	if ( $online_marketing_agency_featuretext_color != '') {
		$online_marketing_agency_custom_style .=' .feature-box p {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_featuretext_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_featurelink_color = get_theme_mod('online_marketing_agency_featurelink_color');
	if ( $online_marketing_agency_featurelink_color != '') {
		$online_marketing_agency_custom_style .=' .feature-box p a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_featurelink_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_featurebg_color = get_theme_mod('online_marketing_agency_featurebg_color');
	if ( $online_marketing_agency_featurebg_color != '') {
		$online_marketing_agency_custom_style .=' .feature-box {';
			$online_marketing_agency_custom_style .=' background-color:'.esc_attr($online_marketing_agency_featurebg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	//Service color
	$online_marketing_agency_service_color = get_theme_mod('online_marketing_agency_service_color');
	if ( $online_marketing_agency_service_color != '') {
		$online_marketing_agency_custom_style .=' #service-section h3 {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_service_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_servicetitle_color = get_theme_mod('online_marketing_agency_servicetitle_color');
	if ( $online_marketing_agency_servicetitle_color != '') {
		$online_marketing_agency_custom_style .=' #service-section .service-content h4 a {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_servicetitle_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_servicetext_color = get_theme_mod('online_marketing_agency_servicetext_color');
	if ( $online_marketing_agency_servicetext_color != '') {
		$online_marketing_agency_custom_style .=' #service-section .service-content p {';
			$online_marketing_agency_custom_style .=' color:'.esc_attr($online_marketing_agency_servicetext_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_servicebg_color = get_theme_mod('online_marketing_agency_servicebg_color');
	if ( $online_marketing_agency_servicebg_color != '') {
		$online_marketing_agency_custom_style .=' #service-section .service-content {';
			$online_marketing_agency_custom_style .=' background-color:'.esc_attr($online_marketing_agency_servicebg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}

	$online_marketing_agency_servicebtn_color = get_theme_mod('online_marketing_agency_servicebtn_color');
	$online_marketing_agency_servicebtnbg_color = get_theme_mod('online_marketing_agency_servicebtnbg_color');

	if ( $online_marketing_agency_servicebtn_color != '') {
		$online_marketing_agency_custom_style .=' #service-section .service-content a.service-btn {';
			$online_marketing_agency_custom_style .='color:'.esc_attr($online_marketing_agency_servicebtn_color).'; background-color:'.esc_attr($online_marketing_agency_servicebtnbg_color).';';
		$online_marketing_agency_custom_style .=' }';
	}