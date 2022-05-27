<!-- Paginas de wordpress -->

<?php get_header(); ?>

<div class="container-fluid">
 
 <!-- estructura -->
<div class="row">
    <div class="col-2">
      <!--Column1-->
    </div>
    <div class="col">
    
        <!-- Loop post -->
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
            <!--entrada de wordpres-->

            <!-- Card Body -->

                <div class="card-body text-center">
                    <!-- ruta de entrada -->
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2> 
                    </a>
                    <!-- resumen del post -->
                        <p><?php the_excerpt(); ?></p> 
                        <p class="small mb-0"><?php the_time('F j, Y'); ?></p>
                        <p class="small mg-0">Autor: <?php the_author(); ?></p>
                        <p class="small ">Categorias: <?php the_category('/') ?> Etiquetas: <?php the_tags('', '/', '')?></p>
                        
                    <!-- metemos imagenes y las clases de bootstrap -->
                    <?php 
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3') );
                    }
                    ?>
                    <!-- fin de imagen -->          

                    <!-- btn link -->
                    
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

            <!--paginacion-->
            <div class="card-body">
                     <!-- Llamamos a codigo extra -->
                <?php get_template_part('template-parts/content', 'paginacion')?>
            </div>
                <!-- fin paginacion -->
        </div>
    <div class="col-2 ">
      <!--Column3-->
    </div>
  </div>


</div>            
        <!--aside pagina -->
        <?php //get_sidebar(); ?>
        </class>
      </div>
    </main>
    <?php get_footer(); ?>