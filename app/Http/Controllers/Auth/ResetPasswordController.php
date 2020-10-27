<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

/* Importando repositorio */
use App\Repositories\Auth\AuthRepositories;

/* Importando request */
use App\Http\Requests\ResetPasswordRequest;

/* Importando modelos */
use App\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthRepositories $user)
    {
        $this->user = $user;
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    
    public function confirmAnswers(Request $request, User $user)
    {        
        if( $this->user->findAswers($request,$user) ){
            return redirect()->route('password.show-reset-form',$user);   
        }
        return redirect()->route('errors.question-segurity',$user);
    }

    public function showResetForm($user)
    {        
        return view('auth.passwords.show-reset-form',['user' => User::find($user)]);
    }

    public function passwordRestored(ResetPasswordRequest $request,User $user){
        $this->user->updatedPassword($request,$user);
        return redirect()->route('messages.change-data');
    }

}
