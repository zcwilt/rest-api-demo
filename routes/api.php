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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('country', 'Api\CountryController');
Route::delete('country', 'Api\CountryController@destroyByQuery');
Route::put('country', 'Api\CountryController@updateByQuery');

Route::resource('user', 'Api\UserController');
Route::delete('user', 'Api\UserController@destroyByQuery');
Route::put('user', 'Api\UserController@updateByQuery');

Route::resource('post', 'Api\PostController');
Route::delete('post', 'Api\PostController@destroyByQuery');
Route::put('post', 'Api\PostController@updateByQuery');

Route::resource('comment', 'Api\CommentController');
Route::delete('comment', 'Api\CommentController@destroyByQuery');
Route::put('comment', 'Api\CommentController@updateByQuery');

