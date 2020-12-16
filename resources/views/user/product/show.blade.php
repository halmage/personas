@extends('layouts.app')

@section('content')
	@component('components._card-xl')
		@slot('title', 'articulo: '.$product->name )
		<div class="row">
			<div class="col-md-6">				
				<img src="{{ $product->image == null ? asset('img/warning/no-hay-foto.jpg') : 
                             $product->image }}" 
					 class="shadow"                             
					 width="500" 
					 height="500">
			</div>
			<div class="col-md-6">
				<p class="lead d-flex justify-content-between"> 
					codigo: {{ $product->code }}
					<span class="text-primary">
						tags: #{{ $product->tags->pluck('name')->implode(" #") }}
				    </span>
				</p>
				<p class="text-justify lead">
					{{ $product->content }}
				</p>	
				<small>
					<a href="{{ route('user-product.index') }}" class="d-flex justify-content-center text-uppercase lead">
						<--- ir atras
					</a>			
				</small>
			</div>			
		</div>
	@endcomponent
@endsection