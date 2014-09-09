<?php
/**
 * @package WordPress
 * @subpackage amuhlou
 */
/*
Template Name: Project Detail with Lightbox
*/
?>
<?php get_header(); ?>
 
<div id="content" class="wide project">
    
    									
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<?php edit_post_link('Edit this entry.', '<p class="clear">', '</p>'); ?>
    	<div class="projectDetail" id="post-<?php the_ID(); ?>">
    		<h1><?php the_title(); ?></h1>
    		<?php $project_category = get_post_custom_values('project_category'); 
    				if($project_category) {
    					for ($i = 0; $i <= count($project_category) - 1; $i++) {
    						echo '<h2><span>' . $project_category[$i] . '</span></h2>';
    					}
    				} 
    				?>
    		<div class="left">
    			<div>
    				<h3>the goal</h3>
    				<?php $project_excerpt = get_post_custom_values('page_excerpt'); 
    					if($project_excerpt) {
    						for ($i = 0; $i <= count($project_excerpt) - 1; $i++) {
    							echo '<p class="goal">' . $project_excerpt[$i] . '</p>';
    						}
    					} 
    					?>
    			</div>
    			<div>
    				<h3>tools &amp; technologies</h3>
    				<ul>
    				<?php 
    					$tools = get_post_custom_values('tools');
    					if($tools) {
    						for ($i = 0; $i <= count($tools) - 1; $i++) {
    							echo '<li>'. $tools[$i] .'</li>';
    						}
    					}
    				?>
    				</ul>
    			</div>
    			<div>
    				<h3>about the project</h3>
    				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
    			</div>
    		</div>
    		<div class="screenshot">
    			<?php
    			$img = get_post_meta($post->ID, 'image_file', TRUE);
    			$imgSRC = get_bloginfo('template_url') . '/portfolio-images/' . $img . '-lg.jpg';
    			$lbSRC = get_bloginfo('template_url') . '/portfolio-images/' . $img . '-lb.jpg';
  				echo '<a href="'. $lbSRC .'" class="lb"><img src="'. $imgSRC .'" alt="screenshot" /></a>'
  				//echo $imgSRC;
    			?>
    			
    		</div>
    	</div>
    	
    		<div class="bottom">
    			<h2>browse projects by category</h2>
    			<ul>
    				<?php
						$pages = get_pages('child_of=34&sort_column=menu_order&parent=34');
							if($pages){
								foreach($pages as $page) {
									$parent = get_permalink($page);
									echo '<li><a href="'. $parent .'">'. $page->post_title .'</a></li>';
								}
							}
					?>
				</ul>
			</div>		
    	
    	<?php endwhile; endif; ?>
				
    

</div><!--#content-->
		
<?php get_footer(); ?>