<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}

$page_title_text = isset($page_title) ? $page_title : 'Annapoorna – Catering Services | Authentic Indian Cuisine';
$page_desc_text  = isset($page_description) ? $page_description : 'Annapoorna Authentic Indian Cuisine in Milpitas, CA.';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= htmlspecialchars($page_title_text) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc_text) ?>">
    
    <!-- All Original WordPress Fonts & CSS Stylesheets -->
    <?php include __DIR__ . '/wp-head-tags.php'; ?>
    <?php if (isset($extra_css)): foreach ($extra_css as $css): ?>
        <link rel="stylesheet" href="/assets/wp-css/<?= htmlspecialchars($css) ?>">
    <?php endforeach; endif; ?>
</head>
<body class="home wp-singular page-template page-template-elementor_header_footer page <?= isset($body_page_class) ? htmlspecialchars($body_page_class) : 'page-id-431' ?> wp-custom-logo wp-embed-responsive wp-theme-hello-elementor theme-hello-elementor woocommerce-js hello-elementor-default elementor-default elementor-template-full-width elementor-kit-55 elementor-page <?= isset($elementor_page_class) ? htmlspecialchars($elementor_page_class) : 'elementor-page-431' ?> e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit">
    <?php include __DIR__ . '/wp-header.php'; ?>
