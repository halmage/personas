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
				      	<a href="#" class="btn btn-warning"><li class="fas fa-eye"></li></a>
				      	<a href="#" class="btn btn-danger"><li class="fas fa-trash"></li></a>
				      </td>
				    </tr>
				@endforeach
		  </tbody>
		</table>
	@endcomponent
@endsection