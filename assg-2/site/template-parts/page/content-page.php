<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303 Assignment
 * @version 1.0
 */

?>

<!-- <div class="tm-welcome-parallax" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri()?>/images/header-<?php echo get_the_ID(); ?>-page.jpg">
</div> -->


<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>./assets/images/page.jpg')">

<div class="col-md-6">
				<h1>
                    <?php echo get_the_title();?>    
					Type Something
                </h1>

                    <div class="entry-content-page text-center">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div> <!-- entry-content-page -->