<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'online_marketing_agency_above_slider' ); ?>

	<?php if( get_theme_mod('online_marketing_agency_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			    <?php $online_marketing_agency_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'online_marketing_agency_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $online_marketing_agency_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($online_marketing_agency_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $online_marketing_agency_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
					        	<div class="row ">
						        	<div class="sliderimg col-md-6">
			            				<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
									</div>
								    <div class="col-md-6">
					        			<!-- <div class="carousel-caption"> -->
								            <div class="inner-carousel">
								              	<h2><?php the_title(); ?></h2>
								              	<?php 
								                  $online_marketing_agency_slider_excerpt_length = get_theme_mod('online_marketing_agency_slider_excerpt_length');
								                
								                  if( $online_marketing_agency_slider_excerpt_length != '15'){?>
								          	     <p class="mb-0"><?php $online_marketing_agency_excerpt = get_the_excerpt(); echo esc_html( online_marketing_agency_string_limit_words( $online_marketing_agency_excerpt, esc_attr(get_theme_mod('online_marketing_agency_slider_excerpt_length','15') ) )); ?></p>
								              	<?php } ?>
								              	<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php echo esc_html('Get Started','online-marketing-agency'); ?></span><i class="fas fa-chevron-right ml-2"></i><span class="screen-reader-text"><?php echo esc_html('Get Started','online-marketing-agency'); ?></span></a>
						            		</div>
						            	<!-- </div> -->
						            </div>
						        </div>
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
			    <?php else : ?>
			    	<div class="no-postfound"></div>
	      		<?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','online-marketing-agency' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','online-marketing-agency' );?></span>
			    </a>
			</div>
		  	<div class="clearfix"></div>
		</section>
	<?php }?>
	
	<?php do_action('online_marketing_agency_below_slider'); ?>

	<?php if( get_theme_mod('online_marketing_agency_features_category_setting') != '' ){?>
		<section id="feature-section" class="py-5">
			<div class="container"> 
				<div class="secir"></div>
	        	<div class="row ">  
					<div class="col-lg-4 col-md-12 col-sm-12 f-box-l">
						<?php $online_marketing_agency_catData1 =  get_theme_mod('online_marketing_agency_features_category_setting');
						if($online_marketing_agency_catData1){ 
							$args = array(
								'post_type' => 'post',
								'category_name' => $online_marketing_agency_catData1,
								'posts_per_page' => get_theme_mod('online_marketing_agency_features_number',2)
							);
							$i=1; ?>
							<?php $query = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while( $query->have_posts() ) : $query->the_post(); ?>
						<div class="feature-box ">
							<div class="feature-icon">
								<i class="<?php echo esc_attr(get_theme_mod('online_marketing_agency_feature_icon' . $i, 'fas fa-chart-line')); ?>"></i>
							</div>
							<div class="feature-content">
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
								<p class="mb-0">
									<?php $online_marketing_agency_excerpt = get_the_excerpt(); echo esc_html( online_marketing_agency_string_limit_words( $online_marketing_agency_excerpt,8 ) ); ?> <?php echo esc_html('...', 'online-marketing-agency'); ?>
									<!-- <a href="</?php the_permalink(); ?>"></?php echo esc_html('Read More', 'online-marketing-agency'); ?><span class="screen-reader-text"></?php echo esc_html('Read More', 'online-marketing-agency'); ?></span></a> -->
								</p>
							</div>
						</div>

								<?php $i++; endwhile; 
								wp_reset_postdata(); ?>
							<?php else : ?>
						<div class="no-postfound"></div>
							<?php endif; ?>
						<?php }?>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 " >
						<div class="fea-headbrd">
							<div class="fea-head">
								<div class="fea-headinn">
									<div class="fea-title">
									<?php if(get_theme_mod('online_marketing_agency_feature_heading') != ''){?>
										<?php echo esc_html(get_theme_mod('online_marketing_agency_feature_heading')); ?>
									<?php }?>
									</div>
									<div class="fea-subtitle">
									<?php if(get_theme_mod('online_marketing_agency_feature_subheading') != ''){?>
										<?php echo esc_html(get_theme_mod('online_marketing_agency_feature_subheading')); ?>
									<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 f-box-r">
					<?php $online_marketing_agency_catData1right =  get_theme_mod('online_marketing_agency_features_category_settingright');
						if($online_marketing_agency_catData1right){ 
							$args = array(
								'post_type' => 'post',
								'category_name' => $online_marketing_agency_catData1right,
								'posts_per_page' => get_theme_mod('online_marketing_agency_features_numberright',2)
							);
							$i=1; ?>
							<?php $query = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while( $query->have_posts() ) : $query->the_post(); ?>

						<div class="feature-box ">
							<div class="feature-icon">
								<i class="<?php echo esc_attr(get_theme_mod('online_marketing_agency_feature_iconright' . $i, 'fas fa-chart-line')); ?>"></i>
							</div>
							<div class="feature-content">
								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
								<p class="mb-0">
									<?php $online_marketing_agency_excerpt = get_the_excerpt(); echo esc_html( online_marketing_agency_string_limit_words( $online_marketing_agency_excerpt,8 ) ); ?> <?php echo esc_html('...', 'online-marketing-agency'); ?>
									<!-- <a href="</?php the_permalink(); ?>"></?php echo esc_html('Read More', 'online-marketing-agency'); ?><span class="screen-reader-text"></?php echo esc_html('Read More', 'online-marketing-agency'); ?></span></a> -->
								</p>
							</div>
						</div>
			
							<?php $i++; endwhile; 
							wp_reset_postdata(); ?>
						<?php else : ?>
						<div class="no-postfound"></div>
						<?php endif; ?>
					<?php }?>
					</div>	
					<div class="fea-btn">
						<a href="">View More</a>
					</div>
				</div>
			</div>
		</section>
	<?php }?>

	<?php do_action('online_marketing_agency_below_features_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>