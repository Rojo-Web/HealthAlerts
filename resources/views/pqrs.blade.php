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
@endsection