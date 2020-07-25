<div class="col-lg-3">
    <div class="card-body">
            <h4>Publicidad</h4>
            <hr>
        <!-- Imagenes y las clases de bootstrap -->
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3') );
                }
            ?>
                <!-- <img src="/img/camiseta.png" alt="camiseta" class="img-fluid"> -->
        <!-- Widgets -->
            <?php if ( is_active_sidebar( 'widgets-derecha' ) ) : ?>
            <?php dynamic_sidebar( 'widgets-derecha' ); ?>
            <?php else : ?>
                <!-- Time to add some widgets! -->
            <?php endif; ?>
    </div>
</div>