<?php
/**
 * Block Patterns
 *
 * @package seo_marketing_agency
 * @since 1.0
 */

function seo_marketing_agency_register_block_patterns() {
	$block_pattern_categories = array(
		'seo-marketing-agency' => array( 'label' => esc_html__( 'SEO Marketing Agency', 'seo-marketing-agency' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'seo-marketing-agency' ) ),
	);

	$block_pattern_categories = apply_filters( 'seo_marketing_agency_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'seo_marketing_agency_register_block_patterns', 9 );