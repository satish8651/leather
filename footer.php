<footer class="site-footer">

  <!-- 1. Certifications strip -->
  <div class="cert-strip">
    <div class="container cert-inner">
      <span class="cert-label">4 INTERNATIONAL CERTIFICATIONS</span>
      <span class="cert-badge">Sedex · SMETA</span>
      <span class="cert-badge">OEKO-TEX® Standard 100</span>
      <span class="cert-badge">GOTS</span>
      <span class="cert-badge">Global Recycled Standard</span>
    </div>
  </div>

  <!-- 2. Main footer -->
  <div class="footer-main">
    <div class="container footer-grid">

      <div class="footer-col footer-about">
        <h3 class="footer-brand"><?php bloginfo( 'name' ); ?></h3>
        <small class="footer-tag">PRIVATE LIMITED KOLKATA, INDIA</small>
        <p>India's premium manufacturer and exporter of eco-friendly jute, cotton, canvas &amp; juco bags. Crafted in Kolkata, shipped to 15+ countries worldwide.</p>
        <p>📞 <a href="tel:+918100611554">+91 81006 11554</a></p>
        <p>✉ <a href="mailto:info@example.com">info@example.com</a></p>

        <h4 class="footer-heading">FOLLOW US</h4>
        <div class="social">
          <a href="#" aria-label="Facebook">f</a>
          <a href="#" aria-label="Instagram">in</a>
          <a href="#" aria-label="WhatsApp">w</a>
          <a href="#" aria-label="LinkedIn">li</a>
          <a href="#" aria-label="X">x</a>
          <a href="#" aria-label="YouTube">▶</a>
        </div>
      </div>

      <div class="footer-col">
        <h4 class="footer-heading">PRODUCTS</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/jute-bags/' ) ); ?>">Jute Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/cotton-bags/' ) ); ?>">Cotton Tote Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/canvas-bags/' ) ); ?>">Canvas Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/juco-bags/' ) ); ?>">Juco Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Laminated Jute Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Grocery Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Corporate Gift Bags</a></li>
          <li><a href="<?php echo esc_url( home_url( '/promotional-bags/' ) ); ?>">Promotional Bags</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4 class="footer-heading">COMPANY</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/company-overview/' ) ); ?>">Vision &amp; Mission</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Why Choose Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/bespoke-prints/' ) ); ?>">Bespoke Prints</a></li>
          <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Product Catalogue</a></li>
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Certifications</a></li>
          <li><a href="<?php echo esc_url( home_url( '/csr-policy/' ) ); ?>">CSR Policy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
          <li><a href="<?php echo esc_url( home_url( '/sampling-policy/' ) ); ?>">Sampling Policy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4 class="footer-heading">CONTACT</h4>
        <ul class="contact-list">
          <li>📞 <a href="tel:+918100611554">+91 81006 11554</a> (Call)</li>
          <li>💬 <a href="https://wa.me/918100611554" target="_blank" rel="noopener">+91 81006 11554</a> (WhatsApp)</li>
          <li>🏢 +91 33 3199 7211 (Office)</li>
          <li>✉ <a href="mailto:info@example.com">info@example.com</a></li>
          <li>📍 <a href="#" target="_blank" rel="noopener">View on Google Maps</a></li>
          <li>🕒 Mon – Sat: 10 AM – 7 PM IST</li>
          <li>🌐 <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( wp_parse_url( home_url(), PHP_URL_HOST ) ); ?></a></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- 3. Export markets -->
  <div class="export-row">
    <div class="container">
      <strong class="export-title">EXPORT MARKETS — JUTE &amp; ECO BAG SUPPLIER WORLDWIDE</strong>
      <div class="export-list">
        <?php
        $countries = array( 'USA','UK','UAE','Saudi Arabia','Germany','France','Netherlands','Italy','Spain','Canada','Australia','Singapore','Japan','Morocco' );
        foreach ( $countries as $c ) {
          echo '<a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html( $c ) . '</a>';
        }
        ?>
      </div>
    </div>
  </div>

  <!-- 4. Copyright -->
  <div class="copyright">
    <div class="container copyright-inner">
      <span>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</span>
      <span>Made with ♥ in Kolkata, India</span>
    </div>
  </div>

</footer>

<script>
document.getElementById('navToggle').addEventListener('click', function () {
  document.getElementById('mainNav').classList.toggle('open');
});
document.querySelectorAll('.dropdown-toggle').forEach(function (t) {
  t.addEventListener('click', function (e) {
    if (window.innerWidth <= 768) {
      e.preventDefault();
      t.parentElement.classList.toggle('open');
    }
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>