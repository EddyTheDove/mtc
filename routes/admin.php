<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

Route::get('admin/login', 'views\admin\AuthController@login')->name('admin.login');
Route::post('admin/login', 'views\admin\AuthController@signin')->name('admin.signin');

Route::group(['prefix' => 'admin', 'middleware' => ['admin_auth', 'admin']], function() {

    Route::get('/', 'views\admin\AdminController@home')->name('admin');
    Route::get('files', 'views\admin\AdminController@files')->name('admin.files');
    Route::get('logout', 'views\admin\AuthController@logout')->name('admin.logout');
    Route::post('password', 'views\admin\AuthController@password')->name('admin.password');
    Route::get('settings', 'views\admin\SettingController@show')->name('admin.settings');
    Route::post('settings', 'views\admin\SettingController@update')->name('admin.settings.update');

    Route::resource('users', 'views\admin\UserController');
    Route::resource('pages', 'views\admin\PageController');
    Route::resource('posts', 'views\admin\PostController');
    Route::resource('losts', 'views\admin\LostController');
    Route::resource('modules', 'views\admin\ModuleController');


});
