@extends('layouts.app')

@section('content')
    <h1>Detalles del estudiante</h1>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $estudiante->nombre }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="apellido" class="form-label">Descripción</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $estudiante->apellido }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $estudiante->email }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="pin" class="form-label">PIN</label>
            <input type="text" name="pin" id="pin" class="form-control" value="{{ $estudiante->pin }}">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('estudiantes.index') }}">Regresar</a>
        </div>
    </div>
@endsection
