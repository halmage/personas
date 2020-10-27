@extends('layouts.app')
@section('content')
    @component('components._card')
        @slot('title','iniciar sessión')
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label for="identify" class="col-md-4 col-form-label text-md-right">{{ __('cedula') }}</label>

                <div class="col-md-6">
                    <input id="identify" 
                            type="identify" 
                            class="form-control @error('identify') is-invalid @enderror" 
                            name="identify" 
                            value="{{ old('identify') }}" 
                            required 
                            autocomplete="identify" 
                            autofocus>

                    @error('identify')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                <div class="col-md-6">
                    <input id="password" 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            name="password" 
                            required 
                            autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Iniciar sessión') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Recuperar contraseña?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    @endcomponent         
@endsection
