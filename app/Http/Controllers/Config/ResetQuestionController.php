<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/* Importando request */
use App\Http\Requests\Config\ResetQuestionRequest;

/* Importando repositories */
use App\Repositories\Config\ConfigRepositories;

class ResetQuestionController extends Controller
{

    public function __construct(ConfigRepositories $question)
    {
        $this->question = $question;
    }

    public function resetQuestion(){
    	return view("config.reset-question",['questions' => $this->question->allQuestions()]);
    }

    public function resetQuestionRestored(ResetQuestionRequest $request){
        if(Helper::verifyPassword($request)){
            $this->question->updatedQuestionSecurity($request);
            return redirect()->route('messages.change-data');
        }
        return redirect()->route('errors.change-data');
    }
}
