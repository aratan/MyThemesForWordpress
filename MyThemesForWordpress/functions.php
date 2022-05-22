<?php
/* Este fichero sirve para añadir tu propio codigo al final */

function Tema1_agregar_css_js() {
/* css */
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.1', 'all');
  wp_enqueue_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" );
  wp_enqueue_style( 'styles', get_stylesheet_uri());
/* Mis Javascript personalizados */
  wp_enqueue_script('jquery',"https://code.jquery.com/jquery-3.6.0.min.js");
  wp_enqueue_script('bootstrap-js',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array('jquery'), '3.6.0',true);  
  wp_enqueue_script('main-js',get_template_directory_uri() . '/js/main.js', array('bootstrap-js'), '1.0',true);  
  }

  add_action( 'wp_enqueue_scripts', 'Tema1_agregar_css_js' );

/* Añade en la configuración donde Post la opcion de Imagenes destacadas*/
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
/*  tamaños de imagen adicionales
    elimine la siguiente línea si no necesita tamaños de imagen adicionales */
      add_image_size( 'category-thumb', 300, 9999 ); 
/*  300 pixels wide (and unlimited height) */
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

/* Remplaza en el titulo Hello por Hola con Filter */
add_filter( 'the_title', 'dcms_filtro_titulo' );

function dcms_filtro_titulo( $titulo ) {
  print_r($post_object);
  $titulo = str_replace('Hello', 'Hola', $titulo);
    return $titulo;
}

/* Remplaza en el titulo Word por Mundo con action */
add_action( 'the_post', 'dcms_cambiar_objeto_post' );

function dcms_cambiar_objeto_post( $post_object ) {
	// print_r($post_object);
	$post_object->post_title = str_replace('world', 'Mundo !!!', $post_object->post_title);
}

/* sólo tiene efecto en las entradas, agregando el slug blog en la url 
  quedaria: 127.0.0.1/blog/rosario 
*/
add_action('generate_rewrite_rules', 'dcms_posts_add_rewrite_rules');
function dcms_posts_add_rewrite_rules( $wp_rewrite ){
	$slug = "blog";
    $new_rules = [
        $slug.'/page/([0-9]{1,})/?$' => 'index.php?post_type=post&paged='. $wp_rewrite->preg_index(1),
        $slug.'/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    ];
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
    return $wp_rewrite->rules;
}

add_filter('post_link', 'dcms_posts_change_blog_links', 1, 3);
function dcms_posts_change_blog_links($post_link, $id=0){
	$slug = "blog";
    $post = get_post($id);
    if( is_object($post) && $post->post_type == 'post'){
        return home_url('/'.$slug.'/'. $post->post_name.'/');
    }
    return $post_link;
}



function modify_read_more_link() {
  return '<a class="more-link" href="' . get_permalink() . '">Texto leer mas cambiado ...</a>';
  }
  add_filter( 'the_content_more_link', 'modify_read_more_link' );



/*videos yt */
add_filter( 'the_content', 'dcms_change_embebed_youtube');

function dcms_change_embebed_youtube( $content ){
  if ( ! is_singular('post') ) return $content;

  $pattern = "/youtube\.com\/embed\/(((?!rel=0).)+?)\"/";
  $substitution = "youtube.com/embed/$1/?rel=0\"";
  $content = preg_replace($pattern, $substitution, $content);

  return $content;
}

/* Navegacion /menús */
register_nav_menus( array(
  'menu_principal' => __('Menu_Principal', 'BlogLoibra')
) );
