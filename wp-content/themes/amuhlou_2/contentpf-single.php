<?php
/**
 * @package amuhlou 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if(has_post_thumbnail()):
				$bigURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
				$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'hero-thumb' ); 	
		?>
				<a href="<?php echo $bigURL[0];?>" class="fancybox"><img src="<?php echo $thumbURL[0];?>" alt=""/></a>
				
		<?php endif;?>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
