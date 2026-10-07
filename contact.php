<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Contact Us & Location — Annapoorna Milpitas';
$page_description = 'Visit Annapoorna at 770 East Tasman Dr, Milpitas, CA. Call (408) 834-4933 for phone orders, or (408) 319-7037 for catering inquiries.';
$current_page = 'contact';

$form_submitted = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($name && $email && $message) {
        // Form submitted cleanly
        $form_submitted = true;
    } else {
        $form_error = 'Please fill out all required fields with a valid email address.';
    }
}

include __DIR__ . '/includes/header.php';
?>

<!-- Banner -->
<section class="page-header">
    <div class="container">
        <h1>Contact & Location</h1>
        <p>We look forward to welcoming you! Get in touch for table inquiries, phone orders, or catering consultations.</p>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="section" id="inquiry">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: flex-start;">
            <!-- Left: Contact Details & Hours -->
            <div>
                <span class="badge badge-special" style="margin-bottom: 0.75rem;">Visit Our Restaurant</span>
                <h2>Find Us in Milpitas, CA</h2>
                <p>Conveniently located near Cisco and major Silicon Valley campuses on East Tasman Drive with ample parking.</p>

                <div style="margin: 2rem 0; display: flex; flex-direction: column; gap: 1.5rem;">
                    <!-- Address -->
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.5rem;">📍</span>
                        <div>
                            <h4 style="margin-bottom: 0.25rem;">Address</h4>
                            <p style="margin: 0; color: var(--color-charcoal);"><?= STORE_ADDRESS_FULL ?></p>
                            <a href="<?= GOOGLE_MAPS_LINK ?>" target="_blank" rel="noopener" style="color: var(--color-primary); font-weight: 600; font-size: 0.9rem;">Open in Google Maps &rarr;</a>
                        </div>
                    </div>

                    <!-- Phone Numbers -->
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.5rem;">📞</span>
                        <div>
                            <h4 style="margin-bottom: 0.25rem;">Direct Phone Lines</h4>
                            <p style="margin: 0 0 0.25rem; color: var(--color-charcoal);">
                                <strong>Takeout & Orders:</strong> <a href="tel:<?= PHONE_ORDERS_RAW ?>" style="color: var(--color-primary); font-weight: 600;"><?= PHONE_ORDERS_DISPLAY ?></a>
                            </p>
                            <p style="margin: 0; color: var(--color-charcoal);">
                                <strong>Catering Inquiries:</strong> <a href="tel:<?= PHONE_CATERING_RAW ?>" style="color: var(--color-primary); font-weight: 600;"><?= PHONE_CATERING_DISPLAY ?></a>
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.5rem;">✉️</span>
                        <div>
                            <h4 style="margin-bottom: 0.25rem;">Email</h4>
                            <p style="margin: 0;"><a href="mailto:<?= CONTACT_EMAIL ?>" style="color: var(--color-primary); font-weight: 600;"><?= CONTACT_EMAIL ?></a></p>
                        </div>
                    </div>

                    <!-- Operating Hours -->
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.5rem;">⏰</span>
                        <div>
                            <h4 style="margin-bottom: 0.25rem;">Operating Hours</h4>
                            <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.95rem; line-height: 1.8;">
                                <li><strong>Tuesday – Friday:</strong> 11:30 AM – 2:30 PM & 5:30 PM – 9:30 PM</li>
                                <li><strong>Saturday – Sunday:</strong> 11:30 AM – 10:00 PM (Continuous)</li>
                                <li style="color: #D32F2F;"><strong>Monday:</strong> Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Interactive Contact Form -->
            <div>
                <div class="card" style="box-shadow: var(--shadow-lg);">
                    <h3 style="margin-bottom: 0.5rem;">Send Us a Message</h3>
                    <p style="color: var(--color-muted); font-size: 0.9rem; margin-bottom: 1.5rem;">Have a question about our menu, reservations, or general feedback?</p>

                    <?php if ($form_submitted): ?>
                        <div style="background: var(--color-accent-light); border: 1px solid var(--color-accent); color: var(--color-accent); padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem;">
                            <strong>Thank you!</strong> Your message has been received. Our team will get back to you shortly.
                        </div>
                    <?php elseif ($form_error): ?>
                        <div style="background: #FFEBEE; border: 1px solid #D32F2F; color: #D32F2F; padding: 1.25rem; border-radius: var(--radius-sm); margin-bottom: 1.5rem;">
                            <?= htmlspecialchars($form_error) ?>
                        </div>
                    <?php endif; ?>

                    <form action="/contact" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="contact_name">Your Name *</label>
                            <input type="text" id="contact_name" name="name" class="form-control" required placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_email">Email Address *</label>
                            <input type="email" id="contact_email" name="email" class="form-control" required placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_phone">Phone Number</label>
                            <input type="tel" id="contact_phone" name="phone" class="form-control" placeholder="(408) 000-0000">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_msg">Your Message *</label>
                            <textarea id="contact_msg" name="message" class="form-control" required placeholder="How can we help you?"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Map Embed Section -->
        <div style="margin-top: 4rem; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
            <iframe 
                src="<?= GOOGLE_MAPS_EMBED ?>" 
                width="100%" 
                height="400" 
                style="border:0; display: block;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade" 
                title="Annapoorna Milpitas Location">
            </iframe>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
