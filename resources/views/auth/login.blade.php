<x-guest-layout>
    <div class="min-h-screen bg-slate-950 flex items-center justify-center px-4 py-6 sm:px-6 lg:px-8">
        <div class="w-full max-w-6xl overflow-hidden rounded-[2rem] bg-white shadow-2xl lg:grid lg:grid-cols-2 items-stretch lg:min-h-[600px]">

            {{-- FORMULARIO --}}
            <div class="flex flex-col justify-center px-8 py-10 sm:px-12 lg:px-14 min-h-[520px]">

                <div class="flex items-center gap-4">
                    <div class="flex h-14 w-14 items-center justify-center rounded-3xl bg-red-600 text-2xl font-bold text-white">
                        G
                    </div>

                    <div>
                        <p class="text-sm uppercase tracking-[0.35em] text-red-600">
                            Golden Shoes
                        </p>

                        <h1 class="mt-2 text-3xl font-bold text-slate-900">
                            Inicia sesión
                        </h1>

                        <p class="mt-2 text-sm text-slate-500">
                            Accede al panel de administración para gestionar mensajes e inventario.
                        </p>
                    </div>
                </div>

                <x-auth-session-status class="mt-6 mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700">
                            Correo electrónico
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            class="mt-2 block w-full rounded-2xl border border-slate-300 px-5 py-3 text-sm shadow-sm focus:border-red-500 focus:ring-red-500"
                        >

                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-700">
                            Contraseña
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="mt-2 block w-full rounded-2xl border border-slate-300 px-5 py-3 text-sm shadow-sm focus:border-red-500 focus:ring-red-500"
                        >

                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <div class="flex flex-col gap-3 text-sm text-slate-600 sm:flex-row sm:items-center sm:justify-between">

                        <label for="remember_me" class="inline-flex items-center gap-2">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                class="rounded border-slate-300 text-red-600 focus:ring-red-500"
                            >

                            Recordarme
                        </label>

                        @if (Route::has('password.request'))
                            <a
                                href="{{ route('password.request') }}"
                                class="font-semibold text-red-600 hover:text-red-700"
                            >
                                Olvidé mi contraseña
                            </a>
                        @endif
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-2xl bg-red-600 px-6 py-3 text-sm font-semibold text-white shadow-lg transition hover:bg-red-700"
                    >
                        Ingresar
                    </button>
                </form>

                <p class="mt-6 text-sm text-slate-500">
                    ¿No tienes cuenta?
                    <a href="{{ route('register') }}" class="font-semibold text-red-600 hover:text-red-700">
                        Regístrate
                    </a>
                </p>
            </div>

            {{-- IMAGEN --}}
            <div class="relative hidden lg:block min-h-[520px] overflow-hidden">
                <img
                    src="{{ asset('fotos/muchaho_intro1.png') }}"
                    alt="Golden Shoes"
                    class="h-full w-full object-cover"
                >

                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-0 left-0 p-10 text-white">
                    <span class="rounded-full bg-red-600 px-4 py-1 text-xs font-semibold uppercase tracking-[0.25em]">
                        Acceso administrativo
                    </span>

                    <h2 class="mt-5 text-3xl font-bold">
                        Panel seguro para gestionar tu tienda
                    </h2>

                    <p class="mt-4 max-w-md text-sm text-slate-200">
                        Controla inventario, usuarios, pedidos y mensajes desde un único panel administrativo.
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>