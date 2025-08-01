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
    @vite(['resources/css/products.css'])

    

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
        <div class="container mx-auto px-4 py-8">
        <div class="flex gap-8">
            <!-- Sidebar de Filtros -->
            <aside class="w-80 bg-white rounded-lg shadow-lg sticky-aside filter-sidebar p-6">
                <div class="mb-6">
                    <h2 class="text-xl font-bold custom-text-primary mb-4">Filtros</h2>

                    <!-- Búsqueda -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium custom-text-secondary mb-2">Buscar productos</label>
                        <input type="text" id="searchInput" placeholder="Buscar..."
                               class="w-full px-3 py-2 border custom-border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Rango de Precio -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium custom-text-secondary mb-2">Rango de Precio</label>
                        <div class="flex gap-2">
                            <input type="number" id="minPrice" placeholder="Min"
                                   class="w-full px-3 py-2 border custom-border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="number" id="maxPrice" placeholder="Max"
                                   class="w-full px-3 py-2 border custom-border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Categorías -->
                    <div class="mb-6">
                        <h3 class="font-semibold custom-text-primary mb-3">Categorías</h3>
                        <div id="categoriesFilter">
                            <div class="category-group">
                                <button class="category-btn w-full text-left px-3 py-2 rounded-lg filter-option custom-text-primary hover:custom-primary-bg hover:text-white transition-colors"
                                        data-category="electrodomesticos">
                                    <span class="flex justify-between items-center">
                                        Electrodomésticos
                                        <svg class="w-4 h-4 transform transition-transform category-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div class="category-subcategories ml-4 mt-2 hidden">
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Samsung">
                                        <span class="text-sm custom-text-secondary">Samsung</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="LG">
                                        <span class="text-sm custom-text-secondary">LG</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Oster">
                                        <span class="text-sm custom-text-secondary">Oster</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Dyson">
                                        <span class="text-sm custom-text-secondary">Dyson</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Nespresso">
                                        <span class="text-sm custom-text-secondary">Nespresso</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="tamaño" data-value="Grande">
                                        <span class="text-sm custom-text-secondary">Grande</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="tamaño" data-value="Mediano">
                                        <span class="text-sm custom-text-secondary">Mediano</span>
                                    </label>
                                </div>
                            </div>
                            <div class="category-group mt-4">
                                <button class="category-btn w-full text-left px-3 py-2 rounded-lg filter-option custom-text-primary hover:custom-primary-bg hover:text-white transition-colors"
                                        data-category="ropa">
                                    <span class="flex justify-between items-center">
                                        Ropa y Accesorios
                                        <svg class="w-4 h-4 transform transition-transform category-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div class="category-subcategories ml-4 mt-2 hidden">
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="talla" data-value="S">
                                        <span class="text-sm custom-text-secondary">Talla S</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="talla" data-value="M">
                                        <span class="text-sm custom-text-secondary">Talla M</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="color" data-value="Azul">
                                        <span class="text-sm custom-text-secondary">Azul</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="color" data-value="Rojo">
                                        <span class="text-sm custom-text-secondary">Rojo</span>
                                    </label>
                                </div>
                            </div>
                            <div class="category-group mt-4">
                                <button class="category-btn w-full text-left px-3 py-2 rounded-lg filter-option custom-text-primary hover:custom-primary-bg hover:text-white transition-colors"
                                        data-category="tecnologia">
                                    <span class="flex justify-between items-center">
                                        Tecnología
                                        <svg class="w-4 h-4 transform transition-transform category-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div class="category-subcategories ml-4 mt-2 hidden">
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Apple">
                                        <span class="text-sm custom-text-secondary">Apple</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Sony">
                                        <span class="text-sm custom-text-secondary">Sony</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Google">
                                        <span class="text-sm custom-text-secondary">Google</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="marca" data-value="Nintendo">
                                        <span class="text-sm custom-text-secondary">Nintendo</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="almacenamiento" data-value="64GB">
                                        <span class="text-sm custom-text-secondary">64GB</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="almacenamiento" data-value="128GB">
                                        <span class="text-sm custom-text-secondary">128GB</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="almacenamiento" data-value="256GB">
                                        <span class="text-sm custom-text-secondary">256GB</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="almacenamiento" data-value="825GB">
                                        <span class="text-sm custom-text-secondary">825GB</span>
                                    </label>
                                </div>
                            </div>
                            <div class="category-group mt-4">
                                <button class="category-btn w-full text-left px-3 py-2 rounded-lg filter-option custom-text-primary hover:custom-primary-bg hover:text-white transition-colors"
                                        data-category="hogar">
                                    <span class="flex justify-between items-center">
                                        Hogar
                                        <svg class="w-4 h-4 transform transition-transform category-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div class="category-subcategories ml-4 mt-2 hidden">
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="tipo" data-value="Decoración">
                                        <span class="text-sm custom-text-secondary">Decoración</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="tipo" data-value="Muebles">
                                        <span class="text-sm custom-text-secondary">Muebles</span>
                                    </label>
                                </div>
                            </div>
                            <div class="category-group mt-4">
                                <button class="category-btn w-full text-left px-3 py-2 rounded-lg filter-option custom-text-primary hover:custom-primary-bg hover:text-white transition-colors"
                                        data-category="deportes">
                                    <span class="flex justify-between items-center">
                                        Deportes
                                        <svg class="w-4 h-4 transform transition-transform category-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </span>
                                </button>
                                <div class="category-subcategories ml-4 mt-2 hidden">
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="tipo" data-value="Fitness">
                                        <span class="text-sm custom-text-secondary">Fitness</span>
                                    </label>
                                    <label class="flex items-center py-1 filter-option">
                                        <input type="checkbox" class="mr-2 subcategory-filter" data-subcategory="tipo" data-value="Aire Libre">
                                        <span class="text-sm custom-text-secondary">Aire Libre</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="mb-6">
                        <h3 class="font-semibold custom-text-primary mb-3">Calificación</h3>
                        <div id="ratingFilter">
                            <label class="flex items-center py-1 filter-option">
                                <input type="radio" name="rating" value="5" class="mr-2">
                                <div class="flex items-center">
                                    <div class="flex star-rating">★★★★★</div>
                                    <span class="ml-2 text-sm custom-text-secondary">5 estrellas</span>
                                </div>
                            </label>
                            <label class="flex items-center py-1 filter-option">
                                <input type="radio" name="rating" value="4" class="mr-2">
                                <div class="flex items-center">
                                    <div class="flex star-rating">★★★★☆</div>
                                    <span class="ml-2 text-sm custom-text-secondary">4+ estrellas</span>
                                </div>
                            </label>
                            <label class="flex items-center py-1 filter-option">
                                <input type="radio" name="rating" value="3" class="mr-2">
                                <div class="flex items-center">
                                    <div class="flex star-rating">★★★☆☆</div>
                                    <span class="ml-2 text-sm custom-text-secondary">3+ estrellas</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Botón Limpiar Filtros -->
                    <button id="clearFilters" class="w-full custom-primary-bg text-white py-2 px-4 rounded-lg hover:custom-primary-dark-bg transition-colors">
                        Limpiar Filtros
                    </button>
                </div>
            </aside>

            <!-- Contenedor Principal de Productos -->
            <main class="flex-1">
                <!-- Header con ordenamiento -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h1 class="text-3xl font-bold custom-text-primary">Catálogo de Productos</h1>
                        <p class="custom-text-secondary mt-1">Descubre nuestra amplia selección de productos</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <select id="sortSelect" class="px-4 py-2 border custom-border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="name">Nombre A-Z</option>
                            <option value="price-low">Precio: Menor a Mayor</option>
                            <option value="price-high">Precio: Mayor a Menor</option>
                            <option value="rating">Mejor Calificados</option>
                        </select>
                    </div>
                </div>

                <!-- Grid de Productos -->
                <div id="productsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Los productos se cargarán aquí dinámicamente -->
                </div>

                <!-- Loading Indicator -->
                <div id="loadingIndicator" class="hidden text-center py-8">
                    <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 custom-primary-bg"></div>
                    <p class="mt-2 custom-text-secondary">Cargando más productos...</p>
                </div>

                <!-- No hay más productos -->
                <div id="noMoreProducts" class="hidden text-center py-8">
                    <p class="custom-text-secondary">No hay más productos para mostrar</p>
                </div>
            </main>
        </div>
    </div>

    <!-- Notificación -->
    <div id="notification" class="notification">
        Producto añadido al carrito
    </div>

    <!-- Modal del Carrito -->
    <div id="cartModal" class="modal">
        <div class="modal-content">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold custom-text-primary">Carrito</h2>
                <span class="close cursor-pointer">&times;</span>
            </div>
            <div id="cartItems">
                <!-- Los productos del carrito se mostrarán aquí -->
            </div>
            <div class="mt-4 pt-4 border-t">
                <div class="flex justify-between items-center mb-4">
                    <span class="font-bold">Total:</span>
                    <span id="cartTotal" class="font-bold">$0.00</span>
                </div>
                <button class="w-full bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition-colors">
                    Finalizar Compra
                </button>
            </div>
        </div>
    </div>

    <!-- Botón flotante del carrito -->
    <div class="floating-cart" id="floatingCart">
        <i class="fas fa-shopping-cart text-white text-2xl"></i>
        <span id="cartCount" class="cart-count" style="display: none;">0</span>
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
    @vite(['resources/js/products.js'])

</body>
</html>