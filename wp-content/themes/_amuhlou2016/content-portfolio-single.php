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
		?>
		<h2>Role</h2>

			<h2>Tools and Technologies</h2>
			<footer class="entry-meta">
		<?php
			$category_list = get_the_term_list( $post->ID, 'portfolio_category', '', ', ', '' );
			/* translators: used between list items, there is a space after the comma */
			//$category_list = get_the_category_list( __( ', ', '_amuhlou2016' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_term_list( $post->ID, 'portfolio_tag', '', ', ', '' );
			if ( ! _amuhlou2016_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_amuhlou2016' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_amuhlou2016' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_amuhlou2016' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_amuhlou2016' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', '_amuhlou2016' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
		</div>

	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
