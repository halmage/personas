<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'User\DashboardController@index')->name('user.index');

/* rutas de los usuario */
include __DIR__ . './product.php';