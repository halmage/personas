<?php

namespace App\Http\Requests\Config;

use Illuminate\Foundation\Http\FormRequest;

class ResetQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password_old' => 'required|string', 
            'question1' => 'required|string',     
            'question2' => 'required|string',     
            'question3' => 'required|string',     
            'answer1' => 'required|string',     
            'answer2' => 'required|string',     
            'answer3' => 'required|string'
        ];
    }
}
