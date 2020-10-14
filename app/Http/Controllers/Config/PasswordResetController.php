<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    public function passwordReset(){
    	return view('config.password-reset');
    }
}
