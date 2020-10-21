<?php

use Illuminate\Support\Facades\Route;

Route::get('/clave-restablacida', 'MessagesController@changeData')->name('messages.change-data');