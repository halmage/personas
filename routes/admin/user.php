<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', 'Admin\UserController@index')->name('user.index');