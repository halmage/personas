@extends('layouts.admin-layout')

@section('content')
	@component('components._card')
		@slot('title','restablecer contraseña')
			<form action="{{ route('config.password-restored') }}" method="POST" novalidate>
				@csrf
				<div class="form-group col-6 offset-3">
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
				    <div class="form-group col">
				      <label for="password" class="text-uppercase">Ingrese nueva contraseña</label>
				      <input type="password" 
						     id="password" 
							 name="password" 
				      		 class="form-control @error('password') is-invalid @enderror" 
				      		 placeholder="nueva contraseña">
				      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
				    </div>
				    <div class="form-group col">
				      <label for="password_confirmation" class="text-uppercase">confirmar contraseña</label>
				      <input type="password" 
				      		 id="password_confirmation" 
							 name="password_confirmation" 
				      		 class="form-control" 
				      		 placeholder="confirmar contraseña">
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