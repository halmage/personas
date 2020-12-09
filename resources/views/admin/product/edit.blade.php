@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title', 'editar producto')
		 <form method="POST" action="{{ route('product.updated',$product) }}" novalidate enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row ml-5">
                <div class="form-group col-md-4">
                    <label for="code">{{ __('Codigo') }}</label>
                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ $product->code }}" required autocomplete="code" autofocus>
                    @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="name">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  

                <div class="form-group col-md-4">
                    <label>Eliga tags</label>                     
                    @foreach($tags as $tag)
                        <div class="w-100"></div>                        <input type="checkbox" name="tags[]" id="tags" value="{{ $tag->id }}"> {{ $tag->name }}

                    @endforeach                  
                </div>

                <div class="w-100"></div>

                <div class="form-group col-md-4">
                   <label for="image">{{ __('Ingrese imagen') }}</label>
                    <div class="w-100"></div> 
                    <img src="{{ $product->image == null ? asset('img/warning/no-hay-foto.jpg') : 
                             $product->image }}" class="mb-2 img-thumbnail" width="100" height="100">
                    <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" required autocomplete="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>gdfgdf
                    @enderror
                </div>           
            </div>
            
            <div class="form-group">
                <div class="d-flex justify-content-center">
                	<a href="{{ route('product.index') }}" class="btn btn-lg btn-dark mx-2">
                		{{ __('Cancelar') }}
                	</a>
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>               
	@endcomponent
@endsection