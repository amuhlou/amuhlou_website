<?php
/**
 * @package WordPress
 * @subpackage amuhlou
 */

get_header();
?>

	<div id="content">
		<h1>Oh no!</h1>
		<h2 class="center">We couldn't find what you were looking for!</h2>
		<p>Our apologies...care to search?</p>
		<div id="search"><?php include(TEMPLATEPATH .'/searchform.php'); ?></div>
		<p>If you still don't find what you're expecting, don't hesitate to <a href="/contact">contact me</a>!</p>
	</div>



<?php get_footer(); ?>