<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'amuhlou_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	'id' => 'portfolioMeta',
	'title' => 'Details',
	'pages' => array( 'amuhlou_portfolio' ),
	'context' => 'normal',
	'priority' => 'default',
	'autosave' => true,
	'fields' => array(
		// Role
		array(
			'name'  => 'Role(s)',
			'id'    => "{$prefix}role",
			'type'  => 'text',
			'clone' => true,
		),
		// Client
		array(
			'name'  => 'Client',
			'id'    => "{$prefix}client",
			'type'  => 'text',
		),
		// Employer
		array(
			'name'  => 'Employer',
			'id'    => "{$prefix}employer",
			'type'  => 'text',
		),
		// URL
		array(
			'name'  => 'Live URL',
			'id'    => "{$prefix}url",
			'type'  => 'text',
		),
		// Completed Date
		array(
			'name'  => 'Completed Date',
			'id'    => "{$prefix}work_completed",
			'type'  => 'text',
		),
		// Featured on Home Page
		array(
			'name'    => 'Featured on Home Page',
			'id'      => "{$prefix}work_featured",
			'type'    => 'radio',
			'options' => array(
				'Yes' => 'Yes',
				'No' => 'No',
			),
		),
	),
);

$meta_boxes[] = array(
	'id' => 'playinfo',
	'title' => 'Details',
	'pages' => array( 'amuhlou_hobbies' ),
	'context' => 'normal',
	'priority' => 'default',
	'autosave' => true,
	'fields' => array(
		// Completed Date
		array(
			'name'  => 'Completed Date',
			'id'    => "{$prefix}hobbies_completed",
			'type'  => 'text',
		),
		// Featured on Home Page
		array(
			'name'    => 'Featured on Home Page',
			'id'      => "{$prefix}hobbies_featured",
			'type'    => 'radio',
			'options' => array(
				'Yes' => 'Yes',
				'No' => 'No',
			),
		),
	),
);
/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function amuhlou_2_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'amuhlou_2_register_meta_boxes' );
