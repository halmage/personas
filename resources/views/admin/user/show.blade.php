@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title', 'Perfil de usuario')
		<div class="row mr-5 float-left">
			<div class="col-md-4">				
	    		<img src="{{ $user->avatar == null ? asset('img/warning/no-hay-foto.jpg') : 
	    				 $user->avatar }}" 
	    		class="image-avatar">	    		
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
		    	<p class="lead">Cedula: {{ $user->identify }}</p>
	    	</div>
	    	<div class="col-md-4">
	    		<p class="lead">Nombre: {{ $user->name }}</p>
	    	</div>
	    	<div class="col-md-4">
	    		<p class="lead">Apellido: {{ $user->last_name }}</p>
	    	</div>	  
	    	<div class="col-md-4">
		    	<p class="lead">Apellido: {{ $user->last_name }}</p>
	    	</div>	    	
	    	<div class="col-md-8">
    			<p class="lead">Apellido: {{ $user->email }}</p>
	    	</div>
	    	<div class="col-md-4">
	    		<p class="lead">Tipo: {{ $user->roles()->pluck('name')->implode(', ') }}</p>
	    	</div>
	    	<div class="w-100"></div>
	    	<div class="offset-4 mt-4">
	    		<a href="{{ route('user.index') }}" class="btn btn-lg btn-dark">volver</a>
	    	</div>
		</div>
	@endcomponent
@endsection