@extends('layouts.admin-layout')

@section('content')
	
	@component('components._card-xl')
		@slot('title','administración de productos')
		<a href="{{ route('admin-product.create') }}" class="btn btn-primary mb-2 float-right"> + crear producto</a>
		<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Codigo</th>
		      <th scope="col">Nombre</th>		      
		      <th scope="col">Tag</th>		      
		      <th scope="col">opciones</th>		      
		    </tr>
		  </thead>
		  <tbody>
				@foreach($products as $product)
				    <tr>
				      <th scope="row">{{ $product->id }}</th>
				      <td>{{ $product->code }}</td>
				      <td>{{ $product->name }}</td>
				      <td>{{ $product->tags()->pluck('name')->implode(' | ') }}</td>
				      <td>
				      	<a href="{{ route('admin-product.show',$product) }}" class="btn btn-primary"><li class="fas fa-eye"></li></a>
				      	<a href="{{ route('admin-product.edit',$product) }}" class="btn btn-warning"><li class="fas fa-edit"></li></a>
				      	@include('admin.product.partials.modal_delete')
				      </td>
				    </tr>
				@endforeach
		  </tbody>
		</table>
	@endcomponent
@endsection