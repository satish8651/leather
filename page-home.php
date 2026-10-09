<?php
/*
Template Name: Home Page
*/
get_header();
$img = get_template_directory_uri() . '/images/';
?>

<main class="home-page">

  <!-- Hero slider -->
  <section class="hero" id="hero">

    <div class="hero-slide active" style="background-image:url('<?php echo esc_url( $img . 'hero1.jpg' ); ?>');">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <span class="hero-badge">JUTE + COTTON BLEND · ECO PREMIUM · EXPORT READY</span>
        <h1>Premium <em>Juco Bags</em> — Soft, Stylish &amp; Eco</h1>
        <p>Juco (Jute + Cotton blend) bags — the perfect combination of eco-friendliness and premium feel. Soft printable surface, ideal for gifting, retail and corporate branding.</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get Free Quote</a>
        <a class="btn-secondary" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">View Products</a>
      </div>
    </div>

    <div class="hero-slide" style="background-image:url('<?php echo esc_url( $img . 'hero2.jpg' ); ?>');">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <span class="hero-badge">100% NATURAL · BIODEGRADABLE</span>
        <h1>Jute Bags <em>Manufacturer</em> &amp; Exporter</h1>
        <p>Direct factory pricing, custom branding, free samples and worldwide shipping from Kolkata.</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/bespoke-prints/' ) ); ?>">Bespoke Prints</a>
      </div>
    </div>

    <div class="hero-slide" style="background-image:url('<?php echo esc_url( $img . 'hero3.jpg' ); ?>');">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <span class="hero-badge">CANVAS · COTTON · JUTE</span>
        <h1>Custom <em>Eco Bags</em> for Your Brand</h1>
        <p>Low MOQ, premium prints and fast sampling for retailers and corporates.</p>
        <a class="btn-primary" href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">See Gallery</a>
      </div>
    </div>

    <button class="hero-arrow prev" aria-label="Previous">&#10094;</button>
    <button class="hero-arrow next" aria-label="Next">&#10095;</button>
    <div class="hero-dots"></div>
  </section>

  <!-- Highlights -->
  <section class="highlights">
    <div class="container highlight-grid">
      <div class="hl-card"><strong>15+</strong><span>Countries Exported</span></div>
      <div class="hl-card"><strong>200</strong><span>Pcs MOQ (India)</span></div>
      <div class="hl-card"><strong>5-8</strong><span>Days Sampling</span></div>
      <div class="hl-card"><strong>4</strong><span>Certifications</span></div>
    </div>
  </section>


<!-- Our Purpose Vision & Mission home page style------------------------------------------------------------------------ -->


  <!-- Our Story -->
  <section class="story">
    <div class="container">

      <p class="story-note">Weldiore was established recently, built on a legacy screen-printing business operating for years. Figures reflect our combined manufacturing experience; export reach is backed by IEC registration and shipment records.</p>

      <div class="story-grid">

        <div class="story-images">
          <div class="story-card">
            <img src="<?php echo esc_url( $img . 'story1.jpg' ); ?>" alt="Our bags">
            <div class="story-caption">
              <strong>100% Natural &amp; Biodegradable</strong>
              <span>Every bag protects the planet</span>
            </div>
          </div>
          <img class="story-img2" src="<?php echo esc_url( $img . 'story2.jpg' ); ?>" alt="Our collection">
        </div>

        <div class="story-text">
          <small class="eyebrow dark">OUR STORY</small>
          <h2>India's Trusted <em>Jute Bags</em> Manufacturer &amp; Exporter</h2>
          <p>Welcome to <strong>Weldiore</strong> — a proud manufacturer and bulk exporter of high-quality, eco-friendly jute, cotton, canvas &amp; juco bags. Founded in Kolkata, India's jute capital, with a vision to make sustainable packaging the global standard.</p>
          <p>Our in-house screen printing facility offers CMYK, digital, embroidery, glitter and gold foil printing — making every bag uniquely yours. From small businesses to large international importers across 15+ countries, we deliver quality and reliability.</p>

          <blockquote class="story-quote">"Join us in making the planet plastic-free — one jute bag at a time."</blockquote>

          <div class="story-features">
            <div class="sf"><strong>100% Natural Materials</strong><span>Jute, cotton, canvas, juco — zero plastic</span></div>
            <div class="sf"><strong>In-House Screen Printing</strong><span>Your branding, our expertise</span></div>
            <div class="sf"><strong>Global Export Ready</strong><span>IEC registered, 15+ countries shipped</span></div>
            <div class="sf"><strong>Registered &amp; Transparent</strong><span>Pvt. Ltd. GST &amp; MCA compliant</span></div>
          </div>

          <div class="who-btns">
            <a class="btn-dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT US</a>
            <a class="link-caps" href="<?php echo esc_url( home_url( '/about/#certifications' ) ); ?>">CERTIFICATIONS</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ---OUR PURPOSE Vision & Mission home page style-------------------------------------------------------------------------------- -->

    <!-- Vision & Mission -->
  <section class="vm">
    <div class="container">

      <div class="vm-head">
        <small class="eyebrow dark">OUR PURPOSE</small>
        <h2>Vision &amp; Mission</h2>
        <span class="vm-line"></span>
        <p>We are not just selling bags — we are building a sustainable future for businesses and the planet, one order at a time.</p>
      </div>

      <div class="vm-grid">

        <div class="vm-card vm-light">
          <small class="eyebrow dark">OUR VISION</small>
          <h3>A Global Leader<br>in Eco-Friendly Bags</h3>
          <p>To become the world's most trusted manufacturer and exporter of eco-friendly jute bags — setting the gold standard in quality, sustainability, and design for global buyers across every continent.</p>
          <ul class="vm-tags">
            <li>Recognised globally for premium quality &amp; craftsmanship</li>
            <li>Empowering local artisan communities through eco-craft</li>
            <li>Plastic-free planet — one bag at a time</li>
          </ul>
        </div>

        <div class="vm-card vm-dark">
          <small class="eyebrow">OUR MISSION</small>
          <h3>What We<br>Stand For</h3>
          <ul class="vm-bullets">
            <li>Manufacture and deliver high-quality, eco-conscious bags that meet the diverse needs of Indian and global buyers — from retail chains to importers in Europe, USA, Japan &amp; beyond.</li>
            <li>Inspire businesses globally to adopt sustainable packaging through affordable, beautiful natural fibre products — making your brand greener and more profitable.</li>
            <li>Offer fully customised bags — your logo, your colours, your story — with precision printing, strict quality control, and on-time delivery every single time.</li>
            <li>Build long-term, transparent partnerships with both Indian and international clients through ethical business practices, competitive pricing, and excellent service.</li>
          </ul>
        </div>

      </div>
    </div>

    <div class="vm-strip">
      <div class="container">
        <p><strong>Weldiore</strong> is a bags manufacturer and exporter based in Kolkata, India. We manufacture custom jute bags, cotton tote bags, canvas bags and juco bags for wholesale importers, retailers and brands across USA, UK, Germany, France, UAE, Australia, Canada, Morocco and 15+ countries. Free samples available. Contact: <a href="tel:+918100611554">+91 81006 11554</a> | <a href="mailto:info@example.com">info@example.com</a></p>
      </div>
    </div>
  </section>

  <!-- <!Our Products Eco Bags We Manufacture & Export-- ------------------------------------------------------------------------------------ -->


    <!-- Products -->
  <section class="prod">
    <div class="container">

      <div class="prod-head">
        <div>
          <small class="eyebrow dark">OUR PRODUCTS</small>
          <h2>Eco Bags We <em>Manufacture &amp; Export</em></h2>
          <span class="prod-line"></span>
          <p>Custom-made, bulk-ready eco-friendly bags for retail, grocery, gifting, and corporate use. All products available with custom branding and printing.</p>
        </div>
        <div class="prod-certs">
          <small>CERTIFIED FACTORY</small>
          <div><span>Sedex · SMETA</span><span>OEKO-TEX®</span><span>GOTS</span><span>GRS</span></div>
        </div>
      </div>

      <?php
      $products = array(
        array(
          'title' => 'Jute Bags', 'badge' => 'BEST SELLER', 'img' => 'jute.jpg', 'slug' => 'jute-bags',
          'desc'  => 'Natural, biodegradable jute shopping bags, grocery bags, wine bags, gift bags. Heavy-duty stitching, custom sizes available.',
          'features' => array( 'Custom sizes & shapes', 'Screen / digital print', 'MOQ: 500 pcs', '100% biodegradable' ),
        ),
        array(
          'title' => 'Cotton Bags', 'badge' => 'GOTS CERT.', 'img' => 'cotton.jpg', 'slug' => 'cotton-bags',
          'desc'  => 'Organic cotton tote bags, muslin bags, drawstring bags, and pouches. Naturally dyed or white. Ideal for retail, fashion & gifting.',
          'features' => array( '100% organic cotton', 'GOTS — in process', 'MOQ: 500 pcs', 'Natural dye available' ),
        ),
        array(
          'title' => 'Canvas Bags', 'badge' => 'HEAVY DUTY', 'img' => 'canvas.jpg', 'slug' => 'canvas-bags',
          'desc'  => 'Durable canvas tote bags, backpacks, and shopper bags. Thick duck canvas construction with full-colour custom branding options.',
          'features' => array( '10 oz - 20 oz canvas', 'Full-colour printing', 'MOQ: 500 pcs (200 per style)', 'Long-lasting & washable' ),
        ),
        array(
          'title' => 'Juco Bags', 'badge' => 'ECO BLEND', 'img' => 'juco.jpg', 'slug' => 'juco-bags',
          'desc'  => 'Juco (Jute + Cotton blend) bags — soft texture, premium finish, eco-friendly. Perfect for retail, gifting, and corporate promotions.',
          'features' => array( 'Jute + cotton blend', 'Premium soft finish', 'MOQ: 500 pcs', 'Export to 15+ countries' ),
        ),
      );
      ?>

      <div class="prod-grid">
        <?php foreach ( $products as $p ) : ?>
          <article class="pcard">
            <div class="pcard-img">
              <img src="<?php echo esc_url( $img . $p['img'] ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>">
              <span class="pcard-badge"><?php echo esc_html( $p['badge'] ); ?></span>
            </div>
            <div class="pcard-body">
              <h3><?php echo esc_html( $p['title'] ); ?></h3>
              <p><?php echo esc_html( $p['desc'] ); ?></p>
              <ul>
                <?php foreach ( $p['features'] as $f ) : ?>
                  <li><?php echo esc_html( $f ); ?></li>
                <?php endforeach; ?>
              </ul>
              <a class="pcard-link" href="<?php echo esc_url( home_url( '/' . $p['slug'] . '/' ) ); ?>">VIEW <?php echo esc_html( strtoupper( $p['title'] ) ); ?> →</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="prod-btns">
  <a class="btn-cat" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
    <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
      <rect x="1" y="1" width="6" height="6" rx="1"/>
      <rect x="9" y="1" width="6" height="6" rx="1"/>
      <rect x="1" y="9" width="6" height="6" rx="1"/>
      <rect x="9" y="9" width="6" height="6" rx="1"/>
    </svg>
    VIEW FULL CATALOGUE
  </a>
  <a class="btn-quote" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
    <svg width="12" height="14" viewBox="0 0 12 16" fill="currentColor" aria-hidden="true">
      <path d="M1 0h6l4 4v11a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm5 1v4h4z"/>
    </svg>
    REQUEST CUSTOM QUOTE
  </a>
</div>  

    </div>
  </section>

  <!-----WHO WE SERVE Indian & International Buyers Welcome homepage style.css- ------------------------------------------------ -->


    <!-- Who We Serve -->
  <section class="serve">
    <div class="container serve-head">
      <small class="eyebrow dark">WHO WE SERVE</small>
      <h2>Indian &amp; International Buyers Welcome</h2>
    </div>

    <?php
    $buyers = array(
      array( 'Book Publishers',      'Library & School Bags' ),
      array( 'Cosmetic Brands',      'Beauty & Wellness' ),
      array( 'Hotels & Hospitality', 'Amenity & Gift Bags' ),
      array( 'Organic Food Brands',  'Eco Packaging' ),
      array( 'Schools & Colleges',   'Branded Bags & Totes' ),
      array( 'Retail Chains',        'India & Global' ),
      array( 'Importers',            'EU, USA, Australia' ),
      array( 'Fashion Brands',       'Boutiques & Labels' ),
      array( 'Corporate Gifting',    'Bulk Custom Orders' ),
      array( 'Supermarkets',         'White-label Bags' ),
      array( 'Pharma & FMCG',        'Promo Bags' ),
      array( 'Wholesalers',          'India-wide Network' ),
      array( 'E-Commerce',           'Amazon, Flipkart etc.' ),
      array( 'NGOs & Events',        'Awareness Campaigns' ),
    );
    ?>

    <div class="serve-marquee">
      <div class="serve-track">
        <?php for ( $i = 0; $i < 2; $i++ ) : // list 2 baar, taaki loop smooth chale ?>
          <?php foreach ( $buyers as $b ) : ?>
            <div class="serve-chip">
              <strong><?php echo esc_html( $b[0] ); ?></strong>
              <span><?php echo esc_html( $b[1] ); ?></span>
            </div>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!--CUSTOM PRINT SHOWCASE Our Latest Designs — Ready to Customise- homepage.style.css ------------------------------------------------------- -->


  <section class="custom-print-showcase">
  <div class="cps-container">
    
    <!-- Section Header -->
    <div class="cps-header">
      <span class="cps-subheading">CUSTOM PRINT SHOWCASE</span>
      <h2 class="cps-title">
        Our <em>Latest Designs</em> &mdash; Ready to Customise
      </h2>
      <p class="cps-description">
        From floral prints to minimalist botanicals &mdash; every design is fully customisable with 
        your brand logo, colours and message. These are just a few examples of what we craft 
        for our global buyers.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="cps-cards-grid">
      <!-- Card 1 -->
      <div class="cps-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/floral-nature.jpg" alt="Floral Nature Collection" class="cps-card-img" />
        <div class="cps-card-overlay">
          <span class="cps-card-tag">JUTE BAGS</span>
          <h3 class="cps-card-heading">Floral Nature Collection</h3>
          <p class="cps-card-text">
            Full-colour print on natural jute &mdash; available in custom sizes &amp; MOQ 500 pcs (100 pcs per style)
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="cps-card">
        <img src="<?php echo get_template_directory_uri(); ?>/images/botanical-positivity.jpg" alt="Botanical Positivity Range" class="cps-card-img" />
        <div class="cps-card-overlay">
          <span class="cps-card-tag">JUTE &amp; COTTON</span>
          <h3 class="cps-card-heading">Botanical Positivity Range</h3>
          <p class="cps-card-text">
            Coloured jute &amp; cotton bags with screen print &mdash; retail &amp; gifting ready
          </p>
        </div>
      </div>
    </div>

    <!-- Bottom Buttons -->
    <div class="cps-cta-buttons">
      <a href="/contact" class="cps-btn cps-btn-dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
        REQUEST CUSTOM DESIGN
      </a>
      <a href="/gallery" class="cps-btn cps-btn-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
        VIEW FULL GALLERY
      </a>
    </div>

  </div>
</section>

<!-- -----★ PREMIUM PRINTING & BRANDING SOLUTIONS FOR ECO-FRIENDLY BAGS ★ Custom Printed Jute Bags & Printing Techniques------------------------------------------------------- -->



<section class="printing-techniques-section">
  <div class="pts-container">
    
    <!-- Top Heading -->
    <div class="pts-header">
      <span class="pts-subheading">&#9733; PREMIUM PRINTING &amp; BRANDING SOLUTIONS FOR ECO-FRIENDLY BAGS &#9733;</span>
      <h2 class="pts-title">Custom Printed Jute Bags &amp; Printing Techniques</h2>
      <p class="pts-description">
        Explore premium custom printing options for <strong>eco-friendly jute bags</strong>, <strong>cotton bags</strong>, 
        canvas bags, and promotional bags. Vadalo Ventures &mdash; a trusted <a href="#">jute bags manufacturer in India</a> &mdash; 
        offers high-quality screen printing, sublimation printing, puff printing, embroidery, foil printing, digital printing, 
        and customised branding solutions for global wholesale buyers and businesses.
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="pts-tabs-wrapper">
      <button class="pts-tab-btn active" data-tab="all">Printing Techniques</button>
      <button class="pts-tab-btn" data-tab="extra">Extra Features</button>
      <button class="pts-tab-btn" data-tab="fabric">Fabric Types</button>
      <button class="pts-tab-btn" data-tab="styles">Bag Styles &amp; Shapes</button>
      <button class="pts-tab-btn" data-tab="packaging">Bags Packaging Types</button>
      <button class="pts-tab-btn" data-tab="zippers">All Types of Zippers</button>
      <button class="pts-tab-btn" data-tab="handles">All Types of Handles</button>
      <button class="pts-tab-btn" data-tab="stitching">Bag Stitching Types</button>
    </div>

    <!-- Techniques Grid -->
    <div class="pts-grid">
      
      <!-- Card 1 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <span class="pts-badge gold">MOST POPULAR</span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/cmyk-print.jpg" alt="CMYK Print" />
        </div>
        <div class="pts-card-content">
          <h3>CMYK Print</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/digital-print.jpg" alt="Digital Print" />
        </div>
        <div class="pts-card-content">
          <h3>Digital Print</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <span class="pts-badge gold">PREMIUM</span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/embroidery.jpg" alt="Embroidery" />
        </div>
        <div class="pts-card-content">
          <h3>Embroidery</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/glitter-print.jpg" alt="Glitter Print" />
        </div>
        <div class="pts-card-content">
          <h3>Glitter Print</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <span class="pts-badge gold">LUXURY</span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/gold-foil.jpg" alt="Gold Foil Print" />
        </div>
        <div class="pts-card-content">
          <h3>Gold Foil Print</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/screen-printing.jpg" alt="Screen Printing" />
        </div>
        <div class="pts-card-content">
          <h3>Screen Printing</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/heat-transfer.jpg" alt="Heat Transfer Printing" />
        </div>
        <div class="pts-card-content">
          <h3>Heat Transfer Printing</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sublimation.jpg" alt="Sublimation Printing" />
        </div>
        <div class="pts-card-content">
          <h3>Sublimation Printing</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/tonal-print.jpg" alt="Tonal Print" />
        </div>
        <div class="pts-card-content">
          <h3>Tonal Print</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="pts-card" data-category="all">
        <div class="pts-card-img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/puff-printing.jpg" alt="Puff Printing (Raised Effect)" />
        </div>
        <div class="pts-card-content">
          <h3>Puff Printing (Raised Effect)</h3>
          <a href="#" class="pts-read-more">&#9662; Read more</a>
        </div>
      </div>

    </div>

    <!-- Bottom Minimum Order Banner -->
    <div class="pts-banner">
      <div class="pts-banner-left">
        <span class="pts-banner-tag">MINIMUM ORDER</span>
        <h3 class="pts-banner-title">Custom Printed Bags Starting from 100 pcs</h3>
        <p class="pts-banner-sub">Physical samples sent before bulk production available. Free artwork review.</p>
      </div>
      <div class="pts-banner-right">
        <a href="/sample-request" class="cps-btn cps-btn-dark pts-sample-btn">REQUEST PRINT SAMPLE</a>
      </div>
    </div>

  </div>
</section>

<!-- Filter Tabs JS Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const tabs = document.querySelectorAll(".pts-tab-btn");
  const cards = document.querySelectorAll(".pts-card");

  tabs.forEach(tab => {
    tab.addEventListener("click", function() {
      tabs.forEach(t => t.classList.remove("active"));
      this.classList.add("active");

      const target = this.getAttribute("data-tab");
      cards.forEach(card => {
        if (target === "all" || card.getAttribute("data-category") === target) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
});
</script>


<!-- /* --BESPOKE MANUFACTURING Create Your Unique Product Range homepage.------------------------------------------ */------------------------------------ -->


<section class="bespoke-manufacturing-section">
  <div class="bm-container">
    <div class="bm-row">
      
      <!-- Left Column: Content, Tags & CTA -->
      <div class="bm-left-col">
        <span class="bm-subheading">BESPOKE MANUFACTURING</span>
        <h2 class="bm-title">Create Your Unique Product Range</h2>
        <p class="bm-description">
          Have a rough design or idea? Share it with us. Our in-house screen printing and manufacturing team 
          will bring your vision to life &mdash; CMYK, digital, embroidery, glitter, gold foil and more &mdash; 
          all under one roof in Kolkata.
        </p>

        <!-- Feature Tags Grid -->
        <div class="bm-tags-grid">
          <div class="bm-tag-item">Screen Printing</div>
          <div class="bm-tag-item">CMYK / Digital</div>
          <div class="bm-tag-item">Embroidery</div>
          <div class="bm-tag-item">Glitter Print</div>
          <div class="bm-tag-item">Gold Foil Print</div>
          <div class="bm-tag-item">Custom Sizes</div>
          <div class="bm-tag-item">Inner Labels</div>
          <div class="bm-tag-item">Zipper / Magnetic</div>
          <div class="bm-tag-item">Custom Handles</div>
          <div class="bm-tag-item">Pantone Matching</div>
        </div>

        <!-- Call to Action Button -->
        <div class="bm-cta-wrap">
          <a href="/custom-order" class="cps-btn bm-btn-gold">START CUSTOMIZING</a>
        </div>
      </div>

      <!-- Right Column: Vertical Process Steps (1-5) -->
      <div class="bm-right-col">
        <div class="bm-process-timeline">
          
          <!-- Step 1 -->
          <div class="bm-step-item">
            <div class="bm-step-number">1</div>
            <div class="bm-step-content">
              <h3>Share Requirements</h3>
              <p>Product type, size, quantity, print design &mdash; tell us everything via form, email or WhatsApp. No detail is too small.</p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="bm-step-item">
            <div class="bm-step-number">2</div>
            <div class="bm-step-content">
              <h3>Receive Quotation</h3>
              <p>Detailed pricing &amp; lead time within 48 hours. Transparent costing &mdash; no hidden charges, ever.</p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="bm-step-item">
            <div class="bm-step-number">3</div>
            <div class="bm-step-content">
              <h3>Sample Approval</h3>
              <p>Physical pre-production samples shipped to you before bulk production begins. Revisions included.</p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="bm-step-item">
            <div class="bm-step-number">4</div>
            <div class="bm-step-content">
              <h3>Production &amp; QC</h3>
              <p>Manufacturing with strict quality checks at every stage &mdash; fabric, stitching, printing and finishing.</p>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="bm-step-item">
            <div class="bm-step-number">5</div>
            <div class="bm-step-content">
              <h3>Pack &amp; Export</h3>
              <p>Professionally packed, documented &amp; shipped on time worldwide &mdash; with full tracking and export documents.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- ---Our Advantages Why Buyers Choose Vadalo Ventures----------------------------------------------------------------------------------- -->


<!-- Why Buyers Choose Us Section -->
<section class="why-choose-us-section">
  <div class="wcu-container">
    
    <!-- Section Header -->
    <div class="wcu-header">
      <span class="wcu-subheading">OUR ADVANTAGES</span>
      <h2 class="wcu-title">Why Buyers Choose <em>Vadalo Ventures</em></h2>
      <p class="wcu-description">
        Trusted by importers, retailers and brands across 15+ countries. Here's what makes Vadalo the right manufacturing partner.
      </p>
    </div>

    <!-- Top Badge Pills Grid (4x2) -->
    <div class="wcu-pills-grid">
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Manufacturer Based in India
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> OEM &amp; Private Label Support
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Custom Printing &amp; Branding
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Export-Grade Packaging
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Bulk Order Capability (3,000+/day)
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Worldwide Shipping Support
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Sample Development (5–8 Days)
      </div>
      <div class="wcu-pill-item">
        <span class="wcu-check-icon">&#10003;</span> Dedicated Customer Support
      </div>
    </div>

    <!-- Main Feature Cards Grid (5x2 Layout) -->
    <div class="wcu-cards-grid">
      
      <!-- Card 1 -->
      <div class="wcu-card">
        <h3>Eco-Friendly Commitment</h3>
        <p>100% natural, biodegradable jute, cotton, canvas &amp; juco. Every product is a step toward a plastic-free world &mdash; certified and export-compliant.</p>
      </div>

      <!-- Card 2 -->
      <div class="wcu-card">
        <h3>Custom Design &amp; Branding</h3>
        <p>Full customisation &mdash; size, colour, logo, print technique. CMYK, digital, embroidery, glitter, gold foil &mdash; your brand, executed perfectly.</p>
      </div>

      <!-- Card 3 -->
      <div class="wcu-card">
        <h3>In-House Manufacturing</h3>
        <p>Own production facility in Kolkata. Strict quality control, timely delivery, and complete flexibility for any order size &mdash; from 100 to 1 million pieces.</p>
      </div>

      <!-- Card 4 -->
      <div class="wcu-card">
        <h3>Competitive Wholesale Pricing</h3>
        <p>High-quality eco bags at manufacturer-direct prices. Attractive slab rates for wholesale, corporate &amp; retail buyers globally &mdash; no middlemen.</p>
      </div>

      <!-- Card 5 -->
      <div class="wcu-card">
        <h3>Global Export Capability</h3>
        <p>IEC registered. Full export documentation, international packaging &amp; reliable worldwide shipping to 15+ countries via sea and air freight.</p>
      </div>

      <!-- Card 6 -->
      <div class="wcu-card">
        <h3>Multiple Ways to Reach Us</h3>
        <p>Enquire via website form, email at <strong>info@vadalobags.com</strong>, or WhatsApp <strong>+91 8100611554</strong> &mdash; response guaranteed within 24 hours.</p>
      </div>

      <!-- Card 7 -->
      <div class="wcu-card">
        <h3>Certified &amp; Compliant</h3>
        <p>IEC registered, GST verified, MSME certified &amp; Pvt. Ltd. company. Every bag is legally compliant, ethically produced &amp; export-ready &mdash; trusted by global buyers.</p>
      </div>

      <!-- Card 8 -->
      <div class="wcu-card">
        <h3>Sample Before Bulk</h3>
        <p>Physical samples shipped before production begins. No surprises &mdash; what you approve is exactly what gets manufactured, at every single order.</p>
      </div>

      <!-- Card 9 -->
      <div class="wcu-card">
        <h3>Fast Turnaround</h3>
        <p>Quotation within 24 hours. Sample dispatch within 7 days. Bulk production lead time as low as 15–20 days &mdash; because your deadlines always matter to us.</p>
      </div>

      <!-- Card 10 -->
      <div class="wcu-card">
        <h3>Long-Term Partnership</h3>
        <p>We don't just sell bags &mdash; we build relationships. Dedicated support, repeat order benefits &amp; flexible terms for retailers, importers &amp; growing brands worldwide.</p>
      </div>

    </div>

  </div>
</section>


<!-- ---ticker strip HOTELS & HOSPITALITY◆BOOK PUBLISHERS◆COSMETIC BRANDS--------------------------------------------------------------------- -->


<!-- Client Category Ticker Strip -->
<div class="client-ticker-strip">
  <div class="ticker-track">
    <!-- Set 1 -->
    <span>BOOK PUBLISHERS</span> <i class="ticker-diamond">&#9670;</i>
    <span>COSMETIC BRANDS</span> <i class="ticker-diamond">&#9670;</i>
    <span>NGOS &amp; EVENTS</span> <i class="ticker-diamond">&#9670;</i>
    <span>E-COMMERCE BRANDS</span> <i class="ticker-diamond">&#9670;</i>
    <span>DEPARTMENTAL STORES</span> <i class="ticker-diamond">&#9670;</i>
    <span>PHARMA &amp; FMCG</span> <i class="ticker-diamond">&#9670;</i>
    <span>HOTELS &amp; HOSPITALITY</span> <i class="ticker-diamond">&#9670;</i>

    <!-- Set 2 (Duplicated for Seamless Infinite Scroll Loop) -->
    <span>BOOK PUBLISHERS</span> <i class="ticker-diamond">&#9670;</i>
    <span>COSMETIC BRANDS</span> <i class="ticker-diamond">&#9670;</i>
    <span>NGOS &amp; EVENTS</span> <i class="ticker-diamond">&#9670;</i>
    <span>E-COMMERCE BRANDS</span> <i class="ticker-diamond">&#9670;</i>
    <span>DEPARTMENTAL STORES</span> <i class="ticker-diamond">&#9670;</i>
    <span>PHARMA &amp; FMCG</span> <i class="ticker-diamond">&#9670;</i>
    <span>HOTELS &amp; HOSPITALITY</span> <i class="ticker-diamond">&#9670;</i>
  </div>
</div>

<!-- ----FOR BUYERS Everything You Need to Start Your Order--------------------------------------------------------------------------------------------------- -->

<!-- For Buyers Section -->
<section class="for-buyers-section">
  <div class="fb-container">
    
    <!-- Header -->
    <div class="fb-header">
      <span class="fb-subheading">FOR BUYERS</span>
      <h2 class="fb-title">Everything You Need to <em>Start Your Order</em></h2>
      <p class="fb-description">
        Whether you are an international importer or a domestic Indian buyer &mdash; we have flexible solutions tailored for you.
      </p>
      
      <!-- Buyer Toggle Switcher -->
      <div class="fb-toggle-wrapper">
        <button class="fb-toggle-btn active" onclick="switchBuyerTab('international', this)">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
          INTERNATIONAL BUYERS
        </button>
        <button class="fb-toggle-btn" onclick="switchBuyerTab('india', this)">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
          INDIA BUYERS
        </button>
      </div>
    </div>

    <!-- Main Content Row -->
    <div class="fb-content-row">
      
      <!-- Left Column -->
      <div class="fb-left-col">
        <span class="fb-badge">INTERNATIONAL EXPORT</span>
        <h2 class="fb-left-title">We Export to <em>15+ Countries</em> &mdash; Seamlessly</h2>
        <p class="fb-left-desc">
          From sample approval to container loading, Vadalo Ventures handles the entire export process. All documents &mdash; Certificate of Origin, GSP, Bill of Lading &mdash; prepared in-house.
        </p>

        <!-- Feature List -->
        <div class="fb-feature-list">
          <!-- Feature Item 1 -->
          <div class="fb-feature-item">
            <div class="fb-icon-box">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
            </div>
            <div>
              <h4>ALL EXPORT DOCUMENTS INCLUDED</h4>
              <p>Commercial Invoice, Packing List, Bill of Lading, Certificate of Origin, GSP Form A &mdash; prepared by us</p>
            </div>
          </div>

          <!-- Feature Item 2 -->
          <div class="fb-feature-item">
            <div class="fb-icon-box">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
            </div>
            <div>
              <h4>FOB, CIF &amp; DDP TERMS</h4>
              <p>Flexible Incoterms to suit your import setup &mdash; we work with all major shipping lines</p>
            </div>
          </div>

          <!-- Feature Item 3 -->
          <div class="fb-feature-item">
            <div class="fb-icon-box">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
            </div>
            <div>
              <h4>FREE SAMPLES BEFORE BULK ORDER</h4>
              <p>Sample bags dispatched within 3–5 working days via DHL / FedEx</p>
            </div>
          </div>

          <!-- Feature Item 4 -->
          <div class="fb-feature-item">
            <div class="fb-icon-box">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <div>
              <h4>100% QUALITY GUARANTEE</h4>
              <p>Pre-shipment inspection available. Third-party QC (SGS / Bureau Veritas) can be arranged</p>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="fb-btn-group">
          <a href="/quote" class="cps-btn fb-btn-gold">REQUEST EXPORT QUOTE</a>
          <a href="/shipping-info" class="cps-btn fb-btn-outline">SHIPPING INFO</a>
        </div>
      </div>

      <!-- Right Column -->
      <div class="fb-right-col">
        <!-- Specs Card 1 -->
        <div class="fb-spec-card">
          <span class="fb-spec-label">MINIMUM ORDER QUANTITY</span>
          <h3 class="fb-spec-title">500 Pieces per Design</h3>
          <p class="fb-spec-sub">Mixed container bookings available from 2,000 pcs</p>
        </div>

        <!-- Specs Card 2 -->
        <div class="fb-spec-card">
          <span class="fb-spec-label">PAYMENT TERMS</span>
          <h3 class="fb-spec-title">30% Advance + 70% Before Shipment</h3>
          <p class="fb-spec-sub">LC at sight accepted for orders above $10,000 USD</p>
        </div>

        <!-- Specs Card 3 -->
        <div class="fb-spec-card">
          <span class="fb-spec-label">LEAD TIME</span>
          <h3 class="fb-spec-title">25–35 Working Days</h3>
          <p class="fb-spec-sub">After artwork approval &amp; advance payment</p>
        </div>

        <!-- Two Column Grid for Pricing & Certifications -->
        <div class="fb-spec-row">
          <div class="fb-spec-card">
            <span class="fb-spec-label">PRICING TERMS</span>
            <h3 class="fb-spec-title">FOB / CIF</h3>
            <p class="fb-spec-sub">Kolkata / Nhava Sheva</p>
          </div>
          <div class="fb-spec-card">
            <span class="fb-spec-label">CERTIFICATIONS</span>
            <h3 class="fb-spec-title">GST &middot; IEC</h3>
            <p class="fb-spec-sub">MSME &middot; GOTS (in process)</p>
          </div>
        </div>

        <!-- Countries We Export To Box -->
        <div class="fb-countries-card">
          <span class="fb-spec-label">COUNTRIES WE EXPORT TO</span>
          <div class="fb-countries-tags">
            <span class="fb-country-tag"><strong>US</strong> USA</span>
            <span class="fb-country-tag"><strong>GB</strong> UK</span>
            <span class="fb-country-tag"><strong>DE</strong> Germany</span>
            <span class="fb-country-tag"><strong>AU</strong> Australia</span>
            <span class="fb-country-tag"><strong>CA</strong> Canada</span>
            <span class="fb-country-tag"><strong>FR</strong> France</span>
            <span class="fb-country-tag"><strong>IT</strong> Italy</span>
            <span class="fb-country-tag"><strong>AE</strong> UAE</span>
            <span class="fb-country-tag"><strong>JP</strong> Japan</span>
            <span class="fb-country-tag gold">+6 more</span>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- Switcher JS Script -->
<script>
function switchBuyerTab(type, element) {
  const buttons = document.querySelectorAll('.fb-toggle-btn');
  buttons.forEach(btn => btn.classList.remove('active'));
  element.classList.add('active');
  
  // Future Tab switching content behavior can be handled here
}
</script>


<!-- --FREE DOWNLOAD Download Our Product Catalogue--------------------------------------------------------------------------------------------- -->


  <!-- Download Catalogue -->
  <section class="cat">
    <div class="container cat-grid">

      <div class="cat-text">
        <small class="eyebrow">FREE DOWNLOAD</small>
        <h2>Download Our<br>Product Catalogue</h2>
        <p>Get our complete product catalogue — all bag styles, materials, sizes, customization options &amp; pricing tiers. Share with your team before ordering.</p>

        <div class="cat-chips">
          <span>All Product Ranges</span>
          <span>Colour &amp; Print Options</span>
          <span>Size Specifications</span>
          <span>Certifications Info</span>
          <span>Wholesale Pricing Tiers</span>
          <span>Export &amp; Shipping Guide</span>
        </div>

        <div class="cat-btns">
          <a class="cat-btn cat-gold" href="<?php echo esc_url( get_template_directory_uri() . '/catalogue.pdf' ); ?>" download>
            <svg width="14" height="16" viewBox="0 0 12 16" fill="currentColor" aria-hidden="true"><path d="M1 0h6l4 4v11a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1zm5 1v4h4z"/></svg>
            DOWNLOAD CATALOGUE PDF
          </a>
          <a class="cat-btn cat-outline" href="https://wa.me/918100611554?text=Please%20send%20me%20your%20catalogue" target="_blank" rel="noopener">
            <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M8 0a8 8 0 0 0-6.9 12L0 16l4.1-1.1A8 8 0 1 0 8 0zm4 11.3c-.2.5-1 1-1.5 1-.4.1-.9.1-2.8-.6-2.4-1-3.9-3.400-4-3.600-.1-.1-1-1.300-1-2.500s.6-1.800.9-2c.2-.2.4-.3.600-.3h.4c.1 0 .3 0 .5.4l.7 1.700c.1.100.1.300 0 .4l-.3.400c-.1.100-.2.300-.1.500.4.700 1 1.300 1.700 1.700.2.100.4.100.5-.1l.5-.6c.1-.2.3-.2.5-.1l1.600.8c.2.100.3.200.3.300 0 .2 0 .8-.2 1.300z"/></svg>
            WHATSAPP FOR CATALOGUE
          </a>
          <a class="cat-btn cat-outline" href="mailto:info@example.com?subject=Catalogue%20Request">
            <svg width="14" height="12" viewBox="0 0 16 12" fill="currentColor" aria-hidden="true"><path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v.5L8 6 0 1.500zm0 2.600V11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V3.600L8 8z"/></svg>
            EMAIL FOR CATALOGUE
          </a>
        </div>
      </div>

      <div class="cat-visual">
        <div class="cat-frame">
          <img src="<?php echo esc_url( $img . 'catalogue.jpg' ); ?>" alt="Product catalogue">
        </div>
      </div>

    </div>
  </section>


  <!-- ---------Our Process How We Work — Simple & Transparent------------------------------------------------------------------------------------ -->


  <!-- How We Work -->
  <section class="work">
    <div class="container">

      <div class="work-head">
        <small class="eyebrow dark">OUR PROCESS</small>
        <h2>How We Work — <em>Simple &amp; Transparent</em></h2>
        <span class="work-line"></span>
        <p>From your first enquiry to delivery at your door — our streamlined 5-step process ensures quality bags delivered on time, every time.</p>
      </div>

      <?php
      $steps = array(
        array( 'ENQUIRY',    'Share your bag type, size, quantity, and design idea via email or WhatsApp',
               '<path d="M2 4h20v16H2zM2 4l10 8 10-8" fill="none" stroke="currentColor" stroke-width="2"/>' ),
        array( 'QUOTATION',  'Receive detailed price quote within 24 hours including all production costs',
               '<rect x="5" y="2" width="14" height="20" rx="2" fill="none" stroke="currentColor" stroke-width="2"/><path d="M8 6h8M8 11h2M12 11h2M16 11h0M8 15h2M12 15h2M8 19h8" stroke="currentColor" stroke-width="2"/>' ),
        array( 'SAMPLE',     'Pre-production sample dispatched for approval. Revisions included',
               '<path d="M9 2h6M10 2v6l-6 11a2 2 0 0 0 2 3h12a2 2 0 0 0 2-3l-6-11V2" fill="none" stroke="currentColor" stroke-width="2"/>' ),
        array( 'PRODUCTION', 'Bulk production with QC at each stage — weaving, stitching, printing',
               '<path d="M2 22V10l6 4V10l6 4V6h4l2 16z" fill="currentColor"/>' ),
        array( 'DELIVERY',   'Bags shipped with all export/import documents. Real-time tracking provided',
               '<path d="M1 6h14v10H1zM15 9h4l3 3v4h-7z" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="6" cy="18" r="2" fill="currentColor"/><circle cx="18" cy="18" r="2" fill="currentColor"/>' ),
      );
      ?>

      <div class="work-steps">
        <?php foreach ( $steps as $n => $s ) : ?>
          <div class="wstep">
            <div class="wstep-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><?php echo $s[2]; // static svg ?></svg>
            </div>
            <h4><?php echo ( $n + 1 ) . '. ' . esc_html( $s[0] ); ?></h4>
            <p><?php echo esc_html( $s[1] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="work-cta">
        <a class="enquiry-btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">START YOUR ENQUIRY TODAY</a>
      </div>

    </div>
  </section>



  <!-- ----Certifications & Memberships" (scrolling badge strip)--------------------------------------------------------------------------------- -->


    <!-- Certifications & Memberships -->
  <section class="memb">
    <div class="container memb-head">
      <small class="eyebrow dark">CERTIFICATIONS &amp; MEMBERSHIPS</small>
    </div>

    <?php
    $badges = array(
      array( 'MSME / UDYAM REGISTERED', 'Govt. of India',                       '<path d="M2 22V10l6 4V10l6 4V6h4l2 16z" fill="currentColor"/>' ),
      array( 'IEC REGISTERED',          'Import-Export Code — Export Ready',    '<circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="2"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18" fill="none" stroke="currentColor" stroke-width="1.5"/>' ),
      array( 'SINCE 2009',              'Legacy Screen-Printing Experience',    '<circle cx="12" cy="9" r="5" fill="none" stroke="currentColor" stroke-width="2"/><path d="M8 13l-2 8 6-3 6 3-2-8" fill="none" stroke="currentColor" stroke-width="2"/>' ),
      array( 'GOTS — IN PROCESS',       'Organic Textile Standard (underway)',  '<path d="M12 22V10M12 10c0-4-3-6-7-6 0 4 3 6 7 6zM12 13c0-3 3-5 7-5 0 4-3 6-7 5z" fill="none" stroke="currentColor" stroke-width="2"/>' ),
      array( 'GST VERIFIED',            'GSTIN 19AAKCV6214C1ZC',                '<rect x="5" y="3" width="14" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="2"/><path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="2"/>' ),
      array( 'COMPANY REGISTERED',      'CIN U46410WB2024PTC275166',            '<rect x="6" y="3" width="12" height="18" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7h4M10 11h4M10 21v-5h4v5" stroke="currentColor" stroke-width="2"/>' ),
    );
    ?>

    <div class="memb-marquee">
      <div class="memb-track">
        <?php for ( $i = 0; $i < 2; $i++ ) : ?>
          <?php foreach ( $badges as $b ) : ?>
            <div class="memb-card">
              <span class="memb-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true"><?php echo $b[2]; // static svg ?></svg>
              </span>
              <div>
                <strong><?php echo esc_html( $b[0] ); ?></strong>
                <span><?php echo esc_html( $b[1] ); ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>
  </section>


  <!-- -------------------------------------------------------- -->



    <!-- Gallery -->
  <section class="gal">
    <div class="container">

      <div class="gal-head">
        <small class="eyebrow dark">GALLERY</small>
        <h2>Eco Friendly Jute Bags Manufacturer &amp; Exporter in India</h2>
        <h4>Weldiore — Premium Jute &amp; Cotton Bags Supplier from Kolkata</h4>
        <span class="gal-line"></span>
        <p>Explore our high-quality eco-friendly jute bags, cotton bags, wine bags, promotional bags, and custom printed bags. A leading jute bag manufacturer and exporter based in Kolkata, India, supplying worldwide with bulk production capacity and premium quality assurance.</p>
      </div>

      <div class="gal-grid">
        <?php
        // 14 images: gallery1.jpg ... gallery14.jpg  (leather/images/ me rakho)
        for ( $i = 1; $i <= 14; $i++ ) :
          $label = ( $i === 3 ) ? 'RETAIL BAGS RANGE' : '';
        ?>
          <div class="gal-item">
            <img src="<?php echo esc_url( $img . 'gallery' . $i . '.jpg' ); ?>" alt="Gallery image <?php echo (int) $i; ?>">
            <?php if ( $label ) : ?><span class="gal-label"><?php echo esc_html( $label ); ?></span><?php endif; ?>
          </div>
          <?php
          // 11th image ke baad CTA tiles aate hain (last row)
          if ( $i === 11 ) {
            break;
          }
        endfor;
        ?>

        <a class="gal-tile tile-gold" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
          <small>FULL RANGE</small>
          <strong>See our complete<br>bag catalogue.</strong>
          <span>Get Catalogue →</span>
        </a>
        <a class="gal-tile tile-brown" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
          <small>EXPLORE</small>
          <strong>Jute, cotton,<br>canvas &amp; juco.</strong>
          <span>View All Products →</span>
        </a>
        <a class="gal-tile tile-dark" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
          <small>CUSTOM ORDER</small>
          <strong>Can't find your style?<br>We make it 100% custom.</strong>
          <span>Get a Free Quote →</span>
        </a>
        <a class="gal-tile tile-tan" href="https://wa.me/918100611554" target="_blank" rel="noopener">
          <small>QUICK HELP</small>
          <strong>Have a question?<br>Chat with us now.</strong>
          <span>WhatsApp Us →</span>
        </a>
      </div>

      <div class="gal-more">
        <a class="link-caps" href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>">VIEW FULL GALLERY</a>
      </div>

    </div>
  </section>
  


</main>

<script>
(function () {
  var slides = document.querySelectorAll('.hero-slide');
  var dotsWrap = document.querySelector('.hero-dots');
  var i = 0, timer;
  slides.forEach(function (s, n) {
    var d = document.createElement('button');
    d.addEventListener('click', function () { go(n); });
    dotsWrap.appendChild(d);
  });
  var dots = dotsWrap.querySelectorAll('button');
  function go(n) {
    i = (n + slides.length) % slides.length;
    slides.forEach(function (s, k) { s.classList.toggle('active', k === i); });
    dots.forEach(function (d, k) { d.classList.toggle('on', k === i); });
    clearInterval(timer);
    timer = setInterval(function () { go(i + 1); }, 5000);
  }
  document.querySelector('.hero-arrow.prev').onclick = function () { go(i - 1); };
  document.querySelector('.hero-arrow.next').onclick = function () { go(i + 1); };
  go(0);
})();
</script>

<?php get_footer(); ?>