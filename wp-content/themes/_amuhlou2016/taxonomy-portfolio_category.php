<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _amuhlou2016
 */

get_header(); ?>

    <?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
    <div class="content-padder">
    <?php
        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $customArgs = array('portfolio_category' => $term->slug);
        $tags = new WP_Query($customArgs);
        
    ?>
        <?php if ($tags->have_posts()) : ?>

            <header>
                <h1 class="page-title">
                    <?php single_cat_title(); ?>
                </h1>
                
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to overload this in a child theme then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content-portfolio', get_post_format() );
                ?>

            <?php endwhile; ?>

            <?php _amuhlou2016_content_nav( 'nav-below' ); ?>

        <?php else : ?>

            <?php get_template_part( 'no-results', 'archive' ); ?>

        <?php endif; ?>
        <div class="col-md-12 text-center">
<a href="/portfolio" class="btn btn-lg btn-default">View All Portfolio Items</a></div>
    </div><!-- .content-padder -->

<?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>
