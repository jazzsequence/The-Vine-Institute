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
        'before_title' => '<div class="homebox-title"><h2 class="widgettitle">',
        'after_title' => '</h2></div>'
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