<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'About Us – Annapoorna';
$current_page = 'about';
$extra_css = ['post-604.css'];
$body_page_class = 'page-id-604';
$elementor_page_class = 'elementor-page-604';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/wp-about-content.php';
include __DIR__ . '/includes/footer.php';
