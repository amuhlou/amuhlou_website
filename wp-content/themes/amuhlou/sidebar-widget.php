	<!-- "widgetize" the sidebar-->
	
<div id="sidebar">

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
</div><!--#sidebar-->
	<?php endif; ?>