@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? __('Show') . " " . __('Paciente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pacientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Cedula:</strong>
                                    {{ $paciente->cedula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $paciente->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Celular:</strong>
                                    {{ $paciente->celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $paciente->email }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
