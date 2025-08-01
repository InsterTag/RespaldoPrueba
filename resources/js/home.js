document.addEventListener('DOMContentLoaded', function() {
    // Asignar un orden de animación a cada producto
    document.querySelectorAll('.grid.grid-cols-1 > div').forEach(function(el, index) {
        el.style.setProperty('--animation-order', index);
    });

    // Manejar el rango de precios
    var priceRange = document.querySelector('.price-range-slider');
    var minPriceInput = document.querySelector('input[placeholder="Mín"]');
    var maxPriceInput = document.querySelector('input[placeholder="Máx"]');
    
    if (priceRange && minPriceInput && maxPriceInput) {
        priceRange.addEventListener('input', function() {
            var midPoint = parseInt(this.value);
            minPriceInput.value = Math.max(0, midPoint - 250);
            maxPriceInput.value = Math.min(1000, midPoint + 250);
        });
        
        minPriceInput.addEventListener('change', function() {
            if (parseInt(this.value) > parseInt(maxPriceInput.value)) {
                this.value = parseInt(maxPriceInput.value) - 1;
            }
        });
        
        maxPriceInput.addEventListener('change', function() {
            if (parseInt(this.value) < parseInt(minPriceInput.value)) {
                this.value = parseInt(minPriceInput.value) + 1;
            }
        });
    }

    // Efecto hover en los productos
    var productCards = document.querySelectorAll('.bg-white.rounded-lg.shadow');
    productCards.forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});