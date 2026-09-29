<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\UnitController;

// 1. Ruta principal del sistema
Route::get('/', [SystemController::class, 'index'])->name('home');

// 2. Grupo de rutas para la administración de la flotilla
Route::prefix('administracion')->name('admin.')->group(function () {
    Route::get('/unidades/registro', [UnitController::class, 'create'])->name('units.create');
    Route::post('/unidades/almacenar', [UnitController::class, 'store'])->name('units.store');
    
    // Vista adicional requerida para cumplir con la métrica de tres vistas
    Route::get('/monitoreo', [SystemController::class, 'dashboard'])->name('dashboard');
});