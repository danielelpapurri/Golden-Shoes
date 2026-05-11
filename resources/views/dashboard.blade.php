
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h1 class="text-3xl font-bold">
                    Bienvenido
                </h1>

                <p class="mt-4">
                    Has iniciado sesión correctamente.
                </p>

                <div class="mt-4">
                    Usuario:
                    {{ Auth::user()->name }}
                </div>

            </div>

        </div>

    </div>

</x-app-layout>
