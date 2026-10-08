<?php
/**
 * Annapoorna Restaurant — Inquiries & Form Submission Handler
 * Processes Contact Us and Catering Services forms via AJAX or standard POST.
 */

define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo 'Method Not Allowed';
    exit;
}

// Helper: Check if request expects JSON / is AJAX
function is_ajax_request() {
    return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
        || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
        || isset($_GET['ajax']);
}

// Helper: Respond with JSON or redirect
function respond($success, $message, $redirect_url = '') {
    if (is_ajax_request()) {
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code($success ? 200 : 400);
        echo json_encode([
            'success' => (bool)$success,
            'message' => $message
        ]);
        exit;
    }

    // Fallback for non-AJAX standard browser submission
    if (empty($redirect_url)) {
        $referer = $_SERVER['HTTP_REFERER'] ?? '/';
        $redirect_url = strtok($referer, '?');
    }

    $param = $success ? 'status=success' : 'status=error&msg=' . urlencode($message);
    $glue = (strpos($redirect_url, '?') !== false) ? '&' : '?';
    header('Location: ' . $redirect_url . $glue . $param);
    exit;
}

// -------------------------------------------------------------
// 1. Anti-Spam Honeypot Verification
// -------------------------------------------------------------
// If the hidden 'e_website' field is populated, silently reject bot
if (!empty($_POST['e_website'])) {
    // Pretend success so bots do not retry
    respond(true, 'Thank you! Your message has been sent successfully.');
}

// -------------------------------------------------------------
// 2. Extract & Normalize Form Fields
// -------------------------------------------------------------
$form_fields = isset($_POST['form_fields']) && is_array($_POST['form_fields']) ? $_POST['form_fields'] : [];

$form_type = trim($_POST['form_type'] ?? '');
$referer_title = trim($_POST['referer_title'] ?? '');

// Auto-detect form type if not explicitly supplied
if (empty($form_type)) {
    if (stripos($referer_title, 'catering') !== false || isset($form_fields['field_c66c70a']) || isset($_POST['date'])) {
        $form_type = 'catering';
    } else {
        $form_type = 'contact';
    }
}

// Extract fields with fallback across flat and Elementor naming patterns
$name    = trim($_POST['name'] ?? $form_fields['name'] ?? '');
$email   = trim($_POST['email'] ?? $form_fields['email'] ?? '');
$phone   = trim($_POST['phone'] ?? $form_fields['phone'] ?? '');

// In legacy Elementor catering markup, phone field may have been named form_fields[email]
if ($form_type === 'catering' && empty($phone) && !empty($email) && is_numeric(str_replace(['+', '-', ' ', '(', ')'], '', $email))) {
    $phone = $email;
    $email = '';
}

// Catering specific fields
$date    = trim($_POST['date'] ?? $form_fields['field_c66c70a'] ?? '');
$time    = trim($_POST['time'] ?? $form_fields['field_c9b6d3b'] ?? '');
$guests  = trim($_POST['guests'] ?? $form_fields['field_5689e8b'] ?? '');

// Contact specific fields (message)
$message = trim($_POST['message'] ?? $form_fields['field_c9b6d3b'] ?? '');

// -------------------------------------------------------------
// 3. Validation
// -------------------------------------------------------------
if (empty($name)) {
    respond(false, 'Please provide your full name.');
}

if ($form_type === 'catering') {
    if (empty($phone)) {
        respond(false, 'Please provide your contact phone number.');
    }
    if (empty($date)) {
        respond(false, 'Please select your preferred event date.');
    }
    if (empty($guests) || !is_numeric($guests) || intval($guests) < 1) {
        respond(false, 'Please provide a valid number of guests.');
    }
} else {
    // Contact form validation
    if (empty($email) && empty($phone)) {
        respond(false, 'Please provide an email address or phone number so we can reach you.');
    }
    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        respond(false, 'Please provide a valid email address.');
    }
    if (empty($message)) {
        respond(false, 'Please enter your message or question.');
    }
}

// -------------------------------------------------------------
// 4. Record to Inquiries Storage (Ensures No Lead Is Ever Lost)
// -------------------------------------------------------------
$inquiry_entry = [
    'id'           => uniqid('inq_', true),
    'type'         => $form_type,
    'name'         => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
    'email'        => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'phone'        => htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'),
    'date'         => htmlspecialchars($date, ENT_QUOTES, 'UTF-8'),
    'time'         => htmlspecialchars($time, ENT_QUOTES, 'UTF-8'),
    'guests'       => htmlspecialchars($guests, ENT_QUOTES, 'UTF-8'),
    'message'      => htmlspecialchars($message, ENT_QUOTES, 'UTF-8'),
    'submitted_at' => date('Y-m-d H:i:s T'),
    'ip_address'   => $_SERVER['REMOTE_ADDR'] ?? '',
    'user_agent'   => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255)
];

$storage_file = defined('INQUIRIES_STORAGE_FILE') ? INQUIRIES_STORAGE_FILE : __DIR__ . '/data/inquiries.json';
$storage_dir = dirname($storage_file);

if (!is_dir($storage_dir)) {
    @mkdir($storage_dir, 0755, true);
}

$inquiries = [];
if (file_exists($storage_file)) {
    $existing_data = @file_get_contents($storage_file);
    if ($existing_data) {
        $decoded = json_decode($existing_data, true);
        if (is_array($decoded)) {
            $inquiries = $decoded;
        }
    }
}

$inquiries[] = $inquiry_entry;
@file_put_contents($storage_file, json_encode($inquiries, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX);

// -------------------------------------------------------------
// 5. Email Notification Dispatch
// -------------------------------------------------------------
if (defined('MAIL_ENABLED') && MAIL_ENABLED) {
    $to = ($form_type === 'catering' && defined('MAIL_NOTIFICATION_CATERING_TO')) 
        ? MAIL_NOTIFICATION_CATERING_TO 
        : MAIL_NOTIFICATION_TO;

    if ($form_type === 'catering') {
        $subject = 'New Catering Enquiry: ' . $name . ' (' . ($date ? $date : 'Upcoming') . ')';
        $body_content = '
            <h2 style="color:#D9531E; margin-top:0;">New Catering Service Enquiry</h2>
            <p>A new catering inquiry has been submitted through the Annapoorna website:</p>
            <table style="width:100%; border-collapse:collapse; margin-top:15px; font-family:sans-serif;">
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; width:30%; border:1px solid #E2E8F0;">Full Name:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . htmlspecialchars($name) . '</td></tr>
                <tr><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Phone Number:</td><td style="padding:10px; border:1px solid #E2E8F0;"><a href="tel:' . preg_replace('/[^0-9+]/', '', $phone) . '">' . htmlspecialchars($phone) . '</a></td></tr>
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Email:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . ($email ? htmlspecialchars($email) : 'Not provided') . '</td></tr>
                <tr><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Event Date:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . htmlspecialchars($date) . '</td></tr>
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Preferred Time:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . ($time ? htmlspecialchars($time) : 'Flexible') . '</td></tr>
                <tr><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">No. of Guests:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . htmlspecialchars($guests) . '</td></tr>
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Submitted At:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . date('M j, Y g:i A T') . '</td></tr>
            </table>';
    } else {
        $subject = 'New Contact Message: ' . $name;
        $body_content = '
            <h2 style="color:#D9531E; margin-top:0;">New Contact Form Message</h2>
            <p>A visitor has sent a message through the Annapoorna website:</p>
            <table style="width:100%; border-collapse:collapse; margin-top:15px; font-family:sans-serif;">
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; width:30%; border:1px solid #E2E8F0;">Full Name:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . htmlspecialchars($name) . '</td></tr>
                <tr><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Email:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . ($email ? '<a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a>' : 'Not provided') . '</td></tr>
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Phone Number:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . ($phone ? htmlspecialchars($phone) : 'Not provided') . '</td></tr>
                <tr><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Message:</td><td style="padding:10px; border:1px solid #E2E8F0; white-space:pre-wrap;">' . nl2br(htmlspecialchars($message)) . '</td></tr>
                <tr style="background:#FAF7F2;"><td style="padding:10px; font-weight:bold; border:1px solid #E2E8F0;">Submitted At:</td><td style="padding:10px; border:1px solid #E2E8F0;">' . date('M j, Y g:i A T') . '</td></tr>
            </table>';
    }

    $email_html = '
    <!DOCTYPE html>
    <html>
    <head><meta charset="UTF-8"></head>
    <body style="font-family: Arial, sans-serif; line-height:1.6; color:#1E2229; background-color:#F4F4F4; margin:0; padding:20px;">
        <div style="max-width:600px; margin:0 auto; background:#ffffff; border-radius:8px; overflow:hidden; border:1px solid #E2E8F0; box-shadow:0 2px 4px rgba(0,0,0,0.05);">
            <div style="background-color:#D9531E; padding:20px; text-align:center; color:#ffffff;">
                <h1 style="margin:0; font-size:22px; letter-spacing:0.5px;">Annapoorna Authentic Indian Cuisine</h1>
                <p style="margin:5px 0 0; font-size:13px; opacity:0.9;">Milpitas, California</p>
            </div>
            <div style="padding:25px 20px;">
                ' . $body_content . '
            </div>
            <div style="background:#FAF7F2; padding:15px; text-align:center; font-size:12px; color:#64748B; border-top:1px solid #E2E8F0;">
                <p style="margin:0;">This notification was generated automatically from the Annapoorna website form.</p>
            </div>
        </div>
    </body>
    </html>';

    $headers = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = 'From: ' . MAIL_FROM_NAME . ' <' . MAIL_FROM_ADDRESS . '>';
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers[] = 'Reply-To: ' . $email;
    }

    // Suppress errors on local dev environments without local sendmail/MTA
    @mail($to, $subject, $email_html, implode("\r\n", $headers));
}

// -------------------------------------------------------------
// 6. Return Success Feedback
// -------------------------------------------------------------
$success_msg = ($form_type === 'catering')
    ? 'Thank you! Your catering enquiry has been received. Our team will contact you shortly to finalize details.'
    : 'Thank you for reaching out! Your message has been sent successfully. We will get back to you shortly.';

respond(true, $success_msg);
