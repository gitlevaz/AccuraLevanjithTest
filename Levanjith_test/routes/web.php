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

 

Route::get('/home', function () {
    return view('home');
});
Route::get('/','TaskController@table');
Route::get('viewdata', 'TaskController@viewdata');
Route::get('add', 'TaskController@add');
Auth::routes();
Route::get('/edit','TaskController@edit');
Route::get('/delete/{id}','TaskController@delete');
Route::get('/table','TaskController@table');
Route::POST('add_available', 'TaskController@addAvailable');
Route::get('get-clients','TaskController@getclients');
Route::get('get-client-id/{id}','TaskController@getclientid');
Route::post('change-client','TaskController@changeclient');
Route::get('client-del/{id}','TaskController@clientdel');
