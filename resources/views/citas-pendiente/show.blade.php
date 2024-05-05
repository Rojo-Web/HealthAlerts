@extends('layouts.app')

@section('template_title')
    {{ $citasPendiente->name ?? __('Show') . " " . __('Citas Pendiente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Citas Pendiente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('citas-pendientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Paciente Id:</strong>
                                    {{ $citasPendiente->paciente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $citasPendiente->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Solicitud:</strong>
                                    {{ $citasPendiente->Solicitud }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechasolicitud:</strong>
                                    {{ $citasPendiente->fechaSolicitud }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
