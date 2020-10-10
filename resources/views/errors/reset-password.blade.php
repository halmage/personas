@extends('layouts.app')
@section('content')
	@component('components._card-error')
		@slot('title','error de preguntas')
		<h1>hola mundo</h1>
	@endcomponent
@endsection