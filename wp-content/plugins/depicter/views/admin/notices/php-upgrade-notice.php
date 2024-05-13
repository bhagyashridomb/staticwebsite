<?php
/**
 * Blank canvas.
 *
 * @package Depicter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<style>
.dep-php-upgrade-notice {
	padding: 10px !important;
	border: none;
}
.dep-php-upgrade-notice .wrap {
	padding: 31px 46px 25px;
	margin: 0;
	background: #FEFFBE url(<?php echo \Depicter::core()->assets()->getUrl() . '/resources/images/notice-bg.png';?>);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: right;
}
.dep-php-upgrade-notice h3 {
	font-size: 28px;
	font-weight: 700;
	line-height: 38px;
	letter-spacing: -0.04em;
	color: #070707;
	margin: 0;
}
.dep-php-upgrade-notice p {
	font-size: 17px;
	font-weight: 400;
	line-height: 23px;
	letter-spacing: -0.01em;
	color: #070707;
	margin-top: 13px;
	margin-bottom: 0;
	max-width: 700px;
}
.dep-php-upgrade-notice a {
	display: inline-block;
	text-decoration: none;
	color: #fff;
	margin-top: 27px;
	padding: 10px 30px;
	font-weight: 700;
	font-size: 14px;
	border-radius: 5px;
	background: linear-gradient(90deg, #F44848 2.96%, #FF9900 100%);
}
</style>
<div class="notice dep-php-upgrade-notice">
	<div class="wrap">
		<h3><?php esc_html_e( 'You need to upgrade PHP version to 7.4+', 'depicter' ); ?></h3>
		<p><?php esc_html_e( 'Heads up! In future upcoming updates, Depicter will require PHP 7.4.0 or higher. Please upgrade your PHP to avoid any disruption. Need help? Reach out to your hosting provider and ask them for PHP version upgrade.', 'depicter' ); ?></p>
		<a href="#" target="_blank"><?php esc_html_e( 'Learn More', 'depicter' ); ?></a>
	</div>
</div>
