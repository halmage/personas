<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'tag'],function(){
	/* inicio de la sessión de tag */
	Route::get('/', 'Admin\TagController@index')->name('tag.index');	
	// /* Guardando información del tag */
	// Route::post('/store', 'Admin\TagController@store')->name('tag.store');
	// /* Eliminando tag */
	// Route::delete('/destroy/{tag}','Admin\TagController@destroy')->name('tag.destroy');
	// /* Actualizar tag */
	// Route::put('/updated/{tag}', 'Admin\TagController@updated')->name('tag.updated');
});