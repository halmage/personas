<?php

use Illuminate\Support\Facades\Route;

/* configuración de resetear contraseña */
Route::get('/password-reset', 'Config\PasswordResetController@passwordReset')
	   ->name('config.password-reset');

Route::post('/password-restored','Config\PasswordResetController@passwordRestored')
	   ->name('config.password-restored');

/* configuración de cambiar datos */
Route::get('/reset-data', 'Config\ResetDataController@resetData')
	   ->name('config.reset-data');

Route::post('/reset-data-restored','Config\ResetDataController@resetDataRestored')
	   ->name('config.reset-data-restored');

/* configuración de cambiar datos */
Route::get('/reset-question', 'Config\ResetQuestionController@resetQuestion')
	   ->name('config.reset-question');

Route::post('/reset-quetion-restored','Config\ResetQuestionController@resetQuestionRestored')
	   ->name('config.reset-question-restored');
