<?php
/**
 * Block Styles
 *
 * @package seo_marketing_agency
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function seo_marketing_agency_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'seo-marketing-agency-padding-0',
				'label' => esc_html__( 'No Padding', 'seo-marketing-agency' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'seo-marketing-agency-post-author-card',
				'label' => esc_html__( 'Theme Style', 'seo-marketing-agency' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'seo-marketing-agency-button',
				'label'        => esc_html__( 'Plain', 'seo-marketing-agency' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'seo-marketing-agency-post-comments',
				'label'        => esc_html__( 'Theme Style', 'seo-marketing-agency' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'seo-marketing-agency-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'seo-marketing-agency' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'seo-marketing-agency-wp-table',
				'label'        => esc_html__( 'Theme Style', 'seo-marketing-agency' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'seo-marketing-agency-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'seo-marketing-agency' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'seo-marketing-agency-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'seo-marketing-agency' ),
			)
		);
	}
	add_action( 'init', 'seo_marketing_agency_register_block_styles' );
}
