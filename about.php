<?php
/*
Template Name: About Page
*/
get_header();
$img = get_template_directory_uri() . '/images/';
?>

<main class="about-page">

  <!-- Hero -->
  <section class="about-hero" style="background-image:url('<?php echo esc_url( $img . 'about-hero.jpg' ); ?>');">
    <div class="about-hero-overlay"></div>
    <div class="container about-hero-inner">
      <small class="eyebrow">OUR STORY</small>
      <h1>About <em>Your Company</em><br>Jute Bag Manufacturer India</h1>
      <p>A proud manufacturer and bulk exporter of eco-friendly jute, cotton, canvas &amp; juco bags — founded in Kolkata, India's jute capital, with a vision to make sustainable packaging the global standard.</p>
      <div class="about-btns">
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">GET A FREE QUOTE</a>
        <a class="btn-outline-light" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">VIEW OUR PRODUCTS</a>
      </div>

      <small class="listed-label">OFFICIAL BRAND LISTED ON</small>
      <div class="listed-badges">
        <span class="listed"><b>Amazon India</b> <i>Verified Seller</i></span>
        <span class="listed"><b>Flipkart</b> <i>Listed Brand</i></span>
        <span class="listed"><b>MSME Certified</b> <i>Govt. of India</i></span>
        <span class="listed"><b>IEC Registered</b> <i>Export Ready</i></span>
      </div>

      <nav class="crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> / <span>About Us</span></nav>
    </div>

    <div class="about-stats">
      <div class="container stats-grid">
        <div><strong>15+</strong><span>COUNTRIES SERVED</span></div>
        <div><strong>500+</strong><span>HAPPY BUYERS</span></div>
        <div><strong>200+</strong><span>BAG DESIGNS</span></div>
        <div><strong>1L+</strong><span>MONTHLY BAGS</span></div>
        <div><strong>24h</strong><span>QUOTE RESPONSE</span></div>
      </div>
    </div>
  </section>

  <!-- Who we are -->
  <section class="who">
    <div class="container who-grid">

      <div class="who-img">
        <img src="<?php echo esc_url( $img . 'about.jpg' ); ?>" alt="Our products">
      </div>

      <div class="who-text">
        <small class="eyebrow dark">WHO WE ARE</small>
        <h2>India's <em>Trusted Jute Bags</em><br>Manufacturer &amp; Exporter</h2>
        <span class="line"></span>

        <p class="lead">Your Company Pvt. Ltd. is a Kolkata-based manufacturer and bulk exporter of high-quality, eco-friendly jute, cotton, canvas &amp; juco bags — directed by <strong>Owner One</strong> and <strong>Owner Two</strong>.</p>
        <p>Incorporated recently and built on a strong legacy, our sister concern <strong>M/s Screen Print</strong> has been in the printing and bag manufacturing business since <strong>2009</strong>, giving us 15+ years of hands-on production expertise. This deep industry experience is at the core of every bag we make.</p>
        <p>Our brand is listed on <strong>Amazon</strong> and <strong>Flipkart</strong>, serving domestic retail customers across India, while simultaneously exporting to buyers in 15+ countries worldwide — from retail chains to fashion brands, corporates to NGOs.</p>

        <ul class="checks">
          <li>Pvt. Ltd. Registered Company — MCA Compliant</li>
          <li>IEC Registered — Export Ready</li>
          <li>GST Verified — India Buyers Welcome</li>
          <li>MSME Certified — Govt. of India</li>
          <li>Brand Listed on <strong>Amazon India &amp; Flipkart</strong></li>
          <li>Backed by M/s Screen Print — Est. 2009 (15+ Years)</li>
          <li>In-House Printing — CMYK, Digital, Embroidery, Foil</li>
        </ul>

        <div class="who-btns">
          <a class="btn-dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT US</a>
          <a class="link-caps" href="#certifications">CERTIFICATIONS</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Mission / Vision -->
  <section class="mv">
    <div class="container mv-grid">
      <div class="mv-card">
        <h3>Our Mission</h3>
        <p>To provide high-quality, eco-friendly bags and make sustainable packaging the global standard, while maintaining customer satisfaction.</p>
      </div>
      <div class="mv-card">
        <h3>Our Vision</h3>
        <p>To become a trusted and leading global exporter by continuously improving our products and services.</p>
      </div>
    </div>
  </section>

  <!-- Certifications -->
  <section class="certs" id="certifications">
    <div class="container">
      <small class="eyebrow dark">TRUST &amp; COMPLIANCE</small>
      <h2>Our <em>Certifications</em></h2>
      <div class="cert-grid">
        <div class="cert-card"><strong>Sedex · SMETA</strong><span>4-Pillar certified factory</span></div>
        <div class="cert-card"><strong>OEKO-TEX®</strong><span>Standard 100</span></div>
        <div class="cert-card"><strong>GOTS</strong><span>Global Organic Textile Standard</span></div>
        <div class="cert-card"><strong>GRS</strong><span>Global Recycled Standard</span></div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>