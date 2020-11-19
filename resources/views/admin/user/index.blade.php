@extends('layouts.admin-layout')

@section('content')
	
	@component('components._card-xl')
		@slot('title','administración de usuario')
		<a href="{{ route('user.create') }}" class="btn btn-primary mb-2 float-right"> + crear usuario</a>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Cedula</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Tipo</th>		      
		      <th scope="col">opciones</th>		      
		    </tr>
		  </thead>
		  <tbody>
				@foreach($users as $user)
				    <tr>
				      <th scope="row">{{ $user->id }}</th>
				      <td>{{ $user->identify }}</td>
				      <td>{{ $user->name }}</td>
				      <td>{{ $user->last_name }}</td>
				      <td>{{ $user->roles()->pluck('name')->implode(', ') }}</td>
				      <td>
				      	<a href="{{ route('user.show',$user) }}" class="btn btn-primary"><li class="fas fa-eye"></li></a>
				      	<a href="{{ route('user.edit',$user) }}" class="btn btn-warning"><li class="fas fa-edit"></li></a>
				      	@include('admin.user.partials.modal_delete')
				      </td>
				    </tr>
				@endforeach
		  </tbody>
		</table>
	@endcomponent
@endsection