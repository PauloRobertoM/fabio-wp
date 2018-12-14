<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Projetos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'projetos_register_meta_boxes'));
   }

   public function init() {
      $this->projetos_post_type();
   }

   public function projetos_post_type() {

      $labels = array(
         'name'                => _x( 'Projetos', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Projeto', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Projetos', 'text_domain' ),
         'name_admin_bar'      => __( 'Projetos', 'text_domain' ),
         'parent_item_colon'   => __( 'Projeto pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os projetos', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo projeto', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo projeto', 'text_domain' ),
         'edit_item'           => __( 'Ediar projeto', 'text_domain' ),
         'update_item'         => __( 'Atualizar projeto', 'text_domain' ),
         'view_item'           => __( 'Ver projeto', 'text_domain' ),
         'search_items'        => __( 'Procurar projeto', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'projetos', 'text_domain' ),
         'description'         => __( 'Cadastro de projetos', 'text_domain' ),
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

      register_post_type( 'projetos', $args );
   }

   public function projetos_register_meta_boxes( $meta_boxes ) {      
      return $meta_boxes;
   }
}