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

Route::auth();

Route::get('/home', 'HomeController@index');



Route::get('ipinfos', 'IpinfosController@index');
Route::get('ipinfos/add', 'IpinfosController@add');
Route::get('ipinfos/{id}', 'IpinfosController@show');
Route::post('ipinfos', 'IpinfosController@store');
Route::get('ipinfos/{id}/edit', 'IpinfosController@edit');
Route::patch('ipinfos/{id}', 'IpinfosController@update');
Route::delete('/ipinfos/{id}', 'IpinfosController@destroy');

