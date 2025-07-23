// resources/js/shared.js
export function setupNavbar() {
    // Desktop dropdowns
    const dropdownBtns = document.querySelectorAll('.dropdown-btn');
    
    dropdownBtns.forEach(btn => {
        // Remove any existing listeners to prevent duplicates
        btn.replaceWith(btn.cloneNode(true));
    });

    // Re-query after clone
    document.querySelectorAll('.dropdown-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = this.closest('.dropdown');
            const menu = dropdown.querySelector('.dropdown-menu');
            
            // Close all other dropdowns first
            document.querySelectorAll('.dropdown-menu').forEach(m => {
                if (m !== menu) m.classList.add('hidden');
            });
            
            // Toggle current dropdown
            menu.classList.toggle('hidden');
        });
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    });
    
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuButton && mobileMenu) {
        // Clone to remove existing listeners
        mobileMenuButton.replaceWith(mobileMenuButton.cloneNode(true));
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Language change function
    window.changeLang = function(lang) {
        document.getElementById('currentLang').textContent = lang;
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');
        });
    };
    
    // Mobile dropdown toggle
    window.toggleProductsMenu = function() {
        const menu = document.getElementById('mobileProductsMenu');
        if (menu) {
            menu.classList.toggle('hidden');
        }
    };
}

// Run once on initial load
document.addEventListener('DOMContentLoaded', setupNavbar);

// Export for manual calling
export default setupNavbar;