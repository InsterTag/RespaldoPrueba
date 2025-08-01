// resources/js/profile.js
class ProfileManager {
    constructor() {
        this.currentTab = 'orders';
        this.init();
    }

    init() {
        this.bindEvents();
        this.setupAnimations();
        this.setupFormHandlers();
        this.setupScrollEffects();
        this.setupCounterAnimations();
        
        // Activar el primer tab cuando esté listo el DOM
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => {
                this.showTab('orders');
            });
        } else {
            this.showTab('orders');
        }
    }

    // Función para mostrar tabs
    showTab(tabName) {
        // Ocultar todos los paneles
        document.querySelectorAll('.tab-panel').forEach(panel => {
            panel.classList.add('hidden');
            panel.classList.remove('fade-in');
        });

        // Quitar clase activa de todos los botones
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('tab-active');
            button.classList.add('tab-inactive');
        });

        // Mostrar el panel seleccionado con animación
        const selectedPanel = document.getElementById(`content-${tabName}`);
        const selectedButton = document.getElementById(`tab-${tabName}`);

        if (selectedPanel && selectedButton) {
            selectedPanel.classList.remove('hidden');
            selectedPanel.classList.add('fade-in');
            selectedButton.classList.remove('tab-inactive');
            selectedButton.classList.add('tab-active');
            this.currentTab = tabName;
        }
    }

    // Funciones para el modal de direcciones
    openAddressModal() {
        const modal = document.getElementById('addressModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    closeAddressModal() {
        const modal = document.getElementById('addressModal');
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    }

    // Configurar todos los event listeners
    bindEvents() {
        // Event listeners para los tabs
        document.addEventListener('click', (e) => {
            if (e.target.closest('[onclick*="showTab"]')) {
                e.preventDefault();
                const tabName = e.target.closest('[onclick*="showTab"]').getAttribute('onclick').match(/showTab\('(.+?)'\)/)[1];
                this.showTab(tabName);
            }
        });

        // Event listeners para el modal de direcciones
        document.addEventListener('click', (e) => {
            if (e.target.closest('[onclick*="openAddressModal"]')) {
                e.preventDefault();
                this.openAddressModal();
            }
            
            if (e.target.closest('[onclick*="closeAddressModal"]')) {
                e.preventDefault();
                this.closeAddressModal();
            }
        });

        // Cerrar modal al hacer clic fuera
        document.addEventListener('click', (e) => {
            const modal = document.getElementById('addressModal');
            if (modal && e.target === modal) {
                this.closeAddressModal();
            }
        });

        // Event listener para la tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeAddressModal();
            }
        });
    }

    // Configurar animaciones
    setupAnimations() {
        const setupAnimation = () => {
            // Animar elementos con retraso
            const animatedElements = document.querySelectorAll('.slide-in, .fade-in, .bounce-in');
            animatedElements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });

            // Agregar efectos hover a las tarjetas
            const cards = document.querySelectorAll('.card-hover');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupAnimation);
        } else {
            setupAnimation();
        }
    }

    // Configurar manejo de formularios
    setupFormHandlers() {
        const setupHandlers = () => {
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    
                    // Simular loading
                    const submitButton = form.querySelector('button[type="submit"]');
                    if (!submitButton) return;
                    
                    const originalText = submitButton.textContent;
                    submitButton.textContent = 'Guardando...';
                    submitButton.disabled = true;
                    
                    setTimeout(() => {
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                        
                        // Mostrar mensaje de éxito
                        this.showSuccessMessage('¡Información actualizada correctamente!');
                    }, 1500);
                });
            });
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupHandlers);
        } else {
            setupHandlers();
        }
    }

    // Mostrar mensaje de éxito
    showSuccessMessage(message) {
        const successMessage = document.createElement('div');
        successMessage.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 transition-all duration-300 transform translate-x-full';
        successMessage.textContent = message;
        document.body.appendChild(successMessage);
        
        // Animar entrada
        setTimeout(() => {
            successMessage.classList.remove('translate-x-full');
        }, 100);
        
        // Animar salida y remover
        setTimeout(() => {
            successMessage.classList.add('translate-x-full');
            setTimeout(() => {
                if (successMessage.parentNode) {
                    successMessage.parentNode.removeChild(successMessage);
                }
            }, 300);
        }, 3000);
    }

    // Configurar efectos de scroll
    setupScrollEffects() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Función para animar contadores
    animateCounter(element, start, end, duration) {
        let startTime = null;
        
        const animation = (currentTime) => {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);
            
            const value = Math.floor(progress * (end - start) + start);
            element.textContent = value;
            
            if (progress < 1) {
                requestAnimationFrame(animation);
            }
        };
        
        requestAnimationFrame(animation);
    }

    // Configurar animaciones de contador
    setupCounterAnimations() {
        const setupCounters = () => {
            // Animar contadores cuando están visibles
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const endValue = parseInt(counter.textContent);
                        if (!isNaN(endValue)) {
                            this.animateCounter(counter, 0, endValue, 2000);
                            observer.unobserve(counter);
                        }
                    }
                });
            });

            // Observar elementos de contador
            document.querySelectorAll('.text-3xl.font-bold').forEach(counter => {
                if (!isNaN(parseInt(counter.textContent))) {
                    observer.observe(counter);
                }
            });
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupCounters);
        } else {
            setupCounters();
        }
    }

    // Método público para cambiar tabs (para usar desde HTML)
    changeTab(tabName) {
        this.showTab(tabName);
    }

    // Método público para abrir modal (para usar desde HTML)
    openModal() {
        this.openAddressModal();
    }

    // Método público para cerrar modal (para usar desde HTML)
    closeModal() {
        this.closeAddressModal();
    }
}

// Crear instancia global para acceso desde HTML
let profileManager;

// Inicializar cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        profileManager = new ProfileManager();
        // Hacer las funciones accesibles globalmente para compatibilidad con onclick
        window.showTab = (tabName) => profileManager.changeTab(tabName);
        window.openAddressModal = () => profileManager.openModal();
        window.closeAddressModal = () => profileManager.closeModal();
    });
} else {
    profileManager = new ProfileManager();
    // Hacer las funciones accesibles globalmente para compatibilidad con onclick
    window.showTab = (tabName) => profileManager.changeTab(tabName);
    window.openAddressModal = () => profileManager.openModal();
    window.closeAddressModal = () => profileManager.closeModal();
}

// Exportar para uso como módulo ES6 si es necesario
if (typeof module !== 'undefined' && module.exports) {
    module.exports = ProfileManager;
}