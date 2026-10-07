<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Authentic Marathi & North Indian Vegetarian Dining';
$page_description = 'Experience authentic Marathi vegetarian cuisine, Mumbai street food, and North Indian flavors in Milpitas, CA. Order online for pickup or book catering.';
$current_page = 'home';

include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-badges">
                    <span class="badge badge-veg">🌿 100% Pure Vegetarian</span>
                    <span class="badge badge-special">⭐ Authentic Marathi Recipes</span>
                </div>
                <h1>Annapoorna — Your Home for Marathi Vegetarian Cuisine in Milpitas!</h1>
                <p class="hero-lead">
                    Indulge in our time-honored Maharashtrian specialties, vibrant Mumbai street snacks, and rich North Indian curries made fresh daily with pure ingredients and traditional culinary care.
                </p>
                <div class="hero-actions">
                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-primary btn-lg">
                        Order Online
                    </a>
                    <a href="/menu" class="btn btn-outline btn-lg">
                        Explore Full Menu
                    </a>
                    <a href="/catering" class="btn btn-secondary btn-lg">
                        Catering Services
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="hero-card">
                    <img src="<?= asset('images/menu/misal-pav.jpg') ?>" alt="Kolhapuri Misal Pav at Annapoorna" style="width: 100%; height: 380px; object-fit: cover;">
                    <div style="padding: 1.5rem; background: #FFFFFF;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h3 style="font-size: 1.25rem; margin-bottom: 0.25rem;">Kolhapuri Misal Pav</h3>
                                <p style="color: var(--color-muted); font-size: 0.85rem; margin: 0;">Sprouted bean curry topped with crisp farsan & pav</p>
                            </div>
                            <span class="badge badge-spice">Bestseller</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chitale Bandhu Feature Banner -->
<section class="section-sm" style="background: linear-gradient(90deg, #FFF9C4 0%, #FFFDE7 100%); border-top: 1px solid #FFF59D; border-bottom: 1px solid #FFF59D;">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 2rem; flex-wrap: wrap;">
            <div style="display: flex; align-items: center; gap: 1.5rem;">
                <img src="<?= asset('images/menu/bakarwadi.webp') ?>" alt="Chitale Bakarwadi" style="width: 80px; height: 80px; border-radius: var(--radius-md); object-fit: cover; box-shadow: var(--shadow-sm);">
                <div>
                    <span style="font-size: 0.85rem; font-weight: 700; color: #E65100; text-transform: uppercase; letter-spacing: 1px;">Sweets & Namkeens Now Available</span>
                    <h3 style="font-size: 1.35rem; margin: 0.2rem 0;">Iconic Chitale Bandhu Pune Products</h3>
                    <p style="color: var(--color-charcoal); font-size: 0.9rem; margin: 0;">World-famous Bakarwadi, Amba Burfi, Rajkot Pedha & more available right here in the Bay Area!</p>
                </div>
            </div>
            <a href="/chitale-products" class="btn btn-primary">
                Order Chitale Products
            </a>
        </div>
    </div>
</section>

<!-- Specialties Showcase -->
<section class="section">
    <div class="container">
        <div class="text-center" style="max-width: 650px; margin: 0 auto 3.5rem;">
            <span class="badge badge-special" style="margin-bottom: 0.75rem;">Culinary Highlights</span>
            <h2>Signature Specialties You'll Love</h2>
            <p class="text-muted">From the bustling street corners of Mumbai to traditional home kitchens in Pune, explore dishes prepared with uncompromising authenticity.</p>
        </div>

        <div class="feature-grid">
            <!-- Item 1: Misal Pav -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?= asset('images/menu/misal-pav.jpg') ?>" alt="Kolhapuri Misal Pav" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <h4>Kolhapuri Misal Pav</h4>
                        <span style="font-weight: 700; color: var(--color-primary);">$13.00</span>
                    </div>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin-bottom: 1.25rem;">Fiery sprouted bean curry layered with farsan, onions, coriander, and fresh lemon with butter pav.</p>
                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%;">Order Now</a>
                </div>
            </div>

            <!-- Item 2: Kothimbir Vadi -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?= asset('images/menu/kothimbir-vadi.jpg') ?>" alt="Kothimbir Vadi" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <h4>Kothimbir Vadi</h4>
                        <span style="font-weight: 700; color: var(--color-primary);">$10.50</span>
                    </div>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin-bottom: 1.25rem;">Traditional savory cilantro and gram flour cakes, steamed and pan-fried to crisp perfection.</p>
                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%;">Order Now</a>
                </div>
            </div>

            <!-- Item 3: Sabudana Vada -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?= asset('images/menu/sabudana-vada.jpg') ?>" alt="Sabudana Vada" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <h4>Sabudana Vada</h4>
                        <span style="font-weight: 700; color: var(--color-primary);">$9.50</span>
                    </div>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin-bottom: 1.25rem;">Crispy sago and peanut patties served with our signature sweet peanut yogurt chutney.</p>
                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%;">Order Now</a>
                </div>
            </div>

            <!-- Item 4: Vada Pav -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?= asset('images/menu/vada-pav.png') ?>" alt="Annapoorna Vada Pav" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                        <h4>Annapoorna Vada Pav</h4>
                        <span style="font-weight: 700; color: var(--color-primary);">$4.50</span>
                    </div>
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin-bottom: 1.25rem;">Mumbai's most beloved street snack: seasoned potato vada nestled in soft pav with garlic chutney.</p>
                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="width: 100%;">Order Now</a>
                </div>
            </div>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="/menu" class="btn btn-primary btn-lg">View All Menu Categories</a>
        </div>
    </div>
</section>

<!-- About Snippet -->
<section class="section section-alt">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <span class="badge badge-veg" style="margin-bottom: 0.75rem;">Our Heritage</span>
                <h2>Authentic Flavors in the Heart of the San Francisco Bay Area</h2>
                <p>Annapoorna was born from a desire to bring genuine, homestyle Marathi vegetarian recipes to California. We take deep pride in using time-honored cooking methods, fresh herbs, aromatic regional spice mixes, and pure ghee.</p>
                <p>Whether you're visiting us for a comforting mid-week Express Thali, catching up over Chai and Vada Pav, or planning a celebratory feast, our kitchen serves warmth in every bite.</p>
                <div style="margin-top: 2rem;">
                    <a href="/about" class="btn btn-outline">Read Our Full Story</a>
                </div>
            </div>
            <div>
                <div class="card" style="background: #FFFFFF; border: none; box-shadow: var(--shadow-lg);">
                    <div style="padding: 1.5rem 0.5rem;">
                        <h4 style="margin-bottom: 1rem; color: var(--color-primary);">Why Diners Choose Annapoorna:</h4>
                        <ul style="list-style: none; line-height: 2;">
                            <li>🌿 <strong>100% Pure Vegetarian Kitchen</strong> — completely meat-free facility.</li>
                            <li>🧅 <strong>Extensive Jain Options</strong> — flavorful dishes prepared without onion or garlic.</li>
                            <li>🥘 <strong>Authentic Maharashtrian Tastes</strong> — genuine recipes seldom found elsewhere.</li>
                            <li>👨‍🍳 <strong>Catering for Bay Area Celebrations</strong> — from corporate lunches to weddings.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Catering Highlights Banner -->
<section class="section">
    <div class="container">
        <div style="background: linear-gradient(135deg, #FFF8E1 0%, #FFECB3 100%); border-radius: var(--radius-lg); padding: 4rem 3rem; border: 1px solid #FFE082;">
            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">
                <div>
                    <span class="badge badge-spice" style="margin-bottom: 0.75rem;">Bay Area Catering</span>
                    <h2>Elevate Your Special Event with Annapoorna Catering</h2>
                    <p style="font-size: 1.05rem; color: var(--color-charcoal);">
                        We specialize in weddings, corporate conferences, thread ceremonies, birthdays, and puja gatherings. From live Chaat and Dosa counters to lavish multi-course buffets, let us handle the hospitality.
                    </p>
                    <div style="display: flex; gap: 1rem; margin-top: 1.5rem; flex-wrap: wrap;">
                        <a href="/catering" class="btn btn-primary">Explore Catering Packages</a>
                        <a href="tel:<?= PHONE_CATERING_RAW ?>" class="btn btn-outline" style="background: #FFFFFF;">Call <?= PHONE_CATERING_DISPLAY ?></a>
                    </div>
                </div>
                <div style="background: #FFFFFF; padding: 2rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm);">
                    <h4 style="margin-bottom: 1rem;">Catering Highlights:</h4>
                    <ul style="list-style: disc; padding-left: 1.25rem; line-height: 1.8; color: var(--color-charcoal);">
                        <li>Live Food Stations & Chaat Counters</li>
                        <li>Flexible menus from 20 to 1,000+ guests</li>
                        <li>Full Marathi & North Indian selections</li>
                        <li>Punctual delivery and setup across the Bay Area</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global CTA -->
<?php include __DIR__ . '/includes/cta-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
