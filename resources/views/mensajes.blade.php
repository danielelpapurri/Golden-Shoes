```php id="m2y9vd"
<x-app-layout>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h1 class="text-3xl font-bold">
                    Mensajes PQRS
                </h1>

                <p class="mt-4">
                    Solo usuarios autenticados pueden ver esta página.
                </p>

                <div class="mt-4">
                    Usuario:
                    {{ Auth::user()->name }}
                </div>

            </div>

        </div>

    </div>

</x-app-layout>
```
