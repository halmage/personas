<?php

namespace App\Repositories\Admin\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/* Importando modelos */
use App\User;
use App\Models\Answer;
use Spatie\Permission\Models\Role;

class UserRepositories implements UserInterface{
	
	/* Registrando usuarios */
	public function createdAnswer($request,$user){
		$answer = Answer::create([
			'user_id' => $user->id, 
			'question1' => $request->question1, 
			'question2' => $request->question2, 
			'question3' => $request->question3, 
			'answer1' => $request->answer1, 
			'answer2' => $request->answer2, 
			'answer3' => $request->answer3
		]);
		$user->answer_id = $answer->id;
		$user->save();
	}

	public function avatarStore($request)
	{
		if (!empty($request->file('avatar'))) {
    		$avatar = Storage::url($request->file('avatar')->store('avatar','public'));	
    	}else {
    		$avatar = null;
    	}
    	return $avatar;
	}

	/* Registrando usuarios */
	public function createdUser($request){
		$user = User::create([
			'avatar' => self::avatarStore($request),
			'identify' => $request->identify,
			'name' => $request->name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'password' => bcrypt($request->password)
		]);
		$user->roles()->attach($request->roles);		
		self::createdAnswer($request,$user);
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

    public function update($user,$request)
    {
        $user->update([
        	'avatar' => self::avatarUpdate($user,$request),
        	'identify' => $request->input('identify'),
        	'name' => $request->input('name'),
        	'last_name' => $request->input('last_name'),
        	'email' => $request->input('email')
        ]);
        $user->roles()->sync($request->roles);
    }

    public function allRoles(){
    	return Role::pluck('name','id');
    }
}