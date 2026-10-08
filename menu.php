<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Menu – Annapoorna';
$current_page = 'menu';
$extra_css = ['post-613.css', 'widget-price-list.min.css'];
$body_page_class = 'page-id-613';
$elementor_page_class = 'elementor-page-613';

include __DIR__ . '/includes/header.php';

// Exact WordPress Rendered Menu Content (100% 1:1 design, toran garland, price lists)
include __DIR__ . '/includes/wp-menu-content.php';

include __DIR__ . '/includes/footer.php';
