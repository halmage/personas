<?php

use Illuminate\Support\Facades\Route;

Route::get('restablecer-clave', 'ErrorsController@passwordReset')->name('errors.password-reset');