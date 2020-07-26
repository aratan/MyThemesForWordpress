<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mi Tema WordPress</title>
    <!--<link rel="shortcut icon" href="https://crowdestor.com/assets/public/dist/images/favicon.png" type="image/png"/>-->
    
    <!--TODO: https://developer.wordpress.org/themes/basics/including-css-javascript/-->
    <?php wp_head(); ?>
    
  </head>
  <body>
    <main>
      <!-- Menu comienzo -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ml-auto">
        <div class="container-fluid">
            
          <a class="navbar-brand ml-auto" href="#"
            ><img
              id="logo"
              src="https://crowdestor.com/assets/public/dist/images/favicon.png"
              alt="logo corporativo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- As a link -->
            <nav class="navbar navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Inicio</a>
              <a class="navbar-brand" href="#">Blog</a>
              <a class="navbar-brand" href="#">Contactos</a>
            </nav>
          </div>
        </div>
      </nav>
      <!--Fin de menu -->

      <div class="container">
        <h1 class="my-5 text-center text-primary">Bienvenidos</h1>
        <hr>