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
    @vite(['resources/css/profile.css'])

    

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
        <div class="container mx-auto px-4 py-8 max-w-7xl">
        <!-- Header del Perfil -->
        <div class="custom-bg-white rounded-2xl shadow-lg p-6 mb-8 card-hover slide-in">
            <div class="flex flex-col lg:flex-row items-center lg:items-start space-y-4 lg:space-y-0 lg:space-x-6">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" 
                         alt="Avatar" class="w-24 h-24 rounded-full object-cover ring-4 ring-blue-100">
                    <button class="absolute -bottom-1 -right-1 custom-primary-bg text-white rounded-full p-2 hover:bg-blue-600 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 text-center lg:text-left">
                    <h1 class="text-3xl font-bold custom-text-primary mb-2">Juan Carlos Pérez</h1>
                    <p class="custom-text-secondary mb-4">Cliente Premium desde 2023</p>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4">
                        <div class="flex items-center justify-center lg:justify-start space-x-2">
                            <svg class="w-5 h-5 custom-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span class="custom-text-secondary">juan.perez@email.com</span>
                        </div>
                        <div class="flex items-center justify-center lg:justify-start space-x-2">
                            <svg class="w-5 h-5 custom-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <span class="custom-text-secondary">+57 300 123 4567</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <div class="custom-primary-bg text-white px-4 py-2 rounded-lg text-center">
                        <div class="text-lg font-bold">156</div>
                        <div class="text-xs opacity-90">Pedidos</div>
                    </div>
                    <div class="custom-bg-light px-4 py-2 rounded-lg text-center">
                        <div class="text-lg font-bold custom-secondary">$2,450</div>
                        <div class="text-xs custom-text-secondary">Ahorrado</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navegación por Tabs -->
        <div class="mb-8">
            <div class="flex flex-wrap border-b custom-border">
                <button onclick="showTab('orders')" id="tab-orders" class="tab-button px-6 py-3 font-medium rounded-t-lg transition-all duration-300 tab-active">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span>Mis Pedidos</span>
                    </span>
                </button>
                <button onclick="showTab('profile')" id="tab-profile" class="tab-button px-6 py-3 font-medium rounded-t-lg transition-all duration-300 tab-inactive">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Datos Personales</span>
                    </span>
                </button>
                <button onclick="showTab('addresses')" id="tab-addresses" class="tab-button px-6 py-3 font-medium rounded-t-lg transition-all duration-300 tab-inactive">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Direcciones</span>
                    </span>
                </button>
                <button onclick="showTab('settings')" id="tab-settings" class="tab-button px-6 py-3 font-medium rounded-t-lg transition-all duration-300 tab-inactive">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Configuración</span>
                    </span>
                </button>
            </div>
        </div>

        <!-- Contenido de los Tabs -->
        <div class="tab-content">
            <!-- Tab: Mis Pedidos -->
            <div id="content-orders" class="tab-panel fade-in">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Estadísticas de Pedidos -->
                    <div class="custom-bg-white rounded-xl p-6 shadow-lg card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="custom-text-secondary text-sm">Total Pedidos</p>
                                <p class="text-3xl font-bold custom-text-primary">156</p>
                            </div>
                            <div class="custom-primary-bg p-3 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="progress-bar" style="width: 85%"></div>
                            <p class="text-xs custom-text-secondary mt-2">+12% este mes</p>
                        </div>
                    </div>

                    <div class="custom-bg-white rounded-xl p-6 shadow-lg card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="custom-text-secondary text-sm">En Proceso</p>
                                <p class="text-3xl font-bold custom-secondary">3</p>
                            </div>
                            <div class="bg-amber-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="bg-amber-200 h-1.5 rounded-full">
                                <div class="bg-amber-500 h-1.5 rounded-full" style="width: 60%"></div>
                            </div>
                            <p class="text-xs custom-text-secondary mt-2">Promedio 3-5 días</p>
                        </div>
                    </div>

                    <div class="custom-bg-white rounded-xl p-6 shadow-lg card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="custom-text-secondary text-sm">Entregados</p>
                                <p class="text-3xl font-bold custom-accent">153</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="bg-green-200 h-1.5 rounded-full">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 98%"></div>
                            </div>
                            <p class="text-xs custom-text-secondary mt-2">98% satisfacción</p>
                        </div>
                    </div>
                </div>

                <!-- Lista de Pedidos -->
                <div class="custom-bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="p-6 border-b custom-border">
                        <h3 class="text-xl font-semibold custom-text-primary">Pedidos Recientes</h3>
                    </div>
                    <div class="divide-y custom-border">
                        <!-- Pedido 1 -->
                        <div class="p-6 hover:bg-gray-50 transition-colors">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=80&h=80&fit=crop" 
                                         alt="Producto" class="w-16 h-16 rounded-lg object-cover">
                                    <div>
                                        <h4 class="font-semibold custom-text-primary">Zapatillas Nike Air Max</h4>
                                        <p class="custom-text-secondary text-sm">Pedido #ORD-2024-001</p>
                                        <p class="custom-text-secondary text-sm">Realizado el 28 Jul, 2025</p>
                                    </div>
                                </div>
                                <div class="flex flex-col lg:items-end space-y-2">
                                    <span class="status-badge status-delivered">Entregado</span>
                                    <p class="font-semibold custom-text-primary">$299.900</p>
                                    <button class="text-sm custom-primary hover:underline">Ver detalles</button>
                                </div>
                            </div>
                        </div>

                        <!-- Pedido 2 -->
                        <div class="p-6 hover:bg-gray-50 transition-colors">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=80&h=80&fit=crop" 
                                         alt="Producto" class="w-16 h-16 rounded-lg object-cover">
                                    <div>
                                        <h4 class="font-semibold custom-text-primary">Reloj Smartwatch</h4>
                                        <p class="custom-text-secondary text-sm">Pedido #ORD-2024-002</p>
                                        <p class="custom-text-secondary text-sm">Realizado el 30 Jul, 2025</p>
                                    </div>
                                </div>
                                <div class="flex flex-col lg:items-end space-y-2">
                                    <span class="status-badge status-processing">En Proceso</span>
                                    <p class="font-semibold custom-text-primary">$599.900</p>
                                    <button class="text-sm custom-primary hover:underline">Rastrear pedido</button>
                                </div>
                            </div>
                        </div>

                        <!-- Pedido 3 -->
                        <div class="p-6 hover:bg-gray-50 transition-colors">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                                <div class="flex items-start space-x-4">
                                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=80&h=80&fit=crop" 
                                         alt="Producto" class="w-16 h-16 rounded-lg object-cover">
                                    <div>
                                        <h4 class="font-semibold custom-text-primary">Auriculares Bluetooth</h4>
                                        <p class="custom-text-secondary text-sm">Pedido #ORD-2024-003</p>
                                        <p class="custom-text-secondary text-sm">Realizado el 25 Jul, 2025</p>
                                    </div>
                                </div>
                                <div class="flex flex-col lg:items-end space-y-2">
                                    <span class="status-badge status-delivered">Entregado</span>
                                    <p class="font-semibold custom-text-primary">$199.900</p>
                                    <button class="text-sm custom-primary hover:underline">Calificar producto</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Datos Personales -->
            <div id="content-profile" class="tab-panel hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="custom-bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold custom-text-primary mb-6">Información Personal</h3>
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium custom-text-primary mb-2">Nombre</label>
                                    <input type="text" value="Juan Carlos" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium custom-text-primary mb-2">Apellido</label>
                                    <input type="text" value="Pérez" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium custom-text-primary mb-2">Email</label>
                                <input type="email" value="juan.perez@email.com" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium custom-text-primary mb-2">Teléfono</label>
                                <input type="tel" value="+57 300 123 4567" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium custom-text-primary mb-2">Fecha de Nacimiento</label>
                                <input type="date" value="1990-05-15" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <button type="submit" class="w-full custom-primary-bg text-white py-3 rounded-lg hover:bg-blue-600 transition-colors font-medium">
                                Actualizar Información
                            </button>
                        </form>
                    </div>

                    <div class="custom-bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold custom-text-primary mb-6">Cambiar Contraseña</h3>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium custom-text-primary mb-2">Contraseña Actual</label>
                                <input type="password" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium custom-text-primary mb-2">Nueva Contraseña</label>
                                <input type="password" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium custom-text-primary mb-2">Confirmar Nueva Contraseña</label>
                                <input type="password" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <button type="submit" class="w-full custom-primary-bg text-white py-3 rounded-lg hover:bg-blue-600 transition-colors font-medium">
                                Cambiar Contraseña
                            </button>
                        </form>

                        <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-semibold custom-text-primary mb-2">Verificación de Dos Factores</h4>
                            <p class="text-sm custom-text-secondary mb-3">Añade una capa extra de seguridad a tu cuenta</p>
                            <button class="custom-primary-bg text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-600 transition-colors">
                                Activar 2FA
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Direcciones -->
            <div id="content-addresses" class="tab-panel hidden">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold custom-text-primary">Mis Direcciones</h3>
                    <button onclick="openAddressModal()" class="custom-primary-bg text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Agregar Dirección</span>
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Dirección Principal -->
                    <div class="custom-bg-white rounded-xl shadow-lg p-6 card-hover relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">Principal</span>
                        </div>
                        <div class="mb-4">
                            <h4 class="font-semibold custom-text-primary mb-2">Casa</h4>
                            <p class="custom-text-secondary text-sm">Calle 123 #45-67</p>
                            <p class="custom-text-secondary text-sm">Barrio Centro</p>
                            <p class="custom-text-secondary text-sm">Popayán, Cauca</p>
                            <p class="custom-text-secondary text-sm">Colombia - 190003</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="custom-primary text-sm hover:underline">Editar</button>
                            <button class="text-red-500 text-sm hover:underline">Eliminar</button>
                        </div>
                    </div>

                    <!-- Dirección Trabajo -->
                    <div class="custom-bg-white rounded-xl shadow-lg p-6 card-hover">
                        <div class="mb-4">
                            <h4 class="font-semibold custom-text-primary mb-2">Trabajo</h4>
                            <p class="custom-text-secondary text-sm">Carrera 98 #76-54</p>
                            <p class="custom-text-secondary text-sm">Zona Industrial</p>
                            <p class="custom-text-secondary text-sm">Popayán, Cauca</p>
                            <p class="custom-text-secondary text-sm">Colombia - 190001</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="custom-primary text-sm hover:underline">Editar</button>
                            <button class="text-red-500 text-sm hover:underline">Eliminar</button>
                            <button class="custom-text-secondary text-sm hover:underline">Marcar como principal</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab: Configuración -->
            <div id="content-settings" class="tab-panel hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="custom-bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold custom-text-primary mb-6">Preferencias de Notificaciones</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium custom-text-primary">Ofertas y Promociones</h4>
                                    <p class="text-sm custom-text-secondary">Recibe notificaciones sobre descuentos</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium custom-text-primary">Estado de Pedidos</h4>
                                    <p class="text-sm custom-text-secondary">Actualizaciones sobre tus compras</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium custom-text-primary">Nuevos Productos</h4>
                                    <p class="text-sm custom-text-secondary">Novedades y lanzamientos</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium custom-text-primary">Newsletter</h4>
                                    <p class="text-sm custom-text-secondary">Contenido semanal por email</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="custom-bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-xl font-semibold custom-text-primary mb-6">Privacidad</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium custom-text-primary">Perfil Público</h4>
                                    <p class="text-sm custom-text-secondary">Otros usuarios pueden ver tu perfil</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="font-medium custom-text-primary">Análisis de Datos</h4>
                                    <p class="text-sm custom-text-secondary">Ayúdanos a mejorar con tus datos</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>

                        <div class="mt-8 p-4 bg-red-50 rounded-lg">
                            <h4 class="font-semibold text-red-800 mb-2">Zona de Peligro</h4>
                            <p class="text-sm text-red-600 mb-3">Estas acciones no se pueden deshacer</p>
                            <div class="space-y-2">
                                <button class="w-full bg-red-100 text-red-800 px-4 py-2 rounded-lg text-sm hover:bg-red-200 transition-colors">
                                    Descargar mis datos
                                </button>
                                <button class="w-full bg-red-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-red-700 transition-colors">
                                    Eliminar cuenta
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Agregar Dirección -->
    <div id="addressModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="custom-bg-white rounded-xl shadow-2xl p-6 w-full max-w-md mx-4 glass-effect bounce-in">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold custom-text-primary">Agregar Nueva Dirección</h3>
                <button onclick="closeAddressModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium custom-text-primary mb-2">Nombre de la dirección</label>
                    <input type="text" placeholder="Ej: Casa, Trabajo, Casa de mamá" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium custom-text-primary mb-2">Dirección completa</label>
                    <input type="text" placeholder="Calle, número, detalles" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium custom-text-primary mb-2">Ciudad</label>
                        <input type="text" placeholder="Ciudad" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium custom-text-primary mb-2">Código Postal</label>
                        <input type="text" placeholder="Código" class="w-full px-4 py-2 border custom-border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="defaultAddress" class="w-4 h-4 custom-primary-bg border-gray-300 rounded focus:ring-blue-500">
                    <label for="defaultAddress" class="ml-2 text-sm custom-text-primary">Marcar como dirección principal</label>
                </div>
                <div class="flex space-x-3 pt-4">
                    <button type="button" onclick="closeAddressModal()" class="flex-1 px-4 py-2 border custom-border rounded-lg custom-text-secondary hover:bg-gray-50 transition-colors">
                        Cancelar
                    </button>
                    <button type="submit" class="flex-1 custom-primary-bg text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
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
    @vite(['resources/js/profile.js'])
</body>
</html>