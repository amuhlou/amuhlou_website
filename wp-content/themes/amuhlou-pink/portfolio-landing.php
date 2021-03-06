<?php
/**
 * @package WordPress
 * @subpackage amuhlou
 */
/*
Template Name: Portfolio Landing Page
*/
?>
<?php get_header(); ?>
 
			<div id="content">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div class="post" id="post-<?php the_ID(); ?>">
						
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
						
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							
						</div>
					</div>
					<div id="tabs">
					<!--List only top-level child pages of this page-->
					<h2>featured projects</h2>
					<ul class="catNav">
					<?php
						$pages = get_pages('child_of='.$post->ID.'&sort_column=menu_order&parent='.$post->ID.'');
						if($pages){
							foreach($pages as $page) {
								echo '<li><a href="#p'. $page->ID .'">'. $page->post_title .'</a></li>';
							}
						}
					?>
					</ul>
				<?php endwhile; endif; ?>
				<div id="p101">
					<!--Find Front-End Development Posts-->
					 <?php $fed_posts = new WP_Query('post_type=page&meta_value=Front-End Development');
					 		
  							while ($fed_posts->have_posts()) : $fed_posts->the_post();
  								//test to see if the front-end development post is also a featured post
  								$fed = $post->ID;
  								$featured = get_post_meta($fed, 'featured_project', TRUE);
  								$img = get_post_meta($fed, 'image_file', TRUE);
  								$excerpt = get_post_meta($fed, 'page_excerpt', TRUE);
  								$imgSRC = get_bloginfo('template_url') . '/portfolio-images/' . $img . '-th.gif';
  								$permalink = get_permalink($post);
  								$parent = get_permalink($post->post_parent);
  								
  							?>
  								<?php 
  								if($featured == 'is_featured') {
  								?>
							<div class="row">
							    <div class="thumb">
							    	<?php if($thumb !== '') {
							    		echo '<a href="'. $permalink .'"><img src="'. $imgSRC . '" alt="' . $img . ' thumbnail" /></a>';
							    	}
							    ?>
							    </div>
							    <div class="info">
							    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							   		
							   	 	 <?php if($excerpt !== '') {
							   	 	 	echo '<p>' . $excerpt . '</p>';
							   	 	 } else {
							   	 	 	echo the_content('<p class="serif">Read the rest of this page &raquo;</p>');
							   	 	 }
							   	 	 ?>
								</div>
								
							</div>
						<?php } ?>
						<?php endwhile; ?>
						<?php echo '<p class="permalink"><a href="'. $parent .'">View All Front-End Development</a></p>' ?>
				</div>		
			
				<div id="p306">
					<!--Find Digital Imaging Posts-->
					 <?php $di_posts = new WP_Query('post_type=page&meta_value=Digital Media');
					 		
  							while ($di_posts->have_posts()) : $di_posts->the_post();
  								$di = $post->ID;
  								$featured = get_post_meta($di, 'featured_project', TRUE);
  								$img = get_post_meta($di, 'image_file', TRUE);
  								$excerpt = get_post_meta($di, 'page_excerpt', TRUE);
  								$imgSRC = get_bloginfo('template_url') . '/portfolio-images/' . $img . '-th.gif';
  								$permalink = get_permalink($post);
  								$parent = get_permalink($post->post_parent);
  								if($featured == 'is_featured') {
  							?>
							<div class="row">
							    <div class="thumb">
							    	<?php if($thumb !== '') {
							    		echo '<a href="'. $permalink .'"><img src="'. $imgSRC . '" alt="' . $img . ' thumbnail" /></a>';
							    	}
							   		 ?>
							    </div>
							    <div class="info">
							    	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							   		
							   	 	 <?php if($excerpt !== '') {
							   	 	 	echo '<p>' . $excerpt . '</p>';
							   	 	 } else {
							   	 	 	echo the_content('<p class="serif">Read the rest of this page &raquo;</p>');
							   	 	 }
							   	 	 ?>
								</div>
								
							</div>
						<?php } ?>
						<?php endwhile; ?>	
						<?php echo '<p class="permalink"><a href="'. $parent .'">View All Digital Media</a></p>' ?>
				</div>
				
				</div><!--#tabs-->
			</div><!--#content-->
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>