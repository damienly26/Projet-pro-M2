<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

  $parent_style = 'parent-style';

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style-editor-block.css' );
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style-rtl.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
  );
}

add_action('init', function() {
  pll_register_string("page-404", "We are sorry but the page you are looking for is not or no longer available.");
});
