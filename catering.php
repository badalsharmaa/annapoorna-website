<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Catering Services – Annapoorna';
$current_page = 'catering';
$extra_css = ['post-3651.css'];
$body_page_class = 'page-id-3651';
$elementor_page_class = 'elementor-page-3651';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/wp-catering-content.php';
include __DIR__ . '/includes/footer.php';
