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

Route::get('/login', function () {
    return view('todo/login');
});

Route::get('/register', function () {
    return view('todo/register');
});


/**
 * Task Routes
 */
Route::group(['prefix' => 'tasks'], fn() => [
    Route::get('/', 'TaskController@index'),
    Route::post('/', 'TaskController@store'),
    Route::get('/{task}', 'TaskController@show'),
    Route::put('/{task}', 'TaskController@update'),
    Route::delete('/{task}', 'TaskController@destroy')
]);

/**
 * Task Routes
 */
Route::group(['prefix' => 'auth'], fn() => [
    Route::post('/login', 'TaskController@index'),
    Route::post('/register', 'TaskController@post')
]);
