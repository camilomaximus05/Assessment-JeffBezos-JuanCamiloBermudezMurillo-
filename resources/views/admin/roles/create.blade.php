@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Crear Rol</h1>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre del Rol</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <label for="exampleSelect" class="form-label">Autenticación</label>
                <select class="form-select" id="exampleSelect" aria-label="Seleccione una opción">
                    <option selected>web</option>
                    <option value="api">google</option>
                </select>
            </div>



            <button type="submit" class="btn btn-success">Crear Rol</button>
            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
