@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-4">Crear Usuario</h1>

        <form action="{{ route('admin.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label">Apellido</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="{{ old('lastName') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Crear</button>
        </form>
    </div>
@endsection
