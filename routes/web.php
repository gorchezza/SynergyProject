<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// СТАРЫЕ РОУТЫ
// Route::get('/', 'UserController@index')->name('index');
// Route::get('registration', 'UserController@registration')->name('registration');
// Route::get('login', 'UserController@login')->name('login');
// Route::get('lk', 'UserController@lk')->name('lk');

// Route::post('registration', 'Auth\RegisterController@validate')->name('registre');
// Route::post('lk', 'UserController@select')->name('lk.store');
// Route::get('select_or_create', 'UserController@selectOrCreate');

// Route::get('update_or_create', 'UserController@updateOrCreate');



Auth::routes();

Route::post('about', 'AboutController@get')->name('about');


Route::name('user.')->group(function(){
    Route::get('/', 'IndexController@index')->name('index');

    Route::get('private', 'PrivateController@getViewPrivate')->middleware('auth')->name('privateView');
    Route::get('registration', 'Auth\RegisterController@getViewRegistration')->name('registration');
    Route::get('login', 'Auth\LoginController@getViewLogin')->name('login'); 

    Route::post('private', 'PrivateController@getPrivate')->name('private');
    Route::post('registration', 'Auth\RegisterController@create')->name('register');
    Route::post('login', 'Auth\LoginController@login')->name('loginPost'); 

    Route::get('home', 'HomeController@index')->name('home');

    Route::get('logout', function(){
        Auth::logout();
        return redirect(route('user.index'));
    })->name('logout');
    
    
});
