<?php
/**
 * The Sidebar containing the portfolio widget areas.
 *
 * @package amuhlou 2
 */
?>
<div id="secondary" role="complementary">
	<div class="categories">
	<?php $theURL = curPageURL(); 
		$chunks = explode('/', $theURL);
	?>
	<h3><?php echo $chunks[3];?> Categories</h3>
	<ul>
	<?php 
		$args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => __( 'No categories' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'portfolio_category',
	'walker'             => null
);
		wp_list_categories( $args ); ?> 
	</ul>
	</div>
	<div class="widget-area">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-portfolio' ) ) : ?>

		<!--
		<aside id="search" class="widget widget_search">
			<?php //get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">
			<h3 class="widget-title"><?php _e( 'Archives', 'amuhlou_2' ); ?></h3>
			<ul>
				<?php //wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h3 class="widget-title"><?php //_e( 'Meta', 'amuhlou_2' ); ?></h3>
			<ul>
				<?php //wp_register(); ?>
				<li><?php //wp_loginout(); ?></li>
				<?php //wp_meta(); ?>
			</ul>
		</aside>
		-->
	<?php endif; // end sidebar widget area ?>
	</div>
	
</div><!-- #secondary -->
