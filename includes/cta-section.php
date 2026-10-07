<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}
$cta_title = $cta_title ?? 'Ready to Taste Authentic Indian Flavors?';
$cta_subtitle = $cta_subtitle ?? 'Order online for quick pickup or contact us to cater your next memorable family or corporate event.';
?>
<section class="section">
    <div class="container">
        <div class="cta-banner">
            <h2><?= htmlspecialchars($cta_title) ?></h2>
            <p><?= htmlspecialchars($cta_subtitle) ?></p>
            <div class="cta-actions">
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn btn-secondary btn-lg">
                    Order Online for Pickup
                </a>
                <a href="/catering" class="btn btn-outline btn-lg" style="border-color: #FFFFFF; color: #FFFFFF;">
                    Plan Your Catering
                </a>
                <a href="tel:<?= PHONE_ORDERS_RAW ?>" class="btn btn-white btn-lg">
                    Call <?= PHONE_ORDERS_DISPLAY ?>
                </a>
            </div>
        </div>
    </div>
</section>
