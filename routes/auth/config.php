<?php

use Illuminate\Support\Facades\Route;

/* configuración de resetear contraseña */
Route::get('/password-reset', 'Config\PasswordResetController@passwordReset')
	   ->name('config.password-reset');