    <?php include __DIR__ . '/wp-footer.php'; ?>

    <!-- Clean, lightweight mobile nav handler (Supports both ElementsKit Offcanvas & Elementor Nav Dropdown) -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- 1. ElementsKit Offcanvas Drawer Handler ---
        const offcanvas = document.getElementById('ekit-offcanvas-76c3d2a') || document.querySelector('.ekit-sidebar-group');
        const openButtons = document.querySelectorAll('.ekit_navSidebar-button, .ekit_offcanvas-sidebar');
        const closeButtons = document.querySelectorAll('.ekit_close-side-widget, .ekit-overlay');

        function openDrawer(e) {
            if (e) e.preventDefault();
            if (offcanvas) {
                offcanvas.classList.add('ekit_isActive');
                document.body.classList.add('ekit-offcanvas-open');
                openButtons.forEach(btn => btn.setAttribute('aria-expanded', 'true'));
            }
        }

        function closeDrawer(e) {
            if (e && e.preventDefault) e.preventDefault();
            if (offcanvas) {
                offcanvas.classList.remove('ekit_isActive');
                document.body.classList.remove('ekit-offcanvas-open');
                openButtons.forEach(btn => btn.setAttribute('aria-expanded', 'false'));
            }
        }

        openButtons.forEach(btn => btn.addEventListener('click', openDrawer));
        closeButtons.forEach(btn => btn.addEventListener('click', closeDrawer));

        // Close on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && offcanvas && offcanvas.classList.contains('ekit_isActive')) {
                closeDrawer();
            }
        });

        // Close when clicking a link inside offcanvas drawer (except anchor dropdown toggles)
        if (offcanvas) {
            offcanvas.querySelectorAll('a:not(.ekit_close-side-widget):not(.elementor-item-anchor)').forEach(link => {
                link.addEventListener('click', () => {
                    // Short timeout so click registers before drawer closes
                    setTimeout(closeDrawer, 150);
                });
            });
        }

        // Submenu collapse/expand for mobile nav
        document.querySelectorAll('.menu-item-has-children > a').forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                const parent = toggle.parentElement;
                const subMenu = parent.querySelector('.sub-menu');
                if (subMenu) {
                    e.preventDefault();
                    parent.classList.toggle('menu-item-expanded');
                    if (subMenu.style.display === 'block') {
                        subMenu.style.display = 'none';
                    } else {
                        subMenu.style.display = 'block';
                    }
                }
            });
        });

        // --- 2. Elementor Nav Menu Toggle Handler ---
        document.querySelectorAll('.elementor-menu-toggle, .nav-toggle').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                btn.classList.toggle('elementor-active');
                const isExpanded = btn.classList.contains('elementor-active');
                btn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');

                const nav = btn.closest('.elementor-widget-nav-menu')?.querySelector('.elementor-nav-menu--dropdown') 
                         || document.querySelector('.elementor-nav-menu--dropdown');
                if (nav) {
                    nav.classList.toggle('elementor-active');
                    nav.setAttribute('aria-hidden', isExpanded ? 'false' : 'true');
                    if (isExpanded) {
                        nav.style.display = 'block';
                    } else {
                        nav.style.display = 'none';
                    }
                }
            });
        });
    });
    </script>
    <script src="/assets/js/form-handler.js" defer></script>
</body>
</html>
