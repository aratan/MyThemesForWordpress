<?php
function Tema1_agregar_css_js() {

  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array ( 'jquery' ), '1.16', true);
  wp_enqueue_script( 'bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('popper'), '4.5',true);  
  /* Mis Javascript personalizados */
  wp_enqueue_script( 'main-js',get_template_directory_uri() . '/js/main.js', array('bootstrap-js'), '1.0',true);  
  }
  add_action( 'wp_enqueue_scripts', 'Tema1_agregar_css_js' );

/* Añade en la configuración donde Post la opcion de Imagenes destacadas*/
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }

 /* Añadir la opcion de widget para Aside SideBar*/
function Tema1_widgets(){
  register_sidebar(array(
    'id'            => 'widgets-derecha',
    'name'          => __( 'Widgets Derecha' ),
    'description'   => __( 'Arrastralo.' ),
    'before_widget' => '<div class="card-body vic_ar">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4><hr>',
  ));
}
add_action('widgets_init','Tema1_widgets');

