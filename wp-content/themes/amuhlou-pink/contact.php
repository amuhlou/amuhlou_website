<?php
/**
 * @package WordPress
 * @subpackage amuhlou
 */
/*
Template Name: Contact Page With Email Form
*/
?>

<?php get_header(); ?>
 
			<div id="content">
				
													
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
						
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						
						</div>
					</div>
					<?php endwhile; endif; ?>
					<form method="post" action="<?php bloginfo('template_url'); ?>/mailer.php" id="emailform" onsubmit="return checkForm()">
						<p id="msg"></p>
  						<p><label for="author">Name (Required)</label><input type="text" name="name" id="author" value="" size="22" tabindex="1" /></p>

						<p><label for="email">EMail (Required)</label><input type="text" name="email" id="email" value="" size="22" tabindex="2" /></p>

						<p><label for="url">Website</label><input type="text" name="website" id="url" value="" size="22" tabindex="3" /></p>

						<p><label for="message">Message</label><textarea name="message" id="message" cols="56" rows="8" tabindex="4"></textarea></p>
						
						<p><input type="submit" value="Submit" name="submit" /></p>
					</form>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>				
				
			
			</div><!--#content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>