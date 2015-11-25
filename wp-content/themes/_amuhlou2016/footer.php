<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _amuhlou2016
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<?php do_action( '_amuhlou2016_credits' ); ?>
					<?php if ( is_active_sidebar( 'footer-left' ) ): ?>
						<?php dynamic_sidebar('footer-left'); ?>
					<?php endif;?>

					<?php if ( is_active_sidebar( 'footer-right' ) ): ?>
						<?php dynamic_sidebar('footer-right'); ?>
					<?php endif;?>

				</div><!-- close .site-info -->
				<p class="text-center clear"><a href="<?php echo wp_login_url(); ?>" title="Login">Login</a></p>
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
