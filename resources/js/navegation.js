// resources/js/navbar.js
document.addEventListener('DOMContentLoaded', function() {
    // Manejar el estado del menú móvil
    const mobileMenuButton = document.querySelector('[x-data]');
    
    // Manejar el dropdown del carrito
    const cartButton = document.querySelector('[x-on\\:click="cartOpen = !cartOpen"]');
    const cartDropdown = document.querySelector('[x-show="cartOpen"]');
    
    if (cartButton && cartDropdown) {
        cartButton.addEventListener('click', function(e) {
            e.stopPropagation();
            const isOpen = cartDropdown.style.display === 'block';
            cartDropdown.style.display = isOpen ? 'none' : 'block';
        });
        
        // Cerrar el dropdown al hacer clic fuera
        document.addEventListener('click', function() {
            cartDropdown.style.display = 'none';
        });
    }
    
    // Manejar la búsqueda en desktop
    const searchInput = document.querySelector('input[placeholder="Buscar productos, marcas y más..."]');
    const searchDropdown = document.querySelector('[x-show="searchOpen"]');
    
    if (searchInput && searchDropdown) {
        searchInput.addEventListener('focus', function() {
            searchDropdown.style.display = 'block';
        });
        
        searchInput.addEventListener('blur', function() {
            setTimeout(() => {
                searchDropdown.style.display = 'none';
            }, 200);
        });
    }
    
    // Manejar la búsqueda en móvil
    const mobileSearchInput = document.querySelector('input[placeholder="Buscar productos..."]');
    const mobileSearchDropdown = document.querySelector('[x-show="mobileSearchOpen"]');
    
    if (mobileSearchInput && mobileSearchDropdown) {
        mobileSearchInput.addEventListener('focus', function() {
            mobileSearchDropdown.style.display = 'block';
        });
        
        mobileSearchInput.addEventListener('blur', function() {
            setTimeout(() => {
                mobileSearchDropdown.style.display = 'none';
            }, 200);
        });
    }
    
    // Smooth scroll para evitar saltos bruscos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
}); 