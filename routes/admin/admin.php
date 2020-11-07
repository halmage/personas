<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'Admin\DashboardController@index')->name('admin.index');

/* rutas del usuario */
include __DIR__ . './user.php';