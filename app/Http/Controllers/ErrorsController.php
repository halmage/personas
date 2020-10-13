<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ErrorsController extends Controller
{
    public function passwordReset($user){    	    	
    	return view('errors.reset-password',['user' => User::find($user)]);
    }
}
