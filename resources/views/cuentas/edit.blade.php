<x-app-layout>

<div class="max-w-4xl mx-auto p-6">

<h1 class="text-2xl font-bold mb-4">
Editar Cuenta
</h1>

<form action="{{ route('cuentas.update',$cuenta) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-4">

<label>Nombre</label>

<input
type="text"
name="nombre"
value="{{ $cuenta->nombre }}"
class="border w-full p-2 rounded">

</div>

<div class="mb-4">

<label>Saldo</label>

<input
type="number"
step="0.01"
name="saldo"
value="{{ $cuenta->saldo }}"
class="border w-full p-2 rounded">

</div>

<div class="mb-4">

<label>Moneda</label>

<input
type="text"
name="moneda"
value="{{ $cuenta->moneda }}"
class="border w-full p-2 rounded">

</div>

<div class="mb-4">

<label>Descripción</label>

<textarea
name="descripcion"
class="border w-full p-2 rounded">{{ $cuenta->descripcion }}</textarea>

</div>

<button
class="bg-green-500 text-white px-4 py-2 rounded">

Actualizar

</button>

</button>

    <a href="{{ route('cuentas.index') }}"
       class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

        Volver

    </a>

</form>

</div>

</x-app-layout>