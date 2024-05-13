<?php
/**
 * The header for our theme
 *
 * @subpackage Online Marketing Agency
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'online-marketing-agency' ); ?></a>

<div id="header">
	<div class="container">
		<div class="main-header">
			<div class="row mx-0">
				<div class="col-lg-3 col-md-12 col-sm-11 align-self-center">
					<div class="logo text-lg-left text-center">
						<?php if ( has_custom_logo() ) : ?>
		            		<?php the_custom_logo(); ?>
			            <?php endif; ?>
		             	<?php if (get_theme_mod('online_marketing_agency_show_site_title',true)) {?>
		          			<?php $blog_info = get_bloginfo( 'name' ); ?>
			                <?php if ( ! empty( $blog_info ) ) : ?>
			                  	<?php if ( is_front_page() && is_home() ) : ?>
			                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                  	<?php else : ?>
		                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                  		<?php endif; ?>
			                <?php endif; ?>
			            <?php }?>
			            <?php if (get_theme_mod('online_marketing_agency_show_tagline',true)) {?>
			                <?php $description = get_bloginfo( 'description', 'display' );
		                  	if ( $description || is_customize_preview() ) : ?>
			                  	<p class="site-description"><?php echo esc_html($description); ?></p>
		              		<?php endif; ?>
		          		<?php }?>
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-sm-1 R-hd">
					<div class="topheadmobout">
						<div class="tophead row mx-0">
							<div class="col-lg-9 tpmail ">

								<!-- <div class="row mx-0"> -->
									<?php if(get_theme_mod('online_marketing_agency_phone_number') != ''){ ?>
										<li>
									<!-- <div class="col-lg-4 col-md-6 mx-0"> -->
										<i class="fas fa-phone"></i>
										<?php echo esc_html('Phone :', 'online-marketing-agency'); ?>	
										<a class="phone" href="tel:<?php echo esc_attr(get_theme_mod('online_marketing_agency_phone_number')) ?>"><?php echo esc_html(get_theme_mod('online_marketing_agency_phone_number')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('online_marketing_agency_phone_number')); ?></span></a>
									<!-- </div> -->
									</li>
									<?php }?>

									<?php if(get_theme_mod('online_marketing_agency_email') != ''){ ?>
										<li>
									<!-- <div class="email col-lg-8 col-md-6 mx-0 pd-0"> -->
										<div class="email">
										<i class="fa fa-envelope"></i>		
										<?php echo esc_html('E-Mail :', 'online-marketing-agency'); ?>	
										<a href="mail:<?php echo esc_attr(get_theme_mod('online_marketing_agency_email')) ?>"><?php echo esc_html(get_theme_mod('online_marketing_agency_email')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('online_marketing_agency_email')); ?></span></a>
									</div>
									</li>
									<?php }?>
								<!-- </div> -->
							</div>
							<div class="col-lg-3 pd-0">
								<?php if(get_theme_mod('online_marketing_agency_facebook_url') != '' || get_theme_mod('online_marketing_agency_twitter_url') != '' || get_theme_mod('online_marketing_agency_instagram_url') != '' || get_theme_mod('online_marketing_agency_pinterest_url') != ''){ ?>
								<div class="social-icons">
									<div class="social-icons ">
										<?php if(get_theme_mod('online_marketing_agency_facebook_url') != ''){?>
											<a href="<?php echo esc_url(get_theme_mod('online_marketing_agency_facebook_url')) ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'online-marketing-agency'); ?></span></a>
										<?php }?>
										<?php if(get_theme_mod('online_marketing_agency_twitter_url') != ''){?>
											<a href="<?php echo esc_url(get_theme_mod('online_marketing_agency_twitter_url')) ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'online-marketing-agency'); ?></span></a>
										<?php }?>
										<?php if(get_theme_mod('online_marketing_agency_instagram_url') != ''){?>
											<a href="<?php echo esc_url(get_theme_mod('online_marketing_agency_instagram_url')) ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'online-marketing-agency'); ?></span></a>
										<?php }?>
										<?php if(get_theme_mod('online_marketing_agency_pinterest_url') != ''){?>
											<a href="<?php echo esc_url(get_theme_mod('online_marketing_agency_pinterest_url')) ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'online-marketing-agency'); ?></span></a>
										<?php }?>
									</div>
								</div>
							<?php }?>
							</div>
						</div>
					</div>
					<div class="bottomhead row">
						<div class="col-lg-9 ">
							<div class="menu-bar">
								<div class="toggle-menu responsive-menu text-md-left text-center">
									<?php if(has_nav_menu('primary')){ ?>
										<button onclick="online_marketing_agency_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','online-marketing-agency'); ?></span></button>
									<?php }?>
								</div>
								<div id="sidelong-menu" class="nav sidenav">
									<nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'online-marketing-agency' ); ?>">
										<?php if(has_nav_menu('primary')){
											wp_nav_menu( array( 
												'theme_location' => 'primary',
												'container_class' => 'main-menu-navigation clearfix' ,
												'menu_class' => 'clearfix',
												'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
												'fallback_cb' => 'wp_page_menu',
											) ); 
										} ?>
										<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="online_marketing_agency_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','online-marketing-agency'); ?></span></a>
									</nav>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3 ">
							<div class="topheadmobout">
								<div class="h-btn">
									<a href="<?php echo esc_html(get_theme_mod('online_marketing_agency_headerbtnlink')); ?>"><div class="h-btntxt"><?php echo esc_html(get_theme_mod('online_marketing_agency_headerbtn_text')); ?></div><i class="fas fa-phone"></i>
									</a>
								</div>
							</div>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if(is_singular()) {?>
	<div id="inner-pages-header">
		<div class="header-overlay"></div>
	    <div class="header-content">
		    <div class="container"> 
		      	<h1><?php single_post_title(); ?></h1>
		      	<div class="innheader-border"></div>
		      	<div class="theme-breadcrumb mt-2">
					<?php online_marketing_agency_breadcrumb();?>
				</div>
		    </div>
		</div>
	</div>
<?php } ?>