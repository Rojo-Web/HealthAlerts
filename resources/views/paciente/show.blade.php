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
                    <div class="form-group mb-2 mb20" style="display: inline-flex; gap:10px;">
                        <strong>Acciones:</strong>
                        <a href="https://api.whatsapp.com/send?phone={{ $paciente->celular }}" class="btn btn-success btn-sm" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
