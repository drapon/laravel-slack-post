<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entry', 'EntryController@index'); // 追加
Route::post('/entry', 'EntryController@entry'); // 追加
Route::get('/compleate', 'EntryController@compleate'); // 追加
