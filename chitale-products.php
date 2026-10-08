<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Chitale Shop – Annapoorna';
$current_page = 'chitale';
$extra_css = ['post-1953.css', 'post-2832.css'];
$body_page_class = 'page-id-1953';
$elementor_page_class = 'elementor-page-1953';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/wp-chitale-content.php';
include __DIR__ . '/includes/footer.php';
