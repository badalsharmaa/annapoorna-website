<?php
define('ANNAPOORNA_APP', true);
require_once __DIR__ . '/includes/config.php';

$page_title = 'Catering Services — Weddings, Parties & Corporate Events';
$page_description = 'Professional pure vegetarian Indian catering in Milpitas and the San Francisco Bay Area. Live food counters, chaat stations, thalis, and custom event menus.';
$current_page = 'catering';

include __DIR__ . '/includes/header.php';
?>

<!-- Banner -->
<section class="page-header">
    <div class="container">
        <h1>Annapoorna Catering Services</h1>
        <p>Adding joyful deliciousness and culinary excellence to your life’s special celebrations across the San Francisco Bay Area.</p>
    </div>
</section>

<!-- Catering Packages & Overview -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 4rem; align-items: flex-start;">
            <div>
                <span class="badge badge-special" style="margin-bottom: 0.75rem;">Tailored Hospitality</span>
                <h2>Full-Service Vegetarian Catering for Every Occasion</h2>
                <p>
                    Whether you are organizing a lavish wedding reception, an intimate thread ceremony, a festive Diwali puja, or a corporate lunch, Annapoorna provides exceptional catering customized to your exact guest count and dietary preferences.
                </p>

                <div style="margin: 2.5rem 0;">
                    <h3 style="font-size: 1.35rem; margin-bottom: 1.25rem;">Our Event Specialties:</h3>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.25rem;">✨ Live Food Stations</h4>
                        <p style="color: var(--color-muted); font-size: 0.95rem;">Interactive live Chaat stations (Sev Puri, Pani Puri, Bhel Puri), sizzling Pav Bhaji tawa, fresh Dosa counters, and hot Vada Pav corners made fresh right in front of your guests.</p>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.25rem;">🍱 Traditional Maharashtrian Feasts</h4>
                        <p style="color: var(--color-muted); font-size: 0.95rem;">Authentic celebratory banquets featuring hot Puran Poli with pure ghee, Kothimbir Vadi, Bharli Vangi, Katachi Amti, fragrant Basmati Rice, and Shrikhand / Amba Burfi.</p>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.25rem;">🍛 Rich North Indian & Indo-Chinese Buffets</h4>
                        <p style="color: var(--color-muted); font-size: 0.95rem;">Creamy Paneer Butter Masala, overnight Daal Makhani, fresh clay-oven Naans, Vegetable Biryani, and wok-tossed Hakka Noodles.</p>
                    </div>
                </div>

                <div style="background: var(--color-bg-alt); padding: 1.5rem; border-radius: var(--radius-md); border-left: 4px solid var(--color-primary);">
                    <p style="font-weight: 600; color: var(--color-dark); margin-bottom: 0.25rem;">Have questions or need immediate availability?</p>
                    <p style="margin: 0; color: var(--color-muted);">Call our dedicated Catering Director directly at: <a href="tel:<?= PHONE_CATERING_RAW ?>" style="color: var(--color-primary); font-weight: 700;"><?= PHONE_CATERING_DISPLAY ?></a></p>
                </div>
            </div>

            <!-- Inquiry Form Card -->
            <div>
                <div class="card" style="box-shadow: var(--shadow-lg);">
                    <h3 style="margin-bottom: 0.5rem;">Request a Catering Quote</h3>
                    <p style="color: var(--color-muted); font-size: 0.9rem; margin-bottom: 1.5rem;">Fill out this inquiry and our event coordinator will contact you within 24 hours.</p>

                    <form action="/contact#inquiry" method="POST">
                        <div class="form-group">
                            <label class="form-label" for="cat_name">Full Name *</label>
                            <input type="text" id="cat_name" name="name" class="form-control" required placeholder="Your name">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cat_phone">Phone Number *</label>
                            <input type="tel" id="cat_phone" name="phone" class="form-control" required placeholder="(408) 000-0000">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cat_email">Email Address *</label>
                            <input type="email" id="cat_email" name="email" class="form-control" required placeholder="you@domain.com">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div class="form-group">
                                <label class="form-label" for="cat_date">Event Date</label>
                                <input type="date" id="cat_date" name="event_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="cat_guests">Guest Count</label>
                                <input type="number" id="cat_guests" name="guest_count" class="form-control" placeholder="e.g. 50">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cat_type">Occasion / Service Type</label>
                            <select id="cat_type" name="event_type" class="form-control">
                                <option value="Corporate Lunch">Corporate Lunch / Meeting</option>
                                <option value="Wedding / Reception">Wedding / Sangeet / Reception</option>
                                <option value="Birthday / Anniversary">Birthday / Anniversary Party</option>
                                <option value="Puja / Religious Gathering">Puja / Religious Celebration</option>
                                <option value="Other">Other Custom Event</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="cat_notes">Additional Details / Menu Preferences</label>
                            <textarea id="cat_notes" name="notes" class="form-control" rows="3" placeholder="Tell us about live counters, dietary needs (Jain/Vegan), venue location..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Submit Catering Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<?php include __DIR__ . '/includes/cta-section.php'; ?>

<?php include __DIR__ . '/includes/footer.php'; ?>
