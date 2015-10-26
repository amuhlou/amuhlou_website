<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package amuhlou 2
 */
/*
Template Name: Home Page
*/
get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
			<h1>Portfolio</h1>
			<?php
				$workargs = array( 'post_type' => 'amuhlou_portfolio', 'posts_per_page' => 3 );
				$workloop = new WP_Query( $workargs );
				while ( $workloop->have_posts() ) : $workloop->the_post();
					$fWork = rwmb_meta('amuhlou_work_featured');
					if($fWork === 'Yes'):
				?>
						
				<div class="entry-content">
				
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('listing-thumb-short');?></a>
					
						<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
						<!--<p class="meta"><?php //echo get_the_term_list( $post->ID, 'portfolio_category', '', ' , ', '' ) ?></p>-->
						<?php the_excerpt(); ?>
					
					
				</div>
			<?php 
			else: 
			?>
			<p>There are no featured items at this time</p>
			<?php
			endif; endwhile;
			?>
			</div><div class="row">
			<h1>Hobbies</h1>
			<?php
				$hobbyargs = array( 'post_type' => 'amuhlou_hobbies', 'posts_per_page' => 3 );
				$hobbyloop = new WP_Query( $hobbyargs );
				while ( $hobbyloop->have_posts() ) : $hobbyloop->the_post();
					$fHobby = rwmb_meta('amuhlou_hobbies_featured');
					if($fHobby === 'Yes'):
				?>
						
				<div class="entry-content">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('listing-thumb-short');?></a>
					
						<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
						<!--<p class="meta"><?php //echo get_the_term_list( $post->ID, 'hobbies_category', '', ' , ', '' ) ?></p>-->
						<?php the_excerpt(); ?>
					
				</div>
			<?php 
			else: 
			?>
			<p>There are no featured items at this time</p>
			<?php
			 endif; endwhile;
			?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
