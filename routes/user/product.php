<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'product'],function(){
	/* inicio de la sessión de productos */
	Route::get('/', 'User\ProductController@index')
		 ->name('user-product.index');
	/* visaulizar caracteristicas del producto */
	Route::get('/{product}/show', 'User\ProductController@show')
		 ->name('user-product.show');
});