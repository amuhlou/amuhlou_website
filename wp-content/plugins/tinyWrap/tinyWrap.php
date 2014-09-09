<?php
/**
 * @package Tiny_MCE_Wrapdiv
 * @version 0.1
 */
/*
Plugin Name: TinyMCE Wrap Div
Plugin URI: 
Description: Wraps selected text in a div, rather than formatting it as a div like the format menu. This allows for multiple element types inside the div. JavaScript by Peter Wilson (petew@yellowhawk.co.uk), PHP based on instructions on how to make plugin by Brett Terpstra (http://brettterpstra.com/adding-a-tinymce-button/). Combined into a plugin by Amy Bibbings (amy@amuhlou.com).
Author: Peter Wilson, Brett Terpstra, and Amy Bibbings
Version: 0.1
*/
function myplugin_addbuttons() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
	
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_myplugin_tinymce_plugin");
     add_filter('mce_buttons', 'register_myplugin_button');
   }
}
 
function register_myplugin_button($buttons) {
   array_push($buttons, "separator", "wrapdiv");
   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_myplugin_tinymce_plugin($plugin_array) {
   $plugin_array['wrapdiv'] = bloginfo('url') . '/wp-content/plugins/tinyWrap/editor_plugin.js';
   return $plugin_array;
}
 
// init process for button control
add_action('init', 'myplugin_addbuttons');

?>