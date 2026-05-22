
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-gradient-to-r from-gray-900 via-slate-800 to-gray-700 text-white overflow-hidden shadow-xl sm:rounded-3xl p-8">
                <div class="grid gap-8 lg:grid-cols-[1fr_0.9fr] lg:items-center">
                    <div>
                        <p class="text-sm uppercase tracking-[0.3em] text-slate-300">Bienvenido a Golden Shoes</p>
                        <h1 class="mt-4 text-4xl font-extrabold tracking-tight">
                            Hola, {{ Auth::user()->name }}
                        </h1>
                        <p class="mt-3 max-w-2xl text-sm text-slate-200 leading-7">
                            Administra los mensajes recibidos y el inventario de zapatos desde este panel. Todo lo que necesitas está aquí al alcance de un clic.
                        </p>
                    </div>
                    <div class="relative rounded-[2rem] overflow-hidden border border-white/10 bg-white/10 shadow-2xl">
                        <img src="{{ asset('fotos/muchaho_intro.png') }}" alt="Panel Golden Shoes" class="h-full w-full object-cover brightness-90" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 to-transparent"></div>
                        <div class="absolute bottom-5 left-5 text-white">
                            <p class="text-xs uppercase tracking-[0.3em] text-slate-200">Panel rápido</p>
                            <h2 class="mt-2 text-2xl font-bold">Gestiona tu tienda</h2>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-3xl bg-white/10 border border-white/10 p-6 shadow-lg backdrop-blur-lg">
                    <p class="text-sm uppercase tracking-[0.22em] text-slate-300">Accesos rápidos</p>
                    <div class="mt-5 grid gap-3 sm:grid-cols-2">
                        <a href="{{ route('mensajes') }}" class="inline-flex items-center justify-center rounded-2xl bg-white text-gray-900 font-semibold px-5 py-3 transition hover:bg-slate-100">
                            Ver Mensajes
                        </a>
                        <a href="{{ route('zapatos') }}" class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-slate-800/90 text-white font-semibold px-5 py-3 transition hover:bg-slate-700">
                            Gestión de Zapatos
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-2">
                <div class="bg-white shadow-sm rounded-3xl border border-gray-100 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Tu cuenta</h2>
                    <p class="mt-3 text-sm text-gray-600">Nombre de usuario registrado en el sistema.</p>
                    <div class="mt-6 rounded-3xl bg-slate-50 border border-slate-200 p-5">
                        <p class="text-sm text-slate-500">Usuario</p>
                        <p class="mt-2 text-2xl font-bold text-gray-900">{{ Auth::user()->name }}</p>
                    </div>
                </div>

                <div class="bg-white shadow-sm rounded-3xl border border-gray-100 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Estado de acceso</h2>
                    <p class="mt-3 text-sm text-gray-600">Estás autenticado y puedes gestionar mensajes e inventario de zapatos.</p>
                    <div class="mt-6 rounded-3xl bg-slate-50 border border-slate-200 p-5">
                        <p class="text-sm text-slate-500">Sesión activa</p>
                        <p class="mt-2 text-2xl font-bold text-gray-900">Activa</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-app-layout>
