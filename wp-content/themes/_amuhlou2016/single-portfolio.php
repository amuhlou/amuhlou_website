<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _amuhlou2016
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12">
		<?php get_template_part( 'content-portfolio', 'single' ); ?>

		<?php //_amuhlou2016_content_nav( 'nav-below' ); ?>

		
        </div>
	<?php endwhile; // end of the loop. ?>
	<div class="row">
<div class="col-md-12 text-center">
<a href="/portfolio" class="btn btn-lg btn-default">View All Portfolio Items</a></div>
</div>
<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>