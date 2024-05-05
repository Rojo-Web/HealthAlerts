@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? __('Show') . " " . __('Registro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('registros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Paciente Id:</strong>
                                    {{ $registro->paciente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Mediocomunicacion:</strong>
                                    {{ $registro->medioComunicacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $registro->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecharegistro:</strong>
                                    {{ $registro->fechaRegistro }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
