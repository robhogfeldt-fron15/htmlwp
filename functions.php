<?php
/**
 * underrob functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underrob
 */

if ( ! function_exists( 'underrob_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underrob_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on underrob, use a find and replace
	 * to change 'underrob' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'underrob', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );


	add_filter('show_admin_bar', '__return_false');

	/**
	 * My Test
	 */
	add_filter( 'body_class','post_body_class' );
	function post_body_class( $classes ) {

	    if ( is_front_page()) {
				$classes[] = 'home';
				$classes[] = 'fullscreen';
	    } else if (is_page_template( 'about.php' ) ) {
				$classes[] = 'post';
	    } {
				return $classes;
	    }
	}

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'underrob' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'underrob_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'underrob_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underrob_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underrob_content_width', 640 );
}
add_action( 'after_setup_theme', 'underrob_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underrob_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underrob' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'underrob_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underrob_scripts() {
	wp_enqueue_style( 'underrob-style', get_stylesheet_uri() );

	wp_enqueue_script( 'underrob-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'underrob-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/*Vendor scripys */
	wp_enqueue_script( 'backgroundVideo', get_template_directory_uri() . '/vendor/js/backgroundVideo.min.js', array(), '20151215', true);
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/vendor/js/isotope.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'cycle', get_template_directory_uri() . '/vendor/js/jquery.cycle.min.js', array(), '20151215', true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/vendor/js/jquery.easing.min.js', array(), '20151215', true );

	wp_enqueue_script( 'gmap', get_template_directory_uri() . '/vendor/js/jquery.gmap.min.js', array('jquery'), true );
	wp_enqueue_script( 'imagereveal', get_template_directory_uri() . '/vendor/js/jquery.imagereveal.min.js', array('jquery'), true );
	wp_enqueue_script( 'lazylinepainter', get_template_directory_uri() . '/vendor/js/jquery.lazylinepainter.min.js', array('jquery'), true );
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/vendor/js/jquery.magnific-popup.min.js', array('jquery'), true );

	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/vendor/js/jquery.mousewheel.min.js', array('jquery'), true );
	wp_enqueue_script( 'tinycarousel', get_template_directory_uri() . '/vendor/js/jquery.tinycarousel.min.js', array('jquery'), true );
	wp_enqueue_script( 'kenburns', get_template_directory_uri() . '/vendor/js/kenburns.min.js', array(), '20151215', true);
	wp_enqueue_script( 'okvideo', get_template_directory_uri() . '/vendor/js/okvideo.min.js', array(), '20151215', true );

	wp_enqueue_script( 'retina', get_template_directory_uri() . '/vendor/js/retina.min.js', array(), '20151215', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/vendor/js/scripts.js', array(), '20151215', true );
	wp_enqueue_script( 'whistles', get_template_directory_uri() . '/vendor/js/whistles.min.js', array('jquery'), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}





}
add_action( 'wp_enqueue_scripts', 'underrob_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
