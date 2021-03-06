<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/clave', 'Auth\ForgotPasswordController@sendResetPassword')->name('password.clave');

Route::get('password/reset/confirmar-respuestas/{user}', 'Auth\ResetPasswordController@confirmAnswers')->name('password.confirm-answers');

Route::get('password/show-reset-form/{user}', 'Auth\ResetPasswordController@showResetForm')->name('password.show-reset-form');

Route::post('password/clave-restablacida/{user}','Auth\ResetPasswordController@passwordRestored')->name('password.password-restored');

Route::get('/home', 'HomeController@index')->name('home');
