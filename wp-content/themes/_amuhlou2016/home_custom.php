<?php
/**
 * @package WordPress
 * @subpackage _amuhlou2016
 */
/*
Template Name: Home Page
*/

get_header(); ?>
<div class="col-md-12">

<?php
	$args = array(
	'posts_per_page' => 2,
	'meta_key' => 'featured_project',
	'meta_value' => 'yes',
	'post_type' => 'portfolio'
	);
	$query = new WP_Query( $args );
?><div class="row featured">
	<h1 class="page-title">Featured Work</h1>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
	
	<div class="col-md-6 col-sm-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="hero"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('herosize'); ?></a></div>
	<header>
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<div class="lead"><?php the_excerpt();?><p><a href="<?php the_permalink(); ?>" rel="bookmark">Read More</a></p></div>
	</article>
	</div>
<?php 
endwhile;  
?>
</div></div>
<div class="row">
<div class="col-md-12 text-center">
<a href="/portfolio" class="btn btn-lg btn-primary">View Full Portfolio</a></div>
</div>
</div>
<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>