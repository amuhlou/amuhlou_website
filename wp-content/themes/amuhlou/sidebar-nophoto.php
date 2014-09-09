
<div id="sidebar">
	<div id="search">
		<h3>Search Amuhlou</h3>
		<?php include(TEMPLATEPATH .'/searchform.php'); ?>
	</div>
	<div id="abroad">
		<h3>amuhlou abroad</h3>
		<ul>
			<li class="twitter"><a href="http://twitter.com/amuhlou"><span>Twitter</span></a></li>
			<li class="jpg"><a href="http://www.jpgmag.com/people/amuhlou"><span>JPG Magazine</span></a></li>
			<li class="facebook"><a href="http://www.facebook.com/amuhlou"><span>Facebook</span></a></li>
			<li class="linkedIn"><a href="http://www.linkedin.com/in/amylynneschiffman"><span>LinkedIn</span></a></li>
		</ul>
	</div>
	<div id="feed">
		<h3>Subscribe</h3>
		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>">Posts</a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>
		</ul>
	</div>
	
	
	<div id="categories">
		<h3><?php _e('Categories'); ?></h3>
		<ul>
			<?php wp_list_cats('optioncount=1'); ?>
		</ul>
	</div>
	
	<div id="blogroll">
		<h3>blogroll</h3>
		<ul>
			<?php wp_list_bookmarks('categorize=0&title_li='); ?>

		</ul>
	</div>
	
	<!--<div id="archives">
		<h3><?php //_e('Archives'); ?></h3>
		<ul>
			<?php //wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
	-->

</div><!--#sidebar-->
