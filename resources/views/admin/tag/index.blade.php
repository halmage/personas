@extends('layouts.admin-layout')

@section('content')
	
	@component('components._card-xl')
		@slot('title','administración de usuario')
		@include('admin.tag.partials.modal_create')
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>		      
		      <th scope="col">opciones</th>	
		    </tr>
		  </thead>
		  <tbody>
				@foreach($tags as $tag)
				    <tr>
				      <th scope="row">{{ $tag->id }}</th>
				      <td>{{ $tag->name }}</td>
				      <td>
				      	@include('admin.tag.partials.modal_update')
				      	@include('admin.tag.partials.modal_delete')
				      </td>
				    </tr>
				@endforeach
		  </tbody>
		</table>
	@endcomponent
@endsection