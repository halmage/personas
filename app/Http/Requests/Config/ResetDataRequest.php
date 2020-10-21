<?php

namespace App\Http\Requests\Config;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ResetDataRequest extends FormRequest
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
            'identify' => 'required|string|unique:users,identify,'.Auth::user()->id,
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|min:8|unique:users,email,'.Auth::user()->id   
        ];
    }
}
