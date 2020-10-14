@extends('layouts.app')

@section('content')
    @component('components._card')
        @slot('title','restablecer contraseña')
            <div class="container shadow d-flex justify-content-between text-uppercase mb-3 col-10">
                <p>Usuario: {{$user->name}} {{ $user->last_name }}</p>
                <p>Cadula: {{ $user->identify }}</p>
            </div>
            <form method="POST" action="{{ route('password.password-restored',$user) }}" novalidate>
                @csrf
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('password_confirmation') }}</label>
                    <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password_confirmation">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-block btn-primary">
                            {{ __('Confirmar Contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
    @endcomponent
@endsection
