@extends('layouts.app')
@section('content')
    @component('components._card')
        @slot('title','preguntas de seguridad ')
            <div class="container shadow mt-1 mb-4 lead text-uppercase d-flex justify-content-lg-between">
                <p>
                    usuario: {{ $user->name }} {{ $user->last_name }}                    
                </p>
                <p>
                    cedula: {{ $user->identify }}
                </p>
            </div>
            <form action="{{ route('password.confirm-answers',$user) }}" method="Get">
                <div class="form-group row">
                    <label for="answer1" class="col-md-4 col-form-label text-md-right">¿{{ $question1->question }}?</label>

                    <div class="col-md-6">
                        <input id="answer1" type="text" class="form-control @error('answer1') is-invalid @enderror" name="answer1" required autocomplete="answer1" autofocus>

                        @error('answer1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="answer2" class="col-md-4 col-form-label text-md-right">¿{{ $question2->question }}?</label>

                    <div class="col-md-6">
                        <input id="answer2" type="text" class="form-control @error('answer2') is-invalid @enderror" name="answer2" required autocomplete="answer2" autofocus>

                        @error('answer2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="answer3" class="col-md-4 col-form-label text-md-right">¿{{ $question3->question }}?</label>

                    <div class="col-md-6">
                        <input id="answer3" type="text" class="form-control @error('answer3') is-invalid @enderror" name="answer3" required autocomplete="answer3" autofocus>

                        @error('answer3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-block btn-primary">
                            {{ __('Confirmar') }}
                        </button>
                    </div>
                </div>
            </form>
    @endcomponent
@endsection
