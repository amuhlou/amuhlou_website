<?php
/**
 * @package WordPress
 * @subpackage _amuhlou2016
 */
/*
Template Name: Home Page
*/

get_header(); ?>
<div class="col-md-10 col-md-offset-1">

<?php
	$args = array(
	'posts_per_page' => 1,
	'meta_key' => 'featured_project',
	'meta_value' => 'yes',
	'post_type' => 'portfolio'
	);
	$query = new WP_Query( $args );
?>
	<h1 class="page-title">Featured Work</h1>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
	<header>
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<p><?php the_excerpt();?></p>
	<p><a href="<?php the_permalink(); ?>" rel="bookmark">Read More about the <?php the_title(); ?></a></p>

	</article>
<?php 
endwhile;  
?>
</div>
<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>