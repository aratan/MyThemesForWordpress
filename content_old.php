
<div class="all_content_template">
    <div id="<?php  the_ID; ?>"> <?php post_class('page_post'); ?> 
                        <!-- Imagenes y las clases de bootstrap -->
        <?php 
            if(has_post_thumbnail()){
            
             
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails', array(
                        'class' => 'img-fluid mb-3') );
                }
            
            }else{
                echo "no image"; 
            }
        ?>
    </div>
</div>