<?php

namespace App\Repositories\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/* Importando modelos */
use App\User;
use App\Models\Answer;
use Spatie\Permission\Models\Role;

class AuthRepositories implements AuthInterface{
	
	/*
	*-------------------------------
	*	session RegisterController	|
	* ------------------------------
	 */

	/* Registrando usuarios */
	public function createdUser($data){
		$user = new User();
		$user->identify = $data['identify'];
		$user->name = $data['name'];
		$user->last_name = $data['last_name'];
		$user->email = $data['email'];
		$user->password = bcrypt($data['password']);
		$user->save();
		$user->assignRole('user');
		return $user;
	}

	/* Guardando respuestas del usuario */
	public function createdAnswers($request,$user){
		$answer = Answer::create([
            'user_id' => $user->id,
            'question1' => $request->input('question1'),
            'question2' => $request->input('question2'),
            'question3' => $request->input('question3'),
            'answer1' => $request->input('answer1'),
            'answer2' => $request->input('answer2'),
            'answer3' => $request->input('answer3')
        ]);

        $user->answer_id = $answer->id;
        $user->save();
	}

	/*
	*------------------------------------
	*	session ResetPasswordController	|
	* -----------------------------------
	 */

	/* buscando preguntas de seguridad */
	public function findAswers($request,$user){
		return $user->answer->where([ 'answer1'=>$request->input('answer1'),
                               'answer2'=>$request->input('answer2'),
                               'answer3'=>$request->input('answer3'),
                             ])->first();
	}

	/* Actualizando clave del usuario */
	public function updatedPassword($request,$user){
		$user->update(['password' => bcrypt($request->input('password'))]); 
	}

}