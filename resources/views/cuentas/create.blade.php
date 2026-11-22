<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-6">

    <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">

        <h1 class="text-2xl font-bold mb-6">
            Nueva Cuenta
        </h1>

        <form action="{{ route('cuentas.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Nombre
                </label>

                <input type="text"
                       name="nombre"
                       class="w-full border rounded-lg p-3">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Saldo Inicial
                </label>

                <input type="number"
                       step="0.01"
                       name="saldo"
                       class="w-full border rounded-lg p-3">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Moneda
                </label>

                <input type="text"
                       name="moneda"
                       value="COP"
                       class="w-full border rounded-lg p-3">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Descripción
                </label>

                <textarea name="descripcion"
                          class="w-full border rounded-lg p-3"></textarea>

            </div>

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg">

                    Guardar

                </button>

                <a href="{{ route('cuentas.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

                    Volver

                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>