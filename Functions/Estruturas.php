<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Estruturas {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'estruturas_register_meta_boxes'));
   }

   public function init() {
      $this->estruturas_post_type();
   }

   public function estruturas_post_type() {

      $labels = array(
         'name'                => _x( 'A Estrutura', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'A Estrutura', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'A Estrutura', 'text_domain' ),
         'name_admin_bar'      => __( 'A Estrutura', 'text_domain' ),
         'parent_item_colon'   => __( 'A Estrutura pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os estruturas', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo estrutura', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo estrutura', 'text_domain' ),
         'edit_item'           => __( 'Ediar estrutura', 'text_domain' ),
         'update_item'         => __( 'Atualizar estrutura', 'text_domain' ),
         'view_item'           => __( 'Ver estrutura', 'text_domain' ),
         'search_items'        => __( 'Procurar estrutura', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'estruturas', 'text_domain' ),
         'description'         => __( 'Cadastro dos estruturas', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
      );

      register_post_type( 'estruturas', $args );

   }

   public function estruturas_register_meta_boxes( $meta_boxes ) {
      $prefix = 'estrutura_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}fotos",
         'title'      => 'Fotos da Estrutura',
         'post_types' => array( 'estruturas' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}fotos",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar fotos da Estrutura',
               'max_file_uploads' => 20,
            ),
         )
      );
      
      return $meta_boxes;
   }
}