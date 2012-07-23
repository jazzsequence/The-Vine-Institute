<?php 
/*
	this is the about page sidebar
*/
?>
<div class="sidebar">
 	<ul>
	 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('About Page Sidebar')) : endif; ?>
        </ul>
        <div class="spacer-10"></div>
        <ul class="programs">
	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Programs Box 2') ) : ?>
       <?php endif; ?>      

	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Programs Box 3') ) : ?>
      <?php endif; ?>  
      </ul> 
	<div class="spacer-10"></div>
</div>