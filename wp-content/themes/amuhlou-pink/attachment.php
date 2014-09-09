<?php get_header(); ?>
 
			<div id="content">
				
				<?php if ( have_posts() ) : the_post(); ?>   
					<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="page-title"><a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php printf( __( 'Return to %s', 'amuhlou' ), wp_specialchars( get_the_title($post->post_parent), 1 ) ) ?>" rev="attachment"><span class="meta-nav">&laquo; </span><?php echo get_the_title($post->post_parent) ?></a></h1>									
					<h2><?php the_title(); ?></h2>										
					<div class="entry-meta">
						<ul>
						
							<li><span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('j M, Y') ?>, <?php the_time(); ?></abbr></span></li>
							<li><span class="comments-link"><?php comments_popup_link( __( '0 Comments', 'amuhlou' ), __( '1 Comment', 'amuhlou' ), __( '% Comments', 'amuhlou' ) ) ?></span></li>
							<li><span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Published in ', 'amuhlou' ); ?></span><?php echo get_the_category_list(', '); ?></span></li>
		
						</ul>
						<div class="edit"><?php edit_post_link( __( 'Edit', 'amuhlou' ), "\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?></div>
					</div><!-- .entry-meta -->
 
					<?php /* The entry content, in this case, the attachment */ ?>					
					<div class="entry-content">
						<div class="entry-attachment">					
							<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "medium"); ?>
							<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
							</p>
							<?php else : ?>		
							<a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>		
							<?php endif; ?>		
						</div>				
						<div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>
 
 
						<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'amuhlou' )  ); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'amuhlou' ) . '&after=</div>') ?>
 
					</div><!-- .entry-content -->
				</div>
 				<?php else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
				
				<?php comments_template('', true); ?>
			</div><!--#content-->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>