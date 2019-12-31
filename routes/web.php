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


Auth::routes([
    'register' =>false,
]);

Route::get('/', 'HomeController@index')->name('landingpage');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'manager', 'namespace' => '\App\Http\Controllers\Manager', 'middleware' => 'manager'], function () {
        Route::get('/dashboard', 'ManagerController@ReadDashboard')->name('dashboard');
    });
    Route::group(['prefix' => 'verificator', 'namespace' => '\App\Http\Controllers\Verificator', 'middleware' => 'verificator'], function () {

    });
    Route::group(['prefix' => 'user', 'namespace' => '\App\Http\Controllers\User', 'middleware' => 'user'], function () {

    });
});

