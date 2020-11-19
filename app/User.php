<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar','id','identify','name','last_name','email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * [boot description]
     */
    protected static function boot()
    {  
        parent::boot();

        static::deleting(function($user)
        {            
            $image_path = str_replace('storage', 'public', $user->avatar);
            Storage::delete($image_path);
        });
    } 

    public function answer(){
        return  $this->hasOne('App\Models\Answer');
    }
}
