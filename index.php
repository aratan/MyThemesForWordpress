<?php get_header(); ?>
        <class class="row">

            <!-- entradas de wordpress -->
            <div class="col-lg-9">

           

                <!-- Loop post -->
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                        <!--entrada de wordpres-->
                        <!-- Card Body -->
                        <div class="card-body">
                        <!-- ruta de entrada -->
                        <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                        </a>
                        <p class="small mb-0"><?php the_time('F j, Y'); ?></p>
                        <p class="small mg-0">Autor: <?php the_author(); ?></p>
                        <p class="small ">Categorias: <?php the_category('/') ?> Etiquetas: <?php the_tags('', '/', '')?></p>
                        <img src="/img/oficina.png" alt="entrada" class="img-fluid mb-3">
                        <!-- resumen del post -->
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Más info...</a>
                    </div>
                    <!-- Fin Card Body -->
                    <?php endwhile; endif;  ?>
                <!-- fin del loop -->

                <!--paginacion-->
                <div class="card-body">
                     <!-- Llamamos a codigo extra -->
                    <?php get_template_part('template-parts/content', 'paginacion')?>
                </div>
            </div>

            <!--aside-->
            <?php get_sidebar(); ?>
        </class>
      </div>
    </main>
    <?php get_footer(); ?>