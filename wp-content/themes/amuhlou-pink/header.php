<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }       
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); }
    ?></title>
 	<meta name="google-site-verification" content="EaiKMPNmeBUIMQDLfiQ60GVdfIChWIXDB-cmKpKWrLI" />
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 	<meta name="description" content="Personal website of Amy Bibbings, a front-end developer from Lansing, Michigan. Posts about life, technology & web development." />
 	<meta name="keyword" content="web developer,web development,cooking,food,recipes,photography,web design,technology,Lansing Michigan" />
	<meta name="y_key" content="8a8bceb313ba178b" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
 	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_url'); ?>/print.css" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 
	<?php wp_head(); ?>
 	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.ui.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.js"></script>
	<!--<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/preload.css.images.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/amuhlou.js"></script>
</head>

<?php if (!is_front_page() && !is_page()) { ?>
<body class="home"> <!--make anything that's not a Page have body class "home" so "Home" link in nav menu can have a current state-->
<?php } else { ?>
<body>
<?php } ?>
	<div id="container">
		<div id="skipLinks">
			<a href="#content" title="<?php _e( 'Skip to content', 'amuhlou' ) ?>"><?php _e( 'Skip to content', 'amuhlou' ) ?></a>	
		</div>
		<div id="header">
			<div id="logo">
		    	<h1><a href="<?php bloginfo( 'url' ) ?>/" rel="home"><span><?php bloginfo( 'name' ) ?></span></a></h1>
			</div><!--#logo-->
			
			<?php wp_page_menu( 'menu_class=nav&show_home=1&include=2,34,37,111' ); ?>
				
			<!--.nav-->
			<div id="banner">
			
			</div><!--#banner-->
		</div><!--#header-->
		
		<div id="main">
		
				