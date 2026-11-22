<x-app-layout>

<div class="max-w-7xl mx-auto py-8 px-6">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800 dark:text-white">
                Gestión de Cuentas
            </h1>

            <p class="text-gray-500">
                Administra las cuentas financieras.
            </p>

        </div>

        <a href="{{ route('cuentas.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">

            + Nueva Cuenta

        </a>

    </div>

    @if(session('success'))

        <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded-lg mb-4">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead>

            <tr class="bg-gray-100 dark:bg-gray-700">

                <th class="p-4 text-left">ID</th>
                <th class="p-4 text-left">Nombre</th>
                <th class="p-4 text-left">Saldo</th>
                <th class="p-4 text-left">Moneda</th>
                <th class="p-4 text-left">Descripción</th>
                <th class="p-4 text-center">Acciones</th>

            </tr>

            </thead>

            <tbody>

            @forelse($cuentas as $cuenta)

                <tr class="border-b">

                    <td class="p-4">{{ $cuenta->id }}</td>

                    <td class="p-4 font-medium">
                        {{ $cuenta->nombre }}
                    </td>

                    <td class="p-4 text-green-600 font-bold">
                        $ {{ number_format($cuenta->saldo,0,',','.') }}
                    </td>

                    <td class="p-4">
                        {{ $cuenta->moneda }}
                    </td>

                    <td class="p-4">
                        {{ $cuenta->descripcion }}
                    </td>

                    <td class="p-4 text-center">

                        <a href="{{ route('cuentas.edit',$cuenta) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">

                            Editar

                        </a>

                        <form action="{{ route('cuentas.destroy',$cuenta) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('¿Desea eliminar esta cuenta?')"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">

                                Eliminar

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6"
                        class="p-6 text-center text-gray-500">

                        No existen cuentas registradas.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>