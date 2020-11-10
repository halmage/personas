@extends('layouts.admin-layout')

@section('content')
	
	@component('components._card-xl')
		@slot('title','administración de usuario')
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Cedula</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Correo</th>
		      <th scope="col">Tipo</th>		      
		    </tr>
		  </thead>
		  <tbody>
				@foreach($users as $user)
				    <tr>
				      <th scope="row">{{ $user->id }}</th>
				      <td>{{ $user->identify }}</td>
				      <td>{{ $user->name }}</td>
				      <td>{{ $user->last_name }}</td>
				      <td>{{ $user->email }}</td>
				      <td>{{ $user->roles()->pluck('name')->implode(', ') }}</td>
				    </tr>
				@endforeach
		  </tbody>
		</table>
	@endcomponent

@endsection