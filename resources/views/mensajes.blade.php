<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mensajes PQRS
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white shadow-xl sm:rounded-3xl border border-gray-100 p-8">
                <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Centro de mensajes</p>
                        <h1 class="mt-3 text-3xl font-bold text-gray-900">Gestiona tus consultas PQRS</h1>
                        <p class="mt-3 max-w-2xl text-sm text-gray-600 leading-6">
                            Aquí puedes revisar los mensajes enviados por los clientes y darles seguimiento desde tu panel. Solo usuarios autenticados tienen acceso.
                        </p>
                    </div>
                    <div class="rounded-3xl overflow-hidden border border-slate-200 shadow-sm">
                        <img src="{{ asset('fotos/muchaho_intro1.png') }}" alt="Mensajes PQRS" class="h-full w-full object-cover" />
                    </div>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="rounded-3xl bg-slate-50 border border-slate-200 p-6 shadow-sm">
                    <p class="text-sm font-semibold text-slate-600 uppercase tracking-[0.2em]">Atención</p>
                    <p class="mt-3 text-sm text-slate-700 leading-6">
                        Revisa los mensajes periódicamente para responder preguntas, quejas y solicitudes de los clientes. Un manejo ágil mejora la experiencia de compra.
                    </p>
                </div>

                <div class="rounded-3xl bg-white border border-gray-100 p-6 shadow-sm">
                    <p class="text-sm text-slate-500">Estado de sesión</p>
                    <p class="mt-2 text-2xl font-bold text-gray-900">Activo</p>
                    <p class="mt-4 text-sm text-gray-600">
                        Si necesitas regresar, usa el menú o vuelve al panel de control.
                    </p>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>