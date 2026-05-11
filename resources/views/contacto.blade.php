<x-app-layout>

    {{-- ════ ENCABEZADO ════ --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">Soporte</p>
            <h1 class="text-4xl font-black text-gray-900 mb-2">Contáctanos</h1>
            <p class="text-gray-500 text-base">Estamos aquí para ayudarte. Escríbenos por el canal que prefieras.</p>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- ════ CANALES ════ --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">

                {{-- WhatsApp --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 text-center">
                    <div class="text-5xl mb-3" style="color:#25D366">💬</div>
                    <h5 class="text-base font-black text-gray-900 mb-1">WhatsApp</h5>
                    <p class="text-sm text-gray-400 mb-3">Respondemos en minutos</p>
                    <a href="https://wa.me/573178232220" target="_blank"
                       class="inline-block text-sm font-bold text-white bg-green-500 hover:bg-green-600 px-5 py-2 rounded-xl">
                        +57 317 823 2220
                    </a>
                </div>

                {{-- Correo --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 text-center">
                    <div class="text-5xl mb-3">✉️</div>
                    <h5 class="text-base font-black text-gray-900 mb-1">Correo</h5>
                    <p class="text-sm text-gray-400 mb-3">Te respondemos el mismo día</p>
                    <span class="inline-block text-sm font-bold text-red-600 bg-red-50 border border-red-100 px-4 py-2 rounded-xl break-all">
                        goldenshoches@goldenshoes.com
                    </span>
                </div>

                {{-- Instagram --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 text-center">
                    <div class="text-5xl mb-3">📸</div>
                    <h5 class="text-base font-black text-gray-900 mb-1">Instagram</h5>
                    <p class="text-sm text-gray-400 mb-3">Síguenos y ve lo nuevo</p>
                    <a href="https://instagram.com/GoldenShoesCol" target="_blank"
                       class="inline-block text-sm font-bold text-white px-5 py-2 rounded-xl"
                       style="background: linear-gradient(135deg,#f58529,#dd2a7b,#8134af)">
                        @GoldenShoesCol
                    </a>
                </div>

            </div>

            {{-- ════ HORARIO ════ --}}
            <div class="bg-white rounded-2xl border-l-4 border-red-600 border border-gray-100 shadow-sm p-8 mb-8">
                <h5 class="text-base font-black text-gray-900 mb-6 flex items-center gap-2">
                    🕐 Horario de Atención
                </h5>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                    <div>
                        <p class="font-bold text-gray-900 mb-1">Lunes a Viernes</p>
                        <p class="text-sm text-gray-400">9:00 am – 6:00 pm</p>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 mb-1">Sábados</p>
                        <p class="text-sm text-gray-400">10:00 am – 3:00 pm</p>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 mb-1">Domingos</p>
                        <p class="text-sm text-red-500 font-semibold">Cerrado</p>
                    </div>
                </div>
            </div>

            {{-- ════ UBICACIÓN ════ --}}
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 flex flex-col items-center justify-center py-16 text-center">
                    <div class="text-5xl mb-3">📍</div>
                    <p class="text-lg font-black text-gray-900">Pasto, Nariño, Colombia</p>
                    <p class="text-sm text-gray-400 mt-1">Calle #19-20</p>
                    <a href="https://maps.google.com/?q=Pasto,Nariño,Colombia" target="_blank"
                       class="mt-5 inline-block text-sm font-bold text-red-600 bg-red-50 border border-red-100 px-5 py-2 rounded-xl hover:bg-red-100">
                        Ver en Google Maps →
                    </a>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>