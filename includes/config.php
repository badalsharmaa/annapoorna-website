<?php
/**
 * Annapoorna Authentic Indian Cuisine
 * Master Application Configuration & Constants
 */

// Prevent direct script execution if accessed outside app wrapper
if (!defined('ANNAPOORNA_APP')) {
    define('ANNAPOORNA_APP', true);
}

// -------------------------------------------------------------
// Site Identity & Metadata
// -------------------------------------------------------------
define('SITE_NAME', 'Annapoorna Authentic Indian Cuisine');
define('SITE_TAGLINE', 'Your Home for Authentic Marathi & North Indian Vegetarian Cuisine');
define('SITE_TITLE', 'Annapoorna Authentic Indian Cuisine | Milpitas, CA');
define('SITE_URL', 'https://myannapoorna.com');
define('ORDER_ONLINE_URL', 'https://myannapoornafoods.com');

// -------------------------------------------------------------
// Contact Details & Phone Routing
// -------------------------------------------------------------
define('PHONE_ORDERS_DISPLAY', '(408) 834-4933');
define('PHONE_ORDERS_RAW', '+14088344933');

define('PHONE_CATERING_DISPLAY', '(408) 319-7037');
define('PHONE_CATERING_RAW', '+14083197037');

define('CONTACT_EMAIL', 'info@myannapoorna.com');

// -------------------------------------------------------------
// Mail & Inquiry Form Configuration
// -------------------------------------------------------------
define('MAIL_ENABLED', true);
define('MAIL_NOTIFICATION_TO', 'info@myannapoorna.com');
define('MAIL_NOTIFICATION_CATERING_TO', 'info@myannapoorna.com');
define('MAIL_FROM_ADDRESS', 'noreply@myannapoorna.com');
define('MAIL_FROM_NAME', 'Annapoorna Website');
define('INQUIRIES_STORAGE_FILE', __DIR__ . '/../data/inquiries.json');

// -------------------------------------------------------------
// Physical Location & Maps
// -------------------------------------------------------------
define('STORE_STREET', '770 East Tasman Dr');
define('STORE_CITY', 'Milpitas');
define('STORE_STATE', 'CA');
define('STORE_ZIP', '95035');
define('STORE_ADDRESS_FULL', '770 East Tasman Dr, Milpitas, CA 95035');

define('GOOGLE_MAPS_LINK', 'https://www.google.com/maps/search/?api=1&query=Annapoorna+Authentic+Indian+Cuisine+770+E+Tasman+Dr+Milpitas+CA');
define('GOOGLE_MAPS_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.925439775086!2d-121.8988629!3d37.4270138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fc99cfbc8d21b%3A0xb351059f131a44c9!2s770%20E%20Tasman%20Dr%2C%20Milpitas%2C%20CA%2095035!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus');

// -------------------------------------------------------------
// Operating Hours
// -------------------------------------------------------------
define('HOURS_WEEKDAY', 'Tue – Fri: 11:30 AM – 2:30 PM & 5:30 PM – 9:30 PM');
define('HOURS_WEEKEND', 'Sat – Sun: 11:30 AM – 10:00 PM (Continuous)');
define('HOURS_MONDAY', 'Monday: Closed');

$STORE_HOURS = [
    'Tuesday'   => '11:30 AM – 2:30 PM, 5:30 PM – 9:30 PM',
    'Wednesday' => '11:30 AM – 2:30 PM, 5:30 PM – 9:30 PM',
    'Thursday'  => '11:30 AM – 2:30 PM, 5:30 PM – 9:30 PM',
    'Friday'    => '11:30 AM – 2:30 PM, 5:30 PM – 9:30 PM',
    'Saturday'  => '11:30 AM – 10:00 PM',
    'Sunday'    => '11:30 AM – 10:00 PM',
    'Monday'    => 'Closed'
];

// -------------------------------------------------------------
// Social Media
// -------------------------------------------------------------
define('SOCIAL_INSTAGRAM', 'https://instagram.com/myannapoorna');
define('SOCIAL_FACEBOOK', 'https://facebook.com/myannapoorna');

// -------------------------------------------------------------
// Navigation Definition
// -------------------------------------------------------------
$NAV_LINKS = [
    'home'     => ['label' => 'Home', 'url' => '/'],
    'about'    => ['label' => 'About Us', 'url' => '/about'],
    'menu'     => ['label' => 'Menu', 'url' => '/menu'],
    'catering' => ['label' => 'Catering', 'url' => '/catering'],
    'chitale'  => ['label' => 'Chitale Products', 'url' => '/chitale-products'],
    'gallery'  => ['label' => 'Gallery', 'url' => '/gallery'],
    'contact'  => ['label' => 'Contact Us', 'url' => '/contact']
];

// -------------------------------------------------------------
// Helper Functions
// -------------------------------------------------------------
function is_active_page($key, $current_page) {
    return ($key === $current_page) ? 'active' : '';
}

function asset($path) {
    return '/assets/' . ltrim($path, '/');
}
