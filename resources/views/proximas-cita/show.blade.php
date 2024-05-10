@extends('layouts.app')

@section('template_title')
    {{ $proximasCita->name ?? __('Info') . " " . __('Proximas Cita') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Más información') }} Proximas Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proximasCitas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Paciente Id:</strong>
                                    <a href="{{ route('pacientes.show', $proximasCita->paciente_id) }}">{{ $proximasCita->paciente_id }}</a>
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripción:</strong>
                                    {{ $proximasCita->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Copago:</strong>
                                    {{ $proximasCita->copago }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha cita:</strong>
                                    {{ $proximasCita->fechaCita }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
