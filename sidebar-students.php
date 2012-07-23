<?php 
/*
	this is the students page sidebar
*/
?>
<div class="sidebar">
  	<ul>
	 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Students Page Sidebar')) : endif; ?>
     </ul>
<div class="spacer-10"></div>
</div>
<div class="sidebar">
	<ul>
	<h2>Upcoming Events</h2>
         <?php SidebarEventsList(); ?>
	</ul>
</div>