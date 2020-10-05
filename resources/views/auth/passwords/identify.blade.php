@extends('layouts.app')
@section('content')
    @component('components._card')
        @slot('title','Restablecer contraseña')
        <form method="POST" action="{{ route('password.clave') }}">
            @csrf
            <div class="form-group row">
                <label for="identify" class="col-md-4 col-form-label text-md-right">{{ __('cedula') }}</label>
                <div class="col-md-6">
                    <input id="identify" type="text" class="form-control @error('identify') is-invalid @enderror" name="identify" value="{{ old('identify') }}" required autocomplete="identify" autofocus>
                    @error('identify')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                        {{ __('confirmar') }}
                    </button>
                </div>
            </div>
        </form>
    @endcomponent
@endsection
