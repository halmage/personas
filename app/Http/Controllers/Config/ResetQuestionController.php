<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/* Importando request */
use App\Http\Requests\Config\ResetQuestionRequest;

/* Importando modelos */
use App\Models\Question;

class ResetQuestionController extends Controller
{
    public function resetQuestion(){
    	return view("config.reset-question",['questions' => Question::all()]);
    }

    public function resetQuestionRestored(ResetQuestionRequest $request){
        if(Helper::verifyPassword($request)){
            auth::user()->answer->update([ 'question1' => $request->input('question1'),
                                   'question2' => $request->input('question2'),
                                   'question3' => $request->input('question3'),
                                   'answer1' => $request->input('answer1'),
                                   'answer2' => $request->input('answer2'),
                                   'answer3' => $request->input('answer3'),
                                 ]);
            return redirect()->route('messages.change-data');
        }
        return redirect()->route('errors.change-data');
    }
}
