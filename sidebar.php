<!-- Aside se suele usar para publicidad o cesta de compras -->

    <div class="card-body col-lg-6">
            <!--<h4>Widgets</h4>-->
            <hr>
        <!-- Imagenes y las clases de bootstrap -->
            <?php 
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3') );
                }
            ?>
                
        <!-- Widgets -->
            <?php if ( is_active_sidebar( 'widgets-derecha' ) ) : ?>
            <?php dynamic_sidebar( 'widgets-derecha' ); ?>
            <?php else : ?>
                <!-- Time to add some widgets! -->
            <?php endif; ?>
    </div>
    
</div>
