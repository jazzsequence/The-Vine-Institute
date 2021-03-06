<?php 
/*
	Template Name: Programs Page
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

<div class="programs sidebar">
	<div class="spacer-10"></div>
	<ul>    
	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Programs Box 1') ) : ?>
       <?php endif; ?>      

	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Programs Box 2') ) : ?>
       <?php endif; ?>      

	   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Programs Box 3') ) : ?>
       <?php endif; ?>      
	</ul>
</div>        
<div class="clear"></div>
<?php get_footer(); ?>