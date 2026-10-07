<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}
$current_page = $current_page ?? 'home';
?>
<header class="site-header" role="banner">
    <div class="container">
        <nav class="nav-wrapper" aria-label="Main Navigation">
            <a href="/" class="nav-brand" aria-label="Annapoorna Home">
                <img src="<?= asset('images/logo/logo.png') ?>" alt="Annapoorna Authentic Indian Cuisine" height="48" width="auto">
            </a>

            <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation Menu" aria-expanded="false" aria-controls="navMenu">
                <span class="nav-toggle-icon"></span>
            </button>

            <ul class="nav-menu" id="navMenu">
                <?php foreach ($NAV_LINKS as $key => $link): ?>
                    <li class="nav-item">
                        <a href="<?= htmlspecialchars($link['url']) ?>" 
                           class="nav-link <?= is_active_page($key, $current_page) ?>">
                            <?= htmlspecialchars($link['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="nav-actions">
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-primary btn-sm btn-order">
                    Order Online
                </a>
            </div>
        </nav>
    </div>
</header>
