<?php
function leather_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus( array( 'primary' => 'Primary Menu' ) );
}
add_action( 'after_setup_theme', 'leather_setup' );

function leather_scripts() {
  wp_enqueue_style( 'leather-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'leather_scripts' );