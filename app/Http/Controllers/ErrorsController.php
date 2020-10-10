<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    public function passwordReset(){
    	return view('errors.reset-password');
    }
}
