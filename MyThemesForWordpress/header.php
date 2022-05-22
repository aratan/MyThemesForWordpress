<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> <?php echo bloginfo('name'); ?> </title>

    <!--<link rel="shortcut icon" href="https://crowdestor.com/assets/public/dist/images/favicon.png" type="image/png"/>-->
    
    <!--TODO: https://developer.wordpress.org/themes/basics/including-css-javascript/-->
    <?php wp_head(); ?>
    
  </head>
  <body <?php body_class(); ?>>

    <main>
     
            

 <!-- Menu comienzo -->
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">  
        <img id="logo2"
          src="<?php echo get_stylesheet_directory_uri() ?>/img/favicon.png" alt="logo"/>
    </a>
    <a class="navbar-brand" href="/wordpress/"><?php echo bloginfo('name'); ?></a>
      <?php wp_nav_menu(array(  
      'theme_location' => 'menu_principal',
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbarSupportedContent',
      'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>',
      'menu_class' => 'nav-item contenedormenu',
      )) 
      ?> 
  </div>
    
</nav>
      
<div class="contenedor">
  <?php 
    if ( has_post_thumbnail() ) {
      the_post_thumbnail('post-thumbnails', array(
      'class' => 'img-fluid') );
      }
  ?>
  <div class="centrado">
    <h2><?php the_title(); ?></h2>
    
    <p><?php the_excerpt(); ?></p>
  </div>
</div>