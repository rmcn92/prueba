@extends('layout')

@section('contenido')
<h1>Contactanos</h1>
<h2>Escribeme</h2>

@if(session()->has('info'))
	<h3>{{ session('info') }}</h3>
@else

<form method="POST" action="{{ route('mensajes.store') }}">
	
	@include('messages.form', ['message' => new App\Message])

</form>

@endif

<hr>
@stop