<?php 
// Assigning the value of session variable to the $title variable
print_r($_SESSION);
$title = $_SESSION["page_title"];
$current_page = $_SESSION["current_page"];
?>

<html lang="en"><head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate">
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="/assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="/assets/favicon.ico" rel="icon">

  <title>Title page</title>  

<link href="/assets/css/main.a3f694c0.css" rel="stylesheet"></head>

<!-- Start Body Tag -->
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
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>
      
      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.php" title=""class="active <?php if($current_page == 'index') {echo 'active';}?>">Home</a></li>
          <li><a href="./about.php" title=""class="active <?php if($current_page == 'about') {echo 'active';}?>">About</a></li>
          <li><a href="./pricing.php" title=""class="active <?php if($current_page == 'pricing') {echo 'active';}?>">Pricing</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
