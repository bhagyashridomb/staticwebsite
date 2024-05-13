<?php
/**
 * Online Marketing Agency functions and definitions
 *
 * @subpackage Online Marketing Agency
 * @since 1.0
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Online_Marketing_Agency_Loader.php' );

$Online_Marketing_Agency_Loader = new \WPTRT\Autoload\Online_Marketing_Agency_Loader();

$Online_Marketing_Agency_Loader->online_marketing_agency_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$Online_Marketing_Agency_Loader->online_marketing_agency_register();

function online_marketing_agency_setup() {
	
	load_theme_textdomain( 'online-marketing-agency', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
	    'default-color'          => '',
	    'default-image'          => '',
	    'default-repeat'         => '',
	    'default-position-x'     => '',
	    'default-attachment'     => '',
	    'wp-head-callback'       => '_custom_background_cb',
	    'admin-head-callback'    => '',
	    'admin-preview-callback' => ''
	));

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'online-marketing-agency' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css' ) );

}
add_action( 'after_setup_theme', 'online_marketing_agency_setup' );

function online_marketing_agency_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'online-marketing-agency' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'online-marketing-agency' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'online-marketing-agency' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'online-marketing-agency' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'online-marketing-agency' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'online-marketing-agency' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'online-marketing-agency' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'online-marketing-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'online_marketing_agency_widgets_init' );

function online_marketing_agency_fonts_url(){

	$font_families = array(
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

//Enqueue scripts and styles.
function online_marketing_agency_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'online-marketing-agency-fonts', online_marketing_agency_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'online-marketing-agency-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'online-marketing-agency-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'online-marketing-agency-style' ), '1.0' );
		wp_style_add_data( 'online-marketing-agency-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'online-marketing-agency-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'online-marketing-agency-style' ), '1.0' );
	wp_style_add_data( 'online-marketing-agency-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	require get_parent_theme_file_path( '/lz-custom-style.php' );
	wp_add_inline_style( 'online-marketing-agency-basic-style',$online_marketing_agency_custom_style );

	wp_enqueue_script( 'online-marketing-agency-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri(). '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri(). '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'online_marketing_agency_scripts' );

function online_marketing_agency_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'online_marketing_agency_front_page_template' );

function online_marketing_agency_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function online_marketing_agency_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function online_marketing_agency_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function online_marketing_agency_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function online_marketing_agency_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Excerpt Limit Begin */
function online_marketing_agency_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'online_marketing_agency_loop_columns');
if (!function_exists('online_marketing_agency_loop_columns')) {
	function online_marketing_agency_loop_columns() {
		return 3; // 3 products per row
	}
}

/* Breadcrumb Begin */
function online_marketing_agency_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a>";
		if (is_category() || is_single()) {
			the_category(', ');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "<span>";
				the_title();
			echo "</span> ";
		}
	}
}

function online_marketing_agency_banner_image( $image_url ){
    global $post;

    if( is_singular() ){
        $image_url      = get_the_post_thumbnail_url( $post->ID, 'full' );
    }
    return $image_url;
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/font-awesome-icons.php' );

require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );