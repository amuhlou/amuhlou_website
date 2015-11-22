<?php
/**
 * @package _amuhlou2016
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content row">
		<div class="entry-content-thumbnail col-md-6 col-sm-12">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="col-md-6 col-sm-12">
		<h2>About the Project</h2>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_amuhlou2016' ),
				'after'  => '</div>',
			) );
		
		$role = get_post_meta($post->ID, 'role');
		if($role):
		?>
		<h2>Role</h2>
		<ul>
		<?php 
		foreach($role as $name) {
			echo '<li>' . $name . '</li>';
		}
		?>
		</ul>
	<?php endif; ?>

			
		<?php
			$category_list = get_the_term_list( $post->ID, 'portfolio_category', '', ', ', '' );
			/* translators: used between list items, there is a space after the comma */
			//$category_list = get_the_category_list( __( ', ', '_amuhlou2016' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_term_list( $post->ID, 'portfolio_tag', '<li>', '', '</li>' );
			if($tag_list): 

			?>
		<h2>Tools and Technologies</h2>
			<ul>
			<?php
				echo $tag_list;
			
				endif;
		?>
			</ul>
		<?php 
			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', '_amuhlou2016' ), '<span class="edit-link">', '</span>' ); ?>
			
		</div>

	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
