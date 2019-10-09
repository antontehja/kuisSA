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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', 'todoController@index')->name('todoIndex');
Route::get('/todo/new', 'todoController@new_form')->name('todoNewForm');
Route::get('/todo/edit/{id}', 'todoController@edit_form');

Route::post('/todo', 'todoController@save')->name('todoCreate');
Route::post('/todo/update', 'todoController@update');

Route::get('/todo/delete/{id}', 'todoController@delete_form');
Route::get('/todo/finished', 'todoController@index_finished')->name('todoFinished');
