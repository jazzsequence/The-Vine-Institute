<?php 
/*
	This is the default page template
*/
?>
<?php get_header(); ?>
<div class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 				<div class="post" id="post-<?php the_ID(); ?>">				

				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
				</div>
    <div class="singlemeta">
    <p><?php edit_post_link('Edit this entry','','.'); ?></p></div>
    </div>
    	<div class="clear"></div>
	</div>

        <?php endwhile; endif; ?>
<?php 
	 if (is_page('About') || $post ->post_parent == '2') { get_sidebar('about'); }
	 if (is_page('Students') || $post->post_parent == '12') { get_sidebar('students'); }
	 if (is_page('Partners') || $post->post_parent == '16') {get_sidebar('partners'); }
	 else {	get_sidebar(); }
?>          
<div class="clear"></div>
<?php get_footer(); ?>