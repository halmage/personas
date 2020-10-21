<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/* Importando modelo */
use App\User;

class MessagesController extends Controller
{
    public function changeData(){
    	return view('messages.auth.change-data');
    }
}
