</div><!-- wrapper -->
</div>
<div class="footer">
   	<div class="bottomnav">
		<div class="container"><?php wp_nav_menu(array("menu" => "Footer")); ?></div>
    </div>
	<div class="credit">
    	<div class="container">&copy; <?php echo date("Y"); ?> <?php bloginfo("title"); ?> | <a href="http://www.arcanepalette.com/" title="arcane palette creative design | artistic website design" target="_blank">website design by arcane palette</a></div>
	</div>
</div>

		<?php do_action("wp_footer"); ?>
</div></body>
</html>