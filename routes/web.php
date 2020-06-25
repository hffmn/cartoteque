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

Route::middleware('guest')->group(function () {
  Route::get('/register', 'UserController@registerPage');
  Route::post('/register', 'UserController@registerUser');
  Route::get('/login', 'UserController@loginPage')->name('login');
  Route::post('/login', 'UserController@authUser');

});

Route::get('/services', 'ServiceController@index');
Route::get('/services/add', 'ServiceController@addServicePage');
Route::post('/services/add', 'ServiceController@addService');