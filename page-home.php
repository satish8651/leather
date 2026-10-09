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