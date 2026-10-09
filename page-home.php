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