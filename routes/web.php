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

Route::get('/', 'FrontViewController@index');


Route::get('/about', 'FrontViewController@about');
Route::get('/contact', 'FrontViewController@contact');
Route::get('/home', 'HomeController@index');
Route::get('/dashboard/home', 'BackEndController@home');
Route::post('/dashboard/{title}', 'BackEndController@updateHome');
Auth::routes();

