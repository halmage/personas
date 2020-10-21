@extends('layouts.app')
@section('content')
	@component('components._card-error')
		@slot('title','mensaje de error')
		<p class="text-uppercase shadow p-3">
			se ha equivocado en el ingreso de su clave de seguridad
		</p>
		<div class="d-flex justify-content-center">
			<a href={{ route('home') }} class="btn btn-lg btn-danger"> aceptar</a>
		</div>
	@endcomponent
@endsection