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

Route::get('/','HomeContreller@index');
Route::get('/about', 'HomeContreller@about');
Route::get('/contact', 'HomeContreller@contact');
Route::get('/user', 'UserContreller@index') ;
Route::get('/user/create', 'UserContreller@create');
Route::get('/user/{name}', 'UserContreller@ShowName');
Route::get('/user/{name}/{age}', 'UserContreller@ShowNameAndAge');


