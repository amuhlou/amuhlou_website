<?php get_header(); ?>
 
			<div id="content">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>									
					<h1><?php the_title(); ?></h1>										
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
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'amuhlou' ) . '&after=</div>') ?>
					</div><!-- .entry-content -->	
				
				</div>
				<div id="share">
					<h3>share this post</h3>
					<?php if (function_exists('sociable_html')) {
    					echo sociable_html(Array("Twitter", "Facebook", "StumbleUpon", "del.icio.us"));
					} ?> 
				</div>
				
				
				
				<?php comments_template('', true); ?>
		
<?php //trackback_rdf(); ?>

				<?php endwhile; ?>
				<div id="nav-below" class="post-navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
				</div><!-- #nav-below -->
				<?php else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div><!--#content-->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>