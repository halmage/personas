<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['id','question'];

    public function user(){
        return  $this->belongsTo('App\User');
    }
}
