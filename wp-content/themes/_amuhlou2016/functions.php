<?php
/**
 * _amuhlou2016 functions and definitions
 *
 * @package _amuhlou2016
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_amuhlou2016_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _amuhlou2016_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_amuhlou2016_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _amuhlou2016, use a find and replace
	 * to change '_amuhlou2016' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_amuhlou2016', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_amuhlou2016' ),
	) );

	add_image_size( 'herosize', 450, 300, array( 'left', 'top' ) );

}
endif; // _amuhlou2016_setup
add_action( 'after_setup_theme', '_amuhlou2016_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _amuhlou2016_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_amuhlou2016' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Banner', '_amuhlou2016' ),
		'id'            => 'hero-banner',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'About Sidebar', '_amuhlou2016' ),
		'id'            => 'about-sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Left', '_amuhlou2016' ),
		'id'            => 'footer-left',
		'before_widget' => '<div class="left col-md-6">',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Right', '_amuhlou2016' ),
		'id'            => 'footer-right',
		'before_widget' => '<div class="right col-md-6">',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', '_amuhlou2016_widgets_init' );

// highlight active custom post page in nav
add_filter( 'nav_menu_css_class', '_amuhlou2016_menu_classes', 10, 2 );
function _amuhlou2016_menu_classes( $classes , $item ){
    if ( get_post_type() == 'portfolio' ) {
        // remove unwanted classes if found
        $classes = str_replace( 'current_page_parent active', '', $classes );
        // find the url you want and add the class you want
        if ( $item->url == '/portfolio' ) {
            $classes = str_replace( 'menu-item', 'menu-item current_page_parent active', $classes );
        }
    }
    return $classes;
}

/**
 * Enqueue scripts and styles
 */
function _amuhlou2016_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_amuhlou2016-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_amuhlou2016-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_amuhlou2016-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load _amuhlou2016 styles
	wp_enqueue_style( '_amuhlou2016-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_amuhlou2016-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_amuhlou2016-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_amuhlou2016-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_amuhlou2016-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_amuhlou2016_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';

function _amuhlou2016_add_google_fonts() {
	wp_enqueue_style( '_amuhlou2016-add-google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic,600,600italic,700,700italic', false ); 
}

add_action( 'wp_enqueue_scripts', '_amuhlou2016_add_google_fonts' );
