<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
          "avatar" => 'image|max:2048',
          "identify" => 'required|string|max:255', 
          "name" => 'required|string|max:255', 
          "last_name" => 'required|string|max:255', 
          "email" => 'required|string|email|max:255|unique:users',
          "password" => 'required|string|min:8|confirmed',
          "question1" => 'required|string',
          "question2" => 'required|string',
          "question3" => 'required|string',
          "answer1" => 'required|string|max:255',
          "answer2" => 'required|string|max:255',
          "answer3" => 'required|string|max:255',
          "roles" => ''
        ];
    }
}
