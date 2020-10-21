<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/* Importando request */
use App\Http\Requests\Config\ResetPasswordRequest;

class PasswordResetController extends Controller
{
    /* vista de configuracion de restablecimiento de contraseña */
    public function passwordReset(){
    	return view('config.password-reset');
    }   

    /* Restaurando la contraseña */
    public function passwordRestored(ResetPasswordRequest $request){

    	if(Helper::verifyPassword($request)){
    		auth::user()->update([ 'password' => bcrypt($request->input('password')) ]);
    		return redirect()->route('messages.change-data');
    	}
    	return redirect()->route('errors.change-data');
    }
}
