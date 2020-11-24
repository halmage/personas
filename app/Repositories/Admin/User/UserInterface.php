<?php

namespace App\Repositories\Admin\User;

interface UserInterface{	
	
	public function createdAnswer($request,$user);

	public function avatarStore($request);
	
	public function createdUser($request);

	public function avatarUpdate($user,$request);

    public function update($user,$request);

    public function allRoles();

}