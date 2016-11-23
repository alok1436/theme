<?php 
/**
 * Restorent Theme's functions and definitions
 *
 * @package Food-Launge
 * @since Food-Launge 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if(!defined( 'ABSPATH' ) ) // Or some other WordPress constant
     exit;
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
define( 'THEME_REQUIRED_PHP_VERSION', '5.6.0' );
define( 'THEME_REQUIRED_MySQL_VERSION', '5.5.0' );
define( 'THEME_REQUIRED_WP_VERSION', '4.0.0' );
add_action( 'after_switch_theme', 'check_theme_setup' );
function check_theme_setup(){
  // Compare versions.
  global $wpdb;
  $php = version_compare(phpversion(), THEME_REQUIRED_PHP_VERSION, '<');
  $MySQL = version_compare( $wpdb->db_version(), THEME_REQUIRED_MySQL_VERSION, '<');
  $Wp = version_compare( $GLOBALS['wp_version'], THEME_REQUIRED_WP_VERSION, '<' );
  if ( $php||$Wp||$MySQL ) :
  // Theme not activated info message.
  add_action( 'admin_notices', 'restotheme_admin_notice' );
  // Switch back to previous theme.
  switch_theme( $old_theme->stylesheet );
    return false;
  endif;
}
function restotheme_admin_notice() {
  global $wpdb;
  ?>
    <div class="update-nag is-dismissible">
      <?php _e( 'You need to update your PHP, MySQL, Wordpress version to run this Theme.', 'text-domain' ); ?> <br />
      <?php _e( 'Current PHP version is:', 'text-domain' ) ?> <strong><?php echo phpversion(); ?></strong>, <?php _e( 'and required is', 'text-domain' ) ?> <strong><?php echo THEME_REQUIRED_PHP_VERSION; ?></strong><br />
      <?php _e( 'Current MySQL version is:', 'text-domain' ) ?> <strong><?php echo $wpdb->db_version(); ?></strong>, <?php _e( 'and required is', 'text-domain' ) ?> <strong><?php echo THEME_REQUIRED_MySQL_VERSION; ?></strong><br />
      <?php _e( 'Current Wordpress version is:', 'text-domain' ) ?> <strong><?php echo $GLOBALS['wp_version']; ?></strong>, <?php _e( 'and required is', 'text-domain' ) ?> <strong><?php echo THEME_REQUIRED_WP_VERSION; ?></strong><br />
    </div>
  <?php
}
if ( ! function_exists( 'restorent_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function restorent_theme_setup() {
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'restorent_theme', get_template_directory() . '/languages' );
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'restorent_theme' ),
        'secondary' => __('Secondary Menu', 'restorent_theme' )
    ) );
	/**
	* Add Page Title
	*/
	add_theme_support( 'title-tag' );
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'restorent_theme_setup' );
// Add scripts and stylesheets
function restorent_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '3.3.6' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', '4.7.0' );
	wp_enqueue_style( 'theme-css', get_template_directory_uri().'/style.css');

	wp_enqueue_script( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'restorent_scripts' );
show_admin_bar( false );
/* Add base functions */
require( get_template_directory() . '/inc/classes/base.class.php' );
/* Add ReduxFramework. */
if(!class_exists('ReduxFramework')){
    require( get_template_directory() . '/inc/integration/ReduxCore/framework.php' );
}
/* Add theme options. */
require( get_template_directory() . '/inc/integration/options/functions.php' );
/* Add Template functions */
require( get_template_directory() . '/inc/template.functions.php' );
