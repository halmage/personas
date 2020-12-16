<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'tag'],function(){
	/* inicio de la sessión de tag */
	Route::get('/', 'Admin\TagController@index')->name('admin-tag.index');	
	/* Guardando información del tag */
	Route::post('/store', 'Admin\TagController@store')->name('admin-tag.store');
	/* Eliminando tag */
	Route::delete('/destroy/{tag}','Admin\TagController@destroy')->name('admin-tag.destroy');
	/* Actualizar tag */
	Route::put('/updated/{tag}', 'Admin\TagController@update')->name('admin-tag.update');
});