<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />	
    <title><?php bloginfo('name'); ?> | <?php 
	$category = get_the_category();
	if (is_home () ) { bloginfo('description'); }
	elseif ( is_category() ) { single_cat_title(); }
	elseif (is_single() ) { echo $category[0]->cat_name . ' | '; single_post_title();}
	elseif (is_page() ) { single_post_title();}
	else { wp_title('',true); } ?></title>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css' />   
    <?php if ((is_page('Programs') || is_page('About'))) { ?>
	<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>    
    <? } ?> 
	<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/print.css" type="text/css" media="print" /> 
    <!--[if lt IE 8]>
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  	<?php wp_get_archives('type=monthly&format=link'); ?>
	<!-- this activates Twitter @anywhere hovercards -->
  <script src="http://platform.twitter.com/anywhere.js?id=3O4tZx3uFiEPp5fk2QGq1A&v=1"></script>    
	<script type="text/javascript">
      twttr.anywhere(function (T) {
        T.hovercards();
        T("a#VineInstitute").hovercards({
          username: function(node) {
            return node.id;
          }
        });
      });
    </script>

	<?php wp_head(); ?>
    
    
    
</head>
<body>
<div class="container">
		<div class="navbar">
			<?php wp_nav_menu(array('menu' => 'Header')); ?>
	    </div>  
	<div class="clear"></div>        

<?php if (is_page('Home')) { ?>
<div class="header">
	<div class="siteinfo">
        <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
    </div>       
    <div class="search"><?php get_search_form(); ?></div>
</div>
<?php } if ((is_home()) || (is_single())) { ?>
<div class="header">
	<div class="siteinfo">
        <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
    </div>       
    <div class="search"><?php get_search_form(); ?></div>
</div>

<?php } else { ?>
<div class="alt-header">
    <div class="search"><?php get_search_form(); ?></div>
        <h1 class="page_title"><?php the_title(); ?></h1>
</div>
<?php } ?>

<div class="clear"></div>