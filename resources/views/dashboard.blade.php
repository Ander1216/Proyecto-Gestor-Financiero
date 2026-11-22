<x-app-layout>

<div class="py-8">

    <div class="max-w-7xl mx-auto px-6">

        <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">

            Gestor Financiero

        </h1>

        <p class="text-gray-500 mb-8">

            Panel principal de control financiero.

        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-green-500 text-white p-6 rounded-xl shadow">

                <h2 class="text-lg">
                    Categorías
                </h2>

                <p class="text-3xl font-bold mt-2">
                </p>

                <a href="{{ route('categorias.index') }}"
                   class="inline-block mt-4 bg-white text-green-600 px-4 py-2 rounded">

                    Ver Categorías

                </a>

            </div>

            <div class="bg-blue-500 text-white p-6 rounded-xl shadow">

                <h2 class="text-lg">
                    Cuentas
                </h2>

                <p class="text-3xl font-bold mt-2">
                </p>

                <a href="{{ route('cuentas.index') }}"
                   class="inline-block mt-4 bg-white text-blue-600 px-4 py-2 rounded">

                    Ver Cuentas

                </a>

            </div>

            <div class="bg-purple-500 text-white p-6 rounded-xl shadow">

                <h2 class="text-lg">
                    Transacciones
                </h2>

                <p class="text-3xl font-bold mt-2">
                </p>

                <a href="{{ route('transacciones.index') }}"
                   class="inline-block mt-4 bg-white text-purple-600 px-4 py-2 rounded">

                    Ver Transacciones

                </a>

            </div>

        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow mt-8 p-6">

            <h2 class="text-xl font-bold mb-4">
                Bienvenido al Sistema
            </h2>

            <p class="text-gray-500">

                Desde este panel puede administrar categorías,
                cuentas bancarias, ingresos y gastos del sistema
                Gestor Financiero.

            </p>

        </div>

    </div>

</div>

</x-app-layout>
