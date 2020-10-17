<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class Helper
{
    /**
     * verificar si la contraseña del usuario es valida
     *
     * @param string $request
     * @return void
     */
    public static function verifyPassword($request)
    {   
        if (password_verify($request->input('password_old'), Auth::user()->password)){
            return true;
        }        
        return false;
    } // Fin de setVerifyPassword
}
