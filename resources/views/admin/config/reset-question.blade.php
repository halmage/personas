@extends('layouts.admin-layout')

@section('content')
	@component('components._card-xl')
		@slot('title','restablecer contraseña')
			<form action="{{ route('config.reset-question-restored') }}" method="POST" novalidate>
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

				<div class="d-flex justify-content-center my-2">
					<a href="{{ route('home') }}" class="btn btn-lg btn-dark text-uppercase mx-2">cancelar</a>
					<button type="submit" class="btn btn-lg btn-primary text-uppercase">
						confirmar
					</button>
				</div>
			</form>		
	@endcomponent
@endsection