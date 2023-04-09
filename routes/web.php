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
    return view('welcome');
});

Route::get('index', 'UserController@index')->name('index');
Route::get('registration', 'UserController@registration')->name('registration');
Route::get('login', 'UserController@login')->name('login');
Route::get('lk', 'UserController@lk')->name('lk');

Route::get('select_or_create', 'UserController@selectOrCreate');

Route::get('update_or_create', 'UserController@updateOrCreate');



