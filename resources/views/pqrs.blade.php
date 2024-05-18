@extends('layouts.app')

@section('template_title')
    @auth
        PQRS
    @else
        {{ config('app.name', 'Laravel') }}
    @endauth
@endsection
@section('content')
<h1>PQRS</h1>



<form action="{{ route('pqrs.store')}}" method="POST">
    @csrf
    <select class="form-select" name="tipo">
        <option value="" selected disabled>Elegir ...</option>
        <option value="peticion">Petición</option>
        <option value="queja">Queja</option>
        <option value="reclamo">Reclamo</option>
        <option value="sugerencia">Sugerencia</option>
    </select>
    <br>
    @error('tipo')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <br>
    <div class="form-floating">
        <textarea class="form-control" name="texto" placeholder="Escríbenos" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">PQRS</label>
    </div>
    <br>
    @error('texto')
        <p><strong>{{$message}}</strong></p>
    @enderror
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>
@if (session('info'))
    <script>
        Swal.fire({
            title: "¡Mensaje Enviado!",
            text: "{{session('info')}}",
            icon: "success"
        });
    </script>
@endif
@endsection