<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UnitController extends Controller
{
    public function create()
    {
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'plate' => 'required|string|min:4|max:15',
            'driver_name' => 'required|string|min:3|max:100',
            'capacity' => 'required|integer|in:2,3',
        ]);

        $placa = $validatedData['plate'];
        $conductor = $validatedData['driver_name'];
        $capacidad = $validatedData['capacity'];

        Log::info("Operación Crítica: El administrador registró exitosamente la nueva unidad de mototaxi.", [
            'placa_registrada' => $placa,
            'nombre_conductor' => $conductor,
            'capacidad' => $capacidad
        ]);

        return redirect()->route('admin.units.create')
                         ->with('success', "La unidad {$placa} operada por {$conductor} fue registrada de manera exitosa en MoviTala.");
    }
}