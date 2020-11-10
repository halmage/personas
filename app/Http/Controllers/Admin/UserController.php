<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* Importación de modelos */
use App\User;

class UserController extends Controller
{
    public function index(){    	
    	return view('admin.user.index',[
    		'users' => User::all()
    	]);
    }
}
