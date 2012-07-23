<?php 
/*
	This is the 404 error template
*/
?>
<?php get_header(); ?>
<div class="content">
<div class="the_post">
				<h2 class="the_post_title">The page you were looking for could not be found</h2>

<div class="the_single_post">
The page you were looking for is missing or doesn't exist.  Here are some links to help you back on your way.
</div>
<div class="spacer-10"></div>
<div class="notfound">

	<div class="threecolumn">
        <h2>Archives by Month</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
	</div>
                
    <div class="threecolumn">    
        <h2>Archives by Subject</h2>
            <ul>
                 <?php wp_list_categories( 'title_li=' ); ?>
            </ul>
	</div>            
	
    <div class="threecolumn last">            
        <h2>Links</h2>
            <ul>
                <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
            </ul>
	</div>            

</div>
</div>
	<div class="spacer-10"></div>		
</div>
<?php get_sidebar(); ?>          
<div class="clear"></div>
<?php get_footer(); ?>