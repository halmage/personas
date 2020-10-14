@extends('layouts.app')
@section('content')
	@component('components._card-error')
		@slot('title','mensaje de error')
		<p class="text-uppercase shadow p-3">
			{{ $user->name }} {{ $user->last_name }} miembro de la cedula identidad {{ $user->identify }} se ha equivocado en el ingreso de las preguntas de seguridad
		</p>
		<div class="d-flex justify-content-center">
			<a href={{ route('login') }} class="btn btn-lg btn-danger"> aceptar</a>
		</div>
	@endcomponent
@endsection