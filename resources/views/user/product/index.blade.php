@extends('layouts.app')

@section('content')
	@component('components._card-xl')
		@slot('title', 'productos')
		<div class="row">
		@foreach($products as $product)
			<div class="shadow img-thumbnail p-2 col-md-4">
				<h3 class="ml-2 display-5 text-uppercase">
					{{ $product->name }}
			    </h3>
				<img src="{{ $product->image }}"
					 class="img-thumbnail" 
					 width="330" 
                     height="200"
				>
				<p class="mt-2 text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. <a href="#"><i>Ver más</i></a>
				</p>
			</div>
		@endforeach
		</div>
	@endcomponent
@endsection