@extends('layouts.app')

@section('content')
<h1>Eliminar estudiante</h1>
<form action="{{route('estudiantes.destroy', $estudiante->id)}}" method="POST">
    @csrf


    <div class="row">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" name="nombre" id="nombre" class="form-control" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="apellido" class="form-label">Apellidos</label>
            <input type="text" name="apellido" id="apellido" class="form-control" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{route('estudiantes.index')}}">Cancelar</a>
        </div>
    </div>
</form>

@endsection
