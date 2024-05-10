@extends('layouts.app')

@section('template_title')
Pacientes
@endsection
@if (Auth::check())
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <strong>{{ __('Pacientes') }}</strong>
                        </span>
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
                                    <th>Cedula</th>
                                    <th>Name</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- Mostrar enlaces de paginación -->
                            <div style="display: flex; justify-content: flex-end; margin-bottom: 10px; padding-right: 10px; width: 100%;">
                                @if ($pacientes->previousPageUrl())
                                <a href="{{ $pacientes->previousPageUrl() }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                    </svg></a>
                                @endif

                                @if ($pacientes->nextPageUrl())
                                <a href="{{ $pacientes->nextPageUrl() }}" style="margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg></a>
                                @endif
                            </div>
                            <tbody>
                                @foreach ($pacientes as $paciente)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $paciente->cedula }}</td>
                                    <td>{{ $paciente->name }}</td>
                                    <td>{{ $paciente->celular }}</td>
                                    <td>
                                        <a href="mailto:{{ $paciente->email }}">{{ $paciente->email }}</a>
                                    </td>

                                    <td>
                                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show', $paciente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            @if (Auth::check())
                                            @if (Auth::user()->rol_id == "Admin")
                                            <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit', $paciente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                            @endif
                                            @endif
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
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
