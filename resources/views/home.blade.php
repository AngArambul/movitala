@extends('layouts.app')

@section('title', 'Inicio | MoviTala')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 text-center">
        <h1 class="display-5">Gestión Operativa de Flotilla</h1>
        <p class="lead">Plataforma centralizada para el fraccionamiento Los Ruiseñores.</p>
        <div class="alert alert-info">
            <strong>Información Operativa:</strong> Tarifa base estandarizada en $30 MXN. Horario de 4:40 a.m. a 11:30 p.m.
        </div>
        <a href="{{ route('admin.units.create') }}" class="btn btn-primary mt-3">Módulo de Registro de Unidades</a>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary mt-3">Panel de Monitoreo</a>
    </div>
</div>
@endsection