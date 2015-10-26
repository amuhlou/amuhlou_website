<?php
/**
 * The Template for displaying all single posts.
 *
 * @package amuhlou 2
 */

get_header(); ?>
	<?php $theURL = curPageURL(); 
		$chunks = explode('/', $theURL);
	?>
	<span class="sectionHead"><?php echo $chunks[3];?></span>
	<?php get_sidebar('portfolio'); ?>
<div id="content" class="site-content">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'contentpf', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>