<?php

use Illuminate\Support\Facades\Route;

Route::get('/clave-restablacida/{user}', 'MessagesController@passwordReset')->name('messages.password-reset');