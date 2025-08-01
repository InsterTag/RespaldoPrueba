@vite(['resources/js/home.js', 'resources/css/home.css'])
<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto px-4 flex flex-col md:flex-row">
                <!-- Filters Sidebar -->
                <div class="w-full md:w-72 flex-shrink-0 mb-6 md:mb-0 md:mr-6">
                    <div class="bg-white rounded-xl shadow-md p-5 sticky top-24 border border-gray-100">
                        <!-- Header -->
                        <div class="flex justify-between items-center mb-5 pb-3 border-b border-gray-200">
                            <h3 class="font-bold text-lg text-gray-800 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                                </svg>
                                Filtros
                            </h3>
                            <button class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center">
                                Limpiar
                            </button>
                        </div>
                        
                        <!-- Price Filter -->
                        <div class="mb-6 pb-4 border-b border-gray-200">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-sm text-gray-600">Rango de precios:</span>
                                <span class="text-sm font-medium bg-blue-50 text-blue-600 px-2 py-1 rounded">$0 - $1000</span>
                            </div>
                            <input 
                                type="range" 
                                min="0" 
                                max="1000" 
                                value="500" 
                                class="price-range-slider w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer mb-4"
                            >
                            <div class="flex justify-between">
                                <input 
                                    type="number" 
                                    min="0" 
                                    max="999" 
                                    value="0" 
                                    class="w-20 border border-gray-300 rounded-md px-3 py-1 text-sm focus:ring-blue-400 focus:border-blue-400"
                                    placeholder="Mín"
                                >
                                <input 
                                    type="number" 
                                    min="1" 
                                    max="1000" 
                                    value="1000" 
                                    class="w-20 border border-gray-300 rounded-md px-3 py-1 text-sm focus:ring-blue-400 focus:border-blue-400"
                                    placeholder="Máx"
                                >
                            </div>
                        </div>
                        
                        <!-- Categories Filter -->
                        <div class="mb-6 pb-4 border-b border-gray-200">
                            <h4 class="font-medium text-gray-700 mb-3">Categorías</h4>
                            <div class="space-y-2">
                                @foreach(['Electrónica', 'Ropa', 'Hogar'] as $category)
                                <label class="flex items-center justify-between cursor-pointer">
                                    <div class="flex items-center">
                                        <input type="checkbox" class="rounded text-blue-600 mr-2">
                                        <span class="text-sm">{{ $category }}</span>
                                    </div>
                                    <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded-full">156</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <button class="w-full bg-blue-600 text-white py-2.5 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                            Aplicar Filtros
                        </button>
                    </div>
                </div>
                
                <!-- Products Grid -->
                <div class="flex-1">
                    <!-- Products Header -->
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 bg-white rounded-lg shadow p-4">
                        <div class="mb-4 md:mb-0">
                            <h2 class="text-2xl font-bold text-gray-800">Todos los productos</h2>
                            <p class="text-sm text-gray-600">Mostrando {{ $products->firstItem() }}-{{ $products->lastItem() }} de {{ $products->total() }} productos</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <select class="border border-gray-300 rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                                <option>Ordenar porㅤ</option>
                                <option>Menor precio</option>
                                <option>Mayor precio</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @foreach($products as $product)
                        <div class="bg-white rounded-lg shadow overflow-hidden transition duration-300 hover:shadow-md">
                            <!-- Product Image -->
                            <div class="relative h-48 bg-gray-100 flex items-center justify-center">
                                @if($product->media)
                                <img src="{{ asset('storage/' . $product->media) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                @else
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                @endif
                            </div>
                            
                            <!-- Product Info -->
                            <div class="p-4">
                                <h3 class="font-medium text-gray-900 mb-1">{{ $product->name }}</h3>
                                <p class="text-xs text-gray-500 mb-3">{{ Str::limit($product->description, 50) }}</p>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-lg font-bold text-gray-900">${{ number_format($product->unit_price, 2) }}</span>
                                    <button class="text-blue-600 hover:text-blue-800">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                
                                <div class="mt-2">
                                    <span class="text-xs px-2 py-1 rounded {{ $product->state == 'available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $product->state == 'available' ? 'Disponible' : 'Agotado' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="mt-8 flex justify-center">
                        <nav class="inline-flex rounded-md shadow">
                            @if ($products->onFirstPage())
                            <span class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-400 cursor-not-allowed">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            @else
                            <a href="{{ $products->previousPageUrl() }}" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            @endif
                            
                            {{-- Números de página --}}
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                @if ($page == $products->currentPage())
                                    <span class="px-4 py-2 border-t border-b border-gray-300 bg-white text-blue-600 font-medium hover:bg-blue-50">
                                    {{ $page }}
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                                    {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                                    
                        {{-- Botón Siguiente --}}
                            @if ($products->hasMorePages())
                                <a href="{{ $products->nextPageUrl() }}" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            @else
                                <span class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-400 cursor-not-allowed">
                                <i class="fas fa-chevron-right"></i>
                                </span>
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>