@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Usuarios</h1>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Crear Nuevo Usuario</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.edit', $user) }}" class="btn btn-sm btn-warning">Editar</a>
                    <button type="button" class="btn btn-sm btn-danger" onclick="openDeleteModal({{ $user->id }}, '{{ $user->name }}')">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-end">
        {{ $users->links() }}
    </div>
</div>

<!-- Modal de confirmación de eliminación -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que quieres eliminar a <strong id="user-name"></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form id="delete-form" action="" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    function openDeleteModal(userId, userName) {
        // Establece el nombre del usuario en el modal
        document.getElementById('user-name').textContent = userName;

        // Actualiza la URL del formulario de eliminación con el ID del usuario
        var formAction = '/admin/' + userId;
        document.getElementById('delete-form').action = formAction;

        // Muestra el modal de confirmación
        var myModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        myModal.show();
    }
</script>
@endsection
