@extends('layouts.app')
@section('content')
    @component('components._card')
        @slot('title','preguntas de seguridad')
            <form action="{{ route('password.confirm-answers',$user) }}" method="Get">
                <div class="form-group row">
                    <label for="question1" class="col-md-4 col-form-label text-md-right">¿{{ $question1->question }}?</label>

                    <div class="col-md-6">
                        <input id="question1" type="text" class="form-control @error('question1') is-invalid @enderror" name="question1" required autocomplete="question1" autofocus>

                        @error('question1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="question2" class="col-md-4 col-form-label text-md-right">¿{{ $question2->question }}?</label>

                    <div class="col-md-6">
                        <input id="question2" type="text" class="form-control @error('question2') is-invalid @enderror" name="question2" required autocomplete="question2" autofocus>

                        @error('question2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="question3" class="col-md-4 col-form-label text-md-right">¿{{ $question3->question }}?</label>

                    <div class="col-md-6">
                        <input id="question3" type="text" class="form-control @error('question3') is-invalid @enderror" name="question3" required autocomplete="question3" autofocus>

                        @error('question3')
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
