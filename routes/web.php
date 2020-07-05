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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','PertanyaanController@index');

Route::get('back','PertanyaanController@back');

Route::get('create','PertanyaanController@create');

Route::post('insert', 'PertanyaanController@insert');

Route::get('read/{id}','PertanyaanController@read');

Route::get('edit/{id}','PertanyaanController@edit');

Route::post('update/{id}', 'PertanyaanController@update');

Route::get('delete/{id}','PertanyaanController@delete');
