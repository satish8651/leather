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


// All page link----------------------------------------------------------------------------------

function leather_create_pages() {
  // Agar pehle ek baar chal chuka hai to dobara nahi chalega
  if ( get_option( 'leather_pages_created' ) ) {
    return;
  }

  $pages = array(
    // slug               => title
    'about'               => 'About Us',
    'products'            => 'Products',
    'bespoke-prints'      => 'Bespoke Prints',
    'gallery'             => 'Gallery',
    'contact'             => 'Contact',
    'company-overview'    => 'Company Overview',
    'csr-policy'          => 'CSR Policy',
    'manufacturing-guide' => 'Manufacturing Guide',
    'sampling-policy'     => 'Sampling Policy',
    'shipping-logistics'  => 'Shipping & Logistics',
    'terms-conditions'    => 'Terms & Conditions',
    'faq'                 => 'FAQ',
    'jute-bags'           => 'Jute Bags',
    'cotton-bags'         => 'Cotton Bags',
    'canvas-bags'         => 'Canvas Bags',
    'juco-bags'           => 'Juco Bags',
    'promotional-bags'    => 'Promotional Bags',
    'fashion-bags'        => 'Fashion Bags',
    'accessories'         => 'Accessories',
  );

  foreach ( $pages as $slug => $title ) {
    // Page pehle se ho to skip
    if ( get_page_by_path( $slug ) ) {
      continue;
    }
    wp_insert_post( array(
      'post_title'   => $title,
      'post_name'    => $slug,
      'post_status'  => 'publish',
      'post_type'    => 'page',
      'post_content' => '',
    ) );
  }

  update_option( 'leather_pages_created', 1 );
  flush_rewrite_rules();
}
add_action( 'init', 'leather_create_pages' );

//All page link-----------------------------------------------------------------------------------------------

function leather_set_permalinks() {
  if ( get_option( 'leather_permalinks_set' ) ) {
    return;
  }
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure( '/%postname%/' );
  $wp_rewrite->flush_rules();
  update_option( 'leather_permalinks_set', 1 );
}
add_action( 'init', 'leather_set_permalinks' );