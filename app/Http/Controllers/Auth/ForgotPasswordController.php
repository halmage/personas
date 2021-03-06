<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

/* Llamando los modelos */
use App\User;
use App\Models\Question;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
   
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.identify');
    }

    public function sendResetPassword(Request $request){
        $user = User::where('identify',$request->input('identify'))->first();
        if($user){
            return view('auth.passwords.reset',['user' =>$user,
                                                'question1' =>Question::find($user->answer->question1),
                                                'question2' =>Question::find($user->answer->question2),
                                                'question3' =>Question::find($user->answer->question3)
                                                ]);
        }
    }
}
