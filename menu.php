<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Dining Menu — Authentic Marathi & North Indian Delicacies';
$page_description = 'Browse our complete vegetarian menu: Marathi specials, Mumbai street snacks, Thalis, North Indian curries, Indo-Chinese dishes, and desserts.';
$current_page = 'menu';

// Load Centralized Menu JSON
$menu_file = __DIR__ . '/data/menu.json';
$menu_data = file_exists($menu_file) ? json_decode(file_get_contents($menu_file), true) : ['categories' => []];

include __DIR__ . '/includes/header.php';
?>

<!-- Page Banner -->
<section class="page-header">
    <div class="container">
        <h1>Our Dining Menu</h1>
        <p>100% Pure Vegetarian cuisine prepared fresh daily with authentic homestyle flavors and premium ingredients.</p>
    </div>
</section>

<!-- Menu Content & Filtering -->
<section class="section">
    <div class="container">
        <!-- Controls: Category Tabs & Search -->
        <div class="menu-controls">
            <div class="menu-tabs">
                <button class="menu-tab-btn active" data-target="all">All Items</button>
                <?php foreach ($menu_data['categories'] as $cat): ?>
                    <button class="menu-tab-btn" data-target="<?= htmlspecialchars($cat['id']) ?>">
                        <?= htmlspecialchars($cat['name']) ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="menu-search-box">
                <input type="text" id="menuSearch" class="form-control" placeholder="Search dishes (e.g. Misal, Paneer)..." aria-label="Search dishes">
            </div>
        </div>

        <!-- Category Sections Loop -->
        <div id="menuContainer">
            <?php foreach ($menu_data['categories'] as $cat): ?>
                <div class="menu-category-section" data-category="<?= htmlspecialchars($cat['id']) ?>" style="margin-bottom: 4rem;">
                    <div style="border-bottom: 2px solid var(--color-border); padding-bottom: 0.75rem; margin-bottom: 2rem;">
                        <h2 style="font-size: 1.85rem; color: var(--color-dark); margin-bottom: 0.25rem;">
                            <?= htmlspecialchars($cat['name']) ?>
                        </h2>
                        <p style="color: var(--color-muted); font-size: 0.95rem; margin: 0;">
                            <?= htmlspecialchars($cat['description']) ?>
                        </p>
                    </div>

                    <div class="menu-grid">
                        <?php foreach ($cat['items'] as $item): ?>
                            <div class="menu-item-card" data-name="<?= htmlspecialchars($item['name']) ?>" data-desc="<?= htmlspecialchars($item['description']) ?>">
                                <div>
                                    <div class="menu-item-top">
                                        <h3 class="menu-item-name"><?= htmlspecialchars($item['name']) ?></h3>
                                        <span class="menu-item-price"><?= htmlspecialchars($item['price']) ?></span>
                                    </div>
                                    <p class="menu-item-desc"><?= htmlspecialchars($item['description']) ?></p>
                                </div>

                                <div class="menu-item-footer">
                                    <div style="display: flex; gap: 0.35rem; flex-wrap: wrap;">
                                        <?php if (!empty($item['tags'])): foreach ($item['tags'] as $tag): ?>
                                            <span class="badge badge-special" style="font-size: 0.7rem; padding: 0.15rem 0.5rem;"><?= htmlspecialchars($tag) ?></span>
                                        <?php endforeach; endif; ?>
                                    </div>
                                    <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-outline btn-sm">
                                        Order
                                    </a>
                                </div>
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

<!-- Global CTA -->
<?php include __DIR__ . '/includes/cta-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
