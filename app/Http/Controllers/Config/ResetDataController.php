<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Helper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/* Importando request */
use App\Http\Requests\Config\ResetDataRequest;

/* Importando repositories */
use App\Repositories\Config\ConfigRepositories;

class ResetDataController extends Controller
{
    public function __construct(ConfigRepositories $user)
    {
        $this->user = $user;
    }

    public function resetData(){
        switch(Auth::user()->roles()->first()->name){
           case 'admin':
    	       return view('admin.config.reset-data',['user' => $this->user->findUser()]);
                                break;
        }
    }

    public function resetDataRestored(ResetDataRequest $request){
        if( Helper::verifyPassword($request) ){
            $this->user->updatedData($request);
            return redirect()->route('messages.change-data');
        }
        return redirect()->route('errors.change-data');
    }
}
