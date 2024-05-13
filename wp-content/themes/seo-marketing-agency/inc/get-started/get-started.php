<?php

add_action( 'admin_menu', 'seo_marketing_agency_getting_started' );
function seo_marketing_agency_getting_started() {
	add_theme_page( esc_html__('Get Started', 'seo-marketing-agency'), esc_html__('Get Started', 'seo-marketing-agency'), 'edit_theme_options', 'seo-marketing-agency-guide-page', 'seo_marketing_agency_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function seo_marketing_agency_admin_theme_style() {
   wp_enqueue_style('seo-marketing-agency-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'seo_marketing_agency_admin_theme_style');

//guidline for about theme
function seo_marketing_agency_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'seo-marketing-agency' );
?>
<div class="wrapper-info">
	<div class="intro">
			<h3><?php esc_html_e( 'Welcome to SEO Marketing Agency WordPress Theme', 'seo-marketing-agency' ); ?></h3>
			<p><?php esc_html_e( 'Version:', 'seo-marketing-agency' ); ?> <?php echo esc_html($theme['Version']);?></p>
		</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Pro version of our theme', 'seo-marketing-agency'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Then we will proceed for pro version of theme.', 'seo-marketing-agency'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( SEO_MARKETING_AGENCY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'seo-marketing-agency'); ?></a>
				<hr>
				<h4><?php esc_html_e('Check Our Demo', 'seo-marketing-agency'); ?></h4>
				<p><?php esc_html_e('Here, you can view a live demonstration of our theme.', 'seo-marketing-agency'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( SEO_MARKETING_AGENCY_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'seo-marketing-agency'); ?></a>
				<hr>
				<h4><?php esc_html_e('Theme Documentation', 'seo-marketing-agency'); ?></h4>
				<p><?php esc_html_e('Need more details? Please check our full documentation for detailed theme setup.', 'seo-marketing-agency'); ?></p>
				<a href="<?php echo esc_url( SEO_MARKETING_AGENCY_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'seo-marketing-agency'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'seo-marketing-agency'); ?></h4>
				<p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'seo-marketing-agency'); ?></p>
				<a href="<?php echo esc_url( SEO_MARKETING_AGENCY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'seo-marketing-agency'); ?></a>
				<hr>
				<h4><?php esc_html_e('Leave us a review', 'seo-marketing-agency'); ?></h4>
				<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'seo-marketing-agency'); ?></p>
				<a href="<?php echo esc_url( SEO_MARKETING_AGENCY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'seo-marketing-agency'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>