<?php get_header(); ?>

    <div>
        <?php get_template_part('template-parts/paginas.php'); ?>    
            <h2 class="text-center">
                <?php the_title(); ?>
            </h2>
            <?php empresa_lista_clases(); ?>    
    </div>

<?php get_footer(); ?>

