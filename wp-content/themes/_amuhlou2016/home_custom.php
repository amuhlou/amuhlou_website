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
	'post__in'  => get_option( 'sticky_posts' ),
	'ignore_sticky_posts' => 1,
	'post_type' => 'portfolio'
	);
	$query = new WP_Query( $args );
?>
	<h1>Featured Work</h1>
	<?php while ($query->have_posts()) : $query->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
	</article>
<?php 
endwhile;  
?>
</div>
<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>