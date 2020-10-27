<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'Admin\AdminController@index')->name('admin.index');