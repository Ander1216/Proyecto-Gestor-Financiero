<x-app-layout>

<div class="max-w-7xl mx-auto py-8 px-6">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-gray-800 dark:text-white">
                Gestión de Transacciones
            </h1>

            <p class="text-gray-500">
                Administra ingresos y gastos.
            </p>

        </div>

        <a href="{{ route('transacciones.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-lg shadow">

            + Nueva Transacción

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

                <th class="p-4 text-left">Cuenta</th>
                <th class="p-4 text-left">Categoría</th>
                <th class="p-4 text-left">Tipo</th>
                <th class="p-4 text-left">Monto</th>
                <th class="p-4 text-left">Fecha</th>
                <th class="p-4 text-left">Usuario</th>
                <th class="p-4 text-center">Acciones</th>

            </tr>

            </thead>

            <tbody>

            @forelse($transacciones as $transaccion)

                <tr class="border-b">

                    <td class="p-4">
                        {{ $transaccion->cuenta->nombre }}
                    </td>

                    <td class="p-4">
                        {{ $transaccion->categoria->nombre }}
                    </td>

                    <td class="p-4">

                        @if($transaccion->tipo == 'ingreso')

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                Ingreso
                            </span>

                        @else

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                Gasto
                            </span>

                        @endif

                    </td>

                    <td class="p-4 font-bold">

                        $ {{ number_format($transaccion->monto,0,',','.') }}

                    </td>

                    <td class="p-4">
                        {{ $transaccion->fecha }}
                    </td>

                    <td class="p-4">
                        {{ $transaccion->creado_por }}
                    </td>

                    <td class="p-4 text-center">

                        <form
                            action="{{ route('transacciones.destroy',$transaccion) }}"
                            method="POST"
                            class="inline">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('¿Eliminar transacción?')"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">

                                Eliminar

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7"
                        class="p-6 text-center text-gray-500">

                        No existen transacciones registradas.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>