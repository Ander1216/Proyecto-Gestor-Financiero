<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-6">

    <div class="bg-white dark:bg-gray-800 shadow rounded-xl p-6">

        <h1 class="text-2xl font-bold mb-6">
            Nueva Transacción
        </h1>

        @if ($errors->any())

            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('transacciones.store') }}" method="POST">

            @csrf

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Cuenta
                </label>

                <select
                    name="cuenta_id"
                    class="w-full border rounded-lg p-3">

                    @foreach($cuentas as $cuenta)

                        <option value="{{ $cuenta->id }}">
                            {{ $cuenta->nombre }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Categoría
                </label>

                <select
                    name="categoria_id"
                    class="w-full border rounded-lg p-3">

                    @foreach($categorias as $categoria)

                        <option value="{{ $categoria->id }}">
                            {{ $categoria->nombre }}
                        </option>

                    @endforeach

                </select>

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
                    Monto
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="monto"
                    class="w-full border rounded-lg p-3">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Fecha
                </label>

                <input
                    type="date"
                    name="fecha"
                    class="w-full border rounded-lg p-3">

            </div>

            <div class="mb-4">

                <label class="block mb-2 font-medium">
                    Descripción
                </label>

                <textarea
                    name="descripcion"
                    class="w-full border rounded-lg p-3"></textarea>

            </div>

            <div class="flex gap-3">

                <button
                    type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg">

                    Guardar

                </button>

                <a
                    href="{{ route('transacciones.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

                    Volver

                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>