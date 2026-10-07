<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}

$page_title_text = isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_TITLE;
$page_desc_text  = isset($page_description) ? $page_description : SITE_TAGLINE . '. Located in Milpitas, CA. Pure vegetarian authentic Maharashtrian dishes, Mumbai street food, and catering.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title_text) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc_text) ?>">
    <link rel="canonical" href="<?= SITE_URL . ($_SERVER['REQUEST_URI'] ?? '/') ?>">
    
    <!-- Open Graph / Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($page_title_text) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_desc_text) ?>">
    <meta property="og:url" content="<?= SITE_URL . ($_SERVER['REQUEST_URI'] ?? '/') ?>">
    <meta property="og:site_name" content="<?= SITE_NAME ?>">
    
    <!-- Google Fonts: Marcellus & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= asset('css/variables.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/base.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/layout.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/components.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/pages.css') ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= asset('images/logo/logo-sec.png') ?>">
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <main id="main-content">
