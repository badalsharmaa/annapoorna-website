<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Gallery – Annapoorna';
$current_page = 'gallery';
$extra_css = ['post-846.css'];
$body_page_class = 'page-id-846';
$elementor_page_class = 'elementor-page-846';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/wp-gallery-content.php';
include __DIR__ . '/includes/footer.php';
