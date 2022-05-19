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


Auth::routes();

Route::resource('/', 'Admin\PostController');

// Route::middleware('auth')
// ->namespace('admin')
// ->prefix('admin')
// ->group(function () {
//     Route::resource('/', 'PostController');
// });

// Route::get('/', 'HomeController@index')
// ->name('home');
