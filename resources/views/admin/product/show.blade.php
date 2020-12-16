@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title', 'Perfil de producto')
		<div class="row mr-5 float-left">
			<div class="col-md-4">				
	    		<img src="{{ $product->image == null ? asset('img/warning/no-hay-foto.jpg') : 
	    				     $product->image }}" 
	    		class="image-avatar">	    		
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
		    	<p class="lead">codigo: {{ $product->code }}</p>
	    	</div>
	    	<div class="col-md-4">
	    		<p class="lead">Nombre: {{ $product->name }}</p>
	    	</div>	    	
	    	<div class="col-md-5">
	    		<p class="lead">tag: {{ $product->tags()->pluck('name')->implode(' | ') }}</p>
	    	</div>	
	    	<div class="col-md-12">
	    		<p class="lead">
	    			Contenido: {{ $product->content }}
	    		</p>
	    	</div>
	    	<div class="w-100"></div>
	    	<div class="offset-4 mt-4">
	    		<a href="{{ route('admin-product.index') }}" class="btn btn-lg btn-dark">volver</a>
	    	</div>
		</div>
	@endcomponent
@endsection