<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPlace Pro - Conectando Empresas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/style.css'])
    @vite(['resources/css/navbar.css'])
    @vite(['resources/css/homee.css'])

    

</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="custom-bg-white shadow-lg border-b custom-border sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div class="flex items-center space-x-2 floating-animation">
                        <div class="w-8 h-8 custom-primary-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-store text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold logo-text">marketplace-pro</span>
                    </div>
                </div>
                <!-- Centro - Navegación y Búsqueda -->
                <div class="hidden md:flex items-center space-x-8 flex-1 justify-center max-w-2xl">
                    <!-- Botones de navegación -->
                    <div class="flex items-center space-x-6">
                        <button class="navbar-button custom-text-primary hover:custom-primary font-medium px-2 py-2">
                            Destacados
                        </button>
                        <button class="navbar-button custom-text-primary hover:custom-primary font-medium px-2 py-2">
                            <a href="/html/productos.html">Productos</a>
                        </button>
                        <div class="categories-container">
                            <button id="categoriesBtn" class="navbar-button custom-text-primary hover:custom-primary font-medium px-2 py-2 flex items-center space-x-1">
                                <span>Categorías</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="categoriesIcon"></i>
                            </button>

                            <!-- Dropdown de Categorías -->
                            <div id="categoriesDropdown" class="categories-dropdown custom-bg-white rounded-lg shadow-xl border custom-border">
                                <div class="p-6">
                                    <div class="grid grid-cols-4 gap-4">
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-laptop custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Electrónicos</h3>
                                                    <p class="text-sm custom-text-secondary">Computadoras, celulares</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-tshirt custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Ropa y Moda</h3>
                                                    <p class="text-sm custom-text-secondary">Moda para todos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-home custom-accent text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Hogar y Jardín</h3>
                                                    <p class="text-sm custom-text-secondary">Decoración, muebles</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-gamepad custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Gaming</h3>
                                                    <p class="text-sm custom-text-secondary">Videojuegos, consolas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-car custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Automóviles</h3>
                                                    <p class="text-sm custom-text-secondary">Carros, repuestos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-book custom-accent text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Libros</h3>
                                                    <p class="text-sm custom-text-secondary">Literatura, educación</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-dumbbell custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Deportes</h3>
                                                    <p class="text-sm custom-text-secondary">Fitness, deportes</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-baby custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Bebés y Niños</h3>
                                                    <p class="text-sm custom-text-secondary">Juguetes, ropa infantil</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-gem custom-accent text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Joyería</h3>
                                                    <p class="text-sm custom-text-secondary">Anillos, collares</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-utensils custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Cocina</h3>
                                                    <p class="text-sm custom-text-secondary">Electrodomésticos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-music custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Música</h3>
                                                    <p class="text-sm custom-text-secondary">Instrumentos, audio</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-camera custom-accent text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Fotografía</h3>
                                                    <p class="text-sm custom-text-secondary">Cámaras, lentes</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-tools custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Herramientas</h3>
                                                    <p class="text-sm custom-text-secondary">Construcción, bricolaje</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-heart custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Salud y Belleza</h3>
                                                    <p class="text-sm custom-text-secondary">Cosméticos, cuidado</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-paw custom-accent text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Mascotas</h3>
                                                    <p class="text-sm custom-text-secondary">Alimentos, accesorios</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-graduation-cap custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Educación</h3>
                                                    <p class="text-sm custom-text-secondary">Cursos, material</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-gift custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Regalos</h3>
                                                    <p class="text-sm custom-text-secondary">Ideas especiales</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-plane custom-accent text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Viajes</h3>
                                                    <p class="text-sm custom-text-secondary">Equipaje, accesorios</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-leaf custom-primary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Ecológico</h3>
                                                    <p class="text-sm custom-text-secondary">Productos sostenibles</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category-item p-3 rounded-lg border custom-border transition-all duration-300 cursor-pointer">
                                            <div class="flex items-center space-x-3">
                                                <i class="fas fa-paint-brush custom-secondary text-lg"></i>
                                                <div>
                                                    <h3 class="font-medium custom-text-primary">Arte y Crafts</h3>
                                                    <p class="text-sm custom-text-secondary">Materiales creativos</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Barra de búsqueda -->
                    <div class="flex-1 max-w-md">
                        <div class="relative">
                            <input type="text"
                                   placeholder="Buscar productos..."
                                   class="search-input w-full pl-10 pr-4 py-2 border custom-border rounded-lg focus:outline-none custom-bg-white">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search custom-text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lado derecho - Login y Carrito -->
                <div class="flex items-center space-x-4">
                    <button id="loginBtn" class="navbar-button custom-text-primary hover:custom-primary font-medium px-3 py-2 flex items-center space-x-1">
                        <i class="fas fa-user"></i>
                        <span class="hidden sm:inline">Iniciar Sesión</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-300" id="loginIcon"></i>
                    </button>

                    <button class="navbar-button relative p-2 custom-text-primary hover:custom-primary">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        <span class="cart-badge absolute -top-1 -right-1 custom-primary-bg text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">3</span>
                    </button>
                </div>
                <!-- Botón menú móvil -->
                <div class="md:hidden">
                    <button id="mobileMenuBtn" class="custom-text-primary p-2">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Menú móvil -->
        <div id="mobileMenu" class="md:hidden hidden custom-bg-white border-t custom-border">
            <div class="px-4 py-3 space-y-3">
                <div class="relative mb-3">
                    <input type="text" placeholder="Buscar productos..."
                           class="search-input w-full pl-10 pr-4 py-2 border custom-border rounded-lg focus:outline-none">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search custom-text-secondary"></i>
                    </div>
                </div>
                <a href="#" class="block py-2 custom-text-primary font-medium">Destacados</a>
                <a href="#" class="block py-2 custom-text-primary font-medium">Productos</a>
                <button class="block py-2 custom-text-primary font-medium text-left w-full">Categorías</button>
            </div>
        </div>
    </nav>
    <!-- Modal Login -->
    <div id="loginModal" class="login-modal fixed inset-0 bg-black bg-opacity-30 flex items-center justify-center z-50">
        <div class="login-modal-content custom-bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold custom-text-primary">Iniciar Sesión</h2>
                    <button id="closeLoginModal" class="custom-text-secondary hover:custom-text-primary">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
                <div class="space-y-4">
                    <button class="w-full p-4 border-2 custom-border rounded-lg hover:custom-hover-bg transition-all duration-300 group">
                        <div class="flex items-center justify-center space-x-3">
                            <i class="fas fa-user custom-primary text-lg group-hover:scale-110 transition-transform duration-300"></i>
                            <div class="text-left">
                                <h3 class="font-medium custom-text-primary">Cliente</h3>
                                <p class="text-sm custom-text-secondary">Compra productos</p>
                            </div>
                        </div>
                    </button>
                    <button class="w-full p-4 border-2 custom-border rounded-lg hover:custom-hover-bg transition-all duration-300 group">
                        <div class="flex items-center justify-center space-x-3">
                            <i class="fas fa-building custom-secondary text-lg group-hover:scale-110 transition-transform duration-300"></i>
                            <div class="text-left">
                                <h3 class="font-medium custom-text-primary">Empresa</h3>
                                <p class="text-sm custom-text-secondary">Vende productos</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <main>
        <!-- Hero Section with Feature Cards -->
        <section class="gradient-bg py-16" id="hero-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-fade-in">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-4">
                        Conecta tu <span class="text-blue-600">Empresa</span><br>
                        con el <span class="text-blue-600">Mundo</span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        La plataforma líder donde empresas publican sus productos y clientes encuentran exactamente lo que buscan.
                    </p>
                </div>
                <!-- Feature Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mt-16">
                    <!-- Card 1: Registro Empresarial -->
                    <div class="bg-white rounded-xl p-6 card-hover animate-fade-in shadow-lg">
                        <div class="bg-blue-100 w-16 h-16 rounded-xl flex items-center justify-center mb-4 floating-animation">
                            <i class="fas fa-building text-blue-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Registra tu Empresa</h3>
                        <p class="text-gray-600 text-sm mb-4">Únete a nuestra plataforma y amplía tu alcance comercial sin límites.</p>
                        <button class="text-blue-600 font-medium text-sm hover:text-blue-800 transition-colors">
                            Comenzar ahora →
                        </button>
                    </div>
                    <!-- Card 2: Gestión de Productos -->
                    <div class="bg-white rounded-xl p-6 card-hover animate-fade-in shadow-lg">
                        <div class="bg-green-100 w-16 h-16 rounded-xl flex items-center justify-center mb-4 floating-animation">
                            <i class="fas fa-boxes text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Gestiona Productos</h3>
                        <p class="text-gray-600 text-sm mb-4">Sube, edita y organiza tu catálogo de forma rápida y sencilla.</p>
                        <button class="text-green-600 font-medium text-sm hover:text-green-800 transition-colors">
                            Explorar funciones →
                        </button>
                    </div>
                    <!-- Card 3: Pagos Seguros -->
                    <div class="bg-white rounded-xl p-6 card-hover animate-fade-in shadow-lg">
                        <div class="bg-yellow-100 w-16 h-16 rounded-xl flex items-center justify-center mb-4 floating-animation">
                            <i class="fas fa-credit-card text-yellow-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pagos Seguros</h3>
                        <p class="text-gray-600 text-sm mb-4">Procesa pagos de forma segura con múltiples métodos disponibles.</p>
                        <button class="text-yellow-600 font-medium text-sm hover:text-yellow-800 transition-colors">
                            Ver métodos →
                        </button>
                    </div>
                    <!-- Card 4: Analytics -->
                    <div class="bg-white rounded-xl p-6 card-hover animate-fade-in shadow-lg">
                        <div class="bg-purple-100 w-16 h-16 rounded-xl flex items-center justify-center mb-4 floating-animation">
                            <i class="fas fa-chart-line text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Analytics Avanzado</h3>
                        <p class="text-gray-600 text-sm mb-4">Obtén insights detallados sobre tus ventas y rendimiento.</p>
                        <button class="text-purple-600 font-medium text-sm hover:text-purple-800 transition-colors">
                            Ver estadísticas →
                        </button>
                    </div>
                    <!-- Card 5: Soporte 24/7 -->
                    <div class="bg-white rounded-xl p-6 card-hover animate-fade-in shadow-lg">
                        <div class="bg-red-100 w-16 h-16 rounded-xl flex items-center justify-center mb-4 floating-animation">
                            <i class="fas fa-headset text-red-600 text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Soporte 24/7</h3>
                        <p class="text-gray-600 text-sm mb-4">Nuestro equipo está disponible para ayudarte en todo momento.</p>
                        <button class="text-red-600 font-medium text-sm hover:text-red-800 transition-colors">
                            Contactar soporte →
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Best Sellers Section -->
        <section class="py-16 bg-white section-separator" id="bestsellers-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-8 animate-fade-in">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Productos Más Vendidos</h2>
                        <p class="text-gray-600 mt-2">Los favoritos de esta semana</p>
                    </div>
                    <button class="primary-btn text-white px-6 py-2 rounded-lg font-medium">
                        Ver todos
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Product Card -->
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden card-hover animate-fade-in">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" alt="Producto" class="w-full h-48 object-cover">
                            <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded-md text-xs font-medium">-20%</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Auriculares Premium</h3>
                            <p class="text-gray-600 text-sm mb-2">TechCorp S.A.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg font-bold text-blue-600">$79.99</span>
                                    <span class="text-sm text-gray-500 line-through">$99.99</span>
                                </div>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-600 text-sm ml-1">4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More product cards (similar structure) -->
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden card-hover animate-fade-in">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=300&h=200&fit=crop" alt="Producto" class="w-full h-48 object-cover">
                            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded-md text-xs font-medium pulse-animation">NUEVO</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Reloj Inteligente</h3>
                            <p class="text-gray-600 text-sm mb-2">SmartWatch Co.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-blue-600">$199.99</span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-600 text-sm ml-1">4.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden card-hover animate-fade-in">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=300&h=200&fit=crop" alt="Producto" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Gafas de Sol</h3>
                            <p class="text-gray-600 text-sm mb-2">Fashion Style</p>
                            <div class="flex items-center justify-between">
                                <span class="text-lg font-bold text-blue-600">$45.99</span>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-600 text-sm ml-1">4.7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden card-hover animate-fade-in">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=300&h=200&fit=crop" alt="Producto" class="w-full h-48 object-cover">
                            <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded-md text-xs font-medium">-35%</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-2">Zapatillas Deportivas</h3>
                            <p class="text-gray-600 text-sm mb-2">SportMax</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg font-bold text-blue-600">$89.99</span>
                                    <span class="text-sm text-gray-500 line-through">$139.99</span>
                                </div>
                                <div class="flex items-center text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <span class="text-gray-600 text-sm ml-1">4.6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Big Discounts Section -->
        <section class="py-16 gradient-bg section-separator" id="discounts-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-fade-in">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">🔥 Ofertas Especiales</h2>
                    <p class="text-gray-600">Descuentos increíbles por tiempo limitado</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Large Discount Banner -->
                    <div class="lg:col-span-2 bg-gradient-to-r from-red-500 to-pink-600 rounded-2xl p-8 text-white card-hover animate-fade-in">
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-6xl font-bold">50%</span>
                                <p class="text-xl mt-2">Descuento en Electrónicos</p>
                                <p class="opacity-90 mt-2">Solo por este fin de semana</p>
                                <button class="bg-white text-red-600 px-6 py-3 rounded-lg font-medium mt-4 hover:bg-gray-100 transition-colors">
                                    Comprar ahora
                                </button>
                            </div>
                            <i class="fas fa-bolt text-8xl opacity-20"></i>
                        </div>
                    </div>
                    <!-- Side Offers -->
                    <div class="space-y-4">
                        <div class="bg-blue-600 text-white p-6 rounded-xl card-hover animate-fade-in">
                            <h3 class="text-xl font-bold">Envío Gratis</h3>
                            <p class="text-blue-100 mt-1">En compras superiores a $50</p>
                            <button class="text-white underline mt-2">Ver detalles</button>
                        </div>
                        <div class="bg-green-600 text-white p-6 rounded-xl card-hover animate-fade-in">
                            <h3 class="text-xl font-bold">Cashback 10%</h3>
                            <p class="text-green-100 mt-1">En tu primera compra</p>
                            <button class="text-white underline mt-2">Activar oferta</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Info Cards Section -->
        <section class="py-16 bg-white section-separator" id="info-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Payment Security -->
                    <div class="text-center animate-fade-in">
                        <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-blue-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Pagos Seguros</h3>
                        <p class="text-gray-600">Con Mercado Pago, paga en cuotas y aprovecha la comodidad de financiación que te da tu banco, o hazlo con efectivo en puntos de pago. ¡Y siempre es seguro!</p>
                        <button class="text-blue-600 font-medium mt-3 hover:text-blue-800 transition-colors">
                            Cómo pagar con MarketPlace Pro
                        </button>
                    </div>
                    <!-- Free Shipping -->
                    <div class="text-center animate-fade-in">
                        <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-truck text-green-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Envío gratis desde $60.000</h3>
                        <p class="text-gray-600">Con solo estar registrado en MarketPlace Pro, tienes envíos gratis en miles de productos seleccionados.</p>
                        <button class="text-green-600 font-medium mt-3 hover:text-green-800 transition-colors">
                            Conocer beneficios de envío
                        </button>
                    </div>
                    <!-- Security First -->
                    <div class="text-center animate-fade-in">
                        <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-shield text-purple-600 text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Seguridad, de principio a fin</h3>
                        <p class="text-gray-600">¿No te gusta? ¡Devuélvelo! En MarketPlace Pro, no hay nada que no puedas hacer, porque estás siempre protegido.</p>
                        <button class="text-purple-600 font-medium mt-3 hover:text-purple-800 transition-colors">
                            Cómo te protegemos
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            <i class="fas fa-store text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">MarketPlace<span class="text-blue-400">Pro</span></span>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Conectamos empresas con clientes de todo el mundo. La plataforma de comercio electrónico más confiable para hacer crecer tu negocio.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
                <!-- Navigation -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navegación</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Productos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Categorías</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Destacados</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Ofertas</a></li>
                    </ul>
                </div>
                <!-- Support -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Soporte</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Centro de Ayuda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contacto</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Términos y Condiciones</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Política de Privacidad</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Devoluciones</a></li>
                    </ul>
                </div>
            </div>
            <!-- Payment Methods & Info -->
            <div class="border-t border-gray-800 pt-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                    <!-- Payment Methods -->
                    <div>
                        <h4 class="text-sm font-semibold mb-3 text-gray-300">Métodos de Pago</h4>
                        <div class="flex flex-wrap gap-2">
                            <div class="bg-gray-800 p-2 rounded flex items-center justify-center w-12 h-8">
                                <i class="fab fa-cc-visa text-blue-400"></i>
                            </div>
                            <div class="bg-gray-800 p-2 rounded flex items-center justify-center w-12 h-8">
                                <i class="fab fa-cc-mastercard text-red-400"></i>
                            </div>
                            <div class="bg-gray-800 p-2 rounded flex items-center justify-center w-12 h-8">
                                <i class="fab fa-cc-paypal text-blue-400"></i>
                            </div>
                            <div class="bg-gray-800 p-2 rounded flex items-center justify-center w-12 h-8">
                                <i class="fas fa-credit-card text-green-400"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Security -->
                    <div>
                        <h4 class="text-sm font-semibold mb-3 text-gray-300">Seguridad</h4>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center space-x-2 text-green-400">
                                <i class="fas fa-shield-alt"></i>
                                <span class="text-sm">SSL Certificado</span>
                            </div>
                            <div class="flex items-center space-x-2 text-blue-400">
                                <i class="fas fa-lock"></i>
                                <span class="text-sm">Datos Protegidos</span>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div>
                        <h4 class="text-sm font-semibold mb-3 text-gray-300">Contacto</h4>
                        <div class="space-y-1 text-sm text-gray-400">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-phone"></i>
                                <span>+57 (2) 123-4567</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-envelope"></i>
                                <span>soporte@marketplacepro.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-6 mt-8 text-center">
                <p class="text-gray-400 text-sm">
                    © 2025 MarketPlace Pro. Todos los derechos reservados. |
                    <a href="#" class="hover:text-white transition-colors">Términos de Uso</a> |
                    <a href="#" class="hover:text-white transition-colors">Política de Privacidad</a>
                </p>
            </div>
        </div>
    </footer>
    @vite(['resources/js/navbar.js'])
    @vite(['resources/js/homee.js'])
</body>
</html>
