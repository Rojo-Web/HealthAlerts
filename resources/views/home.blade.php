@extends('layouts.app')
@section('template_title')
    {{ config('app.name', 'Laravel') }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¡Bienvenido!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¿Que hay de nuevo?') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
