<?php

namespace App\Repositories\Config;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/* Importando modelos */
use App\Models\Question;

class ConfigRepositories implements ConfigInterface{

	/* busqueda de usario */
	public function findUser(){
		return Auth::user();
	}

	/* restaurar contraseña */
	public function updatedPassword($request){
		return auth::user()->update([ 'password' => bcrypt($request->input('password')) ]);
	}

	public function avatarUpdate($user,$request)
    {    	
        if (!empty($request->file('avatar'))) {
            $avatar = Storage::url($request->file('avatar')->store('avatar','public')); 
            $image_path = str_replace('storage', 'public', $user->avatar);
            Storage::delete($image_path);
        }else {
            $avatar = $user->avatar;
        }
        return $avatar;
    }

	/* restaurar datos */
	public function updatedData($request){
		return auth::user()->update([ 
									   'avatar' => self::avatarUpdate(auth::user(),$request),
									   'identify' => $request->input('identify'),
	                                   'name' => $request->input('name'),
	                                   'last_name' => $request->input('last_name'),
	                                   'email' => $request->input('email')
	                                ]);
	}

	/* restaurar pregunta de seguridad */
	public function allQuestions(){
		return Question::all();
	}

	public function updatedQuestionSecurity($request){
		return auth::user()->answer->update([ 'question1' => $request->input('question1'),
                                   'question2' => $request->input('question2'),
                                   'question3' => $request->input('question3'),
                                   'answer1' => $request->input('answer1'),
                                   'answer2' => $request->input('answer2'),
                                   'answer3' => $request->input('answer3'),
                                 ]);
	}
}