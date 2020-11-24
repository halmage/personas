@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title', 'crear usuario')
		 <form method="POST" action="{{ route('user.updated',$user) }}" novalidate enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="identify">{{ __('Cedula') }}</label>
                    <input id="identify" 
                           type="text" 
                           class="form-control @error('identify') is-invalid @enderror" 
                           name="identify" 
                           value="{{ $user->identify }}" 
                           required 
                           autocomplete="identify" 
                           autofocus>
                    @error('identify')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" 
                           type="text" 
                           class="form-control @error('name') is-invalid @enderror" 
                           name="name" 
                           value="{{ $user->name }}" 
                           required autocomplete="name" 
                           autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="last_name">{{ __('Apellido') }}</label>
                    <input id="last_name" 
                           type="text"
                           class="form-control @error('last_name') is-invalid @enderror" 
                           name="last_name" 
                           value="{{ $user->last_name }}" 
                           required autocomplete="last_name" 
                           autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="email">{{ __('Correo electronico') }}</label>
                    <input id="email" 
                           type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           name="email" 
                           value="{{ $user->email }}" 
                           required 
                           autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4 offset-4">
                    <label id="roles[]">Roles</label>
                    <div class="w-100"></div>
                    @foreach ($roles as $id => $name)
                    <input type="checkbox" name="roles[]" value="{{ $id }}" {{ empty($user) ? '' : $user->roles()->pluck('id')->contains($id) ? 'checked' : '' }}> {{ $name }}
                    <div class="w-100"></div>
                    @endforeach
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