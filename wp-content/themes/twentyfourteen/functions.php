<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see twentyfourteen_content_width()
 *
 * @since Twenty Fourteen 1.0
 */

function your_last_login($login) {
    global $user_ID;
    $user = get_userdatabylogin($login);
    update_usermeta($user->ID, 'last_login', current_time('mysql'));
}
add_action('wp_login','your_last_login');
function get_last_login($user_id) {
    $last_login = get_user_meta($user_id, 'last_login', true);
    $date_format = get_option('date_format') . ' ' . get_option('time_format');
    $the_last_login = mysql2date($date_format, $last_login, false);
    echo $the_last_login;
}
 
 
 
 
 
 
 
 
 
 
 
 
 
add_action('init', 'my_custom_init');
function my_custom_init() {
	add_post_type_support( 'post', 'excerpt' );
}



add_action('admin_init', 'reg_tax');
function reg_tax() {
      register_taxonomy_for_object_type('category', 'page');
      add_post_type_support('page', 'category');
}
add_filter('main_menu' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $menu_item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'menuCurrent';
     }
     return $classes;
}

include_once("inc/search.php");
include_once("inc/sort.php");
include_once("inc/lastest-ads.php");
include_once("inc/feature-ads.php");
include_once("inc/popular-ads.php");
function register_new_widget() {
    register_widget('My_theme_widget_search');
     register_widget('My_theme_widget_sort');
      register_widget('My_theme_widget_lastest_ads');
      register_widget('My_theme_widget_feature_ads');
      register_widget('My_theme_widget_popular_ads');
}
add_action( 'widgets_init', 'register_new_widget' ); 
function bones_register_sidebars() {
     register_sidebar( array(
    'name' => __( 'Header Search', 'Header_Search' ),
    'id' => 'heard_search',
    'description' => 'Heard Search tool',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
      register_sidebar( array(
    'name' => __( 'Header Sort', 'Header_Sort' ),
    'id' => 'header_sort',
    'description' => 'Heard Sort tool',
    'before_widget' => '<div style="position:absolute; left:10px; top:8px;">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Ads Left', 'Ads_Left' ),
    'id' => 'ads_left',
    'description' => 'Ads left location',
    'before_widget' => '<div id="%1$s" class="outbanner">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Ads Right', 'Ads_Right' ),
    'id' => 'ads_right',
    'description' => 'Ads right location',
    'before_widget' => '<div id="%1$s" class="outbanner">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Ads Top', 'Ads_top' ),
    'id' => 'ads_top',
    'description' => 'Ads top location',
    'before_widget' => '<div style="padding-bottom:1px">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Ads Content', 'Ads_Content' ),
    'id' => 'ads_content',
    'description' => 'Ads content location',
    'before_widget' => '<div align="center" style="margin-bottom:1px">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
      register_sidebar( array(
    'name' => __( 'Ads Content1', 'Ads_Content' ),
    'id' => 'ads_content1',
    'description' => 'Ads content location',
    'before_widget' => '<div align="center" style="margin-bottom:1px">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Ads Sidebar Left', 'Ads_Sidebar_Left' ),
    'id' => 'ads_sidebar_left',
    'description' => 'Ads left location',
    'before_widget' => '<div style="margin-bottom:3px; border:none">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Ads Sidebar Right', 'Ads_Sidebar_Right' ),
    'id' => 'ads_sidebar_right',
    'description' => 'Ads sidebar right location',
    'before_widget' => '<div style="margin-bottom:3px; border:none">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
    register_sidebar( array(
    'name' => __( 'Fixed float', 'fixedfloat' ),
    'id' => 'fixedfloat',
    'description' => 'Ads  location',
    'before_widget' => '<div align="center" style="clear:both; padding-bottom:5px">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
    register_sidebar( array(
    'name' => __( 'Latest Ads', 'Lastest Ads' ),
    'id' => 'latest-ads',
    'description' => 'Ads  location',
    'before_widget' => '<div align="center" style="clear:both; padding-bottom:5px">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
     register_sidebar( array(
    'name' => __( 'Feature Ads', 'Feature Lastest Ads' ),
    'id' => 'feature-ads',
    'description' => 'Feature Ads',
    'before_widget' => '<div style="padding:5px 0px; border-bottom:1px solid #dee1ff;" class="specialads_row">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
    register_sidebar( array(
    'name' => __( 'Popular Ads', 'popular Ads' ),
    'id' => 'popular-ads',
    'description' => 'Popular Ads',
    'before_widget' => '<div style="padding:5px 0px; border-bottom:1px solid #dee1ff;" class="specialads_row">',
    'after_widget' => "</div>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
    register_sidebar( array(
    'name' => __( 'Like face', 'Like face' ),
    'id' => 'like_face',
    'description' => 'Like face',
    'before_widget' => '<li style="padding:3px 0px 0px 15px">',
    'after_widget' => "</li>",
    'before_title' => '<div class="title">',
    'after_title' => '</div>',
    ));
}
 add_action( 'widgets_init', 'bones_register_sidebars' ); 
 
 
 function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
  register_nav_menus(
    array(
      'left-menu' => __( 'Left Menu' )
    )
  );
    register_nav_menus(
    array(
      'location-menu' => __( 'Location Menu' )
    )
  );
      register_nav_menus(
    array(
      'top-left-menu' => __( 'Top Left Menu' )
    )
    );
       register_nav_menus(
    array(
      'top-right-menu' => __( 'Top Right Menu' )
    )
    );
      register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' )
    )
    );
  
  

}
add_action( 'init', 'register_my_menus' );
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

/**
 * Twenty Fourteen only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfourteen_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_setup() {

	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'twentyfourteen' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', twentyfourteen_font_url() ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'twentyfourteen_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // twentyfourteen_setup
add_action( 'after_setup_theme', 'twentyfourteen_setup' );

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'twentyfourteen_content_width' );

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return array An array of WP_Post objects.
 */
function twentyfourteen_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'twentyfourteen_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return bool Whether there are featured posts.
 */
function twentyfourteen_has_featured_posts() {
	return ! is_paged() && (bool) twentyfourteen_get_featured_posts();
}

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_widgets_init() {
	require get_template_directory() . '/inc/widgets.php';
	register_widget( 'Twenty_Fourteen_Ephemera_Widget' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'twentyfourteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'twentyfourteen_widgets_init' );

/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function twentyfourteen_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'twentyfourteen' ) ) {
		$font_url = add_query_arg( 'family', urlencode( 'Lato:300,400,700,900,300italic,400italic,700italic' ), "//fonts.googleapis.com/css" );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_scripts() {
	// Add Lato font, used in the main stylesheet.
	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfourteen-style', get_stylesheet_uri(), array( 'genericons' ) );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfourteen-style', 'genericons' ), '20131205' );
	wp_style_add_data( 'twentyfourteen-ie', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		wp_enqueue_script( 'twentyfourteen-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
		wp_localize_script( 'twentyfourteen-slider', 'featuredSliderDefaults', array(
			'prevText' => __( 'Previous', 'twentyfourteen' ),
			'nextText' => __( 'Next', 'twentyfourteen' )
		) );
	}

	wp_enqueue_script( 'twentyfourteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20131209', true );
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_admin_fonts() {
	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'twentyfourteen_admin_fonts' );

if ( ! function_exists( 'twentyfourteen_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_the_attached_image() {
	$post                = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'twentyfourteen_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

if ( ! function_exists( 'twentyfourteen_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) );

	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );

		// Move on if user has not published a post (yet).
		if ( ! $post_count ) {
			continue;
		}
	?>

	<div class="contributor">
		<div class="contributor-info">
			<div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
			<div class="contributor-summary">
				<h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
				<p class="contributor-bio">
					<?php echo get_the_author_meta( 'description', $contributor_id ); ?>
				</p>
				<a class="contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
					<?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>
				</a>
			</div><!-- .contributor-summary -->
		</div><!-- .contributor-info -->
	</div><!-- .contributor -->

	<?php
	endforeach;
}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentyfourteen_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
		$classes[] = 'full-width';
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'footer-widgets';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}

	return $classes;
}
add_filter( 'body_class', 'twentyfourteen_body_classes' );

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function twentyfourteen_post_classes( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'twentyfourteen_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function twentyfourteen_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'twentyfourteen_wp_title', 10, 2 );

// Implement Custom Header features.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Theme Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}


function registration_process_hook() {
	if (isset($_POST['adduser']) && isset($_POST['add-nonce']) && wp_verify_nonce($_POST['add-nonce'], 'add-user')) {
	
		// die if the nonce fails
		if ( !wp_verify_nonce($_POST['add-nonce'],'add-user') ) {
			wp_die('Sorry! That was secure, guess you\'re cheatin huh!');
		} else {
			// auto generate a password
			$user_pass = wp_generate_password();
            
			// setup new user
			$userdata = array(
				'user_pass' => $user_pass,
				'user_login' => esc_attr( $_POST['user_name'] ),
				'user_email' => esc_attr( $_POST['email'] ),
				'role' => get_option( 'default_role' ),
			);
			// setup some error checks
			if ( !$userdata['user_login'] )
				$error = '<script>alert("A username is required for registration")</script>';
			elseif ( username_exists($userdata['user_login']) )
				$error = 'Sorry, that username already exists!';
			elseif ( !is_email($userdata['user_email'], true) )
				$error = 'You must enter a valid email address.';
			elseif ( email_exists($userdata['user_email']) )
				$error = 'Sorry, that email address is already used!';
			// setup new users and send notification
			else{
				$new_user = wp_insert_user( $userdata );
				wp_new_user_notification($new_user, $user_pass);
			}
            add_user_meta( $new_user, 'phone', $_POST['phone'], $unique );// Them filed Phone có name = Phone, meta_key=phone
            add_user_meta( $new_user, 'location', $_POST['cb_cityprovinces'], $unique );
		}
	}
	if ( $new_user ) : ?>

	<p class="alert"><!-- create and alert message to show successful registration -->
	<?php
		$user = get_user_by('id',$new_user);
  
		echo 'Thank you for registering ' . $user->user_login;
		echo '<br/>Please check your email address. That\'s where you\'ll recieve your login password.<br/> (Be sure to check your spam folder)';
	?>
	</p>
	
	<?php else : ?>
	
		<?php if ( $error ) : ?>
			<p class="error"><!-- echo errors if users fails -->
				<?php echo $error; ?>
			</p>
		<?php endif; ?>
	
	<?php endif;

}
add_action('process_customer_registration_form', 'registration_process_hook');


