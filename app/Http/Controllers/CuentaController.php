<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function index()
    {
        $cuentas = Cuenta::all();

        return view('cuentas.index', compact('cuentas'));
    }

    public function create()
    {
        return view('cuentas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:150',
            'saldo' => 'required|numeric|min:0'
        ]);

        Cuenta::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'saldo' => $request->saldo,
            'moneda' => $request->moneda
        ]);

        return redirect()
            ->route('cuentas.index')
            ->with('success','Cuenta creada correctamente');
    }

    public function show(Cuenta $cuenta)
    {
        //
    }

    public function edit(Cuenta $cuenta)
    {
        return view('cuentas.edit', compact('cuenta'));
    }

    public function update(Request $request, Cuenta $cuenta)
    {
        $request->validate([
            'nombre' => 'required|max:150',
            'saldo' => 'required|numeric|min:0'
        ]);

        $cuenta->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'saldo' => $request->saldo,
            'moneda' => $request->moneda
        ]);

        return redirect()
            ->route('cuentas.index')
            ->with('success','Cuenta actualizada correctamente');
    }

    public function destroy(Cuenta $cuenta)
    {
        try {

            $cuenta->delete();

            return redirect()
                ->route('cuentas.index')
                ->with('success','Cuenta eliminada correctamente');

        } catch (\Exception $e) {

            return redirect()
                ->route('cuentas.index')
                ->with('success','No se puede eliminar porque tiene movimientos asociados');
        }
    }
}