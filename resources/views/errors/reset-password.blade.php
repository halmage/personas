@extends('layouts.app')
@section('content')
	@component('components._card-error')
		@slot('title','error de preguntas')
		<h1>{{ $user->name }}</h1>
	@endcomponent
@endsection