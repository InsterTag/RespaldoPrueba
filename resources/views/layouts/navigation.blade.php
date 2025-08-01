@vite ('resources/css/navegation.css')
<nav x-data="{ open: false, searchOpen: false, mobileSearchOpen: false, cartOpen: false }" class="bg-white shadow-md sticky top-0 z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Primary Navigation Menu -->
        <div class="flex justify-between items-center h-16">
            <!-- Logo and Categories -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600 flex items-center transition-transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4z" clip-rule="evenodd" />
                        </svg>
                        <span class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">MultiCompany</span>
                    </a>
                </div>

                <!-- Navigation Links - Desktop -->
                <div class="hidden lg:flex items-center space-x-1">
                    <!-- Categories Dropdown -->
                    <x-dropdown align="left" width="64">
                        <x-slot name="trigger">
                            <button class="flex items-center px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition-colors duration-200 group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span>Categorías</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-gray-400 group-hover:text-blue-600 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="py-1">
                                <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="font-medium">Electrónica</span>
                                </x-dropdown-link>
                                <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="font-medium">Ropa y Accesorios</span>
                                </x-dropdown-link>
                                <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <span class="font-medium">Hogar y Jardín</span>
                                </x-dropdown-link>
                                <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="font-medium">Juguetes y Juegos</span>
                                </x-dropdown-link>
                                <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <span class="font-medium">Supermercado</span>
                                </x-dropdown-link>
                            </div>
                            <div class="border-t border-gray-100"></div>
                            <x-dropdown-link href="#" class="flex items-center justify-center px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-b-md transition-colors">
                                <span class="font-medium">Ver todas las categorías</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>

                    <x-nav-link href="#" class="group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-500 group-hover:text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                        Ofertas
                    </x-nav-link>
                    <x-nav-link href="#" class="group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500 group-hover:text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Marcas
                    </x-nav-link>
                </div>
            </div>

            <!-- Search Bar - Desktop -->
            <div class="hidden md:flex flex-1 mx-8 max-w-2xl relative">
    <div class="relative w-full">
        <input 
            type="text" 
            placeholder="Buscar productos, marcas y más..." 
            class="w-full px-5 py-3 pl-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 shadow-sm hover:shadow-md text-gray-700 placeholder-gray-400"
            autocomplete="off"
            @focus="searchOpen = true"
            @blur="setTimeout(() => searchOpen = false, 200)"
        >
        <!-- Ícono de búsqueda mejorado -->
        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <!-- Botón de búsqueda mejorado -->
        <button class="absolute right-0 top-0 h-full px-6 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 rounded-r-full text-white font-medium transition-all duration-300 shadow-md flex items-center justify-center">
            <span class="hidden sm:inline">Buscar</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <!-- Sugerencias de búsqueda mejoradas -->
        <div x-show="searchOpen" x-transition:enter="transition ease-out duration-200" 
            x-transition:enter-start="opacity-0 translate-y-1" 
            x-transition:enter-end="opacity-100 translate-y-0" 
            x-transition:leave="transition ease-in duration-150" 
            x-transition:leave-start="opacity-100 translate-y-0" 
            x-transition:leave-end="opacity-0 translate-y-1"
            class="absolute left-0 right-0 mt-2 bg-white rounded-xl shadow-xl z-50 border border-gray-200 max-h-96 overflow-y-auto py-2">
            <div class="px-4 py-3 text-sm font-medium text-gray-700 border-b bg-gray-50">Búsquedas populares</div>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors border-b border-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
                <span class="text-gray-700">Smartphone X Pro</span>
                <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Electrónica</span>
            </a>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors border-b border-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
                <span class="text-gray-700">Auriculares inalámbricos</span>
                <span class="ml-auto text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">Audio</span>
            </a>
            <div class="px-4 py-3 text-sm font-medium text-gray-700 border-t border-b bg-gray-50">Categorías sugeridas</div>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-gray-700">Electrónica</span>
                <span class="ml-auto text-xs text-gray-500">256 productos</span>
            </a>
        </div>
    </div>
</div>

            <!-- User and Cart -->
            <div class="flex items-center space-x-5">
                <!-- User Dropdown -->
                <div class="hidden sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 rounded-lg hover:bg-blue-50 transition-colors duration-200 group">
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <span class="ml-2 hidden lg:inline font-medium">{{ Auth::user()->username ?? Auth::user()->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-3 border-b">
                                <p class="text-sm font-medium">Bienvenido, {{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
                            </div>
                            
                            <x-dropdown-link href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>Mi perfil</span>
                            </x-dropdown-link>
                            <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <span>Lista de deseos</span>
                            </x-dropdown-link>
                            <x-dropdown-link href="#" class="flex items-center px-4 py-2 hover:bg-blue-50 rounded-md transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                <span>Historial</span>
                            </x-dropdown-link>
                            
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="flex items-center px-4 py-2 border-t mt-1 hover:bg-blue-50 rounded-b-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span>Cerrar sesión</span>
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                
                <!-- Orders -->
                <a href="#" class="hidden md:flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 rounded-lg hover:bg-blue-50 transition-colors duration-200 group">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <span class="ml-2 hidden lg:inline font-medium">Mis pedidos</span>
                </a>
                
                <!-- Cart Dropdown -->
                <div class="relative">
                    <x-dropdown align="right" width="96">
                        <x-slot name="trigger">
                            <button @click="cartOpen = !cartOpen" class="flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 rounded-lg hover:bg-blue-50 transition-colors duration-200 group relative">
                                <div class="relative transform transition-transform duration-300 group-hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full transform group-hover:scale-125 transition-transform shadow-sm">
                                        3
                                    </span>
                                </div>
                                <span class="ml-2 hidden lg:inline-block font-medium transition-colors duration-300 group-hover:text-blue-600">
                                    Carrito
                                </span>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-3 border-b">
                                <p class="font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Tu carrito (3 productos)
                                </p>
                            </div>
                            <div class="max-h-96 overflow-y-auto py-2">
                                <!-- Cart Item 1 -->
                                <div class="flex items-center px-4 py-3 hover:bg-gray-50 transition-colors border-b">
                                    <div class="relative">
                                        <img src="https://via.placeholder.com/80" alt="Producto" class="w-16 h-16 object-cover rounded-lg border border-gray-200">
                                        <span class="absolute -top-2 -right-2 bg-white border border-gray-200 rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold shadow-sm">1</span>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium truncate">Smartphone X Pro</p>
                                        <p class="text-sm text-gray-500">$599.99</p>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">Envío gratis</span>
                                        </div>
                                    </div>
                                    <button class="text-gray-400 hover:text-red-500 ml-2 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                                <!-- Cart Item 2 -->
                                <div class="flex items-center px-4 py-3 hover:bg-gray-50 transition-colors border-b">
                                    <div class="relative">
                                        <img src="https://via.placeholder.com/80" alt="Producto" class="w-16 h-16 object-cover rounded-lg border border-gray-200">
                                        <span class="absolute -top-2 -right-2 bg-white border border-gray-200 rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold shadow-sm">2</span>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <p class="text-sm font-medium truncate">Auriculares Premium</p>
                                        <p class="text-sm text-gray-500">$199.99</p>
                                        <div class="flex items-center mt-1">
                                            <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">En stock</span>
                                        </div>
                                    </div>
                                    <button class="text-gray-400 hover:text-red-500 ml-2 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-t bg-gray-50 rounded-b-lg">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="font-medium">Subtotal:</span>
                                    <span class="font-bold text-lg">$999.97</span>
                                </div>
                                <a href="#" class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white text-center py-2 rounded-lg shadow-md transition-all duration-300">
                                    Ver carrito
                                </a>
                                <a href="#" class="block w-full mt-2 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-gray-800 text-center py-2 rounded-lg shadow-md transition-all duration-300 font-medium">
                                    Finalizar compra
                                </a>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>
                
                <!-- Hamburger Menu -->
                <div class="-mr-2 flex items-center lg:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-700 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden bg-white shadow-lg">
        <!-- Mobile Search -->
        <div class="px-4 pt-3 pb-2 border-t border-gray-200 lg:hidden">
    <div class="relative">
        <input 
            type="text" 
            placeholder="Buscar productos..." 
            class="w-full px-5 py-3 pl-12 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm text-gray-700 placeholder-gray-400"
            autocomplete="off"
            @focus="mobileSearchOpen = true"
            @blur="setTimeout(() => mobileSearchOpen = false, 200)"
        >
        <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <div x-show="mobileSearchOpen" x-transition class="absolute left-0 right-0 mt-2 bg-white rounded-lg shadow-lg z-50 border border-gray-200 max-h-80 overflow-y-auto">
            <div class="px-4 py-3 text-sm text-gray-500 bg-gray-50">Resultados de búsqueda</div>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors border-b border-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>
                <span class="text-gray-700">Smartphone X Pro</span>
            </a>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
                <span class="text-gray-700">Auriculares inalámbricos</span>
            </a>
        </div>
    </div>
</div>
        
        <!-- Mobile User Menu -->
        <div class="pt-2 pb-3 space-y-1 border-t border-gray-200">
            @auth
                <x-responsive-nav-link href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="font-medium">Mi perfil</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span class="font-medium">Lista de deseos</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span class="font-medium">Mis pedidos</span>
                </x-responsive-nav-link>
                
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="flex items-center px-4 py-3 border-t hover:bg-blue-50 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="font-medium">Cerrar sesión</span>
                    </x-responsive-nav-link>
                </form>
            @else
                <x-responsive-nav-link href="{{ route('login') }}" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    <span class="font-medium">Iniciar sesión</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="{{ route('register') }}" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    <span class="font-medium">Registrarse</span>
                </x-responsive-nav-link>
            @endauth
        </div>
        
        <!-- Mobile Categories -->
        <div class="px-4 py-3 border-t border-gray-200">
            <h4 class="font-bold text-gray-700 mb-3 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                Categorías
            </h4>
            <div class="grid grid-cols-2 gap-3">
                <x-responsive-nav-link href="#" class="bg-gray-50 rounded-lg flex items-center px-3 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium">Electrónica</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="bg-gray-50 rounded-lg flex items-center px-3 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="font-medium">Ropa</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="bg-gray-50 rounded-lg flex items-center px-3 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="font-medium">Hogar</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="bg-gray-50 rounded-lg flex items-center px-3 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">Juguetes</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="bg-gray-50 rounded-lg flex items-center px-3 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="font-medium">Supermercado</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#" class="bg-gray-50 rounded-lg flex items-center px-3 py-3 hover:bg-blue-50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                    <span class="font-medium">Ver todas</span>
                </x-responsive-nav-link>
            </div>
        </div>
        
        <!-- Mobile Quick Links -->
        <div class="px-4 py-3 border-t border-gray-200">
            <h4 class="font-bold text-gray-700 mb-3 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                </svg>
                Más opciones
            </h4>
            <x-responsive-nav-link href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
                <span class="font-medium">Ofertas</span>
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span class="font-medium">Marcas</span>
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="font-medium">Servicio al cliente</span>
            </x-responsive-nav-link>
        </div>
    </div>
</nav>


