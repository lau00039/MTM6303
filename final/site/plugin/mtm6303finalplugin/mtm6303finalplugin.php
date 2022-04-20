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

function mtm63030finalplugin_register_post_type()
{
    $labels = array(
        'name'                  => _x('Quotes', 'Post Type General Name', 'mtm63030finalplugin'),
        'singular_name'         => _x('Quote', 'Post Type Singular Name', 'mtm63030finalplugin'),
        'menu_name'             => __('Quotes', 'mtm63030finalplugin'),
        'name_admin_bar'        => __('Quote', 'mtm63030finalplugin'),
        'archives'              => __('Item Archives', 'mtm63030finalplugin'),
        'attributes'            => __('Item Attributes', 'mtm63030finalplugin'),
        'parent_item_colon'     => __('Parent Item:', 'mtm63030finalplugin'),
        'all_items'             => __('All Items', 'mtm63030finalplugin'),
        'add_new_item'          => __('Add New Item', 'mtm63030finalplugin'),
        'add_new'               => __('Add New', 'mtm63030finalplugin'),
        'new_item'              => __('New Item', 'mtm63030finalplugin'),
        'edit_item'             => __('Edit Item', 'mtm63030finalplugin'),
        'update_item'           => __('Update Item', 'mtm63030finalplugin'),
        'view_item'             => __('View Item', 'mtm63030finalplugin'),
        'view_items'            => __('View Items', 'mtm63030finalplugin'),
        'search_items'          => __('Search Item', 'mtm63030finalplugin'),
        'not_found'             => __('Not found', 'mtm63030finalplugin'),
        'not_found_in_trash'    => __('Not found in Trash', 'mtm63030finalplugin'),
        'featured_image'        => __('Featured Image', 'mtm63030finalplugin'),
        'set_featured_image'    => __('Set featured image', 'mtm63030finalplugin'),
        'remove_featured_image' => __('Remove featured image', 'mtm63030finalplugin'),
        'use_featured_image'    => __('Use as featured image', 'mtm63030finalplugin'),
        'insert_into_item'      => __('Insert into item', 'mtm63030finalplugin'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'mtm63030finalplugin'),
        'items_list'            => __('Items list', 'mtm63030finalplugin'),
        'items_list_navigation' => __('Items list navigation', 'mtm63030finalplugin'),
        'filter_items_list'     => __('Filter items list', 'mtm63030finalplugin'),
    );
    $args = array(
        'label'                 => __('Quote', 'mtm63030finalplugin'),
        'description'           => __('Post Type Description', 'mtm63030finalplugin'),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('quotes', $args);
}
add_action('init', 'mtm63030finalplugin_register_post_type', 0);

/**
 * Register and enqueue Plugin Assets
 */
function mtm63030finalplugin_assets()
{
    if (!is_admin()) {
        wp_enqueue_style('quotes-slider', plugins_url('/assets/quotes-slider.css', __FILE__), [], '1.0.0', false);
        wp_enqueue_script('quotes-slider-js', plugins_url('/assets/quotes-slider.js', __FILE__), [], '1.0.0', true);
    }
}
add_action('init', 'mtm63030finalplugin_assets', 1);


/**
 * Get Slider Styles
 */
function get_slider_styles()
{
    $file_name = plugins_url('/assets/quotes-slider.css', __FILE__);
    // echo file_get_contents($file_name);
}


/**
 * Get Slider Scripts
 */
function get_slider_scripts()
{
    $file_name = plugins_url('/assets/quotes-slider.js', __FILE__);
    // echo file_get_contents($file_name);
}

/**
 * Build Pluign Slider
 */
function mtm63030finalplugin_build_slider($images = true)
{
    wp_enqueue_style('custom-gallery');
    wp_enqueue_script('custom-gallery');
    
    $args = array(
        'post_type' => 'quotes',
        'posts_per_page' => -1
    );
    $count = 0;
    $loop = new WP_Query($args); ?>
<!-- Slideshow container -->
<div class="slideshow-container">
    <?php
        while ($loop->have_posts()) {
            $loop->the_post();
            $count++;
            $the_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type); ?>
    <!-- Full-width slides/quotes -->
    <div class="mySlides">
        <?php
            if ($images && !empty($the_image_url)) {
                echo '<img title="'.get_the_title().'" src="' . $the_image_url[0] . '" alt="'.get_the_title().'">';
            } ?>
        <q><?php echo wp_strip_all_tags(get_the_content()); ?></q>
        <p class="author">- <?php echo get_the_title(); ?></p>
    </div>

    <?php
        } ?>

    <!-- Next/prev buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container">
    <?php
    for ($i = 1; $i <= $count; $i++) {
        echo '<span class="dot" onclick="currentSlide('.$i.')"></span>';
    } ?>
</div>
<!-- Styles -->
<style>
<?php get_slider_styles() ?>
</style>
<!-- Scripts -->
<script>
<?php get_slider_scripts() ?>
</script>
<?php
}

/**
 * shortcode function for quotes with images
 */
function mtm63030finalplugin_func($atts)
{
    return mtm63030finalplugin_build_slider();
}
// With Images
add_shortcode('mtm63030finalplugin_quotes', 'mtm63030finalplugin_func');

/**
 * shortcode function for quotes without images
 */
function mtm63030finalplugin_func_no_images($atts)
{
    return mtm63030finalplugin_build_slider(false);
}
// No images
add_shortcode('mtm63030finalplugin_quotes_no_image', 'mtm63030finalplugin_func_no_images');