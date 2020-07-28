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

Route::get('/', function () {
    return view('home');
});

Route::get('/properties', 'Property@index');
Route::get('/property/create', 'Property@create');
Route::get('/join', 'UserController@create');
Route::post('/register', 'UserController@Register');

Route::get('/admin', 'UserController@admin');
