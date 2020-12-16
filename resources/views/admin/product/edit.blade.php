@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title', 'editar producto')
		 <form method="POST" action="{{ route('admin-product.updated',$product) }}" novalidate enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row d-flex justify-content-lg-between">
                <div class="col-md-6">                    
                    <div class="form-group col-md-12">
                        <label for="code">{{ __('Codigo') }}</label>
                        <input id="code" 
                               type="text" 
                               class="form-control 
                               @error('code') is-invalid @enderror" 
                               name="code" 
                               value="{{ $product->code }}" 
                               required 
                               autocomplete="code" 
                               autofocus>
                        @error('code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label for="name">{{ __('Nombre') }}</label>
                        <input id="name" 
                              type="text" 
                              class="form-control @error('name') is-invalid @enderror" 
                              name="name" 
                              value="{{ $product->name }}" 
                              required 
                              autocomplete="name" 
                              autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  

                    <div class="form-group col-md-12">
                        <label>Eliga un tag</label> 
                        <select class="form-control" name="tags[]" id="name" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>                    
                    </div>
                </div>

                <div class="col-md-6">                    
                    <div class="form-group col-md-12">
                        <label>Ingrese contenido</label>
                        <textarea class="form-control" id="content" name="content">
                            {{ $product->content }}
                        </textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="image">{{ __('Ingrese imagen') }}</label>
                        <div class="w-100"></div>
                        <img src="{{ $product->image === null ? asset('img/warning/no-hay-foto.jpg') : $product->image }}" 
                          class="mb-2 img-thumbnail" 
                          width="80" 
                          height="80">
                        <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" required autocomplete="image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>           

                    <div class="form-group col-md-12 mt-4">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('admin-product.index') }}" class="btn btn-lg btn-dark mx-2">
                                {{ __('Cancelar') }}
                            </a>
                            <button type="submit" class="btn btn-lg btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>               
	@endcomponent
@endsection