<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mi Tema WordPress</title>
    <link rel="shortcut icon" href="https://crowdestor.com/assets/public/dist/images/favicon.png" type="image/png"/>
    
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
        <class class="row">

            <!-- entradas de wordpress -->
            <div class="col-lg-9">

            <!--entrada de wordpress-->
                <div class="card-body">
                    <a href="single.html">
                    <h2>entrada</h2>
                    </a>
                    <p class="small mb-0">24/12/4566</p>
                    <p class="small mg-0">Auto: Víctor</p>
                    <p class="small ">Categorias: animales/naturaleza Etiquetas: azul/verde</p>
                    <img src="/img/oficina.png" alt="entrada" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt quos debitis minima recusandae, perferendis, quia ea enim numquam porro ex molestiae? Aspernatur, ex optio. Perferendis laboriosam reprehenderit at voluptatum ullam.</p>
                    <a href="single.html" class="btn btn-primary">Más info...</a>
                </div>

                <div class="card-body">
                    <a href="single.html">
                    <h2>entrada</h2>
                    </a>
                    <p class="small mb-0">24/12/4566</p>
                    <p class="small mg-0">Auto: Víctor</p>
                    <p class="small ">Categorias: animales/naturaleza Etiquetas: azul/verde</p>
                    <img src="/img/oficina.png" alt="entrada" class="img-fluid mb-3">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt quos debitis minima recusandae, perferendis, quia ea enim numquam porro ex molestiae? Aspernatur, ex optio. Perferendis laboriosam reprehenderit at voluptatum ullam.</p>
                    <a href="single.html" class="btn btn-primary">Más info...</a>
                </div>
                <!--paginacion-->
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
            </div>

            <!--aside-->
            <div class="col-lg-3">
                <div class="card-body">
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="/img/camiseta.png" alt="camiseta" class="img-fluid">
                </div>
            </div>
        </class>
      </div>
    </main>
    <footer class="container-fluid my-5 text-center text-light bg-dark">2020 victor arbiol madrid</footer>
  
   <!--FIXME:footer script-->
   <?php wp_footer(); ?> 

  </body>
</html>
