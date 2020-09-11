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

/**
 * Task Routes
 */
Route::group(['prefix' => 'tasks'], fn() => [
    Route::resource('/', 'TaskController@index'),
    Route::resource('/', 'TaskController@store'),
    Route::resource('/{task}', 'TaskController@show'),
    Route::resource('/{task}/edit', 'TaskController@update'),
    Route::resource('/{task}', 'TaskController@destroy')
]);

/**
 * Auth Routes
 */
Route::group(['prefix' => 'auth'], fn() => [
    Route::post('/login', 'AuthController@index'),
    Route::post('/register', 'AuthController@post')
]);
