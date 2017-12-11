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
    return view('login');
});

Route::get('sign-in', 'Backend\AuthController@index');
Route::post('sign-in', 'Backend\AuthController@login')->name('sign-in');
Route::prefix('admin')->middleware('authMiddleware')->group(function () {
    Route::get('/','Backend\ControlPanelController@index')->name('controlPanel');
    Route::get('/logout','Backend\AuthController@logout')->name('sign-out');
    //generate api token
    Route::prefix('api-token')->group(function () {
        Route::get('/', 'Backend\GenerateTokenController@index')->name('api-token');
        Route::get('generate-api-token', 'Backend\GenerateTokenController@apiToken')->name('generate-api-token');
    });
});
