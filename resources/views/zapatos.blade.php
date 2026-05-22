<x-app-layout>

    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-center">
                <div>
                    <p class="text-xs font-bold tracking-widest uppercase text-red-600 mb-2">Inventario</p>
                    <h1 class="text-4xl font-black text-gray-900 mb-3">Módulo de Zapatos</h1>
                    <p class="text-gray-500 text-base">Registra nuevos zapatos al inventario y consulta los registros existentes desde un panel práctico y visual.</p>
                </div>
                <div class="rounded-[2rem] overflow-hidden border border-gray-200 shadow-xl">
                    <img src="{{ asset('fotos/deportivos.png') }}" alt="Inventario de Zapatos" class="h-full w-full object-cover min-h-[280px]" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- ════ ALERTAS ════ --}}
            @if(session('success'))
                <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 text-sm font-semibold px-5 py-4 rounded-2xl mb-6">
                    ✅ {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-800 text-sm px-5 py-4 rounded-2xl mb-6">
                    <p class="font-bold mb-2">Corrige los siguientes errores:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- ════ FORMULARIO ════ --}}
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 mb-10">
                <h5 class="text-lg font-black text-red-600 mb-6">Nuevo Zapato</h5>

                <form action="{{ route('zapatos.guardar') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                        {{-- Nombre --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Nombre del Zapato *</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                                   class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>

                        {{-- Marca --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Marca *</label>
                            <select name="marca" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                                <option value="">-- Selecciona marca --</option>
                                @foreach(['Nike','Adidas','Puma','Reebok','Fila','Converse','Vans','New Balance','Otra'] as $m)
                                    <option value="{{ $m }}" {{ old('marca')==$m ? 'selected':'' }}>{{ $m }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Talla --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Talla (EU) *</label>
                            <select name="talla" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                                <option value="">-- Talla --</option>
                                @foreach(['35','36','37','38','39','40','41','42','43','44','45'] as $t)
                                    <option value="{{ $t }}" {{ old('talla')==$t ? 'selected':'' }}>{{ $t }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Color --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Color *</label>
                            <select name="color" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                                <option value="">-- Color --</option>
                                @foreach(['Rojo','Negro','Blanco','Azul','Gris','Verde','Multicolor','Otro'] as $c)
                                    <option value="{{ $c }}" {{ old('color')==$c ? 'selected':'' }}>{{ $c }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Stock --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Stock *</label>
                            <input type="number" name="stock" min="0" value="{{ old('stock') }}"
                                   class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>

                        {{-- Precio --}}
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-1">Precio (COP) *</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-4 bg-gray-100 border border-r-0 border-gray-200 rounded-l-xl text-sm font-bold text-gray-500">$</span>
                                <input type="number" name="precio" step="0.01" min="0" value="{{ old('precio') }}"
                                       class="w-full border border-gray-200 rounded-r-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>
                        </div>

                        {{-- Descripción --}}
                        <div class="sm:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-1">Descripción *</label>
                            <input type="text" name="descripcion" value="{{ old('descripcion') }}"
                                   class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>

                        {{-- Botones --}}
                        <div class="sm:col-span-2 flex gap-3 pt-2">
                            <button type="submit"
                                    class="text-white font-bold text-sm px-8 py-3 rounded-xl" style="background:#b8860b">
                                 Guardar
                            </button>
                            <button type="reset"
                                    class="bg-white border-2 border-gray-200 hover:border-gray-400 text-gray-700 font-bold text-sm px-6 py-3 rounded-xl">
                                 Limpiar
                            </button>
                        </div>

                    </div>
                </form>
            </div>

            {{-- ════ TABLA ════ --}}
            <div class="flex items-center gap-3 mb-5">
                <h5 class="text-lg font-black text-red-600">Zapatos Registrados</h5>
                <span class="text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full">
                    {{ $zapatos->count() }}
                </span>
            </div>

            @if($zapatos->isEmpty())
                <div class="bg-white border border-gray-100 rounded-2xl text-center py-16 text-gray-400">
                    <p class="font-semibold">Aún no hay zapatos registrados.</p>
                </div>
            @else
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50 border-b border-gray-100">
                                <tr>
                                    @foreach(['#','Nombre','Marca','Talla','Color','Precio','Stock','Descripción','Fecha'] as $col)
                                        <th class="text-left text-xs font-bold text-gray-500 uppercase tracking-wider px-5 py-3">{{ $col }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                @foreach($zapatos as $z)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-5 py-4 font-bold text-gray-900">{{ $z->id }}</td>
                                    <td class="px-5 py-4 font-semibold text-gray-900">{{ $z->nombre }}</td>
                                    <td class="px-5 py-4 text-gray-600">{{ $z->marca }}</td>
                                    <td class="px-5 py-4 text-gray-600">{{ $z->talla }}</td>
                                    <td class="px-5 py-4">
                                        @if($z->color == 'Rojo')
                                            <span class="text-xs font-bold text-white bg-red-600 px-3 py-1 rounded-full">{{ $z->color }}</span>
                                        @elseif($z->color == 'Negro')
                                            <span class="text-xs font-bold text-white bg-gray-900 px-3 py-1 rounded-full">{{ $z->color }}</span>
                                        @elseif($z->color == 'Blanco')
                                            <span class="text-xs font-bold text-gray-700 bg-gray-100 border border-gray-200 px-3 py-1 rounded-full">{{ $z->color }}</span>
                                        @else
                                            <span class="text-xs font-bold text-white bg-gray-400 px-3 py-1 rounded-full">{{ $z->color }}</span>
                                        @endif
                                    </td>
                                    <td class="px-5 py-4 font-bold text-red-600">
                                        ${{ number_format($z->precio, 0, ',', '.') }}
                                    </td>
                                    <td class="px-5 py-4">
                                        @if($z->stock > 5)
                                            <span class="text-xs font-bold text-white bg-green-500 px-3 py-1 rounded-full">{{ $z->stock }}</span>
                                        @else
                                            <span class="text-xs font-bold text-gray-800 bg-yellow-300 px-3 py-1 rounded-full">{{ $z->stock }}</span>
                                        @endif
                                    </td>
                                    <td class="px-5 py-4 text-gray-400 text-xs">{{ $z->descripcion }}</td>
                                    <td class="px-5 py-4 text-gray-400 text-xs">{{ $z->created_at->format('d/m/Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </section>

</x-app-layout>