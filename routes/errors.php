<?php

use Illuminate\Support\Facades\Route;

Route::get('restablecer-clave/{user}', 'ErrorsController@passwordReset')->name('errors.password-reset');