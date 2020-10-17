<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/* Importando modelos */
use App\User;

class ErrorsController extends Controller
{
	/* Error de preguntas de seguridad */
    public function questionSegurity($user){    	    	
    	return view('errors.question-segurity',['user' => User::find($user)]);
    }

    /* Error de restablecimiento de contraseña */
    public function passwordReset(User $user){
    	return view('errors.reset-password',['user' => Auth::user()]);
    }
}
