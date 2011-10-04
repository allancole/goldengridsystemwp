<?php
/**
 * GGS functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, autofocus_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 */

/**
 * Define Constants
 */

// Get Theme and Child Theme Data
// Credits: Joern Kretzschmar & Thematic http://themeshaper.com/thematic
$themeData = get_theme_data(TEMPLATEPATH . '/style.css');
$version = trim($themeData['Version']);
if(!$version)
    $version = "unknown";

$childeThemeData = get_theme_data(STYLESHEETPATH . '/style.css');
$templateversion = trim($childeThemeData['Version']);
if(!$templateversion)
    $templateversion = "unknown";


// Set theme constants
define('THEMENAME', $themeData['Title']);
define('THEMEAUTHOR', $themeData['Author']);
define('THEMEURI', $themeData['URI']);
define('VERSION', $version);

// Set child theme constants
define('TEMPLATENAME', $childeThemeData['Title']);
define('TEMPLATEAUTHOR', $childeThemeData['Author']);
define('TEMPLATEURI', $childeThemeData['URI']);
define('TEMPLATEVERSION', $templateversion);

// Path constants
define('TEMPLATE_DIR', get_bloginfo('template_directory'));
define('STYLESHEET_DIR', get_bloginfo('stylesheet_directory'));
define('STYLEURL', get_bloginfo('stylesheet_url'));



/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 * If you're building a theme based on The GGS Theme, use a find and replace
 * to change 'ggstheme' to the name of your theme in all the template files
 */
load_theme_textdomain( 'ggstheme', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/**
 * This theme uses wp_nav_menu() in one location.
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'ggstheme' ),
) );

/**
 * Add default posts and comments RSS feed links to head
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function ggstheme_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'ggstheme_page_menu_args' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ggstheme_widgets_init() {

	// Primary
	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'ggstheme' ),
		'id' => 'primary-sidebar-1',
		'description' => __( 'The main sidebar for the right side column', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Secondary
	register_sidebar( array(
		'name' => __( 'Secondary Sidebar Area One', 'ggstheme' ),
		'id' => 'secondary-sidebar-1',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Secondary Sidebar Area Two', 'ggstheme' ),
		'id' => 'secondary-sidebar-2',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Tertiary
	register_sidebar( array(
		'name' => __( 'Tertiary Sidebar Area One', 'ggstheme' ),
		'id' => 'tertiary-sidebar-1',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Tertiary Sidebar Area Two', 'ggstheme' ),
		'id' => 'tertiary-sidebar-2',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Tertiary Sidebar Area Three', 'ggstheme' ),
		'id' => 'tertiary-sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Quaternary
	register_sidebar( array(
		'name' => __( 'Quaternary Sidebar Area One', 'ggstheme' ),
		'id' => 'quaternary-sidebar-1',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Quaternary Sidebar Area Two', 'ggstheme' ),
		'id' => 'quaternary-sidebar-2',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Quaternary Sidebar Area Three', 'ggstheme' ),
		'id' => 'quaternary-sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Quaternary Sidebar Area Four', 'ggstheme' ),
		'id' => 'quaternary-sidebar-4',
		'description' => __( 'An optional widget area for your site footer', 'ggstheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'init', 'ggstheme_widgets_init' );


/**
 *	Add custom styles on NON-admin pages.
 */
function ggs_enqueue_styles() {
	global $post, $shortname; 

	if ( !is_admin() ) { // Is this necessary?
		// Load LESS css
		// wp_enqueue_style('ggs', TEMPLATE_DIR . '/less/style.less', null, '', 'screen, projection');
		wp_enqueue_style('ggs-base', TEMPLATE_DIR . '/css/style.ggs.css', null, '', 'screen, projection');
		wp_enqueue_style('ggs-theme', TEMPLATE_DIR . '/style.css', null, '', 'screen, projection');
	}
}
add_action('wp_print_styles', 'ggs_enqueue_styles');

/**
 *	Add custom JS & jQuery scripts on NON-admin pages.
 */
function ggs_enqueue_scripts() {
	global $post, $shortname; 

	if ( !is_admin() ) { // Is this necessary?
		// Load LESS css JS
		// wp_enqueue_script('less', TEMPLATE_DIR . '/js/less-1.1.3.min.js', array('jquery'), '1.1.3' );
	
		// Load GGS overlay script is user is logged in as admin
		if ( is_user_logged_in() && (current_user_can('edit_others_posts') == TRUE) ) { 
			wp_enqueue_script('ggs', TEMPLATE_DIR . '/js/ggs.js', array('jquery'), '1.01' );
		}
	}
}
add_action('wp_print_scripts', 'ggs_enqueue_scripts');

/**
 *	Add LESS styles.
 */
function enqueue_less_styles($tag, $handle) {
    global $wp_styles;
    $match_pattern = '/\.less$/U';
    if ( preg_match( $match_pattern, $wp_styles->registered[$handle]->src ) ) {
        $handle = $wp_styles->registered[$handle]->handle;
        $media = $wp_styles->registered[$handle]->args;
        $href = $wp_styles->registered[$handle]->src . '?ver=' . $wp_styles->registered[$handle]->ver;
        $rel = isset($wp_styles->registered[$handle]->extra['alt']) && $wp_styles->registered[$handle]->extra['alt'] ? 'alternate stylesheet' : 'stylesheet/less';
        $title = isset($wp_styles->registered[$handle]->extra['title']) ? "title='" . esc_attr( $wp_styles->registered[$handle]->extra['title'] ) . "'" : '';

        $tag = "<link rel='$rel' id='$handle' $title href='$href' type='text/less' media='$media' />\n";
    }
    return $tag;
}
// add_filter( 'style_loader_tag', 'enqueue_less_styles', 5, 2);


