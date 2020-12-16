@extends('layouts.app')

@section('content')
	@component('components._card-xl')
		@slot('title', 'productos')
		<div class="row d-flex justify-content-md-center">
		@foreach($products as $product)
			<div class="shadow img-thumbnail p-2 my-3 mx-3 col-md-5">
				<h3 class="ml-2 display-5 text-uppercase">
					{{ $product->name }}
			    </h3>
				<img src="{{ $product->image == null ? asset('img/warning/no-hay-foto.jpg') : 
                             $product->image }}"
                     class="shadow" 
					 width="412" 
                     height="350"
				>
				<p class="mt-2 text-justify">
					{{ $product->content }} <a href="{{ route('user-product.show',$product->id) }}"><i>Ver más</i></a>
					<br>
					<span class="d-flex justify-content-end text-primary">
						#{{ $product->tags->pluck('name')->implode(' #') }}
					</span>
				</p>
			</div>
		@endforeach
		</div>
	@endcomponent
@endsection