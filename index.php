<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Annapoorna – Catering Services | Authentic Indian Cuisine';
$current_page = 'home';
$extra_css = ['post-431.css'];

include __DIR__ . '/includes/header.php';

// Exact WordPress Rendered Page Content
include __DIR__ . '/includes/wp-home-content.php';

include __DIR__ . '/includes/footer.php';
