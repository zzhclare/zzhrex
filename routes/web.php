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

Route::get('/', 'IndexController@index');

Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@Login');

Route::group(['middleware' => ['auth']], function (){

    Route::get('/management', 'ManagementController@index');
    
    Route::get('/label', 'LabelController@index');

    Route::post('/label/save', 'LabelController@save');

    Route::get('/publish', 'ArticleController@create');

    Route::post('/publish/save', 'ArticleController@saveArticle');

    Route::get('/article/{id}', 'ArticleController@index');

});
