<!-- page php-->
<!--Si se ve  mal añade foto grande -->
<?php get_header(); ?>

  <div class="row">
    <div class="col-lg-6 col-md-6">
                
    <!-- Loop post -->
      <?php  if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
      ?>
    <!--entrada de wordpres-->
      <!-- Card Body -->
      <div class="card-body">
        <!-- ruta de entrada -->
                 
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
                        
        <!-- metemos imagenes y las clases de bootstrap -->
           <p class="small mb-0"><?php the_time('F j, Y'); ?></p>
           <p class="small mg-0">Autor: <?php the_author(); ?></p>
           <p class="small ">Categorias: <?php the_category('/') ?> </p>
           <p class="small ">Etiquetas: <?php the_tags('', '/', '') ?> </p>
                        
        <!-- leer post -->
                        
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">
          <?php _e('Más info...','lang'); ?>
        </a>
      </div>
        <!-- Fin Card Body -->
          <?php endwhile; else : ?>
            <h1> <?php _e('No hay post disponibles','lang'); ?></h1>
            <?php get_search_form()?>
          <?php endif;  ?>

                <!-- fin del loop -->

            </div>

            <!--aside-->
             <?php get_sidebar(); ?>
            <!-- aside -->
            
        </div>
      </div>
    </main>
    <?php get_footer(); ?>