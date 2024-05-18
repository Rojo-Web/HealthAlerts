@extends('layouts.app')

@section('template_title')
    Backups
@endsection

@if (Auth::check())
    @section('content')
        <h1>Backups</h1>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Citas pendientes</h5>
                        <a href="{{ route('export.citas_pendientes', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Próximas Citas</h5>
                        <a href="{{ route('export.proximas_citas', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pacientes</h5>
                        <a href="{{ route('export.pacientes', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registros</h5>
                        <a href="{{ route('export.registros', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Roles</h5>
                        <a href="{{ route('export.roles', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <a href="{{ route('export.users', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
