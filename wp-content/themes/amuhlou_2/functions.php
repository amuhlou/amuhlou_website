<?php
/**
 * amuhlou 2 functions and definitions
 *
 * @package amuhlou 2
 */
include 'meta-boxes.php';

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'amuhlou_2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function amuhlou_2_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on amuhlou 2, use a find and replace
	 * to change 'amuhlou_2' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'amuhlou_2', get_template_directory() . '/languages' );

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
	add_image_size( 'hero-thumb', 624, 294, true ); // Hard Crop Mode
	add_image_size('listing-thumb', 331, 248, true);
	add_image_size('listing-thumb-short', 310, 150, true);
	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'amuhlou_2' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	/*add_theme_support( 'custom-background', apply_filters( 'amuhlou_2_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	*/
}
endif; // amuhlou_2_setup
add_action( 'after_setup_theme', 'amuhlou_2_setup' );


/**
 * Register widgetized area and update sidebar with default widgets
 */
function amuhlou_2_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'amuhlou_2' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Portfolio Sidebar', 'amuhlou_2' ),
		'id'            => 'sidebar-portfolio',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Hobbies Sidebar', 'amuhlou_2' ),
		'id'            => 'sidebar-hobbies',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'amuhlou_2_widgets_init' );

/**
 * Register post types
 */
function amuhlou_register_post_types() {
	
	$portfolioLabels = array(
		'name' => 'Portfolio Pieces',
		'singular_name' => 'Portfolio Piece',
		'menu_name' => 'Portfolio',
		'all_items' => 'All Portfolio Pieces',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Portfolio Piece',
		'edit_item' => 'Edit Portfolio Piece',
		'new_item' => 'New Portfolio Piece',
		'view_item' => 'View Portfolio Piece',
		'search_items' => 'Search Portfolio Pieces',
		'not_found' => 'No portfolio pieces found',
		'not_found_in_trash' => 'No portfolio pieces found in Trash',
		'parent_item_colon' => 'Parent Piece'
	);
	
	$portfolioArgs = array(
		'public' => true,
		'publicly_queryable' => true,
		'labels' => $portfolioLabels,
		'capability_type' => 'page',
		'hierarchical' => false,
		'supports' => array('title','editor','excerpt','thumbnail','revisions','page-attributes'),
		'has_archive' => true,
		'taxonomies' => array('portfolio_category'),
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'portfolio/%pcategory%',
			'with_front' => false,
			'feeds' => false,
			'pages' => true
		)
		
	);
	$hobbyLabels = array(
		'name' => 'Hobbies',
		'singular_name' => 'Hobby Item',
		'menu_name' => 'Hobbies',
		'all_items' => 'All Hobby Items',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Hobby Item',
		'edit_item' => 'Edit Hobby Item',
		'new_item' => 'New Hobby Item',
		'view_item' => 'View Hobby Item',
		'search_items' => 'Search Hobby Items',
		'not_found' => 'No hobby items found',
		'not_found_in_trash' => 'No hobby items found in Trash',
		'parent_item_colon' => 'Parent Item'
	);
	$hobbiesArgs = array(
		'public' => true,
		'publicly_queryable' => true,
		'labels' => $hobbyLabels,
		'capability_type' => 'page',
		'hierarchical' => false,
		'supports' => array('title','editor','excerpt','thumbnail','revisions','page-attributes'),
		'has_archive' => true,
		'taxonomies' => array('hobbies_category'),
		'query_var' => true,
		'rewrite' => array(
			'slug' => 'hobbies/%hcategory%',
			'with_front' => false,
			'feeds' => false,
			'pages' => true
		)

		
	);
	
	register_post_type('amuhlou_portfolio', $portfolioArgs);
	register_post_type('amuhlou_hobbies', $hobbiesArgs);
}

add_action('init', 'amuhlou_register_post_types');


function amuhlou_register_rewrite_tag() {
	add_rewrite_tag('%pcategory%', '([^/]*)', 'portfolio_category=');
	add_rewrite_tag('%hcategory%', '([^/]*)', 'hobbies_category=');
}
add_action('init', 'amuhlou_register_rewrite_tag');
//Tell wordpress how to translate rewrite tag
	function amuhlou_filter_post_link( $permalink, $post ) {
		if('amuhlou_portfolio' == get_post_type($post)) {
			$categoryTag = '%pcategory%';
			$replacement = get_the_terms($post->ID, 'portfolio_category');
			
		} else {
			$categoryTag = '%hcategory%';
			$replacement = get_the_terms($post->ID, 'hobbies_category');
		}
		//$slug = reset($replacement)->slug;
		if(!is_array($replacement)) {
			$new_permalink = str_replace($categoryTag, 'uncategorized', $permalink);
		
		} else {
			$slug = reset($replacement);
			$new_permalink = str_replace($categoryTag, $slug->slug, $permalink);
		}
		//$new_permalink = str_replace($categoryTag, $slug->slug, $permalink);
		return $new_permalink;
		
	}

	add_filter( 'post_type_link', 'amuhlou_filter_post_link' , 10, 2 );


/**
 * Register Taxonomies
 */
 function amuhlou_custom_taxonomies() {
	register_taxonomy(
		'portfolio_category',
		'amuhlou_portfolio',
		array(
			'hierarchical' => true,
			'label' => 'Types',
			'query_var' => true,  
           'rewrite' => array('slug' => 'portfolio', 'with_front' => false) 
			
		)
	);
	register_taxonomy(
		'hobbies_category',
		'amuhlou_hobbies',
		array(
			'hierarchical' => true,
			'label' => 'Types',
			'query_var' => true,  
           'rewrite' => array('slug' => 'hobbies', 'with_front' => false) 
			
		)
	);
	
 }
 add_action('init', 'amuhlou_custom_taxonomies');
 /**
 * Rewrite Rules
 */
function wptuts_add_rewrite_rules() {
	/*add_rewrite_rule(
		'portfolio/?$',
		'index.php?post_type=amuhlou_portfolio',
		'top'
	);
	
	add_rewrite_rule(
		'portfolio/(.+)/?$',
		'index.php?portfolio_category=$matches[1]',
		'top'
	);
	*/
}
add_action( 'init', 'wptuts_add_rewrite_rules' );
/**
 * Enqueue scripts and styles
 */
function amuhlou_2_scripts() {
	wp_enqueue_style( 'amuhlou_2-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css' );

	wp_enqueue_script( 'amuhlou_2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'amuhlou_2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'amuhlou_2-fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.js', array(), '2.1.5', true);
	
	wp_enqueue_script( 'amuhlou_2-custom', get_template_directory_uri() . '/js/amuhlou.js', array(), '1.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'amuhlou_2-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'amuhlou_2_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

