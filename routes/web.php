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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'uscs', 'namespace' => 'Admin'], function () {

    Route::get('/classes', 'ClassesController@index');
    Route::post('/classes/create', 'ClassesController@create');

    Route::get('/students', 'StudentController@index');
    Route::post('/students/create', 'StudentController@create');
});


