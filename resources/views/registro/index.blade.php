@extends('layouts.app')

@section('template_title')
Registros
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
                            <strong>{{ __('Registros') }}</strong>
                        </span>
                        @if (Auth::check())
                        @if (Auth::user()->rol_id == "Admin")
                        <div class="float-right">
                            <a href="{{ route('registros.create') }}" class="btn btn-success btn-sm float-right" data-placement="left">
                                {{ __('Crear registro') }}
                            </a>
                        </div>
                        @endif
                        @endif
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

                                    <th>Paciente Id</th>
                                    <th>Mediocomunicacion</th>
                                    <th>Descripcion</th>
                                    <th>Fecharegistro</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registros as $registro)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $registro->paciente_id }}</td>
                                    <td>{{ $registro->medioComunicacion }}</td>
                                    <td>{{ $registro->descripcion }}</td>
                                    <td>{{ $registro->fechaRegistro }}</td>

                                    <td>
                                        <form action="{{ route('registros.destroy', $registro->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('registros.show', $registro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            @if (Auth::check())
                                            @if (Auth::user()->rol_id == "Admin")
                                            <a class="btn btn-sm btn-success" href="{{ route('registros.edit', $registro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
            {!! $registros->withQueryString()->links() !!}
        </div>
    </div>
</div>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif