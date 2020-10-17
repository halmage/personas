<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends Controller
{
    /* vista de configuracion de restablecimiento de contraseña */
    public function passwordReset(){
    	return view('config.password-reset');
    }   

    /* Restaurando la contraseña */
    public function passwordRestored(Request $request){
    	$validator = Validator::make($request->all(), [
            'password_old' => ['required', 'string', 'min:8'],            
            'password' => ['required', 'string', 'min:8', 'confirmed']            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } // Fin de if

    	if(Helper::verifyPassword($request)){
    		auth::user()->update([ 'password' => bcrypt($request->input('password')) ]);
    		return redirect()->route('messages.password-reset',['user' => Auth::user()]);
    	}
    	return redirect()->route('errors.password-reset',['user' => Auth::user()]);
    }
}
