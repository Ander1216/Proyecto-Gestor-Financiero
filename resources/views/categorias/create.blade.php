<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-6">

    <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">

        <h1 class="text-2xl font-bold mb-6">
            Nueva Categoría
        </h1>

        <form action="{{ route('categorias.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Nombre
                </label>

                <input
                    type="text"
                    name="nombre"
                    value="{{ old('nombre') }}"
                    class="w-full border rounded-lg p-3">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Tipo
                </label>

                <select
                    name="tipo"
                    class="w-full border rounded-lg p-3">

                    <option value="ingreso">
                        Ingreso
                    </option>

                    <option value="gasto">
                        Gasto
                    </option>

                </select>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    class="w-full border rounded-lg p-3"></textarea>

            </div>

            <button
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg">

                Guardar

            </button>

        <a href="{{ route('categorias.index') }}"
        
        class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

            Volver
        </a>


        </form>

    </div>

</div>

</x-app-layout>