<?php
/**
 * Local Development Router for PHP Built-in Server
 * Simulates Apache .htaccess behavior (clean URLs & static file passthrough)
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

// 1. Direct static file passthrough (CSS, JS, images, fonts, etc.)
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// 2. Serve root index.php
if ($uri === '/' || $uri === '') {
    require __DIR__ . '/index.php';
    exit;
}

// 3. WordPress Legacy 301 Redirects (matching .htaccess)
$redirects = [
    '/about-us'                 => '/about',
    '/marathi-menu'             => '/menu?cat=marathi',
    '/north-indian-menu-2'      => '/menu?cat=north-indian',
    '/indo-chinese-menu-2'      => '/menu?cat=indo-chinese',
    '/speciality-items'         => '/menu?cat=specialties',
    '/catering-services'        => '/catering',
    '/annapoorna-catering-menu' => '/catering',
    '/chitale-bandhu-products'  => '/chitale-products',
    '/chitale-shop'             => '/chitale-products',
    '/contact-us'               => '/contact',
    '/privacy-policy'           => '/privacy',
    '/terms-and-conditions'     => '/terms',
];

$trimmed_uri = rtrim($uri, '/');
if (isset($redirects[$trimmed_uri])) {
    header("Location: " . $redirects[$trimmed_uri], true, 301);
    exit;
}

// 4. Extensionless clean URLs (.php resolution)
$php_file = __DIR__ . $trimmed_uri . '.php';
if (file_exists($php_file)) {
    require $php_file;
    exit;
}

// 5. Fallback 404 handler
http_response_code(404);
if (file_exists(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
} else {
    echo "404 Not Found";
}
exit;
