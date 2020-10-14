@extends('layouts.app')
@section('content')
	@component('components._card')
		@slot('title','Mensaje Extitoso')
		<p class="text-uppercase shadow p-3">
			{{ $user->name }} {{ $user->last_name }} miembro de la cedula identidad {{ $user->identify }} ha cambiado la contraseña exitosamente
		</p>
		<div class="d-flex justify-content-center">
			<a href={{ route('login') }} class="btn btn-lg btn-primary"> aceptar</a>
		</div>
	@endcomponent
@endsection