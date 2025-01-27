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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/person/create', 'PersonController@create');
Route::get('/person/log', 'PersonController@log');
Route::post('/person/store', 'PersonController@store');
Route::post('/log/store', 'LogController@store');
Route::get('/', 'IndexController@index');
Route::get('/admin', 'AdminController@index');


//Route::post('/location/store', 'PersonController@store');

Auth::routes();
