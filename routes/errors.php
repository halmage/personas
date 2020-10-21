<?php

use Illuminate\Support\Facades\Route;

Route::get('/preguntas-seguridad/{user}', 'ErrorsController@questionSegurity')->name('errors.question-segurity');

Route::get('/clave-restablecida', 'ErrorsController@changeData')
	 ->name('errors.change-data');