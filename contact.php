<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Contact Us – Annapoorna';
$current_page = 'contact';
$extra_css = ['post-760.css', 'widget-google_maps.min.css'];
$body_page_class = 'page-id-760';
$elementor_page_class = 'elementor-page-760';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/wp-contact-content.php';
include __DIR__ . '/includes/footer.php';
