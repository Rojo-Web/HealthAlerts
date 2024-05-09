@extends('layouts.app')

@section('template_title')
    Pacientes
@endsection
@if (Auth::check())
@if (Auth::user()->rol_id == "Admin")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <strong>{{ __('Pacientes') }}</strong>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir paciente') }}
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

									<th >Cedula</th>
									<th >Name</th>
									<th >Celular</th>
									<th >Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $paciente->cedula }}</td>
										<td >{{ $paciente->name }}</td>
										<td >{{ $paciente->celular }}</td>
										<td >{{ $paciente->email }}</td>

                                            <td>
                                                <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show', $paciente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit', $paciente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pacientes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No tienes permisos para entrar a esta pagina</h1>
@endsection
@endif
@else
@section('content')
<h1 style="text-align: center; color:black;margin-top:300px;">No estas loguead@</h1>
@endsection
@endif
