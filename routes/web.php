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

Route::get('/', 'views\front\HomeController@index')->name('home');
Route::get('logout', 'views\front\AuthController@logout')->name('logout');
Route::get('services', 'views\front\ModuleController@index');
Route::get('finder', 'views\front\LostController@index');
Route::get('statement', 'views\front\HomeController@statement');
Route::get('{slug}', 'views\front\PageController@show');
