@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title', 'crear usuario')
		 <form method="POST" action="{{ route('product.store') }}" novalidate enctype="multipart/form-data">
            @csrf
            <div class="row ml-5">
                <div class="form-group col-md-4">
                    <label for="code">{{ __('Codigo') }}</label>
                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>
                    @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>  

                <div class="w-100"></div>

                <div class="form-group col-md-4">
                    <label for="image">{{ __('Ingrese imagen') }}</label>
                    <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" required autocomplete="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>           
            </div>
            
            <div class="form-group">
                <div class="d-flex justify-content-center">
                	<a href="{{ route('user.index') }}" class="btn btn-lg btn-dark mx-2">
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