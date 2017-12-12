<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v1')->group(function () {
    /**
     * country
     */
    Route::prefix('/country')->group(function () {
        /**
         * method=get
         * get all country
         * path=/country
         * @param api-token
         */
        Route::get('/','Backend\CountryController@index');
    });
    /**
     * topic
     */
        Route::prefix('/topic')->group(function () {
            /**
             * method=get
             * get all topic
             * path=/topic
             * @param api-token
             */
            Route::get('/','Backend\TopicController@index');
        });
        /**
          * ablum
          */
       Route::prefix('/album')->group(function () {
          /**
           * method=get
           * get all album
           * path=/album
           * @param api-token
           */
         Route::get('/','Backend\AlbumController@index');
     });
           Route::prefix('/song')->group(function () {
               /**
                * method=get
                * get all song
                * path=/song
                * @param api-token
                */
               Route::get('/','Backend\SongController@index');
           });

});