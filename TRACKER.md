# Annapoorna Website — Master Development & Migration Tracker
*Path: `/Users/badalsharma/Hiraya /testannapoorna.hiraya.digital/TRACKER.md`*
*Synced with target repo: `/Users/badalsharma/Work/arnaporna/Website/TRACKER.md`*

> **Purpose**: This persistent tracking ledger maintains complete visibility into the WordPress-to-PHP conversion lifecycle so that no features, pages, components, styling nuances, or integrations are missed or forgotten.

---

## 📌 Executive Status Dashboard

| Metric | Target | Current Status | Progress |
| :--- | :--- | :--- | :--- |
| **Architecture Phase** | Modern Modular PHP | Production Architecture Live | 🟢 100% |
| **Core Components** | 6 Partials (`config`, `header`, `nav`, `footer`, etc.) | Fully Built & Verified | 🟢 100% |
| **Content Pages** | 8 Key Pages (`index`, `about`, `menu`, etc.) | Fully Built & Tested | 🟢 100% |
| **Menu Data (`menu.json`)** | 8 Categorized Sections | Extracted, Validated & Live | 🟢 100% |
| **Asset Pipeline** | CSS Design Tokens + Local Media | Fully Linked & Structured | 🟢 100% |
| **Forms & Inquiries** | Contact & Catering Forms | Handled & Validated | 🟢 100% |
| **Production Integration** | Sibling Ordering Portal (`myannapoornafoods.com`) | Seamlessly Integrated | 🟢 100% |

---

## 🏗️ Phase-by-Phase Detailed Task Matrix

### Phase 1: Core Foundation & Configuration
- [x] **1.1 Site Configuration (`includes/config.php`)**
  - [x] Central single source of truth for restaurant details
  - [x] Exact restaurant phone numbers: Orders `(408) 834-4933`, Catering `(408) 319-7037`
  - [x] Physical address: `770 East Tasman Dr, Milpitas, CA 95035`
  - [x] Operating hours (Tue–Fri lunch/dinner, Sat–Sun full day, Mon closed)
  - [x] Navigation array and helper functions (`asset()`, `is_active_page()`)
- [x] **1.2 Clean Routing & Security (`.htaccess`)**
  - [x] Extensionless URL rewriting (`.php` to clean slugs)
  - [x] 301 legacy redirects (`/about-us` -> `/about`, `/marathi-menu` -> `/menu?cat=marathi`, etc.)
  - [x] Gzip / Deflate compression for HTML, CSS, JS, SVG, and JSON
  - [x] Cache-Control headers for images (1 year) and static assets (1 month)
  - [x] Security headers (`X-Content-Type-Options`, `X-Frame-Options`, `Referrer-Policy`)
- [x] **1.3 Reusable Layout Partials (`includes/`)**
  - [x] `includes/header.php` (HTML5 boilerplate, dynamic SEO titles, meta descriptions, preconnected fonts)
  - [x] `includes/navbar.php` (Sticky header, brand logo, desktop navigation, mobile hamburger drawer, Order Online CTA button)
  - [x] `includes/footer.php` (Brand summary, quick links, business hours, interactive phone links, copyright notice)
  - [x] `includes/cta-section.php` (Global catering & online ordering banner component)

---

### Phase 2: Design System & Asset Management
- [x] **2.1 CSS Modular Architecture (`assets/css/`)**
  - [x] `variables.css` — Color tokens:
    - Primary Saffron: `#D9531E` / Deep Amber: `#B33D10`
    - Gold Accent: `#FFB300` / `#FFF8E1`
    - Warm Background: `#FAF7F2` / Surface Card: `#FFFFFF`
    - Dark Text: `#1E2229` / Muted Text: `#64748B`
    - Typography: `Marcellus` (Headings) + `Plus Jakarta Sans` (Body)
  - [x] `base.css` — Modern reset, typography scale, responsive containers, utility classes
  - [x] `layout.css` — Flexbox/Grid layouts for headers, hero sections, footers, and two-column wrappers
  - [x] `components.css` — Buttons, cards, badges (Vegan, Jain, Chef's Special), modal dialogs, form inputs
  - [x] `pages.css` — Dedicated styles for Menu grids, Catering tables, Gallery masonry, and About timeline
- [x] **2.2 Media Assets Migration (`assets/images/`)**
  - [x] Restaurant primary & secondary logos (`logo.png`, `logo-sec.png`)
  - [x] Featured food item photography (`misal-pav.jpg`, `kothimbir-vadi.jpg`, `sabudana-vada.jpg`, `vada-pav.png`)
  - [x] Chitale Bandhu Bakarwadi packaging photo (`bakarwadi.webp`)

---

### Phase 3: Data Architecture & Menu System
- [x] **3.1 Central Menu Database (`data/menu.json`)**
  - [x] Marathi Specials (Kothimbir Vadi, Sabudana Vada, Thalipeeth, Misal Pav, Puran Poli)
  - [x] Mumbai Street Snacks & Chaat (Vada Pav, Pav Bhaji, Sev Puri, Bhel Puri, Dahi Puri)
  - [x] Combo Thalis (Express Thali $15.00, Full Combo Thali, Paratha Meals)
  - [x] North Indian Curries & Breads (Paneer Butter Masala, Palak Paneer, Daal Makhani, Naan, Roti)
  - [x] Indo-Chinese Specialties (Veg Hakka Noodles, Manchurian, Chili Paneer, Schezwan Fried Rice)
  - [x] Chitale Bandhu Products (Bakarwadi, Amba Burfi, Rajkot Pedha, Chivda)
  - [x] Desserts & Drinks (Piyush, Kokum Sarbat, Mango Lassi, Masala Chai, Gulab Jamun)
- [x] **3.2 Menu Page & Filtering (`menu.php` + `assets/js/menu.js`)**
  - [x] Category tab buttons with instant filtering (No page reload)
  - [x] Search input for real-time dish lookup
  - [x] Dietary filter tags (Vegan, Fasting Special, Chef's Special)
  - [x] Direct "Order" buttons targeting `myannapoornafoods.com`

---

### Phase 4: Page Implementations
- [x] **4.1 Home Page (`index.php`)**
  - [x] Hero section: *"Annapoorna — Your Home for Marathi Vegetarian Cuisine in Milpitas!"*
  - [x] Primary CTAs: "Order Online", "Explore Full Menu", "Catering Services"
  - [x] Chitale Bandhu Sweets & Namkeens feature banner
  - [x] Signature Specialties showcase grid (Misal Pav, Kothimbir Vadi, Sabudana Vada, Vada Pav)
  - [x] About Annapoorna heritage snippet
  - [x] Catering highlights banner
  - [x] Global CTA banner & footer
- [x] **4.2 About Us Page (`about.php`)**
  - [x] Restaurant Story & Roots (Authentic flavors brought to the SF Bay Area)
  - [x] Marathi Culinary Philosophy & 4 Core Pillars of Excellence
- [x] **4.3 Catering Services Page (`catering.php`)**
  - [x] Catering packages, Live food stations, and event menus
  - [x] Direct catering phone line highlight: `(408) 319-7037`
  - [x] Full catering quote request form
- [x] **4.4 Chitale Bandhu Products Page (`chitale-products.php`)**
  - [x] Brand history tribute to Pune's iconic sweet & namkeen makers
  - [x] Product cards with pricing and online ordering links
- [x] **4.5 Gallery Page (`gallery.php`)**
  - [x] Responsive photo grid of food specialties and restaurant ambiance
- [x] **4.6 Contact Us Page (`contact.php`)**
  - [x] Address, hours, interactive Google Map embed, and inquiry contact form
- [x] **4.7 Legal & Error Pages**
  - [x] `privacy.php` — Privacy Policy
  - [x] `404.php` — User-friendly 404 error page

---

### Phase 5: Verification, Testing & Sign-Off
- [x] **5.1 Automated PHP Syntax Validation**
  - All 14 PHP files passed syntax linting with 0 errors (`php -l`)
- [x] **5.2 JSON Schema & Menu Integrity**
  - `data/menu.json` validated cleanly with `python3 -m json.tool`
- [x] **5.3 Local Web Server Verification**
  - Rendered over local PHP built-in web server (`HTTP 200 OK`, verified HTML headers and titles)
- [x] **5.4 Token Optimization & Graphify Verification**
  - Knowledge graph index maintained in `graphify-out/` and development rules in `.gemini/rules.md`

---

## 📝 Modification Log & History
- **2026-10-07 19:14**: Completed Phase 1 to Phase 5 full implementation. Pure standalone PHP website created at `/Users/badalsharma/Work/arnaporna/Website/`, passing all PHP syntax checks, JSON validations, and local server render tests.
