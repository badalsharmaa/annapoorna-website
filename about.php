<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'About Us — Our Heritage & Story';
$page_description = 'Learn about Annapoorna Restaurant in Milpitas, CA. Bringing genuine, homestyle Marathi vegetarian recipes and culinary warmth to the San Francisco Bay Area.';
$current_page = 'about';

include __DIR__ . '/includes/header.php';
?>

<!-- Banner -->
<section class="page-header">
    <div class="container">
        <h1>About Annapoorna</h1>
        <p>A culinary journey rooted in authentic Marathi traditions, pure vegetarian purity, and genuine warmth.</p>
    </div>
</section>

<!-- Heritage Story -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <span class="badge badge-special" style="margin-bottom: 0.75rem;">Our Roots</span>
                <h2>Bringing Authentic Maharashtra Home Cooking to Milpitas</h2>
                <p>
                    Annapoorna was established with a singular vision: to offer Bay Area residents the rich, soulful tastes of traditional Maharashtrian vegetarian cooking, prepared without compromise.
                </p>
                <p>
                    Marathi cuisine is celebrated for its exquisite balance of flavors — the earthy warmth of roasted goda masala, the tang of tamarind and kokum, the nutty richness of freshly grated coconut and roasted peanuts, and the gentle sweetness of organic jaggery.
                </p>
                <p>
                    In our kitchen, every dish is prepared with the utmost respect for tradition. From steaming fresh Kothimbir Vadi and crisp Sabudana Vadas to rolling multi-grain Thalipeeth and slow-cooking comforting Daal, we invite you to experience the authentic warmth of home.
                </p>
            </div>
            <div>
                <div class="card" style="padding: 0; overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img src="<?= asset('images/menu/misal-pav.jpg') ?>" alt="Authentic Marathi Cooking" style="width: 100%; height: 350px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem; color: var(--color-primary);">Pure Ingredients, No Compromise</h4>
                        <p style="color: var(--color-muted); font-size: 0.95rem; margin: 0;">We cook exclusively with fresh produce, authentic regional spices imported directly from Maharashtra, and 100% pure vegetarian techniques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pillars of Excellence -->
<section class="section section-alt">
    <div class="container">
        <div class="text-center" style="max-width: 600px; margin: 0 auto 3.5rem;">
            <h2>The Four Pillars of Annapoorna</h2>
            <p class="text-muted">The core values that define every meal served at our tables and catering events.</p>
        </div>

        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">🌿</div>
                <h4>100% Pure Vegetarian</h4>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Strictly meat-free, egg-free kitchen maintaining complete purity and peaceful dining for every guest.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🧅</div>
                <h4>Jain-Friendly Options</h4>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Carefully crafted traditional preparations without root vegetables, onion, or garlic upon request.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🥘</div>
                <h4>Homestyle Heritage</h4>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Authentic regional spice blends, Goda Masala, and Kokum extract mirroring generational family recipes.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">❤️</div>
                <h4>Community Hospitality</h4>
                <p style="color: var(--color-muted); font-size: 0.9rem;">Warm, welcoming service whether you dine with us, pick up takeout, or book catering for life's milestones.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<?php include __DIR__ . '/includes/cta-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
