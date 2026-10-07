<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Our Menu — Annapoorna';
$current_page = 'menu';

// Load Complete Extracted Menu JSON
$menu_file = __DIR__ . '/data/menu.json';
$menu_data = file_exists($menu_file) ? json_decode(file_get_contents($menu_file), true) : ['categories' => []];

include __DIR__ . '/includes/header.php';
?>

<!-- Full Width Spices Banner with "Our Menu" -->
<section class="hero-wp" style="min-height: 380px;">
    <div class="hero-wp-content">
        <h1 style="color: #FF9800; font-size: clamp(3rem, 6vw, 4.5rem); margin: 0; font-weight: 500;">
            Our Menu
        </h1>
    </div>
</section>

<!-- Authentic Torn Paper & Marigold Toran Garland Edges -->
<div class="torn-paper-edge"></div>
<div class="toran-garland-edge"></div>

<!-- Main Menu Content -->
<section class="section" style="padding-top: 3rem; background: #FFFFFF;">
    <div class="container">
        <!-- Menu Category Selector Tabs -->
        <div class="menu-controls" style="justify-content: center; margin-bottom: 3.5rem;">
            <div class="menu-tabs" style="justify-content: center;">
                <button class="menu-tab-btn active" data-target="all">All Dishes</button>
                <?php foreach ($menu_data['categories'] as $cat): ?>
                    <button class="menu-tab-btn" data-target="<?= htmlspecialchars($cat['id']) ?>">
                        <?= htmlspecialchars($cat['name']) ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Live Search -->
        <div style="max-width: 480px; margin: -1.5rem auto 3rem;">
            <input type="text" id="menuSearch" class="form-control" placeholder="Search dish (e.g. Vada Paav, Misal, Thali, Paneer)..." style="border-radius: var(--radius-btn); text-align: center;">
        </div>

        <!-- Categories & Dish Lists -->
        <div id="menuContainer">
            <?php foreach ($menu_data['categories'] as $cat): ?>
                <div class="menu-category-section" data-category="<?= htmlspecialchars($cat['id']) ?>" style="margin-bottom: 4rem;">
                    <!-- Category Header with Green Underline -->
                    <div style="text-align: center; margin-bottom: 2.5rem; position: relative;">
                        <h2 style="font-size: 2.2rem; color: #2D3748; display: inline-block; position: relative; padding-bottom: 0.75rem;">
                            <?= htmlspecialchars($cat['name']) ?>
                            <span style="display: block; width: 60px; height: 3px; background-color: var(--color-green); margin: 0.5rem auto 0; border-radius: 2px;"></span>
                        </h2>
                    </div>

                    <!-- Price List Grid matching Elementor Price List Style -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 1.5rem 2.5rem;">
                        <?php foreach ($cat['items'] as $item): ?>
                            <div class="menu-item-card" data-name="<?= htmlspecialchars($item['name']) ?>" data-desc="<?= htmlspecialchars($item['description']) ?>" style="padding: 1.25rem 1.5rem; border: 1px solid #EEEEEE; border-radius: var(--radius-sm); background: #FAFAFA;">
                                <div style="display: flex; justify-content: space-between; align-items: baseline; gap: 1rem; border-bottom: 1px dotted #CCCCCC; padding-bottom: 0.5rem;">
                                    <h4 style="font-family: var(--font-body); font-weight: 600; font-size: 1.05rem; color: #222222; margin: 0;">
                                        <?= htmlspecialchars($item['name']) ?>
                                    </h4>
                                    <span style="font-weight: 700; color: var(--color-green); font-size: 1.1rem; white-space: nowrap;">
                                        <?= htmlspecialchars($item['price']) ?>
                                    </span>
                                </div>
                                <?php if (!empty($item['description'])): ?>
                                    <p style="font-size: 0.85rem; color: #666666; margin: 0.5rem 0 0; line-height: 1.4;">
                                        <?= htmlspecialchars($item['description']) ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Menu Script -->
<script src="<?= asset('js/menu.js') ?>" defer></script>

<!-- Traditional Divider -->
<div class="section-divider-up"></div>

<?php include __DIR__ . '/includes/footer.php'; ?>
