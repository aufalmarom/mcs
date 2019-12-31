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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('backend.manager.dashboard');
})->name('dashboard');
Auth::routes([
    'register' =>false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'manager', 'namespace' => '\App\Http\Controllers\Manager', 'middleware' => 'manager'], function () {

    });
    Route::group(['prefix' => 'verificator', 'namespace' => '\App\Http\Controllers\Verificator', 'middleware' => 'verificator'], function () {

    });
    Route::group(['prefix' => 'user', 'namespace' => '\App\Http\Controllers\User', 'middleware' => 'user'], function () {

    });
});
