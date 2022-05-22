<!-- entradas /post de wordpress -->

<?php get_header(); ?>
    <class class="row">
        <div class="col-lg-9 col-md-6">

                <!-- Loop post -->
                <?php  if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); 
                ?>
                        <!--entrada de wordpres-->
                        <!-- Card Body -->
                        <div class="card-body">
                        <!-- ruta de entrada -->
                 
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        

                        <!-- metemos imagenes y las clases de bootstrap -->
                        <?php 
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnails', array(
                                    'class' => 'img-fluid') );
                            }
                        ?>
                
                        <p class="small mb-0"><?php the_time('F j, Y'); ?></p>
                        <p class="small mg-0">Autor: <?php the_author(); ?></p>
                        <p class="small ">Categorias: <?php the_category('/') ?> </p>
                        <p class="small ">Etiquetas: <?php the_tags('', '/', '') ?> </p>
                        
                        <!-- leer post -->
                        
                       
                    </div>
                    <!-- Fin Card Body -->
                    <?php endwhile; endif;  ?>
                <!-- fin del loop -->

            </div>

            <!--aside-->
             <?php get_sidebar(); ?>
            <!-- aside -->
            
        </class>
      </div>
    </main>
    <?php get_footer(); ?>