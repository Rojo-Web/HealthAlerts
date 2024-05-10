@extends('layouts.app')

@section('template_title')
Roles
@endsection
@if (Auth::check())
@if (Auth::user()->rol_id == "Admin")
@section('content')
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <span>
                        <strong>¡Nota!</strong>
                    </span>
                </div>
                <div class="card-body">
                    <p>Recuerda que el SuperAdministrador no puede ser borrado</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <strong>{{ __('Roles') }}</strong>
                        </span>

                        <div class="float-right">
                            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm float-right" data-placement="left">
                                {{ __('Crear rol') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success m-4">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Rol</th>
                                    <th>Permisos</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <!-- Mostrar enlaces de paginación -->
                            <div style="display: flex; justify-content: flex-end; margin-bottom: 10px; padding-right: 10px; width: 100%;">
                                @if ($roles->previousPageUrl())
                                <a href="{{ $roles->previousPageUrl() }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                    </svg></a>
                                @endif

                                @if ($roles->nextPageUrl())
                                <a href="{{ $roles->nextPageUrl() }}" style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg></a>
                                @endif
                            </div>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->permisos }}</td>

                                    <td>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('roles.show', $role->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Info') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                                            Swal.fire({
                                                title: '¿Estás seguro?',
                                                text: '¡No podrás revertir esto!',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: '¡Sí, eliminarlo!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    this.closest('form').submit();
                                                }
                                            });"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No tienes permisos para entrar a esta pagina</h1>
@endsection
@endif
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
