<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ResetDataController extends Controller
{
    public function resetData(){
    	return view('config.reset-data',['user' => Auth::user()]);
    }

    public function resetDataRestored(Request $request){
    	$validator = Validator::make($request->all(), [
            'password_old' => 'required|string|min:8', 
			'identify' => 'required|string|min:8|unique:users,identify,'.Auth::user()->id,
			'name' => 'required|string|min:8',
			'last_name' => 'required|string|min:8',
			'email' => 'required|string|min:8|unique:users,email,'.Auth::user()->id           
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } // Fin de if
    }
}
