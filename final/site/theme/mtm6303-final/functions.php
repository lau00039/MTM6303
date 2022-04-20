<?php
/**
 * MTM6303 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage MTM6303 Final
 * @since 1.0
 */

 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303final_setup() {
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'mtm6303final-featured-image', 1422, 478, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'mtm6303final' ),
		'social' => __( 'Social Links Menu', 'mtm6303final' ),
	) );
}

function mtm6303final_getnav($theme_location = "top")
{
	$nav_items_return = [];
	global $wp_query;
	$current_post_id = $wp_query->post->ID;
	$theme_locations = get_nav_menu_locations();

	$menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
	$menu_name = $menu_obj->name;
	$nav_items = wp_get_nav_menu_items($menu_name);
	foreach($nav_items as $nav_item_id => $nav_item) {
		if($nav_item->post_status == "publish") {
			$nav_items_return["ID"] = $nav_item->ID;
			$nav_items_return["url"] = $nav_item->url;
			$nav_items_return["title"] = $nav_item->title;
			$nav_items_return["classes"] = implode(" ", $nav_item->classes);
			$nav_items_return[$nav_item_id]["active"] = false;

			if($current_post_title == $nav_item->title) {
				$nav_items_return[$nav_item_id]["active"] = true;
			}
		}
	}

	return $nav_items_return;
}

// function the_post_thumbnail_caption() {
// 	global $post;

// 	$thumbnail_id = get_post_thumbnaul_id($post->ID);
// 	$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

// 	if ($thumbnail_image && isset($thumbnail_image[0])) {
// 		echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
// 	}
// }

add_action( 'after_setup_theme', 'mtm6303final_setup' );

function mtm6303final_sidebars()
{
	register_sidebar(array(
		'name'          => 'MTM6303 Sidebar',
		'id'            => 'mtm6303-sidebar',
		'description'   => 'Sidebar for all pages',
		'class'         => '',
		'before widget' => '<div id="mtm6303-sidebar" class="widget mtm6303-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));

	register_sidebar(array(
		'name'          => 'MTM6303 Address',
		'id'            => 'mtm6303-sidebar-location',
		'description'   => 'MTM6303 Address Sidebar for Contact Page',
		'class'         => '',
		'before widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));
}

add_action('widgets_init', 'mtm6303final_sidebars');

if (!function_exists('mtm6303final_get_dynamic_sidebar')) {
	function mtm6303final_get_dynamic_sidebar($sidebar_id)
	{
		ob_start();
		dynamic_sidebar($sidebar_id);
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
}