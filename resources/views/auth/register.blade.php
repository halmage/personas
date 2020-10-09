@extends('layouts.app')

@section('content')
    @component('components._card-xl')
        @slot('title','Registrarse')
        <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="identify">{{ __('Cedula') }}</label>
                    <input id="identify" type="text" class="form-control @error('identify') is-invalid @enderror" name="identify" value="{{ old('identify') }}" required autocomplete="identify" autofocus>
                    @error('identify')
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

                <div class="form-group col-md-4">
                    <label for="last_name">{{ __('Apellido') }}</label>
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="email">{{ __('Correo electronico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="password">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group col-md-4">
                    <label for="question1">{{ __('Primera Pregunta') }}</label>
                    <select id="question1" class="form-control @error('question1') is-invalid @enderror" name="question1" required>
                        <option value="">-- Primera Pregunta --</option>
                        @foreach ($questions as $question)
                            <option value="{{ $question->id }}">{{ $question->question }}</option>
                        @endforeach
                    </select>
                    @error('question1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="question2">{{ __('Primera Pregunta') }}</label>
                    <select id="question2" class="form-control @error('question2') is-invalid @enderror" name="question2" required>
                        <option value="">-- Segunda Pregunta --</option>
                        @foreach ($questions as $question)
                            <option value="{{ $question->id }}">{{ $question->question }}</option>
                        @endforeach
                    </select>
                    @error('question2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="question3">{{ __('Tercera Pregunta') }}</label>
                    <select id="question3" class="form-control @error('question3') is-invalid @enderror" name="question3" required>
                        <option value="">-- Tercera Pregunta --</option>
                        @foreach ($questions as $question)
                            <option value="{{ $question->id }}">{{ $question->question }}</option>
                        @endforeach
                    </select>
                    @error('question3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="answer1">{{ __('Primera Respuesta') }}</label>
                    <input id="answer1" type="text" class="form-control @error('answer1') is-invalid @enderror" name="answer1" required autocomplete="answer1">
                    @error('answer1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="answer2">{{ __('Segunda Respuesta') }}</label>
                    <input id="answer2" type="text" class="form-control @error('answer2') is-invalid @enderror" name="answer2" required autocomplete="answer2">
                    @error('answer2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="answer3">{{ __('Tercera Respuesta') }}</label>
                    <input id="answer3" type="text" class="form-control @error('answer3') is-invalid @enderror" name="answer3" required autocomplete="answer3">
                    @error('answer3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>                
            </div>
            <div class="form-group">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>               
    @endcomponent
@endsection
