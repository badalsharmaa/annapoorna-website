<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Chitale Bandhu Pune Sweets & Bakarwadi';
$page_description = 'Order world-famous Chitale Bandhu Bakarwadi, Amba Burfi, Rajkot Pedha, and savory snacks directly at Annapoorna in Milpitas, CA.';
$current_page = 'chitale';

include __DIR__ . '/includes/header.php';
?>

<!-- Banner -->
<section class="page-header" style="background: linear-gradient(rgba(30, 34, 41, 0.75), rgba(30, 34, 41, 0.85)), #8E24AA;">
    <div class="container">
        <h1>Chitale Bandhu Mithaiwale Pune</h1>
        <p>The iconic taste of Maharashtra's premier sweet and savory brand, authentically delivered to the San Francisco Bay Area.</p>
    </div>
</section>

<!-- Chitale Showcase -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 4rem;">
            <div>
                <span class="badge badge-special" style="margin-bottom: 0.75rem;">Exclusive In Milpitas</span>
                <h2>The Legend of Chitale Bakarwadi</h2>
                <p>
                    Established over 80 years ago in Pune, <strong>Chitale Bandhu Mithaiwale</strong> is internationally renowned for creating India's most celebrated savory snack: the crispy, spiraled Bakarwadi.
                </p>
                <p>
                    Made with delicate pastry stuffed with a secret, aromatic blend of toasted coconut, sesame seeds, poppy seeds, and hand-selected spices, each bite offers an unmistakable balance of crisp texture and sweet-tangy flavor.
                </p>
                <p>
                    Annapoorna is proud to offer authentic Chitale Bandhu packaged sweets and snacks directly to our patrons for dining in or quick pickup!
                </p>
                <div style="margin-top: 2rem;">
                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-primary btn-lg">
                        Order Chitale Products Online
                    </a>
                </div>
            </div>
            <div>
                <div class="card" style="padding: 0; overflow: hidden; box-shadow: var(--shadow-lg); text-align: center;">
                    <img src="<?= asset('images/menu/bakarwadi.webp') ?>" alt="Chitale Bakarwadi Pack" style="width: 100%; height: 380px; object-fit: contain; background: #FFFDE7; padding: 1.5rem;">
                </div>
            </div>
        </div>

        <div class="text-center" style="max-width: 600px; margin: 0 auto 3rem;">
            <h2>Available Chitale Products in Store</h2>
            <p class="text-muted">Pick up fresh packs during your next restaurant visit or order ahead online.</p>
        </div>

        <div class="feature-grid">
            <div class="card">
                <h4>Chitale Bakarwadi (500g)</h4>
                <p style="color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">$9.99</p>
                <p style="color: var(--color-muted); font-size: 0.9rem;">The iconic crispy pinwheels packed with spicy, tangy coconut masala.</p>
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%; margin-top: 1rem;">Order Now</a>
            </div>

            <div class="card">
                <h4>Mango Burfi (Amba Burfi)</h4>
                <p style="color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">$11.99</p>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Luscious Alphonso mango pulp blended with rich mawa and pure cardamom.</p>
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%; margin-top: 1rem;">Order Now</a>
            </div>

            <div class="card">
                <h4>Rajkot Pedha</h4>
                <p style="color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">$11.99</p>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Caramelized traditional mawa pedhas infused with fragrant saffron.</p>
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%; margin-top: 1rem;">Order Now</a>
            </div>

            <div class="card">
                <h4>Lite Chivda & BingeBar</h4>
                <p style="color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">$7.99</p>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Roasted, light crunchy tea-time snacks and energy bars.</p>
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%; margin-top: 1rem;">Order Now</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<?php include __DIR__ . '/includes/cta-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
