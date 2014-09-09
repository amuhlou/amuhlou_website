<?php get_header(); ?>
<!--code by t310s at http://wordpress.pastebin.com/f24b1ee9e, html modified by amuhlou -->
	<div id="content" class="search">
	
		<?php if (have_posts()) : ?>
		<h1 class="pagetitle">Search Results</h1>
		
		<p class="pagetitle resultCount">Search Results for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('result(s)'); wp_reset_query(); ?></p>
		
		
		<ul>
		<?php while (have_posts()) : the_post(); ?>
			<li <?php post_class() ?>>
			
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<ul class="post-meta">
					<li><?php the_time('F jS, Y') ?>, </li>
					<li><?php comments_popup_link( __( '0 Comments', 'amuhlou' ), __( '1 Comment', 'amuhlou' ), __( '% Comments', 'amuhlou' ) ) ?>, </li>
					<li>Published in <?php the_category(', ') ?>,</li>
				</ul>
				<div>
					<?php the_excerpt(); ?>
				</div>
				
				<p class="edit"><?php edit_post_link('Edit', '', ''); ?></p>
			
		</li>
		<?php endwhile; ?>
</ul>
	
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link(__( 'Older posts <span class="meta-nav">&raquo;</span>', 'amuhlou' )) ?></div>
			<div class="nav-next"><?php previous_posts_link(__( '<span class="meta-nav">&laquo;</span> Newer posts', 'amuhlou' )) ?></div>
		</div><!-- #nav-below -->

	<?php else : ?>

		<h2>
			<?php 
			if(!$searching['post_type']) { 
				echo 'No posts or pages matched the search'; 
			} 
			else {
				echo "No $searching[post_type]s matched the search.";
			} ?>
		</h2>
		<br />
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>