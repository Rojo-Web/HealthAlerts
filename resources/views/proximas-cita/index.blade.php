@extends('layouts.app')

@section('template_title')
    Proximas Citas
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
                                <strong>{{ __('Proximas Citas') }}</strong>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proximasCitas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir proxima cita') }}
                                </a>
                              </div>
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

									<th >Paciente Id</th>
									<th >Descripcion</th>
									<th >Copago</th>
									<th >Fechacita</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proximasCitas as $proximasCita)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $proximasCita->paciente_id }}</td>
										<td >{{ $proximasCita->descripcion }}</td>
										<td >{{ $proximasCita->copago }}</td>
										<td >{{ $proximasCita->fechaCita }}</td>

                                            <td>
                                                <form action="{{ route('proximasCitas.destroy', $proximasCita->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proximasCitas.show', $proximasCita->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proximasCitas.edit', $proximasCita->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proximasCitas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif