<?php
/**
 * @package WordPress
 * @subpackage amuhlou
 */
/*
Template Name: Portfolio Category
*/
?>
<?php get_header(); ?>
 
			<div id="content" class="projCat">
				
													
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h1><?php the_title(); ?></h1>
						
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>		
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							
							<?php
								
								// Get a list of pages
								$children = get_children('post_type=page&post_parent='. $post->ID .'');
								
								// Loop over each page
								foreach ($children as $child) {
								echo '<div class="row">';
								// Get the values from a custom field called 'project_category' on a page by page basis
								$custom_fields = get_post_custom_values('project_category', $child->ID);
								$permalink = get_permalink($child);
								$img = get_post_meta($child->ID, 'image_file', TRUE);
  								$excerpt = get_post_meta($child->ID, 'page_excerpt', TRUE);
  								$imgSRC = get_bloginfo('template_url') . '/portfolio-images/' . $img . '-th.gif';
								// Print to screen
								echo '<div class="thumb"><a href="' . $permalink . '"><img src="' . $imgSRC . '" alt="screenshot of ' . $child->post_title . '" /></a></div>';
								
								echo '<div class="info"><h4><a href="'. $permalink .'">'. $child->post_title . '</a></h4>'. $excerpt .'</div>';
								echo '</div>';
								}
								
							?>
						
					</div>
					<div class="bottom">
    					<h2>want more?</h2>
    					<p>Check out my <?php
    							$me = get_the_ID();
								$pages = get_pages('child_of=34&sort_column=menu_order&parent=34&exclude='. $me .'');
									if($pages){
										foreach($pages as $page) {
											$parent = get_permalink($page);
											echo '<a href="'. $parent .'">'. $page->post_title .'</a>';
										}
									}
							?> projects next!</p>
    					
					</div>
					<?php endwhile; endif; ?>
					
			
			</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>