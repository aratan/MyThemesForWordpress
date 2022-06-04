<?php
/**
 * @package Básico
 * @version 0.1
 */

/*
 Plugin name: Post Chulos
    Plugin URI: https://wordpress.org/plugins/post-types-order/
    Description: Post Types Order allows you to change the order of the custom post types in the admin menu.
    Version: 1.1.1
    Author: Victor Arbiol
    Author URI: https://www.victorarbiol.com/
    Text Domain: lang
*/

// Registrar Custom Post Type este va a nuestrar clases
if(!defined('ABSPATH')) die();

function empresa_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'empresa' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'empresa' ),
		'menu_name'             => __( 'Clases', 'empresa' ),
		'name_admin_bar'        => __( 'Clase', 'empresa' ),
		'archives'              => __( 'Archivo', 'empresa' ),
		'attributes'            => __( 'Atributos', 'empresa' ),
		'parent_item_colon'     => __( 'Clase Padre', 'empresa' ),
		'all_items'             => __( 'Todas Las Clases', 'empresa' ),
		'add_new_item'          => __( 'Agregar Clase', 'empresa' ),
		'add_new'               => __( 'Agregar Clase', 'empresa' ),
		'new_item'              => __( 'Nueva Clase', 'empresa' ),
		'edit_item'             => __( 'Editar Clase', 'empresa' ),
		'update_item'           => __( 'Actualizar Clase', 'empresa' ),
		'view_item'             => __( 'Ver Clase', 'empresa' ),
		'view_items'            => __( 'Ver Clases', 'empresa' ),
		'search_items'          => __( 'Buscar Clase', 'empresa' ),
		'not_found'             => __( 'No Encontrado', 'empresa' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'empresa' ),
		'featured_image'        => __( 'Imagen Destacada', 'empresa' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'empresa' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'empresa' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'empresa' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'empresa' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'empresa' ),
		'items_list'            => __( 'Lista de Clases', 'empresa' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'empresa' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'empresa' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'empresa' ),
		'description'           => __( 'Clases para el Sitio Web', 'empresa' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail','custom-fields' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'empresa_clases', $args );

}
add_action( 'init', 'empresa_clases_post_type', 0 );
// añade opciones en administracion