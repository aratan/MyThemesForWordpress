<?php
function empresa_lista_clases(){ ?>
    
<!--prueba-->   
    
<div class="container">
    <div class="row justify-content-start">
        <!--bucle-->
    <?php 
 
    $args = array(
        //$query = new WP_Query( array( 'cat' => 4 ) );
        //empresa_clases
        'post_type' => 'empresa_clases',
        'posts_per_page' => 20,
        'orderby' => 'title',
        'order' => 'ASC');

        $clases = new WP_Query($args);
        while($clases -> have_posts()): $clases->the_post(); ?>

        <div class="col-4">
            <!--card--> 
            <div class="card text-center">
                <div class="card-header">
                    <h3><?php the_title();?> </h3>
                </div>
                <div class="card-body">
                    <?php the_post_thumbnail(150,150); ?>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink();?>" class="btn btn-primary"> <?php the_title();?> </a>
                </div>
                <div class="card-footer text-muted">
                    <a href="#" > Días: <?php the_field('dias_clase');?> </a>
                </div>
            </div>

            
            <!-- fin card-->
        </div>
    
    <?php endwhile; wp_reset_postdata(); ?>  
<!--  fin bucle  -->

        
    </div>

<?php
}