<x-app-layout>

    {{-- ════ ENCABEZADO ════ --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">Colección</p>
            <h1 class="text-4xl font-black text-gray-900 mb-3">Deportivos (Performance)</h1>
            <p class="text-gray-500 text-base max-w-xl">
                Rendimiento, velocidad y comodidad. Descubre los mejores tenis deportivos para entrenamiento, running y alto desempeño.
            </p>
        </div>
    </section>

    {{-- ════ PRODUCTOS ════ --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Producto 1 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full mb-3">Running</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Air Zoom X Pro</h5>
                        <p class="text-sm text-gray-500 mb-4">Alto rendimiento con máxima amortiguación y ligereza.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$450.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 2 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full mb-3">Training</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Ultraboost 23</h5>
                        <p class="text-sm text-gray-500 mb-4">Comodidad total y energía en cada paso.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$500.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 3 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556906781-9a412961a28d?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full mb-3">Running</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Gel Nimbus Pro</h5>
                        <p class="text-sm text-gray-500 mb-4">Amortiguación avanzada para largas distancias.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$420.000</span>
                            <button class="flex items-center gap-2 text-white text-sm font-bold px-4 py-2 rounded-xl" style="background:#b8860b">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 4 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-gray-900 px-3 py-1 rounded-full mb-3">Gym</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">RS-X Performance</h5>
                        <p class="text-sm text-gray-500 mb-4">Diseño resistente para entrenamiento intenso.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-gray-900">$390.000</span>
                            <button class="flex items-center gap-2 bg-gray-900 hover:bg-gray-700 text-white text-sm font-bold px-4 py-2 rounded-xl">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 5 --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-gray-700 bg-gray-100 border border-gray-200 px-3 py-1 rounded-full mb-3">Running</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Wave Rider X</h5>
                        <p class="text-sm text-gray-500 mb-4">Estabilidad y confort para correr sin límites.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-gray-700">$410.000</span>
                            <button class="flex items-center gap-2 bg-gray-500 hover:bg-gray-600 text-white text-sm font-bold px-4 py-2 rounded-xl">
                                🛍 Pedir
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Producto 6 — TOP --}}
                <div class="bg-white rounded-2xl border-2 border-red-600 shadow-sm overflow-hidden relative">
                    <span class="absolute top-3 right-3 text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full z-10">¡TOP!</span>
                    <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?w=500&q=80"
                         class="w-full object-cover" style="height:220px">
                    <div class="p-5">
                        <span class="inline-block text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full mb-3">Performance</span>
                        <h5 class="text-base font-bold text-gray-900 mb-1">Velocity Nitro X</h5>
                        <p class="text-sm text-gray-500 mb-4">Tecnología avanzada para máximo desempeño.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-black text-red-600">$480.000</span>
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