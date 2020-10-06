<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = [
    	'user_id', 'question1', 'question2', 'question3', 'answer1', 'answer2', 'answer3'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
