<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ben_theme
 */

 if ( ! function_exists( 'theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function theme_setup() {
 	/*
 	 * Make theme available for translation.
 	 * Translations can be filed in the /languages/ directory.
 	 * If you're building a theme based on RRE Theme, use a find and replace
 	 * to change 'rre-theme' to the name of your theme in all the template files.
 	 */
 	load_theme_textdomain( 'ben-theme', get_template_directory() . '/languages' );

 	// Add default posts and comments RSS feed links to head.
 	add_theme_support( 'automatic-feed-links' );

 	/*
 	 * Let WordPress manage the document title.
 	 * By adding theme support, we declare that this theme does not use a
 	 * hard-coded <title> tag in the document head, and expect WordPress to
 	 * provide it for us.
 	 */
 	add_theme_support( 'title-tag' );

 	/*
 	 * Enable support for Post Thumbnails on posts and pages.
 	 *
 	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 	 */
 	add_theme_support( 'post-thumbnails' );

  // Enable custom menus
  // =======================
  add_theme_support( 'menus' );

 	// This theme uses wp_nav_menu() in one location.
 	register_nav_menus( array(
		 'header-main-menu' => esc_html__( 'Main Menu', 'ben-theme' ),
		 'project-service-menu' => esc_html__('Service Menu', 'ben-theme'),
		 'project-industry-menu' => esc_html__('Industry Menu', 'ben-theme'),
 		'footer-menu' => esc_html__( 'Footer Menu', 'ben-theme' )
 	) );

 	/*
 	 * Switch default core markup for search form, comment form, and comments
 	 * to output valid HTML5.
 	 */
 	add_theme_support( 'html5', array(
 		'search-form',
 		'comment-form',
 		'comment-list',
 		'gallery',
 		'caption',
 	) );

 	// Add theme support for selective refresh for widgets.
 	add_theme_support( 'customize-selective-refresh-widgets' );
 }
 endif;
 add_action( 'after_setup_theme', 'theme_setup' );

 // Adds CSS
 // ============
 function theme_styles() {
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/style.css' );
	wp_enqueue_style( 'slickCSS', get_template_directory_uri() . '/js/slick/slick.css' );

   wp_enqueue_style( 'styleCSS', get_template_directory_uri() . '/style.css' );
 }
 add_action( 'wp_enqueue_scripts', 'theme_styles');

 // Adds JS
 // ==========
 function theme_js() {
  //wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/main.js', array('jquery'), '', true);
  // wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/feature.js', array('jquery'), '', true);
  wp_enqueue_script( 'slickJS', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '', true);
  wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);


 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

// Implement Additional files
//==========

//Gutenberg sizing 
function custom_admin_css() {
	echo '<style type="text/css">
	/* Main column width */
	.wp-block {
		max-width: 100%;
	}
	
	/* Width of "wide" blocks */
		 .wp-block[data-align="wide"] {
		 max-width: 2000px;
	}
	
	/* Width of "full-wide" blocks */
	.wp-block[data-align="full"] {
		max-width: none;
	}

	</style>';
	}
	add_action('admin_head', 'custom_admin_css');


	//Add Footer Options
	add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
		
		// Register options page.
        $footer = acf_add_options_page(array(
            'page_title'    => __('Theme Footer Settings'),
            'menu_title'    => __('Theme Footer Settings'),
            'menu_slug'     => 'theme-footer-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}


//Render Gutberg Block


/**
 * 
 * 
 * 
 * Customizer additions.
 */
require get_template_directory() . '/inc/register-blocks.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
* Load Custom Posts file
*/
require get_template_directory() . '/inc/custom-posts.php';

/**
* Load Custom Taxonomies file
*/
require get_template_directory() . '/inc/custom-taxonomies.php';
