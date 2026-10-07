<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}
$current_page = $current_page ?? 'home';
?>
<!-- 1. Top Green Announcement Bar -->
<div class="top-notice-bar">
    <div class="container">
        <div class="top-notice-wrapper">
            <div class="top-notice-left">
                <img src="<?= asset('images/logo/chitale-logo.jpg') ?>" alt="Chitale Bandhu Americas">
                <span>Chitale Bandhu Products now available at Annapoorna</span>
                <a href="/chitale-products" class="top-notice-btn">Shop Now</a>
            </div>
            <div class="top-notice-right">
                <span class="top-notice-badge">OPEN TILL MIDNIGHT</span>
                <span>• Monday to Friday Only</span>
            </div>
        </div>
    </div>
</div>

<!-- 2. Middle Header: Catering Phone + Centered Annapoorna Logo -->
<div class="header-mid">
    <div class="container">
        <div class="header-mid-wrapper">
            <!-- Left: Catering hotline box -->
            <div class="header-catering-box">
                <div class="header-phone-icon">📞</div>
                <div class="header-catering-text">
                    <span>For Catering Services</span>
                    <a href="tel:<?= PHONE_CATERING_RAW ?>"><?= PHONE_CATERING_DISPLAY ?></a>
                </div>
            </div>

            <!-- Center: Annapoorna Logo -->
            <div class="header-mid-logo">
                <a href="/" aria-label="Annapoorna Home">
                    <img src="<?= asset('images/logo/annapoorna-dark-logo.png') ?>" alt="Annapoorna Indian Vegetarian Cuisine">
                </a>
            </div>

            <!-- Right: Secondary Phone / Mobile Toggle -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <div class="header-catering-box" style="display: none; @media(min-width: 1200px){display: flex;}">
                    <div class="header-catering-text" style="text-align: right;">
                        <span>For Phone Orders</span>
                        <a href="tel:<?= PHONE_ORDERS_RAW ?>"><?= PHONE_ORDERS_DISPLAY ?></a>
                    </div>
                </div>
                <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation">
                    ☰
                </button>
            </div>
        </div>
    </div>
</div>

<!-- 3. Navigation Bar: Social Icons + Menu Links + Order Online -->
<nav class="site-navbar" role="navigation" aria-label="Main Menu">
    <div class="container">
        <div class="navbar-wrapper">
            <!-- Social Handles & Search -->
            <div class="nav-socials">
                <a href="<?= SOCIAL_FACEBOOK ?>" target="_blank" rel="noopener" aria-label="Facebook">📘</a>
                <a href="<?= SOCIAL_INSTAGRAM ?>" target="_blank" rel="noopener" aria-label="Instagram">📷</a>
                <a href="<?= GOOGLE_MAPS_LINK ?>" target="_blank" rel="noopener" aria-label="Google Reviews">⭐</a>
            </div>

            <!-- Center Nav Links -->
            <ul class="nav-menu" id="navMenu">
                <li><a href="/" class="nav-link <?= is_active_page('home', $current_page) ?>">Home</a></li>
                <li><a href="/about" class="nav-link <?= is_active_page('about', $current_page) ?>">About</a></li>
                <li><a href="/menu" class="nav-link <?= is_active_page('menu', $current_page) ?>">Menu</a></li>
                <li><a href="/chitale-products" class="nav-link <?= is_active_page('chitale', $current_page) ?>">Chitale Shop</a></li>
                <li><a href="/catering" class="nav-link <?= is_active_page('catering', $current_page) ?>">Catering</a></li>
                <li><a href="/gallery" class="nav-link <?= is_active_page('gallery', $current_page) ?>">Gallery</a></li>
                <li><a href="/contact" class="nav-link <?= is_active_page('contact', $current_page) ?>">Contact Us</a></li>
            </ul>

            <!-- Right Order Button -->
            <div>
                <a href="<?= ORDER_ONLINE_URL ?>" target="_blank" rel="noopener" class="btn-order-online">
                    Order Online
                </a>
            </div>
        </div>
    </div>
</nav>
