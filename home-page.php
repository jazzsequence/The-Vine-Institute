<?php 
/*
	Template Name: Home Page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />	
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css' />   
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

<div class="header">
	<div class="siteinfo">
        <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
    </div>       
    <div class="search"><?php get_search_form(); ?></div>
</div>

<div class="clear"></div>

<div class="content">

	    <?php if (function_exists ('dynamic_content_gallery')){
				dynamic_content_gallery();
		};?>
        
	<div class="spacer-10"></div>

	<div class="column homebox">
		  <ul>
        	 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Home Page Box') ) : ?>
             <?php endif; ?>        
          </ul>   
	</div>        
	<div class="column homebox">
		  <ul>
        	 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Middle Home Page Box') ) : ?>
             <?php endif; ?>        
          </ul>   
	</div>              
	<div class="column homebox last">
		  <ul>
        	 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Home Page Box') ) : ?>
             <?php endif; ?>        
          </ul>   
	</div>            
</div>
<?php get_sidebar(); ?>          
<div class="clear"></div>
<?php get_footer(); ?>