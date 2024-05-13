<?php
/**
 * SEO Marketing Agency functions and definitions
 *
 * @package seo_marketing_agency
 * @since 1.0
 */

if ( ! function_exists( 'seo_marketing_agency_support' ) ) :
	function seo_marketing_agency_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'seo_marketing_agency_support' );

if ( ! function_exists( 'seo_marketing_agency_styles' ) ) :
	function seo_marketing_agency_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'seo-marketing-agency-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'seo_marketing_agency_styles' );

/* Theme Credit link */
define('SEO_MARKETING_AGENCY_BUY_NOW',__('https://cretathemes.com/gutenberg/seo-agency-wordpress-theme/','seo-marketing-agency'));
define('SEO_MARKETING_AGENCY_PRO_DEMO',__('https://cretathemes.com/preview/seo-marketing-agency/','seo-marketing-agency'));
define('SEO_MARKETING_AGENCY_THEME_DOC',__('https://cretathemes.com/pro-guide/seo-marketing-agency/','seo-marketing-agency'));
define('SEO_MARKETING_AGENCY_SUPPORT',__('https://wordpress.org/support/theme/seo-marketing-agency/','seo-marketing-agency'));
define('SEO_MARKETING_AGENCY_REVIEW',__('https://wordpress.org/support/theme/seo-marketing-agency/reviews/#new-post','seo-marketing-agency'));

/* Enqueue Js and Css */
function seo_marketing_agency_scripts() {
	wp_enqueue_script( 'seo-marketing-agency-jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );
	wp_enqueue_style( 'seo-marketing-agency-animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );
}
add_action( 'wp_enqueue_scripts', 'seo_marketing_agency_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started
require get_template_directory() . '/inc/get-started/get-started.php';