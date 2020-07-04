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

Route::get('/pertanyaan', 'questionsController@index');
Route::get('/pertanyaan/create', 'questionsController@create');
Route::post('/pertanyaan', 'questionsController@store');

Route::get('/jawaban/{pertanyaan_id}', 'answersController@show');

Route::get('/jawaban', 'answersController@index');
Route::get('/jawaban/create', 'answersController@create');
Route::post('/jawaban', 'answersController@store');

