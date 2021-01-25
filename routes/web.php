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

Route::get('/', 'UserController@welcome');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/vacancies', 'UserController@vacancies');

Route::get('/services', 'UserController@services');

Route::get('/candidates', 'UserController@candidates');

Route::post('/add_vacancy', 'VacancyController@store');
Route::post('/edit_vacancy/{id}', 'VacancyController@update');
Route::GET('/delete_vacancy/{id}', 'VacancyController@destroy');

Route::post('/contact_us', 'UserController@contact_us');
Route::post('/send_cv', 'UserController@send_cv');
