<?php
if (!defined('ANNAPOORNA_APP')) {
    require_once __DIR__ . '/config.php';
}

$page_title_text = isset($page_title) ? $page_title . ' | ' . SITE_NAME : 'Annapoorna – Catering Services | Authentic Indian Cuisine';
$page_desc_text  = isset($page_description) ? $page_description : 'Annapoorna Authentic Indian Cuisine in Milpitas, CA. Authentic Marathi vegetarian dishes, Mumbai street food, and catering services.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title_text) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc_text) ?>">
    <link rel="canonical" href="<?= SITE_URL . ($_SERVER['REQUEST_URI'] ?? '/') ?>">
    
    <!-- Google Fonts: Marcellus & Poppins matching WordPress -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= asset('css/variables.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/base.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/layout.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/components.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/pages.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/decor.css') ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= asset('images/logo/logo-sec.png') ?>">
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <main id="main-content">
