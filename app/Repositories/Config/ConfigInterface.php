<?php

namespace App\Repositories\Config;

interface ConfigInterface{	
	public function findUser();
	public function updatedPassword($request);
	public function updatedData($request);
	public function allQuestions();
	public function updatedQuestionSecurity($request);
}