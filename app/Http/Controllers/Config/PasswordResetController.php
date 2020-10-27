<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/* Importando request */
use App\Http\Requests\Config\ResetPasswordRequest;

/* Importando repositories */
use App\Repositories\Config\ConfigRepositories;

class PasswordResetController extends Controller
{
    public function __construct(ConfigRepositories $user)
    {
        $this->user = $user;
    }

    /* vista de configuracion de restablecimiento de contraseña */
    public function passwordReset(){
    	return view('config.password-reset');
    }   

    /* Restaurando la contraseña */
    public function passwordRestored(ResetPasswordRequest $request){
    	if(Helper::verifyPassword($request)){
    		$this->user->updatedPassword($request);
    		return redirect()->route('messages.change-data');
    	}
    	return redirect()->route('errors.change-data');
    }
}
