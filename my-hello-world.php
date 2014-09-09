<?php
/*
Plugin Name: Hello World
Plugin URI: http://jbibbs.com/
Description: Sample Hello World Plugin
Author: JBibbs
Version: 1
Author URI: http://jbibbs.com/
*/

function sampleHelloWorld()
{
  echo "<h2>Hello World</h2>";
}

function widget_myHelloWorld() {
?>
  <h2 class="widgettitle">My Widget Title</h2>
  
  <?php sampleHelloWorld(); ?>
  
<?php
}

function myHelloWorld_init()
{
  register_sidebar_widget(__('Hello World'), 'widget_myHelloWorld');    
}
add_action("plugins_loaded", "myHelloWorld_init");