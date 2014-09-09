<?php
/**
 * @package WordPress
 * @subpackage amuhlou
 */
/*
Template Name: Photos
*/
?>
<?php get_header(); ?>
 
			<div id="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h1><?php the_title(); ?></h1>
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
						
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						
						</div>
					</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>								<!--
				<div id="slideshow">
					<img src="http://www.amuhlou.com/wp-content/themes/amuhlou/images/slides/slide1.jpg" alt="" title="slide1" width="588" height="441" /> 
    				<img src="http://www.amuhlou.com/wp-content/themes/amuhlou/images/slides/slide2.jpg" alt="" title="slide2" width="588" height="441" /> 
    			
				</div>
				-->			
				<div id="pager"></div>
			</div><!--#content-->
		<?php get_sidebar(); ?>
<?php get_footer(); ?>