<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Page Not Found (404)';
$current_page = '404';

http_response_code(404);
include __DIR__ . '/includes/header.php';
?>

<section class="section" style="padding: 8rem 0; text-align: center;">
    <div class="container container-narrow">
        <h1 style="font-size: 5rem; color: var(--color-primary); margin-bottom: 1rem;">404</h1>
        <h2>Page Not Found</h2>
        <p style="color: var(--color-muted); margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
            The page you are looking for may have been moved, renamed, or is temporarily unavailable. Let us help you find delicious vegetarian food instead!
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center;">
            <a href="/" class="btn btn-primary">Return to Homepage</a>
            <a href="/menu" class="btn btn-outline">Explore Our Menu</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
