<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container header-inner">

    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <?php bloginfo( 'name' ); ?>
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">&#9776;</button>

    <nav class="main-nav" id="mainNav">
      <ul class="menu"> 
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>

        <li class="has-dropdown">
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="dropdown-toggle">About Us <span class="arrow">▾</span></a>
          <ul class="sub-menu">
            <li><a href="<?php echo esc_url( home_url( '/company-overview/' ) ); ?>">Company Overview</a></li>
            <li><a href="<?php echo esc_url( home_url( '/csr-policy/' ) ); ?>">CSR Policy</a></li>
            <li><a href="<?php echo esc_url( home_url( '/manufacturing-guide/' ) ); ?>">Manufacturing Guide</a></li>
            <li><a href="<?php echo esc_url( home_url( '/sampling-policy/' ) ); ?>">Sampling Policy</a></li>
            <li><a href="<?php echo esc_url( home_url( '/shipping-logistics/' ) ); ?>">Shipping &amp; Logistics</a></li>
            <li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
            <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
          </ul>
        </li>

        <li class="has-dropdown has-mega">
          <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="dropdown-toggle">Products <span class="arrow">▾</span></a>

          <div class="mega-menu">
            <?php
            $img = get_template_directory_uri() . '/images/';
            $cats = array(
              array( 'Jute Bags',        'jute-bags',        'jute.jpg' ),
              array( 'Cotton Bags',      'cotton-bags',      'cotton.jpg' ),
              array( 'Canvas Bags',      'canvas-bags',      'canvas.jpg' ),
              array( 'Juco Bags',        'juco-bags',        'juco.jpg' ),
              array( 'Promotional Bags', 'promotional-bags', 'promotional.jpg' ),
              array( 'Fashion Bags',     'fashion-bags',     'fashion.jpg' ),
              array( 'Accessories',      'accessories',      'accessories.jpg' ),
            );
            foreach ( $cats as $c ) : ?>
              <a class="mega-card" href="<?php echo esc_url( home_url( '/' . $c[1] . '/' ) ); ?>">
                <span class="mega-img"><img src="<?php echo esc_url( $img . $c[2] ); ?>" alt="<?php echo esc_attr( $c[0] ); ?>"></span>
                <span class="mega-title"><?php echo esc_html( $c[0] ); ?></span>
              </a>
            <?php endforeach; ?>
            <a class="mega-card mega-all" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
              <span class="mega-viewall">VIEW ALL</span>
            </a>
          </div>
        </li>

        <li><a href="<?php echo esc_url( home_url( '/bespoke-prints/' ) ); ?>">Bespoke Prints</a></li>
        <li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">Gallery</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
      </ul>
    </nav>

  </div>
</header>