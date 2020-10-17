<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ResetsPasswords;

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
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    
    public function confirmAnswers(Request $request, User $user)
    {
        $answer =$user->answer->where(['answer1'=>$request->input('answer1'),
                                 'answer2'=>$request->input('answer2'),
                                 'answer3'=>$request->input('answer3'),
                                ])->first();
        if($answer){
            return redirect()->route('password.show-reset-form',$user);   
        }
        return redirect()->route('errors.question-segurity',$user);
    }

    public function showResetForm($user)
    {        
        return view('auth.passwords.show-reset-form',['user' => User::find($user)]);
    }

    public function passwordRestoredValidator($request){
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed']            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } // Fin de if
    }

    public function passwordRestored(Request $request,User $user){
        self::passwordRestoredValidator($request);
        $user->update(['password' => bcrypt($request->input('password'))]); 
        return redirect()->route('messages.password-reset',['user' => $user]);
    }

}
