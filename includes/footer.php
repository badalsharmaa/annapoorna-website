<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}
?>
    </main>

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: About & Identity -->
                <div class="footer-col">
                    <img src="<?= asset('images/logo/logo.png') ?>" alt="Annapoorna Authentic Indian Cuisine" style="height: 42px; margin-bottom: 1.25rem; filter: brightness(0) invert(1);">
                    <p>Authentic Marathi & North Indian pure vegetarian cuisine crafted with traditional recipes, pure ghee, and fresh wholesome ingredients in the heart of Milpitas, CA.</p>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="/about">About Our Story</a></li>
                        <li><a href="/menu">Full Dining Menu</a></li>
                        <li><a href="/catering">Catering Packages</a></li>
                        <li><a href="/chitale-products">Chitale Bandhu Sweets</a></li>
                        <li><a href="/gallery">Photo Gallery</a></li>
                        <li><a href="/contact">Location & Contact</a></li>
                    </ul>
                </div>

                <!-- Col 3: Hours of Operation -->
                <div class="footer-col">
                    <h4>Restaurant Hours</h4>
                    <ul class="footer-links" style="line-height: 1.8;">
                        <li><strong>Tue – Fri:</strong> 11:30 AM – 2:30 PM, 5:30 PM – 9:30 PM</li>
                        <li><strong>Sat – Sun:</strong> 11:30 AM – 10:00 PM</li>
                        <li><strong>Monday:</strong> Closed</li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Phone Direct -->
                <div class="footer-col">
                    <h4>Get In Touch</h4>
                    <div class="footer-contact-item">
                        <span>📍</span>
                        <span><?= STORE_ADDRESS_FULL ?></span>
                    </div>
                    <div class="footer-contact-item">
                        <span>📞</span>
                        <div>
                            <div>Phone Orders: <a href="tel:<?= PHONE_ORDERS_RAW ?>"><?= PHONE_ORDERS_DISPLAY ?></a></div>
                            <div>Catering: <a href="tel:<?= PHONE_CATERING_RAW ?>"><?= PHONE_CATERING_DISPLAY ?></a></div>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <span>✉️</span>
                        <span><a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a></span>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved. | Pure Vegetarian Authentic Dining</p>
            </div>
        </div>
    </footer>

    <!-- Core Scripts -->
    <script src="<?= asset('js/main.js') ?>" defer></script>
</body>
</html>
