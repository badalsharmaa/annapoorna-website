<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privacy Policy';
$current_page = 'privacy';

include __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Privacy Policy</h1>
        <p>Your privacy and trust are of paramount importance to us.</p>
    </div>
</section>

<section class="section">
    <div class="container container-narrow">
        <div class="card">
            <h3>Information We Collect</h3>
            <p>At Annapoorna Authentic Indian Cuisine, we collect information you provide directly to us when you fill out contact or catering inquiry forms, place an order via our online ordering portal, or call our restaurant.</p>
            
            <h3 style="margin-top: 2rem;">How We Use Your Information</h3>
            <p>We use information collected strictly to fulfill your catering requests, process orders, provide customer service, and communicate regarding restaurant updates. We never sell, rent, or trade your personal information to third parties.</p>

            <h3 style="margin-top: 2rem;">Contact Regarding Privacy</h3>
            <p>If you have any questions about this Privacy Policy, please email us at <a href="mailto:<?= CONTACT_EMAIL ?>" style="color: var(--color-primary);"><?= CONTACT_EMAIL ?></a>.</p>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
