@extends('layouts.app')

@section('title', 'Alta de Mototaxi | MoviTala')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                Registrar Nueva Unidad de Mototaxi
            </div>
            <div class="card-body">
                @session('success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $value }}
                    </div>
                @endsession

                <form action="{{ route('admin.units.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="plate" class="form-label">Número de Placa o Identificador</label>
                        <input type="text" class="form-control" id="plate" name="plate" value="{{ old('plate') }}" placeholder="Ej. Moto-014">
                        @error('plate')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="driver_name" class="form-label">Nombre del Conductor Asignado</label>
                        <input type="text" class="form-control" id="driver_name" name="driver_name" value="{{ old('driver_name') }}">
                        @error('driver_name')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacidad (Pasajeros)</label>
                        <select class="form-select" id="capacity" name="capacity">
                            <option value="2">2 Pasajeros</option>
                            <option value="3">3 Pasajeros</option>
                        </select>
                        @error('capacity')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success">Guardar Registro en el Sistema</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection