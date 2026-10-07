<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Annapoorna – Catering Services | Authentic Indian Cuisine';
$current_page = 'home';

include __DIR__ . '/includes/header.php';
?>

<!-- 1. Exact Full-Width Spices Background Hero -->
<section class="hero-wp">
    <div class="hero-wp-content">
        <h1>Annapoorna - Your Home for Marathi Vegetarian Cuisine in Milpitas!</h1>
        <div>
            <a href="/menu" class="btn-discover-menu">
                DISCOVER OUR MENU
            </a>
        </div>
    </div>
</section>

<!-- Decorative Section Transition Divider -->
<div class="section-divider-down"></div>

<!-- 2. Sweets & Namkeens Now Available Banner -->
<section class="section-sm" style="background-color: #FAF6EF; text-align: center;">
    <div class="container">
        <h2 style="font-family: var(--font-heading); font-size: 2.2rem; color: #222222; margin-bottom: 0.5rem;">
            <span style="color: #FFCA01;">Sweets & Namkeens</span><br>
            Now available at
        </h2>
        <div style="margin-top: 1.5rem;">
            <a href="/chitale-products" class="btn btn-primary" style="background-color: var(--color-green); border-radius: var(--radius-btn); padding: 0.8rem 2rem;">
                Order Chitale Bandhu Products Here
            </a>
        </div>
    </div>
</section>

<!-- 3. About Us Section -->
<section class="section" style="background: #FFFFFF; padding: 5rem 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <span style="color: var(--color-green); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">About Us</span>
                <h2 style="font-size: 2.3rem; margin: 0.5rem 0 1.25rem; line-height: 1.25;">Authentic Indian Flavors in the Heart of the San Francisco Bay Area</h2>
                <h4 style="color: #666; font-family: var(--font-body); font-weight: 500; font-size: 1.1rem; margin-bottom: 1.5rem;">Order now and enjoy our food at home!</h4>
                <p style="color: #555; line-height: 1.8; margin-bottom: 2rem;">
                    Indulge in our traditional and contemporary Maharashtrian recipes, perfect for every occasion and festival. At Annapoorna, we prioritize high-quality, pure ingredients and heart-friendly cooking mediums. Enjoy fresh, flavorful dishes crafted to perfection.
                </p>
                <a href="/about" class="btn btn-outline" style="border-color: var(--color-green); color: var(--color-green); border-radius: var(--radius-btn);">
                    MORE ABOUT US
                </a>
            </div>

            <!-- Feature 2x3 Grid matching Elementor Kit -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                <div class="card" style="padding: 1.5rem; border: 1px solid #ECECEC;">
                    <h4 style="color: #222; font-size: 1.1rem; margin-bottom: 0.5rem;">Maharashtrian Cuisine</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Savor the rich flavors of Maharashtra with our traditional dishes made from age-old recipes.</p>
                </div>
                <div class="card" style="padding: 1.5rem; border: 1px solid #ECECEC;">
                    <h4 style="color: #222; font-size: 1.1rem; margin-bottom: 0.5rem;">North Indian Favorites</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Indulge in the diverse tastes of North India, from aromatic curries to tantalizing delights.</p>
                </div>
                <div class="card" style="padding: 1.5rem; border: 1px solid #ECECEC;">
                    <h4 style="color: #222; font-size: 1.1rem; margin-bottom: 0.5rem;">Fresh & Local Ingredients</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">We use fresh, locally sourced ingredients to bring you the most authentic and flavorful dishes.</p>
                </div>
                <div class="card" style="padding: 1.5rem; border: 1px solid #ECECEC;">
                    <h4 style="color: #222; font-size: 1.1rem; margin-bottom: 0.5rem;">Family-Friendly Dining</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Enjoy a warm, welcoming atmosphere perfect for family gatherings and celebrations.</p>
                </div>
                <div class="card" style="padding: 1.5rem; border: 1px solid #ECECEC;">
                    <h4 style="color: #222; font-size: 1.1rem; margin-bottom: 0.5rem;">Convenient Takeaways</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Enjoy our delicious meals at your convenience with our quick and easy takeaway service.</p>
                </div>
                <div class="card" style="padding: 1.5rem; border: 1px solid #ECECEC;">
                    <h4 style="color: #222; font-size: 1.1rem; margin-bottom: 0.5rem;">Specials Menu</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Explore our exciting specials, where seasonal delights and the best of our cuisine await you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Decorative Section Divider -->
<div class="section-divider-up"></div>

<!-- 4. Authentic Indian Cuisine Category Cards -->
<section class="section" style="background: #FAF6EF; padding: 5rem 0;">
    <div class="container">
        <div class="text-center" style="max-width: 600px; margin: 0 auto 3.5rem;">
            <span style="color: var(--color-green); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Authentic Indian Cuisine</span>
            <h2 style="font-size: 2.3rem; margin-top: 0.5rem;">Savor the Flavors of India</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem;">
            <!-- Category 1 -->
            <div class="card" style="padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-sm); text-align: center;">
                <img src="<?= asset('images/menu/vada-pav.png') ?>" alt="Street Snacks" style="height: 200px; width: 100%; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Street Snacks</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">The Mumbai’s renowned street snacks are rich in spicy, tangy, crispy, and sweet flavors.</p>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="card" style="padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-sm); text-align: center;">
                <img src="<?= asset('images/menu/kothimbir-vadi.jpg') ?>" alt="Chaats" style="height: 200px; width: 100%; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Chaats</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Bombay’s iconic Chaat street food is famous for its tangy, spicy flavors and crispy textures.</p>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="card" style="padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-sm); text-align: center;">
                <img src="<?= asset('images/menu/sabudana-vada.jpg') ?>" alt="Wraps & Frankie" style="height: 200px; width: 100%; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Wraps</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">Mumbai’s on-the-go treat! Delicious wraps packed with fresh ingredients, perfect for a busy day.</p>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="card" style="padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-sm); text-align: center;">
                <img src="<?= asset('images/menu/misal-pav.jpg') ?>" alt="Authentic Marathi" style="height: 200px; width: 100%; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <h4 style="font-size: 1.2rem; margin-bottom: 0.5rem;">Authentic Marathi</h4>
                    <p style="font-size: 0.85rem; color: #666; margin: 0;">An Authentic Marathi street food that reflects Maharashtra’s rich culinary heritage.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Decorative Section Divider -->
<div class="section-divider-down"></div>

<!-- 5. Elevate Your Event with Our Catering -->
<section class="section" style="background: #FFFFFF; padding: 5rem 0;">
    <div class="container">
        <div class="text-center" style="max-width: 650px; margin: 0 auto 3.5rem;">
            <h2 style="font-size: 2.3rem;">Elevate Your Event with Our Catering</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
            <div class="card" style="border: 1px solid #ECECEC; padding: 2rem;">
                <h4 style="color: var(--color-green); margin-bottom: 0.75rem;">Corporate Events</h4>
                <p style="color: #666; font-size: 0.9rem;">Elevate your corporate events with our expertly crafted Marathi and North Indian cuisine. Perfect for team lunches and gatherings.</p>
            </div>
            <div class="card" style="border: 1px solid #ECECEC; padding: 2rem;">
                <h4 style="color: var(--color-green); margin-bottom: 0.75rem;">Wedding Events</h4>
                <p style="color: #666; font-size: 0.9rem;">Make your wedding day unforgettable with our exquisite and authentic Marathi and North Indian dishes crafted with devotion.</p>
            </div>
            <div class="card" style="border: 1px solid #ECECEC; padding: 2rem;">
                <h4 style="color: var(--color-green); margin-bottom: 0.75rem;">Private Dinings</h4>
                <p style="color: #666; font-size: 0.9rem;">Delight your guests with our delicious Marathi and North Indian specialties at private parties, pujas, and anniversaries.</p>
            </div>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="/catering" class="btn btn-primary" style="background-color: var(--color-green); border-radius: var(--radius-btn); padding: 0.8rem 2.2rem;">
                Plan Your Catering With Us
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
