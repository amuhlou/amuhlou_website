<?php
/**
 * @package WordPress
 * @subpackage _amuhlou2016
 */
/*
Template Name: About Page
*/

get_header(); ?>
<header>
        <h1 class="page-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->
<div class="col-md-7 col-md-offset-1 col-sm-12">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page-about' ); ?>



	<?php endwhile; // end of the loop. ?>
	</div>
<?php if ( is_active_sidebar( 'about-sidebar' ) ): ?>
	<div class="sidebar col-sm-12 col-md-4">
	<?php dynamic_sidebar('about-sidebar'); ?>
</div>

<?php endif; ?>
<?php get_footer(); ?>