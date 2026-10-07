/**
 * Annapoorna Restaurant — Interactive Menu Controller
 */

document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.menu-tab-btn');
    const menuSections = document.querySelectorAll('.menu-category-section');
    const searchInput = document.getElementById('menuSearch');
    const itemCards = document.querySelectorAll('.menu-item-card');

    // 1. Tab Switching
    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            tabButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const targetCategory = btn.getAttribute('data-target');

            menuSections.forEach(sec => {
                if (targetCategory === 'all' || sec.getAttribute('data-category') === targetCategory) {
                    sec.style.display = 'block';
                } else {
                    sec.style.display = 'none';
                }
            });
        });
    });

    // 2. Real-time Search Filter
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();

            itemCards.forEach(card => {
                const name = (card.getAttribute('data-name') || '').toLowerCase();
                const desc = (card.getAttribute('data-desc') || '').toLowerCase();

                if (name.includes(query) || desc.includes(query)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            // If searching, show all sections so matches aren't hidden
            if (query.length > 0) {
                menuSections.forEach(sec => sec.style.display = 'block');
            }
        });
    }

    // 3. Handle URL Query Params (e.g. ?cat=marathi)
    const urlParams = new URLSearchParams(window.location.search);
    const catParam = urlParams.get('cat');
    if (catParam) {
        const matchingBtn = document.querySelector(`.menu-tab-btn[data-target="${catParam}"]`);
        if (matchingBtn) {
            matchingBtn.click();
        }
    }
});
