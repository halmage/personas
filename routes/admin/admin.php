<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', 'Admin\DashboardController@index')->name('admin.index');

/* rutas de los usuario */
include __DIR__ . './user.php';
/* rutas de los productos */
include __DIR__ . './product.php';
/* rutas de los tag */
include __DIR__ . './tag.php';