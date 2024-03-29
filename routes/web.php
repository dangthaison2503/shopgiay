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

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function() {
    Route::get('/', ['as' => 'admin-index', 'uses' => 'CategoryController@getIndexAdmin']);

    Route::group(['prefix' => 'danh-muc'], function () {

        Route::get("them", ['as' => 'themdanhmuc', 'uses' => 'CategoryController@getAddCate']);

        Route::post("them", ['as' => 'themdanhmuc', 'uses' => 'CategoryController@postAddCate']);
    });
});