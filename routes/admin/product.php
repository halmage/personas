<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'product'],function(){
	/* inicio de la sessión de productos */
	Route::get('/', 'Admin\ProductController@index')->name('product.index');
	/* sessión de crear productos */
	Route::get('/create', 'Admin\ProductController@create')->name('product.create');	
	/* Guardando información del producto */
	Route::post('/store', 'Admin\ProductController@store')->name('product.store');
	/* visualizar perfil del usuario */
	Route::get('/show/{product}', 'Admin\ProductController@show')->name('product.show');
	/* Eliminar usuario */
	Route::delete('/destroy/{product}','Admin\ProductController@destroy')->name('product.destroy');
	/* Redireccionar a la pagina de editar usuario */
	Route::get('/edit/{product}','Admin\ProductController@edit')->name('product.edit');
	/* Actualizar usuario */
	Route::put('/updated/{product}', 'Admin\ProductController@updated')->name('product.updated');
});