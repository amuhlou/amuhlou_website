<?php get_header(); ?>			
			<div id="content">
				
				
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
					<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>									
					<h1><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'amuhlou'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>									
					<div class="entry-meta">
						<ul>
						
							<li><span class="author">Posted By: <?php the_author(); ?></span><span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time('j M, Y') ?>, <?php the_time(); ?></abbr></span></li>
							<li><span class="comments-link"><?php comments_popup_link( __( '0 Comments', 'amuhlou' ), __( '1 Comment', 'amuhlou' ), __( '% Comments', 'amuhlou' ) ) ?></span></li>
							<li><span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Published in ', 'amuhlou' ); ?></span><?php echo get_the_category_list(', '); ?></span></li>
		
						</ul>
						<div class="edit"><?php edit_post_link( __( 'Edit', 'amuhlou' ), "\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?></div>
					</div><!-- .entry-meta -->
 
<?php /* The entry content */ ?>					
					<div class="entry-content">	
					<?php if (!empty($post->post_excerpt)) : ?>
					<?php the_excerpt(); ?>
					<?php else : ?>
					<?php the_content('Read More', FALSE, ''); ?>
					<?php endif; ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'amuhlou' ) . '&after=</div>') ?>
					</div><!-- .entry-content -->	
				</div><!-- #post-->
 
<?php /* Close up the post div and then end the loop with endwhile */ ?>
				<?php endwhile; else: ?>
				
					<div class="post">
						<h2>Oh my goodness...</h2>
						<p>Sorry, no posts were found.</p>
					</div>
				<?php endif; ?>
				<?php /* Bottom post navigation */ ?>
				
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( 'Older posts <span class="meta-nav">&raquo;</span>', 'amuhlou' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( '<span class="meta-nav">&laquo;</span> Newer posts', 'amuhlou' )) ?></div>
				</div><!-- #nav-below -->
			
			
			</div><!--#content-->
			
			<?php get_sidebar(); ?>
<?php get_footer(); ?>

