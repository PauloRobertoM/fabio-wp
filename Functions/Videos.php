<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Videos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'videos_register_meta_boxes'));
   }

   public function init() {
      $this->videos_post_type();
   }

   public function videos_post_type() {

      $labels = array(
         'name'                => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Videos', 'text_domain' ),
         'name_admin_bar'      => __( 'Videos', 'text_domain' ),
         'parent_item_colon'   => __( 'Video pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os videos', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo video', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo video', 'text_domain' ),
         'edit_item'           => __( 'Ediar video', 'text_domain' ),
         'update_item'         => __( 'Atualizar video', 'text_domain' ),
         'view_item'           => __( 'Ver video', 'text_domain' ),
         'search_items'        => __( 'Procurar video', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'videos', 'text_domain' ),
         'description'         => __( 'Cadastro dos videos', 'text_domain' ),
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

      register_post_type( 'videos', $args );

   }

   public function videos_register_meta_boxes( $meta_boxes ) {
      $prefix = 'videos_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto Principal do Vídeo',
         'post_types' => array( 'videos' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}foto",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar foto Principal',
               'max_file_uploads' => 1,
            ),
         )
      );
      $meta_boxes[] = array(
         'id' => '{$prefix}link',
         'title'      => 'Link de Destino',
         'post_types' => array( 'videos' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'   => "{$prefix}link",
               'type' => 'url',
               'name' => null,
            ),
         ),
      );
      
      return $meta_boxes;
   }

}