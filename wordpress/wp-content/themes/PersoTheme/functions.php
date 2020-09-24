<?php 

function theme_support(){
      add_theme_support('title-tag');
}
function theme_register_assets(){
      wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
      wp_enqueue_style('bootstrap');
}
add_action('after_setup_theme', 'theme_support');
add_action('wp_enqueue_scripts', 'theme_register_assets');