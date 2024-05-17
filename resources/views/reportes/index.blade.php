@extends('layouts.app')

@section('template_title')
    Reportes
@endsection

@if (Auth::check())
    @section('content')
        <h1>Reportes</h1>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Citas pendientes</h5>
                        <a href="{{ route('export.citas_pendientes', 'xlsx') }}" class="btn btn-success">
                            <i class="fa fa-file-excel"></i> Excel
                        </a>
                        <a href="{{ route('export.citas_pendientes', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                        <a href="{{ route('export.citas_pendientes', 'pdf') }}" class="btn btn-danger">
                            <i class="fa fa-file-pdf"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Próximas Citas</h5>
                        <a href="{{ route('export.proximas_citas', 'xlsx') }}" class="btn btn-success">
                            <i class="fa fa-file-excel"></i> Excel
                        </a>
                        <a href="{{ route('export.proximas_citas', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                        <a href="{{ route('export.proximas_citas', 'pdf') }}" class="btn btn-danger">
                            <i class="fa fa-file-pdf"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pacientes</h5>
                        <a href="{{ route('export.pacientes', 'xlsx') }}" class="btn btn-success">
                            <i class="fa fa-file-excel"></i> Excel
                        </a>
                        <a href="{{ route('export.pacientes', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                        <a href="{{ route('export.pacientes', 'pdf') }}" class="btn btn-danger">
                            <i class="fa fa-file-pdf"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registros</h5>
                        <a href="{{ route('export.registros', 'xlsx') }}" class="btn btn-success">
                            <i class="fa fa-file-excel"></i> Excel
                        </a>
                        <a href="{{ route('export.registros', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                        <a href="{{ route('export.registros', 'pdf') }}" class="btn btn-danger">
                            <i class="fa fa-file-pdf"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Roles</h5>
                        <a href="{{ route('export.roles', 'xlsx') }}" class="btn btn-success">
                            <i class="fa fa-file-excel"></i> Excel
                        </a>
                        <a href="{{ route('export.roles', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                        <a href="{{ route('export.roles', 'pdf') }}" class="btn btn-danger">
                            <i class="fa fa-file-pdf"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>
                        <a href="{{ route('export.users', 'xlsx') }}" class="btn btn-success">
                            <i class="fa fa-file-excel"></i> Excel
                        </a>
                        <a href="{{ route('export.users', 'csv') }}" class="btn btn-warning">
                            <i class="fa fa-file-csv"></i> CSV
                        </a>
                        <a href="{{ route('export.users', 'pdf') }}" class="btn btn-danger">
                            <i class="fa fa-file-pdf"></i> PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
