@extends('layouts.app')

@section('template_title')
    Citas Pendientes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citas Pendientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citasPendientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create new') }}
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
									<th >Solicitud</th>
									<th >Fechasolicitud</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citasPendientes as $citasPendiente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

										<td >{{ $citasPendiente->paciente_id }}</td>
										<td >{{ $citasPendiente->descripcion }}</td>
										<td >{{ $citasPendiente->Solicitud }}</td>
										<td >{{ $citasPendiente->fechaSolicitud }}</td>

                                            <td>
                                                <form action="{{ route('citasPendientes.destroy', $citasPendiente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citasPendientes.show', $citasPendiente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citasPendientes.edit', $citasPendiente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $citasPendientes->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
