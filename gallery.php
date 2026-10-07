<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Restaurant & Culinary Photo Gallery';
$page_description = 'Take a look inside Annapoorna Restaurant in Milpitas, CA. Delicious vegetarian dishes, cozy dining atmosphere, and celebratory catering presentations.';
$current_page = 'gallery';

include __DIR__ . '/includes/header.php';

$gallery_items = [
    ['title' => 'Kolhapuri Misal Pav', 'image' => asset('images/menu/misal-pav.jpg'), 'tag' => 'Signature Specialty'],
    ['title' => 'Crisp Kothimbir Vadi', 'image' => asset('images/menu/kothimbir-vadi.jpg'), 'tag' => 'Marathi Appetizer'],
    ['title' => 'Sabudana Vada', 'image' => asset('images/menu/sabudana-vada.jpg'), 'tag' => 'Fasting Special'],
    ['title' => 'Mumbai Vada Pav', 'image' => asset('images/menu/vada-pav.png'), 'tag' => 'Street Snack'],
    ['title' => 'Chitale Bandhu Bakarwadi', 'image' => asset('images/menu/bakarwadi.webp'), 'tag' => 'Pune Namkeen']
];
?>

<!-- Banner -->
<section class="page-header">
    <div class="container">
        <h1>Photo Gallery</h1>
        <p>A visual glimpse into our pure vegetarian kitchen, traditional presentations, and welcoming Milpitas dining room.</p>
    </div>
</section>

<!-- Gallery Grid -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 2rem;">
            <?php foreach ($gallery_items as $item): ?>
                <div class="card" style="padding: 0; overflow: hidden;">
                    <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?>" style="width: 100%; height: 260px; object-fit: cover;">
                    <div style="padding: 1.25rem; display: flex; justify-content: space-between; align-items: center;">
                        <h4 style="font-size: 1.1rem; margin: 0;"><?= htmlspecialchars($item['title']) ?></h4>
                        <span class="badge badge-special"><?= htmlspecialchars($item['tag']) ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<?php include __DIR__ . '/includes/cta-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
