<?php
/**
 * Header template file
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

?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) & !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ) );

	?></title>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="<?php echo get_stylesheet_directory_uri() ?>/assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon.ico" rel="icon">

  <title>Title page</title>  

<link href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/main.a3f694c0.css" rel="stylesheet">
</head>

<body>
 <!-- Add your content of header -->
 
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
         
        <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="<?php echo get_stylesheet_directory_uri() ?>./index.html" title="" class="active">Home</a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri() ?>./page.html" title=""> About</a></li>
          <li><a href="<?php echo get_stylesheet_directory_uri() ?>./contact.html" title=""> Contact Us </a></li> -->
          <?php 
            $menu_items = mtm6303final_getnav("top");

           foreach($menu_items as $menu_item) {
            print_r($menu_item);

              ?>
          <!-- <li ><a href="<?php echo $menu_item['url'] ?>" title="" class="<?php ($menu_item["active"]) ? "active" : "" ?>"><?php echo $menu_item["title"] ?>
        </a>
        </li> -->
          <?

            }
          ?>

        </ul>
      </div>
    </div>
  </nav>
</header>