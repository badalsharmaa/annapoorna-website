# AI Development, Graphify & Token Optimization Rules
# Project: Annapoorna Website WordPress-to-PHP Migration

## 1. Zero-Amnesia Development Rule (Mandatory Tracker Inspection)
- **Always Consult `TRACKER.md`**: Before starting any task or implementation step, read `TRACKER.md` to establish the exact current phase, completed tasks, and upcoming deliverables.
- **Never Rely on Context Memory Alone**: Because context windows reset or compress across conversation turns, all architectural facts, decisions, and statuses are permanently recorded in `TRACKER.md` and `memory.md`.
- **Immediate Task Checkoff**: Whenever a component, stylesheet, script, or page is implemented or tested, update `TRACKER.md` immediately with `[x]` and document any non-obvious details in the modification log.

---

## 2. Token-Conservation Protocol (Strict Efficiency)
- **Use Graphify First for Codebase Lookups**:
  - Always use `graphify query "<concept/symbol>"` to locate classes, methods, relations, and file locations in 10-20 tokens instead of reading multi-megabyte files into the context window.
  - Never dump entire PHP files or WordPress core files into the context.
  - Use AST-driven indexing stored in `graphify-out/graph.json`.
- **Targeted Slice Reads (`view_file`)**:
  - When inspecting code or data, only read precise line ranges (e.g. lines 1 to 50) using `StartLine` and `EndLine`.
  - Avoid large `cat` or `head -n 500` commands in terminal output.
- **Python-Mediated Extraction**:
  - For large datasets (e.g. `u286889322_myannapoorna.sql.gz` or WordPress tables), process them locally via targeted Python scripts that output only compact summary records instead of raw dumps.

---

## 3. Architecture & Coding Standards
- **Pure Standalone PHP**:
  - No WordPress dependency, no heavy third-party framework overhead.
  - Modular structure: `includes/config.php` (constants), `header.php`, `navbar.php`, `footer.php`, `cta-section.php`.
- **Decoupled Data**:
  - Menu data strictly maintained in `data/menu.json`.
  - Gallery metadata strictly maintained in `data/gallery.json`.
- **Semantic, Mobile-First CSS**:
  - CSS custom properties (`variables.css`) for consistent typography and brand colors (saffron `#D9531E`, gold `#FFCA01`).
  - Flexbox and Grid layouts; minimal dependencies; zero bloated UI frameworks.
- **Vanilla JavaScript**:
  - Pure JS for mobile navbar toggle, live category filters, search bar, and contact form validation.

---

## 4. External Integration Rules
- **Ordering Gateway**:
  - All online ordering CTAs must point to `https://myannapoornafoods.com/`.
  - Do not implement heavy WooCommerce checkout engines on this informational marketing site.
- **Phone Numbers & Contacts**:
  - Phone Orders: `(408) 834-4933` (tel: `+14088344933`)
  - Catering Hotline: `(408) 319-7037` (tel: `+14083197037`)
  - Physical Address: `770 East Tasman Dr, Milpitas, CA 95035`
