
    <li class="card gradient">
        <!-- Imagenes y las clases de bootstrap -->
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3') );
                }
            ?>

        <?php the_category(); ?>

        <div class="contenido">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>

            <p class="meta">
                <span> Por: </span>
                <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>">
                    <?php echo get_the_author_meta('display_name') ?>
                </a>
            </p>
            <p class="meta">
                <span>Fecha: </span>
                <?php the_time( get_option('date_format')); ?>
            </p>
        </div>
    </li>