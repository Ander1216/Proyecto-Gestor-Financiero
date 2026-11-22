<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use App\Models\Cuenta;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaccionController extends Controller
{
    public function index()
    {
        $transacciones = Transaccion::with([
            'cuenta',
            'categoria'
        ])->get();

        return view(
            'transacciones.index',
            compact('transacciones')
        );
    }

    public function create()
    {
        $cuentas = Cuenta::all();
        $categorias = Categoria::all();

        return view(
            'transacciones.create',
            compact(
                'cuentas',
                'categorias'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'cuenta_id' => 'required',
            'categoria_id' => 'required',
            'tipo' => 'required',
            'monto' => 'required|numeric|min:1',
            'fecha' => 'required'
        ]);

        $cuenta = Cuenta::findOrFail(
            $request->cuenta_id
        );

        Categoria::findOrFail(
            $request->categoria_id
        );

        if (
            $request->tipo == 'gasto' &&
            $request->monto > $cuenta->saldo
        ) {
            return back()
                ->withErrors([
                    'monto' => 'Saldo insuficiente.'
                ])
                ->withInput();
        }

        Transaccion::create([
            'cuenta_id' => $request->cuenta_id,
            'categoria_id' => $request->categoria_id,
            'tipo' => $request->tipo,
            'monto' => $request->monto,
            'fecha' => $request->fecha,
            'descripcion' => $request->descripcion,
            'creado_por' => Auth::user()->name
        ]);

        if ($request->tipo == 'ingreso') {

            $cuenta->saldo += $request->monto;

        } else {

            $cuenta->saldo -= $request->monto;

        }

        $cuenta->save();

        return redirect()
            ->route('transacciones.index')
            ->with(
                'success',
                'Transacción registrada correctamente'
            );
    }

    public function show(Transaccion $transaccion)
    {
        //
    }

    public function edit(Transaccion $transaccion)
    {
        return redirect()
            ->route('transacciones.index');
    }

    public function update(Request $request, Transaccion $transaccion)
    {
        return redirect()
            ->route('transacciones.index');
    }

    public function destroy(Transaccion $transaccion)
    {
        $cuenta = $transaccion->cuenta;

        if ($transaccion->tipo == 'ingreso') {

            $cuenta->saldo -= $transaccion->monto;

        } else {

            $cuenta->saldo += $transaccion->monto;

        }

        $cuenta->save();

        $transaccion->delete();

        return redirect()
            ->route('transacciones.index')
            ->with(
                'success',
                'Transacción eliminada correctamente'
            );
    }
}