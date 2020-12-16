<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'product'],function(){
	/* inicio de la sessión de productos */
	Route::get('/', 'Admin\ProductController@index')->name('admin-product.index');
	/* sessión de crear productos */
	Route::get('/create', 'Admin\ProductController@create')->name('admin-product.create');	
	/* Guardando información del producto */
	Route::post('/store', 'Admin\ProductController@store')->name('admin-product.store');
	/* visualizar perfil del usuario */
	Route::get('/show/{product}', 'Admin\ProductController@show')->name('admin-product.show');
	/* Eliminar usuario */
	Route::delete('/destroy/{product}','Admin\ProductController@destroy')->name('admin-product.destroy');
	/* Redireccionar a la pagina de editar usuario */
	Route::get('/edit/{product}','Admin\ProductController@edit')->name('admin-product.edit');
	/* Actualizar usuario */
	Route::put('/updated/{product}', 'Admin\ProductController@updated')->name('admin-product.updated');
});