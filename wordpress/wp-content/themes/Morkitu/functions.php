<?php
// Type de poste "Pâte"
function register_pates_post_type() {
      register_post_type( 'pates', array(
          'labels' => array(
              'name' => 'Pâtes',
              'singular_name' => 'Pâte',
          ),
          'public' => true,
          'show_ui' => true,
          'has_archive' => true,
          'show_in_menu' => 'edit.php?post_type=pates',
          'supports' => array( 'title' ,'thumbnail', 'editor' ),
      ) );
  }
  add_action( 'init', 'register_pates_post_type' );

  // Ajout de la possibilité de gérer ses menus
function register_theme_menus(){
      register_nav_menus(
            array(
                  'menu-header-1' => __('Emplacement Principal' ),
                  'menu-footer-1' => __('Emplacement Pied de page 1'),
            )
      );
}
add_action( 'init', 'register_theme_menus');


// Enlève l'éditeur de texte de wordpress 

  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Enlève certains menu inutile  pour le client
function my_wpadmin_sidebar_menu() {
      remove_menu_page( 'index.php' );  // 'Dashboard'
      remove_menu_page( 'upload.php' );   // 'Media'
      remove_menu_page( 'edit-comments.php' );
      remove_submenu_page('upload.php','media-new.php'); 
      remove_submenu_page('plugins.php','plugin-install.php'); //plugins
      remove_submenu_page('plugins.php','plugin-editor.php');
  }
  add_action('admin_menu','my_wpadmin_sidebar_menu', 999);