@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title','dashboard del admin')
		{{-- primera imagen del dashboard --}}
		<div class="media my-3">
		  <img src="{{ asset('img/admin/dashboard/concepto-configuracion-sitio-web-diseno-plano-personajes_23-2148298381.jpg') }}" class="mr-3" alt="concepto-configuracion-sitio-web-diseno-plano-personajes_23-2148298381.jpg" width="64" height="64">
		  <div class="media-body">
		    <h5 class="mt-0">Media heading</h5>
		    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  </div>
		</div>		
		{{-- segunda imagen del dashboard --}}
		<div class="media my-3">
		  <img src="{{ asset('img/admin/dashboard/concepto-configuracion-sitio-web-pagina-destino_52683-25353.jpg') }}" class="mr-3" alt="concepto-configuracion-sitio-web-pagina-destino_52683-25353.jpg" width="64" height="64">
		  <div class="media-body">
		    <h5 class="mt-0">Media heading</h5>
		    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  </div>
		</div>
		{{-- tercera imagen del dashboard --}}
		<div class="media">
		  <img src="{{ asset('img/admin/dashboard/concepto-configuracion-sitio-web-pagina-destino_52683-26995.jpg') }}" class="mr-3" alt="concepto-configuracion-sitio-web-pagina-destino_52683-26995.jpg" width="64" height="64">
		  <div class="media-body">
		    <h5 class="mt-0">Media heading</h5>
		    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		  </div>
		</div>	
	@endcomponent
@endsection