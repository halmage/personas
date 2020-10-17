@extends('layouts.app')

@section('content')
	@component('components._card-xl')
		@slot('title','restablecer contraseña')
			<form action="{{ route('config.reset-data-restored') }}" method="POST" novalidate>
				@csrf
				<div class="form-group col-4 offset-4">
					<label for="password_old" class="text-uppercase">Ingrese contraseña antigua</label>
					<input type="password" 
						   id="password_old" 
						   name="password_old" 
						   class="form-control @error('password_old') is-invalid @enderror"
						   placeholder="contraseña antigua">
					@error('password_old')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">                	
					<div class="form-group col-md-4">
	                    <label for="identify" class="text-uppercase">{{ __('Cedula') }}</label>
	                    <input id="identify" 
	                    		type="text" 
	                    		class="form-control @error('identify') is-invalid @enderror" name="identify" 
	                    		value="{{ $user->identify }}" 
	                    		placeholder="cedula de identidad" 
	                    		required autocomplete="identify" 
	                    		autofocus>
	                    @error('identify')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
	                </div>
	                <div class="form-group col-md-4">
	                    <label for="name" class="text-uppercase">{{ __('Nombre') }}</label>
	                    <input id="name" 
	                    		type="text" class="form-control @error('name') is-invalid @enderror" 
	                    		name="name" 
	                    		value="{{ $user->name }}" 
	                    		placeholder="nombre de usuario" 
	                    		required autocomplete="name" 
	                    		autofocus>
	                    @error('name')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
	                </div>
	                <div class="form-group col-md-4">
	                    <label for="last_name" class="text-uppercase">{{ __('Apellido') }}</label>
	                    <input id="last_name" 
	                    		type="text" 
	                    		class="form-control @error('last_name') is-invalid @enderror" 
	                    		name="last_name" 
	                    		value="{{ $user->last_name }}" 
	                    		placeholder="apellido del usuario" 
	                    		required 
	                    		autocomplete="last_name" 
	                    		autofocus>

	                    @error('last_name')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
	                </div>
	                <div class="form-group col-md-4">
	                    <label for="email" class="text-uppercase">{{ __('Correo electronico') }}</label>
	                    <input id="email" 
	                    		type="email" 
	                    		class="form-control @error('email') is-invalid @enderror" 
	                    		name="email" 
	                    		value="{{ $user->email }}" 
	                    		placeholder="correo del usuario" 
	                    		required 
	                    		autocomplete="email">
	                    @error('email')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
	                    @enderror
	                </div>
				</div>
				<div class="d-flex justify-content-center my-2">
					<a href="{{ route('home') }}" class="btn btn-lg btn-dark text-uppercase mx-2">cancelar</a>
					<button type="submit" class="btn btn-lg btn-primary text-uppercase">
						confirmar
					</button>
				</div>
			</form>		
	@endcomponent
@endsection