<?php
/**
 * The template used for displaying page content in taxonomy.php
 *
 * @package amuhlou 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entryThumb"><?php the_post_thumbnail( 'thumbnail' ); ?> </div>
	<div class="entry-content">
		 <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
