<?php

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

Route::get('/', 'QuestionController@index');
Route::get('/question/{question}', 'QuestionController@show');
Route::get('/new', 'QuestionController@new');
Route::post('/question', 'QuestionController@store');

Route::post('/answer', 'AnswerController@store');
