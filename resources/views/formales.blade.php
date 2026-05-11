<x-app-layout>

    {{-- ════ ENCABEZADO ════ --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">Colección</p>
            <h1 class="text-4xl font-black text-gray-900 mb-3">Zapatos Formales / Elegantes</h1>
            <p class="text-gray-500 text-base max-w-xl">
                Descubre nuestra colección premium de zapatos formales: elegancia, comodidad y estilo para oficina y eventos.
            </p>
        </div>
    </section>

    {{-- ════ PRODUCTOS ════ --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Producto 1 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-gray-900 px-3 py-1 rounded-full mb-3">Negro</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Oxford Clásico Premium</h5>
                        <p class="text-sm text-gray-500 mb-4">Cuero genuino elegante. Ideal para oficina y eventos formales.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-gray-900">$280.000</span>
                            <button class="flex items-center gap-2 bg-gray-900 hover:bg-gray-700 text-white text-sm font-bold px-4 py-2 rounded-xl">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 2 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614252235486-c4e7f7c8a8b2?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white px-3 py-1 rounded-full mb-3" style="background:#6b3e26">Café</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Derby Ejecutivo</h5>
                        <p class="text-sm text-gray-500 mb-4">Diseño sofisticado con acabado premium. Perfecto para oficina.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black" style="color:#6b3e26">$260.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 3 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1618354691269-6e66c68c92d5?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white px-3 py-1 rounded-full mb-3" style="background:#6b3e26">Marrón</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Loafer Elegante</h5>
                        <p class="text-sm text-gray-500 mb-4">Estilo sin cordones cómodo y sofisticado.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black" style="color:#6b3e26">$300.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 4 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614252235402-22c34d6d87d0?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-gray-900 px-3 py-1 rounded-full mb-3">Negro</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Oxford Italiano</h5>
                        <p class="text-sm text-gray-500 mb-4">Diseño europeo con acabado brillante.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-gray-900">$310.000</span>
                            <button class="flex items-center gap-2 bg-gray-900 hover:bg-gray-700 text-white text-sm font-bold px-4 py-2 rounded-xl">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 5 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white px-3 py-1 rounded-full mb-3" style="background:#4a2a12">Café oscuro</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Mocasín Ejecutivo</h5>
                        <p class="text-sm text-gray-500 mb-4">Comodidad premium con estilo formal.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black" style="color:#6b3e26">$270.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 6 — Premium --}}
                <div class="bg-white rounded-2xl border-2 border-red-600 shadow-sm overflow-hidden relative">
                    <span class="absolute top-3 right-3 text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full z-10">Premium</span>
                    <img src="https://images.unsplash.com/photo-1614252235486-c4e7f7c8a8b2?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-gray-900 px-3 py-1 rounded-full mb-3">Negro</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Elite Formal X</h5>
                        <p class="text-sm text-gray-500 mb-4">Alta gama para ocasiones especiales.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$350.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-app-layout>