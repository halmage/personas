<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user'],function(){
	/* inicio de la sessión de usuarios */
	Route::get('/', 'Admin\UserController@index')->name('user.index');
	/* sessión de crear usuario */
	Route::get('/create', 'Admin\UserController@create')->name('user.create');	
	/* Guardando información del usuario */
	Route::post('/store', 'Admin\UserController@store')->name('user.store');
	/* visualizar perfil del usuario */
	Route::get('/show/{user}', 'Admin\UserController@show')->name('user.show');
	/* Eliminar usuario */
	Route::delete('/destroy/{user}','Admin\UserController@destroy')->name('user.destroy');
	/* Redireccionar a la pagina de editar usuario */
	Route::get('/edit/{user}','Admin\UserController@edit')->name('user.edit');
	/* Actualizar usuario */
	Route::put('/updated/{user}', 'Admin\UserController@updated')->name('user.updated');
});
