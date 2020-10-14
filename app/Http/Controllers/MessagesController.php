<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/* Importando modelo */
use App\User;

class MessagesController extends Controller
{
    public function passwordReset(User $user){
    	return view('messages.auth.password-reset', ['user' => $user]);
    }
}
