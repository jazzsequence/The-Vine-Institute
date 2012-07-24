<?php
if ( function_exists('register_sidebar') )
  register_sidebar(array(
		'name' => 'Default Sidebar',
		'description' => 'This is the main sidebar for the site',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ));
	register_sidebar(array(
		'name' => 'Left Home Page Box',
		'description' => 'This is the left column on the home page.',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Middle Home Page Box',
		'description' => 'This is the middle column on the home page.',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="homebox-title"><h2 class="widgettitle">',
        'after_title' => '</h2></div>'
	));	
	register_sidebar(array(
		'name' => 'Right Home Page Box',
		'description' => 'This is the right column on the home page.',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="homebox-title"><h2 class="widgettitle">',
        'after_title' => '</h2></div>'
	));	
	register_sidebar(array(
		'name' => 'Programs Box 1',
		'description' => 'This is the top box on the Programs page (e.g. "Why should I consider the Vine Institute?").',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="reenie-beanie">',
        'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Programs Box 2',
		'description' => 'This is the middle box on the Programs page (e.g. "How do I get started?").',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="reenie-beanie">',
        'after_title' => '</h2>'
	));
	register_sidebar(array(
		'name' => 'Programs Box 3',
		'description' => 'This is the bottom box on the Programs page (e.g. "Finances").',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="reenie-beanie">',
        'after_title' => '</h2>'
	));		
	register_sidebar(array(
		'name' => 'About Page Sidebar',
		'description' => 'This is the sidebar for the About page',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ));	
	register_sidebar(array(
		'name' => 'Students Page Sidebar',
		'description' => 'This is the sidebar for the Students page',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ));	
	register_sidebar(array(
		'name' => 'Partners Page Sidebar',
		'description' => 'This is the sidebar for the Programs page',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ));		
	register_sidebar(array(
		'name' => 'Newsletters',
		'description' => 'This sidebar is for newsletters and appears on the Events page.',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ));		
	register_sidebar(array(
		'name' => 'Press Releases',
		'description' => 'This sidebar is for Press Releases and appears on the Events Page.',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ));				


/* include Landing Sites by The undersigned */
/* http://theundersigned.net */

include (TEMPLATEPATH.'/plugins/landingsites.php');

/* include category posts widget plugin */
/* because there's no point in reinventing the wheel */
// by James Lao http://jameslao.com/
include (TEMPLATEPATH.'/plugins/cat-posts.php');

// clear shortcode
// a quick shortcode that clears floats
function clear() {
	return '<div class="clear"></div>';
}
add_shortcode('clear','clear');

// spacer shortcode
// for Liz :)
function spacer() {
        return '<div style="height:15px;"></div>';
}
add_shortcode('spacer','spacer');

// post thumbnail support
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 125, 125 ); // 175 pixels wide by 175 pixels tall, box resize mode

// WordPress 3.0 nav menu support
    add_theme_support('nav-menus');
	
// this changes the default [...] to be a read more hyperlink
function new_excerpt_more($more) {
	return '...&nbsp;(<a href="'. get_permalink($post->ID) . '">' . 'read more' . '</a>)';
}
add_filter('excerpt_more', 'new_excerpt_more');	

// this changes the default excerpt length to longer excerpts
function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');

function vine_post_type_featured() {
    $labels = array(
		'name' => _x('Featured Content', 'post type general name'),
		'singular_name' => _x('Featured Content', 'post type singular name'),
		'add_new' => _x('Add New', 'features'),
		'add_new_item' => __('Add New Feature'),
		'edit_item' => __('Edit Feature'),
		'edit' => _x('Edit', 'features'),
		'new_item' => __('New Feature'),
		'view_item' => __('View Feature'),
		'search_items' => __('Search Features'),
		'not_found' =>  __('No features found'),
		'not_found_in_trash' => __('No features found in Trash'),
		'view' =>  __('View Feature'),
		'parent_item_colon' => ''	
  );
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array("slug" => "feature"),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array( 'title','editor' ),	
		'exclude_from_search' => true,
		'menu_position' => 5,
  );

  register_post_type( 'vine_featured', $args );
}

add_action( 'after_setup_theme', 'vine_post_type_featured', 0 );

add_action( 'admin_head', 'grapes_icon' );
function grapes_icon() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-vine_featured .wp-menu-image {
            background: url(<?php echo get_template_directory_uri(); ?>/images/grapes-sm.png) no-repeat 6px -17px !important;
        }
	#menu-posts-vine_featured:hover .wp-menu-image, #menu-posts-vine_featured.wp-has-current-submenu .wp-menu-image {
			background: url(<?php echo get_template_directory_uri(); ?>/images/grapes-sm.png) no-repeat 6px 7px !important;
        }
    </style>
<?php
	} 

add_action('admin_head', 'grapes_header');
function grapes_header() {
        global $post_type;
	?>
	<style>
	<?php if (($_GET['post_type'] == 'vine_featured') || ($post_type == 'vine_featured')) : ?>
	#icon-edit { background: url(<?php echo get_template_directory_uri(); ?>/images/grapes-big.png) no-repeat!important; }		
	<?php endif; ?>
        </style>
    <?php }

?>