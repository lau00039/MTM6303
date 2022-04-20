<?php
/**
 * @package MTM6303FinalPlugin
 */
/*
Plugin Name: MTM6303 Final Plugin
Plugin URI: http://algonquincollege.com
Description: This is a plugin created for MTM6303 Final
Version: 1.0.0
Author: Christine Lau
Author URI: http://algonquincollege.com
License: GPLv2 or later
Text Domain: mtm6303finalplugin
*/

// function mtm6303finalplugin_init()
// {
//     register_post_type('mtm6303finalplugin_quotes', mtm6303finalplugin_register_post_type());
// }
// add_action('init', 'mtm6303finalplugin_init');

// // Register Custom Post Type
// function mtm6303finalplugin_custom_post_type() {

// 	$labels = array(
// 		'name'                  => _x( 'quotes', 'General Name', 'mtm6303finalplugin' ),
// 		'singular_name'         => _x( 'quote', 'Singular Name', 'mtm6303finalplugin' ),
// 		'add_new_item'          => __( 'Add New quote', 'mtm6303finalplugin' ),
// 		'add_new'               => __( 'Add quote', 'mtm6303finalplugin' ),
// 		'new_item'              => __( 'New quote', 'mtm6303finalplugin' ),
// 		'edit_item'             => __( 'Edit quote', 'mtm6303finalplugin' ),
// 		'view_item'             => __( 'View quote', 'mtm6303finalplugin' ),
// 		'search_items'          => __( 'Search quote', 'mtm6303finalplugin' ),
// 		'not_found'             => __( 'No quote found', 'mtm6303finalplugin' ),
// 		'not_found_in_trash'    => __( 'No quote found in Trash', 'mtm6303finalplugin' ),
		
// 	);

// 	$args = array(
// 		'labels'                => $labels,
//         'has archive'           => true,
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'supports'              => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail',
//             'page-attributes'
//         ),

// 		'rewrite'              => array('mtm6303slider' => 'quotes'),
// 		'show_in_rest'         => true
// 	);
//     return $args;
// }
// add_action( 'init', 'mtm6303finalplugin_init', 0 );

// function mtm6303finalplugin_build_slider()
// {

// }

// // Add Shortcode
// function mtm6303finalplugin_func($atts) {
//     return mtm6303finalplugin_build_slider();

// }
// add_shortcode('mtm6303finalplugin_quotes', 'mtm6303finalplugin_func');