<x-app-layout>

    {{-- ════ ENCABEZADO ════ --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">La empresa</p>
            <h1 class="text-4xl font-black text-gray-900 mb-2">Nuestro Equipo</h1>
            <p class="text-gray-500 text-base">Las personas detrás de Golden Shoes.</p>
        </div>
    </section>

    <section class="bg-gray-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- ════ EQUIPO ════ --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-2xl mx-auto mb-16">

                {{-- Daniel --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden text-center">
                    <div class="bg-gray-50 overflow-hidden" style="height:220px">
                        <img src="{{ asset('fotos/dani.png') }}"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block text-xs font-bold tracking-widest uppercase text-red-600 bg-red-50 border border-red-100 px-3 py-1 rounded-full mb-3">Fundador</span>
                        <h5 class="text-lg font-black text-gray-900 mb-1">Daniel Cabezas</h5>
                        <p class="text-sm text-gray-400">Mr Kasantari · Golden Shoes</p>
                    </div>
                </div>

                {{-- Helder --}}
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden text-center">
                    <div class="bg-gray-50 overflow-hidden" style="height:220px">
                        <img src="{{ asset('fotos/helder.png') }}"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block text-xs font-bold tracking-widest uppercase text-red-600 bg-red-50 border border-red-100 px-3 py-1 rounded-full mb-3">Co-fundador</span>
                        <h5 class="text-lg font-black text-gray-900 mb-1">Helder Gomez</h5>
                        <p class="text-sm text-gray-400">Mr Largui · Golden Shoes</p>
                    </div>
                </div>

            </div>

            {{-- ════ PQRS ════ --}}
            <div class="max-w-3xl mx-auto">
                <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">Atención al cliente</p>
                <h2 class="text-3xl font-black text-gray-900 mb-8">Formulario PQRS</h2>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">

                    @if(session('success'))
                        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 text-sm font-semibold px-5 py-4 rounded-2xl mb-6">
                            ✅ {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="bg-red-50 border border-red-200 text-red-800 text-sm px-5 py-4 rounded-2xl mb-6">
                            <p class="font-bold mb-2">⚠️ Corrige los siguientes errores:</p>
                            <ul class="list-disc list-inside space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('pqrs.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Nombres</label>
                                <input type="text" name="nombre"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-1">Apellidos</label>
                                <input type="text" name="apellido"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">Correo electrónico</label>
                                <input type="email" name="correo"
                                       class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">Tipo de solicitud</label>
                                <select name="tipo"
                                        class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                                    <option value="">-- Selecciona --</option>
                                    <option value="peticion">Petición</option>
                                    <option value="queja">Queja</option>
                                    <option value="reclamo">Reclamo</option>
                                    <option value="sugerencia">Sugerencia</option>
                                    <option value="felicitacion">Felicitación</option>
                                </select>
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-sm font-bold text-gray-700 mb-1">Mensaje</label>
                                <textarea name="mensaje" rows="4"
                                          class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 resize-none"></textarea>
                            </div>

                            <div class="sm:col-span-2 flex items-center gap-3">
                                <input type="checkbox" name="terminos" id="terminos"
                                       class="w-4 h-4 accent-red-600">
                                <label for="terminos" class="text-sm text-gray-600">
                                    Acepto los términos y condiciones
                                </label>
                            </div>

                            <div class="sm:col-span-2">
                                <button type="submit"
                                        class="w-full text-white font-bold text-sm py-3 rounded-xl" style="background:#b8860b">
                                    📨 Enviar mensaje
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

</x-app-layout>