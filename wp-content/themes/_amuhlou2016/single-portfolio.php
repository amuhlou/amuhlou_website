<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _amuhlou2016
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-10 col-md-offset-1">
		<?php get_template_part( 'content-portfolio', 'single' ); ?>

		<?php _amuhlou2016_content_nav( 'nav-below' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
        </div>
	<?php endwhile; // end of the loop. ?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>