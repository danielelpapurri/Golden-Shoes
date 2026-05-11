<x-app-layout>

    {{-- ════ ENCABEZADO ════ --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">Colección</p>
                    <h1 class="text-4xl font-black text-gray-900 mb-3">
                        Colección <span class="text-red-600">Urbanos</span>
                    </h1>
                    <p class="text-gray-500 text-base max-w-xl">
                        Estilo versátil para la ciudad. Diseñados para quienes buscan comodidad sin perder la esencia moderna en su día a día.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <span class="inline-block text-xs font-bold text-white bg-gray-900 px-4 py-2 rounded-full">
                        Temporada 2026
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- ════ PRODUCTOS ════ --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Producto 1 — Más Vendido --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden relative">
                    <span class="absolute top-3 left-3 text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full z-10">Más Vendido</span>
                    <div class="bg-gray-50 flex items-center justify-center" style="height:250px">
                        <img src="{{ asset('fotos/muchaho_intro.png') }}"
                             class="h-full w-full object-contain p-4">
                    </div>
                    <div class="p-5">
                        <p class="text-xs font-bold tracking-widest uppercase text-gray-400 mb-1">Streetwear</p>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Comfort Cloud Black</h5>
                        <p class="text-sm text-gray-500 mb-4">Zapatilla urbana negra con suela roja ergonómica. Comodidad garantizada.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$320.000</span>
                            <a href="https://wa.me/573178232220?text=Hola!%20Me%20interesan%20los%20Comfort%20Cloud"
                               target="_blank"
                               class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                💬 Pedir
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Producto 2 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500&q=80"
                         class="w-full object-cover" style="height:250px">
                    <div class="p-5">
                        <p class="text-xs font-bold tracking-widest uppercase text-gray-400 mb-1">Casual</p>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Vans Old Skool Custom</h5>
                        <p class="text-sm text-gray-500 mb-4">Un clásico que nunca muere, perfecto para cualquier outfit casual.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-gray-900">$280.000</span>
                            <button class="flex items-center gap-2 bg-gray-900 hover:bg-gray-700 text-white text-sm font-bold px-4 py-2 rounded-xl">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 3 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=500&q=80"
                         class="w-full object-cover" style="height:250px">
                    <div class="p-5">
                        <p class="text-xs font-bold tracking-widest uppercase text-gray-400 mb-1">Lifestyle</p>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Retro Low White</h5>
                        <p class="text-sm text-gray-500 mb-4">Cuero sintético de alta calidad con detalles en gris humo.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-gray-900">$350.000</span>
                            <button class="flex items-center gap-2 bg-gray-900 hover:bg-gray-700 text-white text-sm font-bold px-4 py-2 rounded-xl">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 4 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=500&q=80"
                         class="w-full object-cover" style="height:250px">
                    <div class="p-5">
                        <p class="text-xs font-bold tracking-widest uppercase text-gray-400 mb-1">Modern</p>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Air Max Lifestyle</h5>
                        <p class="text-sm text-gray-500 mb-4">Amortiguación de aire para caminar largas distancias en la ciudad.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$420.000</span>
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