<?php
function twentynineteen_enqueue_styles() {
  // Tema padre
  $parent_style = 'twentynineteen-style';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

  // Tema hijo
  wp_enqueue_style( 'child-style',
      get_stylesheet_directory_uri() . '/style.css',  // Ruta
      array( $parent_style ),                         // Dependencias (tema padre)
      wp_get_theme()->get('Version')                  // Versión, la capturamos de forma dinámica
  );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_enqueue_styles' );
?>