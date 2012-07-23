<?php 
/*
	This is the main index template
*/
?>
<?php get_header(); ?>
<div class="content">
	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">				
				<h2 class="the_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <div class="postmetadata">by <?php the_author(); ?>. Posted in <?php the_category(',&nbsp;'); ?> on <?php the_time('F j, Y'); ?></div>              
                <div class="clear"></div>
				<div class="entry">
				<div class="thumbnail"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a></div>
                	<?php the_excerpt(); ?>
				</div>
                <div class="clear"></div>
				<div class="postmetadata">
                <?php the_tags('Tags: ',', ',' | '); ?><?php comments_popup_link('No Comments &#187;', 'One Comment &#187;', '% Comments &#187;'); ?>       
                </div>
				</div>
                <div class="clear"></div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php endif; ?>

</div>
<?php get_sidebar(); ?>          
<div class="clear"></div>
<?php get_footer(); ?>