<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/* Importando request */
use App\Http\Requests\Config\ResetDataRequest;

class ResetDataController extends Controller
{
    public function resetData(){
    	return view('config.reset-data',['user' => Auth::user()]);
    }

    public function resetDataRestored(ResetDataRequest $request){
        if(Helper::verifyPassword($request)){
            auth::user()->update([ 'identify' => $request->input('identify'),
                                   'name' => $request->input('name'),
                                   'last_name' => $request->input('last_name'),
                                   'email' => $request->input('email')
                                 ]);
            return redirect()->route('messages.change-data');
        }
        return redirect()->route('errors.change-data');
    }
}
