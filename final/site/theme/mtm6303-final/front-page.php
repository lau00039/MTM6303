<?php
/**
 * Front Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage MTM6303 Final
 */

  get_header(); ?> 

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                <h1><?php echo get_the_title(); ?>s</h1>
              </div>
            </div>
        </div>
     </div>
 </div>
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2><?php echo get_the_title(); ?></h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page.jpg"><br>
                <?php 
                // TH SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content () works only inside a WP Loop -->
                    <div class="entry-content-page">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div> <!-- entry-content-page -->

                <?php
                endwhile; //resetting the page loop
                ?>
      </div>
      <div class="col-md-6">
        <h2><?php echo get_the_title(); ?></h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page.jpg"><br>
                <?php 
                // TH SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content () works only inside a WP Loop -->
                    <div class="entry-content-page">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div> <!-- entry-content-page -->

                <?php
                endwhile; //resetting the page loop
                ?>
      </div>
      <div class="col-md-6">
        <h2><?php echo get_the_title(); ?></h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page.jpg"><br>
                <?php 
                // TH SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content () works only inside a WP Loop -->
                    <div class="entry-content-page">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div> <!-- entry-content-page -->

                <?php
                endwhile; //resetting the page loop
                ?>
      </div>
      <div class="col-md-6">
        <h2><?php echo get_the_title(); ?></h2>
                <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/page.jpg"><br>
                <?php 
                // TH SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post(); ?> <!--Because the_content () works only inside a WP Loop -->
                    <div class="entry-content-page">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div> <!-- entry-content-page -->

                <?php
                endwhile; //resetting the page loop
                ?>
      </div>
    </div>
</div>

<?php get_footer(); ?> 