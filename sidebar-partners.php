<?php 
/*
	this is the partners page sidebar
*/
?>
<div class="sidebar">
 	<ul>
	 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Partners Page Sidebar')) : endif; ?>
     </ul>
	<div class="spacer-10"></div>
</div>