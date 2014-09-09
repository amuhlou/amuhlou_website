
<div id="sidebar">
	
	<div id="abroad">
		<h3>amuhlou abroad</h3>
		<ul>
			<li class="twitter"><a title="twitter profile" href="http://twitter.com/amuhlou"><span>Twitter</span></a></li>
			<li class="jpg"><a href="http://www.jpgmag.com/people/amuhlou" title="profile at JPG magazine"><span>JPG Magazine</span></a></li>
			<!--<li class="facebook"><a href="http://www.facebook.com/amuhlou" title="Facebook Profile"><span>Facebook</span></a></li>-->
			<li class="linkedIn"><a href="http://www.linkedin.com/in/amylynneschiffman" title="linkedIn Profile"><span>LinkedIn</span></a></li>
			<li class="lastfm"><a href="http://www.last.fm/user/Amuhlou" title="profile on lastFM"><span>last.fm</span></a></li>
			<li class="anobii"><a href="http://www.anobii.com/amyschiff/books" title="bookshelf at anobii"><span>anobii bookshelf</span></a></li>
			<li class="flickr"><a href="http://www.flickr.com/photos/amuhlou" title="flickr photostream"><span>flickr stream</span></a></li>
			<li class="etsy"><a href="http://www.etsy.com/shop/amuhlou"><span>etsy.com shop</span></a></li>
		</ul>
	</div>
	<div id="feed">
		<h3>Subscribe</h3>
		<ul>
			<li><a href="http://feeds.feedburner.com/amuhlou">Posts</a></li>
			<li><a href="http://feeds.feedburner.com/JpgMagazinePhotosByAmySchiffman">Photos on JPG Magazine</a></li>
		</ul>
	</div>
	
	<div id="search">
		<h3>Search Amuhlou</h3>
		<?php include(TEMPLATEPATH .'/searchform.php'); ?>
	</div>
	<div id="store">
		<h3>Featured Etsy Shop Items</h3>
		<script type='text/javascript' src='http://www.etsy.com/etsy_mini.js'></script><script type='text/javascript'>new EtsyNameSpace.Mini(7545334, 'shop','thumbnail',1,3).renderIframe();</script>
		
	</div>
	<div id="categories">
		<h3><?php _e('Categories'); ?></h3>
		<ul>
			<?php wp_list_cats('optioncount=1'); ?>
		</ul>
	</div>
	<!--<div id="featuredPhotos">
		<h3>Featured Photo</h3>
		<p>I love taking pictures, especially of flowers. Refresh the page to see another favorite of mine, or visit my <a href="photos/">photos section</a>!</p>
		<div id="imgRotate">
			<img src="<?php //bloginfo('template_url'); ?>/oldslides/rotate.php" alt="flower photo" />
		</div>
	
	</div>-->
	<div id="blogroll">
		<h3>blogs I like</h3>
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
	
	<div id="popular">
	<h3>popular posts on amuhlou</h3>
		<?php //get_mostpopular(); ?>
	</div>
	-->
</div><!--#sidebar-->
